<?php
$handle = fopen ("php://stdin","r");
$nooftestcases = fgets($handle);
for($a=0;$a<$nooftestcases;$a++){
$number=str_split(trim(fgets($handle)));
$result=array();
$opencount=0;
$closecount=0;
for($i=0;$i<sizeof($number);$i++){
if($number[$i]!=0){
if($opencount!=$number[$i]){
    if($number[$i]<$opencount){
   // $counter=$opencoun-$number[$i];
    for($j=$number[$i];$j<=$opencount;$j++)
    {
        array_push($result,')');
         $opencount--;
    }
    array_push($result,$number[$i]);
    }
    else{
        if($number[$i]-1==$opencount){
            array_push($result,'(');
            $opencount++;
        }else
    for($j=0;$j<$number[$i];$j++)
    {
        array_push($result,'(');
        $opencount++;
    }
        array_push($result,$number[$i]);
}

}else{
    array_push($result,$number[$i]);
}
}else{
    for($j=$closecount;$j<$opencount;$j++){
        array_push($result,')');
        $closecount++;
    }
    $opencount=0;
    $closecount=0;
    array_push($result,$number[$i]);
}
}
if($opencount!=$closecount){
    for($j=$closecount;$j<$opencount;$j++){
        array_push($result,')');
        $closecount++;
    }
    $opencount=0;
    $closecount=0;
}
print "Case #".($a+1).": ".implode('',$result)."\n";
$result=array();
}
fclose($handle);
?>
