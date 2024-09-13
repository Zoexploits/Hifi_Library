<?php include 'app/Views/layouts/header.php'?>
    <?php  $baseUrl="hifi_management"   ?>
 
    

<div class="container">

<div class="table-responsive">

<table class="table">

<div class=" py-2  justify-content-around">
<h1 class="">Students List</h1>

<a class="btn btn-primary " href="/hifi_management/students/signup">Add New</a>
</div>
<thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Course</th>
        <th>levels</th>
        <th>Actions</th>
        
    </tr>
</thead>

<tbody>
    <?php
    foreach ($students as $student) {
    ?>

<tr>

<td><?php echo $student['id'];?></td>
<td><?php echo $student['name'];?></td>
<td><?php echo $student['email'];?></td>
<td><?php echo $student['age'];?></td>
<td><?php echo $student['course'];?></td>
<td><?php echo $student['level'];?></td>

<td class="d-flex gap-2">
<a class="btn btn-xs btn-primary" href="/hifi_management/students/edit?id=<?php echo $student['id'];?>">Edit</a>

<form id="myForm" action="/hifi_management/students/delete" method="post">
<input type="hidden" name="id" value="<?= $student['id']; ?>">
<input type="hidden" name="_method" value="delete">

<button onclick="conFirmDelete()" class="btn btn-xs btn-danger" type="button">Delete</button>
</form>

</td>
</tr>

<?php  }?>
    
    
</tbody>
</table>
</div>



</div>
<?php include 'app/Views/layouts/footer.php'?>

 