<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --sidebar-bg: #015FC9;
            --sidebar-hover: #003f7f;
            --text-color: #000;
            --bg-color: #fff;
        }
        
        [data-theme="dark"] {
            --text-color: #fff;
            --bg-color: #121212;
        }

        body {
            display: flex;
            min-height: 100vh;
            margin: 0;
            background-color: var(--bg-color);
            color: var(--text-color);
            transition: background 0.3s, color 0.3s;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: var(--sidebar-bg);
            color: white;
            padding: 15px;
            height: 100vh;
            position: fixed;
            left: -250px;
            transition: left 0.3s ease-in-out;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .sidebar.open {
            left: 0;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 10px;
            margin-top:30px;
            text-decoration: none;
        }

        .sidebar a:hover, .sidebar a.active {
            background-color: var(--sidebar-hover);
            font-weight: bold;
        }

        .sidebar .menu {
            flex: 1;
            margin-top: 20px;
        }

        /* Sidebar Toggle Button */
        .menu-toggle {
            position: fixed;
            top: 10px;
            left: 10px;
            z-index: 1000;
            background-color: var(--sidebar-bg);
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
        }

        .menu-toggle:hover {
            background-color: var(--sidebar-hover);
        }

        /* Theme Toggle Button */
        .theme-toggle {
            cursor: pointer;
            background: none;
            border: none;
            color: inherit;
            font-size: 1.5em;
            padding: 5px;
            position: fixed;
            right: 20px;
            top: 50px;
        }

        .theme-toggle:hover {
            opacity: 0.8;
        }

         /* Profile Section */
         .profile-container {
            position: fixed;
            top: 10px;
            right: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .profile-container img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .profile-container span {
            font-size: 16px;
            font-weight: bold;
        }

        /* Logout Button */
        .logout {
            background-color: red;
            color: white;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: block;
            border-radius: 5px;
            margin-top: 10px;
        }

        .logout:hover {
            background-color: darkred;
        }
    </style>
</head>
<body data-theme="light">

    <!-- Sidebar Toggle Button -->
    <button id="menu-toggle" class="menu-toggle"><i class="fas fa-bars"></i></button>

    <!-- Theme Toggle Button -->
    <button id="theme-toggle" class="theme-toggle"><i class="fas fa-moon"></i></button>

     <!-- Profile Section -->
     <div class="profile-container">
        <img src="Assets/images/admin.jpg" alt="Profile Picture">
        <span>Admin</span>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <button id="close-menu" class="menu-toggle"><i class="fas fa-times"></i></button>
        <div class="menu">
            <a href="#dashboard" class="active"><i class="fas fa-home"></i> Dashboard</a>
            <a href="#appointments"><i class="fas fa-calendar-check"></i> Appointments</a>
            <a href="#doctors"><i class="fas fa-user-md"></i> Doctors</a>
            <a href="#users"><i class="fas fa-users"></i> Users</a>
        </div>
        <a href="logout.php" class="logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <!-- Main Content -->
    <div class="content container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Admin | Dashboard</h1>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card p-3">
                            <h5><i class="fas fa-users"></i> Manage Users</h5>
                            <p>Total Users: 6</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3">
                            <h5><i class="fas fa-user-md"></i> Manage Doctors</h5>
                            <p>Total Doctors: 9</p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const sidebar = document.querySelector(".sidebar");
            const menuToggle = document.getElementById("menu-toggle");
            const closeMenu = document.getElementById("close-menu");
            const themeToggle = document.getElementById("theme-toggle");
            const themeIcon = themeToggle.querySelector("i");

            menuToggle.addEventListener("click", function () {
                sidebar.classList.toggle("open");
            });

            closeMenu.addEventListener("click", function () {
                sidebar.classList.remove("open");
            });

            function setTheme(theme) {
                document.documentElement.setAttribute("data-theme", theme);
                localStorage.setItem("theme", theme);
                themeIcon.className = theme === "dark" ? "fas fa-sun" : "fas fa-moon";
            }

            themeToggle.addEventListener("click", function () {
                const currentTheme = localStorage.getItem("theme") === "dark" ? "light" : "dark";
                setTheme(currentTheme);
            });

            setTheme(localStorage.getItem("theme") || "light");
        });
    </script>
</body>
</html>
