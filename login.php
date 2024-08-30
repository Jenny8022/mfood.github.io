<?php
    include('connection.php');
    
    if (isset($_POST['submit'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "select * from user where username = '$username' and userpass = '$password'";  
        $result = mysqli_query($con, $query);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if($count == 1){  
            header("Location: home.php");
            die;
        }  
        else{  
            echo  '<script> 
                        window.location.href = "index.php"; 
                        alert("Login failed. Invalid username or password!!")                    
                    </script>';
        }     
    } 
?>
