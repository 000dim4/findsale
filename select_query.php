<!DOCTYPE HTML>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Поиск по студентам</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php

$servername = 'localhost';   //  либо   '127.0.0.1' 
$username =  'admin';
$password = 'admin' ;
$db_name = 'findsale';



$opt = array(
    PDO::ATTR_ERRMODE  => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);

$firstName = "Dmitry";
$lastName = "Vlasov";

$connection = new PDO("mysql:host=$servername; dbname=$db_name; charset=utf8", $username, $password, $opt);

$result = $connection->prepare("SELECT `ID`,`ADRESS` FROM `shops`");
$result->execute([]);
if ($result){
echo"<div class='header'><div class='logo'><h1>Collage</h1></div>";
echo    "</div>";
echo        "<a href='index.php'><button class='back'>&#8617;Назад</button></a>";
echo "<table class='resultTable'>";
    foreach($result as $row){
        echo $row['ADRESS'];
    }
echo "</table>";    
}

// Закрываем соединение
$pdo = NULL;





?>

</body></html>