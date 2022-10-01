import ReactDOM from 'react-dom'
import { Link } from 'react-router-dom'

const Portal = () => {

    return ReactDOM.createPortal(<ModalComponent/>, 
    document.getElementById('portal'))
}

const ModalComponent = () => {

    return <>
        <h1>I am Modal and run in 'portal' node.</h1>
        <Link to='/'>Home</Link>
    </>
}

export default Portal