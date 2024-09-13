

<!DOCTYPE html>
<html>
<?php include 'app/Views/layouts/header.php'?>


<div class="container" id="form-container" >
<div class="form-bg" >
    
<h3 class="sign-up-text">Create New Level</h3>
    <form action="/hifi_management/levels/store" method="post">
       <?php
       include "levelForm.php" ?>


             <div class="form-group py-3">
    <button class="form-control" id="enroll-click" type="submit">Save</button>
    </div>

    </form>
</div>







    <?php include 'app/Views/layouts/footer.php'?>
</div>