# Hostel Management System

## Overview

This project is a bachelor's web development project for managing hostel-related student workflows in a university setting. It provides modules for student registration, login, room information, leave requests, and admin-side management using PHP, CSS, and MySQL.

## Features

- Student registration and login
- Admin login and dashboard
- Hostel room details and room search
- Student room details
- Leave request management
- Basic hostel management pages such as About, Pricing, and Contact

## Tech Stack

- PHP
- MySQL
- HTML/CSS
- XAMPP / localhost environment

## Project Structure

Important files in this repository include:

- `index.php` : landing page
- `signin.php` / `registration.php` : student authentication pages
- `adminlogin.php` / `admindashboard.php` : admin-side access and dashboard
- `roomdetails.php` / `studentroomdetails.php` : room information pages
- `leaverequests.php` / `applyleave.php` : leave management features
- `hms.sql` : database schema / SQL file
- `connect.php` / `dbConnect.php` : database connection setup

## Screenshots

### Landing Page

![Landing Page](images/landing-page.jpeg)

### Login Page

![Login Page](images/login-page.jpeg)

### Registration Page

![Registration Page](images/registration-page.jpeg)

## How to Run

1. Install XAMPP or any local PHP + MySQL environment.
2. Copy the project folder into your `htdocs` directory.
3. Import `hms.sql` into phpMyAdmin.
4. Update database credentials in `connect.php` or `dbConnect.php` if needed.
5. Start Apache and MySQL.
6. Open the project in your browser using `http://localhost/<project-folder>`.

## Notes

This repository is being shared as a bachelor's project and represents an academic web application prototype. It focuses on CRUD-style hostel management workflows and basic UI pages rather than production-grade deployment or security hardening.

## Future Improvements

- Improve folder structure by separating assets, views, and backend logic
- Add form validation and stronger authentication handling
- Improve UI consistency and responsive design
- Deploy on a public demo server

![image](https://user-images.githubusercontent.com/57340784/205433954-339ec077-9db7-4884-9772-775757816fd9.png)

![image](https://user-images.githubusercontent.com/57340784/205433992-47108f5f-fffa-4c04-897f-bfda50cac7d7.png)

![image](https://user-images.githubusercontent.com/57340784/205434025-ea948c09-b902-480d-ba28-ecc15c54cb4c.png)
