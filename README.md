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
- **Composer** — PHP dependency and environment requirement configuration

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
                    └──────────┬──────────┘
                               │
                               ▼
                    ┌─────────────────────┐
                    │    PHP BACKEND      │
                    │ Application Logic   │
                    └──────────┬──────────┘
                               │
                     ┌─────────┴─────────┐
                     ▼                   ▼
             ┌──────────────┐    ┌──────────────┐
             │  PHP APIs    │    │    MySQL     │
             │ URL / Data   │    │   Database   │
             └──────────────┘    └──────────────┘
```

This structure separates presentation, application logic and data storage, making the application easier to understand and maintain.

---

# 🎨 Frontend

The frontend was designed to provide a straightforward experience for creating and managing shortened URLs.

### Key Components

**`welcome.php`**

Provides the initial user-facing experience and directs users toward authentication.

**`index.php`**

Acts as the primary application interface for URL shortening and URL management functionality.

**`style.css`**

Contains the application's visual styling and responsive layout rules.

**JavaScript**

Supports client-side interactions and validation.

---

# ⚙️ Backend

The backend is primarily built with **PHP** and is responsible for handling application logic, URL operations, user data and communication with the database.

### Key Components

**`db_connect.php`**

Handles the application's connection to the MySQL database.

**`api_shorten.php`**

Handles URL-shortening functionality.

**`api_expand.php`**

Handles retrieval of the original URL associated with a shortened link.

**`api_delete_url.php`**

Handles deletion of URLs.

**`api_user_urls.php`**

Handles retrieval and management of URLs associated with users.

**`api_analytics.php`**

Provides analytics-related backend functionality.

**`fetch_click_count.php`**

Retrieves click-count information.

---

# 🔌 API Endpoints

SHORTEE includes backend API endpoints that allow different parts of the application to communicate with the server-side logic.

| Endpoint                | Purpose                           |
| ----------------------- | --------------------------------- |
| `api_shorten.php`       | Creates shortened URLs            |
| `api_expand.php`        | Retrieves original URLs           |
| `api_delete_url.php`    | Deletes URLs                      |
| `api_user_urls.php`     | Retrieves/manages user URLs       |
| `api_analytics.php`     | Retrieves analytics information   |
| `fetch_click_count.php` | Retrieves click-count information |

> **Note:** Endpoint implementation and request methods are defined within the corresponding PHP files.

---

# 🔐 Authentication

SHORTEE includes account functionality allowing users to create and access their own accounts.

Authentication-related files include:

```text
register.php
login.php
logout.php
welcome.php
```

The application uses session-based functionality to manage authenticated user access.

---

# 💻 Getting Started

## Prerequisites

Before running SHORTEE locally, ensure you have:

* PHP
* MySQL
* Apache or another compatible web server
* Git

---

## 1. Clone the Repository

```bash
git clone https://github.com/ThokozaniLegend/SHORTEE-Portfolio-PROJECT.git
```

Move into the project directory:

```bash
cd SHORTEE-Portfolio-PROJECT
```

---

## 2. Configure the Database

Create a MySQL database for the application.

Then configure the database connection in:

```text
db_connect.php
```

Update the database connection details with your local MySQL credentials.

> ⚠️ Never commit real database passwords, API keys or other credentials to a public repository.

---

## 3. Install Dependencies

If the project has Composer dependencies configured, run:

```bash
composer install
```

---

## 4. Start the Application

Place the project in your local web server directory and start Apache and MySQL.

Then open the application through your local server, for example:

```text
http://localhost/SHORTEE-Portfolio-PROJECT
```

Your exact local URL may vary depending on your PHP/Apache configuration.

---

# 📖 Usage

### 1. Create an Account

Register a new user account.

### 2. Log In

Use your account credentials to access the application.

### 3. Shorten a URL

Enter a long URL and submit it through the shortening interface.

### 4. Manage Your Links

View and manage URLs associated with your account.

### 5. Analyse Link Activity

Use the analytics functionality to review click-related information.

### 6. Expand a Short URL

Retrieve the original destination associated with a shortened URL.

---

# 🖥️ Project Preview

### SHORTEE Dashboard

The application interface provides users with a central location for shortening and managing URLs.

![SHORTEE Dashboard](https://github.com/user-attachments/assets/f4812be1-453d-4e7b-85f1-d920b2ac11eb)

### 🎥 Project Demonstration

Watch the project demonstration:

[▶️ View SHORTEE Demo](https://youtu.be/hZKaX00vnnI)

---

# 🧠 Technical Challenges

Building SHORTEE required combining several software engineering concepts into one application.

### Database Integration

Connecting the PHP application to MySQL and ensuring that application data could be stored and retrieved correctly required careful handling of database operations.

### URL Management

The application needed to generate shortened URLs while maintaining the relationship between the shortened identifier and the original destination.

### Analytics

Implementing click-related analytics required designing backend functionality capable of recording and retrieving interaction data.

### Authentication

Building registration, login and logout functionality introduced additional considerations around sessions, user data and access control.

### Application Structure

Organising frontend components, backend logic, database operations and API endpoints into a maintainable structure was an important part of the development process.

---

# 📚 What I Learned

SHORTEE helped me move from individual programming exercises toward building a more complete web application.

Through the project, I gained practical experience with:

* 🐘 PHP backend development
* 🗄️ MySQL database integration
* 🔐 User authentication
* 🔌 API development
* 🌐 Web application architecture
* 📊 Data and analytics functionality
* 🧩 Breaking a larger problem into smaller components
* 🐛 Debugging and testing
* 🔧 Git and GitHub
* 📱 Responsive web development

Most importantly, the project reinforced the importance of understanding how **frontend, backend, APIs and databases work together as one system**.

---

# 🔮 Future Improvements

Potential future versions of SHORTEE could include:

### 📦 Bulk URL Shortening

Allow users to upload or submit multiple URLs and process them in a single operation.

### 📊 Advanced Analytics

Expand analytics with additional metrics and richer visualisations.

### 🗺️ Geographic Analytics

Provide more detailed geographic reporting where appropriate data is available.

### 🎨 Custom Branding

Allow users or organisations to customise their shortened links and application branding.

### 🔒 Enhanced Security

Further strengthen authentication, input validation, access control and protection against common web application vulnerabilities.

### 🧪 Automated Testing

Introduce a broader automated testing strategy for backend functionality and API endpoints.

### 📖 API Documentation

Provide dedicated API documentation describing requests, responses and expected parameters.

---

# 🤝 Contributing

Contributions and improvements are welcome.

### Fork the repository

```bash
git fork
```

### Create a feature branch

```bash
git checkout -b feature/new-feature
```

### Commit your changes

```bash
git commit -m "Add new feature"
```

### Push the branch

```bash
git push origin feature/new-feature
```

### Open a Pull Request

Submit your changes for review.

---

# 🔗 Related Projects

SHORTEE was inspired by the broader URL-shortening space, including platforms such as:

* [Bitly](https://bitly.com)
* [TinyURL](https://tinyurl.com)
* [Rebrandly](https://www.rebrandly.com)

SHORTEE is an independent learning and portfolio project.

---

# 📄 License

This project is licensed under the **MIT License**.

See the `LICENSE` file for details.

---

# 👨🏾‍💻 Author

## Thokozani Jan Mahlangu

🇿🇦 South Africa

**Software Engineering | Full-Stack Development**

I'm interested in building practical software solutions that combine technology with real-world business and user needs.

### Connect With Me

💼 **LinkedIn:**
https://www.linkedin.com/in/thokozani-mahlangu

🐙 **GitHub:**
https://github.com/ThokozaniLegend

---

<div align="center">

### 🚀 Learn • Build • Debug • Improve

**Thanks for visiting SHORTEE!**

⭐ If you find the project interesting, feel free to explore the repository.

</div>
