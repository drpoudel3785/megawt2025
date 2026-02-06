<?php
$day=date('l');
switch($day){
    case 'Sunday':
    case 'Monday':
    case 'Tuesday':
    case 'Wednesday':
    case 'Thursday':
    case 'Friday':{
        echo "ITs regular Collge days. Boaring Days!. ";
        break;
    }
    case 'Saturday':{
        echo "Its good sleeping day! Hurrya!";
        break;
    }
    default:
    {
        echo "INvalid Day";  break;
    }
}

$names=array("Ram", "Sita", "gita", "manish", "mina");
echo $names[1];
echo "<br>";
foreach($names as $n){
    echo $n."<br>";
}
echo "<hr>";

for($i=0;$i<count($names); $i++){
    echo $names[$i]."<br>";

}
//Associative Array
$subjects=array("Math"=>60, "DSA"=>40, "WEB"=>50,"SAD"=>50);


?>