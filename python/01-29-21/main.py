# 29-01-21
"""
    1. Function                         Line = 12
    2. Functions with string argument   Line = 21
    3. Exercise 1                       Line = 28
    4. Exercise 2                       Line = 42
    5. Exercise 3                       Line = 54
    6. Exercise 4                       Line = 73
    7. Function inside call function    Line = 113
    8. Exercise 5 Palindrome            Line = 128
"""
# Functions with integer argument
# Syntax: def functionName():
#                     line of code
#                     return                
# print in function
def addTwoNo(a,b):
    print(f'5 + 5 = {a+b}')
addTwoNo(5,5)

# Functions with string argument
# return in function
def addTwoString(a,b):
    return a+b
add = addTwoString('Py','thon')
print(f'Py + thon = {add}')

### Exercise 1 ###
# find last char of user's name
def lastChar(name):
    ch_length_no = name[len(name)-1]    # both method is correct, 1st is complex
    ch_index_no = name[-1]              # 2nd is simple
    if ch_index_no == ch_length_no:
        return name[-1]     # -1 use for last index
    else:
        return 'Error'

    
name = input('enter your name: ')
print(f'Last Char of {name} is {lastChar(name)}')

# Exercise 2
"""
    Write a program that check random number is even or odd
"""
import random
num = random.randint(0,100)
def evenOdd(num):
    if num%2 == 0:
        return 'even'
    return 'odd'
print(f'{num} is {evenOdd(num)} number.')

# Exercise 3
"""
    Write a program that check random number is even then loop is stop
"""

def evenOdd(num):
    if num%2 == 0:
        return 'even'
    return 'odd'

import random
loop = False
while True:         # Infinity loop
    num = random.randint(0,100)
    if num%2 == 0:
        print(f'{num} is {evenOdd(num)} number.')
        break
    print(f'{num} is {evenOdd(num)} number.')

# Exercise 4
"""
    Find greatest number between three number
"""

def threeGreatNo(num1,num2,num3):
    if num1 > num2:
        if num1 > num3:
            print(f'Greatest no is {num1}')
        else:
            print(f'Greatest no is {num3}')
    else:
        if num2 > num3:
            print(f'Greatest no is {num2}')
        else:
            print(f'Greatest no is {num3}')

num1, num2, num3 = input('enter three number using comma: ').split(',')
# num1 = int(num1)
# num2 = int(num2)
# num3 = int(num3)
num1, num2, num3 = int(num1),int(num2),int(num3)
threeGreatNo(num1,num2,num3)

"""
    Find greatest number between three number 
    Above code don't use DRY so follow below code is use in DRY - Don't Repeat Yourself
"""
def threeGreatNo(num1,num2,num3):
    if num1 > num2 and num1 > num3:
        print(f'Greatest no is {num1}')
    elif num1 < num2 and num2 >num3:
        print(f'Greatest no is {num2}')
    else:
        print(f'Greatest no is {num3}')

num1, num2, num3 = input('enter three number using comma: ').split(',')
num1, num2, num3 = int(num1),int(num2),int(num3)
threeGreatNo(num1,num2,num3)

# function inside function
# make above code using function inside function using DRY
def greater(a,b):
    if a > b:
        return a
    else:
        return b

def greatNo3(num1,num2,num3):
    return greater(greater(num1,num2),num3)
    # great_1st = greater(num1,num2)
    # return greater(great_1st,num3)

print(f'Greater no is {greatNo3(10,20,15)} between 10,20,15')

# Exercixe 5
"""
    Define is_palindrome function that takes one word in string as input
    and return True if it is palindrome else return False

    palindrome - word that reads same backwords as forwards

    Example: madam - True or horse - False

    logic
    step 1 -> reverse the string
    step 2 -> compare reversed string with original string
"""
# my code
def strReverse(string):
    temp = ""
    neg_len = -(len(string)+1)
    for i in range(-1,neg_len,-1):
        temp += string[i]
    return temp
    # print(temp)
def is_palindrome(string):
    temp = strReverse(string)
    if temp == string:
        print(f'{string} is Palindrome')
    else:
        print(f'{string} is not Palindrome')

is_palindrome('naman')
is_palindrome('horse')

# Best code using step argument[::]
# reverse the string using step argument string[-1::-1]
def is_palindrome_bestCode(string):
    if string == string[-1::-1]:
        print(f'{string} is Palindrome')
    print(f'{string} is not Palindrome')

is_palindrome('naman')
is_palindrome('horse')