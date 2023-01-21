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
    - BrowserRouter
    - Routes
    - Route
    - useParams
        - const { id } = useParams()
    - useSearchParams       // it is like fetch query of URL
        ```
            // URL: http://localhost:3000/api/v1/users/detail?name='arjun'&age=28
            const [searchParams,setSearchParams] = useSearchParams()
            const nameSearch = searchParams.get('name')
            const ageSearch = searchParams.get('age')

            // update value using setSearchParams({ age: 30})
            // reset value using setSearchParams({})
        ```
    - useNavigate
        ```
            const navigate = useNavigate()
            <button onClick={()=>navigate('home')}>Go Home</button>
            <button onClick={()=>navigate(-1)}>Go Back</button>
        ```
    - NavLink
    - Link
    - Question: what is the difference between Link and NavLink in react-router-dom?
        - A. The NavLink is used when you want to highlight a link as active. So, on every routing to a page, the link is highlighted according to the activeClassName . Link is for links that need no highlighting. And a is for external links.
        ```
            const navLinkStyles = ({ isActive }) => {       // isActive is a props for NalLink component
                return {
                    textDecoration: isActive ? 'none' : 'underline,
                    color: isActive ? 'red' : 'white,
                }
            }

            <NavLink to='/home' style={navLinkStyles} >Home</NavLink>
        ```
    - Nested route use by <Outlet /> component
        ```
        router App component
        <Route path='/products' element={<Products/>}>
            <Route element={<Features/>} />      // use index for default component render 
            <Route path='/features' element={<Features/>} />      // use index for default component render 
            <Route path='/new' element={<Products/>} />
        </Route>

        Products component
        <Link to='/features' >features</Link>
        <Link to='/new' >new</Link>
        <Outlet />
        ```

- bootstrap
- axios
- Hooks
    - useEffect() Hooks
    - useParams() Hooks
    - useRef() Hooks
        - It is use to manupulate dom and use uncontrolled way of form input field.
        - We can not use setState() in useEffect() hook, because it render infinite times, so avoid that we can use useRef()
        - use .current object to fetch that tag
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
    - Custom Hooks
        - 
        ```
            // custom hook || useFetch()
            import React, { useEffect, useState } from 'react'
            import axios from 'axios'

            const useFetch = (url) => {
                const [ data,setData ] = useState([])

                const fetchCall = async (url) => {
                    const response = await axios.get(url)
                    const jsonData = await response.data.users
                    setData(jsonData)
                }

                useEffect(
                    ()=>{
                        fetchCall(url)
                    },[]
                )

            return [data]       // this method always return destructure state
            }

            export default useFetch

            // use custom hook
            import useFetch from './path/useFetch'
            const [data or users] = useFetch('url link')
        ```
        
- { [key]:value } => if we use without [], it takes key as a key, but in [key] it takes dynamic value of key
- spread oprator
- Higher Order Function
- Events in JSX
    - onChange()
    - onClick()
    - onSubmit()
    - onCopy()
    - onPaste()
    - onDoubleClick()
    - onKeyPress()
        ```
            const handleKeyPress = (e) => {
                if(e.key === 'Enter') alert('enter key is press!')
            }
        ```
    - onKeyUp()
    - onKeyDown()

- React Lazy loading
    - React Lazy Load is an easy-to-use React component which helps you defer loading content in predictable way. It's fast, You can also use component inside scrolling container, such as div with scrollbar. It will be found automatically. 
    ```
        import React, { lazy,Suspense } from 'react'

        const MylazyLoading = lazy( ()=>import('./LazyLoading') )

        const Page4 = () => {
        return (
                <div>
                    <p>Lazy loading</p>
                    <Suspense fallback='Loading...'>
                        <MylazyLoading/>
                    </Suspense>
                </div>
            )
        }
    ```
- Loading...  
    - npm i react-loader-spinner
    - use
        ```
            import { Audio } from 'react-loader-spinner'
            ;<Audio
            height="80"
            width="80"
            radius="9"
            color="green"
            ariaLabel="loading"
            wrapperStyle
            wrapperClass
            />
        ```

