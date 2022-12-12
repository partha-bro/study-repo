console.log('Array Traversing and Accessing')

let arr = [ 9,11,13,0,2,3 ]

// Traversing
for ( i=0; i<arr.length; i++) console.log(arr[i])

arr.forEach((item,i)=>{console.log(item)})

for (let key in arr) {
    console.log(arr[key])
}

for (let value of arr) {
    console.log(value)
}

// Access
console.log( arr[4] )

// Reverse
console.log(arr.reverse())

// Insert
console.log( arr[2]=6,arr )

console.log( arr.push(16),arr )

console.log( arr.splice(1,0,5),arr )

// Logic behind splice(), we can crate that logic in mannually.
/* 
    Logic: Here, data insert means when a new data insert in perticular position 
    then that element and all right sight element will move t0 right
*/
let spliceArr = [9,11,6,0,2,3,16]
let position = 1
let insertItem = 5 
let customSpliceAdd = (spliceArr,position,insertItem) => {
    for(i=spliceArr.length-1;i>=0;i--){
        spliceArr[i+1] = spliceArr[i] // push array
        if(i === position){
            spliceArr[i] = insertItem
            break
        }
    }
    return spliceArr
}

console.log( customSpliceAdd(spliceArr,position,insertItem) )

// Delete
console.log( arr.pop() )

console.log( arr.splice(arr.indexOf(0),1),arr)

console.log( arr.splice(5,1),arr)

// Logic behind splice(), we can crate that logic in mannually.
/* 
    Logic: Here, data delete means when a existing data delete in perticular position 
    then all right sight element will move to left
*/
let spliceArr2 = [9,5,11,6,2,3]
let position2 = 2
let customSpliceDel = (spliceArr2,position2) => {
    for(i=position2;i<spliceArr2.length-1;i++){
          spliceArr2[i] = spliceArr2[i+1]
    }
    spliceArr2.length = spliceArr2.length-1
    return spliceArr2
}

console.log( customSpliceDel(spliceArr2,position2) )

// Search in linear
console.log( arr.includes(6))

console.log( arr.indexOf(6))

for (let iterator of arr) {
    if(iterator===6){
        console.log(iterator)
        break
    }
}

// manual logic 
for(i=0;i<arr.length;i++){
    if(arr[i]===6){
        console.log(true)
        break
    }
}


// Merge Two array
/* 
    Two array merge and put the elements in a new array
*/
let arr1 = [ 1,2,3,4,5 ]
let arr2 = [ 6,7,8,9,0 ]

console.log(arr1.concat(arr2), arr1,arr2)

console.log( [...arr1, ...arr2] )

// Manual
let arr3 = []

// using two for loop not nested [ Solution 1 ]
for(i=0;i<arr1.length;i++){
    arr3[i] = arr1[i]  
}
for(i=0;i<arr2.length;i++){
    arr3[arr1.length+i] = arr2[i]
}
console.log( arr3)

// using while loop [ Solution 2 ]
