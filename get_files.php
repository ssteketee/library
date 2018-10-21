<?php
$filter = $_POST['filter'];
foreach (glob($filter) as $file) {
  $files[] = $file;
}
//$a = scandir($dir);
//$b=count($a);
// $res = '';
/*
for($x=2;$x<$b;$x++)
   {
     $res.= $a[$x];
		 $res.= '<br>';
		 $arr [] = $a[$x];
   }
*/
// echo nl2br($res);
    header('Content-Type: application/json');
    echo json_encode($files); // return value of $result
?>