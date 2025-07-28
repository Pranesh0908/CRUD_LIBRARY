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

```
library/
├── db.php # Database connection
├── style.css # Main CSS styles
├── index.php # Home page (book list with edit/delete)
├── add.php # Add a new book
├── edit.php # Edit book details
├── delete.php # Delete a book
├── Screenshots
└── books_data.json # Sample database structure (JSON backup)
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
);
```

## 🚀 Run the Application

Open your browser and go to:

- **View All Books**: [http://localhost/library/](http://localhost/library/)
- **Add New Book**: [http://localhost/library/add.php](http://localhost/library/add.php)

---

## 🖼️ Screenshots samples

### 📚 Book Listing Page
![Book List](Screenshots/book_list.png)

### ➕ Add New Book
![Add Book](Screenshots/add_new_book.png)

---

## 💾 Database Sample (JSON)

A sample JSON file (`books_data.json`) is included for quick reference or migration.

---

## 📌 Notes

- Ensure `mysqli` extension is enabled in your `php.ini`
- You can import/export JSON data manually through phpMyAdmin if needed
- Use `style.css` to modify table layout and theme

---

## 📜 License

This project is open-source for educational use. Feel free to modify it for your personal or academic use.

---

> If you'd like, I can help you:
> - Generate the `.json` file from your current SQL structure
> - Prepare the screenshots automatically into the `Screenshots` folder
> - Upload everything to a GitHub repo with proper commits

Let me know if you want help uploading to GitHub or connecting it to GitHub Pages too.
