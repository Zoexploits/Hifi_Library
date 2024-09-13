<!DOCTYPE html>
<html>
<?php include 'app/Views/layouts/header.php'?>
<div class="container" id="form-container" >
    
<div class="form-bg" >
<h3 class="sign-up-text">Enroll New Student</h3>
    <form action="/hifi_management/students/store" method="post">
       <?php
       include "form.php"

       ?>
    <div class="form-group py-3">

    <button class="form-control" id="enroll-click" type="submit">Enroll</button>
    </div>
    </form>
    </div>
    <?php include 'app/Views/layouts/footer.php'?>

</div>






