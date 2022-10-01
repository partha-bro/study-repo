import { useState } from 'react'
import { Link } from 'react-router-dom'
import './Hooks.css'

const FetchApi = () => {
    const [src, setSrc] = useState('')

    const getImage = async () => {
        const response = await fetch('https://dog.ceo/api/breeds/image/random')
        const data = await response.json()
        setSrc(data.message)
    }

    return <>
        <div className='borderStyle'>
            <h2>Random Image Generator using FETCH API</h2>
            <Link to='/'>Home</Link><br/>
            <h3>Dog Breed Name = {(src.split('/')[4]).toLocaleUpperCase()}</h3>
            {(src)? <img src={src} width='500px' height='500px' /> : <p>Please click below button...</p>}
            <br/>
            <button onClick={getImage}>Get Dog</button>
        </div>
    </>
}

export default FetchApi