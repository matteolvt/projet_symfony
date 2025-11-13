# 📘 Projet Symfony – Documentation

## 📄 Description

Ce projet est une application Symfony simple comprenant :

- Une **page d’accueil** (Homepage)
- Une **page À propos** (About)
- Un système de templates utilisant `Twig`
- Un dossier public contenant les assets CSS

Ce README documente l’installation du projet, sa structure, ainsi que les routes disponibles.

---

## 🚀 Installation

### 1️⃣ Cloner le projet

git clone <url-du-repo>
cd projet_symfony

### 2️⃣ Installer les dépendances PHP

composer install

### 3️⃣ Démarrer le serveur Symfony

symfony server:start

Ou en PHP natif :

php -S localhost:8000 -t public

### 4️⃣ Accéder au site

👉 http://127.0.0.1:8000/

---

## 📂 Structure du projet

projet_symfony/
 ├─ src/
 │   └─ Controller/
 │       ├─ HomeController.php
 │       └─ AboutController.php
 │
 ├─ templates/
 │   ├─ base.html.twig
 │   ├─ home/
 │   │   └─ index.html.twig
 │   └─ about/
 │       └─ index.html.twig
 │
 ├─ public/
 │   ├─ css/
 │   │   └─ About.css
 │   │   └─ style.css
 │   └─ index.php
 │
 ├─ composer.json
 ├─ README.md
 └─ ...

---

## 🌐 Routes Documentées

### 🏠 1. Homepage

- **URL :** /
- **Nom :** app_home
- **Méthode :** GET  
- **Controller :** HomeController  
- **Action :** index()  
- **Description :** Affiche la page d’accueil.

#### Exemple de controller :

#[Route('/', name: 'app_home')]
public function index(): Response
{
    return $this->render('home/index.html.twig');
}

---

### ℹ️ 2. About

- **URL :** /about
- **Nom :** app_about
- **Méthode :** GET  
- **Controller :** AboutController  
- **Action :** index()  
- **Description :** Affiche la page “À propos de nous”.

#### Exemple de controller :

#[Route('/about', name: 'app_about')]
public function index(): Response
{
    return $this->render('about/index.html.twig');
}

---

## 🎨 Frontend & Assets

Le style est externalisé dans :

public/css/style.css

Chargé dans les templates via :

{% block stylesheets %}
    {{ parent() }}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
{% endblock %}

Le layout global est défini dans :

templates/base.html.twig

---

## 🧪 Tester le projet

Page : Homepage  
URL : /  
Description : Page d’accueil

Page : About  
URL : /about  
Description : Page À propos

---

## 🛠️ Technologies utilisées

- PHP 8+
- Symfony 6+
- Twig
- Composer
- CSS (dossier public)

---

## 📜 Licence

Projet open-source — libre d’utilisation et de modification.

---

## 🙌 Auteur

Projet développé dans le cadre d’un apprentissage de Symfony.
