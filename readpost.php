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

    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Borel&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style5.css">
    <link rel="shortcut icon" href="images/finallogo.ico" type="image/x-icon">
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
        <div id="left-part">
            <div id="post-container">
                <div id="poster-details">
                    <img src="images\avatars\avatar7.png" alt="" id="poster-pro-img">
                    <div id="name-time">
                        <p id="profile-name">Souvik Gupta</p>
                        <p id="post-time">yesterday at 4:00 pm</p>
                    </div>
                    <p id="do-follow">Follow</p>
                    <span id="span1"></span>
                    <p id="views-count">118 views</p>
                </div>
                <div id="post">
                    <p id="post-title">This is the title of the blog</p>
                    <div id="remaining">

                        <p id="half-blog-body" class="post-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, sit. Consequatur sed aliquid at. Esse, minima quas corporis reiciendis soluta, provident odit beatae neque vitae commodi necessitatibus assumenda tenetur itaque nesciunt ut libero. Fuga quidem quia deleniti, cum veniam consectetur nostrum repellat deserunt labore, provident nulla officia sit inventore. Eligendi et, dicta laboriosam modi tempore enim velit autem fugit pariatur voluptatibus expedita odit architecto assumenda perferendis nihil. Corrupti officiis veniam debitis facilis autem! Enim sunt distinctio fugit, dolorem placeat nam non minima qui explicabo quisquam corporis excepturi laboriosam ab, odio est, modi ducimus voluptatum. In ratione ipsum dolorum quasi labore necessitatibus nam excepturi eos possimus facilis unde dolorem doloribus, iste tempore inventore dolores. Possimus, voluptatem voluptas? Rem, quas sunt? Vel itaque molestiae minus ducimus numquam repellendus sequi, non similique voluptatum et nobis reiciendis cumque! Tempore hic beatae perferendis, ea labore suscipit recusandae laboriosam unde tempora perspiciatis error molestiae. Amet veniam eum earum omnis quaerat sequi quos, tenetur molestiae consequuntur molestias blanditiis ipsum eius laudantium dolores, iure similique minus ut, recusandae facilis dolorem ex porro officiis deleniti dolore! Maiores maxime incidunt dolorum. Est accusantium nihil nesciunt possimus consequuntur laudantium unde enim facere similique rerum sequi aliquid odio qui beatae, atque ullam repellat sit quaerat tempora perspiciatis deserunt distinctio quos. Sequi, dignissimos? Deserunt similique distinctio repellat et aliquid aperiam velit dolorem, itaque totam vel laborum placeat quo, sed fugiat necessitatibus. Laboriosam dignissimos nesciunt dolorem a illo quos, repellendus quia numquam odio perspiciatis quasi laborum quae fugit earum alias. Excepturi dolore quaerat sunt nobis neque asperiores similique nisi. Vero debitis atque magni. Ipsa doloremque modi quo ab dolorum repellendus recusandae quae laborum, expedita inventore qui vitae. Maiores est aliquid, repellendus id laboriosam iusto asperiores numquam consequatur assumenda quas totam ipsum beatae optio quia enim odit quis! Doloribus ipsam rem adipisci in expedita aliquam, a perspiciatis! Nobis quo, exercitationem, commodi fugiat quaerat, aut esse totam molestias consequuntur hic quia eius odit? Consequatur, expedita tempore perspiciatis fugiat delectus cupiditate eveniet temporibus quia officia voluptate exercitationem id amet, mollitia ad beatae hic? Tempore, nesciunt debitis reiciendis minus iusto asperiores tenetur, sunt dolorem mollitia magnam dignissimos optio sed aut error tempora iure nemo? Pariatur repudiandae voluptatibus delectus.</p>
                        <img src="images\rainincity_bg.jpg" alt="" id="post-img">
                        <p id="second-half-blog-body" class="post-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab modi maiores, iure reprehenderit voluptatibus eius nemo? Quos, voluptatibus praesentium nobis illo consequatur deleniti pariatur ea. Quis, at. Sapiente rem numquam necessitatibus aperiam iure suscipit! Accusantium soluta sit facilis esse distinctio dolore impedit laudantium inventore id dolor magnam, ullam totam error sunt blanditiis iure quod hic iusto saepe amet veritatis repellat quo explicabo! Accusamus nemo, dignissimos ut iusto est, ea iure sunt repellendus minima sapiente nobis veritatis repudiandae voluptatem non, illo aut maxime fuga numquam vero earum a. Neque, quaerat distinctio facilis officiis pariatur cum, at velit ab hic perferendis iure magnam commodi. Harum cumque illo vitae, quis architecto nam delectus autem asperiores odio eos molestias amet aliquid eaque labore id iure repellendus iste incidunt. Quas est et recusandae saepe non tempore pariatur consequatur, animi at ab veniam eligendi, sit perferendis quis? Iure, cumque vero autem assumenda corrupti nisi doloribus. Totam aperiam aspernatur ut necessitatibus id vero, ducimus adipisci labore voluptate natus officia, odit ipsam vitae? Delectus consectetur minus incidunt quibusdam? Ab vero nam minus amet natus distinctio eveniet quasi libero consequuntur recusandae! Iusto repellendus quasi minus molestiae iure, error, atque sint qui reprehenderit fuga provident voluptatibus rem earum velit delectus, cumque quibusdam distinctio voluptates vel officia voluptatum. Aliquam nihil veniam quis cumque, consequatur animi. Error harum totam delectus rerum! Quisquam suscipit explicabo corrupti, ratione dolorem aspernatur quod qui recusandae provident numquam harum fuga inventore maiores debitis facere autem ut sapiente esse maxime magnam, dolore soluta eligendi sequi. Exercitationem delectus molestias pariatur quia, itaque amet, quas excepturi, esse id suscipit perferendis aspernatur. Eius ullam pariatur explicabo! Nisi eos atque aliquam amet voluptas veritatis expedita? Quasi dolorem ullam nostrum at architecto fugiat? Maxime nostrum dolor repellendus dolore quia unde qui, quas maiores rerum aliquam temporibus illum consectetur accusantium ducimus quae officiis. Fugiat saepe iusto pariatur reiciendis facilis, expedita veritatis nisi, nesciunt porro illo, vel sit dolor consectetur! Amet cumque, dignissimos vitae voluptate, praesentium nesciunt sed minus est pariatur a dolorum alias impedit esse! Vel cupiditate voluptatem magnam fugit et harum id aliquam animi, cum asperiores quo eos sed. Culpa delectus fugiat sequi, molestiae laboriosam repellendus atque quos dolorum modi. Voluptatem sit molestias iure eum in ratione rem autem, debitis reiciendis qui laborum veritatis nostrum aliquam quasi totam fugit rerum doloribus, cumque assumenda aspernatur! Minus debitis error assumenda voluptatibus sapiente voluptate mollitia, omnis fugit ad reprehenderit nihil explicabo sunt nemo laudantium dicta tenetur suscipit quasi architecto quae aliquid enim ipsam corporis illum. Quo corporis a quibusdam odio deserunt provident tenetur consectetur voluptatum, iusto rem alias? Recusandae corporis quisquam, eligendi odit ipsam veritatis, numquam distinctio, doloremque totam hic assumenda iste sint quos debitis nisi non asperiores voluptatem. Voluptas reiciendis placeat suscipit vero dicta impedit. Numquam obcaecati molestiae ratione et ea doloribus repellat dolor incidunt quas tenetur labore amet consectetur dolorum molestias libero id eos accusantium ad tempore quis, velit saepe distinctio minima maxime? Quos, quis at atque ipsum temporibus, tempora officia fugit iste sapiente similique obcaecati debitis, dolorem modi. Voluptas, illum eligendi! Ducimus cum harum placeat voluptatibus nam veritatis aperiam in doloremque a assumenda repudiandae voluptates atque possimus voluptatem libero consequatur dolores impedit praesentium ad aliquam id delectus, corrupti illum? Autem optio rem accusamus, excepturi officia earum animi perspiciatis. Dolores vel nisi architecto iure a aspernatur incidunt omnis atque. Rem iusto quam culpa deserunt magnam ipsam fuga consequatur quia, labore voluptatem, a adipisci. Vero accusamus iste, quae voluptates eum facere molestiae libero aperiam autem sint, aut animi at asperiores. Dolorem aspernatur adipisci consequuntur a enim aperiam neque aliquam vel. Facilis error saepe officia voluptatibus numquam iusto fugiat iure nobis. Eaque, voluptates incidunt perspiciatis enim dolorem libero voluptas rerum porro odit tempore dicta et voluptatum sunt aliquid quibusdam in est ipsum. Repellendus, nesciunt. Eius praesentium cum quo assumenda eum ut reiciendis quos provident voluptate, cupiditate beatae itaque. Ipsam, dolores, repudiandae placeat molestias nemo dicta eos ex sapiente exercitationem sunt modi quae nisi ipsa est eveniet voluptate quas. At quos sapiente vel veniam voluptates nihil, beatae ratione alias ducimus velit provident minima aliquid labore id? Nisi, molestias vero rem animi consequuntur quos accusamus harum dolore rerum laborum itaque quae dolor similique vitae aliquid. Eius maxime saepe deleniti, repellendus sapiente enim et, voluptate nisi deserunt qui odio temporibus porro accusantium modi excepturi voluptatibus. Quod a repudiandae accusamus nisi placeat temporibus eveniet, eligendi ab saepe sed quasi laboriosam.</p>

                    </div>
                </div>
                <form method="post">
                    <input type="hidden" name="selectedpostid" id="selectedpostid">
                    <input type="submit" value="s" name="sub" id="sub" style="border: none; outline: none; background-color: transparent; color: transparent;">
                </form>
            </div>
        </div>

        <script>
            var id= sessionStorage.getItem('selected_post_id');
            console.log(id);
            if(id!=null){
                document.getElementById('selectedpostid').value= id;
                sessionStorage.removeItem('selected_post_id');
                console.log("clicked");
                window.setTimeout(function(){
                    document.getElementById('sub').click();
                }, 2000);

            }else{
                console.log("not clicked");
            }
            
            
        </script>

        <?php 

            if(isset($_POST['sub'])){
                include 'connection.php';

                $selectedpostid= $_POST['selectedpostid'];

                
                $query0="SELECT * FROM `user-post`";
                $retval = mysqli_query($connect, $query0);
                while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {

                    if($selectedpostid==$row['postid']){
                            
                        $title= $row['title'];
                        $body= substr($row['body'], 0, 500);
                        $image= $row['imagelocation'];
                        $length= strlen($row['body']);
                        $body1= substr($row['body'], 500, $length);
                        $time= $row['date'];

                        $str11= "<script>
                        document.getElementById('post-title').innerText='".$title."';
                        document.getElementById('post-time').innerText='".$time."';
                        document.getElementById('half-blog-body').innerText='".$body."';
                        document.getElementById('second-half-blog-body').innerText='".$body1."';
                        document.getElementById('post-img').src='".$image."';
                        </script>
                        ";
                        echo($str11);

                    }

                }

                $userid= substr($selectedpostid, 0, strpos($selectedpostid, "&"));

                include 'connection.php';

                $query= "SELECT `name`, `userid`, `avatar` FROM `user-login`";
                $response= mysqli_query($connect, $query);


                while($row = mysqli_fetch_array($response, MYSQLI_ASSOC)) {
                    if($row["userid"]==$userid){
                            
                        $avatar_url= $row["avatar"]."";
                        $profile_name= $row["name"]."";
                        $userid= $row["userid"]."";

                        
                        $str12= "<script>
                        document.getElementById('profile-name').innerText='".$profile_name."';
                        document.getElementById('poster-pro-img').src='".$avatar_url."';
                        </script>
                        ";
                        echo($str12);



                    }

                }
            }

            
        ?>




        <div id="right-part">
            <p id="heading">Related Blogs</p>
            <div id="related-container">
                <div class="related-post-container">
                    <img src="images\avatars\avatar9.png" alt="" class="related-profile-image">
                    <p class="related-title">this is the title of related topic</p>
                </div>
                <span class="span2"></span>
                <div class="related-post-container">
                </div>
                <span class="span2"></span>
                <div class="related-post-container">
                </div>
                <span class="span2"></span>
                <div class="related-post-container">
                </div>
                <span class="span2"></span>
                <div class="related-post-container">
                </div>
                <span class="span2"></span>
                <div class="related-post-container">
                </div>
                <span class="span2"></span>
            </div>

            
            

        </div>
    </main>

</body>
</html>