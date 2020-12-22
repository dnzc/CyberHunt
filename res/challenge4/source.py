flag = input()
flag = list(map(ord,flag[::-1]))
for i in range(len(flag)):
    flag[i] -= i//2
for i in range(2):
    flag = flag + flag[::-1]
print("Well, here's your output...")
print(*map(chr,flag),sep="+")