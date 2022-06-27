# React JS

    A javascript library for building user interfaces.
    
    React.js is an open-source JavaScript library that is used for building user interfaces specifically for single-page applications. It’s used for handling the view layer for web and mobile apps. React also allows us to create reusable UI components. React was first created by Jordan Walke, a software engineer working for Facebook. React first deployed on Facebook’s newsfeed in 2011 and on Instagram.com in 2012.

## Why we use reactJS?

    React allows developers to create large web applications that can change data, without reloading the page. The main purpose of React is to be fast, scalable, and simple. It works only on user interfaces in the application. This corresponds to the view in the MVC template. It can be used with a combination of other JavaScript libraries or frameworks, such as Angular JS in MVC.

## What are the React.js Features?

    React.js properties includes the following
        React.js is declarative
        React.js is simple
        React.js is component based
        React.js supports server side
        React.js is extensive
        React.js is fast 
        React.js is easy to learn 

### React Native

    React-native is a mobile apps building framework using only Javascript. It uses the same design as React, letting you utilize/include a rich mobile UI library/ declarative components. It uses the same fundamental UI building blocks as regular iOS and Android apps. The best part of using react-native is to allow/adopt components written in Objective-C, Java, or Swift.

### Single-Way data flow
 
    In React, a set of immutable values are passed to the components renderer as properties in its HTML tags. The component cannot directly modify any properties but can pass a call back function with the help of which we can do modifications. This complete process is known as “properties flow down; actions flow up”.

### Virtual Document Object Model
 
    React creates an in-memory data structure cache which computes the changes made and then updates the browser. This allows a special feature that enables the programmer to code as if the whole page is rendered on each change whereas react library only renders components that actually change.

## Difference between angular and react JS?

    Source: https://www.simform.com/blog/angular-vs-react/#:~:text=Angular%20is%20a%20Javascript%20framework,app%20with%20frequently%20variable%20data.

## For learning online IDE for react

    https://codesandbox.io/s/https://codesandbox.io/s/

## Create a react app

    Requirements:
        Chrome Browser
            Extension:
                React Developer Tools
        Node JS
        Visual code
            Extension:
                Babel JavaScript


    npx create-react-app projectName

    cd projectName

    npm start       :=> Starts the development server
    npm run build   :=> Bundles the app into static files for production.
    npm test        :=> Starts the test runner
    npm run eject   :=> Removes this tool and copies build dependencies, configuration files and scripts into the app directory. If you do this, you can't go back.

## JSX
 
    In React, instead of using regular JavaScript for templating, it uses JSX. JSX is a simple JavaScript that allows HTML quoting and uses these HTML tag syntax to render subcomponents. HTML syntax is processed into JavaScript calls of React Framework.

    Rules:
        1. className instead of class as 'class' is a JS keyword
        2. For JS statement in JSX use {}
        3. JSX elements are JS Objects So they can be used as Objects
        4. For Multi-line JSX use Parameters()
        5. JSX elements are not string, so we can't concatenate + , but we can conatenate using array[]
        6. Using Higher Order Function like map(), filter(), reduce(), find(), finIndex() are useful in JSX as it oprates on Array
        7. Only One Root JSX Element returned by Component

## Babel

    Babel is a javascript compiler.

### HTML edit

    HTML edit on src/App.js
        import "./styles.css";          // for html styling

        export default function App() {
            const fName = "Mr."
            const lName = "RoboT"
            const currentYear = new Date().getFullYear()
            return (                    // when react is render then these html tags is paste in id #root div tag.
                <div className="App">
                <h1 class='heading'>{`Hello ${fName} ${lName} !`}</h1>
                <p>{`${currentYear} CopyRight @${fName} ${lName} `}</p>
                </div>
            );
        }

### HTML style

    1. Inline style: 
    syntax:
        style={{ property:value }}

        we can change the value of that property like
            customStyle.color = blue
    Example:
        const customStyle = { color:red }

        <h1 style={customStyle}>{`Hello ${fName} ${lName} !`}</h1>

    2. External style:
        We can use css style format in src/style.css
        All attribute use in camelCase letter.

        NOTE: if you want to apply css style in html code then use className='' instead of class='' attribute
            Because js take the class name using className property like document.getElementById('#root').className

            Wrong in console:
                <h1 class='heading'>{`Hello ${fName} ${lName} !`}</h1>
            Right in console:
                <h1 className='heading'>{`Hello ${fName} ${lName} !`}</h1>

## React Components

    Basically component is like a bundle of js code that render html.

    File name must be capitalize and same function name to use in index.js [ starting file ]

    And that function must be export using 'export default' like in nodejs we can use 'module.exports'

    And that export function is use by import that file in respective js file.

    Q. How to render html of that component?

        1. first import that js file using module default
        2. In render function  we can use tag like 
            <StrictMode>
                <importFileName />
                <importAnotherFileName />
            </StrictMode>

        NOTE: if there is no child html import file the we can use single tag like <importChildFileName /> or having child html import file then: <importFileName>
                    <importChildFileName />
                </importFileName>

    3. Like StrictMode & createRoot property of react, we can also use Fragment
        Fragment is use for group a list of chlidren withour adding extra nodes to the DOM.

        import { Fragment } from "react"

        export default function App() {

                return (
                    <Fragment>
                        <Heading />
                        <List />
                    </Fragment>
                );
            }

