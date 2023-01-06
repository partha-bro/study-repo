# MERN

## MongoDB, Express, React, Node

## Server - Node JS
- MVC Architecher
    - models
    - views => react production build
        => set static folder to views
    - controllers
- Router
    Router has all middleware use like cors
    Here router(express.json()) use for work with json format
- External module
    - cors
    - dotenv
    - express
    - mongoose
    - express-async-errors
    - http-status-codes
    - jsonwebtoken

## Client - React JS
- React-router-dom
- bootstrap
- axios
- useEffect() Hooks
- useParams() Hooks
- useState() Hooks
    - setState() 
        - it method always return initial state value format
        - it contains argument of previous state value
- form input onChange method having
    ```
    const getInput = (e) => {       // e is a event object
    setInput( {                     // return new state value
            ...input,               // spead op of preveous state value
            [e.target.name]: e.target.value     // fetch dynamic value of e.target.name
        }
      )
    }
    ```
- { [key]:value } => if we use without [], it takes key as a key, but in [key] it takes dynamic value of key
- spread oprator
- Higher Order Function

## How to Setup a perfect MERN project? 

#### Node
- Step 1: Create a file, where you initial your project [ server.js/app.js ]

- Step 2: $ npm init -y

- Step 3: Edit package.json for 'npm start' and 'npm run dev' in script key

- Step 4: Create .env and .gitignore file and Edit it

#### GIT
- Step 5: Now git init for git local repo

#### Node
- Step 6: install your package for project $ npm install <packageName>

#### MVC
- Step 7: use MVC + Router + middleware architechture

#### Router
- Step 8: In Router use shortHand for routes
    - app.use('/api/v1/tasks',tasksRouter)
    - tasksRouter.route('/:id').get(getTask).patch(updateTask).delete(deleteTask)

#### Server.js/app.js
- Step 9: 
    - Always use a function to connect mongo using async and try-catch block,
    - if it success then call app.listen() for run server.

#### mongoose.Schema
- Step 10: 
    - When you create/define a schema of model then use validator optionslike: 
    ```
    const taskSchema = new mongoose.Schema(
        {
            name: {
                type: String,
                required: [true, 'must provide name'],
                trim: true,
                maxlength: 20
            },
            price:{
                type: Number,
                required: [true, 'price name must be provided']
            },
            fetured: {
                type: Boolean,
                default: false
            },
            rating: {
                type: Number,
                default: 4.5
            },
            createdAt: {
                type: Date,
                default: Date.now()
            },
            company: {
                type: String,
                enum: {
                        values: ['ikea','liddy','caressa','marcos'],
                        message: '{VALUE} is not supported'
                    }
                // so then you will create an enum for it so that if someone tries to enter some other value apart from these two values, db will throw an error.
            }
        }
    ) 
    ```

#### REST_API
- Step 11: 
    - Inside REST-API always use async with find method because it always return null or json 
    - we can use null in if condition for controller our json 
    ```
        Eg: const deleteTask = async (req,res) => {
                try {
                    const task = await TasksDB.findOneAndDelete({_id:req.params.id})
                    if(!task){
                        return res.status(404).json({'message':`No Task Deleted with Id : ${req.params.id}`})
                    }
                    res.status(200).json({task})
                } catch (error) {
                    res.status(500).json({'message':error})
                }
            }
    ```

#### CRUD
- Step 12: 
    - Use proper mongoose default method for CRUD
        - Create  : create()
        - Read    : find() for array and findOne() for one item
        - Update  : findOneAndUpdate()
        - Delete  : findOneAndDelete()

#### Update Method
- Step 13: 
    - Always use some flag for proper use mongoose methods like:
    ```
        const task = await TasksDB.findOneAndUpdate({_id:req.params.id},req.body, {
                        new: true,
                        runValidators: true
                    })
    ```
    - Here new flag is use for always return new data, why? 
    - A-> when we update anything then it return old data
            runvalidators is use for when it update new data always check schema validation, why? 
    - A-> it default,when create new data then use schema validator but when it update then it won't do it.  

