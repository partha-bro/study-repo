// Problem 2: String Anagram
//    'Hello'-> 'llleo'
//    'Hello'-> 'lhleo'

/*
    What is anagram string? 
    An anagram of a string is another string that contains the same characters, 
    only the order of characters can be different. 
    For example, “abcd” and “dabc” are an anagram of each other.
*/

// logic part
/*
    Condition:
     - both length must be same
     - first count each char of length 
        { h:1,e:1,l:2,o:1}
     - second if available then decrease the count to 0 
        { h:0,e:0,l:0,o:0}
     - else it return string not anagram
*/

// code 
{
    const anagramFn = (str1,str2) => {
        if(str1.length !== str2.length){
            return 'Not Anagram'
        }else{
            return {str1,str2}
        }
    }

    console.log(anagramFn('Hello', 'llleo'))
    console.log(anagramFn('Hello', 'lhleo'))
    console.log(anagramFn('Arjun', 'njra'))
}