### Functional Components vs Class Components

    NOTE: functional component has return() but class component has render method : render(){ return( JSX code ) }
    
    1. Functional Component
        const functionalComponentName = (props) => {
            return ( JSX code )
        }

        //use the component
            <functionalComponentName />

    2. Class Components

        NOTE: In class component, we can not mention data type of any propperty & methods
        import { Component } from "react"

        class clasComponentName extends Component{
            constructor(props){
                super()
            }
            name="Arjun"
            age=27
            clickHandler = () => {
                console.log(this.props.url)
            }

            render(){
                return ( JSX code with {this.props.url} 
                        onClick={ ()=>{this.clickHandler()} }
                    )
            }
        }

        //use the component
            <clasComponentName />

## Import and export components

    Single import:
        import anyName from 'moduleName/jsFileName'
    Multiple import:
        import {variableName, fun1, fun2} from 'moduleName/jsFileName'

    Single export:
        export default varableName
        export default function functionName(){}

    Multiple data export:
        let variableName
        function fun1(){}
        function fun2(){}

        //Wrong: export { variableName, fun1(), fun2() }
        //Right: export {variableName, fun1, fun2}

## React Props

    React Props means its takes custom properties[not directly place Attributes] form render file, we can use that property value in object manner

    Sender property value in <Home customName="render by Home.js">

    1. Destructuring props

        <Home customName="render by Home.js" customProps="value">

        const Home = { customName, customProps } => {
            //code in use {customName} and {customProps}
        }
    2. Define props type like typescript
        import PropTypes from 'prop-types'

         const Home = { customName, customProps } => {
            //code in use {customName} and {customProps}
        }

        Home.propTypes = {
            customeName : PropTypes.string,
            customProps : PropTypes.string.isRequired 
        }

    3. Default props
        const Home = { customName, customProps } => {
            //code in use {customName} and {customProps}
        }

        Home.defaultProps = {
            customeName : "default value",
            customProps : "default props value" 
        }


    Example:
    Reciver property value in const Home = (props) => {
                                return (
                                    <div> { props.customName } </div>
                                )
                            }
                            export default Home

    Q. How to render/attach sub html/components in main components?
        To solve this issue, we can use {props.children}, It render all in children components render.

        Example:
        Home.jsx
            const Home = props => {
                return (
                    <div> { props.children } </div>
                )
            }
            export default Home
        Main.jsx
            import Home from "../Home"
            const Main = props => {
                return (
                    <Home>
                        <h1> This h1 tag content is goto the Home.jsx file using props.children property </h1>
                    </Home>
                )
            }
            export default Main

## Flow of DATA : using Props
    
    1. DownWard Data Flow
        Using props we can data send parent component to child component.

    2. UpWard Data Flow
        Using props we can data send child component to parent component using function() / method().

## react devTool

    add extension: React Developer Tools

## Mapping data to components

    Mapping data/lists to components using map() method
    This method is more like forEach() but use only on array of same properties.

    like:
        const Content = [
            {
                id: "1",
                name: "Beyonce",
                phone: "+123 456 789",
                email: "b@beyonce.com",
                img: "https://picsum.photos/200/300?random=1"
            },
            {
                id: "2",
                name: "Raybean",
                phone: "+145 678 923",
                email: "r@reybean.com",
                img: "https://picsum.photos/200/300?random=2"
            },
            {
                id: "3",
                name: "Mr. Robot",
                phone: "+178 923 456",
                email: "m@robot.com",
                img: "https://picsum.photos/200/300?random=3"
            }
        ];

        export default Content;

    Syntax:
        var numbers = [1, 2, 3, 4, 5];   
        const doubleValue = numbers.map((number,index)=>{   
            return (number * 2);   
        });   
        console.log(doubleValue);   

    Exapmle:

        const createContact = (contact)=>{
            return(
                <Card
                    key={contact.id}
                    name={contact.name}
                    phone={contact.phone}
                    email={contact.email}
                    img={contact.img}
                />
            )
        }

    
    NOTE: [ key error occur: Warning: Each child in a list should have a unique "key" prop. ] 
        =>When we use map() on react, please define a key="" field/property on map call function and key must be unique.

