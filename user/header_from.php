<?php
  require "../db_connection.php";

  $name_status="Register/Login";
  $profile_pic_url="";
  $user_id="";
  if(isset($_COOKIE['user_id'])){
    $user_id=$_COOKIE['user_id'];
    $sql_query="SELECT * FROM user WHERE user_id='$user_id'";
    $result=$database_connection->query($sql_query);
    $row=$result->fetch_assoc();
    $first_name=$row['first_name'];
    $profile_pic_url=$row['profile_pic_url'];
    $name_status= "Hi, ".$first_name;
  }
?>
<header class="p-3 border-bottom">
        <div class="container-fluid">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <h2 class="logo-wrap">ICTfun</h2>
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="index.php" class="nav-link px-2 link-dark">Home</a></li>
              <li><a href="dashboard_form.php" class="nav-link px-2 link-dark">Dashboard</a></li>
              <li><a href="contact_form.php" class="nav-link px-2 link-dark disabled">Contact us</a></li>
            </ul>
<!--     
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
              <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form> -->
            <a href="contact_form.php"><i class="fa-solid fa-bell notification-wrap"></i></a>
            <div class="user-name-wrap">
                <p id="name_status"><?php echo $name_status; ?></p>
            </div>
    
            <div class="dropdown text-end">
              <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img id="header_img" src="<?php if($profile_pic_url=="") echo "profile_pic/pro_pic.jpg"; else echo $profile_pic_url; ?>" alt="mdo" width="32" height="32" class="rounded-circle">
              </a>
              <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                <li><a class="<?php if($user_id=="") echo "disabled"; ?> dropdown-item" href="profile_form.php"><i class="fa-solid fa-address-card"></i> Profile</a></li>
                <li><a class="<?php if($user_id=="") echo "disabled"; ?> dropdown-item" href="settings_form.php"><i class="fa-solid fa-gear"></i> Settings</a></li>
                <li><a class="dropdown-item" href="login_form.php"><i class="fa-solid fa-user"></i> Login</a></li>
                <li><a class="dropdown-item" href="register_form.php"><i class="fa-solid fa-right-to-bracket"></i> Register</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="<?php if($user_id=="") echo "disabled"; ?> dropdown-item" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Log out</a></li>
              </ul>
            </div>
          </div>
        </div>
</header>