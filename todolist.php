<!DOCTYPE html>
<html ng-app="todo" ng-controller="todocontrol">

<head>
<link rel="stylesheet" href="todolist.css" type="text/css">
 <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
 <script src="todo1.js"></script>
<title> </title>
</head>

<body >

<h1 id="header"> To Do List </h1>


<table align="center" id="todo">
<tr>
<th> S.No </th>
<th> Task </th>
<th> Description </th>
</tr>
    <?php
        $a=1;
        $file = fopen("data.txt", "r") or die("Unable to open file!");
        $linecount=0;
        while (!feof($file)){   
            $data = fgets($file); 
            $list=explode(" ",$data,4);
            
            // print_r($list);

            $task=$list[1];
            $description=$list[3];
            $linecount++;
        
           
      ?>
      <tr>

      <td> <?=$linecount?> </td>
      <td> <?=$task ?></td>
      <td> <?=$description ?> </td>
      </tr>
    <?php
        }
        fclose($file);
    ?>


           
</table>




 <!-- <table align="center" id="todo">
// <tr>
// <th id="TaskNumber"> S.No </th>
// <th> Task </th>
// <th> Description </th>
// </tr>
// <div>
// <?php




?>
<!-- </div>
</body> -->
