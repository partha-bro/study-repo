import { useState } from "react"
import Navbar from "./Navbar"
import axios from 'axios'

const Add = () => {

    const [input, getInput] = useState(
        {
            username: '',
            password: ''
        }
    )

    const getInputValue = (e) => {
        const {name,value} = e.target
        // console.log(name,value)
        getInput((preval)=>{
            return {
                ...preval,
                [name]:value
            }
        })
    }

    const onSubmit = async (e) => {
        e.preventDefault()
        const options = {
            method: 'POST',
            url: 'http://localhost:5000/add',
            data: input
        }
        const response = await axios(options)
        console.log(response)

        if(response.status === 201) alert('Data Saved...!')
    }

    return <>
        <Navbar />
        <div className="container">
            <h1>Add User</h1>
            <form>
                <div className="input-group mb-3">
                    <span className="input-group-text" id="basic-addon1">Username: </span>
                    <input type="text" onChange={getInputValue} value={input.username} className="form-control" name='username' aria-label="Username" aria-describedby="basic-addon1" />
                </div>
                <div className="input-group mb-3">
                    <span className="input-group-text" id="basic-addon2">Password: </span>
                    <input type="password" onChange={getInputValue} value={input.password} className="form-control" name='password' aria-label="Password" aria-describedby="basic-addon2" />
                </div>
                <button type='submit' className="btn btn-lg btn-success" onClick={onSubmit}>Submit</button>
            </form>
        </div>
    </>
}

export default Add