# Database

    Data is a collection of a distinct small unit of information. It can be used in a variety of forms like text, numbers, media, bytes, etc. it can be stored in pieces of paper or electronic memory, etc.

    A database is an organized collection of data, so that it can be easily accessed and managed.

## Difference between SQL and NoSQL

    When it comes to choosing a database the biggest decisions is picking a relational (SQL) or non-relational (NoSQL) data structure. While both the databases are viable options still there are certain key differences between the two that users must keep in mind when making a decision. 

    SQL:
        1. RELATIONAL DATABASE MANAGEMENT SYSTEM (RDBMS)
        2. These databases have fixed or static or predefined schema
        3. These databases are not suited for hierarchical data storage.
        4. These databases are best suited for complex queries
        5. Vertically Scalable
        6. Follows ACID property

    NoSQL:
        1. Non-relational or distributed database system.
        2. They have dynamic schema
        3. These databases are best suited for hierarchical data storage.
        4. These databases are not so good for complex queries
        5. Horizontally scalable
        6. Follows CAP(consistency, availability, partition tolerance)

## SQL vs NoSQL: Which one is better to use?

    Both SQL and NoSQL databases serve the same purpose i.e. storing data but they go about it in vastly different ways. There are multiple differences between the SQL and NoSQL databases and it is important to understand them in order to make an informed choice about the type of database required.

    Keeping that in mind, some of the important differences between the SQL and NoSQL databases are given as follows:

    1. Language:
        Let’s imagine that in the database world, everyone speaks X Language. So it would be quite confusing if you started speaking Y language in the middle of that. This is the case with SQL databases. The SQL databases manipulate the data based on SQL which is one of the most versatile and widely-used language options available. While this makes it a safe choice especially for complex queries, it can also be restrictive. This is because it requires the use of predefined schemas to determine the structure of data before you work with it and changing the structure can be quite confusing (like using Y language).

        Now again imagine a database world where multiple languages like are spoken. While this world would be a little chaotic, speaking Y language would be fine because you would be sure to find a fellow idiot! This is a NoSQL database that has a dynamic schema for unstructured data. Here, data is stored in many ways which means it can be document-oriented, column-oriented, graph-based, etc. This flexibility means that documents can be created without having a defined structure and so each document can have its own unique structure.

    2. Scalability
        Think about a tall building in your neighborhood. If given the option, would it be better to add more floors in this building or create a new building entirely for more residents?

        This is the problem for SQL and NoSQL databases. SQL databases are vertically scalable. This means that the load on a single server can be increased by increasing things like RAM, CPU, or SSD. (More floors can be added to this building). On the other hand, NoSQL databases are horizontally scalable. This means that more traffic can be handled by sharding, or adding more servers in your NoSQL database. (More buildings can be added to the neighborhood).

        In the long run, it is better to add more buildings than floors as that is more stable (Less chance of creating a Leaning Tower of Pisa!!!). Thus, NoSQL can ultimately become larger and more powerful, making NoSQL databases the preferred choice for large or ever-changing data sets.

    3. Schema Design
        A schema refers to the blueprint of a database i.e how the data is organized. The schema of an SQL database and a NoSQL database is markedly different. Let’s use a joke to better understand this.

    NoSQL-Meme
        This basically means that the poor database admins couldn’t find a table in NoSQL because there is no standard schema definition for NoSQL databases. They are either key-value pairs, document-based, graph databases or wide-column stores depending on the requirements. On the other hand, if those database admins had gone to a SQL bar, they certainly would have found tables as SQL databases have a table-based schema.

        This difference in schema makes relational SQL databases a better option for applications that require multi-row transactions such as an accounting system or for legacy systems that were built for a relational structure. However, NoSQL databases are much better suited for big data as flexibility is an important requirement which is fulfilled by their dynamic schema.

    4. Community
        SQL is a mature technology(Like your old but very wise Uncle) and there are many experienced developers who understand it. Also, great support is available for all SQL databases from their vendors. There are even a lot of independent consultants who can help with the SQL database for very large scale deployments.

        On the other hand, NoSQL is comparatively new(The young and Fun Cousin!) and so some NoSQL databases are reliant on community support. Also, only limited outside experts are available for setting up and deploying large scale NoSQL deployments.

