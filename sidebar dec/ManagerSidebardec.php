<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="widhth=device-width,
    initial-scale=1, shrink-to-fit=no">
    <title>Syntax Bank</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            user-select: none;
            box-sizing: border-box;
            font-family: Cambria, "Hoefler Text", "Liberation Serif", 'Times New Roman', Times, serif;
        }

        /* topbar syntax */
        .topbar {
            width: 100%;
            line-height: 90px;
            background: rgb(160, 132, 46);
            background: linear-gradient(180deg, rgba(160, 132, 46, 1) 0%, rgba(196, 173, 102, 1) 43%, rgba(236, 216, 155, 1) 100%);
            text-align: right;
            padding-right: 0px;
            padding-top: 30px;
            font-size: 72px;
            margin: auto;
            color: #F8F4DF;
            text-shadow: 1px 1px 2px rgba(73, 73, 73, 0.61);
            -webkit-box-shadow: 1px 5px 5px -3px rgba(101, 101, 101, 0.81);
            box-shadow: 1px 5px 5px -3px rgba(101, 101, 101, 0.81);
        }

        .btn {
            position: absolute;
            top: 15px;
            left: 45px;
            height: 45px;
            width: 45px;
            text-align: center;
            background: #c3af6f;
            border-radius: 3px;
            cursor: pointer;
            transition: left 0.4s ease;
        }

        .btn.click {
            left: 260px;
        }

        .btn span {
            color: white;
            font-size: 28px;
            line-height: 45px;
        }

        .btn.click span:before {
            content: '\f00d';
        }

        /* Side bar */
        .sidebar {
            position: fixed;
            width: 250px;
            height: 100%;
            left: -250px;
            transition: left 0.4s ease;
            z-index: 1;
        }

        .sidebar.show {
            left: 0px;
            top: 0;
            z-index: 1;
        }

        .sidebar .text {
            color: #c3af6f;
            font-size: 25px;
            font-weight: 600;
            line-height: 120px;
            text-align: center;
            background: white;
            letter-spacing: 1px;
        }

        nav ul {
            background: #c3af6f;
            height: 100%;
            width: 100%;
            list-style: none;
            z-index: 1;
        }

        nav ul li {
            line-height: 60px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        nav ul li:last-child {
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        nav ul li a {
            position: relative;
            color: white;
            text-decoration: none;
            font-size: 22px;
            text-align: center;
            font-weight: 500;
            display: block;
            width: 100%;
            border-left: 3px solid transparent;
            text-shadow: 1px 1px 1px #A7A7A7;
        }

        nav ul li.active a {
            color: white;
            background: #c3af6f;
            text-shadow: 1px 1px 1px #A7A7A7;
        }

        nav ul li a:hover {
            background: #988856;
            -webkit-box-shadow: 0px 1px 5px 1px rgba(195, 173, 110, 0.81);
            box-shadow: 0px 1px 5px 1px rgba(195, 173, 110, 0.81);
        }

        nav ul ul {
            position: static;
            display: none;
        }

        nav ul .review-show.show2 {
            display: block;
        }

        nav ul ul li {
            line-height: 42px;
            border-top: none;
        }

        nav ul ul li a {
            font-size: 17px;
            color: #e6e6e6;
            padding-left: 20px;
        }

        nav ul li.active ul li a {
            color: #c3af6f;
            background: white;
            border-left-color: transparent;
        }

        nav ul ul li a:hover {
            color: white !important;
            background: #d1c8a7 !important;
        }

        nav ul li a span {
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            font-size: 22px;
            transition: transform 0.4s;
        }

        nav ul li a span.rotate {
            transform: translateY(-50%) rotate(-180deg);
        }

        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #202020;
            z-index: -1;
            text-align: center;
        }

        .content .header {
            font-size: 45px;
            font-weight: 600;
        }

        .content p {
            font-size: 30px;
            font-weight: 500;
        }

        /* Hero Section */
        #hero {
            width: 100%;
            height: 100vh;
            background: url("manager.jpg") top center;
            background-size: cover;
            position: relative;
        }

        #hero:before {
            content: "";
            background: rgba(0, 0, 0, 0.65);
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
        }

        #hero .hero-container {
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 0 15px;
        }

        #hero h1 {
            margin: 0 0 10px 0;
            font-size: 64px;
            font-family: "Satisfy", serif;
            color: #fff;
            letter-spacing: 7px;
        }

        #hero h2 {
            color: #eee;
            margin-bottom: 50px;
            font-size: 13px;
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
            letter-spacing: 5px;
        }

        @media (min-width: 1024px) {
            #hero {
                background-attachment: fixed;
            }
        }

        @media (max-width: 575px) {
            #hero h1 {
                font-size: 40px;
            }

            #hero h2 {
                text-align: center;
                margin-bottom: 30px;
            }
        }

        @-webkit-keyframes up-down {
            0% {
                transform: translateY(5px);
            }

            100% {
                transform: translateY(-5px);
            }
        }

        @keyframes up-down {
            0% {
                transform: translateY(5px);
            }

            100% {
                transform: translateY(-5px);
            }
        }
    </style>
</head>

<body>
    <!-- Top Bar -->
    <div class="topbar">Syntax Bank.&nbsp;&nbsp; </div>
    <!-- End Top bar -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <h1>our vision,</h1>
            <h1>our best S E R V I C E</h1>
            <h2>Hello manager, Stay strong. believe in yourself</h2>
        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">
    
    <!-- Nav bar -->
    <div class="btn">
        <span class="fas fa-bars"></span>
    </div>
    <nav class="sidebar">
        <div class="text">
            <?php 
            echo $_SESSION["fName"]; echo "\t";
            echo $_SESSION["lName"]; 
            echo nl2br("\nStaffID:"); echo $_SESSION["StaffID"];
            echo nl2br("\nBranchID:"); echo $_SESSION["BranchID"];
          ?>        
        </div>
        <ul>
            <li>
                <a href="#" class="staff-btn">Staff List</a>
            </li>
            <li>
                <a href="#" class="branch-btn">Branch Data</a>
            </li>
            <li><a href="#" class="review-btn">Review
                    <span class="fas fa-caret-down third"></span>
                </a>
                <ul class="review-show">
                    <li><a href="#">Adding Review</a></li>
                    <li><a href="#">All Review</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <script>
        $('.btn').click(function () {
            $(this).toggleClass("click");
            $('.sidebar').toggleClass("show");
        });
        $('.review-btn').click(function () {
            $('nav ul .review-show').toggleClass("show2")
            $('nav ul .third').toggleClass("rotate");
        });
        $('nav ul li').click(function () {
            $(this).addClass("active").siblings().removeClass("active");
            $('#dropdown').hide();
        });
    </script>

</body>

</html>