const express = require('express')
const bodyParser = require('body-parser')
const Wiki = require('./model/wikiModel.js')

const app = express()
app.use(bodyParser.urlencoded({extended:true}))

app.get('/', (req,res)=>{
    res.send('Build API')
})

// Chained Route Handlers Using Express for all articles
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
    
    // Wiki.deleteMany( (err)=>{
    //     if(err) 
    //             res.send(err)
    //     else 
                res.send('All data deleted successfully!')
    // })
})

// Chained Route Handlers Using Express for all specific articles
app.route('/articles/:articleTitle')
.get( (req,res)=>{
    Wiki.findOne({ title:req.params.articleTitle }, (err,found)=>{
        if(err) 
            res.send('Error:' +err)
        else 
            res.send(found)
    })
})
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
.patch( (req,res)=>{
    Wiki.updateOne(
        {title:req.params.articleTitle},
        { $set: req.body },
        (err) => {
            if(err)
                res.send(err)
            else    
                res.send('successfully patch data')
        }
    )
})
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

app.listen(process.env.PORT || 3000, ()=>{
    console.log('Server is running on 3000')
})