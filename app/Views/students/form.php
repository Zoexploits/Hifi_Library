

        
<input type="hidden" name="id" value="<?= $student['id']??''; ?>">
<div class="form-group">  
<!-- <label for="name">Name:</label>        -->
<input class="form-control" type="text" name="name" id="name"  placeholder="Full name" value="<?php echo $student['name']??''; ?>" required><br>
</div>
<div class="form-group">  
        <!-- <label for="age">Age:</label> -->
        <input class="form-control"  type="number" name="age" id="age"  placeholder="Age" value="<?php echo $student['age']??''; ?>" required><br>
</div>




<div class="form-group">  
        <!-- <label for="course">Course</label> -->
       <select name="course_id" class="form-control">
        <option  value="<?php echo$student['course_id']??''; ?>">
        <?php echo$student['course']??'Select a course'; ?>
        </option>
        <?php
        foreach ($courses as $key => $course) {
                # code...
                 ?>
<option value="<?php echo $course['id']?>">
<?php echo $course['name']?>
</option>

       <?php }
        ?>
       </select>
</div>

<div class="form-group">  
        <!-- <label for="level">Level</label> -->
       <select name="level_id" class="form-control">
        <option  value="<?php echo$student['level_id']??''; ?>" class="selectLevel">
        <?php echo$student['level']??'Select Level'; ?>
        </option>
        <?php
        foreach ($levels as $key => $level) {
                # code...
                 ?>
<option value="<?php echo $level['id']?>">
<?php echo $level['level']?>
</option>

       <?php }
        ?>
       </select>
</div>

<h2>Sign up</h2>

<div class="form-group">  
        <!-- <label for="email">Email:</label> -->
        <input class="form-control"  type="email" name="email" id="email" placeholder="Email" value="<?php echo$student['email']??''; ?>" required><br>
</div>

<div class="form-group">
        <input type="password"  name="password" value="<?php echo $password['password']??''?>" class="form-control" placeholder="Password">
    </div>



