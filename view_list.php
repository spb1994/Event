<?php


$host='localhost';
$uid= 'root';
$pass= '';

$con = mysqli_connect($host, $uid, $pass);

if($con->connect_error)
{
    echo "connection could notbe establised"; die;
}

mysqli_select_db($con, 'event');


$query="select * from event_details";

$select=mysqli_query($con, $query);

if ($select->num_rows>0)
{
 while ($row=$select->fetch_assoc())
 {?>

 <table style="border:1px">
     <thead>
         <tr>
         <td>Title</td>
         <td>Dates</td>
         <td>Occurrence</td>
         <td>Actions</td>
         <tr>
     </thead>
     <tbody>
         <tr>
         <td><?php echo $row['title'];?></td>
         <td><?php echo $row['event_start_date']." to ".$row['event_start_date'];?></td>
         <td></td>
        </tr>
     </tbody>
 </table>

 <?php }
}?>

 ?>