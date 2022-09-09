# JEST - For JS Functionality Testing

## What is JEST?
    Jest is a JavaScript testing framework built on top of Jasmine and maintained by Meta. It was designed and built by Christoph Nakazawa with a focus on simplicity and support for large web applications. It works with projects using Babel, TypeScript, Node.js, React, Angular, Vue.js and Svelte.

## Install
    $ npm install jest

## Configure
    In package.json file write <"test": "jest"> value

## Run
    $ npm run test

## Extenstion
    All test files extension are filename.test.js

## Test Case

### Testing toBe() method:
    - sum.js file
        const sum = (a,b) => {
            return a+b
        }

        module.exports = sum
    
    - sum.test.js file
        const sum = require('./index')

        test('sum case', ()=>{
            expect(sum(2,4)).toBe(5)
        })

    => NOTE: Here test() method is use to test more than one test cases.
        Syntax: test( "message", ()=>{
            expect(received).toBe(expected)         // Case pass when result match
            expect(received).not.toBe(expected)     // Case pass when result different from expected result
        })

### Object testing toEqual() method:
    - toEqual() is use for object match
        test('Object Test Case',()=>{
            expect(obj()).toEqual({name:'arjun'})
            expect(obj()).not.toEqual({name:'arjun'})
        })
