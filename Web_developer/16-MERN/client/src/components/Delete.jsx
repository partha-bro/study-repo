import { useParams } from "react-router"
import Navbar from "./Navbar"
import axios from "axios"

const Delete = () => {

    const {id} = useParams()

    const deleteHandle = async () => {
        const options = {
            method: 'DELETE',
            url: `http://localhost:5000/delete/${id}`
        }
        const response = await axios(options)

        if(response.status === 200) alert('User was Deleted...!')
    }

    return <>
        <Navbar />
        <div className="container">
            <h1>Delete User id: {id}</h1>
            <button className="btn btn-danger" onClick={deleteHandle}>Delete User</button>
        </div>
    </>

}

export default Delete