// Problem 1: Checking sum zero 
// [-5,-4,-3,-2,0,2,4,6,8] -> input

// my first logic without sort
// Time Complexity: f(n) = 4(n)^2 + 3
// O(n^2) quadratic time complexity 
{
    const checkSumZero = (item) => {
        let outerFn = 0
        let innerFn = 0
        for(let i=0;i<item.length;i++){
            outerFn+=1
            for(let j=0;j<item.length;j++){
                innerFn+=1
                if((item[i]+item[j]) === 0){
                    return [item[i],item[j],{outerFn,innerFn}]
                }
            }
        }
    }

    const input = [-5,-4,-3,-2,0,2,4,6,8]
    console.log(checkSumZero(input));
}

// Optimise above code [Best logic Explained]
// Aboove inner loop is run more time, so how to reduce it
/*
    we can compare like queue but array must be in sort
    Take first number of first element and take second number of last element
    condition
        1: when sum of two value is greater than 0 then only move second element [decresing]
        2: when sum of two value is less than 0 then only move first element [increasing]
        3: otherwise return result
*/
{
    const checkSumZero = (item) => {
        let couterFn = 0
        let left = 0
        let right = item.length - 1
        while(left<right){
            couterFn++
            let sum = item[left]+item[right]
            if(sum===0){
                return [item[left],item[right],{couterFn}]
            }else if(sum>0){
                right--
            }else{
                left++
            }
        }
    }

    // make sure array must be sort
    const input = [-5,-4,-3,-2,0,2,4,6,8]
    console.log(checkSumZero(input));
}
// Time Complexity: f(n) = 3(n) + 2
// O(n) linear time complexity