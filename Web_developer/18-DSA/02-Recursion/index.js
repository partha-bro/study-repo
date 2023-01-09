/*
Recursion DS
    Recursion in data structure is when a function calls itself indirectly or directly,
     and the function calling itself is known as a recursive function. 
     It's generally used when the answer to a larger issue could be depicted in terms of smaller problems.
    
    Type:
        - directly
        - indirectly
*/

// Directly Recurstion
// Factorial number using recursion
const facto = (n) => {
    if(n==0){
        return 1
    }
    return n*facto(n-1)
}
console.log(facto(5))

// Indirectly Recurstion
let money = 100
let totalApple = 0

const buyApple = (m) => {
    if(m>0){
        console.log({[m]: totalApple})
        buyMore(m)
    }else{
        console.log(`I don't have more money and ${totalApple} apples`)
    }
}

const buyMore = (n) => {
    totalApple++
    buyApple(n-20)
}

buyMore(money)

// Head recursion
    const headRec = (n) => {
        if(n>0){
            headRec(n-1)
        }
        console.log(n)
    }
    headRec(5)

// Tail recursion
    const tailRec = (n) => {
        console.log(n)
        if(n>0){
            tailRec(n-1)
        }
    }
    tailRec(5)

// Recursion Array with Reverse
let arr = [1,2,3,4,5,6]
let temp

const customeReverse = (arr,start,end) => {
    if(start<=end){
        temp = arr[start]
        arr[start] = arr[end]
        arr[end] = temp
        customeReverse(arr,start+1,end-1)
    }
    return arr
}

console.log(customeReverse(arr,0,arr.length-1))