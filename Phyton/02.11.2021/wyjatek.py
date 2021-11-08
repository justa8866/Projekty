countries_and_capitals = {'Poland': 'Warszaw', 'Czechia': 'Prague', 'Germany': 'Berlin'}

try: 
    print(2/0)
    print(countries_and_capitals['USA'])
except KeyError:
    print("Klucz nie został znaleziony")
except ZeroDivisionError:
    print("Nie można dzielić przez 0")

finally:
    print("To wykona się zawsze")

print("Ok. Nie ma błędu ")

