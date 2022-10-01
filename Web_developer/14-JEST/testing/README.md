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

### Extra Methods to use
    - expect(value)
    - .not
    - .resolves
    - .rejects
    - .toBe(value)
    - .toEqual(value)
    - .toBeGreaterThan(number | bigint)
    - .toBeGreaterThanOrEqual(number | bigint)
    - .toBeLessThan(number | bigint)
    - .toBeLessThanOrEqual(number | bigint)
    - .toBeNull()
    - .toContain(item)
    - .toThrow(error?)

### beforeEach(()=>{})
    This function use for run code before every test
    ex: beforeEach(()=>{
        console.log('Start the testing...');
    })

# Supertest - For API Testing

## What is supertest
    This module is to provide a high-level abstraction for testing HTTP, while still allowing you to drop down to the lower-level API provided by superagent.

## Install
    $ npm install supertest

## Use
    use in test.js file along with jest module

    - fileName.js
        const express = require('express');

        const app = express();

        app.get('/user', function(req, res) {
        res.status(200).json({ name: 'john' });
        });

    - fileName.test.js
        const request = require('supertest');
        const { app } = require('./fileName')

        describe('API Test Case', ()=>{
            test('/ Path Test Case', ()=>{
                request(server)
                .get('/')
                .expect(200)
                .expect({message:'ok'})
            })
            
        })