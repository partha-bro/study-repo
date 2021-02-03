### Date: 03-02-21 ###

"""
    1. Compare list                         Line = 21
        1.1 is op
        1.2 == op
    2. Join and split method                Line = 41
        2.1 split()
        2.2 join()
    3. List vs strings                      Line = 55
    4. Looping in lists                     Line = 72
    5. type()                               Line = 94
    6. Generate lists with range functions  Line = 101
    7. index() method                       Line = 106
    8. pass list to a functions             Line = 110
    9. Exercise 1                           Line = 119 
    10. Exercise 2                          Line = 137
    11. Exercise 3                          Line = 185
"""

## is vs == for compare list
word_1 = ['one','two','three', 1, 2, 3]
word_2 = ['one','two','three']
word_3 = [1, 2, 3]
word_4 = ['one','two','three']
word_5 = word_2

# is op [ value and memory position is equals between 2 list ]
print(f'{word_1} is {word_3} Equals to : {word_1 is word_3}')
print(f'{word_2} is {word_1} Equals to : {word_2 is word_1}')
print(f'{word_2} is {word_4} Equals to : {word_2 is word_4}')
print(f'{word_2} is {word_5} Equals to : {word_2 is word_5}')
print(' ')
# == op [ value equals between 2 list ]
print(f'{word_1} == {word_3} Equals to : {word_1 == word_3}')
print(f'{word_2} == {word_1} Equals to : {word_2 == word_1}')
print(f'{word_2} == {word_4} Equals to : {word_2 == word_4}')
print(f'{word_2} == {word_5} Equals to : {word_2 is word_5}')
print('-----------------------------------------------------')
## join and split method
# split() : break a sring to list
string = 'Partha,25'
name, age = string.split(',') # assign two value in different variables
print(f'{name} = {age}')
data = string.split(',') # if you want to break string and assign in one value 
                            # then it automatically chage to list
print(f'{string} break this string using comma: {data}')
print(' ')
# join() : join a list to string
string = ','.join(data)
print(f'{data} join this list using comma: {string}')
print('-----------------------------------------------------')

## list vs strings
"""
strings are immutable : it means we can not change or operation affect to that string 
                        and it output new string 
lists are mutable : it means we can change or operation affect to that list 
                    and it may/maynot output new list
"""

s = 'string'
# s.append('s')  # it gives error
print(f'{s} is immutable')

t = ['str','ing']
t.append('s')
print(f'{t} is mutable' )
print('-----------------------------------------------------')

## looping in list
for x in word_1:
    print(x)
print('-----------------------------------------------------')

# List inside list [ 2D list ]
matrix = [word_2,word_3]
print(matrix)

#access the 1D data
for data_1 in matrix:
    print(data_1)

#access the 2D data
for data_1 in matrix:
    for data_2 in data_1:
        print(data_2)

# access the 'three' data
print(f'access the three data from list: {matrix[0][2]}')
print('-----------------------------------------------------')

## type() function is know about what type is the variable
num = 10
print(f'matrix type: {type(matrix)}')
print(f'num type: {type(num)}')
print(f's type: {type(s)}')
print('-----------------------------------------------------')

## generate lists with range functions
numbers = list(range(1,11))
print(f'list of numbers: {numbers}')
print('-----------------------------------------------------')

## index() method: find index postion of value in a list
print(f'6 position in list: {numbers.index(6)}')
print('-----------------------------------------------------')

## pass list to a function
neg_num_list = []
def negativeNumber(neg_list):
    for x in neg_list:
        neg_num_list.append(-x)
    print(f'Negative numbers of list: {neg_num_list}')
negativeNumber(numbers)
print('-----------------------------------------------------')

### Exercise 1
"""
    Define a function whitch will take list containing numbers as input
    and return list containing square of every elements

    example
    numbers = [1,2,3,4]
    square_list(numbers) ----> return ----> [1,4,9,16]
"""
def square_list(num_list):
    sqr_list = []
    for n in num_list:
        sqr_list.append(n**2)
    return sqr_list
numbers = list(range(1,11))
print(f'{numbers} of square is {square_list(numbers)}')
print('-----------------------------------------------------')

### Exercise 2
"""
    Define a function which will take list as a argument and this function
    will return a reversed list

    example
    [1,2,3,4] ----> [4,3,2,1]
"""
# Note you simply do this with reverse method
print('problem solve using reverse method')
def reverse_method_list(num_list):
    num_list.reverse()
    print(f'Reverse with reverse method {num_list}')

num = [1,2,3,4]
reverse_method_list(num)

# Note you simply do this with slicing [::-1]
print('problem solve using slicing [::-1]')
def reverse_method_list(num_list):
    rev_list = []
    return num_list[::-1]

print(f'{num} of reverse list is {reverse_method_list(num)}')

#but tryto do this with the help of append method with reverse range function
print('problem solve using append method with reverse range function')
def reverse_method_list(num_list):
    rev_list = []
    length = len(num_list)
    for n in range(length-1,-1,-1):
        rev_list.append(num_list[n])
        # print(n)
    return rev_list

print(f'{num} of reverse list is {reverse_method_list(num)}')

#but tryto do this with the help of append method and pop method
print('problem solve using append method and pop method')
def reverse_method_list(num_list):
    rev_list = []
    for n in range(len(num_list)):
        rev_list.append(num_list.pop())
    return rev_list

print(f'{num} of reverse list is {reverse_method_list(num)}')
print('-----------------------------------------------------')

### Exercise 3
"""
    Define a function that take list of words as argument and 
    return list with reverse of every element in that list

    example
    ['abc','tuv','xyz'] -----> ['cba','vut','zyx'] 
"""
def reverse_list_string(str_list):
    rev_str_list = []
    for i in str_list:
        str = i[::-1] # reverse slice
        rev_str_list.append(str)
    return rev_str_list

list = ['abc','tuv','xyz']
print(f'Reverse string of list {list} : {reverse_list_string(list)}')
