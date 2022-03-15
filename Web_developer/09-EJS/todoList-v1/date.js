
module.exports.getDate = ()=>{
    const day = new Date()
    const options = {
    weekday: 'long',
    day : 'numeric',
    month : 'long',
    year : 'numeric'
    }

    return day.toLocaleDateString("hi-IN" ,options)
}
