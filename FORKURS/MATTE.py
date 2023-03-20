# Import av bibliotek
from pylab import *

# Innlesing av parametre
c = float(input("Skrive in verdien av c: "))
fasen = float(input("Skrive in verdien av 𝜑: "))


# Funksjon som regner ut funksjonsverdien
def f(t):
    return 3 * sin((c * t) - fasen)

# Genererer tabell med t-verdier
t_verdier = linspace(-10, 10, 250)

# Genererer tabell med funksjonsverdier,
# kaller funksjonen f som regner ut funksjonsverdi for hver av t-verdiene
f_verdier = f(t_verdier)

#Tegner grafen
plot(t_verdier, f_verdier)
show()
