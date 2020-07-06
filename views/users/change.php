<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Shareboard</title>
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
	<script language="javascript">
	function SubmitForm() {
		var form = document.forms[0];
		var bRequired = true;
		if ((form.name.value.length < 1) ||
		(form.telefon.value.length < 1) ||
		(form.region.value.length < 1) ||
		(form.zanaet_1.value.length < 1) ||
		(form.zanaet_2.value.length < 1)||
		(form.opis.selectedIndex < 1))  {
			alert("Ве молиме пополнете ги сите полиња.");
			bRequired = false;
		}
		
		if (!bRequired) return false;

		
		
		
		form.submit();
	}
</script>
</head>
<body>
<div class="center">
Добредојдовте <?php echo $_SESSION['user_data']['name']; ?><br>
Вашиот емаил e <?php echo $_SESSION['user_data']['email']; ?>  <br>
Можете да ја направите потребната промена во следниот формулар. 
<div class="panel panel-default">
  <div class="panel-heading" >
    <h3 class="panel-title">Промена на податоци</h3>
  </div>
  <div class="panel-body" >
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="panel-title">
    		<label>Име</label>
    		<input type="text" name="name" value="<?php echo $_SESSION['user_data']['name']; ?>" class="form-control" />
    	</div>
    								
    	<div class="panel-title">
    		<label>Телефон за контакт</label>
    		<input type="text" name="telefon" value="<?php echo $_SESSION['user_data']['telefon']; ?>"class="form-control" />
    	</div>
    	<div class="panel-title">
  <label for="region">Регион:</label>
  <select name = "region" class="form-control" id="region">
  	<option value="<?php echo $_SESSION['user_data']['region']; ?>"><?php echo $_SESSION['user_data']['region']; ?></option>
    <option value="skopje">Скопје</option>
    <option value="bitola">Битола</option>
    <option value="prilep">Прилеп</option>
    <option value="tetovo">Тетово</option>
    <option value="veles">Велес</option>
    <option value="stip">Штип</option>
    <option value="ohrid">Охрид</option>
    <option value="strumica">Струмица</option>
  </select>
</div> 
    	
    	
    	 <div class="panel-title">
  <label for="zanaet_1">Занает кој е ваша специјалност:</label>
  <select name = "zanaet_1" class="form-control" id="zanaet_1">
    <option value="<?php echo $_SESSION['user_data']['zanaet_1']; ?>"><?php echo $_SESSION['user_data']['zanaet_1']; ?></option>
    <option value="Водовод">Водовод</option>
    <option value="Струја">Струја</option>
    <option value="Заварување">Заварување</option>
    <option value="Монтажа на намештај">Монтажа на намештај</option>
    <option value="Ролетар">Ролетар</option>
    <option value="Физичка работа">Физичка работа</option>
    <option value="Молер">Молер</option>
    <option value="Ѕидар">Ѕидар</option>
  </select>
</div> 
<div class="panel-title">
  <label for="zanaet_2">Втор занает:</label>
  <select name = "zanaet_2" class="form-control" id="zanaet_2">
   	<option value="<?php echo $_SESSION['user_data']['zanaet_2']; ?>"><?php echo $_SESSION['user_data']['zanaet_2']; ?></option>
    <option value="Водовод">Водовод</option>
    <option value="Струја">Струја</option>
    <option value="Заварување">Заварување</option>
    <option value="Монтажа на намештај">Монтажа на намештај</option>
    <option value="Ролетар">Ролетар</option>
    <option value="Физичка работа">Физичка работа</option>
    <option value="Молер">Молер</option>
    <option value="Ѕидар">Ѕидар</option>
  </select>
</div> 
    	<div class="panel-title">
    		<label>Кажете нешто повеќе за себе</label>
    		<textarea name="opis" class="form-control"><?php echo htmlspecialchars( $_SESSION['user_data']['opis']); ?> </textarea>
    	</div>
    	
    	
    	<br><input class="btn btn-primary" name="submit" type="submit" value="Внеси" onclick="SubmitForm();  return false;" />
    </form>
  </div>
</div>
</div>
</div>
</body>
</html>