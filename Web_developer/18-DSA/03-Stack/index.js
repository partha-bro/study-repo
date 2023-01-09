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

// my Initial Logic
{
    let str = 'Arjun'
    let stack = str.split('')

    console.log(stack);

    stack.reverse()
    console.log(stack);

    console.log(stack.join(''))
}

// Actual Logic without function
{
    let stack = []
    let currentSize = stack.length

    const push = (newVal) => {
        stack[currentSize] = newVal
        currentSize+=1
    }

    const pop = () => {
        const delVal = stack[currentSize-1]
        currentSize-=1
        stack.length = currentSize
        return delVal
    }

    const reverseStr = (item) => {
        for(let i=0;i<item.length;i++){
            push(item[i])
        }
        for(let j=0;j<item.length;j++){
            item[j]=pop()
        }
        return item
    }

    let str = 'Arjun'
    str = str.split('')
    console.log(reverseStr(str).join(''))
}
/*
#### Stack with Class
    - Understand logic to implement stack with class
    - make stack class
    - make push and pop both functions for operations
*/
{
    class Stack {
        item = []
        currentSize
        maxSize
        constructor(size){
            this.maxSize = size
            this.currentSize = this.item.length
        }
        push(newVal){
            if(this.currentSize>=this.maxSize){
                console.log('Stack is full');
            }else{
                this.item[this.currentSize] = newVal
                this.currentSize++
            }
        }
        pop(){
            if(this.currentSize>0){
                this.currentSize--
                this.item.length = this.currentSize
            }else{
                console.log('stack is already empty');
            }
        }
        display(){
            return this.item
        }
    }

    const st1 = new Stack(5)
    st1.push(20)
    st1.push(30)
    st1.push(40)
    st1.push(50)
    st1.push(60)
    st1.push(70)
    console.log(st1.display());
    st1.pop()
    st1.pop()
    console.log(st1.display());
}

// #### Reverse String with Stack with class
{
    class Stack{
        data = []
        constructor(){
            this.currentSize = this.data.length
        }
        push(newVal){
            this.data[this.currentSize] = newVal
            this.currentSize+=1
        }
        pop(){
            const delItem = this.data[this.currentSize-1]
            this.currentSize-=1
            this.data.length = this.currentSize
            return delItem
        }
        display(){
            return this.data
        }
    }

    let str = 'Arjun'
    str = str.split('')
    const st1 = new Stack()
    
    const reverse = (item) => {
        item
        for (const val of item) {
            st1.push(val)
        }
        console.log(st1.display());
        for(let i=0;i<item.length;i++){
            item[i] = st1.pop()
        }
    }

    reverse(str)
    console.log(str.join(''))
}