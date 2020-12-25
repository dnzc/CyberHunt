from secret import flag
from Crypto.Util.number import getPrime, isPrime, bytes_to_long

p = getPrime(512)
q = p+1
while not isPrime(q):
  q+=1

n = p*q
e = 65537
m = bytes_to_long(bytes(flag,'utf8'))

ciphertext = pow(m,e,n)

print(n)
print("##################################")
print(ciphertext)