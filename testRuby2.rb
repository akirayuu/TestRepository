#Test for calling data and store data
#Calling an API method from test2.rb
#Test 1
name = "\"Ren\""
income = 5000.00
tax = 500.00
net_montly = 4500.00
headline = "Monthly Payment Slip for Fave"
puts headline.upcase()
puts ("Monthly Payment Slip for: " + name ).upcase()
puts ("Gross Monthly Income: " + "\$" + income.to_s).downcase()
puts ("Monthly Income Text: " + "\$" + tax.to_s)
puts ("Net Montly Income: " + "\$" + net_montly.to_s)