#### Search opration & sort opration & select custom fields & paggination use limit and skip
- Step 13.1: 
    ```
    const searchProducts = async (req,res) => {
        // this is use for filter the database with selected query
        const { featured,company,name,sort,fields } = req.query
        const queryObject = {}

        if(featured){
            queryObject.featured = (featured === 'true') ? true : false
        }
        if(company){
            queryObject.company = company
        }
        if(name){
            queryObject.name = { $regex: name, $options: 'i' }      // we can use simple name value but it has return value when
                                                                    // the value exact same with database or empty return
                                                                    // so we use regular expression for partial match
        }

        // console.log(typeof featured, queryObject)
        let result = ProductDB.find(queryObject)    // not use async keyword because we want to return promises not data as of now

        // sort op
        if(sort){
            // sorting some value, find().sort('name -price'), Here all the arguments in space with positive[assending] and negative symbol[desending]
            const sortList = sort.split(',').join(' ')              
            result = result.sort(sortList)
        }else{
            result = result.sort('createdAt')
        }

        // selected field op
        if(fields){
            const selectList = fields.split(',').join(' ')              
            result = result.select(selectList)
        }else{
            result = result
        }

        // use limit like page
        const page = Number(req.query.page) || 1
        const limit = Number(req.query.limit) || 10
        const skip = (page -1) * limit

        result = result.skip(skip).limit(limit)

        const products = await result
        if(!products) throw new Error('find error in DB')
        res.status(200).json({nbHits: products.length, products})
    }
    ```

#### Error Page middleware
- Step 14: setup error middleware for non valid routes
    ```
    const notFound = (req,res,next) => {
            res.status(404).send('route not Found')
            next()
        }

        module.exports = notFound
    // import this middleware file to app/server js file   
    app.use(notFound)
    ```

#### Common try catch handle middleware
- Step 15: In Controller, we use all try and catch in all DB methods wo we create a middleware
    ```
    const asyncWrapper = (fn) => {
        return async (req,res,next) => {
            try{
                await fn(req,res,next)
            }catch(error){
                next(error)
            }
        }
    }

    module.exports = asyncWrapper

    const getAllTasks = asyncWrapper( async (req,res)=>{
            const tasks = await TasksDB.find({},{_id:1,name:1,completed:1})
            res.status(200).json({tasks})
        }
    )
    ```

- NOTE: You can use custom error handler like above asyncWrapper() with try catch or use express-async-errors

#### Error Handler middleware
- Step 16: make a middleware of error handler and use it in last of app.
    ```
    js/server.js
        Here use next for error pass to middleware and create a object of error with message
        - const getTask = asyncWrapper(  async (req,res,next) => {
                    const task = await TasksDB.findById(req.params.id)
                    if(!task){
                        const error = new Error('Not Found')
                        error.status = 404
                        return next(error)
                    }
                    res.status(200).json({task})
                }
            )
    ```

<hr/>

#### express-async-errors module
- we can use express-async-errors use to handle async error without use try catch block
- [ This is use to avoid next() and try catch block in routes, only throw new Error() use to catch error]
    ```
        eg: app.use(async (req, res) => {
                const user = await User.findByToken(req.get('authorization'));
                
                if (!user) throw Error("access denied");
            });
        
        here we can catch that error using err argument
        - const errorHandler = (err,req,res,next) => {
            return res.status(err.status).json({status:err.status,msg:err.message})
        }

        module.exports = errorHandler

        here use that middleware in last of every middleware
        - app.use(errorHandler)
    ```

    - Must use custom error with class 
        ```
        // Controller
        const login = (req,res) => {
                const {username,password} = req.body

                if(!username || !password){
                    throw new CustomAPIError('Please provide email and password', 400)
                }
                res.send(`Fake Login from ${req.body}`)
            }
        
        // here we can catch that error using err argument
        - const CustomAPIError = require('../errors/custom-error')

            const errorHandler = (err,req,res,next) => {
                
                if(err instanceof CustomAPIError) {
                    return res.status(err.statusCode).json({msg: err.message})
                }
            }

            module.exports = errorHandler

        // custom class define
            class CustomAPIError extends Error {
                constructor(message, statusCode) {
                        super(message)
                        this.statusCode = statusCode
                    }
                }

                module.exports = CustomAPIError

        // here use that middleware in last of every middleware
        - app.use(errorHandler)
    ```
    - NOTE: Why we use custom class error because in throw new Error('message'), we can send only message 
        but in custom we can send different keys and values