## Javascript ES6 Map_Filter_Reduce Higher Order Function

    1. Map Method -> The map() method creates a new array populated with the results of calling a provided function on every element in the calling array. 
    Syntax:
        array.map( ('singleItem','index')=>{} )
        array.map( callBack Function with no paranthesis or anonymous function with argument(anyvariableName) )  and it returns an array of result

    Example:
        let numbers = [3, 56, 2, 48, 5];
        const resultDoubleNum = numbers.map( 
            (num)=>{
                return num*2
            }
        )
        console.log(resultDoubleNum)    // Result = [6, 112, 4, 96, 10]

    2. Filter Method -> The filter() method creates a new array with all elements that pass the test implemented by the provided function.
    Syntax:
        array.filter( ('singleItem','index')=>{} )
         array.filter( callBack Function with no paranthesis or anonymous function with argument(anyvariableName) )  and it returns an array of result that condition true

    Example:
        let numbers = [3, 56, 2, 48, 5];
        const resultFilterLessthan10 = numbers.filter(
            (num)=>{
                return num < 10
            }
        )
        console.log(resultFilterLessthan10) // Result = [3, 2, 5]

    3. Reduce Method -> Accumulate a value by doing something to each item in an array.

         The reduce() method executes a user-supplied "reducer" callback function on each element of the array, in order, passing in the return value from the calculation on the preceding element. The final result of running the reducer across all elements of the array is a single value.

        The first time that the callback is run there is no "return value of the previous calculation". If supplied, an initial value may be used in its place. Otherwise the array element at index 0 is used as the initial value and iteration starts from the next element (index 1 instead of index 0).

        Perhaps the easiest-to-understand case for reduce() is to return the sum/concatenation of all the elements in an array:

    Syntax:
        array.reduce( callBack Function with no paranthesis or anonymous function with argument( accumulate,arrayValue) )  and it returns a result
        const storeValue = array.reduce(
            (accumulator, arrayIterationValue)=> accumulator + arrayIterationValue, accumulatorAssignValue
        )   

    Example: of sum
        let numbers = [3, 56, 2, 48, 5];
        const accumulatorNum = numbers.reduce(
            (accumulator, num)=> accumulator + num,0
        )
        console.log(accumulatorNum)     // Result = 114

    Example: of concatination
        const reduceName = Emojipedia.reduce(
            (accumulator,emoji)=> accumulator+" <=> "+emoji.name,""
        )
        console.log(reduceName);    // Result =  <=> Tense Biceps <=> Person With Folded Hands <=> Rolling On The Floor, Laughing 

    4. Find Method -> The find() method returns the first element in the provided array that satisfies the provided testing function. If no values satisfy the testing function, undefined is returned. 
    Syntax:
        array.find( callBack Function with no paranthesis or anonymous function with argument(anyvariableName) )  and it returns the value of conditipon true once it find then break the function and out

    Example:
        let numbers = [3, 56, 2, 48, 5];
        const numGreaterThan10 = numbers.find(
            (num)=>{
                return num > 10
            }
        )
        console.log(numGreaterThan10)   // Result = 56

    5. FindIndex Method -> The findIndex() method returns the index of the first element in the array that satisfies the provided testing function. Otherwise, it returns -1, indicating that no element passed the test. 

    Syntax:
        array.findIndex( callBack Function with no paranthesis or anonymous function with argument(anyvariableName) )  and it returns the index of conditipon true once it find then break the function and out

    Example:
        let numbers = [3, 56, 2, 48, 5];
        const numGreaterThan10Index = numbers.findIndex(
            (num)=>{
                return num > 10
            }
        )
        console.log(numGreaterThan10Index)  // Result = 1

    6. substring() -> It returns the part of the string between the start and end indexes, or to the end of the string. 

    Syntax:
        stringValue.substring( startIndex, EndIndex )  // Result String is from startIndex to endIndex -1

    Example:
        let str = "This is a coding tutorial"
        const substr = str.substring(0,6)
        console.log(substr)     // Result = "This i"

## React Conditional Rendering with the Ternary Operator & AND Operator

    1. And Operator: &&
        Syntax: 
            && in JS
                ( Expresion && Expression )

            && in React
                ( Condition && Expression )
                    like: true && Expressipn

    2. Ternary Operator:
        Syntax:
            Condition ? Do If True : Do If False
        Example:
            const App = () => {
                return (
                    <div className="container">
                    { (isLoggedIn === true)? <h1>Hello User</h1> : <Login /> }
                    </div>
                );
            }

            export default App;

## State in React - Declarative vs. Imperative Programming

    UI = f(state)  // user Interface is working depends upon function of state

## Hooks in React
    
    1. Functional component state management:

    Hooks are backwards-compatible. 
        import { useState, useEffect } from "react"
        Methods:
            const [ value, setValue ] = useState('integer/object/null/boolean')
            setValue( ()=>{} )

            useEffect( ()=>{} )

    Here, useState is a Hook . We call it inside a function component to add some local state to it. React will preserve this state between re-renders. useState returns a pair: the current state value and a function that lets you update it. You can call this function from an event handler or somewhere else. 

    Syntax:

        // Always use destructuring array
        const [ "store_initial_state_value", "a_update_function" ] = useState("initial_state_value")

        console.log(store_initial_state_value)  // result = initial_state_value
        a_update_function(expression)

    2. Class component state management:
        predefind this.state and this.setState() in already present in component module from "react".
        NOTE: Alwayes declare state and return setState() value is an object like {bg:'green'} and access using this.state.bg

        Example:
            import { Component } from "react";

            class Button extends Component{

                constructor(props){
                    super(props)
                    this.state = {count:1}
                }
                clickHandler(){
                    this.setState({bg:this.state.count++})  
                }

                render(){
                    return(
                        <button onClick={()=>this.clickHandler()}>
                            <Link to={this.props.path}>{this.props.name}</Link> 
                            <h1>Count: {this.state.count}</h1>
                        </button>
                    )
                }
            }