## Is NoSQL faster than SQL?

    In general, NoSQL is not faster than SQL just as SQL is not faster than NoSQL. For those that didn’t get that statement, it means that speed as a factor for SQL and NoSQL databases depends on the context.

    SQL databases are normalized databases where the data is broken down into various logical tables to avoid data redundancy and data duplication. In this scenario, SQL databases are faster than their NoSQL counterparts for joins, queries, updates, etc.

    On the other hand, NoSQL databases are specifically designed for unstructured data which can be document-oriented, column-oriented, graph-based, etc. In this case, a particular data entity is stored together and not partitioned. So performing read or write operations on a single data entity is faster for NoSQL databases as compared to SQL databases.

## Is NoSQL better for Big Data Applications?

    They say “Necessity is the Mother of Invention!” and that certainly turned out to be true in the case of NoSQL. The NoSQL databases for big data were specifically developed by the top internet companies such as Google, Yahoo, Amazon, etc. as the existing relational databases were not able to cope with the increasing data processing requirements.

    NoSQL databases have a dynamic schema that is much better suited for big data as flexibility is an important requirement. Also, large amounts of analytical data can be stored in NoSQL databases for predictive analysis. An example of this is data from various social media sites such as Instagram, Twitter, Facebook, etc. NoSQL databases are horizontally scalable and can ultimately become larger and more powerful if required. All of this makes NoSQL databases the preferred choice for big data applications.

## Diiference between MySQL vs MongoDB

    MySQL:  
        -> More Mature
        -> Table Structure
        -> Require a Schema
        -> Great with Relationships
        -> Scales Vertically

    MongoDB:
        -> Shiny and New
        -> Document Structure
        -> More Flexible to Changes
        -> Not Great with Complex Relationships
        -> Horizontally Scalable

## How to use GUI mode of mysql and mongoDB database?

    For MySQL   : use 'phpmyadmin in xampp server'
    For MongoDB : use 'Robo 3T application'

## SQL Command CRUD Opration

    Create Database:
        CREATE DATABASE databaseName;

    Create Table:
        CREATE TABLE tableName(
            id INT NOT NULL,
            name VARCHAR(255),
            price MONEY,
            PRIMARY KEY (id)
        );

    Insert Table:
        INSERT INTO tableName('id','name','price') 
        VALUES (1,'foo',20.50);

    Read table:
        SELECT * FROM tableName;
        SELECT * FROM tableName 
        WHERE id=1;

    Update Table:
        UPDATE tableName 
        SET price = 30.03 
        WHERE id = 2;

    Alter Table: => add,delete column of table
        ALTER TABLE tableName
        ADD quantity INT NOT NULL;

    Delete Table:
        DELETE FROM tableName
        WHERE conditions;

    Relation Between two tables [ primary key & foreign key]:
        CREATE TABLE tableName(
            id INT NOT NULL,
            name VARCHAR(255),
            another_table_id_1 INT,
            another_table_id_2 INT,
            PRIMARY KEY(id),
            FOREIGN KEY (another_table_id_1) REFERENCE another_table_1(id),
            FOREIGN KEY (another_table_id_2) REFERENCE another_table_2(id)
        )
        Exapmle;
            CREATE TABLE order(
                id INT NOT NULL,
                name VARCHAR(255),
                customer_id INT,
                product_id INT,
                PRIMARY KEY(id),
                FOREIGN KEY (customer_id) REFERENCE customer(id),
                FOREIGN KEY (product_id) REFERENCE product(id)
            )
        
    Inner Join:
        SELECT * FROM tableName_2 
        INNER JOIN tableName_1 ON tableName_2.foreign_key = tableName_1.primary_key

        Example:
            SELECT order.name, customer.name, product.name FROM order
            INNER JOIN customer ON order.customer_id = customer.id
            INNER JOIN product ON order.product_id = product.id

