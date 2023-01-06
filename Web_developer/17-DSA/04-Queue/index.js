console.log('Queue with JS');

// Queue oprations
{
    const queue = []
    let currentSize = queue.length
    let maxSize = 5

    const enqueue = (newVal) => {
        if(currentSize<maxSize){
            queue[currentSize] = newVal
            currentSize++
        }else{
            console.log('Queue is full');
        }
        
    }
    const dequeue = () => {
        if(queue.length===0){
            console.log('Queue is Empty');
        }else{
            for(let i=0;i<queue.length;i++){
                queue[i] = queue[i+1]
            }
            currentSize-=1
            queue.length = currentSize
        }
    }
    const display = () => {
        return queue
    }

    enqueue(10)
    enqueue(20)
    enqueue(30)
    enqueue(40)
    enqueue(50)
    enqueue(60)     // Queue is full
    console.log(display());
    dequeue()
    dequeue()
    dequeue()
    dequeue()
    dequeue()
    dequeue()       // Queue is Empty
    console.log(display());
}