## React Hooks

    import { useState, useRef, useEffect } from "react"

    1. useState() Method : 
        We call it inside a function component to add some local state to it. React will preserve this state between re-renders. useState returns a pair: the current state value and a function that lets you update it. You can call this function from an event handler or somewhere else. 

        const { name, setName } = useState(
                { fName: '',lName: ''}
            )

    2. useRef() Method : 
        useRef returns a mutable ref object whose .current property is initialized to the passed argument (initialValue). The returned object will persist for the full lifetime of the component.
        Essentially, useRef is like a “box” that can hold a mutable value in its .current property.

        NOTE:   i. useRef() method is imported from react module
                ii. The initial value saved in a variable and that variable set in ref={} attribute in JSX code
                iii. .current property is hold the JSX html code tag.

        // Initialize useRef()
            const logo = useRef(null)

        const clickHandler = () => {
            logo.current.style.transform = "rotate(180deg)"
            logo.current.style.backgroundColor = "red"
            logo.current.style.width = "200px"
            logo.current.style.height = "200px"
          }

          return (
              <img ref={logo} onClick={clickHandler} src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/BMW_logo_%28gray%29.svg/480px-BMW_logo_%28gray%29.svg.png" alt="Logo" height="100px" width="100px" />
            )

    3. useEffect() Method : 
        It runs every component render, also run when state will intialized. It has 2 parameter, 1st is a function with return and 2nd is an Array.
        This method has retun statement and it calls when component will unmount. 
        This method has second parameter, that is Array[] 
            Empty Array[] means : only run useEffect() intitial state initialized.
             Array[count] means : Whenever count state will change then run useEffect().

        useEffect(
            ()=>{
                console.log(count)
                return () => {console.log('component will unmount')}
            },[count]

        )

    4. Context API & useContext Hook
        Context API is a global hooks that contain the value in global level and wraping with components. 
        We can access that value using useContext('create context component variable')

        NOTE: This is basically use for Themes

        import { createContext, useContext } from "react"               // createContext and useContext is import from react module
        const ThemeContext = createContext()                            // create a context variable/component that can initialize 
        const themes = {                                                // create a js object of style
          light: {backgroundColor:"light",color:"red"},
          dark: {backgroundColor:"black",color:"yellow"}
        }

        const About = () => {
            return (
                <ThemeContext.Provider value={themes.light}>            // wrapping context component to other component for pass context to child component
                                                                            .provider property is use for context available and value={} is use for pass the value
                    <HeadText />    
                </ThemeContext.Provider>
                
            )
        }

        export default About

        const HeadText = () => {

            const theme = useContext(ThemeContext)                      // useContext() is use for receive the context that passing by value={} 
                                                                            and parameter is always create context component name
            return(
                <h1 style={theme}>About</h1>
            )
        }

    5. useReducer() Hooks:

    6. useCallback() & useMemo()

        useMemo and useCallback use memoization.
        I like to think of memoization as remembering something.
        While both useMemo and useCallback remember something between renders until the dependancies change, the difference is just what they remember.
        useMemo will remember the returned value from your function.
        useCallback will remember your actual function.

        One-liner for useCallback vs useMemo:

        useCallback(fn, deps) is equivalent to useMemo(() => fn, deps).

        With useCallback you memoize functions, useMemo memoizes any computed value:

        const fn = () => 42 // assuming expensive calculation here
        const memoFn = useCallback(fn, [dep]) // (1)
        const memoFnReturn = useMemo(fn, [dep]) // (2)
        (1) will return a memoized version of fn - same reference across multiple renders, as long as dep is the same. But every time you invoke memoFn, that complex computation starts again.

        (2) will invoke fn every time dep changes and remember its returned value (42 here), which is then stored in memoFnReturn.


## What is difference between props vs states

    props:
        1. props are passed from outside the component
        2. props are read-only, not able to change in dynamic page

    state:
        1. state is maintained inside the component
        2. states are modifiable

## What is difference between Stateful vs Stateless

    Stateful:
        1. have state variables in component
        2. Complex to use as they have state changing logic

    Stateless:
        1. Don't have state variables, only props
        2. Simple as they don't have state change

## Event Handling in React

    We can call a event or function on any tags then we can use onClick event. but we cant use parathesis in event call function, because that function automatically call when page load.

    so, without argument:
            <button onClick={handleClick} >Submit</button>

        with argument:
            <button onClick={ ()=>{ handleClick(name) } } >Submit</button>

        When event call, it autometically send a event argument that holds event.target property

            like:
                const handleClick = (event) => {
                    event.target.value
                    event.target.file
                    etc.
                }

    Example: App.js file 
    // 1st Event: when button click then h1 content text must change
    // 2nd Event: when mouse over on button button style should be black and mouse out from button it turns while 
    import { useState } from "react";
    import "./styles.css";

    const App = () => {
    const [ headingText, setHeadingText ] = useState('Hello')
    const [ isMouseOver, setMouseOver ] = useState(false) 

    const handleClick = ()=>{
        setHeadingText("Submitted")
    }
    const handleMouseOver = () =>{
        setMouseOver(true)
    }
    const handleMouseOut = () => {
        setMouseOver(false)
    }
        return (
            <div className="container">
                <h1>{headingText}</h1>
                <input type="text" placeholder="What's your name?" />
                <button style={ {backgroundColor: isMouseOver ? "black" : "white" } } 
                    onClick={handleClick} 
                    onMouseOver={handleMouseOver}
                    onMouseOut={handleMouseOut}
                >Submit</button>
            </div>
        )
    }
    export default App;

