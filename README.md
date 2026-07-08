# Chattogram Healthcare - Dynamic Healthcare Management System

## PHP + MySQL + Bootstrap + XAMPP

---

## Project Overview

Chattogram Healthcare is a full-stack dynamic healthcare management system developed to manage doctors, appointments, healthcare services, and users efficiently.

---

## Technologies Used

- HTML
- CSS
- Bootstrap
- JavaScript
- PHP
- MySQL
- XAMPP

---

## Key Features

- User Registration & Login
- Doctor Management System
- Appointment Booking System
- Admin Dashboard
- Manage Doctors, Services & Departments
- Contact Message Management
- Responsive Design

---

# Installation Guide (Step by Step)

## Step 1: Start XAMPP

- Open XAMPP Control Panel
- Start **Apache** and **MySQL**

---

## Step 2: Copy Project Files

Copy the `hospital` folder to:


C:\xampp\htdocs\hospital


---

## Step 3: Create Database

1. Open browser:


http://localhost/phpmyadmin


2. Click **New**

3. Create database:


hospital_db


4. Go to **Import** tab

5. Select:


hospital.sql


6. Click **Go**

---

## Step 4: Run Website

### Main Website


http://localhost/hospital


### Admin Panel


http://localhost/hospital/admin/login.php


### Admin Login Information


Username: admin
Password: admin123


---

# Website Pages

| Page | URL |
|---|---|
| Home Page | http://localhost/hospital |
| Services | http://localhost/hospital/pages/services.php |
| Departments | http://localhost/hospital/pages/departments.php |
| Doctors | http://localhost/hospital/pages/doctors.php |
| Contact | http://localhost/hospital/pages/contact.php |
| Appointment | http://localhost/hospital/pages/appointment.php |
| Admin Dashboard | http://localhost/hospital/admin/dashboard.php |

---

# Admin Panel Features

✅ Appointments - View, confirm, cancel and delete appointments

✅ Doctors - Add, edit, delete doctors and upload doctor images

✅ Departments - Add, edit and delete departments

✅ Services - Add, edit and delete healthcare services

✅ Messages - View and manage contact messages

---

# Project Folder Structure


hospital/
│
├── index.php
├── hospital.sql
├── README.md
│
├── includes/
│ ├── config.php
│ ├── header.php
│ └── footer.php
│
├── pages/
│ ├── services.php
│ ├── departments.php
│ ├── doctors.php
│ ├── contact.php
│ └── appointment.php
│
├── admin/
│ ├── login.php
│ ├── dashboard.php
│ ├── appointments.php
│ ├── doctors.php
│ ├── departments.php
│ ├── services.php
│ ├── contacts.php
│ └── logout.php
│
└── assets/
├── css/style.css
├── js/main.js
└── images/


---

# Screenshots

## Home Page
![Home Page](home-page.png)

## Doctor List Page
![Doctor List Page](doctor-list-page.png)

## Doctor Details Page
![Doctor Details Page](doctor-details-page.png)

## Appointment Page
![Appointment Page](appointment-page.png)

## Services Page
![Services Page](services-page.png)

## Contact Page
![Contact Page](contact-page.png)

## Login Page
![Login Page](login-page.png)

## Admin Dashboard
![Admin Dashboard](admin-dashboard.png)

---

# Author

**Tanmun Akther**

GitHub: tanmunakther

---

# License

This project is developed for learning and portfolio purposes.
