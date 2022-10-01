import { useState } from 'react'
import reactLogo from './assets/react.svg'
import PropTypes from 'prop-types'
import './App.css'
import { Link } from 'react-router-dom'

    // reducer function
    const reducer = (state,action) => {
      switch (action.type) {
          case 'ADD':
              return state + action.payload
          case 'REMOVE':
              return state - action.payload
      }
    }

function App(props) {
  const [count, setCount] = useState(0)
  const [name, setName] = useState('')
  const onSubmitHandler = (e) => {
    e.preventDefault()
  }

  return (
    <div className="App">
      <div>
          <img src="/vite.svg" className="logo" alt="Vite logo" />
          <img src={reactLogo} className="logo react" alt="React logo" />
      </div>
      <h1>{props.name} Page</h1>
      <div className="card">
        <button onClick={() => setCount((count) => count + 1)}>
          count is {count}
        </button>
        {(props.name === 'Contact') ? props.children : null }
      </div>
      <div>
        <Link className="card" to='/'>Home</Link>
        <Link className="card" to='/about'>About</Link>
        <Link className="card" to='/contact'>Contact</Link>
        <Link className="card" to='/hooks'>Hooks</Link>
        <Link className="card" to='/portal '>Portal</Link>
        <Link className="card" to='/fetch '>Fetch</Link>
      </div>
      <div>
        <form >
          <input type='text' name='name' placeholder='Enter your name' onChange={(e)=>setName(e.target.value)} value={name}/>
          <input type='submit' name='submit' onClick={onSubmitHandler} value='Submit'/>
          <strong>{name}</strong>
        </form>
      </div>
    </div>
  )
}

App.defaultProps = {
  name : 'Home'
}

App.propTypes = {
  name : PropTypes.string
}

export { App, reducer }
