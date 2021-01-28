# 27-01-21

# infinity loop
"""
    Infinity loop means never ending loop and we want to stop it by pressing 'ctrl+c'
    NOTE: True is correct but true or TRUE is incorrect.
"""
# while True:
#     print('infinity loop')

# for loop
for i in range(10):                             # range is 0 to 9 and i = 0
    print(f'Hello Python no {i}')

for i in range(1,11):                           # range is 1 to 10 and i = 1
    print(f'Hello Python no {i}')

# Example 1
# sum of 10 numbers
total = 0
for i in range(1,11):
    total += i
print(f'Total 1 to 10 sum = {total}')

# sum of 10 numbers in range by user's input
num_start, num_end = input('enter your start and end number using comma: ').split(',')
num_start = int(num_start)
num_end = int(num_end)
total = 0
for i in range(num_start,num_end):
    total += i
print(f'Total {num_start} to {num_end} sum = {total}')

# Exercise 1
# Ask user a number and sum of each digits
num = input('Enter a number: ')
total = 0
length = len(num)
for i in range(length):
    total += int(num[i])
print(f'Total of each digits {num}: {total}')

# Exercixe 2
# ask user a name and count each character
# 'Harshit Vashisth'
# H : 1
# a : 2
# r : 1
# s : 3
# h : 3
# i : 2
# t : 2
#   : 1
# V : 1

# name = 'Harshit Vashisth'
# temp = ""
# for i in range(len(name)):
#     if name[i] not in temp:
#         temp += name[i]
#         print(f'{name[i]} : {name.count(name[i])}')

# break and continue
for i in range(10):
    if i == 2:
        break
    print(i) 

for i in range(5):
    if i == 3 or i == 4:
        continue
    print(i) 

# MPDIFY NUMBER GUESSING GAME
"""
    user guess te number until user find the exact number.
    if user enter lower than lucky number then print too low
    if user enter higher than lucky number then print too high
    when he find correct number then print: you win, and you guessed this number in counter/4 times
"""
import random
num = int(input('Enter your lucky number between 0 to 100: '))
lucky_num = random.randint(1,100)
for i in range(100):
    if num == lucky_num:
        print(f'you win, and you guessed this number in {i} times')
        break
    elif num > lucky_num:
        print('too high')
        num = int(input('Try again: '))
        continue
    else:
        print('too low')
        num = int(input('Try again: '))
        continue
# This above program is correct and working but it has one drawbacks, that is for loop is run between 100 time 
# we can make truely unlimited run when user can guess correct number
# Make program use DRY style - Don't Repeat Yourself
import random
lucky_num = random.randint(1,100)
guess = 0
while True:
    num = int(input('Enter your lucky number between 0 to 100: '))
    if num == lucky_num:
        print(f'you win, and you guessed this number in {guess} times')
        break
    else:
        if num > lucky_num:
            print('too high')
        else:
            print('too low')
        guess += 1
    
# step argument in range()
print('go forward in for loop');
for i in range(1,10,2):
    print(i)

# go backward
print('go backword in for loop');
for i in range(10,0,-2):
    print(i)

# for loop using a string
# old style
name = 'partha'
for i in range(len(name)):
    print(name[i])

# in python new style
name = 'arjun'
for i in name:
    print(i)