## React Forms

    value property must take a state name.
    input event onChange is use to fetch text in the field.
    onchange event pass a object of event.
    Using event object, we can fetch our attibute's value and target object holds the element attributes like
        event.target.value
        event.target.placeholder
        event.target.type

        const handleChange = (event) =>{
            setName(event.target.value)
        }
        <input onChange={handleChange} type="text" placeholder="What's your name?" value={name} />

    In form tag, we can use onSubmit() event for submit form and we don't want to reload the page after submit then use event.preventDefault() method

    Example: input a text and reflect in h1 when button clicked
    import { useState } from "react";
    import "./styles.css";

    const App = () => {
    const [ name, setName ] = useState("")
    const [ headingText, setHeadingText ] = useState("")

    const handleChange = (event) =>{
        setName(event.target.value)
    }
    const handleClick = (event) => {
        setHeadingText(name)
        event.preventDefault()
    }
        return (
            <div className="container">
                <form onSubmit={handleClick}>
                    <h1>Hello {headingText}</h1>
                    <input onChange={handleChange} type="text" placeholder="What's your name?" value={name} />
                    <button type="submit">Submit</button>
                </form>
            </div>
        );
    }
    export default App;

## Changing Complex State in Forms

    /HINT: You'll need to apply the following things you learn:
        //1. Using JS Objects with state.
        //2. Making use of previous state when changing state.
        //3. Working with forms in React.
        //4. Handing events

    Example:
        import { useState } from "react";
        import "./styles.css"

        function App() {
        const [contact, setContact] = useState({
            fName: "",
            lName: "",
            email: ""
        });

        const handleChange = (event) => {
            const { value, name } = event.target

            setContact(
            (prevValue)=>{
                return {
                ...prevValue,           // spread oprator that converts an object to individual and insert this object
                [name]: value           // if i use simple name in key side then it will take key is name not that value 
                                        // so we use [name] means fName:value or lName:value of email:value
                }
            }
            )
        }

        return (
            <div className="container">
            <h1>
                Hello {contact.fName} {contact.lName}
            </h1>
            <p>{contact.email}</p>
            <form>
                <input onChange={handleChange} name="fName" placeholder="First Name" value={contact.fName}/>
                <input onChange={handleChange} name="lName" placeholder="Last Name" value={contact.lName}/>
                <input onChange={handleChange} name="email" placeholder="Email" value={contact.email}/>
                <button>Submit</button>
            </form>
            </div>
        );
        }

        export default App;

## Controlled Component vs Uncontrolled Component
    
    This relates to stateful DOM components (form elements) and the React docs explain the difference:

    A Controlled Component is one that takes its current value through props and notifies changes through callbacks like onChange. A parent component "controls" it by handling the callback and managing its own state and passing the new values as props to the controlled component. You could also call this a "dumb component".
    A Uncontrolled Component is one that stores its own state internally, and you query the DOM using a ref to find its current value when you need it. This is a bit more like traditional HTML.
    Most native React form components support both controlled and uncontrolled usage:

    // Controlled:
    <input type="text" value={value} onChange={handleChange} />

    // Uncontrolled:
    <input type="text" defaultValue="foo" ref={inputRef} />
    // Use `inputRef.current.value` to read the current value of <input>

## Javascript ES6 Spread Operator

    Spread syntax (...) allows an iterable such as an array expression or string to be expanded in places where zero or more arguments (for function calls) or elements (for array literals) are expected, or an object expression to be expanded in places where zero or more key-value pairs (for object literals) are expected. 

    const citrus = ["Lime", "Lemon", "Orange"];
    const fruits = ["Apple", ...citrus, "Banana", "Coconut"];

    console.log(fruits) // ["Apple", "Lime", "Lemon", "Orange", "Banana", "Coconut"]

    const fullName = {
      fName: "James",
      lName: "Bond"
    };

    const user = {
      ...fullName,
      id: 1,
      username: "jamesbond007"
    };

    console.log(user);  // {fName: "James", lName: "Bond", id: 1, username: "jamesbond007"}

## React Dependencies & Styling the Keeper App

    For styling we can use material-ui/core and material-ui/icons modules
    material-ui is version 4, now version 5 is ready to use.

    Install: v4
        npm install @material-ui/core
        npm install @material-ui/icons

        v5:
            
    Import:

        import AddIcon from '@material-ui/icons/Add';

        <AddIcon />

