<body>
<title>
9xx.pl - Sklep Internetowy
</title>
<style>
body
{
background-color: black;
color: white;
font-family: MS PGothic;
text-align: center;
}

.n
{
font-size: 30px;
color: yellow;
text-align: center;
border-style: solid;
border-color: green;
}

.form
{
text-align: left;	
}

.rejestracja
{
text-align: right;	
	
	
}
</style>
<div class="n">
9xx.pl
</div>
<div class="form">
 <form>
 Login:<br>
  <input type="text" name="firstname"><br>
 Hasło:<br>
  <input type="text" name="lastname"><br>
    <input type="submit" value="Zaloguj!">
</form> 
</div>
<div class="rejestracja">
 <a href="register.php">Zarejestruj się!</a> 
</div>
Produkty:</br>

</body>
<?php
$liczba=1;
$polaczenie=mysqli_connect("localhost", "root", "", "sklepinternetowy");
mysqli_query($polaczenie, "set names utf8");
$result = mysqli_query($polaczenie, 'select * from produkty');
while ($linia= mysqli_fetch_assoc($result))
{
	$zmienna="produkt".$liczba.".php";
	$liczba=$liczba + 1;
	
	echo "<img src='".$linia["zdjecie"]."'/>"."</p>";
	echo "<a href='$zmienna'>"."Opis produktu"."</a>";
}	
?>
