
<!DOCTYPE html>
<html lang="en">

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
            <div class="bottom-content">
            <li class="nav-link">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
            </div>
            </div>
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
        <form method="post">
            <label>name <input type="text" name="name"></label><br><br>
            <label>phone <input type="text" name="phone"></label><br><br>
            <label>email <input type="email" name="email"></label><br><br>
            <label>position <input type="text" name="position"></label><br><br>
            <label>salary <input type="number" name="salary"></label><br><br>
            <button name="save" type="submit" value="save">save</button>
            <button name="reset" type="submit" value="reset">reset</button>
        </form>
        <?php
            $con = mysqli_connect('localhost','root','','employee_db');
            if (isset($_POST['save'])){
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $position = $_POST['position'];
                $salary = $_POST['salary'];
            $sql = "INSERT INTO employees (name,phone,email,position,salary) value ('$name','$phone','$email','$position','$salary')";
            $result = mysqli_query($con,$sql);
            if($result){
                echo'suceed';
            }else{
                echo'error';
            } 

            }
        ?>
        </div>
  
    </div>


    <script src="./assets/js/script.js"></script>
</body>

</html>


