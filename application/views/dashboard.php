<?php include_once('header.php');?>
	<div class="container">
		<?php 
            if($this->session->userdata('UserLoginSession'))
            {
                $udata = $this->session->userdata('UserLoginSession');
                echo '<h5 style="color:#00008B;text-align:center;">Welcome'.' '.$udata['username'].'</h5>';
            }
            else
            {
                redirect(base_url('welcome/login'));
            }
        ?>
		<h3>User Records</h3>
		
			<div class="text-right">
            <?php echo anchor('welcome','Logout',['class'=>'btn btn-primary']) ;?>
        	</div>
			<?php if($msg=$this->session->flashdata('msg')):?>
			<?php echo "<p>$msg</p>";?>
			<?php endif;?>
		<?php echo anchor('welcome/create', 'Add details', ['class'=>'btn btn-primary']); ?>
			</br></br>
		<table id="tbl" class="table table-striped table-hover ">
			<thead>
				<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Position</th>
				<th>Office</th>
				<th>Age</th>
				<th>Start Date</th>
				<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php if(count($records)):?>
					<?php foreach($records as $record):?>
					<tr>
						<td> <?php echo $record->id;?> </td>
						<td> <?php echo $record->first_name;?><?php echo " ";?><?php echo $record->last_name;?></td>
						<td> <?php echo $record->position;?> </td>
						<td> <?php echo $record->office;?> </td>
						<td> <?php echo $record->age;?> </td>
						<td> <?php echo $record->start_date;?> </td>
						<td>
						<?php echo anchor("welcome/view/{$record->id}", 'View', ['class'=>'label label-primary']); ?>
						<?php echo anchor("welcome/update/{$record->id}", 'Update', ['class'=>'label label-warning']); ?>
						<?php echo anchor("welcome/delete/{$record->id}", 'Delelte', ['class'=>'label label-danger']); ?>
						</td>
					</tr>
					<?php endforeach; ?>
				<?php else:?>
					<tr>
						<td>No Records Found!</td>
					</tr>
				<?php endif;?>
			</tbody>
		</table>
	</div>
<?php include_once('footer.php');?>