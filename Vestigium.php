<?php
$handle = fopen ("php://stdin","r");
$nooftestcases = fgets($handle);
for($a=0;$a<$nooftestcases;$a++){
$n = fgets($handle);
$arraytest=[];
$rowcount=0;
$columncount=0;
$sum=0;
$columnrow=[];
for($i=0;$i<$n;$i++){
    $arraytest[$i]=explode(' ',trim(fgets($handle)));
    if(sizeof($arraytest[$i])!=sizeof(array_unique($arraytest[$i]))){
    $rowcount++;
    }
    $sum=$sum+$arraytest[$i][$i];
}
for($i=0;$i<$n;$i++){
for($j=0;$j<$n;$j++){
    array_push($columnrow,$arraytest[$j][$i]);
}
if(sizeof($columnrow)!=sizeof(array_unique($columnrow))){
    $columncount++;
    }
$columnrow=[];

}
print "Case #".($a+1).": $sum $rowcount $columncount\n";
}
fclose($handle);
?>

