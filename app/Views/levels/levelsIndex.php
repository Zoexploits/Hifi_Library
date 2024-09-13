<?php include 'app/Views/layouts/header.php'?>
    <?php  $baseUrl="hifi_management"   ?>
   



    
    
<div class="container">

<div class="table-responsive">

<table class="table">

<div class="px-4 py-2">
<h1 class="d-flex align-items-center justify-content-center">Students Levels</h1>
<a class="btn btn-primary float-end" id="add-level-btn" href="/hifi_management/levels/add">Add Level</a>
</div>
<thead>
    <tr>
        
        <th>ID</th>
        <th>Level</th>
        <th>Actions</th>
    </tr>
</thead>

<tbody>
    <?php
    foreach ($levels as $level) {
    ?>

<tr>

<td><?php echo $level['id'];?></td>
<td><?php echo $level['level'];?></td>

<td class="d-flex gap-2">
<a class="btn btn-xs btn-primary" href="/hifi_management/levels/edit?id=<?php echo $level['id'];?>">Edit</a>
<form action="/hifi_management/levels/delete" method="post">
<input type="hidden" name="id" value="<?= $level['id']; ?>">
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

 