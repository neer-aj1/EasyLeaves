<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up | RSB Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
<?php
    include("navbar.php");
    ?>
    <section
        class="min-h-screen flex bg-slate-800 bg-center bg-cover bg-blend-overlay bg-black/10 items-center justify-center"
        style="background-image: url('./images/bgimage.jpg');">
        <div class="bg-gray-100 flex md:w-1/2 h-1/2 w-2/3 rounded-2xl shadow-lg max-w-3xl p-5" data-aos="zoom-in"
            data-aos-duration="1000" data-aos-delay="50">
            <div class="xl:w-1/2 px-16">
                <h2 class="text-blue-900 font-bold text-2xl">Sign-up</h2>
                <p class="text-slate-900 font-light text-sm mt-4">Create your account</p>
                <form action="../server/register.php" method="post" class="flex flex-col gap-4">
                    <div class="relative">
                        <input type="text"  autocomplete="off" placeholder="First Name" name="fname" class="p-2 mt-8 rounded-xl border w-full">
                        <input type="text"  autocomplete="off" placeholder="Last Name" name="lname" class="p-2 mt-2 rounded-xl border w-full">
                        <input type="email" autocomplete="off"  name="email" placeholder="Email" class="p-2 mt-2 rounded-xl border w-full">
                        <input type="password"  autocomplete="off" name="password" id="password" placeholder="Create Password"
                            class="p-2 mt-2 rounded-xl border w-full">
                        <input type="password"  autocomplete="off" name="cpassword" id="password" placeholder="Confirm Password"
                            class="p-2 mt-2 rounded-xl border w-full">
                    </div>
                    <button type="submit" class="text-slate-900 bg-blue-900 text-white rounded-xl py-2 hover:text-slate-900 hover:bg-blue-300 mx-1 transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-blue-300 duration-300">Sign-up</button>
                </form>
                <div class="text-xs flex justify-between items-center mt-3">
                    <p>Already have an account ? </p>
                    <a href="login.php"><button
                            class="py-2 px-3 bg-white border rounded-xl hover:bg-blue-900 hover:text-white">Login</button></a>
                </div>
            </div>
            <div class="w-1/2  xl:block hidden">
                <img src="./images/bg2.jpg" class="px-2 py-2 rounded-2xl-1" alt="">
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <style>
        .rounded-2xl-1 {
            border-radius: 2rem;
        }

        body {
            overflow-x: hidden;
        }
    </style>
</body>

</html>