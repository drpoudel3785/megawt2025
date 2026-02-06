<?php
/* Multi line
    #Comments
*/
//SIngle line Comments
//Creating the variable in php
//variable name start with $
$name = "Nepal Mega College";
$course = "BCA";
$semester = "III";
$fee = 54000;
$paid=True;
$students = array("Aayush, Aanushka, Suhani, Abhishek, Sampada, Anjali");



echo gettype($name)."<br>";
echo gettype($fee)."<br>";
echo gettype($paid)."<br>";
echo gettype($students)."<br>";

echo "<hr>";
echo "I am studying at $name in the course $course on semester $semester with fee Rs $fee which is paid $paid";
echo "<br>";
echo 'I am studying at $name in the course $course on semester $semester with fee Rs $fee which is pai $paid';
echo "<br>";
echo 'I am studying at '.$name.' in the course '.$course.' on semester '.$semester. ' with fee Rs '. $fee. 'which is paid'. $paid;

//unsetting the variable
unset($name);
//multiple variable can unset by using comma seperated eg
unset($course, $semester, $fee, $paid);

//working with arithmatic operations
$num1=20.00;
$num2=10;
$sum=$num1+$num2;
echo "<br> The SUM of $num1 and $num2 is $sum";

//Conditional Statemetns
if($num1>$num2){
    echo "$num1 is Greater than $num2";
}
else{
    echo "$num2 is gereater then $num1";
}
$usernmae="admin";     
$password="Nepal@123#";
$status1=1;
if($usernmae=="admin" && $password=='P@ssword' && $status==1){
    echo "Login Success";
}
else{
    echo "Login Failed";
}
?>