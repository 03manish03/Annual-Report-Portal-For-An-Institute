# 🎓 Institute Management System(annual report portal)

A role-based web application for managing academic institutions — built with PHP & MySQL. It enables seamless management of students, faculty, and administrative operations through a unified platform.

---

## 📌 Project Overview

This **Institute Management System** is designed and developed by **Manish Charpe**, a B.Tech AIML student passionate about building smart, efficient, and scalable software solutions. The system includes **Admin**, **Teacher**, and **Student** modules to handle real-time data operations like attendance, grading, and subject assignments — all under a secure login system.

---

## 🚀 Features

### 👨‍💼 Admin Panel
- Add, update, and manage students and teachers.
- Manage departments and subject allocations.
- Monitor attendance records and grading.
- Full control over the platform's data structure.

### 👨‍🏫 Teacher Panel
- View assigned subjects.
- Mark and manage student attendance.
- Assign grades to students.

### 🎓 Student Panel
- View personal attendance records.
- Check subject details and performance grades.

### 🔐 Login System
- Role-based authentication (Admin, Teacher, Student).
- Secure login with session management.

---

## 🛠️ Tech Stack

| Layer        | Technology                     |
|--------------|---------------------------------|
| **Frontend** | HTML, CSS, JavaScript           |
| **Backend**  | PHP                             |
| **Database** | MySQL (via `Institute-management-system.sql`) |
| **Others**   | Power BI (for potential future integrations) |

---

## 📂 Project Structure

```bash
├── Admin/              # Admin functionalities
├── Student/            # Student dashboard
├── Teacher/            # Teacher dashboard
├── Login/              # Unified login interface
├── includes/           # Config and session management
├── actions/            # Role-based login checks
├── public/             # Static assets (CSS, JS, images)
├── screenshots/        # UI previews (optional)
├── Institute-management-system.sql  # Database schema
└── readme.md           # Project documentation



🧑‍💻 Developer
👋 Hi, I’m Manish Charpe

B.Tech in Artificial Intelligence & Machine Learning
Experienced in Java, Python, Web Development, and Power BI
Focused on building real-world projects that bridge AI with practical applications.

🔗 linkedin.com/in/manish-charpe-880716277


 How to Run This Project Locally
Clone the repository:
git clone https://github.com/yourusername/institute-management-system.git

Move the project to your local server (e.g., htdocs for XAMPP).

Import the SQL file:

Open phpMyAdmin

Create a database named institute

Import Institute-management-system.sql

Start Apache & MySQL (XAMPP / WAMP)

Visit the project in your browser:
http://localhost/Institute-management-system-main/Login/login.php

For your convenience, here are the default login credentials for the initial setup:

Admin:
Username: admin@admin.com
Password: 123
Teacher:
Username: Riya@teacher.com
Password: 123
Student:
Username: anika@student.com
Password: 123
Please remember to change the default passwords for security purposes after the initial setup.

📈 Future Scope
🔄 Integration with Power BI for visual analytics.

📲 Build a mobile-friendly version.

📧 Add email notifications for attendance & grades.

🔒 Improve authentication with JWT / OAuth.

🧠 Incorporate AI-based student performance prediction.

⭐ Why This Project Stands Out
This project demonstrates full-stack development, database design, and practical application of role-based access control — ideal for institutions looking to digitize their processes.
