const { sum, obj, fetchData, promisesData } = require('./index')

beforeEach(()=>{
    console.log('Start the testing...');
})
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