## Pages & Routing URL

    1. For routes pages, we are going to install 'route' module

    Install:
        npm install react-router-dom

    import: it is import in app.js not index.js
        import { BrowserRouter, Routes, Route } from "react-router-dom"

    Use:
        const App = () => {
            return (
                <BrowserRouter>                                                 // Bowser router tag for all the route is placed inside it
                  <Header />                                                    // this is global for all routes
                    <Routes>                                                    // this the important for Routes between respective route or redirect. 
                        <Route path="/" element={ <Home /> } />                 // path property for url route and element property for render this page
                        <Route path="/places/new" element={ <NewPlace /> } />
                        <Route path="/" element={<App />}>                      // Nested route the url is /
                            <Route path="expenses" element={<Expenses />} />    // here url is /expenses
                            <Route path="invoices" element={<Invoices />} />
                        </Route>
                        <Route path="*" element={ <h1>404 Not Found!</h1> } />  // * denotes for not define the route in routes jsx  tag
                    </Routes>
                </BrowserRouter>
            )
        }

        export default App

    2. Use route parameter:- /new/:id

        App.js
            const App = () => {
                return (
                    <BrowserRouter>                                       
                        <Routes>                                                    
                        <Route path="/new/:id" element={ <User /> } />
                        </Routes>
                    </BrowserRouter>
                )
            }
            export default App

        User.jsx recive the params
            import { useParams } from "react-router-dom"

            const User = () => {
                const params = useParams()
                return (
                    <h1> New Page { params.id } </h1>
                )
            }
            export default User

    3. Create a link for route don't use <a> tag, import { Link,NavLink } from "react-router-dom"

        <Link to=''></Link> is use for achor tag of html
        <NavLink to=''></NavLink> is use for Navigation achor tag of html using <ul><li><NavLink>

        <Link to="route">
            other render html or components or any data to click
        </Link>
        Example:
            import { Link } from "react-router-dom"

            const UsersItem = props => {
                return(
                    <li className="user-item">
                        <Card className="user-item__content">
                            <Link to="/">                                                   // create a link for url route
                                <div className="user-item__image">
                                    <Avatar src={props.image} alt={props.name} />
                                </div>
                                <div className="user-item__info">
                                    <h2>{props.name}</h2>
                                    <h3>
                                        {props.placeCount} {(props.placeCount === 1) ? "Place" : "Places"}
                                    </h3>
                                </div>
                            </Link>
                        </Card>
                    </li>
                )
            }

            export default UsersItem

        NOTE: What id difference between anchor tag and Link component in react-router-dom?
                when click a Achor tag, the page will be reload, but in Link component page does not reload at all abd change the route respectivily. 

    4. How to goback/forward 1 or 2 pages in react route
        using useNavigate() method
        Example:
            import { useNavigate } from 'react-router-dom'
            import { Fragment } from 'react'

            const App = () => {
                const navigate = useNavigate()

                return (
                    <Fragment>
                        <button onClick={ ()=>navigate(1) }>Froward</button>
                        <button onClick={ ()=>navigate(-1) }>Go Back</button>
                    </Fragment>
                )
            }

## React Portals

    Creates a portal. Portals provide a way to render children into a DOM node that exists outside the hierachy of the DOM component.

    ReactDom.createPortal( child, container )

    It means we can create a virtual DOM outside of root / separate from root id of div.

    Example: 
    In public/index.html page
        <div id="drawer-hook"></div>

    SideDrawer.js
        import ReactDom from "react-dom";
        import './SideDrawer.css';

        const SideDrawer = props => {
            const content = <aside className="side-drawer">{props.children}</aside>
            return ReactDom.createPortal(content, document.getElementById('drawer-hook'))
        };
        export default SideDrawer;

## React Component LifeCycle
    
    Adding Lifecycle Methods to a Class

        1. The componentWillMount() method is removed by react team, Nowadays we can use constructor of class for this method.
        1. The componentDidMount() method runs after the component output has been rendered to the DOM.
        2. The componentDidUpdate() method runs when the component state changes.
        2. The componentWillUnmount() method runs before the component output has been rendered to the DOM. Usually used to perform clean ups.
        3. The shouldComponentUpdate(props, state) method is use to the render method is automatically run or not. It return boolean value: true means rerender or false means no render react app

    Example:
        import { Component } from "react"
        class Clock extends Component {
          constructor(props) {
            super(props);
          }
        componentDidMount(){
                console.log('After component did mount, this method will run autometically');
            }
            componentDidUpdate(){
                console.log('After component did state update, this method will run autometically');
            }
            componentWillUnmount(){
                console.log('Before component will destory, this method will run autometically');
            }
            shouldComponentUpdate(props,state){
                return true
            }
          

          render() {
            return (
              <div>
                <h1>Hello, world!</h1>
                <h2>It is {this.state.date.toLocaleTimeString()}.</h2>
              </div>
            );
          }
        }

## Higher-Order Components
    
    A higher-order component (HOC) is an advanced technique in React for reusing component logic. HOCs are not part of the React API, per se. They are a pattern that emerges from React’s compositional nature.

    Higher-Order Component Conventions
        -> Do not use HOCs inside the render method of a component.
        -> The static methods must be copied over to have access to them. You can do this using hoist-non-react-statics package to automatically copy all non-React static methods.
        -> HOCs does not work for refs as 'Refs' does not pass through as a parameter or argument. If you add a ref to an element in the HOC component, the ref refers to an instance of the outermost container component, not the wrapped component.

