<?php
  
header('Content-type:application/json');


mysql_connect('localhost','root','') or die(mysql_error());

mysql_select_db('d3js');

$select= mysql_query('SELECT * FROM `schroeter points table`');

$rows=array();

while($row=mysql_fetch_array($select))
{
  $rows[]=$row;
}

echo json_encode($rows);
?>