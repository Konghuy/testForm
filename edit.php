<?php
    session_start();
    include "connect.php";
    if(!isset( $_SESSION['id'])){
        $id = $_GET['id'];
        $_SESSION['id'] = $id;
    }else{
        $id = $_SESSION['id'];
    }
    $sql = "SELECT * FROM tbuser WHERE user_id='$id'";
    $results = mysqli_query($conn, $sql);
    $userinfo = array();
    $titles =array();

    while($row_user = mysqli_fetch_assoc($results)){
            $userinfo[] = $row_user;
        }
    $Fname = $userinfo[0]['user_fname'];
    $Lname = $userinfo[0]['user_lname'];
    $Email = $userinfo[0]['user_email'];
    $Name =  $userinfo[0]['user_names'];
    $PWD = $userinfo[0]['user_pwd'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="user.css"  type="text/css">
</head>
<body>
    
    
    <form method="POST" action="update.php">
        <h1 id="title" >Form Edit</h1>
        <?php 
            if(isset($_SESSION['errors'])){
                include "errors.php";
                unset($_SESSION['errors']);
            }
        ?>
        
        <input class="text" type="text" placeholder="First Name" name="txtFname" 
            <?php if(isset($_SESSION['Data'])){
                echo  'value = "'. $_SESSION['Data'][0] .'"';
            } else {
                echo  'value = "'. $Fname .'"';
            }
            ?> /> <br>

        <input class="text" type="text" placeholder="Last Name" name="txtLname" 
            <?php if(isset($_SESSION['Data'])){
                echo  'value = "'. $_SESSION['Data'][1] .'"';
            } else {
                echo  'value = "'. $Lname .'"';
            }
            ?>/> <br>
            
        <input class="text" type="text" placeholder="Email" name="txtEmail" 
            <?php if(isset($_SESSION['Data'])){
                echo  'value = "'. $_SESSION['Data'][2] .'"';
            } else {
                echo  'value = "'. $Email .'"';
            }
            ?>/> <br>
        <input class="text" type="text" placeholder="User Name" name="txtUserName" 
            <?php if(isset($_SESSION['Data'])){
                echo  'value = "'. $_SESSION['Data'][3] .'"';
            } else {
                echo  'value = "'. $Name .'"';
            }
            ?>/> <br>
        <input class="text" type="password" placeholder="Password" name="txtPwd1"
            <?php if(isset($_SESSION['Data'])){
                echo  'value = "'. $_SESSION['Data'][4] .'"';
            }
            else {
                echo  'value = "'. $PWD .'"';
            }
            ?>/> <br>
        
        <input class="button" type="submit" value="Update">
       <?PHP 
            unset($_SESSION['Data']);
          
       ?>
    </form>      
        
</body>
</html>
