### Date: 15-1-2021
"""
# String methods
# Methods Lists

    1. split()
    2. len()            Line = 21
    3. lower()          Line = 24
    4. upper()          Line = 27
    5. title()          Line = 30
    6. count()          Line = 33
    7. lstrip()         Line = 62
    8. rstrip()         Line = 63
    9. strip()          Line = 64
    10. replace()       Line = 87
    11. find()          Line = 87
    12. center()        Line = 93
"""
name = 'Partha sarathi parida'

# 1. length function
print(f'len(): {len(name)}')

# 2. lower method
print(f'lower(): {name.lower()}')

# 3. upper method
print(f'upper(): {name.upper()}')

# 4. title method
print(f'title(): {name.title()}')

# 5. count method [must arrguments]
print(f'count("a"): {name.count("a")}') # count a in the string

"""
 Difference between len and count methods
 len() -> count the length of a string
 count() -> count the char of a string
"""
 ### Exercise 3 ###

"""
    Take two comma separated inputs from user 
    1. users name 
    2. a single character

    output -2 print lines
    1. user name length
    2. count the character that user inputed (bouns : case insensitive count)
"""
# Answer
name, char = input('Enter your name and a character for counting in your name with comma separated: ').split(',')
length = len(name)
lower_name = name.lower()
count = lower_name.count(char.lower())
print(f'Your name length is {len(name)} and your char\'s counting number is {count}')

# strip method :=> delete the space in the string
"""
    there are 3 type of strip methods
    1. lstrip() -> remove spaces in left side
    2. rstrip() -> remove spaces in right side
    3. strip() -> remove spaces in both side

    NOTE: strip() doesn't remove space between the string like [par   tha], if you want to remove spaces 
    of that string then use [string.replace(" ","")] eg. "par   tha".replace(" ","") :=> output: partha
"""

# lstrip() method
name = "       p      a       r      t       h        a      "
dots = "...................."
print(f'lstrip(): {name.lstrip() + dots}')
print(f'rstrip(): {name.rstrip() + dots}')
print(f'strip(): {name.strip() + dots}')
print(f'replace(" ",""): {name.replace(" ","") + dots}' )

### Exercise 3 using strip() method ###
name, char = input('Enter your name and a character for counting in your name with comma separated: ').split(',')
name = name.strip()
char = char.strip()
length = len(name)
lower_name = name.lower()
count = lower_name.count(char.lower())
print(f'Your name {name} length is {length} and your char\'s {char} counting number is {count}')

# find and replace method
str = "i an from puri & i an a student."
print(str.replace("an","am",1)) # syntax: string.replace("old data","new data",no of replace word from left to right)

print(f'find an in string: {str.find("an",3)}') # syntax:  string.find("data",starting index)

# center method
name = input('enter your name: ')
print(name.center(len(name) + 4,"~")) # systax: string.center(lengthof string + adding number,"1 char symbol or char")
