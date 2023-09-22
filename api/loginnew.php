<?php
    session_start();
    include("connect.php");

    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    /*
    $check = mysqli_query($connect, "select * from user where mobile='$mobile' and password='$password' and role='$role' ");

    if(mysqli_num_rows($check)>0){
        $getGroups = mysqli_query($connect, "select name, photo, votes, id from user where role=2 ");
        if(mysqli_num_rows($getGroups)>0){
            $groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);
            $_SESSION['groups'] = $groups;
        }
        $data = mysqli_fetch_array($check);
        $_SESSION['id'] = $data['id'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['data'] = $data;
        echo '<script>
                window.location = "../routes/newDashboard.php";
            </script>';
    }
    */
    $check = mysqli_query($connect, " SELECT * FROM user WHERE mobile='$mobile' AND password='$password' AND role='$role' ") ;
    if( mysqli_num_rows($check) > 0 ){
       
            $userdata = mysqli_fetch_array($check) ;
            $groups = mysqli_query($connect, " SELECT * FROM user WHERE role=2 ") ;
            $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC) ;

            $_SESSION['userdata'] = $userdata ;
            $_SESSION['groupsdata'] = $groupsdata ;

            echo '
                <script>
                    window.location = "../routes/dashboard1.php"  ; 
                </script>
            ';
    }
    else{
        echo '<script>
                alert("Invalid NOoooo credentials!");
                window.location = "../routes/login.html";
            </script>';
    }
    
?>