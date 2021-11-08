import sys
import random 
import string 
password = []

characters_length = -1 

def update_characters_left(number_of_character):
    global characters_length

    if lowercase_letter<0 or number_of_character > characters_length:
        print("Liczba znaków spoza przeziału 0,", characters_length)
        sys.exist(0)
    else:
        characters_length -= number_of_character
        print("Pozostało znaków:", characters_length)


password_length = int(input("Jak długie ma być hasło? "))

if password_length <5:
    print("Hasło mu mieć minimum 5 znaków.")
    sys.exist(0)
else:
    characters_length = password_length

lowercase_letter = int(input("Ile małych liter ma mieć hasło? "))
update_characters_left(lowercase_letter)

uppercase_letter = int(input("Ile dużych liter ma mieć hasło? "))
update_characters_left(uppercase_letter)

special_characters = int(input("Ile znaków specjalnych ma mieć hasło?"))
update_characters_left(special_characters)

digital = int(input("Ile cyfr ma mieć hasło? "))
update_characters_left(digital)

if characters_length > 0:
    print("Nie wszystkie znaki zostały użyte. Hasło zostanie wypełnione małymi literami")
    lowercase_letter += characters_length

print()
print("Długość hasła: ", password_length)
print("Małe litery: ", lowercase_letter)
print("Duże litery: ", uppercase_letter)
print("Znaki specjalne: ", special_characters)
print("Cyfry: ", digital)

for _ in range(password_length):
    if lowercase_letter > 0: 
        password.append(random.choice(string.ascii_lowercase))
        lowercase_letter -= 1
    if uppercase_letter >0:
        password.append(random.choice(string.ascii_uppercase))
        uppercase_letter -= 1
    if special_characters >0:
        password.append(random.choice(string.punctuation))
        special_characters -=1
    if digital >0:
        password.append(random.choice(string.digits))
        digital -=1

random.shuffle(password)
print("Wygenerowane hasło: ", "".join(password))




