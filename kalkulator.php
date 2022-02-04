<!Doctype html>
<html>
	<style>
		body{
			background-color: rgb(160, 202, 197);
		}
		body{
			padding-top: 160px;
		}
		.ica{
			font-size: 30px;
			text-align: "center";
		}
	</style>
<head>
	<title>Kalkulator</title>
	<style>
         table{background-image:linear-gradient(salmon, lightblue); padding:10px; border-radius:5px;}
         table input{width:100%; border:0px;}
         table tr td select{width:100%;}
        </style>
</head>
<body>
	<form method="post" action="">
		<table align="center">
			<tr>
				<td><span class="ica">Kalkulator</span></td>
			</tr>
			<tr>
				<td colspan="2"><input type="text" name="satu" value=""></td>
			</tr>
			<tr>
				<td colspan="2"><input type="text" name="dua" value=""></td>
			</tr>
			<tr>
				<td colspan="2">
					<select name="operator">
						<option align="center">- Pilih -</option>
						<option value="+">+</option>
						<option value="-">-</option>
						<option value="X">x</option>
						<option value="/">/</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><input type="reset" name="reset" value="C"></td>
				<td><input type="submit" name="submit" value="="></td>
			</tr>
			<tr>
				<td colspan="2"><input type="text" name="hasil" value="
				<?php
	if (isset($_POST["submit"])){
	$satu = $_POST["satu"];
	$dua = $_POST["dua"];
	$operator = $_POST["operator"];

	if($operator == "+"){
		$hasil = $satu+$dua;
		echo $hasil;
	}elseif($operator == "-"){
		$hasil = $satu-$dua;
		echo $hasil;
	}elseif($operator == "X"){
		$hasil = $satu*$dua;
		echo $hasil;
	}elseif($operator == "/"){
		$hasil = $satu/$dua;
		echo $hasil;
	}else{
		echo "Pilih Operator";
	}	
}
?>
				"></td>
			</tr>
	</form>
</body>
</html>