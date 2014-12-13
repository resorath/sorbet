<div class="container centre">
	<div class="calcvalue">
		<div>
			<?=$_SESSION['year'] ?> 
			<?=$_SESSION['make'] ?> 
			<?=$_SESSION['model'] ?> 
			<?=$_SESSION['trim'] ?> 
			<?=urldecode($_SESSION['style']) ?> 
			<?=$_SESSION['km'] ?>km 

		<div>LT: <?=$lowtrade ?></div>
		<div>HT: <?=$hightrade ?></div>
	</div>
	<div class="vmrrender">
		<?=$vmrrender ?>
	</div>


</div>