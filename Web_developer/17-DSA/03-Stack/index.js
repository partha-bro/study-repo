// Stack

// Opration in stack
let arr = []
let currentSize = arr.length
let maxLength = 5


// - push() to insert an element into the stack
const push = (newValue) => {
    if(currentSize>=maxLength){
        console.log('Stack is full.')
        return null
    }else{
        arr[currentSize] = newValue
        currentSize++
    }
}

push(10)
push(20)
push(30)
push(40)
push(50)
push(60)
console.log(arr)

// - pop() to remove an element from the stack
const pop = () => {
    if(currentSize<=0){
        console.log('Stack is Empty.')
        return null
    }else{
        currentSize--
        arr.length = currentSize
    }
}

pop()
pop()
pop()
// pop()
// pop()
// pop()
console.log(arr)

// - top() Returns the top element of the stack.

const top = () => {
    return arr[arr.length-1]
}

console.log(top())

// - isEmpty() returns true if stack is empty else false.

const isEmpty = () => {
    if(arr.length === 0){
        return true
    }else{
        return false
    }
}

console.log(isEmpty())

// - size() returns the size of stack.

const size = () => {
    return arr.length
}

console.log(size())

// Reverse String with Stack
/*
    - understand logic for reverse string with stack
    - Make Stack push and pop both operations
    - Define string and convert to array
    - Push and Pop string to stack
    - Get reverse string back from stack
*/
