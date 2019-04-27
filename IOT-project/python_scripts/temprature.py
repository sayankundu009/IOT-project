import time

time.sleep(2)

temps = ["30", "31", "30.5","31","32","29.5","30"]

i = 0

while 1:

        f = open("../stored_files/temperature.txt", "w")
        x = temps[i]
        print(x)
        f.write(x)
        f.close()
        i = i + 1
        if i > 6:
            i = 0
        time.sleep(5)
