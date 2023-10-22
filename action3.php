<?php 
    // error_reporting(0);
    $alert=FALSE;
    $result= "";

    if(isset($_POST["post"])){
        if(isset($_FILES['choosefile'])){
            $filename = $_FILES["choosefile"]["name"];
            $tempname = $_FILES["choosefile"]["tmp_name"];
            
            include 'connection.php';

            $query0="SELECT `postid` FROM `user-post`";
            $retval = mysqli_query($connect, $query0);

            
            
            $postid_array= array();
            
            while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {

                array_push($postid_array, $row['postid']);

            }







            $blogtitle= $_POST["titleofblog"];
            $blogbody= $_POST["bodyofblog"];
            $category= $_POST["category"];
            $userid= $_COOKIE["userid"];
            
            
            $got_uniqueid= FALSE;
            $postid="";
            while(!$got_uniqueid){
                $postid= uniqid($userid."&");
                if(!in_array($postid, $postid_array)){
                    $got_uniqueid= TRUE;
                }else{
                    $got_uniqueid= FALSE;
                }
            }




            $new_filename= $postid."_".$filename;
    
            $location= "post_images/".$userid."/";

            $image_location= $location.$new_filename;
            mkdir($location, 0777, true);


            

            if($connect){
                $query= "INSERT INTO `user-post`(`postid`, `imagelocation`, `title`, `body`, `category`, `visitors`) VALUES ('$postid','$image_location','$blogtitle','$blogbody','$category','5')";
                $response = mysqli_query($connect, $query);
    
                if($response){
                    if(move_uploaded_file($tempname, $image_location)){
    
                        $alert=TRUE;
                        $result="possitive";
                        echo("<script>console.log('saved');</script>");
                    }
                    else{
    
                        $alert=TRUE;
                        $result="negative";
                        echo("<script>console.log('not saved');</script>");
    
                    }
        
    
                }
    
            }else{
                $alert=TRUE;
                $result="not-connected";
                echo("<script>console.log('error');</script>");
            }





           
            
            
        }else{
            $alert=TRUE;
            $result="no-file-found";
            echo("<script>console.log('error');</script>");
        }
        
    }

?>
