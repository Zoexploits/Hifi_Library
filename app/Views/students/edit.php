<!DOCTYPE html>
<html>
<?php include 'app/Views/layouts/header.php'?>


<div class="container" id="form-container" >
<div class="form-bg" >
<h3 class="sign-up-text">Update Student</h3>
    <form action="/hifi_management/students/update" method="post">
    <input type="hidden" name="_method" value="put">

       <?php
       include "form.php"
       ?>

<div class="form-group py-3">

    <button class="form-control" id="enroll-click" type="submit">Save</button>
    </div>
</form>
    </form>
    </div>





    <?php include 'app/Views/layouts/footer.php'?>
    
</div>
