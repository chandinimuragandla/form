<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>learning Php</h1>
    <?php
    //echo "hi";
    //variables
//$name='chandini';
    // echo $name;
    // $firstname='nikki';
     //echo "hello $firstname";
   $charactername="john";
   $characterage="40";
echo "There once was a man named $charactername <br>";
echo "He was $characterage years old <br>";
$charactername="Tom";
echo "he was really liked the name$charactername <br>";
echo "But didn't like being $characterage <br>";
//Data types
$phase="To be or not to be";
$age=40;
$gpa=32.4332;
$isMale=false;
echo "hello";
echo 4.57 ;
//Strings
$phrase="Giraffe Academy <br>";
echo  strtolower($phrase);

echo strtoupper($phrase);
"<br>";
echo strlen($phrase);
'<br>';
echo $phrase[0];
"<br>";
echo $phrase[8];
"<br>";
echo $phrase[15] ="u";
echo $phrase;
'<br>';
$phrase= "Code Academy <br>";
echo str_replace("code", "panda",$phrase);
echo str_replace("ode",'panda',$phrase);
echo substr($phrase,8,3);
 ?>
</body>
</html>