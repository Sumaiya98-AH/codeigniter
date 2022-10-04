<?php include_once('header.php');?>
	<div class="container">
        <h3>View Records</h3>
        <h6>Name: <?php echo $records->first_name;?><?php echo " ";?><?php echo $records->last_name;?></h6>
        <p>Position: <?php echo $records->position;?> </p>
		<p>Office: <?php echo $records->office;?> </p>
		<p>Age: <?php echo $records->age;?> </p>
		<p>Start date: <?php echo $records->start_date;?> </p>
        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <?php echo anchor('welcome/dashboard','Back',['class'=>'btn btn-default']) ;?>
            </div>
        </div>
    </div>
<?php include_once('footer.php');?>