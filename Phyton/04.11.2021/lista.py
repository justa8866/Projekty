imiona_lista = []
imiona_lista.append("Kamil")
imiona_lista.append("Weronika")
imiona_lista.sort()

for name in imiona_lista:
    print(name) 

print("\n")

nazwiska_lista = ["Kowalski","Nowak","Nowak"]
nazwiska_lista.reverse()

for name in nazwiska_lista:
    print(name)  
print("\n")
print(nazwiska_lista.count("Nowak"))
print(len(nazwiska_lista))

print("\n")
lista1 = ["biurko","woda","sok"]
lista1.remove("biurko")
lista1.pop((1))
print(lista1)
