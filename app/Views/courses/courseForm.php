
<input type="hidden" name="id" value="<?= $course['id']??''; ?>">
<div class="form-group">  
      
<input class="form-control" type="text" name="name" id="name" value="<?php echo $course['name']??''; ?>" placeholder="Course name" required><br>
</div>
<div class="form-group">
        <input class="form-control"  type="number" name="unit" id="unit" value="<?php echo $course['unit']??''; ?>" placeholder="Course Unit" required><br>
</div>







