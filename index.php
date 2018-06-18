<?php 
    session_start();
    if(!isset($_SESSION['user'])){
        header("LOCATION: SignIn.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>
    <link rel="stylesheet" href="home.css"  type="text/css">
</head>
<body>
    <h1 class="home">Home Page</h1>
    <a class="logout" href="logout.php">Log Out</a>
    <hr>

    <?php
        include "connect.php";

        $sql = "SELECT * FROM tbuser";
        $results = mysqli_query($conn, $sql);
        $userinfo = array();
        $titles =array();

        while($row_user = mysqli_fetch_assoc($results)){
                $userinfo[] = $row_user;
            }
        
        // $col = count($userinfo[0])
    ?>
    <form method="POST">
        <table border = "1">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Eamil</th>
                <th>User Name</th>
                <th>Option</th>
            </tr>
        <tr>
        <?php
       
        $u_id = 0;
        foreach($userinfo as $id){
            foreach($id as $key=>$value){
                if($key=='user_id'){
                    $u_id = $value;
                }
                if($key=='user_pwd'){
                    break;
                }
               echo "<td>" . $value ."</td>" ;      
            }   
            // $u_id = $userinfo[$id]['user_id'];
            // echo $u_id;
            echo "<td><input type='submit' formaction='/LessionWeb/userForm/edit.php?id=$u_id' value='Edit'>" ;//echo $u_id;
            echo "<input type='submit' formaction='/LessionWeb/userForm/delete.php?id=$u_id' value='Delete'></td>";
            echo "</tr>";
        }
        ?>
        </table>
    </form>
</body>
</html>
