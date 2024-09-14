<?php
// Sommaire
    // 1. Addition (+) : 
        // Calcule la somme de deux valeurs.
        
    // 2. Soustraction (-) : 
        // Soustrait une valeur d'une autre.

    // 3. Multiplication (*) : 
        // Multiplie deux valeurs entre elles.

    // 4. Division (/) : 
        // Divise une valeur par une autre.

    // 5. Modulo (%) : 
        // Retourne le reste d'une division.

    // 6. Exponentiation (**) : 
        // Élève une valeur à la puissance d'une autre.

    // 7. Incrémentation (++) : 
        // Augmente la valeur d'une variable de 1.

    // 8. Décrémentation (--) : 
        // Diminue la valeur d'une variable de 1.

    // 9. Addition et assignation (+=) : 
        // Ajoute une valeur à une variable et assigne le résultat.

    // 10. Soustraction et assignation (-=) : 
        // Soustrait une valeur d'une variable et assigne le résultat.

    // 11. Multiplication et assignation (*=) : 
        // Multiplie une variable par une valeur et assigne le résultat.

    // 12. Division et assignation (/=) : 
        // Divise une variable par une valeur et assigne le résultat.

    // 13. Modulo et assignation (%=) : 
        // Calcule le reste d'une division et assigne le résultat à la variable.

// 1. Addition (+)
    // L'opérateur d'addition permet de calculer la somme de deux valeurs.
    $a = 5;
    $b = 3;
    echo "Addition (a + b) : " . ($a + $b) . "<br>"; // Résultat : 8

// 2. Soustraction (-)
    // L'opérateur de soustraction permet de soustraire une valeur d'une autre.
    $a = 10;
    $b = 4;
    echo "Soustraction (a - b) : " . ($a - $b) . "<br>"; // Résultat : 6

// 3. Multiplication (*)
    // L'opérateur de multiplication permet de multiplier deux valeurs.
    $a = 7;
    $b = 2;
    echo "Multiplication (a * b) : " . ($a * $b) . "<br>"; // Résultat : 14

// 4. Division (/)
    // L'opérateur de division permet de diviser une valeur par une autre.
    $a = 8;
    $b = 2;
    echo "Division (a / b) : " . ($a / $b) . "<br>"; // Résultat : 4

// 5. Modulo (%)
    // L'opérateur modulo donne le reste d'une division entre deux valeurs.
    $a = 10;
    $b = 3;
    echo "Modulo (a % b) : " . ($a % $b) . "<br>"; // Résultat : 1 (car 10 / 3 donne un reste de 1)

// 6. Exponentiation (**)
    // L'opérateur d'exponentiation permet d'élever une valeur à la puissance d'une autre.
    $a = 3;
    $b = 2;
    echo "Exponentiation (a ** b) : " . ($a ** $b) . "<br>"; // Résultat : 9 (car 3^2 = 9)

// 7. Incrémentation (++)
    // L'opérateur d'incrémentation augmente la valeur d'une variable de 1.
    $a = 5;
    $a++; // $a devient 6
    echo "Incrémentation (a++) : " . $a . "<br>"; // Résultat : 6

// 8. Décrémentation (--)
    // L'opérateur de décrémentation diminue la valeur d'une variable de 1.
    $a = 5;
    $a--; // $a devient 4
    echo "Décrémentation (a--) : " . $a . "<br>"; // Résultat : 4

// 9. Addition et assignation (+=)
    // Cet opérateur ajoute une valeur à une variable et assigne le résultat à cette même variable.
    $a = 10;
    $b = 5;
    $a += $b; // $a devient 15
    echo "Addition et assignation (a += b) : " . $a . "<br>"; // Résultat : 15

// 10. Soustraction et assignation (-=)
    // Cet opérateur soustrait une valeur d'une variable et assigne le résultat à cette même variable.
    $a = 10;
    $b = 3;
    $a -= $b; // $a devient 7
    echo "Soustraction et assignation (a -= b) : " . $a . "<br>"; // Résultat : 7

// 11. Multiplication et assignation (*=)
    // Cet opérateur multiplie une variable par une valeur et assigne le résultat à cette même variable.
    $a = 4;
    $b = 2;
    $a *= $b; // $a devient 8
    echo "Multiplication et assignation (a *= b) : " . $a . "<br>"; // Résultat : 8

// 12. Division et assignation (/=)
    // Cet opérateur divise une variable par une valeur et assigne le résultat à cette même variable.
    $a = 20;
    $b = 4;
    $a /= $b; // $a devient 5
    echo "Division et assignation (a /= b) : " . $a . "<br>"; // Résultat : 5

// 13. Modulo et assignation (%=)
    // Cet opérateur calcule le reste d'une division et assigne le résultat à la variable.
    $a = 10;
    $b = 4;
    $a %= $b; // $a devient 2 (car 10 % 4 = 2)
    echo "Modulo et assignation (a %= b) : " . $a . "<br>"; // Résultat : 2



