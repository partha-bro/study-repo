import './Hooks.css'
import React, { useRef, useState, useEffect, useContext, useReducer, useCallback, useMemo } from "react"
import {reducer} from './App'
import { Link } from 'react-router-dom'

// Global variable use in top level using Context API
const ThemeContext = React.createContext()
const themes = {
    light: {background:'white',color:'black'},
    red: {background:'red',color:'white'},
    dark: {background:'black',color:'yellow'}
}



const Hooks = () =>{
    const [counter, setCounter] = useState(0)

    return <>
        <button><Link to={'/'}>Home</Link></button>
        <div className='borderStyle'>
            <h2>useState Hooks</h2>
            <h3>Counter {counter}</h3>
            <button onClick={()=>{setCounter(counter + 1)}}>Add</button>
            <button onClick={()=>{setCounter(counter - 1)}}>Minus</button>
        </div>
        <UseRef />
        <UseEffect />
        <ThemeContext.Provider value={themes}>
            <UseContext />
        </ThemeContext.Provider>
        <UseReducer />
        <UseCallBack />
        <UseMemo />
    </>
}

const UseRef = () => {
    const logo = useRef(null)

    const bigImage = () => {
        logo.current.style.width = '100px'
        logo.current.style.height = '100px'
        
    }
    const smallImage = () => {
        logo.current.style.width = '30px'
        logo.current.style.height = '30px'
    }
    const reactImage = () => {
        logo.current.src = '../src/assets/react.svg'
    }
    const rotateImage = () => {
        logo.current.style.transform = "rotate(180deg)"
    }

    return <>
        <div className='borderStyle'>
            <h2>useRef Hooks</h2>
            <img src='vite.svg' alt='logo' width='50px' height='50px' ref={logo} onClick={rotateImage} title='Rotate Image'/><br/>
            <button onClick={bigImage}>Big Image</button>
            <button onClick={smallImage}>Small Image</button>
            <button onClick={reactImage}>React Image</button>
        </div>
    </>
}
const UseEffect = () => {
    const [count, setCount] = useState(0);
    const [count1, setCount1] = useState(0);

    // Similar to componentDidMount and componentDidUpdate:
    useEffect(() => {
        // Update the document title using the browser API
        console.log(`You clicked ${count} times`)
    },[count]);

    return <>
        <div className='borderStyle'>
            <h2>useEffect Hooks</h2>
            <p>You clicked {count} times</p>
            <button onClick={() => setCount(count + 1)}>
                Click me
            </button>
        </div>
    </>
}

const UseContext = () => {
    const theme = useContext(ThemeContext)
    // console.log(theme)
    const [themeColor, setThemeColor] = useState(theme.red)

    return <>
        <div className='borderStyle' style={themeColor}>
            <h2>Context API & useContext</h2>
            Theme Select: <button onClick={()=>setThemeColor(theme.light)}>Light</button>
            <button onClick={()=>setThemeColor(theme.red)}>Red</button>
            <button onClick={()=>setThemeColor(theme.dark)}>Dark</button>
        </div>
    </>
}

const UseReducer = () => {

    
    const [state, dispatch] = useReducer(reducer,0)


    return <>
        <div className='borderStyle'>
            <h2>useReducer Hooks</h2>
            <h3>Balance {state}</h3>
            <button onClick={()=>dispatch({type:"ADD",payload:10})}>Add</button>
            <button onClick={()=>dispatch({type:"REMOVE",payload:10})}>Remove</button>
        </div>
    </>
}
const UseCallBack = () => {
    const [stateX,setStateX] = useState(0)
    const [stateY,setStateY] = useState(0)

    const randomFx = () => {
        console.log('rerendering function')
        return Math.random().toFixed(2)
    }
    const randomCallback = useCallback(()=>randomFx(),[])

    return <>
        <div className='borderStyle'>
            <h2>useCallback Hooks</h2>
            <p>State: {stateX} <button onClick={()=>setStateX(stateX+1)}>+</button></p>
            <p>randomCallback: {randomCallback()}</p>
        </div>
    </>
}
const UseMemo = () => {
    const [stateX,setStateX] = useState(10)
    const [stateY,setStateY] = useState(0)

    const randomFx = () => {
        console.log('rerendering function')
        return Math.random().toFixed(2)
    }
    const randomMemo = useMemo(()=>randomFx,[])

    return <>
        <div className='borderStyle'>
            <h2>useMemo Hooks</h2>
            <p>State: {stateX} <button onClick={()=>setStateX(stateX-1)}>-</button></p>
            <p>randomMemo: {randomMemo()}</p>
        </div>
    </>
}


export default Hooks