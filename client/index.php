<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Welcome to Easy Leaves</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <section class="section1">
        <!-- Navbar -->
        <!-- <div class="nav1">
            <div class="nav2">
                <div class="nav3">Easy Leaves</div>
                <nav class="nav4">
                    <a href="index.html" class="hover:text-blue-500">Our Team</a>
                    <a href="#about-us" class="hover:text-blue-500">About us</a>
                    <a href="#contact" class="hover:text-blue-500">Contact us</a>
                    <?php 
                    session_start();
                    if(isset($_SESSION['email'])){
                        echo "<a href='../server/logout.php' class='hover:text-blue-500'>Logout</a>";
                    }
                    else{
                        echo "<a href='login.php' class='hover:text-blue-500'>Login</a>";
                        echo "<a href='signup.php' class='hover:text-blue-500'>Sign-up</a>";
                    }
                    ?>
                </nav>

            </div>
        </div> -->
        <?php
        include "navbar.php";
        ?>

        <div class="hs1">
            <!-- Hero section content-->
            <div class="hs2" data-aos="zoom-in" data-aos-duration="1000">
                <h1 class="hs3">Welcome to Easy Leaves</h1>
                <p class="hs4">Simplify leave requests with ease</p>
                <div class="hs5">
                    <a href="leaveForm.php"><button
                            class="bg-white text-slate-900 px-3 py-2 rounded-2xl hover:text-white hover:bg-blue-900 ">Apply
                            For Leave</button></a>
                    <!-- <a href="signup.html"><button class="bg-white text-slate-900 px-3 py-2 rounded-2xl hover:text-slate-900 hover:bg-blue-300 mx-2 transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300">Sign-up</button></a> -->
                </div>
            </div>
        </div>

    </section>

    <section class="section-about" id="about-us">

        <div class="section2">
            <div class="section2div" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="50">
                <img src="./images/image.jpg" alt="" class="imgclass">
            </div>
            <div class="divclass" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="50">
                <h1 class="headingclass">Easy Leaves - Simplify leave requests with ease </h1>
                <p class="paragraphtext">
                    Easy Leaves is a cutting-edge application designed to revolutionize the process of generating
                    leave forms for modern hostels. Our application offers a seamless and efficient solution for hostel
                    administrators to manage leave requests with ease.
                </p>
                <p class="paragraphtext">
                    With Easy Leaves, hostel staff can bid farewell to manual paperwork and time-consuming
                    processes. The application simplifies leave form generation by automating the entire process,
                    enabling administrators to create professional and standardized leave forms in just a few clicks.
                </p>
                <p class="paragraphtext">
                    Easy Leaves is the ultimate solution for modern hostels seeking to optimize their leave
                    management process. Say goodbye to manual paperwork, and embrace the convenience and efficiency of
                    Easy Leaves for effortless leave form generation. The PDF generation functionality in Form Tech
                    Hostel enhances the professionalism, consistency, and convenience of generating leave forms. It
                    eliminates the need for manual formatting, ensures accurate data representation, and simplifies the
                    process of sharing and archiving leave forms, all within a secure and accessible digital
                    environment.
                </p>
            </div>
        </div>


    </section>

    <footer class="h-auto" id="contact">

        <div class="footerclass">
            <div class="footerdiv">
                <div class="text-center">
                    <div class="pb-1">
                        © Copyright <strong><span>Easy Leaves</span></strong>. All rights reserved
                    </div>
                    <div>
                        Designed by <a href="#" class="credits">Mahek Rohit Gor and Neeraj Kumar</a>
                    </div>
                </div>
                <div class="fd">
                    <a href="#" class="socials"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="socials"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="socials"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="socials"><i class="fa fa-skype"></i></a>
                    <a href="#" class="socials"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>

    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <style>
        body {
            overflow-x: hidden;
        }
    </style>
</body>

</html>