# 📚 Principe de Programmation

## 📌 Description
Ce dépôt contient différents travaux pratiques réalisés dans le cadre du module **Principe de Programmation** en Master 1 Informatique.

L’objectif de ce projet est de mettre en pratique plusieurs concepts fondamentaux de programmation à travers plusieurs mini-projets utilisant différentes technologies comme **Java (SOAP)** et **Python avec Docker**.

---

## 🧱 Structure du projet
.
├── TP1/
│ ├── ServiceSoap/
│ │ ├── src/
│ │ │ ├── Application.java
│ │ │ ├── MonServiceWeb.java
│ │ │ ├── Etudiant.java
│ │ │ └── Notes.txt
│ │ └── (fichiers de configuration IntelliJ)
│ └── TP1.iml
│
├── TP4/
│ ├── app.py
│ └── Dockerfile
│
└── README.md


---

## ⚙️ Technologies utilisées

- ☕ Java (Services Web SOAP)
- 🐍 Python (Flask)
- 🐳 Docker
- 🧰 IntelliJ IDEA
- 🧪 SoapUI

---

## 📂 Contenu des TP

### 🔹 TP1 — Service Web SOAP en Java

Implémentation d’un service web SOAP permettant de manipuler des données d’étudiants.

Fonctionnalités :
- Création d’un service web SOAP
- Gestion d’objets Java (`Etudiant`)
- Exposition de méthodes via un service web
- Test du service avec SoapUI

---

### 🔹 TP4 — Application Flask avec Docker

Ce TP consiste à conteneuriser une application web Python avec Flask à l’aide de Docker.

Fonctionnalités :
- Création d’une image Docker
- Déploiement d’une application Flask
- Exposition d’un service web sur le port 5000

---

## 🚀 Lancer le projet

### ▶️ TP1 (Java SOAP)

1. Ouvrir le projet dans IntelliJ
2. Exécuter la classe `Application.java`
3. Tester le service avec SoapUI

---

### ▶️ TP4 (Docker + Flask)

#### 1. Construire l’image Docker

```bash
docker build -t mon-app .