# DSA : Data Structure & Algorithms

## What is Data Structure?
    -> Way to organize data so that we can use this data efficiently.

## What is Algorithm?
    -> Steps or process to arrange the fellow data.

## Types of Data Structure
    2 types :   1 => Primitive
                    i) Null
                    ii) Number
                    iii) Undefinded
                    iv) Boolean
                    v) BigInt
                    vi) String
                    vii) Symbols

                2 => Non-Primitive
                    i) Arrays
                    ii) Object
                    iii) Files
                    iv) Lists
                        a) Linear list
                            x) Stack
                            y) Queue
                        b) Non-linear list
                            x) Tree
                            y) Graph

## Operations of Data Structure
    - Traversal
    - insertion
    - Deletion
    - Searching
    - Sorting
    - Merging

    Different Algo can be use for options

## Array 
    - Traversing and Accessing
    - Reverse
    - Insert
    - Delete
    - Search

### Merge two array
    - using simple 2 for loop and not sorted array
    - using 2 while loop and based on sorted array

### Array sorting

## Algorithim Complexity
    - Time Complexity
        It is mainly calculated by counting the number of steps to finish the execution.
        Time complexity = no of lines + total number of loop

        NOTE: Time Complexity is directly depends on input/data 
                    f(n) = Time Comp.

    - Space Complexity
        it is the amount of space required to solve a problem.
        Space complexity = Auxiliary space + size of variable

    - BIG O Notation :-) Use to denote complexity(both)

## Asymptotic analysis and notation
    Asymptotic notations are the mathematical notations used to describe the running time of an algorithm
    when the input tends towards a particular value or a limiting value.

    Example f(n) = 5(n^2) + 6n + 12
            Here n is input of data
            (n^2) means dual loop used
            5(n^2) means 5 line present in that loop
            6n means 1 loop with 6 line of code
            12 means other 12 line present in program [variable/function/etc...]

            // 10 inout of data array
            eg: f(10) = 5(10^2) + 6 * 10 + 12
                        = 5*100 + 60 + 12
                        = 500 + 72
                        = 572

            NOTE: But we ignore 6n and 12 because their are take small time in bigger data, so f(n) = 5(n^2)

    There are mainly three asymptotic notations:
        - Big-O notation [ worst case ]
        - Omega notation [ avarage case ]
        - Theta notation [ best case ]

## Recursion DS
    Recursion in data structure is when a function calls itself indirectly or directly,
     and the function calling itself is known as a recursive function. 
     It's generally used when the answer to a larger issue could be depicted in terms of smaller problems.
    
    Type:
        - directly
            Functions are called themselves
        - indirectly
            Indirect recursion is where functions call other functions to call the original function.

## Head and Tail Recursion
#### Understand Debugger?
#### How js works (Call Stack Main)
#### Head recursion
    - If the recursive call occurs at the start of a method, it is called a head recursion.
#### Tail recursion
    - If the recursive call occurs at the end of a method, it is called a tail recursion.

### Recursion Array with Reverse

## Stack
    It is a linear data structure that follows a particular order in which the operations are performed.
    LIFO( Last In First Out )

    Opration in stack
    - push() to insert an element into the stack
    - pop() to remove an element from the stack
    - top() Returns the top element of the stack.
    - isEmpty() returns true if stack is empty else false.
    - size() returns the size of stack.

#### Reverse String with Stack
    - understand logic for reverse string with stack
    - Make Stack push and pop both operations
    - Define string and convert to array
    - Push and Pop string to stack
    - Get reverse string back from stack

#### Stack with Class
    - Understand logic to implement stack with class
    - make stack class
    - make push and pop both functions for operations

#### Reverse String with Stack with class

## Queue

#### What is Queue
    A Queue is defined as a linear data structure that is open at both ends and the operations are performed in First In First Out (FIFO) order.

#### enqueue and dequeue operations
    - Queue: the name of the array storing queue elements.
    - Front: the index where the first element is stored in the array representing the queue.
    - Rear: the index where the last element is stored in an array representing the queue.

    - Enqueue -> add item in queue from front
    - Dequeue -> remove item in queue from rear