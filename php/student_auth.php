<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $host = "localhost";
    $user="patel4d1_My_residence";
    $pwd = "12345";
    $db="patel4d1_My_residence";
    $conn = mysqli_connect($host, $user, $pwd, $db);
    // echo "hello";

    $id=$_POST['std_id'];
    $username = $_POST['uname'];
    $userpwd = $_POST['psw'];



    $query = "SELECT * FROM student_login WHERE STD_ID='$id' AND USERNAME='$username' AND PASSWORD = '$userpwd'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['patel4d1_My_residence'] = 'true';
        $_SESSION['std_id'] = $id;
     
        header("location:student_home.php");
    } else {

        echo "Wrong User name or password ! ";


        echo "<br><button> <a href='login_page.php'>Login Page</a> </button>";
    }
}