## Fetch API Introduction fetch()
    
    fetch the data from API to react app.
    
    Example:
        import { useState } from "react"
        import "./Images.css"

        const Images = () => {
            const [ image, setImage ] = useState('https://images.dog.ceo/breeds/terrier-welsh/lucy.jpg')

            const getImages = async () => {                                                 // async for if server is slow or fetch take some time it will help
                const response = await fetch('https://dog.ceo/api/breeds/image/random')     // fetch method use for fetch the data from API 
                const data = await response.json()                                          // we recive the response not actual json data, so we use json()
                setImage(data.message)                                                      // state management
            }

            return (
                <div>
                    <h1>Dog Images</h1>
                    <button onClick={ getImages }>Get Image</button>
                    <img src={image} alt="Dog Image" />
                </div>
            )
        }

        export default Images

## Error Boundary
    
    Error boundaries are React Class components that catch JavaScript errors anywhere in their child component tree, log those errors, and display a fallback UI instead of the component tree that crashed. Error boundaries catch errors during rendering, in lifecycle methods, and in constructors of the whole tree below them.
    
    Note: Error boundaries do not catch errors for:
        -> Event handlers (learn more)
        -> Asynchronous code (e.g. setTimeout or requestAnimationFrame callbacks)
        -> Server side rendering
        -> Errors thrown in the error boundary itself (rather than its children)

        Example:

            ErrorBoundries.js file:
                import { Component } from "react";

                class ErrorBoundries extends Component{
                    constructor(props){
                        super(props)
                        this.state = { hasError:false } 
                    }
                    componentDidCatch(){
                        return this.setState({ hasError:true })
                    }

                    render(){
                        if(this.state.hasError) return <h1>Some Error Found..., Please contact to Admin!</h1>
                        return this.props.children
                        
                    }
                } 

                export default ErrorBoundries

            impliment file/importing ErrorBoundries:
                import ErrorBoundries from "../ErrorBoundies"

                const Images = () => {
                    const [ image, setImage ] = useState('https://images.dog.ceo/breeds/terrier-welsh/lucy.jpg')

                    const getImages = async () => {
                        const response = await fetch('https://dog.ceo/api/breeds/image/random')
                        const data = await response.json()
                        setImage(data.message)
                    }

                    return (
                        <div>
                            <ErrorBoundries>                                        // ErrorBoundries Component implement
                                <DogHead name={12} />
                                <button onClick={ getImages }>Get Image</button>
                                <img src={image} alt="Dog Image" />
                            </ErrorBoundries>
                        </div>
                    )
                }

                export const DogHead = props => {
                    if(typeof(props.name) !== String || !props.name) throw new Error('Message must be string')  // error throw using throw new Error('message')
                    return <h1>{props.name}</h1>
                }

                export default Images

## React Animation use by react-transition-group module

    install:
        npm istall "react-transition-group"

    Import: 
        import { CSSTransition } from "react-transition-group"

    Use:
        import property use as component

        <CSSTransition in={props.show} timeout=200 classNames="our style using class name" mountOnEnter unmountOnExit"> <aside onClick={props.onClick} >{props.children}</aside> </CSSTransition>

    Property:
        in: property for css transition is on or off
        timeout: property for transition in time milisecend
        mountOnEnter/unmountOnExit: If you want to lazy mount the component on the first in={true} you set mountOnEnter, so it exited unless you also specify unmountOnExit.

## Redux and React-Redux
    
    Redux: A Predictable State Container for JS Apps

    React-Redux: Official React bindings for Redux

    Steps to use redux

    Step 1: Install
        $ npm install redux react-redux

    Step 2: Import
        import { createStore } from redux
        import { Provider } from react-redux

    Step 3: Create a store
        const store = createStore(reducer)

    Step 4: Create a reducer
        const reducer = (state=initial_state,action) => {
            switch (action.type)
                case "action.type value 1":
                    return { ...state, key of state:action.payload}
                case "action.type value 2":
                    return { ...state, key of state:action.payload}
                case "action.type value 3":
                    return { ...state, key of state:action.payload}
                default:
                    return state
        }

    Step 5: Create a initial state
        const initial_state = {
            state key 1 : initial value 1,
            state key 2 : initial value 2,
            state key 3 : initial value 3
        }

    Step 6: Wraping a provide component to pass that store in child Higher Ordercomponent
        <Provider store={store}>
            <ChildHigherOrderComponent />
        </Provider>

    Step 7: Above 6 steps are placed in ParentComponent, Now go to the ChildComponent 

    Step 8: Import connect method from react-redux
        import { connect } from "react-redux"

    Step 9: Create a functional Higher Order Component that connect to ChildComponent for passing state 
        NOTE: the connect() function has two arguments method 1. mapStateToProps and 2. mapDispatchToProps
        const ChildHigherOrderComponent = connect(mapStateToProps,mapDispatchToProps)(ChildComponent)

    Step 10: Create a mapStateToProps(state) method for pass the state to props of ChildComponent
        const mapStateToProps = (state) => {
            return {
                key 1 of props : state.key 1 of store for value,
                key 2 of props : state.key 2 of store for value,
                key 3 of props : state.key 3 of store for value
            }
        }

    Step 11: Create a mapDispatchToProps(dispatch) method for update of props state value to store state value from ChildComponent
        const mapDispatchToProps = (dispatch) => {
            return {
                setKey 1 of props : (key 1 of props)=>{
                        dispatch({type:"action.type value 1",payload:key 1 of props})
                    },
                setKey 2 of props : (key 2 of props)=>{
                        dispatch({type:"action.type value 2",payload:key 2 of props})
                    },
                setKey 3 of props : (key 3 of props)=>{
                        dispatch({type:"action.type value 3",payload:key 3 of props})
                    }
            }
        }

    Step 12: Create a ChildComponent of props {key 1 of props,key 2 of props,key 3 of props,setKey 1 of props,setKey 2 of props,setKey 3 of props}
        const ChildComponent = ({key 1 of props,key 2 of props,key 3 of props,setKey 1 of props,setKey 2 of props,setKey 3 of props}) => {
            // logic part
        }