- toasting
    - npm i react-toastify
    - use different methods
        toast('aleart')
        toast.success('success')
        toast.error('error')
        toast.warning('warning')
        toast.info('info')
        ```
             import React from 'react';

                import { ToastContainer, toast } from 'react-toastify';
                import 'react-toastify/dist/ReactToastify.css';
                
                function App(){
                    const notify = () => toast("Wow so easy!");     //

                    return (
                    <div>
                        <button onClick={notify}>Notify!</button>
                        <ToastContainer />          // Container component in top component or desire component
                    </div>
                    );
                }
        ```
- CSS
    - Flex Box
        It has two parts, one is container and item
        - container level style
            - display: flex;
            - flex-direction:   row [default-value]
                                row-reverse
                                column
                                column-reverse
            - flex-wrap:    nowrap [default-value]
                            wrap
                            wrap-reverse
            - flex-flow: use for short hand
                flex-flow: <flex-direction> <flex-wrap>
                flex-flow: row wrap
            - justify-content:  flex-start  [default]
                                flex-end    
                                center
                                space-around
                                space-between
                                space-evenly
                It uses for horizental alignments and no wrap content
            - align-items:  stretch [default]
                            flex-start 
                            flex-end    
                            center
                            baseline
                It uses for vertical alignments and no wrap content
            - align-content:    stretch [default]
                                flex-start  
                                flex-end    
                                center
                                space-around
                                space-between
                                space-evenly
                Note: This is only use when items are overflow and use wrap/nowrap property in flex-wrap
            - 
        - item level style
            - align-self:   stretch [default]
                            auto
                            flex-start 
                            flex-end    
                            center
                            baseline
            - order:    -2
                        -1
                        0   [default]
                        1
                        2
                Note: set order in items in negative to positive
            - flex-grow:    0 [default]
                            1
                            2
                Note: Set 2 means item has 2 times width and equally divided and higher number with higher width
            - flex-basis: 200px/20%
                Note: it is like max-width
            - flex-shrink:  0 [default]
                            1
                Note: Flex-shrink is allow to shrink that item

            short-hand
                flex: <flex-grow> <flex-shrink> <flex-basis>
                flex: 0 0 200px
                
            - margin/margin-left/right/top/bottom: auto
        
        - Align form with flex box


- Use CSS framework
    - material ui: https://mui.com/
    - color palette: https://flatuicolors.com/
    - css shadow: https://getcssscan.com/css-box-shadow-examples
    - Dummy API: https://dummyjson.com/

### Question: Is it possible to use if...else... statement in React render function?
- Answer: There actually is a way to do exactly what OP is asking. Just render and call an anonymous function like so:
    - Four ways of conditional rendering
        - Ternary operator
        - Logical operator && ||
        - if, else, else if - Call using anonymos function and call itself LIKE IIFE [Intermidiate Invoked Function Execution]
```
    render () {
        return (
            <div>
                {
                    // IIFE Style
                    (() => {
                        if (someCase) {
                        return (
                            <div>someCase</div>
                        )
                        } else if (otherCase) {
                        return (
                            <div>otherCase</div>
                        )
                        } else {
                        return (
                            <div>catch all</div>
                        )
                        }
                    })()
                }
            </div>
        )
    }
```
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
            phone: {
                type: String,
                match: /^[0-9]{10}$/        // Use regex with 10 digit number of 0 to 9
            },
            email: {
                type: String,
                required: true,
                lowercase: true
            }
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
            company: {
                type: String,
                enum: {
                        values: ['ikea','liddy','caressa','marcos'],
                        message: '{VALUE} is not supported'
                    }
                // so then you will create an enum for it so that if someone tries to enter some other value apart from these two values, db will throw an error.
            }
        },{ timestamps: true }      //Mongoose timestamps are supported by the schema. Timestamps save the current time of the document created and also when it was updated in form of a Date by turning it true. When set to true, the mongoose creates two fields as follows: createdAt, updatedAt
    ) 
    ```

#### REST_API
- Step 11: 
    - Inside REST-API always use async with find method because it always return null or json 
    - we can use null in if condition for controller our json 
    ```
        Eg: const deleteTask = async (req,res) => {
                try {
                    const task = await TasksDB.findByIdAndDelete(req.params.id)
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
        - Update  : findByIdAndUpdate() or findOneAndUpdate()
        - Delete  : findByIdAndDelete() or findOneAndDelete() 

        Note : we can not use findOneAndDelete or update because when we pass any argument without unique id 
        then may be same data of first fetch will be delete or update. and it may be dangrous.

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