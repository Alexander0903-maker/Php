<?php

import math

def y_formula(x):
    # Вычисление y(x) с использованием формул преобразования
    term1 = (math.asin(math.sqrt(x) / math.sqrt(x + 1))) ** 5
    term2 = (x ** 2 + 1) ** (1/5)
    term3 = math.log2(2 ** math.sin(x) + abs(x) ** math.cos(x))
    return term1 + term2 + term3

def y_math(x):
    # Вычисление y(x) с использованием модуля math
    term1 = math.pow(math.asin(math.sqrt(x) / math.sqrt(x + 1)), 5)
    term2 = math.pow(x ** 2 + 1, 0.2)
    term3 = math.log2(math.pow(2, math.sin(x)) + math.pow(abs(x), math.cos(x)))
    return term1 + term2 + term3

def is_in_D(x, y):
    # Проверка принадлежности точки (x, y) области D
    return x ** 2 + y ** 2 <= 25 and y >= 0

# Ввод значения x
x = float(input("Введите значение x: "))

# Вычисление y(x) двумя способами
y_formula_result = y_formula(x)
y_math_result = y_math(x)

# Проверка принадлежности области D
in_D_formula = is_in_D(x, y_formula_result)
in_D_math = is_in_D(x, y_math_result)

# Вывод результатов
print("\nРезультаты:")
print(f"Способ 1 (формулы): y(x) = {y_formula_result:.4f}, Принадлежит D: {in_D_formula}")
print(f"Способ 2 (math):    y(x) = {y_math_result:.4f}, Принадлежит D: {in_D_math}")
// your code goes here
