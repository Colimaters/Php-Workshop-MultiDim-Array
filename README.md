# Php-Workshop-MultiDim-Array
W@C Workshop Tableaux multidimensionels

Ce workshop a pour but de vous faire utiliser des tableaux à multiples dimensions via 4 exercices.

> Pour ce workshop, nous partirons du principe qu'il n'y auras pas plus d'1 espace entre les mots. Cette gestion d'erreur n'est pas le but de ce workshop.

> Pour chaque exercice, vous **devez** utiliser le fichier qui vous ait fournit et ajouter du code dans la fonction *run*. 

### ex1 : string vers tableau de caractère
- **Fichier** : ex1.php

Vous allez recevoir une chaîne de caractère en paramètre de votre programme.
Vous devrez transformer cette string en un tableau de caractère et retourner ce dernier.

```shell
> php ex1.php "Multi 21 Seb, Multi 21"
Array
(
    [0] => M
    [1] => u
    [2] => l
    [3] => t
    [4] => i
    [5] =>
    [6] => 2
    [7] => 1
    [8] =>
    [9] => S
    [10] => e
    [11] => b
    [12] => ,
    [13] =>
    [14] => M
    [15] => u
    [16] => l
    [17] => t
    [18] => i
    [19] => 
    [20] => 2
    [21] => 1
)
```

### ex2 : phrase vers tableau de mot
Vous allez devoir récupérer chaque mot d'une phrase et les mettre dans un tableau

```shell
> php ex2.php "Bonjour je suis dans la WebAcadmie"
Array
(
    [0] => Bonjour
    [1] => je
    [2] => suis
    [3] => dans
    [4] => la
    [5] => WebAcadémie
)
```

### ex3 : phrase vers tableau de tableau caractère
Comme pour l'exercice précédent, vous allez de voir récupérer chaque mot d'une phrase et les mettre dans un tableau. Et chaque caractère de ces mots va devoir être dans un tableau

> Pour cette exercice, nous partirons du principe qu'il n'y auras pas plus d'1 espace entre les mots

```shell
> php index.php "Bonjour je suis dans la WebAcadmie"
Array
(
    [0] => Array
        (
            [0] => B
            [1] => o
            [2] => n
            [3] => j
            [4] => o
            [5] => u
            [6] => r
        )

    [1] => Array
        (
            [0] => j
            [1] => e
        )

    [2] => Array
        (
            [0] => s
            [1] => u
            [2] => i
            [3] => s
        )

    [3] => Array
        (
            [0] => d
            [1] => a
            [2] => n
            [3] => s
        )

    [4] => Array
        (
            [0] => l
            [1] => a
        )

    [5] => Array
        (
            [0] => W
            [1] => e
            [2] => b
            [3] => A
            [4] => c
            [5] => a
            [6] => d
            [7] => e
            [8] => m
            [9] => i
            [10] => e
        )

)
```
### ex4 : manipulation de tableau de tableau de caractère
echanger les mots à la place indiqué en paramètre et rajouter une caractère en début de ligne


```shell
> php ex4.php [0, 2] "Bonjour je suis dans la WebAcademie"



```