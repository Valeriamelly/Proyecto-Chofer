<!-- <?php include('../config/constants.php'); ?> -->

<html>
  <head>
    <title>Login - Servicios de Choferes System</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Koulen&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/style2.css" />
  </head>

  <body>

    <div class="container"> <!--CONTAINER-->
    <?php 
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
      <div class="row">

        <form action="manage-order.php" method="POST">
          <h1>LOGIN CHOFER</h1>
          <section class="login">
            <input
              class="inputs"
              type="text"
              name="username"
              placeholder="Enter Username"
            /><br /><br /><br />
            <!--<input
              class="inputs"
              type="number"
              name="password"
              placeholder="Enter Password"
            /><br /><br />-->

            <div class="register">
              <a href="">
                <button type="submit" name="submit"><span></span>LOGIN</button>
              </a>
            </div>
          </section>
        </form>
      </div>
    </div>
  </body>
</html>
<!-- 
<?php 

    //CHeck whether the Submit Button is Clicked or NOt
    if(isset($_POST['submit']))
    {
        //Process for Login
        //1. Get the Data from Login form
         //$username = $_POST['username'];
         //$password = md5($_POST['password']);
        $username =$_POST['username'];
        
        //$raw_password = md5($_POST['password']);
        $password =$POST['password'];

        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM tbl_choferes WHERE nombre_chofer='$username'";

        //3. Execute the Query
        $res = mysqli_query($conn, $sql);

        //4. COunt rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            //User AVailable and Login Success
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['user'] = $username; //TO check whether the user is logged in or not and logout will unset it

            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'chofer/');
        }
        else
        {
            //User not Available and Login FAil
            $_SESSION['login'] = "<div class='error'>Username or Password did not match.</div>";
            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'chofer/login.php'); 
        }

    }

?>
-->
