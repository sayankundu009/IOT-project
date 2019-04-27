<?php include 'dbcon.php'; ?>

<?php
session_start();
if (isset($_SESSION["u_name"])) {
    echo "already-log";
}

  $uname = $_GET['user_uname'];
  $pwd = $_GET['user_pwd'];

  $sql1= "select * from users where u_name = '$uname'";
  $result = mysqli_query($conn,$sql1);
  $rowcount= mysqli_num_rows($result);

  if (empty($rowcount)) {

        echo 5;
        exit();
  }
  else {

        $sql2= "select * from users where u_name = '$uname' and u_pwd = '$pwd'";
        $result = mysqli_query($conn,$sql2);
        $rowcount= mysqli_num_rows($result);
        if (empty($rowcount)) {

              echo 9;



        } else {
                      $row = mysqli_fetch_assoc($result);

                      if($row['u_name']==$uname){

                          if($row['u_pwd']==$pwd){

                            $_SESSION["u_name"] = $uname;
                            echo 1;

                          }
                      }

                }
  }










 ?>
