<?php
$number=78;
echo $number;
// echo '<br/>';
 $name='Hello World';
 echo $name;
 $school='SQI';
 echo '<br/>';
echo $school;


 $obj=new stdClass;
 $obj->firstname='Oyindamola';
 $obj->lastname='Babatope';
$obj->age=45;
 print_r($obj);
print_r($obj->firstname);



//     //indexed array
 $firstarray=[1,2,3,4, 'hdjdhjjj'];
  print_r($firstarray);
  $secondarray=array('Ruth','Wemimo');
 print_r($secondarray);
    //associative array
 $thirdarray=[
       "age"=>57,
        "lastname"=>"Dolapo",
        "school"=>"SQI"
   ];
    echo 'my name is '. $name;
 print_r($thirdarray['lastname']);
  //multidimensional array
 array_push($firstarray,$secondarray,$thirdarray);
    print_r($firstarray);
    for ($i=0; $i < count($firstarray); $i++) { 
       print_r($firstarray[$i]);
   }




?>