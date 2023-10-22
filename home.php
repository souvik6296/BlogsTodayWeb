<?php 
    error_reporting(0);

    $id= $_COOKIE["userid"];
    if($id!=null){

        include 'connection.php';
        
        $got_image= FALSE;
        $avatar_url="";
        $profile_name="";

        $query= "SELECT `name`, `email`, `password`, `userid`, `avatar` FROM `user-login`";
        $response= mysqli_query($connect, $query);


        while($row = mysqli_fetch_array($response, MYSQLI_ASSOC)) {
            if($row["userid"]==$id){
                    
                $avatar_url= $row["avatar"]."";
                $profile_name= $row["name"]."";
                $userid= $row["userid"]."";

                session_start();
                $_SESSION["avatar"]= $avatar_url;
                $_SESSION["name"]= $profile_name;
                    
                    

                $got_image= TRUE;
            }

        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogsToday</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&family=Playfair+Display:ital,wght@1,700&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:wght@700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Caprasimo&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style0.css">
    <link rel="icon" type="image/x-icon" href="/images/avatars/avatar15.png">

</head>

<body>
    <header>
        <div id="navbar" class="flex-display item-align-centre">
            <div id="logo">
                <a href="#">BlogsToday</a>
            </div>
            <div id="hotkeys-container">
                <a href="#" class="hotkeysmenu">Home</a>
                <span></span>
                <a href="#" class="hotkeysmenu">Favourites</a>
                <span></span>
                <a href="#" class="hotkeysmenu">Trendings</a>
                <span></span>
                <a href="#" class="hotkeysmenu">My Blogs</a>
            </div>
            <div id="right-section">
                <div id="search-blogs">
                    <div id="searchbar-container">
                        <button id="search-btn">Search</button>
                    </div>
                </div>
                <div id="account">
                    <img id="profileimage" src="images/man.png" alt="">
                    <span></span>
                    <a id="profilename" href="signin.php">SignIn/SignUp</a>
                </div>
                <?php
                    if($got_image){
                        $str0= "<script>let var01= document.getElementById('profileimage');var01.src='".$avatar_url."';</script>";
                        $str1= "<script>document.getElementById('profilename').innerHTML='".$profile_name."';</script>";
                        echo($str0.$str1);
                    }
                    
                ?>
                <div id="notifications-inboxes">
                    <img class="objects-logo" src="images/ringing.png" alt="">
                    <span></span>
                    <img class="objects-logo" src="images/email.png" alt="">
                </div>
            </div>

        </div>
    </header>

    <main class="flex-display" style="margin-top: 50px;">
        <div id="left-part">
            <div id="container1">
                <!-- <div class="upperblock-container flex-display">
                    <div id="inner-container1" class="inner-container first-block upper-block">
                        <div id="backgroundimg">
                            <div id="blog-details">
    
                                <h2 id="title">A cooking disaster</h2>
                                <p id="description">Once upon a time, there was a chef named John who was preparing for a
                                    big dinner party. He had invited all his friends and family over to his house and was
                                    planning to cook a delicious meal for them. He had spent the</p>
                                <a href="#" class="read-more">Read more</a>
                            </div>
                        </div>
                    </div>
                    <span></span>
                    <div id="inner-container2" class="inner-container second-block upper-block">
                        <div id="backgroundimg">
                            <div id="blog-details">
    
                                <h2 id="title">Good Coding Culture</h2>
                                <p id="description">What is a programming language? In simple terms, you can understand it as the mediator or a language to communicate. It enables the communication between the computer and </p>
                                <a href="#" class="read-more">Read more</a>
                            </div>
                        </div>
                    </div>
                    <span></span>
                    <div id="inner-container3" class="inner-container third-block upper-block">
                        <div id="backgroundimg">
                            <div id="blog-details">
    
                                <h2 id="title">Save this Environment</h2>
                                <p id="description">The world environment is going too much worst condition day by day as we use our natural recourses indiscriminately and fail to manage our waste. Our total environmental condition deteriorate in everyday life but we yet not concern ourselves for </p>
                                <a href="#" class="read-more">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lowerblock-container flex-display">
                    <div id="inner-container4" class="inner-container fourth-block lower-block">
                        <div id="backgroundimg">
                            <div id="blog-details">
    
                                <h2 id="title">Study is the ultimate powerful weapon</h2>
                                <p id="description">Nelson Mandela was right when he stated, “Education is the most powerful weapon you can utilize to transform the world.” Yes, the solution to any issue lies in education. Education is essential if you want to progress and succeed.</p>
                                <a href="#" class="read-more">Read more</a>
                            </div>
                        </div>
                    </div>
                    <span></span>
                    <div id="inner-container5" class="inner-container fifth-block lower-block">
                        <div id="backgroundimg">
                            <div id="blog-details">
    
                                <h2 id="title">Protection is Importaint</h2>
                                <p id="description">Every summer you may hear warnings about skin cancer and why sun protection and sunscreen are important. According to the Skin Cancer Foundation, not only can </p>
                                <a href="#" class="read-more">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="upperblock-container flex-display">
                    <div id="inner-container1" class="inner-container first-block upper-block">
                        <div id="backgroundimg">
                            <div id="blog-details">
    
                                <h2 id="title">A cooking disaster</h2>
                                <p id="description">Once upon a time, there was a chef named John who was preparing for a
                                    big dinner party. He had invited all his friends and family over to his house and was
                                    planning to cook a delicious meal for them. He had spent the</p>
                                <a href="#" class="read-more">Read more</a>
                            </div>
                        </div>
                    </div>
                    <span></span>
                    <div id="inner-container2" class="inner-container second-block upper-block">
                        <div id="backgroundimg">
                            <div id="blog-details">
    
                                <h2 id="title">Good Coding Culture</h2>
                                <p id="description">What is a programming language? In simple terms, you can understand it as the mediator or a language to communicate. It enables the communication between the computer and </p>
                                <a href="#" class="read-more">Read more</a>
                            </div>
                        </div>
                    </div>
                    <span></span>
                    <div id="inner-container3" class="inner-container third-block upper-block">
                        <div id="backgroundimg">
                            <div id="blog-details">
    
                                <h2 id="title">Save this Environment</h2>
                                <p id="description">The world environment is going too much worst condition day by day as we use our natural recourses indiscriminately and fail to manage our waste. Our total environmental condition deteriorate in everyday life but we yet not concern ourselves for </p>
                                <a href="#" class="read-more">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <span></span> -->
                
            </div>

            <?php 

                include 'connection.php';
    
                $query0="SELECT * FROM `user-post`";
                $retval = mysqli_query($connect, $query0);
                $containernew= 1;
                $count= 1;
                $secondarycount= 1;
                while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {

                    $title= $row['title'];
                    $body= substr($row['body'], 0, 240);
                    $image= $row['imagelocation'];
                    $postid= $row['postid'];
                    
                    
                    $secondarycount++;

                    if($count==$containernew){
                        $count++;
                        $containernew= $containernew+3;

                        
                        $str5= "<script>var divelement= document.createElement('div');
                        divelement.className= 'upperblock-container flex-display';
                        document.getElementById('container1').appendChild(divelement);
                        
                        var divelement1= document.createElement('div');
                        divelement1.className= 'inner-container first-block upper-block';
                        
                        var lastelement= document.getElementById('container1').lastChild;
                        
                        lastelement.appendChild(divelement1);

                        lastelement.lastChild.style.backgroundImage= 'url(".$image.")';

                        var parentelement= document.createElement('div');
                        parentelement.className= 'backgroundimg';
                        divelement1.appendChild(parentelement);

                        var lastdiv= document.createElement('div');
                        lastdiv.className= 'blog-details';
                        parentelement.appendChild(lastdiv);

                        var titleheading= document.createElement('h1');
                        titleheading.className= 'title';
                        titleheading.innerText='".$title."';
                        lastdiv.appendChild(titleheading);

                        var description= document.createElement('p');
                        description.className= 'description';
                        description.innerText='".$body."';
                        lastdiv.appendChild(description);

                        var readmore= document.createElement('p');
                        readmore.className= 'read-more';
                        readmore.innerText='Read more';
                        readmore.onclick=function(){saveDataofClickedPost(this)};
                        lastdiv.appendChild(readmore);
                        

                        var hiddenpost= document.createElement('a');
                        hiddenpost.className= 'hidden';
                        hiddenpost.innerText='".$postid."';
                        hiddenpost.href= 'readpost.php';
                        lastdiv.appendChild(hiddenpost);

                        lastelement.appendChild(document.createElement('span'));

        
                    

                        
                        </script>";

                        




                        echo($str5);
                    }else{
                        $count++;
                        $str6= "<script>var divelement1= document.createElement('div');
                        divelement1.className= 'inner-container first-block upper-block';
                        
                        var lastelement= document.getElementById('container1').lastChild;
                        
                        lastelement.appendChild(divelement1);
                        lastelement.lastChild.style.backgroundImage= 'url(".$image.")';
                        var parentelement= document.createElement('div');
                        parentelement.className= 'backgroundimg';
                        divelement1.appendChild(parentelement);

                        var lastdiv= document.createElement('div');
                        lastdiv.className= 'blog-details';
                        parentelement.appendChild(lastdiv);

                        var titleheading= document.createElement('h1');
                        titleheading.className= 'title';
                        titleheading.innerText='".$title."';
                        lastdiv.appendChild(titleheading);

                        var description= document.createElement('p');
                        description.className= 'description';
                        description.innerText='".$body."';
                        lastdiv.appendChild(description);

                        var readmore= document.createElement('p');
                        readmore.className= 'read-more';
                        readmore.innerText='Read more';
                        readmore.onclick=function(){saveDataofClickedPost(this)};
                        lastdiv.appendChild(readmore);

                        
                        var hiddenpost= document.createElement('a');
                        hiddenpost.className= 'hidden';
                        hiddenpost.innerText='".$postid."';
                        hiddenpost.href= 'readpost.php';
                        lastdiv.appendChild(hiddenpost);


                        

                        lastelement.appendChild(document.createElement('span'));
                        
                        </script>";
                        echo($str6);
                    }


    
                }
    
    
    
            ?>

            



            
        </div>
        <div id="right-part">
            <div class="flex-display" style="background-color: #00000075; height: 100%; width: 100%; flex-direction: column; padding: 0px 15px;">
                <div id="button-container">
                    <button id="create-blog" class="btn0"><a href="createblog.php">Create Your Blog</a></button>
                    
                    <span></span>
                    <button id="search-hot-topics" class="btn0"><a href="">Search HOT topics</a></button>
                </div>
                <div id="followings-ids">
                    <p>You are following :</p>
                    <div id="following-accounts">
                        <div class="account-holder">
                            <img src="images/person-icon.png" alt="" class="account-images">
                            <a href="#" class="account-name">User Name0</a>
                        </div>
                        <div class="account-holder">
                            <img src="images/person-icon.png" alt="" class="account-images">
                            <a href="#" class="account-name">User Name0</a>
                        </div>
                        <div class="account-holder">
                            <img src="images/person-icon.png" alt="" class="account-images">
                            <a href="#" class="account-name">User Name0</a>
                        </div>
                        <div class="account-holder">
                            <img src="images/person-icon.png" alt="" class="account-images">
                            <a href="#" class="account-name">User Name0</a>
                        </div>
                        <div class="account-holder">
                            <img src="images/person-icon.png" alt="" class="account-images">
                            <a href="#" class="account-name">User Name0</a>
                        </div>
                        <div class="account-holder">
                            <img src="images/person-icon.png" alt="" class="account-images">
                            <a href="#" class="account-name">User Name0</a>
                        </div>
                        <div class="account-holder">
                            <img src="images/person-icon.png" alt="" class="account-images">
                            <a href="#" class="account-name">User Name0</a>
                        </div>
                        <div class="account-holder">
                            <img src="images/person-icon.png" alt="" class="account-images">
                            <a href="#" class="account-name">User Name0</a>
                        </div>
                        <div class="account-holder">
                            <img src="images/person-icon.png" alt="" class="account-images">
                            <a href="#" class="account-name">User Name0</a>
                        </div>
                        <div class="account-holder">
                            <img src="images/person-icon.png" alt="" class="account-images">
                            <a href="#" class="account-name">User Name0</a>
                        </div>
                        <div class="account-holder">
                            <img src="images/person-icon.png" alt="" class="account-images">
                            <a href="#" class="account-name">User Name0</a>
                        </div>
                        <div class="account-holder">
                            <img src="images/person-icon.png" alt="" class="account-images">
                            <a href="#" class="account-name">User Name0</a>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </main>
    <footer>
        <div id="contacts-container">
            <p>Contact Us:</p>
            <div class="single-container">
                <img src="images/facebook.png" alt="">
                <span style="width: 15px;"></span>
                <a target="_blank" href="https://www.facebook.com/souvik.gupts" class="link">www.facebook.com/souvik.gupts</a>
            </div>
            <div class="single-container">
                <img src="images/twitter.png" alt="">
                <span style="width: 15px;"></span>
                <a target="_blank" href="https://twitter.com/CreatorGupta629" class="link">twitter.com/CreatorGupta629</a>
            </div>
            <div class="single-container">
                <img src="images/linkedin.png" alt="">
                <span style="width: 15px;"></span>
                <a target="_blank" href="https://www.linkedin.com/in/souvik-gupta-250109280/" class="link">www.linkedin.com/in/souvik-gupta-250109280/</a>
            </div>
            <div class="single-container">
                <img src="images/gmail-logo.png" alt="">
                <span style="width: 15px;"></span>
                <a target="_blank" href="#" class="link">souvikguptabusiness@gmail.com</a>
            </div>
            <div class="single-container">
                <img src="images/whatsapp.png" alt="">
                <span style="width: 15px;"></span>
                <a target="_blank" href="#" class="link">+91 7872189647</a>
            </div>          
        </div>
        <div id="credits">
            <p>This website is designed and created by:</p>
            <p style="font-size: 15px; color: white; font-family: 'Caprasimo', cursive;">Souvik Gupta</p>
            <div id="location" style="display: flex; margin-top: 10px;">
                <p style="font-size: 14px; color: white; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Location:</p>
                <span style="width: 15px;"></span>
                <img src="images/indianflag.png" alt="">
            </div>
        </div>

        <script>
            function clicktoinput(){
                document.getElementById('createblog').click();
                
            }
            function saveDataofClickedPost(element){
                    
                var postid0 = element.parentElement.children[3].innerHTML+"";
                var postid = postid0.replace("amp;", "");
                sessionStorage.setItem('selected_post_id', postid);
                element.parentElement.children[3].click();
                
            }

            

        </script>
        
        
        
    </footer>

</body>


</html>