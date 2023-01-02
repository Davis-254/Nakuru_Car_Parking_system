<?php
    session_start();
    error_reporting(0);
    include('includes/dbconn.php');

    if (strlen($_SESSION['vpmsaid']==0)) {
    header('location:logout.php');
    } 
    else {

    if(isset($_POST['submit-in'])){
        $cid=$_GET['updateid'];
        // $remark=$_POST['remark'];
        // $status=$_POST['status'];
        $parkingcharge=$_POST['b_amount'];
    
        $query=mysqli_query($con, "UPDATE booking_details set b_amount='$parkingcharge' where bid='$cid'");
        if ($query) {
            $msg="All remarks has been updated.";
        } else {
            $msg="Something Went Wrong";
        }

    } 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NCPS</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datatable.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link rel="icon" href="../images/favicon.png">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>
<body>
        <?php include 'includes/navigation.php' ?>
	
		<?php
		$page="out-vehicle";
		include 'includes/sidebar.php'
		?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="dashboard.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Vehicle Category Management</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<!-- <h1 class="page-header">Vehicle Management</h1> -->
			</div>
		</div><!--/.row-->
		
		<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Outgoing Vehicle Details</div>
						<div class="panel-body">

                        <?php if($msg)
						echo "<div class='alert bg-info ' role='alert'>
						<em class='fa fa-lg fa-warning'>&nbsp;</em> 
						$msg
						<a href='#' class='pull-right'>
						<em class='fa fa-lg fa-close'>
						</em></a></div>" ?> 
                        
                        <div class="col-md-12">


							<form method="POST">


                            <?php
                            $cid=$_GET['updateid'];
                            $ret=mysqli_query($con,"SELECT * from booking_details where bid='$cid'");
                            $cnt=1;
                            while ($row=mysqli_fetch_array($ret)) {

                            ?> 

								<div class="form-group">
									<label>Vehicle Registration Number</label>
									<input type="text" class="form-control" value="<?php  echo $row['no_plate'];?>" id="catename" name="catename" readonly>
								</div>


								<div class="form-group">
									<label>vehicle Brand</label>
									<input type="text" class="form-control" value="<?php  echo $row['car_brand'];?>" id="sdesc" name="sdesc" readonly>
								</div>


                                <div class="form-group">
									<label>Vehicle Model</label>
									<input type="text" class="form-control" value="<?php  echo $row['car_model'];?>" id="sdesc" name="sdesc" readonly>
								</div>


                                <div class="form-group">
									<label>Parking Slot</label>
									<input type="text" class="form-control" value="<?php  echo $row['slot_no'];?>" id="sdesc" name="sdesc" readonly>
								</div>


                                <div class="form-group">
									<label>Vehicle IN Time</label>
									<input type="text" class="form-control" value="<?php  echo $row['time_in'];?>" id="sdesc" name="sdesc" readonly>
								</div>


                                <div class="form-group">
									<label>Vehicle OUT Time</label>
									<input type="text" class="form-control" value="<?php  echo $row['time_out'];?>" id="sdesc" name="sdesc" readonly>
								</div>


                                <div class="form-group">
									<label>Vehicle Owned By</label>
									<input type="text" class="form-control" value="<?php  echo $row['fname'];?>" id="sdesc" name="sdesc" readonly>
								</div>


                                <div class="form-group">
									<label>Vehicle Owner Contact</label>
									<input type="text" class="form-control" value="<?php  echo $row['contact'];?>" id="sdesc" name="sdesc" readonly>
								</div>


                                <div class="form-group">
									<label>Current Status</label>
									<input type="text" class="form-control" value="<?php if($row['slot_status']=="0"){ echo "Vehicle In"; } if($row['slot_status']=="1"){echo "Vehicle out";} ;?>" id="sdesc" name="sdesc" readonly>
								</div>


                                <div class="form-group">
									<label>Total Charge</label>
									<input type="text" class="form-control" value="$ <?php  echo $row['b_amount'];?>" id="parkingcharge" name="parkingcharge">
								</div>


                                <!-- <div class="form-group">
									<label>Status</label>
									<input type="text" name="status" value="<?php echo $row['Status']; ?>" class="form-control" readonly>
								</div>
 -->

                                <!-- <div class="form-group">
									<label>Remarks</label>
									<input type="text" class="form-control" value="<?php  echo $row['Remark'];?>" id="remark" name="remark" readonly>
								</div> -->
								
                        <?php } ?>

									
                                    
								</div> <!--  col-md-12 ends -->
								<button type="submit" class="btn btn-success" name="submit-in">Submit For Out-Going</button>
									<button type="reset" class="btn btn-default">Reset</button>


						</div>
					</div>
				</div>
				
				
				
</div><!--/.row-->
		
		
		

        <?php include 'includes/footer.php'?>
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
};
	</script>

    <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
		
</body>
</html>
<?php }  ?>