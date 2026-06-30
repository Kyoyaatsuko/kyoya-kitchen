# 🍳 Kyoya Kitchen

> **A recipe sharing platform where anyone can share, discover, and comment on their favorite dishes.**

Kyoya Kitchen is a full-stack web application built as a platform for sharing homemade recipes. Users can add recipes complete with ingredients and cooking steps, as well as leave comments on other people's recipes.

---

## 📋 Features

- ✅ **CRUD Resep** — Add, view, edit, and delete recipes
- ✅ **CRUD Komentar** — Add, view, edit, and delete comments per recipe
- 🎨 Warm and aesthetic UI built with React + Vite
- 🗄️ MySQL database with relational data (recipes → comments)

---

## 🗂️ Project Structure

```
kyoya-kitchen/
├── backend/         # Node.js + Express REST API
│   ├── config/
│   │   └── db.js
│   ├── routes/
│   │   ├── recipes.js
│   │   └── comments.js
│   ├── .env
│   ├── index.js
│   └── package.json
│
├── frontend/        # React + Vite
│   ├── src/
│   │   ├── components/
│   │   ├── pages/
│   │   └── main.jsx
│   ├── index.html
│   └── package.json
│
└── README.md
```

---

## 🗄️ Database Schema (MySQL)

```sql
CREATE DATABASE kyoya_kitchen;

USE kyoya_kitchen;

CREATE TABLE recipes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  ingredients TEXT NOT NULL,
  steps TEXT NOT NULL,
  category VARCHAR(100),
  image_url VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE comments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  recipe_id INT NOT NULL,
  author_name VARCHAR(100) NOT NULL,
  content TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (recipe_id) REFERENCES recipes(id) ON DELETE CASCADE
);
```

---

## ⚙️ Cara Menjalankan di Lokal

### Prasyarat
install:
- [Node.js](https://nodejs.org/) 
- [MySQL](https://www.mysql.com/) 
- [Git](https://git-scm.com/)

---

### 1️⃣ Clone Repository

```bash
git clone https://github.com/Kyoyaatsuko/kyoya-kitchen.git
cd kyoya-kitchen
```

---

### 2️⃣ Setup Database

1. Buka MySQL dan login:
```bash
mysql -u root -p
```

2. Jalankan SQL berikut untuk membuat database dan tabel:
```sql
CREATE DATABASE kyoya_kitchen;
USE kyoya_kitchen;

CREATE TABLE recipes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  ingredients TEXT NOT NULL,
  steps TEXT NOT NULL,
  category VARCHAR(100),
  image_url VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE comments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  recipe_id INT NOT NULL,
  author_name VARCHAR(100) NOT NULL,
  content TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (recipe_id) REFERENCES recipes(id) ON DELETE CASCADE
);
```

---

### 3️⃣ Jalankan Backend

```bash
cd backend
npm install
```

Buat file `.env` di dalam folder `backend/`:

```env
DB_HOST=localhost
DB_USER=root
DB_PASSWORD=your_mysql_password
DB_NAME=kyoya_kitchen
PORT=5000
```

Jalankan server:

```bash
npm run dev
```

Backend akan berjalan di: `http://localhost:5000`

---

### 4️⃣ Jalankan Frontend

Buka terminal baru:

```bash
cd frontend
npm install
npm run dev
```

Frontend akan berjalan di: `http://localhost:5173`

---

## 🔗 API Endpoints

### Recipes
| Method | Endpoint | Deskripsi |
|--------|----------|-----------|
| GET | `/api/recipes` | Ambil semua resep |
| GET | `/api/recipes/:id` | Ambil resep by ID |
| POST | `/api/recipes` | Tambah resep baru |
| PUT | `/api/recipes/:id` | Update resep |
| DELETE | `/api/recipes/:id` | Hapus resep |

### Comments
| Method | Endpoint | Deskripsi |
|--------|----------|-----------|
| GET | `/api/comments/:recipe_id` | Ambil komentar by resep |
| POST | `/api/comments` | Tambah komentar |
| PUT | `/api/comments/:id` | Update komentar |
| DELETE | `/api/comments/:id` | Hapus komentar |

---

## 🛠️ Tech Stack

| Layer | Teknologi |
|-------|-----------|
| Frontend | React + Vite |
| Backend | Node.js + Express |
| Database | MySQL |
| Styling | CSS / Tailwind CSS |

---

## 👩‍💻 Developer

**Devi Githa Rahma Aisyah - 21552011322**  
Teknik Informatika — Universitas Teknologi Bandung  
GitHub: [@Kyoyaatsuko](https://github.com/Kyoyaatsuko)
