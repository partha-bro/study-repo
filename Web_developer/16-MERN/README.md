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