## MongoDB

    Install on windows 10
        Download .msi file of mongoDB

    Set the PATH of mongoDB bin file to PATH.envirnment
        C:\Program Files\MongoDB\Server\4.0\bin

## mongo --version

## mongod 
    This command is use for run the mongo database in certern port.

    step 1: Make a folder 'data' in c-drive
    step 2: cd to data
    step 3: make a folder db
    step 4: $ mongod

    NOTE: it has an error of shut down, if ther is no folder structure of data folder

## mongo shell
    This command is use for command line operation perform.

## How to show all databases in mongoDB in command line?

    $ mongo shell [ Enter ]
    > show dbs

## How to create a database?

    > use databaseName

## How to check all collections in database?

    > use databaseName
    > show collections

## How to delete a database?

    > use databaseName
    > db.dropDatabase()

## How to know about which db we currently use?

    > db
    
## CRUD opration on mongoDB?

    collection is like table name of database
### Create:
        syntax: 
            db.collection.insertOne()
            db.collection.insertMany()

        Example:
            db.users.insertOne({
                name:'sue',
                age: 26,
                status: 'pending'
            })

### Read:
        syntax: 
            db.collection.find( {query},{projection} )
            
            query:  Optional. Specifies selection filter using query operators. To return all documents in a collection, omit this parameter or pass an empty document ({}).
            projection: Optional. Specifies the fields to return in the documents that match the query filter. To return all fields in the matching documents, omit this parameter. For details, see Projection.

        For all data display:
            db.collection.find()

        Example:
            db.users.find(
                {
                    price:{$gt:1}           // greater than 1
                    },
                {_id:0, name:1, address:1}      // 0 means not show and 1 means show the key:value
                )

       Note: How to projection a perticular field of data and others are supressed. use second parameter with document name and value is 1 or 0, 1 means show and 0 means hide to output like above example.

### Update:

    There are two type of update like 'put' or 'patch'

    - put update means update entire data of object
    - patch update means update some data from object, to achicve that use $set flag

        syntax:
            db.collection.updateOne( query, update with atomic oprator)
            db.collection.updateMany()
            db.collection.replaceOne()

        Example:
            db.products.update(
                {
                    _id:1
                },
                {
                    $set:{     // $set is a atomic oprator for set the value, $ is mandatory
                        price:3,
                        stock:15
                    }
                }
            )

### Delete:
        syntax:
            db.collection.deleteOne()
            db.collection.deleteMany()

        Example:
            db.products.deleteOne(
                {
                    _id:3
                }
            )
    
### RelationShips in MongoDB
    
    There are two types of relationship in data
        1. one table/document data have multiple array like relations


        Example:
            db.products.insertOne(
                {
                    _id:3,
                    name:'Rubber',
                    price: 4.0,
                    stock: 40,
                    review: [
                        {
                            name: 'arjun',
                            rating: '5 star'
                        },
                        {
                            name: 'partha',
                            rating: '5 star'
                        }
                    ]
                }
            )

        2. store of uniqe number/id in an array for one relation like:

            document1:
                {
                    _id:1,
                    name: 'pen',
                    price: 2.0
                }

            document2:
                {
                    _id: 2,
                    name: 'pencil',
                    price: 1.5
                }
            
            document3:
                {
                    orderNo: 1234,
                    processOfOrder: [ 1,2 ]         // store different ids in an array
                }

## Mongoose

    Mongoose is a MongoDB object modeling tool designed to work in an asynchronous environment. Mongoose supports both promises and callbacks.

### install mongoose module

    $ npm install mongoose

### Import mongoose module

    const mongoose = require('mongoose')

    NOTE: Before we can use mongoose module, make sure mongod server is running.

### How to connect the mongoose with database?

    const databaseName = "fruitsDB"
    const url = "mongodb://localhost:27017/"+databaseName       // if database is not exist then create autometically
    mongoose.connect(url, , {useNewUrlParser:true})

