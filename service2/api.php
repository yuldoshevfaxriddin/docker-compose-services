<?php
$data = [] ;
for($i=0;$i<10;$i++){
   $person = [
    'name'=>'Yuldoshev Faxriddin',
    'age'=>random_int(20,30),
    'nation'=>'UZBEK'
   ]; 
   $data[]=$person;
}
echo json_encode($data);
?>