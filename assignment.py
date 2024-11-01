def Calc(x, y):
  if x > 0:
    returning = (x-1)*0.75 + 1
  else:
    returning = 0
  if y == "Large":
    returning = returning + 6
  elif y == "XL":
    returning = returning + 10
  returning = returning*1.13
  return "$" + str(returning)

print("Available Sizes are Large and XL")
PS = input()
chars = set('0123456789')
if PS == "Large" or PS == "XL":
  print("Topping amount is $1 for the first and afterwards $0.75 Each")
  TPs = input()
  if all((c in chars) for c in TPs):
    print(Calc(float(TPs), PS))
  else:
    print("Invalid Toppings")
else:
  print("Invalid Size")