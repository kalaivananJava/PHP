<?php
// echo phpversion();
// $n=10;

// echo "hello $n";

// $txt="kali";
// echo '<br>hai $txt';

// $n1="7c";
// $n2="7";
// echo $n1+$n2;

// $car =array("volvo","bmw","Alto");
// var_dump($car);

// define("name","value");

// // $name=undefined;
// echo name;

// echo __DIR__ ;
// echo __FILE__;

// function funcName(){
//     return __FUNCTION__;
// }

// echo funcName();
// echo __LINE__;

// $a=10;$b=20;

// echo "<br>the add of $a + $b ". $a+$b."<br>";
// echo "$a - $b = ".$a-$b."<br>";

// $members = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];

// print_r($members);

// foreach($members as $pro => $val ){
//  echo "$val <br>";
// }


// $cars = array (
//     array("Volvo",22,18),
//     array("BMW",15,13),
//     array("Saab",5,2),
//     array("Land Rover",17,15)
//   );

//   foreach($cars as $arr){
//     foreach($arr as $ele){
//         echo $ele." ";
//     }
//     echo "<br>";
//   }

//   $srt=[90,88,12,1000,0,1,3,45];

//   sort($srt);
//   rsort($srt);
//   foreach($srt as $ele){
//     echo "$ele  ";
//   }

// $letters=['a','q','b'];
 

//   foreach($letters as $ele){
//     echo "$ele  ";
//   }

//   $assArr=["brand"=>"Ford", "model"=>"Mustang", "year"=>1964];

//   asort($assArr);
//    ksort($assArr);
//   echo "<pre>";
//   print_r($assArr);
//   echo "</pre>";

// $reg=" Boy i";

// echo preg_match("/boy/i",$reg);

// echo $_GET['query'];


//Forms

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bootstrapForm.php" method="get" >
<input type="text" name="user_name" id="" placeholder="username"><br>
<input type="password" name="password" id="" placeholder="Password">
<br>
<input type="submit" value="submit">
</form>
</body>
</html>


<?php
if(isset($_GET['user_name']) && isset($_GET['password'])){            $user_name=$_GET['user_name'];
            $password=$_GET['password'];
          echo "$user_name and $password";
}

echo "<br/>";
echo date('y');
date_default_timezone_set("Indian/Antananarivo");
echo"<br>";
echo date('H:i:sa');
?>