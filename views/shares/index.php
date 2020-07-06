<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Shareboard</title>
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
</head>
<body>
<div class="center">
	<div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	
    	<div class="panel-title">
  <label for="zanaet_1">Занает:</label>
  <select name = "zanaet_1" class="form-control" id="zanaet_1">
    <option value="#">Одбери</option>
    <option value="vodovod">>Водовод</option>
    <option value="struja">Струја</option>
    <option value="zavaruvawe">>Заварување</option>
    <option value="montaza">>Монтажа на намештај</option>
    <option value="roletar">>Ролетар</option>
    <option value="fiz_rabota">>Физичка работа</option>
    <option value="moler">>Молер</option>
    <option value="zidar">>Ѕидар</option>
  </select>
</div> 
    	<div class="panel-title">
  <label for="region">Регион:</label>
  <select name = "region" class="form-control" id="region">
    <option value="#">Одбери</option>
    <option value="skopje">>Скопје</option>
    <option value="bitola">Битола</option>
    <option value="prilep">>Прилеп</option>
    <option value="tetovo">Тетово</option>
    <option value="veles">>Велес</option>
    <option value="stip">>Штип</option>
    <option value="ohrid">>Охрид</option>
    <option value="strumica">>Струмица</option>
  </select>
</div> 
    	
    	<br>
    	<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
    </form>
  </div>

	</div> 
</div> 
	
  <?php  if(isset($_POST['submit'])) 
    { ?>
      
    
<?php foreach($viewmodel as $item) : ?>
		<div class="center">
		<div class="well">
			<h3><?php echo $item['name']; ?></h3>
			
			<hr />
			<h3><?php echo $item['telefon']; ?></h3>
			<h3><?php echo $item['region']; ?></h3>
			<h3><?php echo $item['email']; ?></h3>
			<h3><?php echo $item['zanaet_1']; ?></h3>
			<h3><?php echo $item['zanaet_2']; ?></h3>
			<p><?php echo $item['opis']; ?></p>
			<br />
		</div>	
		</div>
	<?php endforeach; ?>
	<?php }
    else               
    { ?>
        
   <?php }?>

	
</div>
</body>
</html>