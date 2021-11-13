#Trying to create tax calculation here
#income = float (input ('Enter your income here: '))
income = 5000
income = round (income,2)
print ('\nYearly income = ', income)
if income <= 3000:
    rate = 10
    if income > 3000 and income <= 5000:
        rate = 11
        if income > 5000 and income <= 10000:
            rate = 12
            if income > 10000:
                rate = 25
print ('Tax rate = ', rate,'%')
rate = rate/100
deduct = income * rate
print ('Tax deduction = ', deduct)
total_income = income - deduct
print ('Total Net Pay = ', total_income)