##  Redux Toolkit
    
    This is a toolkit for redux and createStore() method from redux is deprecated, so we use redux toolkit

    Step 1: install
        $ npm install @reduxjs/toolkit react-redux

    Step 2: Create a Redux Store
        Create a file named src/app/store.js. Import the configureStore API from Redux Toolkit. We'll start by creating an empty Redux store, and exporting it:

        app/store.js file:
            import { configureStore } from '@reduxjs/toolkit'

            export default configureStore({
              reducer: {}
            })

    Step 3: Provide the Redux Store to React
    index.js file:
        import store from './app/store'
        import { Provider } from 'react-redux'

        ReactDOM.render(
          <Provider store={store}>
            <App />
          </Provider>,
          document.getElementById('root')
        )

    Step 4: Create a Redux State Slice
        Add a new file named src/features/counter/counterSlice.js. In that file, import the createSlice API from Redux Toolkit.

        Creating a slice requires a string name to identify the slice, an initial state value, and one or more reducer functions to define how the state can be updated. Once a slice is created, we can export the generated Redux action creators and the reducer function for the whole slice.

        features/counter/counterSlice.js
            import { createSlice } from '@reduxjs/toolkit'

            export const counterSlice = createSlice({
              name: 'counter',      // state name
              initialState: {
                value: 0            // initial value
              },
              reducers: {
                increment: state => {
                  // Redux Toolkit allows us to write "mutating" logic in reducers. It
                  // doesn't actually mutate the state because it uses the Immer library,
                  // which detects changes to a "draft state" and produces a brand new
                  // immutable state based off those changes
                  state.value += 1
                },
                decrement: state => {
                  state.value -= 1
                },
                incrementByAmount: (state, action) => {
                  state.value += action.payload
                }
              }
            })

            // Action creators are generated for each case reducer function
            export const { increment, decrement, incrementByAmount } = counterSlice.actions

            export default counterSlice.reducer

        Step 5: Add Slice Reducers to the Store
            app/store.js
                import { configureStore } from '@reduxjs/toolkit'
                import counterReducer from '../features/counter/counterSlice'

                export default configureStore({
                  reducer: {
                    counter: counterReducer
                  }
                })

        Step 6: Use Redux State and Actions in React Components
            Now we can use the React-Redux hooks to let React components interact with the Redux store. We can read data from the store with useSelector, and dispatch actions using useDispatch. Create a src/features/counter/Counter.js file with a <Counter> component inside, then import that component into App.js and render it inside of <App>.

            features/counter/Counter.js
                import React from 'react'
                import { useSelector, useDispatch } from 'react-redux'
                import { decrement, increment } from './counterSlice'
                import styles from './Counter.module.css'

                export function Counter() {
                  const count = useSelector(state => state.counter.value)
                  const dispatch = useDispatch()

                  return (
                    <div>
                      <div>
                        <button
                          aria-label="Increment value"
                          onClick={() => dispatch(increment())}
                        >
                          Increment
                        </button>
                        <span>{count}</span>
                        <button
                          aria-label="Decrement value"
                          onClick={() => dispatch(decrement())}
                        >
                          Decrement
                        </button>
                      </div>
                    </div>
                  )
                }

        Summery: What You've Learned
            SUMMARY
                1. Create a Redux store with configureStore
                    i. configureStore accepts a reducer function as a named argument
                    ii. configureStore automatically sets up the store with good default settings
                2. Provide the Redux store to the React application components
                    i. Put a React-Redux <Provider> component around your <App />
                    ii. Pass the Redux store as <Provider store={store}>
                3. Create a Redux "slice" reducer with createSlice
                    i. Call createSlice with a string name, an initial state, and named reducer functions
                    ii. Reducer functions may "mutate" the state using Immer
                    iii. Export the generated slice reducer and action creators
                4. Use the React-Redux useSelector/useDispatch hooks in React components
                    i. Read data from the store with the useSelector hook
                    ii. Get the dispatch function with the useDispatch hook, and dispatch actions as needed