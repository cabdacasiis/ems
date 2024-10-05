
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.min.css" />
  

<!-- Vendor CSS Files -->

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- -----------CSS------------- -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- -----------BOXICONS------------- -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/DataTables/datatables.css" />
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
            <table id="table datatable">
                
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Magac</th>
                    <th>Lambarka</th>
                    <th>Email</th>
                    <th>Magaalada</th>
                    <th>Gunada</th>
                    <th>Waqtiga</th>
                    <th>Action</th>
                    </tr>
                </thead>
             
                <?php
                $con = mysqli_connect('localhost','root','','employee_db');
                $sql = "SELECT * FROM employees";
                $result =  mysqli_query($con,$sql);
                echo'<tbody>';
                while($row = mysqli_fetch_array($result)){
                  echo'<tr>';
                  echo"<td>".$row['id']."</td>";
                  echo"<td>".$row['name']."</td>";
                  echo"<td>".$row['phone']."</td>";
                  echo"<td>".$row['email']."</td>";
                  echo"<td>".$row['position']."</td>";
                  echo"<td>".$row['salary']."</td>";
                  echo"<td>".$row['hire_date']."</td>";
       
                  ?>
                   <td>
                  <a href="update.php?id=<?php echo $row ['id'];?>">
  
                <button  style="border: 1px green solid;background-color: green;color: white;width: 72px;height: 32px;border-radius: 6px"> update</button> 
                </a>
                
                </td>
                <td>
                <a href="delete.php?id=<?php echo $row ['id'];?>">
  
  <button style="border: 1px rgb(128, 0, 0) solid;background-color: rgb(128, 0, 21);color: white;width: 72px; height: 32px;border-radius: 6px">delete
  </button>
                </td>
            <?php
                       echo'</tr>';    
             echo'</tbody>'; 
            }
            ?>
        </div>
    </table>
  
    </div>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>


