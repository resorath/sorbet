<div class="container centre">
	<h2 class="topper">Sauces</h2>

	<?php 
		$attribs = array('class' => 'horizontal-form');
		echo form_open('taste/dispense', $attribs); 
	?>

	<div class="form-group">
    <select class="form-control" name="trim" id="trim">
    </select>
  </div>

  <div class="form-group">
    <select class="form-control" name="style" id="style">
      <option>WAIT</option>
    </select>
  </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Dispense</button>
  	</div>
  </div>

</div>