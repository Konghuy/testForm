<?php
    session_start();
    include "connect.php";
    
    $fname = $_POST['txtFname'];
    $lname = $_POST['txtLname'];
    $email = $_POST['txtEmail'];
    $user = $_POST['txtUserName'];
    $pwd = $_POST['txtPwd1'];
    
    $data = array();
    if(!isset($_SESSION['id'])){
        echo "Not session id";
        exit;
        // unset($_SESSION['id');
    }
    $id = $_SESSION['id'];
    $errors = array();

        if(empty($fname)){
            array_push($errors, "First Name is require.");
        }
        if(empty($lname)){
            array_push($errors, "Last Name is require.");
        }
        if(empty($email)){
            array_push($errors, "Email is require.");
        }
        if(empty($user)){
            array_push($errors, "User name is require.");
        }
        if(empty($pwd)){
            array_push($errors, "Password is require.");
        }

      //  print_r($id);
        $sql_compare = "SELECT * FROM tbuser WHERE tbuser.user_id <> $id" ;

            $results = mysqli_query($conn, $sql_compare);
            $check = mysqli_num_rows($results);
            //print_r($results);
            if($check > 0){
                array_push($errors, "Dubplicate User Name.");
            }
        // $sql_compare = "UPDATE tbuser
        //                 SET 
        //                 WHERE user_names = '$user'";
        //     $results = mysqli_query($conn, $sql_compare);
        //     $check = mysqli_num_rows($results);
        //     if($check > 0){
        //         array_push($errors, "Dubplicate User Name.");
        //     }
        
        $_SESSION['errors'] = $errors;
      //  print_r($_SESSION['errors']);

        if(count($_SESSION['errors'])==0){
            // $sql = "INSERT INTO tbuser (user_fname, user_lname, user_email, user_names, user_pwd)
            //                 VALUES ('$fname', '$lname', '$email', '$user', '$pwd')";
            $sql = "UPDATE tbuser
                    SET user_fname = '$fname',
                        user_lname = '$lname',
                        user_email = '$email',
                        user_names = '$user',
                        user_pwd = '$pwd',
                    WHERE tbuser.user_id = '$id'
            ";
            if ($conn->query($sql) === TRUE) {
            //echo "New record has been added.";
                header("LOCATION: index.php");
                //unset($_SESSION['id']);
            }else
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }else{
                $data = array($fname, $lname, $email, $user, $pwd, $pwd2);
                $_SESSION['Data'] = $data;
            //print_r($_SESSION['Data']);
           header("LOCATION: edit.php");
        }
