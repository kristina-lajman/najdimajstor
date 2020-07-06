<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Shareboard</title>
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
</head>
<body>
<div class="center">
<div class="panel panel-default">
  <div class="panel-heading" >
    <h3 class="panel-title">Регистрација</h3>
  </div>
  <div class="panel-body" >
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="panel-title">
    		<label>Име</label>
    		<input type="text" name="name" class="form-control" />
    	</div>
    	<div class="panel-title">
    		<label>Телефон за контакт</label>
    		<input type="text" name="telefon" class="form-control" />
    	</div>
    	<div class="panel-title">
  <label for="region">Регион:</label>
  <select name = "region" class="form-control" id="region">
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
    	<div class="panel-title">
    		<label>Email</label>
    		<input type="text" name="email" class="form-control" />
    	</div>
    	<div class="panel-title">
    		<label>Лозинка</label>
    		<input type="password" name="password" class="form-control" />
    	</div>
    	 <div class="panel-title">
  <label for="zanaet_1">Занает кој е ваша специјалност:</label>
  <select name = "zanaet_1" class="form-control" id="zanaet_1">
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
  <label for="zanaet_2">Втор занает:</label>
  <select name = "zanaet_2" class="form-control" id="zanaet_2">
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
    		<label>Кажете нешто повеќе за себе</label>
    		<textarea name="opis" class="form-control"></textarea>
    	</div>
    	<br><input class="btn btn-primary" name="submit" type="submit" value="Внеси" />
    </form>
  </div>
</div>
</div>
</body>
</html>