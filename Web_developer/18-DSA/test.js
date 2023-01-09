// Array

// Opration in Array

let arr1 = [0,1,2,3,4]
let arr2 = [5,6,7,8,9]
// Traversal
for(let i=0;i<arr1.length;i++){
    console.log(arr1[i]);
}
// complexity: f(n) = n
// Access
console.log(arr2[3]);

// Insert
let insert = 10
let index = 2
for(let i = arr1.length-1; i>=0; i--){
    arr1[i+1] = arr1[i]
    if(i === index){
        arr1[i] = insert
        break
    }
}
console.log(arr1);

// Delete
let deleteItem = 10
let indexItem = arr1.indexOf(10)
console.log(indexItem);
for(let i=indexItem;i<arr1.length;i++){
    arr1[i] = arr1[i+1]
}
arr1.length = arr1.length -1
console.log(arr1);

// Merging
for(let i=0;i<arr2.length;i++){
    arr1[arr1.length] = arr2[i]
}
console.log(arr1);

// Sorting
arr2 = [2,8,1,5,9,0]
for(let i=0;i<arr2.length;i++){
    for(let j=0;j<arr2.length;j++){
        if(arr2[i]<arr2[j]){
            temp = arr2[i]
            arr2[i] = arr2[j]
            arr2[j] = temp
        }
    }
}
console.log(arr2);

// Searching
let search = 9
let searchItem = (search) => {
    for(let i=0;i<arr2.length;i++){
        if(arr2[i]===search){
            return `${search} index is ${i}`
        }
    }
}

console.log( searchItem(search) || 'search item does not exist');

// Recursion
// fibonaci number
let fib = (n) => {
    if(n < 2) return 1
    return fib(n-2) + fib(n-1)
}

console.log(fib(4));