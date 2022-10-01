import React from 'react'
import ReactDOM from 'react-dom/client'
import {App} from './App'
import './index.css'
import { BrowserRouter,Routes,Route } from 'react-router-dom'
import Hooks from './Hooks'
import Portal from './Portal'
import FetchApi from './FetchApi'

ReactDOM.createRoot(document.getElementById('root')).render(
  <React.StrictMode>
    <BrowserRouter>
      <Routes>
        <Route path='/' element={<App />} />
        <Route path='/hooks' element={<Hooks />} />
        <Route path='/portal' element={<Portal />} />
        <Route path='/fetch' element={<FetchApi />} />
        <Route path='/about' element={<App name='About'/>} />
        <Route path='/contact' element={<App name='Contact'> <div><h1>Children props</h1></div></App>} />
        <Route path='*' element={<h1>404 Page Not Found!</h1>} />
      </Routes>
    </BrowserRouter>
  </React.StrictMode>
) 
