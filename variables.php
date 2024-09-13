<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 

$students=[
['name'=>"Gift","score"=>270,"age"=>19,"gender"=>"male"],
['name'=>"Ayo","score"=>205,"age"=>20,"gender"=>"male"],
['name'=>"Shola","score"=>210,"age"=>21,"gender"=>"male"],
['name'=>"Godstime","score"=>280,"age"=>18,"gender"=>"male"],
['name'=>"Destiny","score"=>249,"age"=>18,"gender"=>"male"],
['name'=>"Peter","score"=>250,"age"=>17,"gender"=>"male"],
['name'=>"Victor","score"=>200,"age"=>28,"gender"=>"male"],

];
     

$qualifiedStudents=[];


for($i=0;$i<count($students);$i++){

    $score=$students[$i]['score'];
    $age=$students[$i]['age'];

      if(($score>=250)&& ($age>=18)){
        array_push($qualifiedStudents,$students[$i]);
      }

}

echo "the list of qualified studens :"."<br>";
echo "-----------------------------------------------------"."<br>";

for ($i=0; $i < count($qualifiedStudents); $i++) { 
    $index=$i+1;
 echo "$index . {$qualifiedStudents[$i]['name']} - {$qualifiedStudents[$i]['score']} - {$qualifiedStudents[$i]['age']} - {$qualifiedStudents[$i]['gender']}"."<br>";
 echo "-----------------------------------------------------"."<br>";
}




//hifi video



?>








</body>