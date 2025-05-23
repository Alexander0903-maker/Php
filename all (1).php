<?php

def calculate_mixture(V1, t1, V2, t2):
    # Вычисление общего объёма смеси
    total_volume = V1 + V2

    # Вычисление температуры смеси (формула для смешивания жидкостей)
    if total_volume == 0:
        total_temperature = 0  # Чтобы избежать деления на ноль (хотя это невозможно для воды)
    else:
        total_temperature = (V1 * t1 + V2 * t2) / total_volume

    return total_volume, total_temperature

# Диалоговый ввод данных
print("Введите данные для первой порции воды:")
V1 = float(input("Объём (V1, литры): "))
t1 = float(input("Температура (t1, градусы Цельсия): "))

print("\nВведите данные для второй порции воды:")
V2 = float(input("Объём (V2, литры): "))
t2 = float(input("Температура (t2, градусы Цельсия): "))

# Вычисление объёма и температуры смеси
volume, temperature = calculate_mixture(V1, t1, V2, t2)

# Форматный вывод результатов
print("\nРезультаты:")
print(f"Общий объём смеси: {volume:.2f} литров")
print(f"Температура смеси: {temperature:.2f} °C")
// your code goes here
