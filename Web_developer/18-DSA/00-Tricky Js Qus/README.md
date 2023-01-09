# JavaScript logical and tricky questions

## Info about why is output appear 

### Q1
    Why A->
    JS always follow hoising rule
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
    - hasOwnProperty() is present in prototype of object and it has validate the key of object if exists
    - key data type always string in object

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

### Q44
    Why A-> 
    - Here string and array is iterable but object is not iterable
    so error is occur in ...obj

### Q45
    Why A-> 
    - NaN full form : Not a Number 
    - data type of NaN is number

### Q46
    Why A-> 
    - set data type always store unique value

### Q47
    Why A-> 
    - delete is a oprator for delete object value and key and value will be empty
    - but delete array value and that index value will be empty and array length not tobe decrease
    
    - But delete op can not delete the object or array 

### Q48
    Why A-> 
    - {...data,...info} we can use spread op for merging

### Q49
    Why A-> 
    - here data variable use as object literecy [shorthand]
    - so output is {
        data as key : { data of object },
        info object destructure 
    }

### Q50
    Why A-> 
    - logical oprator compile left to right so whatever true value is present it return

### Q51
    Why A-> 
    - here false and '' empty string is represent 0 so output is null

### Q52
    Why A-> 
    - it return promises with fullfilled 5

### Q53
    Why A-> 
    - Parses JSON to a JS Value
    The JSON.parse () method parses a JSON string, constructing the JavaScript value or object described by the string.
    JSON.stringify () takes a JavaScript object as input and transforms it into a JSON string. 

### Q54
    Why A-> 
    - Here age variable scope is global, but name is again create let variable so that name scope is local and before define, we can call that variable
    - output age is 25
            name is error: cannot access 'name' before initialization

### Q55
    Why A-> 
    - here arrow system is present with 'I Love' argument so 
    output is I Love to program

### Q56
    Why A-> 
    - bitwise not op only gives true or false so condition will be false

### Q57
    Why A-> 
    - isNaN() method is check that variable is not a number

### Q58
    Why A-> 
    - Object.seal() method is use to seal the object, not able to add any property but we can change value of existing property

### Q59
    Why A-> 
    - map return a array but forEach doesn't return anything

### Q60
    Why A-> 
    - here ** means to the power
    - 3 to the power 3 is 27

### Q61
    Why A-> 
    - Always + unary op converts to integer
    - here -b means negative b
    - -(-b) means first compile -b is -2 then - of -2 is 2
    - but --b compile left to right so 1 [ i don't no how ]

### Q62
    Why A-> 
    - race() is inbuild in Promise class to execute who is first complete resolve that is output

### Q63
    Why A-> 
    - when person is null but inside members have different memory location so members have object of array result

### Q64
    Why A->
    - 1 is a truthy value. With the && operator, the right-hand value will be returned if the left-hand value is a truthy value. In this case, the left-hand value 1 is a truthy value, so 0 will gets assign to g, because its post-Incement oprand.

### Q65
    Why A->
    - floating numbers data type in number

### Q66
    Why A->
    - The delete operator returns a boolean value: true on a successful deletion, else it'll return false. However, variables declared with the var, const or let keyword cannot be deleted using the delete operator.

    - The name variable was declared with a const keyword, so its deletion is not successful: false is returned. When we set age equal to 21, we actually added a property called age to the global object. You can successfully delete properties from objects this way, also the global object, so delete age returns true.

### Q67
    Why A-> Ecma 2017 topic these are string methods
    - With the padStart method, we can add padding to the beginning of a string. The value passed to this method is the total length of the string together with the padding. The string "Akhil Sunder" has a length of 12. name.padStart(13) inserts 1 space at the start of the string, because 12 + 1 is 13.

    - If the argument passed to the padStart method is smaller than the length of the array, no padding will be added.

### Q68
    Why A->
    - String.raw returns a string where the escapes (\n, \v, \t etc.) are ignored! Backslashes can be an issue since you could end up with something like:

        const path = `C:\Documents\Projects\table.html`

        Which would result in:

        "C:DocumentsProjects able.html"

        With String.raw, it would simply ignore the escape and print:

        C:\Documents\Projects\table.html

        In this case, the string is Hello\nworld, which gets logged.

### Q69
    Why A->
    - console.log(isNaN(true));     // false
    console.log(isNaN(1));          // false
    console.log(isNaN(''));         // false
    console.log(isNaN('string'));   // true

    NOTE: true, false, '', null may be data type is different but value is integer.

### Q70
    Why A->
    - console.log(false == "0");    // true
      console.log(false === "0");   // false

### Q71
    Why A->
    - 4
      10

### Q72
    Why A->
    - Identifier 'x' has already been declared

### Q73
    Why A->
    - There are only six falsy values:
        undefined
        null
        NaN
        0
        '' (empty string)
        false
    
    - Function constructors, like new Number and new Boolean are truthy.

### Q74
    Why A->
    - A Symbol is not enumerable. The Object.keys method returns all enumerable key properties on an object. The Symbol won't be visible, and an empty array is returned. When logging the entire object, all properties will be visible, even non-enumerable ones.

    - This is one of the many qualities of a symbol: besides representing an entirely unique value (which prevents accidental name collision on objects, for example when working with 2 libraries that want to add properties to the same object), you can also "hide" properties on objects this way (although not entirely. You can still access symbols using the Object.getOwnPropertySymbols() method).

### Q75
    Why A->
    - [] is a truthy value. With the && operator, the right-hand value will be returned if the left-hand value is a truthy value. In this case, the left-hand value [] is a truthy value, so "Im' gets returned.

    - "" is a falsy value. If the left-hand value is falsy, nothing gets returned. n\'t doesn't get returned.

### Q76
    Why A->
    - SyntaxError: Unexpected end of input

### Q77
    Why A->
    - ANS: [5]
    Because in for loop semicolor add in end of for loop so next i is only increment 0 to 4 after that global statement will exicute and i value will be 4.

### Q78
    Why A->
    - Only the first numbers in the string is returned. Based on the radix (the second argument in order to specify what type of number we want to parse it to: base 10, hexadecimal, octal, binary, etc.), the parseInt checks whether the characters in the string are valid. Once it encounters a character that isn't a valid number in the radix, it stops parsing and ignores the following characters.

    - * is not a valid number. It only parses "7" into the decimal 7. num now holds the value of 7.

### Q79
    Why A->
    - true
    - true
    - Every Symbol is entirely unique. The purpose of the argument passed to the Symbol is to give the Symbol a description. The value of the Symbol is not dependent on the passed argument. As we test equality, we are creating two entirely new symbols: the first Symbol('foo'), and the second Symbol('foo'). These two values are unique and not equal to each other, Symbol('foo') === Symbol('foo') returns false.

### Q80
    Why A->
    -