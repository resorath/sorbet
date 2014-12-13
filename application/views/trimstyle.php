<div class="container centre">
	<h2 class="topper">Sauces</h2>

	<?php 
		$attribs = array('class' => 'horizontal-form');
		echo form_open('taste/build', $attribs); 
	?>

	<div class="form-group">
      <select class="form-control" name="trim" id="trim">
        <option value="">one</option>
        <option value="">two</option>
      </select>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Dispense</button>
  	</div>
  </div>

</div>