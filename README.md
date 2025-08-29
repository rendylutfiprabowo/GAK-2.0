# 🎓 GAK Web Apps (Gerakan Ayo Kuliah)

A web-based application designed to support **Ayo Kuliah Lampung** initiative, aimed at mapping and monitoring **SMA students from PKH families** so they can continue their education to college with KIP Kuliah funding.

This app has **two main roles**:

* **Siswa (Student)**: Fill in biodata and other data needed by PKH facilitators.
* **Admin**: Map, monitor, and guide students from underprivileged families to pursue higher education.

---

## 🚀 Main Features

* Student biodata management
* PKH student data mapping
* Monitoring & guidance dashboard for admins
* Role-based access: **Siswa** and **Admin**
* Modular structure with **CodeIgniter 4**
* Excel/CSV support via PhpSpreadsheet (optional for reporting)
---
## 🔐 Dummy Login Accounts
Use the following dummy accounts to log in and explore the system:

🛠 Admin
Username: admin
Password: admin123

👨‍🎓 Student
Username: agil
Password: 12345678

---

## 🛠️ Installation

1. Clone the repository or download ZIP:

```bash
git clone https://github.com/rendylutfiprabowo/GAK-2.0
```

Or download [ZIP here](https://github.com/rendylutfiprabowo/GAK-2.0/archive/refs/heads/main.zip)

2. Navigate to project directory:

```bash
cd GAK-2.0
```

3. Unzip `assets` folder into `/public`:

```
/public/assets/material
```

4. Configure `.env` file according to your database

5. Install dependencies via Composer:

```bash
composer update
```

6. Generate application encryption key:

```bash
php spark key:generate
```

7. Run the local server:

```bash
php spark serve
```

8. Open your browser at `http://localhost:8080`

---

## 🖼️ Project Folder Structure

```
├── app/
│   ├── Controllers/
│   ├── Models/
│   ├── Views/
├── public/
│   └── assets/          # CSS, JS, images, material assets
├── writable/
├── .env
├── composer.json
└── README.md
```

---

## 🧪 Tools & Technologies

* PHP ^7.4 || ^8.0
* CodeIgniter 4.x (`codeigniter4/appstarter`)
* PhpSpreadsheet
* MySQL/MariaDB
* Composer

---

## 🧑‍💻 Developer

**Rendy Lutfi Prabowo**
GitHub: [@rendylutfiprabowo](https://github.com/rendylutfiprabowo)

---

## 📄 License

This project is licensed under the **MIT License** — feel free to use and modify it as needed.
 
