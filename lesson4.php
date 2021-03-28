<?php

$arrName = array("5","mo" , "no");
echo"<pre>";
print_r($arrName);
echo"</pre>";

// another  
$arr2=["name"];
echo"<pre>";
print_r($arr2);
echo"-------------------------------------------------------";
$arrName = array("first" , "second" ,"third");
echo"<pre>";
print_r($arrName);
echo"</pre>";
$count = count($arrName);
for($a=0; $a<$count; $a++){
echo $arrName[$a] ."<br>";}
echo"-------------------------------------------------------";
$fullName = array("first"=>"ma" , "second"=>"ha" ,"third"=>"mo" , "forth"=> "ed");
echo"<pre>";
print_r($fullName);
echo"</pre>";
$count = count($fullName);
// for($a=0; $a<$count; $a++){
// echo $fullName[$a] ."<br>";}                                               
foreach
($fullName as $key => $value)
echo "my $key name is  $value <br>"; 
echo"--------------------multi-----------------------------------";

$date = array (
    array("ahmed",30,"cairo"),
    array("mohamed",35,"alex"),
    array("mahmoud",40,"giza"),
    );
    echo "<pre>";
    print_r($date);
    echo "</pre>";
echo"-------------------------------------------------------<br>";
$date = array (
    array("NAME"=>"ahmed ",
          "AGE"=>"35",
            ),
    array("NAME"=>"ahmed  ","AGE"=>"35")
    );
    foreach($date as $f=>$k){
        foreach($k as $ky => $val){
        echo $ky .":".$val ."<br>";
        }
    echo"<hr>";
    }
echo"-------------------------------------------------------";
    $date = array (
        array("NAME"=>"ahmed ",
              "AGE"=>"35",
              "skill" =>[
                  "read"
              ]
                ),
        );
        echo "<pre>";
        print_r($date);
        echo "</pre>";
echo"-------------------------------------------------------<br>";
$date = array ("NAME"=>"ahmed ",
          "AGE"=>"35",
          "skill" =>[
              "read","write"
          ]
            )
    ;
    foreach($date as $ke => $va){
                                if($ke == "skills"){
                                                    continue;
                                                    }else{
                                                    print_r( $ke." : ".$va." <br> " );
                                                          }
                               }
echo"-------------------------------------------------------";