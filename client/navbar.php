<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="navbar.css">
    <title>Document</title>
</head>

<body>
    <div class="nav1">
        <div class="nav2">
            <div class="nav3">Easy Leaves</div>
            <nav class="nav4">
                <a href="index.php" class="hover:text-blue-500">Home</a>
                <a href="#about-us" class="hover:text-blue-500">About us</a>
                <a href="#contact" class="hover:text-blue-500">Contact us</a>
                <?php
                // session_start();
                if (isset($_SESSION['email'])) {
                    echo "<a href='../server/logout.php' class='hover:text-blue-500'>Logout</a>";
                } else {
                    echo "<a href='login.php' class='hover:text-blue-500'>Login</a>";
                    echo "<a href='signup.php' class='hover:text-blue-500'>Sign-up</a>";
                }
                ?>
            </nav>

        </div>
    </div>
</body>

</html>