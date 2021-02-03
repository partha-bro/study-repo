### Date: 01-02-21 ###

"""
    1. Fibonacci Series                                 Line = 7
    2. Print Fibonacci series by using user's input,    Line = 31
         how many numbers want to print 
    3. Default parameter in function                    Line = 46
    4. Global variable scope                            Line = 64
    5. List                                             Line = 74
    6. Slicing using in list                            Line = 84
    7. Assign value in list                             Line = 87
    8. Add to the list                                  Line = 95
        8.1 append()
    9. Insert data in perticaular index                 Line = 104
        9.1 insert()
    10. List concatination                              Line = 112
    11. Extended method                                 Line = 115
	    11.1 extend()
    12. Delete data from list                           Line = 145
        12.1 pop()
        12.2 del op
        12.3 remove()
    13. find data from list                             Line = 181
	    13.1 in keyword
    14. Count() method on list                          Line = 188
    15. sorted() function on list                       Line = 191
    16. sort() method on list                           Line = 194
    17. reverse() method on list                        Line = 209
    18. copy () method on list                          Line = 212
    19. clear() method on list                          Line = 216
    20. Exercise 1-shuffle() method of random module    Line = 219
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

# Delete data from list
data = [1,2,3,4,5,6,7]
# pop method
# pop method without index: delete last data from list
data.pop()
print(f'delete data using pop: {data}')
# pop method with index: delete index data from list
data.pop(2)
print(f'delete data using pop: {data}')

# del operator
del data[2]
print(f'delete data using del: {data}')
del mixed
data = 'delete list and assign a new string'
print(data)

# remove method
data = [1,2,3,4,5,6,7]
# remove data from list using value not index
data.remove(4)
print(f'delete data using remove: {data}')

"""
	NOTE:
		Add data to list
		1. append('value') : Add data in last position take value
		2. extend('list or value') : extend the list in one data to one index
		3. insert(index,'value') : Insert data in perticaular index

		Delete data from list
		1. pop()/pop('index') : delete data in last position take value or index
		2. remove('index') : it is use to remove data using value
		3. del/del list['index'] : delete data in perticaular index and delete the 				variable
"""

# find data from list by using IN keyword
if 4 in data:
	print(f'4 is present {data}')
else:
	print(f'4 is not present {data}')

data = ['mango','apple','grapes','orange','apple']
# Count() method on list
print(f"no of apple in list: {data.count('apple')}")

# sorted() function on list
print(f"Sorted() function the list: {sorted(data)}")

# sort() method on list
data.sort()
print(f"Sort the list: {data}")

"""
	Difference between sort, sorted and reverse in list:
	sort() is a method, call by list and result assign to that list.
	Does change original data.we can not direct use {list.sort()} in 	print instead of use {list}.
	syntax: list.sort()
	sorted() is a function, this function can take list on argument 	and result assign in different variable. Does not change original 		data.
	syntax: list_new = sorted(list)
	reverse() is a method, call by list and result assign to that list.
	Does change original data.we can not direct use {list.reverse()} 	in print instead of use {list}.
	syntax: list.reverse()
"""
# reverse() method on list
data.reverse()
print(f"Reverse Sort the list: {data}")
# copy () method on list
data_copy = data.copy()
print(f"Copy the list: {data_copy}")
# clear() method on list
data.clear()
print(f"Clear the list: {data}")

## Exercise 1
"""
    Define a prgram that take input by user's how many number of elements in a list
    Given list's element is index of new element like below example
    a list of 5 value of index is equal to a list of 5 index
    Example
    n = 6  
    a =     [0,4,5,2,1,3]
    output: [0,1,3,5,4,2]      5 = a[2], next a[5] = 3 is assign in output list[2]
"""
import random
num = int(input('Enter your number to list element: '))
a = []                                  # input list
opt = []                                # output list
for i in range(0,num):                  # make input list of random number
    a.append(i)
random.shuffle(a)
print(f'Your input list: {a}')
for i in a:
    opt.append(a[i])

print(f'Your output list: {opt}')