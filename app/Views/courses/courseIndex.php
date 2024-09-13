<?php include 'app/Views/layouts/header.php'?>
    <?php  $baseUrl="hifi_management"   ?>
   
    



<div class="container">
<h1 class="d-flex align-items-center justify-content-center">Course List</h1>

<div class="table-responsive">
<table class="table">
<div class="px-4 py-2">
<a class="btn btn-primary float-end" id="add-level-btn" href="/hifi_management/courses/create">Add New</a>
</div>
<thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Unit</th>
        <th>Actions</th>
    </tr>
</thead>

<tbody>
    <?php
    foreach ($courses as $course) {
    ?>

<tr>

<td><?php echo $course['id'];?></td>
<td><?php echo $course['name'];?></td>
<td><?php echo $course['unit'];?></td>

<td class="d-flex gap-2">
<a class="btn btn-xs btn-primary" href="/hifi_management/courses/edit?id=<?php echo $course['id'];?>">Edit</a>
<form action="/hifi_management/courses/delete" method="post">
<input type="hidden" name="id" value="<?= $course['id']; ?>">
<input type="hidden" name="_method" value="delete">
<button class="btn btn-xs btn-danger" type="submit">Delete</button>
</form>

</td>
</tr>

<?php  }?>
    
    
</tbody>
</table>
</div>



</div>
<?php include 'app/Views/layouts/footer.php'?>

 