// Method
const sum = (a,b) => {
    return a+b
}
console.log(`Sum Result = ${sum(5,1)}`);

// Object
const obj = () => {
    return {name:'arjun'}
}
console.log(`Object Info = ${obj().name}`);

// Callback function
const fetchData = (callBack) => {
    return callBack("Fetched Data")
}

// Promises
const promisesData = () => {
    return new Promise( (resolve,reject)=>{
        resolve('Success')
    })
}

const server = require('express')()

server.get('/',(req,res) =>{
    res.status(200).json({message:'ok'})
})

server.listen(5000)

module.exports = { sum, obj, fetchData, promisesData,server }