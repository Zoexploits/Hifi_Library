

<?php include 'app/Views/layouts/header.php'?>



<form action="/hifi_management/auth/login" method="post">






<div class="d-flex justify-center">


<?php
if (isset($_SESSION['errorMessage'])) {
    $error = $_SESSION['errorMessage']; // Assign the session error message to $error
    echo "<span class='alert alert-danger'>$error</span>"; 
    unset($error);// Echo the error directly
}
?>
    <div class="form-group">
        <input type="email"  name="email" value="<?php echo $email??'' ?>" class="form-control" placeholder="Email">
    </div>

    <div class="form-group">
        <input type="text"  name="password" value="<?php echo $password??''?>" class="form-control" placeholder="Password">
    </div>

    <div class="form-group py-3">

<button type="submit" class="form-control" id="enroll-click"> Login</button>
</div>

</div>
</form>





<?php include 'app/Views/layouts/footer.php'?>

<?php session_unset(); ?>