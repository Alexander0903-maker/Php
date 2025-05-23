<?php

import math

def calculate_y(x):
    if -1 <= x < 1:
        # Вычисление y(x) для -1 ≤ x < 1
        numerator = math.sin(x)
        denominator = 1 - 2 * x ** 2
        if denominator == 0:
            return "Ошибка: деление на ноль"
        y = numerator / denominator
    else:
        # Вычисление y(x) для остальных x
        argument = x / 6
        if -1 <= argument <= 1:
            y = math.asin(argument)
        else:
            return "Ошибка: аргумент арксинуса вне диапазона [-1, 1]"
    return y

# Диалоговый ввод значения x
x = float(input("Введите значение x: "))

# Вычисление y(x)
result = calculate_y(x)

# Вывод результата
if isinstance(result, str):
    print(result)
else:
    print(f"y({x}) = {result:.4f}")
// your code goes here
