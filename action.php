<!DOCTYPE HTML>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Поиск по магазинам</title>
<link rel="shortcut icon" type="image/ico" href="favicon.ico">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <script src="help.js"></script>
    <script src="dropdown-checkboxes.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<?php
$servername = 'localhost';   //  либо   '127.0.0.1' 
$username =  'admin';
$password = 'admin' ;
$db_name = 'findsale';


$opt = array(
    PDO::ATTR_ERRMODE  => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);

$connection = new PDO("mysql:host=$servername; dbname=$db_name; charset=utf8", $username, $password, $opt);
$result = $connection->prepare("SELECT `ADRESS` FROM `shops`");
$result->execute();
echo "<body>";
    echo '<div class="linksContainer">';
        /*echo '<button class="openAll">Открыть все</button>';*/
        $query = $_POST['query'];
        /*echo $query;*/
        echo ('<h1>Поиск: '.$query.'</h1>
            <p class="warning"><br>Не открываются вкладки?<br>Ваш браузер заблокировал открытие всплывающих окон.<br>Снимите ограничение в правом верхнем углу интерфейса</p>'
            );
            echo ('<script type="text/javascript">

            </script>');

        /*echo('<script type="text/javascript">
        window.onload=function(e)
        {window.open("")}
        </script>');*/
            /*foreach($_POST as $row){
                if($row){
                        echo '<a href="#"><button class="linkButton"><label>'.$row.'</label></button></a>';
                }else{
                    echo 'Выберите хотя бы один магазин';
                }
            }*/
    echo '</div>';
echo '</body>';
?>
</html>
</body></html>
