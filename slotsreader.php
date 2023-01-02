<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 


include('db.php');
$number = 0;
$i=0;
try {$sql = " SELECT * FROM slots";
   $query = mysqli_query($conn, $sql) or die (mysqli_error($mysqli));

//echo "<table border =\"1\" style='border-collapse: collapse'>"; 
     while($row = mysqli_fetch_array($query))
     	
    {
    	
$slots[] = $row['slot_no'];
$pstatus[]=$row['status'];
$i++;
  }


  while($number <=$i)
{
//For loop to print 5 numbers in a line
for ( $j = 0;$j <= 4;$j++){

if (isset($slots[$number]) ){

	switch ($pstatus[$number]) {
		case '0':
		$hue='red';
		$st="disabled";
			# code...
			break;
		
		default:
			$hue='green';
			$st="enabled";
			break;
			
	}

	echo "<div class='$number'></div>";
	echo " <button style='background-color:$hue;'  class='fbutton$number' name='fbutton$number' id='button$number' 
	onclick=alt(window.location.href='booking2.php?slotno=$slots[$number]') $st >$slots[$number]</button>";

//echo " ".$age[$number];
//Increasing loop counter by 1
}
$number++;
}
echo " </br>";
}
return 0;


}
  catch(PDOException $e){

echo "No data". $e->getMessage();

  }





?>