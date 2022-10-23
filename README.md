Php-Workshop-MultiDim-Array
======================
W@C Workshop Tableaux multidimensionels

Ce workshop a pour but de vous faire utiliser des tableaux à multiples dimensions via 4 exercices.

## **Table of contents**
  - [Exercice 1 : phrase vers tableau de caractère](#exercice-1--phrase-vers-tableau-de-caractère)
  - [Exercice 2 : phrase vers tableau de mot](#exercice-2--phrase-vers-tableau-de-mot)
  - [Exercice 3 : phrase vers tableau de tableau caractère](#exercice-3--phrase-vers-tableau-de-tableau-caractère)
  - [Exercice 4 : manipulation de tableau de tableau de caractère](#exercice-4--manipulation-de-tableau-de-tableau-de-caractère)

> Pour ce workshop, nous partirons du principe qu'il n'y auras pas plus d'1 espace entre les mots. Cette gestion d'erreur n'est pas le but de ce workshop.

> Pour chaque exercice, vous **devez** utiliser le fichier qui vous ait fournit et ajouter du code dans la fonction *run*. 

## **Exercice 1 : phrase vers tableau de caractère**
- **Fichier** : ex1.php

Vous allez recevoir une chaîne de caractère en argument de votre programme.

Vous devrez transformer cette string en un tableau de caractère et retourner ce dernier.

```shell
> php ex1.php "Multi 21 Seb"
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
)
```

## **Exercice 2 : phrase vers tableau de mot**
- **Fichier** : ex2.php

Vous allez recevoir une chaîne de caractère en argument de votre programme.

Vous allez devoir récupérer chaque mot d'une phrase, les mettre dans un tableau et retourner ce dernier.

```shell
> php ex2.php "Bonjour je suis dans la WebAcadémie"
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

## **Exercice 3 : phrase vers tableau de tableau caractère**
- **Fichier** : ex3.php

Vous allez recevoir une chaîne de caractère en argument de votre programme.

Vous allez créer un tableau qui vas contenir d'autre tableaux représentant chacun un mot de la string.

Chacun de ces tableaux devras contenir tout les caractères des différents mots.

Enfin, retourner le tableau contenant tout les mots. 

```shell
> php ex3.php "Love la W@C"
Array
(
    [0] => Array
        (
            [0] => L
            [1] => o
            [2] => v
            [3] => e
        )

    [1] => Array
        (
            [0] => l
            [1] => a
        )

    [2] => Array
        (
            [0] => W
            [1] => @
            [2] => C
        )

)
```

## **Exercice 4 : manipulation de tableau de tableau de caractère**
- **Fichier** : ex4.php

> Copiez-collez la fonction *run* de votre exercice 3 dans la fonction *run* de votre exercice 4

Vous allez recevoir un tableau contenant 2 nombres et une chaîne de caractère en argument de votre programme.

Vous allez devoir échanger la position de 2 mots dans le tableau donné par le tableau en paramètres.

En plus d'échanger la position dans le tableau de ces mots là, vous allez devoir rajouter le caractère '@' au début des mots déplacés.

```shell
> php ex4.php "[0, 2]" "Vraiment un zoo ici"
Array
(
    [0] => Array
        (
            [0] => @
            [1] => z
            [2] => o
            [3] => o
        )

    [1] => Array
        (
            [0] => u
            [1] => n
        )

    [2] => Array
        (
            [0] => @
            [1] => V
            [2] => r
            [3] => a
            [4] => i
            [5] => m
            [6] => e
            [7] => n
            [8] => t
        )

    [3] => Array
        (
            [0] => i
            [1] => c
            [2] => i
        )

)
```