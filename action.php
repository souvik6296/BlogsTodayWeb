<?php     
    error_reporting(0);
    $alert=FALSE;
    if($_POST["done"]){
        
        $hostname= "localhost";
        $username= "root";
        $password= "";
        $databasename= "blogstoday";

        
        $email= $_POST["email"];
        
        $prefix= substr($email, 0, strpos($email, "@"));

        $connect= mysqli_connect($hostname, $username, $password, $databasename);

        $query0= "SELECT `email`, `userid` FROM `user-login`";
        $retval = mysqli_query($connect, $query0);
        $email_array= array();
        $userid_array= array();

        while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
            array_push($email_array, $row['email']);
            array_push($userid_array, $row['userid']);

        }
        
        if(in_array($email, $email_array)){
            $alert=TRUE;
            
        }else{

            $got_uniqueid= FALSE;
            $userid="";
            while(!$got_uniqueid){
                $userid= uniqid($prefix);
                if(!in_array($userid, $userid_array)){
                    $got_uniqueid= TRUE;
                }else{
                    $got_uniqueid= FALSE;
                }
            }



            $name= $_POST["name"];
            $pasword= $_POST["password0"];
            $avatar= $_POST["avatar"];
            $query1= "INSERT INTO `user-login`(`name`, `email`, `password`, `userid`, `avatar`) VALUES ('$name','$email','$pasword','$userid','$avatar')";
            $result= mysqli_query($connect, $query1);
            if($result){
                header("location: welcome.html");
            }
            
        }
        
    }
?>

