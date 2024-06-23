<style>
    @font-face {
  font-family: DinRoundPro;
  src:url("/dinroundpro.otf");
    }
    h1{
        font-family: DinRoundPro;
        position: absolute;
    }
    d{
        font-family: DinRoundPro;
        animation: 0.5s linear s;
    }
    d2{
        font-family: DinRoundPro;
        color:#555555;
        animation: 0.5s linear sc;
    }
    @keyframes s{
    0%{
        color:#00000000;
    }
    100%{
         color:#000000;
        
    }
    @keyframes sc {
    0%{
        color:#00000000;
    }
    100%{
         color:#555555;
        
    }
}
</style>
<h1>
<?php
$servername = "127.0.0.1:3306";
$username = "47_116_204_106";
$password = "TJeHLtdzTGKRYJ8W";
$dbname = "47_116_204_106";
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$sql = "SELECT s FROM ".$_GET["sdk"];
$result = $conn->query($sql);
if($result){
    $row = $result->fetch_assoc();
    $K=$row["s"];
}
if($K){
    $k2=$K+1;
}
else{
    $k2=1;
}
$sql = "DROP TABLE ".$_GET["sdk"];
$result = $conn->query($sql);
$sql = "CREATE TABLE ".$_GET["sdk"]."(s INT)";
$result = $conn->query($sql);
$sql = "INSERT INTO ".$_GET["sdk"]."(s) VALUES (\"".$k2."\")";
$result = $conn->query($sql);
$P = 1000000;
$P*=10;
$t=false;
while($P!=1){
    $P/=10;
    $K3=$k2/$P%10;
    if($K3!=0|$t){
        $t=true;
        echo "<d>".$K3."</d>";
    }
    else{
        echo "<d2>".$K3."</d2>";
    }
}
?></h1>
