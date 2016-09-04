<?
include_once(__DIR__. "/config.php");
$sql = "SELECT * FROM models";
$res = mysql_query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Avito AJAX</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript">
		
	</script>
</head>
<body>
	<select name="" id="">
<?
while($data = mysql_fetch_array($res)):?>
	<option value="<?= $data['id_models'];?>"><?= $data['models_name'];?></option>
<?endwhile;?>
</select>
<select name="" id="avto">
	
</select>
</body>
</html>