#### JWT setup

    JWT: Json Web Token
        It is an open standard (RFC 7519) that defines a compact and self-contained way for securely transmitting information between parties as a JSON object. 
        This information can be verified and trusted because it is digitally signed.

    It takes three part for create token
        - Header
            The header typically consists of two parts: the type of the token, which is JWT, and the signing algorithm being used, such as HMAC SHA256 or RSA.
                {
                "alg": "HS256",
                "typ": "JWT"
                }

        - Payload
            The second part of the token is the payload, which contains statements about an entity (typically, the user) and additional data.
                {
                "sub": "1234567890",
                "name": "John Doe",
                "admin": true
                }

        - Signature
            To create the signature part you have to take the encoded header, the encoded payload, a secret, the algorithm specified in the header, and sign that.
            For example if you want to use the HMAC SHA256 algorithm, the signature will be created in the following way:
                HMACSHA256(
                    base64UrlEncode(header) + "." +
                    base64UrlEncode(payload),
                    secret)
- Use
    - Install
        npm i jsonwebtoken
    - Import
        const jwt = require('jsonwebtoken')
    - Use
        const token = jwt.sign({payload},jwt secret long string,{options link expiresIn:'30d'})

    NOTE: when we hit api of authentication token then we use axios below option and access in backend controller with req.headers.Authorization 
    ```
    {
        headers: {
                Authorization: `Bearer ${token}`,
            }
    }
    ```

- Step 16: 
    - Check username, password in post(login) request
    - if exist create new JWT 
    - else send back to front-end
    - setup authentication so only the request with JWT can access the dashboard

    ```
    // controller
        const jwt = require('jsonwebtoken')

        const login = (req,res) => {
            const {username,password} = req.body

            if(!username || !password){
                throw new CustomAPIError('Please provide email and password', 400)
            }

            const token = jwt.sign({id:1234567890,username},process.env.JWT_SECRET,{expiresIn:'30d'})
            res.send({msg: 'User created',token})
        }

        const dashboard = async (req,res) => {
            const authHeader = req.headers.authorization
            if(!authHeader || !authHeader.startsWith('Bearer ')){
                throw new CustomAPIError('No Token Provided', 401)
            }
            const token = authHeader.split(' ')[1]
            try{
                const decoded = jwt.verify(token,process.env.JWT_SECRET)
                const luckyNumber = Math.floor(Math.random()*100)
                res.status(200).json({msg:`Hello, ${decoded.username}`,secret:`Here is your authorized data, your lucky number is ${luckyNumber}`})
            }catch(err){
                throw new CustomAPIError('Not authorized to access this route', 401)
            }
        }

    // auth middleware
    require('dotenv').config()
    const jwt = require('jsonwebtoken')
    const CustomAPIError = require('../errors/custom-error')

    const auth = async (req,res,next) => {
        const authHeader = req.headers.authorization
        if(!authHeader || !authHeader.startsWith('Bearer ')){
            throw new CustomAPIError('No Token Provided', 401)
        }
        const token = authHeader.split(' ')[1]
        try{
            const decoded = jwt.verify(token,process.env.JWT_SECRET)
            // const {id,username} = decoded
            res.user = {...decoded}
            next()
        }catch(err){
            throw new CustomAPIError('Not authorized to access this route', 401)
        }
    }

    module.exports = auth

    // router
    mainRouter.route('/dashboard').get(auth,dashboard)

    // client
    const token = localStorage.getItem('token')
        try {
            const { data } = await axios.get('/api/v1/dashboard', {
            headers: {
                Authorization: `Bearer ${token}`,
            },
    })
    ```