### ### How to close the connection with mongoose database?

    After all opration id complete, we must use:

        mongoose.connection.close();

### Create a Schema for our database:

    const fruitSchema = new mongoose.Schema(
        {
            name: String,
            rating: Number,
            review: String
        }
    )

    NOTE: use Schema() to each document how data can be store

### Create a model/docement for our database:

    Syntax:
        const variableName = mongoose.model('documentName', schemaVariableName)

        NOTE: documentName muse be singular form because the mongoose changes them to prular form like we can write code 
        fruit but database document name is fruits
        person but database document name is people
    Example:
        const fruitModel = mongoose.model('Fruit', fruitSchema)

### how to one data insert?

    const fruitData = new fruitModel(
        {
            name: 'apple',
            rating: 7,
            review: 'good'
        }
    )

    fruitData.save()

### how to more than one data insert?

    Create more than one data:
        const fruitData_1 = new fruitModel(
            {
                name: 'apple_1',
                rating: 7,
                review: 'good'
            }
        )
        const fruitData_2 = new fruitModel(
            {
                name: 'apple_2',
                rating: 7,
                review: 'good'
            }
        )
        const fruitData_3 = new fruitModel(
            {
                name: 'apple_3',
                rating: 7,
                review: 'good'
            }
        )

    Call insertMany() of model to insert more than one data and that datas are inside the array format

        let arrayName = [fruitData_1,fruitData_1,fruitData_1]
        fruitModel.insertMany( arrayName , (err)=>{
            if(err){
                res.json( {error: err} )
            }else{
                console.log('success')
            }
        })

    NOTE: callback function is mandatory for excute out code for database
### Read

    modelName.find( (errorVariable,returnVariable)=>{           it return array of objects
        //code
    } )
    modelName.findOne( {'condition'}, (errorVariable,returnVariable)=>{        it return only one data of object
        //code
    } )

    Example:
        fruitModel.find( (err,fruits)=>{
            if(err) 
                res.json( {error: err} )
            else
                console.log(fruits)
        })

### Data Validatuion

    Mongoose has several built-in validators
    Syntax:
        const Schema = mongoose.Schema(
            {
                string_key : {
                    type: String,
                    required: [true, 'error Message']
                } ,
                number_key : {
                    type: Number,
                    min: lowest_number,
                    max: highest_number
                }
            }
        )

    0. type key for data type

    1. required key

    2. Numbers
        min, max

    3. Strings
        enum, match, minLength, and maxLength

    Example:    
        const fruitSchema = mongoose.Schema(
            {
                // schema validation
                name: {
                    type: String,
                    required: [true, 'Name is empty']
                },
                rating: {
                    type:Number,
                    default: 5,
                    min: 1,
                    max: 10
                },
                review: {
                    type: String
                }
            }
        )

### Update
        Model.update()
        Model.updateOne()
        Model.updateMany()
        Model.findOneAndUpdate( {condition}, {updates}, (err,result)=>{
            //code
        })
        Model.findOneAndUpdate( 
            {condition}, 
            {$pull: {_id:value}}, 
            (err,result)=>{
            //code
        })

        Syntax:
            Model.updateOne( condition, set the data, callback function)

        Example:
            fruitModel.updateOne(
                //condition
                {
                    rating:6
                },
                // data set
                {
                    name: 'Cucumber'
                },
                // callback function
                (err) =>{
                    if(err)
                        res.json( {error: err} )
                    else
                        console.log('Successfully update!')
                }
            )


### Delete
        Model.deleteOne()
        Model.deleteMany()
        Model.findByIdAndRemove('id number', (err)=>{
            // code
        })

        Syntax:
            Model.updateOne( condition, callback function)

        Example:
            fruitModel.deleteOne(
                //condition
                {
                    name: 'Cucumber'
                },
                (err)=>{
                    if(err) res.json( {error: err} )
                    else console.log('1 record deleted!');
                }
            )

            Person.deleteMany(
                //condition
                {
                    name: 'Arjun'
                },
                (err)=>{
                    if(err) res.json( {error: err} )
                    else console.log('All records deleted having name arjun!');
                }
            )

