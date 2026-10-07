<div align="center">

<img src="images/logo%203.png" alt="SHORTEE Logo" width="180">

# 🔗 SHORTEE

### URL Shortening & Analytics Web Application

**Create • Manage • Share • Analyse**

[![Live Demo](https://img.shields.io/badge/▶%20Live%20Demo-SHORTEE-success?style=for-the-badge)](https://youtu.be/hZKaX00vnnI)
[![GitHub](https://img.shields.io/badge/Source%20Code-GitHub-black?style=for-the-badge)](https://github.com/ThokozaniLegend/SHORTEE-Portfolio-PROJECT)
[![PHP](https://img.shields.io/badge/PHP-Backend-777BB4?style=for-the-badge\&logo=php\&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge\&logo=mysql\&logoColor=white)](https://www.mysql.com/)

</div>

---

## 📌 Table of Contents

* [About SHORTEE](#-about-shortee)
* [The Problem](#-the-problem)
* [Features](#-features)
* [Technologies](#️-technologies)
* [Architecture](#️-architecture)
* [Frontend](#-frontend)
* [Backend](#️-backend)
* [API Endpoints](#-api-endpoints)
* [Authentication](#-authentication)
* [Getting Started](#-getting-started)
* [Usage](#-usage)
* [Project Preview](#️-project-preview)
* [Technical Challenges](#-technical-challenges)
* [What I Learned](#-what-i-learned)
* [Future Improvements](#-future-improvements)
* [Contributing](#-contributing)
* [Related Projects](#-related-projects)
* [License](#-license)
* [Author](#-author)

---

## 💡 About SHORTEE

**SHORTEE** is a web-based URL shortening platform designed to transform long URLs into simple, shareable links while providing users with tools to manage and analyse their links.

The application combines **user authentication, URL shortening, URL management, analytics and backend API functionality** into a single web application.

The project was developed as a practical software engineering project to apply concepts in:

* Backend development
* Database integration
* User authentication
* API development
* Server-side programming
* Web application architecture
* Data management
* Problem-solving

---

## 🎯 The Problem

Long URLs can be difficult to share, manage and present cleanly, particularly when used across digital platforms.

SHORTEE was created to provide a simple way for users to:

* 🔗 Create shorter URLs
* 👤 Manage their links through user accounts
* 📊 Monitor link activity
* ✏️ Create customised aliases
* 🔍 Retrieve original URLs
* 🗑️ Delete unwanted links

The project also explores how URL activity can be captured and presented as useful analytics.

---

# 🚀 Features

### 🔗 URL Shortening

Convert long URLs into shorter, easier-to-share links.

### ✨ Custom URL Aliases

Users can create personalised shortcodes for their URLs where supported by the application.

### 👤 User Authentication

Users can:

* Register an account
* Log in
* Access their personal URL data
* Log out

### 📊 URL Analytics

The application provides functionality for monitoring URL interaction, including click-related information.

### 📁 URL Management

Authenticated users can manage URLs associated with their accounts.

### 🔍 URL Expansion

Retrieve the original destination URL associated with a shortened URL.

### 🗑️ URL Deletion

Users can remove URLs from their account through the application's backend functionality.

### 📱 Responsive Interface

The frontend was designed with usability across desktop and mobile screen sizes in mind.

---

# 🛠️ Technologies

## Frontend

* **HTML5** — page structure
* **CSS3** — styling and responsive presentation
* **JavaScript** — client-side functionality and validation

## Backend

* **PHP** — server-side application logic
* **MySQL** — relational database management
* **PHP APIs** — application endpoints for URL and analytics operations

## Development Tools

* **Git** — version control
* **GitHub** — source-code management and collaboration
* **Composer** — PHP dependency management

---

# 🏗️ Architecture

SHORTEE follows a straightforward web application architecture in which the user interface communicates with backend application logic and database services.

```text
                    ┌─────────────────────┐
                    │       USER          │
                    └──────────┬──────────┘
                               │
                               ▼
                    ┌─────────────────────┐
                    │   WEB INTERFACE     │
                    │   HTML / CSS / JS   │
```
