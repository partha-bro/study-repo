const mongoose = require('mongoose')
const databaseName = "fruitsDB"
const url = "mongodb://localhost:27017/"+databaseName
// console.log(url)
mongoose.connect(url)

const fruitSchema = mongoose.Schema(
    {
        // schema validation
        name: {
            type: String,
            required: [true, 'Name is empty']
        },
        rating: {
            type:Number,
            min: 1,
            max: 10
        },
        review: {
            type: String
        }
    }
)

const fruitModel = mongoose.model('fruit',fruitSchema)

/* Single data instrt */
const fruitData = new fruitModel(
    {
        name:'Banana',
        rating: 9,
        review: 'Best'
    }
)

const pinapple = new fruitModel(
    {
        name: 'Pinapple',
        rating: 8,
        review: 'Better'
    }
)
pinapple.save()
// fruitData.save()

const personSchema = mongoose.Schema(
    {
        name: {
            type: String,
            required: [true, 'Name must be fill']
        },
        age: {
            type: Number,
            min: 18,
            max: 60
        },
        favoriteFruit: fruitSchema  // relation between person and fruit
    }
)
const Person = mongoose.model('Person',personSchema)
const personData = new Person(
    {
        name:'Arjun',
        age:27,
        favoriteFruit: pinapple
    }
)
// if(personData.save()){
//     console.log('data insert successfully')
// }

/* Multiple data insert using array */

const fruitData_1 = new fruitModel(
    {
        name:'Kiwi',
        rating: 9,
        review: 'Good'
    }
)
const fruitData_2 = new fruitModel(
    {
        name:'Apple',
        rating: 10,
        review: 'Best'
    }
)
const fruitData_3 = new fruitModel(
    {
        name:'Orange',
        rating: 7,
        review: 'Good'
    }
)
const fruitsArray = new Array( fruitData_1,fruitData_2,fruitData_3 )

// fruitModel.insertMany( fruitsArray, (err)=>{
//     if(err)
//         console.log('Error: '+err)
//     else
//         console.log('Data insert successfully')
// })

/* Read */
fruitModel.find( (err,fruits)=>{

    

    if(err) 
        console.log(err)
    else{
        fruits.forEach(
            (fruit)=>{
                console.log(fruit.name)
            }
        )
    }      
})

/* Update */
// fruitModel.updateOne(
//     //condition
//     {
//         rating:6
//     },
//     // data set
//     {
//         name: 'Cucumber'
//     },
//     // callback function
//     (err) =>{
//         if(err)
//             console.log(err)
//         else
//             console.log('Successfully update!')
//     }
// )

/* Delete */
// fruitModel.deleteOne(
//     //condition
//     {
//         name: 'Cucumber'
//     },
//     (err)=>{
//         if(err) console.log(err);
//         else console.log('1 record deleted!');
//         mongoose.connection.close()
//     }
// )