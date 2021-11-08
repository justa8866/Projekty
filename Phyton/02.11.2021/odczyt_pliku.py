file = open("kraje.txt", "w+")

countries_and_capitals = {'Poland': 'Warsaw', 'Czechia': 'Prague', 'Germany': 'Berlin'}

for country, capital in countries_and_capitals.items():
    file.write(country + "-" + capital +"\n")

file.close()

file = open("nastepnyplik.txt", "w+")

countries_and_capitals = {'Poland': 'Warsaw', 'Czechia': 'Prague', 'Germany': 'Berlin'}

for country, capital in countries_and_capitals.items():
    file.write(country + "-" + capital +"\n")

file.close()

file = open("kraje.txt")

for line in file.readlines():
    print(line.strip())

file.close()