<!DOCTYPE html>
<html lang="en">
<?php

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- -----------CSS------------- -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- -----------BOXICONS------------- -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<?php
if($_SESSION)
?>
<body>
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="./assets/images/pro.png" alt="">
                </span>
                <div class="text header-text">
                    <span class="name">Dhasboard</span>
                    <span class="profession">SMS</span>
                </div>
            </div>
            <!-- <i class='bx bx-chevron-right toggle'></i> -->
        </header>
        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#" class="active">
                            <i class='bx bxs-dashboard icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    
                    <li class="nav-link">
                        <a href="list_employee.php">
                            <i class='bx bxs-cart-download icon'></i>
                            <span class="text nav-text">List employee</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="add_new_employee.php">
                            <i class='bx bxs-cart-download icon'></i>
                            <span class="text nav-text">Add employee</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="report.php">
                            <i class='bx bxs-cart-download icon'></i>
                            <span class="text nav-text">report</span>
                        </a>
                    </li>
                    
             
                </ul>
            </div>
           
                <li class="nav-link">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
            </div>
       
    </nav>

    <div class="main">
        <div class="topbar">
            <i class='bx bx-menu toggle' onclick="toggleMenu();"></i>
            <div class="search">
                <label>
                    <input type="text" placeholder="Search Here">
                    <i class='bx bx-search'></i>
                </label>
            </div>
            <div class="left">
                <div class="theme-Toggler">
                    <span class="bx bx-sun icon sun active"></span>
                    <span class="bx bx-moon icon moon"></span>
                </div>
                <div class="user">
                    <img src="./assets/images/pro.png" alt="">
                </div>
            </div>
        </div>
        <div class="title-main">
            <div class="text">Dashboard</div>
        </div>
        <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers">$1,043</div>
                    <div class="cardName">Total Sales</div>
                </div>
                <div class="iconBox">
                    <i class='bx bx-bar-chart-square'></i>
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers">$1,043</div>
                    <div class="cardName">Products</div>
                </div>
                <div class="iconBox">
                    <i class='bx bxs-spreadsheet'></i>
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers">$1,043</div>
                    <div class="cardName">Total Expenses</div>
                </div>
                <div class="iconBox">
                    <i class='bx bx-bar-chart'></i>
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers">$1,043</div>
                    <div class="cardName">Income</div>
                </div>
                <div class="iconBox">
                    <i class='bx bx-trending-up'></i>
                </div>
            </div>
        </div>
  
    </div>


    <script src="./assets/js/script.js"></script>
</body>

</html>