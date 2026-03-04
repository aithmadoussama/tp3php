# LAB 3 — Héritage, Classes Abstraites et Interfaces
# 🏫 Système de Gestion Académique (PHP POO Avancée)

![PHP](https://img.shields.io/badge/PHP-8.1+-777bb4.svg?style=flat-square&logo=php)
![Architecture](https://img.shields.io/badge/Architecture-POO%20%2F%20Solid-blue.svg?style=flat-square)
![Licence](https://img.shields.io/badge/Licence-MIT-green.svg?style=flat-square)

## 📝 Description
Ce projet est une démonstration avancée des concepts de programmation orientée objet en PHP. Il met en œuvre une structure académique permettant de gérer des **Étudiants**, des **Enseignants** et des **Filières** en utilisant des principes de conception robustes tels que l'héritage, les classes abstraites, les interfaces et les espaces de noms (Namespaces).


---

## ✨ Fonctionnalités Principales

* **Architecture Orientée Objet (SOLID)** : Utilisation de classes abstraites (`Personne`) pour factoriser le code commun.
* **Contrats par Interfaces** : Implémentation de `IdentifiableInterface` pour la gestion des IDs et `ExportableInterface` pour la transformation des données.
* **Polymorphisme** : Utilisation d'un `PrinterService` capable de traiter n'importe quel objet dérivé de `Personne`.
* **Sécurité et Typage** : Utilisation du typage strict (`strict_types=1`) et validation des données via des exceptions (`InvalidArgumentException`).
* **Export de Données** : Capacité native de transformer les objets complexes en tableaux associatifs pour une utilisation avec des APIs JSON.

---

## 📂 Structure du Projet

```text
project/
├── public/
│   └── index.php             # Point d'entrée de l'application (Démonstration)
├── src/
│   ├── Contract/             # Interfaces (Contrats de service)
│   │   ├── IdentifiableInterface.php
│   │   └── ExportableInterface.php
│   ├── Entity/               # Classes Métier (Modèles)
│   │   ├── Personne.php      # Classe Abstraite parente
│   │   ├── Etudiant.php
│   │   ├── Enseignant.php
│   │   └── Filiere.php
│   └── Service/              # Logique métier transverse
│       └── PrinterService.php

```
## Capture démonstratives

<img width="1366" height="768" alt="Capture d’écran du 2026-02-19 11-52-06" src="https://github.com/user-attachments/assets/dd4ae95d-b794-4dc9-a295-8b6cfb848d64" />

<img width="1366" height="768" alt="Capture d’écran du 2026-02-19 11-55-07" src="https://github.com/user-attachments/assets/dbbf8c79-144a-4789-bf52-08e11d882e3b" />
