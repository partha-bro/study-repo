### Date: 14-1-2021
"""
    1. Concatenation                        Line = 15
    2. User input                           Line = 28
    3. int() function and split() function  Line = 33
    4. Assign more than one value in one    Line = 42
        assign op(=)
    5. String formatting                    Line = 54
    6. Exercise 1                           Line = 59
    7. String indexing                      Line = 69
    8. String slicing                       Line = 81
    9. String slicing with step argument    Line = 89
    10. Exercise 2                          Line = 93
"""
# only string concatination is possible

first_name = 'DS'
last_name = 'Digital'
print(first_name + " " +last_name)

# concatination of string with number

# print(first_name + 3) # data type error
print(first_name + '3') # no error
print(first_name + str(3)) # no error
print((first_name + " ") * 3) # 3 times of name

# user input
# user input always string data type.
user = input('enter your username:')
print('Your username is '+user)

# int() fuction
number_one = input('enter 1st no') # 20
number_two = input('enter 2nd no') # 20
total = number_one + number_two
print('Total = '+total) # output: 2020 as two string concatenation 
total = int(number_one) + int(number_two)
print(total) # output: 40 as two integer addition
print('Total = '+str(total))  # total variable is integer so not concatetation with string [convert string]

# Assign more than one value in one assign op(=)
# initialization value to variable in one statement
name, age = 'partha',25
print('Your name is ' + name + ' and age is ' + str(age))

# assign same value more than one value
x = y = z = 1
print(x+y+z) # 1+1+1=3

# input more than two value in one statement
name, age = input('Enter your name and age').split()

# String formatting 
print('name: '+ name + ' age: '+ age) # Normal syntax
print('name: {} age: {}'.format(name,age)) # python 3 string formatting syntax
print(f'name: {name} age: {age}') # python 3.6 string formatting syntax

### Exercise 1 ###

# Q. Ask user to input 3 numbers and you have to print average of three numbers using string formatting.
# Bouns:- try to take all three comma separated inputs in one line.

# Answer
no_1, no_2, no_3 = input('Enter three numbers with comma separated= ').split(',')
avg = (int(no_1)+int(no_2)+int(no_3))/3
print(f'Your avg number is {avg}')

# String indexing
lang = "python"
# char = start     end
# p    =   0       -6
# y    =   1       -5
# t    =   2       -4
# h    =   3       -3
# o    =   4       -2
# n    =   5       -1
print(lang[1]) # y
print(lang[-5]) # y

# String Slicing

print(f'lang[0]= {lang[0]}') # p -> 0 index char
print(f'lang[1:3]= {lang[1:3]}') # yt -> [starting index : stop index - 1]
print(f'lang[:]= {lang[:]}') # python -> all char as a string
print(f'lang[1:]= {lang[1:]}') # ython -> 1 index to last index of char
print(f'lang[:4]= {lang[:4]}') # pyth -> 0 index to 3 index of char

# String slicing with step argument
print('partha'[1:5:2]) # at -> 1 index to 4 index of char with 2 steps jump
print('partha'[5::-2]) # at -> 5 index to 0 index of char with -2 steps jump [reverse]

### Exercise 2 ###
# Q. Ask user name and print back username in reverse order. 
# Note:- try to make your program in 2 lines using string formatting

# Answer
name = input('Enter your name')
print(f'Your name is in reverse order {name[-1::-1]}')
