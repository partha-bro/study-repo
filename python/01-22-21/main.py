### Date: 22-1-2021
"""
	1. If statement						Line = 19
	2. Pass statement					Line = 26
	3. If-else statement				Line = 35
	4. Nested if-else statement			Line = 41
	5. Use random module 				Line = 53
		and call randint(no1,no2)
	6. Exercise 1						Line = 42
	7. Exercise 2						Line = 69
	8. If-elif-else statement			Line = 95
	9. In Keyword use					Line = 115
	10. Check empty or not				Line = 122
	11. While loop						Line = 129
	12. Exercise 3						Line = 135
	13. Exercise 4						Line = 145
	14. Exercise 5						Line = 167
"""
# if statement
name, age = input('Enter your name with age using comma separated: ').split(",")
age = int(age) # input field convert string to integer
name = name.strip() # remove space left or right side of your name
if age < 15:
	print(f"{name.title()}, age is below: {age}")

# pass statement
"""
	if you don't write any code inside the if statement 
	then use pass statement or error will occor
"""
age = int(input("Enter your age: "))
if age >= 18:
	pass

# if else statement
age = int(input('Enter your age: '))
if age > 18:
	print(f'Your age is greater than {age}')
else:
	print(f'Your age is less than {age}')
# Nested if else statement
# Exercise 1
"""
	Number gussing game
	make a variable, like winning number and assign any number to it.
	ask user to guess a number
	if user guessed correctly then print "YOU WIN !!!"
	if user didnot guessed correctly then:
		if user guessed lower than number,print "too low"
		if user guessed greater than number,print "too high"
"""
# Answer
import random # create random number
				# step 1: using import random module and
				# step 2: call randint(start,end) method

winning_number = random.randint(0,20)

lucky_number = int(input('Enter your lucky number between 1 to 20: '))
if lucky_number==winning_number:
	print('YOU WIN !!!')
else:
	if lucky_number>winning_number:
		print("too high")
	else:
		print('too low')

# check two condition at same time using and, or oporator
# Exercise 2
"""
	WATCH COCO
	ask user's name and age
	if user's name start with ('a' or 'A')and age is above 10 then
	print 'you can watch coco movie'
	else print 'sorry, you cannot watch coco'
"""
name, age = input('enter your name and age using comma: ').split(',')
age = int(age)
if name[0]=='a' and age>=10:
	print('You can watch coco movie.')
else:
	if name[0]=='A' and age>=10:
		print('You can watch coco movie.')
	else:
		print('Sorry, you cannot watch coco.')

# line optimization of above code
name, age = input('enter your name and age using comma: ').split(',')
age = int(age)
if age>=10 and (name[0]=='A' or name[0]=='a') :
	print('You can watch coco movie.')
else:
	print('Sorry, you cannot watch coco.')

# if-elif-else statement
"""
	show ticket pricing
	1 to 3 (free)
	4 to 10 (150)
	11 to 60 (250)
	above 60 (200)
"""
age = int(input('enter your age for ticket: '))
if age<=0:
	pass
elif 0<age<4:
	print("Ticket: free")
elif 3<age<11:
	print("ticket: 150")
elif 10<age<60:
	print("ticket: 250")
else:
	print("ticket: 200")

# in keyword
name = "Arjun"
if 'A' in name:
	print(f' A is present in {name}')
else:
	print(f' A is not present in {name}')

# check empty or not
num = input('enter a number: ')
if num:
	print(f'num is not empty, your num is: {num}')
else:
	print('num is empty, please try again')

# while loop
i = 1
while i<=5:
	print(f'hello python {i}')
	i += 1

# EXERCISE 3
# Sum of n number using while loop 
num = int(input('Enter your number: '))
total = 0
i = 1
while i<=num:
	total += i
	i += 1
print(f'total sum of {num} is {total}')

# EXERCISE 4
"""
	Ask user to input a number containing more than one digit
	example - 1256
	calculate 1+2+5+6 and print
"""
num = input('Enter your number that is more than one digit: ')
length = len(num)
total = 0
if num:
	intNum = int(num)
	if intNum>9:
		i = 0
		while i<length:
			total += int(num[i])
			i += 1
		print(f'Your number is {num} and sum is {total}')
	else:
		print('More than one digit')
else:
	print('Please try to input again')

# EXERCISE 5
"""
	ask a user for name
	example - Harshit Vashisth
	print count of each words
	output:
		H : 1
		a : 2
		r : 1
		s : 3
		h : 3
		i : 2
		t : 2
		  : 2
		V : 1
"""
name = input('Enter your full name: ')
i = 0
temp = ""
while i<len(name):
	if name[i] in temp:
		pass
	else:
		temp += name[i]
		count = name.count(name[i])
		print(f'{name[i]} : {count}')
	i += 1
	
