-- Hospital Management Database
CREATE DATABASE IF NOT EXISTS hospital_db;
USE hospital_db;

-- Departments Table
CREATE TABLE IF NOT EXISTS departments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    icon VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Doctors Table
CREATE TABLE IF NOT EXISTS doctors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    department_id INT,
    specialization VARCHAR(150),
    email VARCHAR(100),
    phone VARCHAR(20),
    image VARCHAR(200),
    available_days VARCHAR(100),
    bio TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (department_id) REFERENCES departments(id) ON DELETE SET NULL
);

-- Services Table
CREATE TABLE IF NOT EXISTS services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    icon VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Appointments Table
CREATE TABLE IF NOT EXISTS appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_name VARCHAR(100) NOT NULL,
    patient_email VARCHAR(100),
    patient_phone VARCHAR(20) NOT NULL,
    patient_age INT,
    doctor_id INT,
    department_id INT,
    appointment_date DATE NOT NULL,
    appointment_time TIME NOT NULL,
    message TEXT,
    status ENUM('pending','confirmed','cancelled') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (doctor_id) REFERENCES doctors(id) ON DELETE SET NULL,
    FOREIGN KEY (department_id) REFERENCES departments(id) ON DELETE SET NULL
);

-- Contact Messages Table
CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    phone VARCHAR(20),
    subject VARCHAR(200),
    message TEXT NOT NULL,
    is_read TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Admin Table
CREATE TABLE IF NOT EXISTS admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Default Admin (username: admin, password: admin123)
INSERT INTO admin_users (username, password) VALUES ('admin', 'admin123');

-- Sample Departments
INSERT INTO departments (name, description, icon) VALUES
('Cardiology', 'হৃদরোগ বিশেষজ্ঞ বিভাগ - হার্টের সমস্ত সমস্যার সমাধান', 'fas fa-heartbeat'),
('Neurology', 'স্নায়ু বিজ্ঞান বিভাগ - মস্তিষ্ক ও স্নায়ুতন্ত্রের চিকিৎসা', 'fas fa-brain'),
('Orthopedics', 'অস্থি ও জয়েন্ট বিভাগ - হাড় ও মাংসপেশির চিকিৎসা', 'fas fa-bone'),
('Pediatrics', 'শিশু বিভাগ - শিশুদের সকল রোগের চিকিৎসা', 'fas fa-baby'),
('Gynecology', 'স্ত্রীরোগ বিভাগ - মহিলাদের স্বাস্থ্য সেবা', 'fas fa-venus'),
('Dermatology', 'চর্ম বিভাগ - ত্বক, চুল ও নখের চিকিৎসা', 'fas fa-hand-sparkles'),
('Ophthalmology', 'চক্ষু বিভাগ - চোখের সকল সমস্যার সমাধান', 'fas fa-eye'),
('ENT', 'নাক কান গলা বিভাগ - ENT বিশেষজ্ঞ চিকিৎসা', 'fas fa-stethoscope'),
('Oncology', 'ক্যান্সার বিভাগ - ক্যান্সার নির্ণয় ও চিকিৎসা', 'fas fa-ribbon'),
('Emergency', 'জরুরি বিভাগ - ২৪/৭ জরুরি চিকিৎসা সেবা', 'fas fa-ambulance');

-- Sample Services
INSERT INTO services (title, description, icon) VALUES
('Online Appointment', 'ঘরে বসেই ডাক্তারের অ্যাপয়েন্টমেন্ট নিন', 'fas fa-calendar-check'),
('Lab Tests', 'অনলাইনে ল্যাব টেস্টের রিপোর্ট সংগ্রহ করুন', 'fas fa-flask'),
('Online Consultation', 'ভিডিও কলে ডাক্তারের পরামর্শ নিন', 'fas fa-video'),
('Emergency Care', '২৪ ঘণ্টা জরুরি চিকিৎসা সেবা', 'fas fa-ambulance'),
('Pharmacy', 'অনলাইনে ওষুধের অর্ডার করুন', 'fas fa-pills'),
('Health Records', 'আপনার স্বাস্থ্য রেকর্ড অনলাইনে সংরক্ষণ করুন', 'fas fa-file-medical');

-- Sample Doctors
INSERT INTO doctors (name, department_id, specialization, email, phone, available_days, bio) VALUES
('Dr. Ahmed Rahman', 1, 'Senior Cardiologist', 'ahmed@hospital.com', '01712345678', 'Sat-Thu', 'বাংলাদেশের শীর্ষস্থানীয় হৃদরোগ বিশেষজ্ঞ। ২০+ বছরের অভিজ্ঞতা।'),
('Dr. Fatima Khatun', 4, 'Pediatrician', 'fatima@hospital.com', '01812345678', 'Sun-Thu', 'শিশু রোগ বিশেষজ্ঞ। MBBS, MD (Pediatrics)।'),
('Dr. Karim Hossain', 2, 'Neurologist', 'karim@hospital.com', '01912345678', 'Sat-Wed', 'স্নায়ু রোগ বিশেষজ্ঞ। ১৫+ বছরের অভিজ্ঞতা।'),
('Dr. Nusrat Jahan', 5, 'Gynecologist', 'nusrat@hospital.com', '01612345678', 'Sat-Thu', 'স্ত্রীরোগ বিশেষজ্ঞ। MBBS, FCPS (Gynecology)।');
