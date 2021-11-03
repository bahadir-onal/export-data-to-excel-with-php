<?php include("excel.php");

$baglan = new PDO("mysql:host=localhost;dbname=excel;charset=utf8", "root","123456789");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>EXCELE AKTARMA SİSTEMİ</title>
</head>
<body>
<?php
$arabaveri=array();
$arababaslik=array(
    "Araba Ad",
    "Araba Model"
);

$verisor=$baglan->prepare("SELECT * FROM araba");
$verisor->execute();

while ($sonuc=$verisor->fetch(PDO::FETCH_ASSOC)) {

    @$arabaveri[]=array(

            $sonuc['marka'],
            $sonuc['model']
    );

}

$veri="<table border='1'> <th style='background: black' colspan='2'>
       <font style='color: #8b8b8b'>Arabalar</font></th>";


excelcek(date("d.m.y"),$arababaslik,$arabaveri);



?>

</body>
</html>