### Search from documets

    Example:
        fruitModel.find( {
            // here $or is a oprator that find between array of collection fields
            "$or":[
                { "field_1":{$regex:req.params.key}},
                { "field_2":{$regex:req.params.key}},
                { "field_3":{$regex:req.params.key}},
            ]
        }, (err,fruits)=>{
            if(err) 
                res.json( {error: err} )
            else
                console.log(fruits)
        })

### Establishing Relationships and Embedding Documents using Mongoose

    This relasionship use/embedd one collection of data is assign to another collection data in terms of Object. like

    const pinapple = new fruitModel(        // make a fruit data
        {
            name: 'Pinapple',
            rating: 8,
            review: 'Better'
        }
    )
    pinapple.save()                         // store to the database

    const personSchema = mongoose.Schema(
        {
            name: {
                type: String,
                required: [true, 'Name must be fill']
            },
            age: {
                type: Number,
                min: 18,
                max: 60
            },
            favoriteFruit: fruitSchema      // Asign fruit schema for store fruit data relation between person and fruit
        }
    )
    const Person = mongoose.model('Person',personSchema)
    const personData = new Person(
        {
            name:'Arjun',
            age:27,
            favoriteFruit: pinapple         // assign fruit data in key
        }
    )
    if(personData.save()){
        console.log('data insert successfully')
    }

## MongoDB Atlas: to Deploy Web Apps with a Database

    1. Create a free account on mongodb Atlas account

    2. Once a cluster/account is create then we are gonong to add users in sequrity tab

    3. Add ip address in IP Whitelist tab of sequrity tab.
        choose: allow access from any where

    4. Connect to cluster using coonect buttton on Overview tab.

        Choose: connect with mongoshell or
                connect with aplication

    5. Use collection button on cluster overview tab
            create new document/collections/data insert/modify

    6. Click Connect button and choose connect your application for connection then it gives you a url and use that url for connect, 
    you can copy the url and paste it in app.js mongoose.connect(url/database)
    mention user and password for authetication.

## Other Mongoose Query

    count()
        It is used to count the number of documents in a collection.
        syntax:
            modelDatabaseName.find({}).count().exec( (err,result)=>{} )
    
    sort()
        It is used to sort the documents in a collection.
            // ascending order
                modelDatabaseName.find({}).sort("age name").exec( (err,result)=>{} )  
            // descending order
                modelDatabaseName.find({}).sort("-age -name").exec( (err,result)=>{} )  
    limit()
        It is used to specify the number or a maximum number of documents to return from a query.
        syntax:
            modelDatabaseName.find({}).limit(5).exec( (err,result)=>{} )

    skip()
        The skip() method is used to specify the number of documents to skip. When a query is made and the query result is returned, the skip() method will skip the first n documents specified and return the remaining.
        syntax:
            modelDatabaseName.find({}).limit(4).skip(5).exec( (err,result)=>{} )

    distinct()
        the distinct() method finds the distinct values for a given field across a single collection and returns the results in an array.
        Syntax:
            modelDatabaseName.find({}).distinct("name").exec( (err,result)=>{} )
        NOTE: Only returns Distinct Values in an Array

## Mongoose Query Populate 

    Population is the process of automatically replacing the specified paths in the document with document(s) from other collection(s). More than two collection store only object id of their data and use populate() method to recive all data in one [ like join in SQL ]

    - Step 1: Need to change in schema for make relation between two collections

        const newDataSchema = new mongoose.Schema(
            {
                fileds_1: {
                    type: String,
                    required: true
                },
                storeOtherCollectionId: [
                    {
                        type: mongoose.Schema.Types.ObjectId,
                        ref: collection name for reference      // make sure ref collection name, not model name
                    }
                ]
            }
        )

    - Step 2: Store reference object id in that array using $push flag

    - Step 3: Now use populate('field') method to populate query in one object

        ModelName.find()
        .populate('storeOtherCollectionId_1')
        .populate('storeOtherCollectionId_2')

    