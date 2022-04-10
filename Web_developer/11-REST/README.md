# REST

    REpresentational State Transfer (REST) is an architectural style that defines a set of constraints to be used for creating web services. REST API is a way of accessing web services in a simple and flexible way without having any processing.

    All communication done via REST API uses only HTTP request. 

## REST Methods

    1. GET: The HTTP GET method is used to read (or retrieve) a representation of a resource. In the safe path, GET returns a representation in XML or JSON and an HTTP response code of 200 (OK). In an error case, it most often returns a 404 (NOT FOUND) or 400 (BAD REQUEST).  

    2. POST: The POST verb is most-often utilized to create new resources. In particular, it’s used to create subordinate resources. That is, subordinate to some other (e.g. parent) resource. On successful creation, return HTTP status 201, returning a Location header with a link to the newly-created resource with the 201 HTTP status. 
    NOTE: POST is neither safe nor idempotent. 
     
    3. PUT: It is used for updating the capabilities. However, PUT can also be used to create a resource in the case where the resource ID is chosen by the client instead of by the server. In other words, if the PUT is to a URI that contains the value of a non-existent resource ID. On successful update, return 200 (or 204 if not returning any content in the body) from a PUT. If using PUT for create, return HTTP status 201 on successful creation. PUT is not safe operation but it’s idempotent. 
     
    4. PATCH: It is used for modify capabilities. The PATCH request only needs to contain the changes to the resource, not the complete resource. This resembles PUT, but the body contains a set of instructions describing how a resource currently residing on the server should be modified to produce a new version. This means that the PATCH body should not just be a modified part of the resource, but in some kind of patch language like JSON Patch or XML Patch. PATCH is neither safe nor idempotent. 
     
    5. DELETE: It is used to delete a resource identified by a URI. On successful deletion, return HTTP status 200 (OK) along with a response body. 


## Opration

        Http Verbs   |   /api_parameter_all      |          /api_parameter_one_perticular
        ---------------------------------------------------------------------------------
        GET          |   Fetch all the data      |          fetch the perticular data
        POST         |   Create one new data     |                  -
        PUT          |           -               |          Updates the perticular data
        PATCH        |           -               |          Updates the perticular data
        DELETE       |   Delete all data         |          Delete perticular data

    NOTE: we use endpost for API is http://localhost:3000/articles/Nodejs
        But we can not use space in that url like http://localhost:3000/articles/Node Js
        Instead of use above space link always use below link with space encode symbol %20
        http://localhost:3000/articles/Node%20Js

    Questions: Difference Between PUT and PATCH Request ?
        PUT HTTP Request: PUT is a method of modifying resources where the client sends data that updates the entire resource. PUT is similar to POST in that it can create resources, but it does so when there is a defined URL wherein PUT replaces the entire resource if it exists or creates new if it does not exist.

        PATCH HTTP Request: Unlike PUT Request, PATCH does partial update e.g. Fields that need to be updated by the client, only that field is updated without modifying the other field.

## GET Method

    get() method + find() method

    Example:
        app.get('/articles', (req,res)=>{

            Wiki.find( (err,found)=>{
                if(err)
                    console.log(err)
                else
                    res.render('home', { wikiDatas:found })
            })
        })

## POST Method

    post() method + save()
    Example:
        app.post('/articles', (req,res)=>{

            const newArticle = new Wiki({
                title : req.body.title,
                content : req.body.content
            })

            newArticle.save( (err)=>{
                if(err)
                    res.send(err)
                else
                    res.send('Data successfully inserted.')     // send is mandatory for close the api resquest    
            })
        })

## DELETE Method

    delete() method + deleteMany( callbackFunction() ) // for entire record delete
    delete() method + deleteMany( {condition}, callbackFunction() )

    Example:    
        app.delete('/articles', (req,res)=>{
    
            Wiki.deleteMany( (err)=>{
                if(err) 
                    res.send(err)
                else 
                    res.send('All data deleted successfully!')
            })
        })

## Chained Route Handlers Using Express

    This chaining system is use to avoide single route using multiple methods like
    app.get('/articles', (req,res)=>{})
    app.post('/articles', (req,res)=>{})
    app.delete('/articles', (req,res)=>{})

    Use DRY code, so use chain system
        app.route('/').get().post().delete()

    Example:
        app.route('/articles')
        .get( (req,res)=>{
            Wiki.find( (err,found)=>{
                if(err)
                    console.log(err)
                else
                    res.send(found)
            })  
        })
        .post( (req,res)=>{
            const newArticle = new Wiki({
                title : req.body.title,
                content : req.body.content
            })
            newArticle.save( (err)=>{
                if(err)
                    res.send(err)
                else
                    res.send('Data successfully inserted.');
            })
        })
        .delete( (req,res)=>{
            
            Wiki.deleteMany( (err)=>{
                if(err) 
                    res.send(err)
                else 
                    res.send('All data deleted successfully!')
            })
        })

## GET a sepcific resource

    app.route().get() + findOne('condition', callBackFunction)

    Example:
        app.route('/articles/:postId')
        .get( (req,res)=>{
            const titleName = req.params.postId
            Wiki.findOne({title:titleName}, (err,found)=>{
                if(err) res.send(err)
                else res.send(found)
            })
        })

## PUT a specific resource and update entrire row

    app.route().put() + updateOne('condition',{'update'}, callBackFunction)

    Example:
    app.route('/articles/:articleTitle')
        .put( (req,res)=>{
        Wiki.updateOne(
            {title: req.params.articleTitle},
            {
                title: req.body.title,
                content: req.body.content
            
            },
            (err)=>{
                if(err)
                    res.send(err)
                else   
                    res.send('data successfully updated.')
            }
        )
    })

## PATCH a specific resource and update some data of specific row

    app.route().patch() + updateOne('condition',{ $set: {'update'} }, callBackFunction)

    Example:
    app.route('/articles/:articleTitle')
        .patch( (req,res)=>{
        Wiki.updateOne(
            {title:req.params.articleTitle},
            { $set: req.body },                 //here $set is a flag for set data and 
                                                //req.body means it contains a json object of browsers input data
            (err) => {
                if(err)
                    res.send(err)
                else    
                    res.send('successfully patch data')
            }
        )
    })
    
## DELETE a specific resource

    app.route().delete() + deleteOne('condition', callBackFunction)

    Example:
    app.route('/articles/:articleTitle')
        .delete( (req,res)=>{
        Wiki.deleteOne(
            {title:req.params.articleTitle},
            (err)=>{
                if(err){
                    res.send(err)
                }else{
                    res.send('delete '+ req.params.articleTitle +' article')
                }
            }
        )
    })
