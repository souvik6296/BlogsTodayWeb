<?php 
    error_reporting(0);
    if($_POST["collected"]){
        
        $hostname= "localhost";
        $username= "root";
        $password= "";
        $databasename= "blogstoday";

        
        $email= $_POST["mailid"];


        $connect= mysqli_connect($hostname, $username, $password, $databasename);

        
        if($connect){
            $query= "SELECT `name`, `email`, `password`, `avatar` FROM `user-login`";
            $response= mysqli_query($connect, $query);


            while($row = mysqli_fetch_array($response, MYSQLI_ASSOC)) {
                if($row["email"]==$email){
                    $str= "<script>document.getElementById('profileimage').src='".$row['avatar']."';</script>";
                }

            }
        }
        else{
            echo("<script>console.log('not connected');");
            die ("Failed to connect to MySQL: " . mysqli_connect_error());
        }
        


    }
?>