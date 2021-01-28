### Date: 27-1-2021

# infinity Loop
"""
    it is never ending loop and cancel by 'crtl+c' 
    NOTE: don't use true/false or TRUE/FALSE because it is invalid, so use True/False 
"""
# while True:
#     print('infinity')

# for loop
for i in range(10):             # range between 0 to 9 and i = 0
    print(f'hello {i}')

for i in range(11,21):          # range between 11 to 21 and i = 11
    print(f'hello {i}')

# EXAMPLE 1
# sum from 1 to 10
total = 0
for i in range(1,11):
    total += i
print(f'Total = {total}')

# sum by user input in range
num_start,num_end = input('Enter your range, starting no and end no for sum type no using separated: ').split(',') 
num_start = int(num_start)
num_end = int(num_end)
total = 0
for i in range(num_start,num_end):
    total += i
print(f'Total = {total}')