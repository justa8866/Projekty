accounts = {}
while True:
    option = input(" Choose: (Sign in,Log in)")
    login = input("Login: ")
    password = input("Password: ")
    if option == "Sign in":
        accounts[login] = password
    elif option == "Log in":
        if accounts[login] == password:
            print("Successfully logged in!")
            break
    else: 
        print("Error, try again")
        continue 

