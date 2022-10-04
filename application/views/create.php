<?php include_once('header.php');?>
    <div class="container">
      <?php echo form_open('welcome/save',['class'=>'form-horizontal']); ?>
        <fieldset>
            <legend>Details</legend>
            <div class="form-group">
            <label for="inputFirstName" class="col-md-2 control-label">First Name</label>
            <div class="col-md-5">
                <?php echo form_input(['name'=>'first_name','placeholder'=>'First Name','class'=>'form-control']);?>
            </div>
            <div class="col-md-5">
                <?php echo form_error('first_name','<div class="text-danger">','</div>') ;?>
            </div>
            </div>
            <div class="form-group">
            <label for="inputLastName" class="col-md-2 control-label">Last Name</label>
            <div class="col-md-5">
                <?php echo form_input(['name'=>'last_name','placeholder'=>'Last Name','class'=>'form-control']);?>
            </div>
            <div class="col-md-5">
                <?php echo form_error('last_name','<div class="text-danger">','</div>') ;?>
            </div>
            </div>
            <div class="form-group">
            <label for="inputPosition" class="col-md-2 control-label">Position</label>
            <div class="col-md-5">
                <?php echo form_input(['name'=>'position','placeholder'=>'Position','class'=>'form-control']);?>
            </div>
            <div class="col-md-5">
                <?php echo form_error('position','<div class="text-danger">','</div>') ;?>
            </div>
            </div>
            <div class="form-group">
            <label for="inputOffice" class="col-md-2 control-label">Office</label>
            <div class="col-md-5">
                <?php echo form_input(['name'=>'office','placeholder'=>'Office','class'=>'form-control']);?>
            </div>
            <div class="col-md-5">
                <?php echo form_error('office','<div class="text-danger">','</div>') ;?>
            </div>
            </div>
            <div class="form-group">
            <label for="inputAge" class="col-md-2 control-label">Age:</label>
            <div class="col-md-5">
                <?php echo form_input(['name'=>'age','placeholder'=>'Age','class'=>'form-control','type'=>'number']);?>
            </div>
            <div class="col-md-5">
                <?php echo form_error('age','<div class="text-danger">','</div>') ;?>
            </div>
            </div>
            <div class="form-group">
            <label for="inputStartdate" class="col-md-2 control-label">Start Date</label>
            <div class="col-md-5">
                <?php echo form_input(['name'=>'start_date','placeholder'=>'Start Date','class'=>'form-control','type'=>'date']);?>
            </div>
            <div class="col-md-5">
                <?php echo form_error('start_date','<div class="text-danger">','</div>') ;?>
            </div>
            </div>

            <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-default']);;?>
                <?php echo anchor('welcome/dashboard','Back',['class'=>'btn btn-default']) ;?>
            </div>
            </div>
        </fieldset>
      <?php echo form_close(); ?>
    </div>
<?php include_once('footer.php');?>