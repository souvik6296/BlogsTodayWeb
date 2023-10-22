
<?php include 'action3.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style4.css">
    <script src="script3.js"></script>
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
                session_start();
                $str="
                    <script>
                        document.getElementById('profileimage').src='".$_SESSION['avatar']."';
                        document.getElementById('profilename').innerHTML='".$_SESSION['name']."';
                    
                    </script>";

                echo($str);

                ?>

                <div id="notifications-inboxes">
                    <img class="objects-logo" src="images/ringing.png" alt="">
                    <span></span>
                    <img class="objects-logo" src="images/email.png" alt="">
                </div>
            </div>

        </div>
    </header>

    <main>
        
        <div id="alert-msg">
            <p id="alert-text"></p>
        </div>

        <?php
            if($alert){
                if($result=="possitive"){
                    echo("
                <script>
                    document.getElementById('alert-msg').style.visibility='visible';
                    document.getElementById('alert-msg').style.backgroundColor='rgb(16, 220, 16)';
                    document.getElementById('alert-text').innerText='Congrats!! Your Blog has been posted successfully.';
                </script>");
                }
                elseif($result=="negative"){
                    echo("
                <script>
                    document.getElementById('alert-msg').style.visibility='visible';
                    document.getElementById('alert-msg').style.backgroundColor='#f11206';
                    document.getElementById('alert-text').innerText='Oooops!!! Sorry some error to save your post please try again later.';
                </script>");
                }
                elseif($result=="no-file-found"){
                    echo("
                <script>
                    document.getElementById('alert-msg').style.visibility='visible';
                    document.getElementById('alert-msg').style.backgroundColor='#f11206';
                    document.getElementById('alert-text').innerText='Oooops!!! Sorry some error to attach the image of your post please try again later.';
                </script>");
                }
                elseif($result=="not-connected"){
                    echo("
                <script>
                    document.getElementById('alert-msg').style.visibility='visible';
                    document.getElementById('alert-msg').style.backgroundColor='#f11206';
                    document.getElementById('alert-text').innerText='Oooops!!! Sorry some error to connect to database please try again later.';
                </script>");
                }
                
            }elseif(!$alert){
                echo("
                <script>
                    document.getElementById('alert-msg').style.visibility='hidden';
                </script>");
            }
        ?>



        <form id="container" method="post" enctype="multipart/form-data">
            <div id="image-holder">
                
                <img src="#" id="image">
                <input type="file" name="choosefile" id="select_file" value="" onchange="readURL(this)">
                
            </div>
            <div id="title-input" class="text-input">
                <p id="heading-sec" class="secname" onclick="clickontextare('blog-title')">give a suitable title or
                    heading to your blog</p>
                <span style="height: 5px;"></span>
                <div id="second-con">
                    <textarea onkeyup="changeheight('blog-title')"
                    name="titleofblog" id="blog-title"></textarea>
                    <p id="word-count">0/30</p>
                </div>
            </div>
            
            <div id="blog-input" class="text-input">
                <p id="body-sec" class="secname" onclick="clickontextare('blog-body')">feel free to express yourself here....</p>
                <span style="height: 5px;"></span>
                <div id="third-con">
                    <textarea onkeyup="changeheight('blog-body')" style="width: 100%; height: 90px; resize: none;"
                    name="bodyofblog" id="blog-body"></textarea>
                    <p id="word-count1">0/6000</p>
                </div>
            </div>

            <div id="cat-tags">
                <select name="category" id="category" onchange="getselected(this)">
                    <option style="color: rgb(152, 148, 148)" value="select">Selet a category</option>
                    <option value="educational">Educational</option>
                    <option value="traveling">Traveling</option>
                    <option value="college-study">College Study</option>
                    <option value="science">Science</option>
                    <option value="scientific-excurtion">Scientific Excurtion</option>
                </select>
            </div>

            <div id="button-holder">
                <input type="submit" value="Save as Draft" name="draft" id="draft" class="button3">
                <span style="width: 15px;"></span>
                <input type="submit" value="Post" name="post" id="post" class="button3">
            </div>
            <script>
                let v = document.querySelectorAll("textarea");
                v.forEach(item => {
                    item.addEventListener("focus", function () {
                        item.parentElement.parentElement.style.borderColor = "white";
                        var pelm = document.getElementById(item.parentElement.parentElement.id);
                        var m = pelm.children[0];
                        var pelement = document.getElementById(m.id);
                        pelement.style.animation = "goupanimations 0.3s 0s linear";
                        pelement.style.position = "static";
                        pelement.style.zIndex = "5";
                        pelement.style.margin = "0px";
                        pelement.style.color = "white";
                        pelement.style.fontSize = "14px";
                        pelement.innerHTML = "*Heading/Title";
                        if(item.id=="blog-title"){
                            pelement.innerHTML = "*Heading/Title:";
                        }
                        if(item.id=="blog-body"){
                            pelement.innerHTML = "*About the topic:";
                        }
                        

                    });
                    item.addEventListener("blur", function () {
                        var pelm = document.getElementById(item.parentElement.parentElement.id);
                        var m = pelm.children[0];
                        var pelement = document.getElementById(m.id);
                        if(item.value.length==0){
                            item.parentElement.parentElement.style.borderColor = "rgb(245, 9, 9)";
                            item.placeholder= "this filled is mandatory!!!!";
                            pelement.style.color = "rgb(245, 9, 9)";
                        }
                        if(item.id=="blog-title"){
                            if(item.value.length<=40 && item.placeholder!="this filled is mandatory!!!!"){
                                item.parentElement.parentElement.style.borderColor = "rgb(16, 220, 16)";
                                pelement.style.color = "rgb(16, 220, 16)";
                            }else{
                                item.parentElement.parentElement.style.borderColor = "rgb(245, 9, 9)";
                                pelement.style.color = "rgb(245, 9, 9)";
                            }
                        }
                        if(item.id=="blog-body"){
                            if(item.value.length>=1500 && item.value.length<=6000){
                                item.parentElement.parentElement.style.borderColor = "rgb(16, 220, 16)";
                                pelement.style.color = "rgb(16, 220, 16)";
                            }else{
                                item.parentElement.parentElement.style.borderColor = "rgb(245, 9, 9)";
                                pelement.style.color = "rgb(245, 9, 9)";
                            }
                        }
                        

                    });
                });

            </script>

        </form>
    </main>
</body>

</html>