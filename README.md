# 📱 SwiftFix — Phone Repair Portal

<p align="center">
  <a href="README.ru.md">🇷🇺 Русская версия</a> | <b>🇺🇸 English Version</b>
</p>

[![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![Vue.js](https://img.shields.io/badge/Vue.js-3.x-4FC08D?style=for-the-badge&logo=vue.js&logoColor=white)](https://vuejs.org)
[![Vite](https://img.shields.io/badge/Vite-4.x-646CFF?style=for-the-badge&logo=vite&logoColor=white)](https://vitejs.dev)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.2-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com)

**SwiftFix** is a full-stack web application for a phone repair service center, built on **Laravel 10**. The project provides a user-friendly interface for browsing repair services, supported phone brands, reading reviews, submitting callback requests, and includes a full-featured admin dashboard.

> **About the project:** This repository represents one of my commercial full-stack projects, developed as an MVP for a real service center. It is not just a Landing Page, but a complete CRM/CMS system with a database and role-based access control.

---

## ✨ Features and Interface

### 🧑‍💻 Client Side (Frontend)

The user interface is fully responsive and offers easy navigation through services and brands. Dynamic pricing allows hiding prices (displaying "Free") for specific services automatically.

<details>
  <summary><b>👀 View the full Main Page design (Click here)</b></summary>
  <br>
  <img src="screenshots/main.png" alt="Main Page">
</details>

<br>

| All Services Pricing | Brand Specific Services (Apple) |
| :---: | :---: |
| <img src="screenshots/services.png" width="400"> | <img src="screenshots/brand_page_1.png" width="400"> |
| *Dynamic price list with smart formatting (from N / Free)* | *Filtering services for a specific brand* |

| Brand Specific Services (Xiaomi) | Contacts Page |
| :---: | :---: |
| <img src="screenshots/brand_page_2.png" width="400"> | <img src="screenshots/contacts.png" width="400"> |
| *Automatic logo and price binding* | *Integration with Yandex Maps and contact info* |

### 🛡️ Admin Dashboard

A secure area for managing website content. The administrator can process incoming leads, as well as add, delete, and edit brands and services.

| Dashboard & Leads | Editing a Brand |
| :---: | :---: |
| <img src="screenshots/admin.png" width="400"> | <img src="screenshots/admin_edit.png" width="400"> |
| *CRM module: viewing and managing client requests* | *CRUD operations: editing brands and uploading images* |

---

## 🛠 Tech Stack

- **Backend:** [Laravel 10](https://laravel.com/) (PHP 8.1+)
- **Frontend:** HTML5, CSS3, JS using [Vite](https://vitejs.dev/)
- **Styling:** [Bootstrap 5](https://getbootstrap.com/) and SCSS, animations via AOS.js
- **Database:** SQLite / MySQL (via Eloquent ORM)
- **Extras:** Axios, jQuery, Intervention Image

---

## ⚙️ Installation & Setup

### Requirements

- Node.js and npm
- PHP `>= 8.1`
- Composer

### Instructions

1. **Clone the repository:**
   ```bash
   git clone https://github.com/KbrYbk/SwiftFix.git
   cd SwiftFix
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Install Node dependencies:**
   ```bash
   npm install
   ```

4. **Setup environment variables:**
   Copy the example file and generate the app key:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   *The database is configured to use SQLite by default.*

5. **Run migrations and seeders:**
   ```bash
   php artisan migrate --seed
   ```

6. **Start the server:**
   ```bash
   php -S 127.0.0.1:8000 -t public
   ```
   The site will be available at `http://localhost:8000`.

   **Admin Panel Access:** 
   Login: `admin`
   Password: `admin`

---

## 📂 Project Architecture

```text
SwiftFix/
├── app/
│   ├── Http/Controllers/   # Logic (Admin, Brand, Service, Review)
│   └── Models/             # Eloquent models
├── database/
│   └── migrations/         # Database structure
├── public/                 # Public assets (images, uploads)
├── resources/
│   ├── js/                 # Frontend logic
│   ├── sass/               # SCSS styles
│   └── views/              # Blade templates (UI structure)
└── routes/
    └── web.php             # Application routing
```
