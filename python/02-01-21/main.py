### Date: 01-02-21 ###

"""
    1. Fibonacci Series                                 Line = 20
    2. Print Fibonacci series by using user's input,    Line = 37
         how many numbers want to print 
    3. Default parameter in function                    Line = 59
    4. Global variable scope                            Line = 75
    5. List                                             Line = 85
    6. Slicing using in list                            Line = 93
    7. Assign value in list                             Line = 96
    8. Add to the list                                  Line = 100
        8.1 append()
    9. Insert data in perticaular index                 Line = 107
        9.1 insert()
    10. List concatination                              Line = 112
    11. Extended method                                 Line = 115
"""

# Fibinacci Series using function
# 0 1 1 2 3 5 8 13 21 34
"""
    for i in range(1,11):
        print(i, end=" ") this code for ending action after print
"""
def fibbonacci(num_start,num_end):
    print(num_start, num_end,end=" ")
    for i in range(1,11):
        result = num_start + num_end
        num_start = num_end
        num_end = result
        print(result, end=" ")          # end=" " for print in one line
    print("")                           # END the line

fibbonacci(0,1)

# Print Fibonacci series by using user's input, how many numbers want to print 
def fibbonacci_seq(n):
    num_start = 0
    num_end = 1
    if n == 0:
        print('You don\'t want to print anything.')
    elif n == 1:
        print(num_start)
    elif n == 2:
        print(num_start, num_end)
    else:
        print(num_start, num_end, end=" ")
        for i in range(n-2):
            result = num_start + num_end
            num_start = num_end
            num_end = result
            print(result, end=" ")          # end=" " for print in one line
    # print("")                           # END the line

num = int(input('Enter your number for print fibonacci series: '))
fibbonacci_seq(num)

# Default parameter in function
"""
    Note: 1. Don't use default parameter in start or any midile of arguments
        like    def function_name(var_1 = 'value', var_2, var_3)  <-- Error
                def function_name(var_1 = 'value', var_2 = 'value', var_3)  <-- Error

                def function_name(var_1 = 'value', var_2 = 'value', var_3 = 'value')  <-- Correct
                def function_name(var_1, var_2 = 'value', var_3 = 'value')  <-- Correct
                def function_name(var_1, var_2, var_3 = 'value')  <-- Correct
"""
def funcWithDefaultValue(name,age = 25):
    print(f'Your name is {name} and age is {age}')

funcWithDefaultValue('Partha',24)
funcWithDefaultValue('Partha')

# Global variable scope
var = 'value out side function is accessable'

def funVar():
    global var
    print(var)

funVar()

# data structures
# List [in PHP list is equal to array]
# ordered collection of items

numbers = [1,2,3,4]
words = ['one','two','three']
mixed = ['one',1,'two',2]
print(f'{words} with {numbers} and mixed = {mixed}')

# Slicing using in list
print(f'slice of mixed {mixed[1::2]}')  # result [1, 2]

# Assign value in list
mixed[1::2] = [3,4]
print(f'Assign value= {mixed}')

# Add to the list
# append() method is use to add data in last position to the list
# it takes only one argument
words.append('four')
words.append('five')
print(f'Add some data: {words}')

# Insert data in perticaular index
length = len(words)
words.insert(length,'six') # insert data in 5 pos
print(f'Insert data in {length} data is {words}')

# List concatination
print(f'Both string concatination: {mixed + words}')

# Extend method
# concatination means add to list and make new list
# extend means add to list of that list, check below code
"""
    Difference between extend and append method
    extend() --> extend the list in one data to one index
                    ['one','two','three','four']
    append() --> add the list in last index (list inside the list)
                    ['one','two',['three','four']]
"""
mixed.extend(numbers)
print(f'extend list of mixed: {mixed}')

mixed.append(numbers)
print(f'append list of mixed: {mixed}')
