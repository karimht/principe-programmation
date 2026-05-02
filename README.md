# Principe de Programmation

## Description
Ce dépôt contient différents travaux pratiques et cours magistraux réalisés dans le cadre du module **Principe de Programmation** en Master 1 Informatique.

L'objectif est de mettre en pratique plusieurs concepts fondamentaux de programmation à travers plusieurs mini-projets : services web SOAP en Java, consommation d'API REST en PHP, conteneurisation avec Docker, et architecture en couches d'une application Flask connectée à une base de données.

---

## Technologies utilisées

-  Java (Services Web SOAP)
-  PHP (consommation d'API REST)
-  Python (Flask)
-  MySQL
-  Docker
-  IntelliJ IDEA
-  SoapUI

---

## Contenu des TP et CM

### TP1 — Service Web SOAP en Java

Implémentation d'un service web SOAP permettant de manipuler des données d'étudiants.

**Fonctionnalités :**
- Création d'un service web SOAP
- Gestion d'objets Java (`Etudiant`)
- Exposition de méthodes via un service web
- Test du service avec SoapUI

---

### TP2 — Consommation d'API REST en PHP

Plusieurs étapes progressives pour consommer une API REST en PHP, avec une architecture qui évolue de simple à avancée.

**Évolution des fichiers :**

| Fichier | Concept abordé |
|---------|----------------|
| `test_api.php` | Récupération brute d'une réponse JSON |
| `test_api1.php` | Décodage du JSON en tableau PHP |
| `test_api2.php` | Affichage formaté avec `foreach` |
| `test_api3.php` | Utilisation d'un fichier de configuration (URL externalisée) |
| `test_api4.php` | Création d'un service (`StudentService`) pour centraliser les appels |
| `test_api5.php` | Séparation Modèle / Vue (architecture MVC simplifiée) |
| `test_api6.php` | Ajout des opérations POST et DELETE (CRUD complet) |

**Architecture finale :**
- `config/config.php` → constantes (URL de l'API)
- `services/StudentService.php` → classe avec méthodes statiques (`getAllStudents`, `addStudent`, `deleteStudent`...)
- `views/students.php` → vue HTML pour afficher les données
- `assets/style.css` → mise en forme

**Concepts clés :**
- Consommation d'une API REST avec `file_get_contents`
- Encodage/décodage JSON en PHP
- Architecture en couches (config / service / vue)
- Méthodes HTTP POST et DELETE via `stream_context_create`

---

### TP4 — Application Flask avec Docker

Conteneurisation d'une application web Python avec Flask à l'aide de Docker.

**Fonctionnalités :**
- Création d'une image Docker
- Déploiement d'une application Flask
- Exposition d'un service web sur le port 5000

---

### CM1 — API Flask avec MySQL et architecture en couches

Application Flask exposant une API REST pour gérer une base d'étudiants, avec une architecture propre en couches.

**Architecture :**

```
Client (PHP / curl / Postman)
        ↓
   app.py (Routes REST)
        ↓
  repository.py (Couche d'accès aux données)
        ↓
     db.py (Connexion MySQL)
        ↓
   config.py (Paramètres de connexion)
        ↓
     Base MySQL "school_api"
```

**Routes REST exposées :**

| Méthode | Route | Description |
|---------|-------|-------------|
| GET | `/students` | Liste tous les étudiants |
| GET | `/students/<id>` | Récupère un étudiant par son id |
| POST | `/students` | Ajoute un nouvel étudiant |
| DELETE | `/students/<id>` | Supprime un étudiant |

**Concepts clés :**
- Séparation des responsabilités (routes / accès BDD / config)
- Connexion MySQL avec `mysql.connector`
- Utilisation de `cursor(dictionary=True)` pour récupérer les résultats sous forme de dictionnaires
- Requêtes paramétrées (`%s`) pour éviter les injections SQL
- Gestion des codes HTTP (200, 201, 404)

---

## Lancer les projets

### TP1 (Java SOAP)

1. Ouvrir le projet dans IntelliJ
2. Exécuter la classe `Application.java`
3. Tester le service avec SoapUI

---

### TP2 (PHP — consommation d'API)

**Prérequis :** une API Flask qui tourne sur `http://127.0.0.1:5000` (utiliser celle du CM1)

1. Lancer un serveur PHP local depuis le dossier `TP2/` :

```bash
cd TP2
php -S localhost:8000
```

2. Ouvrir dans le navigateur :
   - http://localhost:8000/test_api.php → étape 1 (JSON brut)
   - http://localhost:8000/test_api6.php → version finale (CRUD complet)

---

### TP4 (Docker + Flask)

1. Construire l'image Docker :

```bash
cd TP4
docker build -t mon-app .
```

2. Lancer le conteneur :

```bash
docker run -p 5000:5000 mon-app
```

3. Accéder à l'application : http://localhost:5000

---

### ▶️ CM1 (Flask + MySQL)

**Prérequis :**
- Python 3 installé
- MySQL installé et démarré
- Une base de données `school_api` avec une table `students`

1. Installer les dépendances :

```bash
pip install flask mysql-connector-python
```

2. Configurer les paramètres de connexion dans `config.py` si nécessaire (host, user, password...)

3. Lancer l'application :

```bash
cd CM1
python app.py
```

L'API est accessible sur **http://localhost:5001**

**Exemples de requêtes :**

```bash
# Lister tous les étudiants
curl http://localhost:5001/students

# Récupérer un étudiant
curl http://localhost:5001/students/1

# Ajouter un étudiant
curl -X POST http://localhost:5001/students \
  -H "Content-Type: application/json" \
  -d '{"student_id": 5, "name": "Karim", "age": 22}'

# Supprimer un étudiant
curl -X DELETE http://localhost:5001/students/5
```

---

## 👤 Auteur

Karim MAHTOUT — Master 1 Informatique