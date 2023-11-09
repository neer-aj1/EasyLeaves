<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | RSB Digital</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <?php
    include("navbar.php");
    ?>
    <section class="min-h-screen flex bg-slate-800 bg-center bg-cover bg-blend-overlay bg-black/10 items-center justify-center" style="background-image: url('./images/bgimage.jpg');">
        <div class="bg-gray-100 flex md:w-1/2 h-1/2 w-2/3 rounded-2xl shadow-lg max-w-3xl md:p-5 p-2" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="50">
            <div class="xl:w-1/2 px-16">
                <h2 class="text-blue-900 font-bold md:text-2xl text-xl">Login</h2>
                <p class="text-slate-900 font-light md:text-sm text-xs mt-4">If you are already member, easily login !</p>
                <form action="../server/login.php" method="post" class="flex flex-col gap-4">
                    <div class="relative">
                    <input  autocomplete="off" type="email" name="email" id="email" placeholder="Email" class="p-2 mt-8 rounded-xl border w-full">
                    <input  autocomplete="off" type="password" name="password" id="password" placeholder="Password" class="p-2 mt-2 rounded-xl border w-full">
                    <button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2 mt-7" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                      </svg>
                    </button>
                </div>
                    <button type="submit" class="text-slate-900 bg-blue-900 text-white rounded-xl py-2 hover:text-slate-900 hover:bg-blue-300 mx-1 transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-blue-300 duration-300">Login</button>

                </form>
                <div class="md:mt-10 text-sm border-b py-4 mt-3">
                    <a href="#" class="hover:text-blue-800">Forgot your password?</a>
                </div>
                <div class="text-xs flex justify-between items-center mt-3">
                    <p>If you don't have an account </p>
                    <a href="signup.php"><button class="py-2 px-3 bg-white border rounded-xl hover:bg-blue-900 hover:text-white">Sign-up</button></a>
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
        body{
        overflow-x: hidden;
        }
    </style>
</body>
</html>