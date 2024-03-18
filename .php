<?php
// Создание ассоциативного массива с информацией о городах и их населении
let cities = {
    "Нью-Йорк": 8537673,
  "Токио": 9273000,
  "Шанхай": 24150000,
  "Мумбаи": 18410000
};

// Нахождение города с самым большим населением
let maxPopulation = 0;
let mostPopulousCity = "";
for (let city in cities) {
    if (cities[city] > maxPopulation) {
        maxPopulation = cities[city];
        mostPopulousCity = city;
    }
}

// Вывод города с самым большим населением
console.log("Город с самым большим населением: " + mostPopulousCity + " - " + maxPopulation);
?>