# Simple Login Database Practice

This project is for **practice only**.
It shows how to make a simple login system with PHP and MySQL using an **Alumni Tracker System** idea.

---

## ✨ What it does

* Login and logout
* Different roles (Admin and Alumni)
* Connects to a database

---

## 🛠 What you need

* XAMPP or WAMP
* A browser (Chrome, Edge, Firefox, etc.)
* An editor/IDE (Visual Studio Code)

---

## 🚀 How to set it up

1. **Download or clone the project**

   ```bash
   git clone https://github.com/<your-username>/simple-login-database-practice.git
   ```

2. **Move the folder**

   * Put the project inside your `htdocs/` (if using XAMPP)
   * Or inside `www/` (if using WAMP)

3. **Create these files and folders** (inside the project)

```
simple-login-database-practice/
 ├── connect.php
 ├── login/
 │    ├── login.php
 │    ├── auth.php
 │    ├── logout.php
 │    ├── login.css
 │    └── login.js
 ├── admin/
 │    └── dashboard.php
 └── alumni/
      └── home.php
```

4. **Import the database**

* Open **http://localhost/phpmyadmin/**
* Create a database named `alumni_tracker`
* Import the `.sql` file from the `database/` folder

5. **Edit database connection**
   Open `connect.php` and update with your details:

```php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "alumni_tracker";
```

6. **Run the project**
   Open your browser and go to:

```
http://localhost/simple-login-database-practice
```

---

## 👤 Example accounts (stored in the database)

| Role   | Email                                     | Password  |
| ------ | ----------------------------------------- | --------- |
| Admin  | quienbsnar@gmail.com                      |   2468    |
| Alumni | marianmarchan@gmail.com                   |   67890   |
| Admin  | oliverosjosie@gmail.com                   |   12345   |

> These are example accounts. Replace them with your own test accounts or change the emails/passwords in your database.

---

## ⚠️ Notes

* This is **only for practice**, not for real websites.
* Passwords in this project **are hashed** (safer than plain text).
---

Feel free to fork, modify, and learn! 🎉

```
