const { sum, obj, fetchData, promisesData,server } = require('./index')
const request = require('supertest')

describe('Normal JS code Group Test Case', ()=>{
    // beforeEach(()=>{
    //     console.log('Start the testing...');
    // })
    // All Test Ceses
    test('Sum Test Case', ()=>{
        expect(sum(2,4)).not.toBe(5)
        expect(sum(2,4)).toBe(6)
    })
    
    test('Object Test Case',()=>{
        expect(obj()).not.toEqual({name:'Arjun'})
    })
    
    test('Callback Function Test Case', done=>{
        const callback = (data) => {
            try {
                expect(data).toBe("Fetched Data")
                done()
            } catch(err){
                done(err)
            }
        }
        fetchData(callback)
    })
    
    test('Promises Test Case', ()=>{
        return promisesData().then(data=>{
            expect(data).toBe('Success')
        })
    })
    
    test('Async Await Test Case',async ()=>{
        const data = await promisesData()
        expect(data).toBe('Success')
    })
})

describe('API Test Case', ()=>{

    test('/ Path Test Case', ()=>{
        request(server)
        .get('/')
        .expect(200)
        .expect({message:'ok'})
    })
    
})


describe('Test Case Group', ()=>{
    test('Case 0 Boolean',()=>{
        expect(true).toBe(true)
    })
    test('Case 1 Number',()=>{
        expect(2+4).toBe(6)
        expect(2+4).not.toBe(7)
    })
    test('Case 2 String',()=>{
        expect('Test Case Match').toBe('Test Case Match')
    })
    // toEqual() is use for object and array
    test('Case 3 Object',()=>{
        expect({name:'arjun'}).toEqual({name:'arjun'})
    })
    test('Case 4 Array',()=>{
        expect([1,2,3,4,5]).toEqual([1,2,3,4,5])
    })
})
