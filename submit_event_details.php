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



$title=$_POST['title'];

$start_date=$_POST['start_date'];
$start_day_array=explode("/",$start_date);
$start_date=$start_day_array[2]."-".$start_day_array[1]."-".$start_day_array[0];

$end_date=$_POST['end_date'];
$end_day_array=explode('/',$end_date);
$end_date=$end_day_array[2]."-".$end_day_array[1]."-".$end_day_array[0];


if(isset($_REQUEST['repeat']))
{
    $repeat=$_REQUEST['repeat'];
}
$repeat_every=$_POST['repeat_every'];
$repeat_d_w_m_y=$_POST['repeat_d_w_m_y'];
if(isset($_REQUEST['repeat_on']))
{
    $repeat_on=$_REQUEST['repeat_on'];
}

$repeat_time=$_POST['repeat_time'];
$repeat_week_day=$_POST['repeat_week_day'];
$repeat_months=$_POST['repeat_months'];

$ip=$_SERVER['REMOTE_ADDR'];


if(isset($_REQUEST['repeat']))
{
    $query="insert into event_details(event_title, event_start_date, event_end_date, repeat,repeat_every,
repeat_day_month_year, details_entered_on, details_entered_from) 
values('$title','$start_date','$end_date','$repeat','$repeat_every',
'$repeat_d_w_m_y',now(), '$ip')";
}

elseif (isset($_REQUEST['repeat_on']))
{
    $query="insert into event_details(event_title, event_start_date, event_end_date, repeat_on_the, 
    day_number, day_name, months, details_entered_on, details_entered_from) 
    values('$title','$start_date','$end_date','$repeat_on','$repeat_time','$repeat_week_day','$repeat_months',now(), '$ip')";
}


echo $query; die;



if($con->query($query) === TRUE)
{
    echo "data inserted successfully";
    
}
else
{
    echo "data insetion failed!";
}
 ?>