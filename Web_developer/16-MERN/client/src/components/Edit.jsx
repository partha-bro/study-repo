import Navbar from "./Navbar"
import { useState, useEffect } from "react"
import { useParams } from "react-router"
import axios from "axios"

const Edit = () => {

    const {id} = useParams()

    const [input, getInput] = useState(
        {
            username: '',
            password: ''
        }
    )

    useEffect( () => {
        const fetchData = async () => {
            const options = {
                method: 'GET',
                url: `http://localhost:5000/user/${id}`
            }
            const response = await axios(options)
            // console.log(response.data)
            getInput(response.data)
        }
        fetchData().catch(console.error)
    },[])

    const getInputValue = (e) => {
        e.preventDefault()
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
        console.log(input)
        const options = {
            method: 'PATCH',
            url: `http://localhost:5000/edit/${id}`,
            data: input
        }
        const response = await axios(options)
        console.log(response)

        if(response.status === 200) alert('Data updated...!')
    }

    return <>
        <Navbar />
        <div className="container">
            <h1>Edit User id:{id}</h1>
            <form>
                <div className="input-group mb-3">
                    <span className="input-group-text" id="basic-addon1">Username: </span>
                    <input type="text" onChange={getInputValue} value={input.username} className="form-control" name='username' aria-label="Username" aria-describedby="basic-addon1" />
                </div>
                <div className="input-group mb-3">
                    <span className="input-group-text" id="basic-addon2">Password: </span>
                    <input type="password" onChange={getInputValue} value={input.password} className="form-control" name='password' aria-label="Password" aria-describedby="basic-addon2" />
                </div>
                <button type='submit' className="btn btn-lg btn-warning" onClick={onSubmit}>Submit</button>
            </form>
            
        </div>
    </>
}

export default Edit