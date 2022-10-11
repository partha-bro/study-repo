import { Link } from "react-router-dom"
import Navbar from "./Navbar"
import Table from "./Table"
import "./Home.css"

const Home = () => {

    return <>
        <Navbar />
        <div className="container mt-5 heading">
            <div className="row">
                <div className="col-lg-6 col-md-3 col-sm-2">
                    <h1><i>All Users Info</i></h1>
                </div>
                <div className="col-lg-6 col-md-3 col-sm-2">
                    <Link to='/add' className='btn btn-primary'>New User</Link>
                </div>
            </div>
            <hr />
        </div>
        <Table />
    </>
}

export default Home