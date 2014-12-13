<div class="container centre">
	<h2 class="topper">Toppings</h2>

	<?php 
		$attribs = array('class' => 'horizontal-form');
		echo form_open('taste/trimstyle', $attribs); 
	?>

	<div class="form-group">
      <input type="text" class="form-control" id="make" name="make" placeholder="Make (*)">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="model" name="model" placeholder="Model (*)">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="year" name="year" placeholder="Year (*)">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="year" name="year" placeholder="Retail $">
    </div>
    <hr>
    <div class="form-group">
      <input type="text" class="form-control" id="vin" name="vin" placeholder="VIN">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="uid" name="uid" placeholder="UID">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="vin" name="vin" placeholder="Location">
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Go To Sauces Station</button>
  	</div>
  </div>

</div>