<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/public/css/welcome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="logo_container">
            <div class="logo"></div>
            <h1>Minh Huan</h1>
        </div>
        <div class="navbar">
            <ul class="navbar_list">
                <li class="navbar_item"><a href="#aboutme">About Me</a></li>
                <li class="navbar_item"><a href="#">Resume</a></li>
                <li class="navbar_item"><a href="#portfoli">Portfoli</a></li>
                <li class="navbar_item"><a href="#blog">Blog</a></li>
                <li class="navbar_item"><a href="">Contact</a></li>
                <li class="navbar_item"><a href="">Extra</a></li>
                <li class="navbar_item"><a href="">Get it Now</a></li>
            </ul>
        </div>
    </header>

    <div class="banner" id="aboutme">
        <div class="content">
            <h2>I'M a <span class="animate"></span></h2>
            <div class="break">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>

            <p class="about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
            <div class="social_network">
                <ul class="social_network_list">
                    <li><i class="fab fa-facebook"></i></li>
                    <li><i class="fab fa-facebook-messenger"></i></li>
                    <li><i class="fab fa-instagram"></i></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Portfoli -->
    <div id="portfoli">
        <div class="title">
            <div class="square_top">Portfoli</div>
            <div class="square_bottom"></div>
            <div class="line"></div>
            <ul class="time_line">
               <li class="time">
                    <div class="time-item">
                        <span class="years">2018</span><span class="month">/2</span>
                    </div>
                    
               </li>
               <div class="text">
                    <div class="text-container">
                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth</p>
                    </div>
                    <div class="text-container">
                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising</p>
                    </div>
                    <div class="text-container">
                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth</p>
                    </div>
                    <div class="text-container">
                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born</p>
                    </div>
                    
                </div>
               <li class="time">
                   <div class="time-item">
                        <span class="years">2019</span><span class="month">/9</span>
                   </div>
               </li>
               <li class="time">
                   <div class="time-item">
                        <span class="years">2020</span><span class="month">/8</span>
                   </div>
               </li>
               <li class="time">
                   <div class="time-item">
                        <span class="years">2021</span><span class="month">/1</span>
                   </div>
               </li>
            </ul>
        </div>
    </div>


    <!-- Blog -->
    <div id="blog">
        <div id="particles-js">
            

        </div>

        <div class="blog-page">
            <div class="blog-text">
                    <div class=img></div>
                    <div class="blog-text-right">
                        <h2 class="title_blog">Cach cai dat va su dung youtube Vanced</h2>
                        <div class="description">
                            <p>Ban qua phien voi nhung quang cao lien tuc xuat hien moi vai phut xem youtube, voi you tube vanced ban khong con phai doi cho quang cao trong met moi.</p>
                        </div>
                    </div>
                </div>
                <div class="blog-text">
                    <div class=img></div>
                    <div class="blog-text-right">
                        <h2 class="title_blog">Cach cai dat va su dung youtube Vanced</h2>
                        <div class="description">
                            <p>Ban qua phien voi nhung quang cao lien tuc xuat hien moi vai phut xem youtube, voi you tube vanced ban khong con phai doi cho quang cao trong met moi.</p>
                        </div>
                    </div>
                </div>
                <div class="blog-text">
                    <div class=img></div>
                    <div class="blog-text-right">
                        <h2 class="title_blog">Cach cai dat va su dung youtube Vanced</h2>
                        <div class="description">
                            <p>Ban qua phien voi nhung quang cao lien tuc xuat hien moi vai phut xem youtube, voi you tube vanced ban khong con phai doi cho quang cao trong met moi.</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>






    <script src="particles.js"></script>
    <script src="app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="typer.min.js"></script>
    <script>
        $(".animate").typer({
		  strings: [
		    "FrontEnd Developer",
		    "Designer",
            "Photograper",
            "Joker"
		  ],
		  typeSpeed: 60,
		  backspaceSpeed: 50,
		  loop: true
		});
    </script>
</body>
</html>


<?php

    
?>