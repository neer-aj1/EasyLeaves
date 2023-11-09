<?php
session_start(); 
if (isset($_SESSION['email'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apply For Leave | FormTechHostel</title>
  <link rel="stylesheet" href="leaveForm.css">
</head>

<body>
  <?php
  include'navbar.php';
  ?>
  <!-- <section class="heading">
    <div>
      <p class="heading1">FormTechHostel</p>
    </div>
  </section> -->

  <section class="">
    <div class="m-10 ">
      <h2 class="apply">Apply for Leave</h2>
    </div>
    <div class="formclass">
      <form class="formclass1" action="../server/leave.php" method="POST">
        <div class="formclass2">
          <div class="formclass3">
            <label class="formclass4" for="grid-first-name">
              First Name
            </label>
            <input name="fname" class="formclass5 focus:outline-none focus:bg-white" id="grid-first-name" type="text"
              placeholder="Jane" autocomplete="off">
            <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
          </div>
          <div class="formclass6">
            <label class="formclass7" for="grid-last-name">
              Last Name
            </label>
            <input name="lname" class="formclass5"  autocomplete="off" id="grid-last-name" type="text" placeholder="Doe">
          </div>
        </div>
        <div class="reason">
          <div class="reasonclass">
            <label class="formclass7" for="grid-password">
              Reason
            </label>
            <input name="reason" class="formclass5"  autocomplete="off" id="grid-password" type="Text" placeholder="Enter your Reason">
            <p class="rc1">Give your reason</p>
          </div>
        </div>
        <div class="reason">
          <div class="details">
            <label class="dr" for="grid-city">
              Roll no.
            </label>
            <input class="formclass5" id="grid-city"  autocomplete="off" type="text" name="rollnumber" placeholder="Roll no.">
          </div>
          <div class="details">
            <label class="dr" for="grid-state">
              Leave Date
            </label>
            <div class="relative">
              <input type="date" name="fromdate"  autocomplete="off" class="formclass5">
            </div>
          </div>
          <div class="details">
            <label class="dr" for="grid-state">
              Return Date
            </label>
            <div class="relative">
              <input type="date" name="todate"  autocomplete="off" class="formclass5">
            </div>
          </div>
          <button type="submit" class="submit" name="submit" id="button" style="background-color: rgb(226 232 240); color: rgb(15 23 42); padding: 1.25rem 20px;  border-radius: 25px; margin-top: 20px">Submit your application</button>
        </div>
      </form>
    </div>
  </section>
</body>
</html>

<?php 
}else{
  header("Location: login.php");
  exit();
}
?>