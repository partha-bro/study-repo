import { BrowserRouter, Route, Routes } from 'react-router-dom'
import Home from './components/Home'
import '../node_modules/bootstrap/dist/css/bootstrap.min.css'
import '../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'
import Add from './components/Add'
import Edit from './components/Edit'
import Delete from './components/Delete'

function App() {

  return (
    <BrowserRouter>
      <Routes>
        <Route path='/' element={<Home />} />
        <Route path='/add' element={<Add />} />
        <Route path='/edit/:id' element={<Edit />} />
        <Route path='/delete/:id' element={<Delete />} />
        <Route path='*' element={<h1>404 Page Not Found!</h1>} />
      </Routes>
    </BrowserRouter>
  )
}

export default App