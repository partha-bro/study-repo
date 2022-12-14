# JavaScript logical and tricky questions

## Info about why is output appear 

### Q1
    Why A->
    - var is valid after the call and defind because it runs in scope, but program knows the variable is created but not assign value so it gives undefind.
    - let is run line by line so it gives error.

### Q2
    Why A->
    - var contains global scope so after setTimeout finish it gives always 3 in three times of iteration 

### Q3
    Why A->
    - let contains local scope so after setTimeout finish it gives always 0,1,2 in three times of iteration 

### Q4
    Why A->
    - true is boolean datatype
    - +true is number datatype because it converts to 1

### Q5
    Why A->
    - ! is not oprator, because it convert true to false or vice versal

### Q6
    Why A->
    - bird[data] : here data is variable and it place their value
    - bird["size"] : here "size" is value and object call for value
    - bird.size : here size is key and object call for value
    - bird.data : undefind, because data key is present in that obj

### Q7
    Why A->
    - here d = c means not copy the object but it refence it.

### Q8
    Why A->
    - var is allow multiple declaration

### Q9
    Why A->
    - let doesn't allow multiple declaration and it gives error

### Q10
    Why A->
    - == is check value, not data type
    - === is check value and data type

### Q11
    Why A->
    - here spelling mistake so name was undefind.

### Q12
    Why A->
    - Here function and object have same name but different behaviour.

### Q13
    Why A-> 
    - here number and string have + oprator but it behaves like concatenation

### Q14
    Why A-> 
    - post increment and pre increment

### Q15
    Why A-> 
    - In rest parameter of argument data type is object

### Q16
    Why A-> 
    - 'use strict' statement is use for strictly use javascript and it gives an "error age is not defind"

### Q17
    Why A-> 
    - eval() is opration the argument value but here value converts to number so output is 105

### Q18
    Why A-> 
    - When session is close then it destroy.

### Q19
    Why A-> 
    - hasOwnProperty() is present in prototype of object and it has number or string argument in key of object 

### Q20
    Why A->
    - here key is same so last same key value is overwrite

### Q21
    Why A->
    - use continue statement ti direct increment without print i=3

### Q22
    Why A->
    - Here output is 
    first
    third
    second
    because of call stack

### Q23
    Why A->
    - output is 
    button
    second div
    first div

### Q24
    Why A->
    - bind () does the same thing as call (). The main difference is that bind () does not automatically invoke the method on which it got used. Instead, it only binds (assigns) the method to the new object. In contrast, call () automatically invokes the method on which you used it.

    - console.log(sayHi.call(person, 21)) Here the method automatic invoke
    - console.log(sayHi.bind(person, 21)) here the method will return
    - console.log(sayHi.bind(person, 21)()) here that method will executed

### Q25
    Why A->
    - data type is number because arrow function will return 0

### Q26
    Why A->
    - data type is function because ti return arrow function

### Q27
    Why A->
    - typeof 1 is number, but typeof typeof 1 is string, because
    $ typeof typeof 1 
    $ typeof number 
    $ string 

### Q28
    Why A->
    - it push the 11 data in 6 position and in between undefind/empty space is occur

### Q29
    Why A->
    - here it gives infinte array in 3 position because we can assign same array to same array index position

### Q30
    Why A->
    Everything in javascript is either a primitive or Object

### Q31
    Why A->
    - ! is a bitwise op, it always return boolean

### Q32
    Why A-> 
    - Output:
    second
    first
    third

### Q33
    Why A-> 
    - spread oprate is spread one level of array/object/string

### Q34
    Why A->
    - left to right compile so + behave like concatenation

### Q35
    Why A->
    - array data type is object
    - both array is not same because it store different memory location. 

### Q36
    Why A->
    - here return an array of three element of undefind because if return no value

### Q37
    Why A->
    - here we pass the odject memory so changes apply to person also

### Q38
    Why A->
    - overwrite the value of 'make' key

### Q39
    Why A->
    - output are:
    x is not defind
    typeof x is undefind
    because x has a local scope

### Q40
    Why A->
    - output are:
    y is 100
    typeof y is number
    because y has no let or const so this has global scope

### Q41
    Why A-> 
    - here var xy is local variable for arrow function so output is 100

### Q42
    Why A-> 
    - !true converts false and represent 0 and true is 1 so 
    0 - 1 = -1

### Q43
    Why A-> 
    - here +"10" converts to number 10 and true converts 1 so answer is 11