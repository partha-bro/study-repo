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
        const getInput = (e) => {       // e is a event object
		setInput( {                     // return new state value
				...input,               // spead op of preveous state value
				[e.target.name]: e.target.value     // fetch dynamic value of e.target.name
			}
		)
	}
    - { [key]:value } => if we use without [], it takes key as a key, but in [key] it takes dynamic value of key
    - spread oprator
    - Higher Order Function

## How to Setup a perfect MERN project? 

    Node
    - Step 1: Create a file, where you initial your project [ server.js/app.js ]

    - Step 2: $ npm init -y

    - Step 3: Edit package.json for 'npm start' and 'npm run dev' in script key

    - Step 4: Create .env and .gitignore file and Edit it

    GIT
    - Step 5: Now git init for git local repo

    Node
    - Step 6: install your package for project $ npm install <packageName>

    MVC
    - Step 7: use MVC + Router + middleware architechture

    Router
    - Step 8: In Router use shortHand for routes
                - app.use('/api/v1/tasks',tasksRouter)
                - tasksRouter.route('/:id').get(getTask).patch(updateTask).delete(deleteTask)

    Server.js/app.js
    - Step 9: Always use a function to connect mongo using async and try-catch block,
             if it success then call app.listen() for run server.

    mongoose.Schema
    - Step 10: When you create/define a schema of model then use validator options
                like: const taskSchema = new mongoose.Schema(
                                                {
                                                    name: {
                                                        type: String,
                                                        required: [true, 'must provide name'],
                                                        trim: true,
                                                        maxlength: 20
                                                    },
                                                    completed: {
                                                        type: Boolean,
                                                        default: false
                                                    }
                                                }
                                            ) 

    REST_API
    - Step 11: Inside REST-API always use async with find method because it always return null or json 
                we can use null in if condition for controller our json 
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

    CRUD
    - Step 12: Use proper mongoose default method for CRUD
                Create  : create()
                Read    : find() for array and findOne() for one item
                Update  : findOneAndUpdate()
                Delete  : findOneAndDelete()
    
    Update Method
    - Step 13: Always use some flag for proper use mongoose methods like:
                const task = await TasksDB.findOneAndUpdate({_id:req.params.id},req.body, {
                                new: true,
                                runValidators: true
                            })
                Here new flag is use for always return new data, why? A-> when we update anything then it return old data
                    runvalidators is use for when it update new data always check schema validation, why? A-> it default,
                     when create new data then use schema validator but when it update then it won't do it.  

    Error Page
    - Step 14: setup error middleware for non valid routes
            - const notFound = (req,res,next) => {
                    res.status(404).send('route not Found')
                    next()
                }

                module.exports = notFound
            - app.use(notFound)
    
    Common try catch handle
    - Step 15: In Controller, we use all try and catch in all DB methods wo we create a middleware
            -    const asyncWrapper = (fn) => {
                    return async (req,res,next) => {
                        try{
                            await fn(req,res,next)
                        }catch(error){
                            next(error)
                        }
                    }
                }

                module.exports = asyncWrapper

            - const getAllTasks = asyncWrapper( async (req,res)=>{
                        const tasks = await TasksDB.find({},{_id:1,name:1,completed:1})
                        res.status(200).json({tasks})
                    }
                )

    Error Handler
    - Step 16: make a middleware of error handler and use it in last of app.js/server.js
                - const errorHandler = (err,req,res,next) => {
                    return res.status(500).json({msg:err})
                }

                module.exports = errorHandler

                - app.use(errorHandler)

    