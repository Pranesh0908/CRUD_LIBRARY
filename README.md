# 📚 Library Management System (PHP + MySQL)

A simple web-based **Library Management System** built using **PHP**, **MySQL**, **HTML**, and **CSS**.  
This system helps manage books, including adding new entries, editing details, deleting records, and viewing the collection in a clean tabular format.

---

## 📁 Features

- ➕ Add / ✏️ Edit / ❌ Delete Book Records  
- 🗃️ View all books in a table with clean UI  
- 💾 MySQL database integration  
- 📸 Screenshots included  
- 🧩 Modular file structure  

---

## 🛠️ Technologies Used

- ✅ PHP (Procedural)
- ✅ MySQL (via phpMyAdmin)
- ✅ HTML5 + CSS3
- ✅ XAMPP for local development

---

## 📂 Project Structure

```library/
├── db.php # Database connection
├── style.css # Main CSS styles
├── index.php # Home page (book list with edit/delete)
├── add.php # Add a new book
├── edit.php # Edit book details
├── delete.php # Delete a book
├── ScreenShots
└── db/
└── library_db.json # Sample database structure (JSON backup)
```

---

## ⚙️ Setup Instructions

### 🔥 Step 1: Start XAMPP
- Open the XAMPP Control Panel
- Start **Apache** and **MySQL**

### 📁 Step 2: Copy Files
- Place this project inside the `htdocs/` folder  
  _(Example path: `C:/xampp/htdocs/library/`)_

### 🗃️ Step 3: Create Database
- Visit [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
- Create a new database named:  `library_db`

### 🧱 Step 4: Create Tables
- Select the `library_db` database
- Run the following SQL to create the books table:

```sql
CREATE TABLE books (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  author VARCHAR(100) NOT NULL,
  genre VARCHAR(50),
  year INT,
  publisher VARCHAR(100)
);```
