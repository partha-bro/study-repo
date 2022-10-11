import { useEffect, useState } from "react"
import { Link } from "react-router-dom"
import axios from 'axios'

const Table = () => {

    const [tableData, setTableData] = useState([])

    useEffect( () => {
            const fetchData = async () => {
                const options = {
                    method: 'GET',
                    url: 'http://localhost:5000/users'
                }
                const response = await axios(options)
                // console.log(response.data)
                setTableData((preval)=>{
                    return [
                        ...preval,
                        ...response.data
                    ]
                    
                })
            }
            fetchData().catch(console.error)
        },[]
    )

    return <>
        
        <table className="table table-striped table-hover container">
            
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                {tableData.map((tdata)=>{ 
                    return <tr>
                        <th scope="row">{tdata._id}</th>
                        <td>{tdata.username}</td>
                        <td>{tdata.password}</td>
                        <td><Link className="btn btn-warning" to={`/edit/${tdata._id}`}>Edit</Link></td>
                        <td><Link className="btn btn-danger" to={`/delete/${tdata._id}`}>Delete</Link></td>
                    </tr>
                })}
                
            </tbody>
        </table>
    </>
}

export default Table