<html>
<head>
<link rel="stylesheet" href="AVPCSS.css">
</head>
<body >

<div class="C1">
   <div class="C2">
   <input type="text" class="input" placeholder="Search here...">
   <input type="button" name="search" value="Search" class="closebtn">
</div>
</div>
<div class="C3" align="right"s>
<br>
<br>
  <nav>
  <button class="Vbutton"> <a href="AVPHTML.php">Home</a></button>
  <br>
  <button class="Vbutton1">  <a href="Characters.html">Character</a></button>
  </nav> class="Vbutton1"> Character</button>
</div>
<?php
$connection= mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'ramayan');
if(isset($_POST['search']))
{
  $id=$_POST['name']
  $query="SELECT * FROM characters where id='$name'";
  $query_run=mysqli_query($connection,$query);
   while($row= mysqli_fetch_array($query_run))
   {
     ?>
     <form action="" methode="POST"/>
     <input type="text" name="name" vale="<?php echo $row['name']?>"/>
     <input type="text" name="description" vale="<?php echo $row['description']?>"/>
   </form>
   <? php

   }
}
?>

</body>
</head>