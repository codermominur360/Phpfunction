
<?php


/*
 *
 *
trim()= String ,spase,charecter  মুছে দেয়া যায় |
implode()= ফাংশন দিয়ে অ্যারের এলিমেন্টগুলিকে জোড়া দিয়ে স্ট্রিং বানানো যায়। |
explode()= এই ফাংশনটি implode() এর বিপরীত |
is_array()= ভেরিয়েবল অ্যারে কিনা সেটা চেক করা যায়।
count()= array এ্রর মধ্যে value গণনা করে ।
substr()=  Substract String (বিয়োগ করা )
strpos() =  String  Position output bool True/False
str_replace() = String Replace (data insert করা )
strtolower() = ‍String Lowwercase.
strtoupper() = String Uppercase.
ucfirst() = Uppercase all fist word.
ucwords() = Uppercase only fist word.
strlen() = String lenght .
isset() = ভেরিয়েবলের অস্তিত্ব আছে কিনা এবং ভেরিয়েবলটি NULL কিনা সেটা যাচাই
empty()= ফাংশনটি ফাকা আছে কিনা তা চেক করে ।
strtotime() = ‍String To Time
ceil() = বিভিন্ন সময় রেটিং সিস্টেম তৈরী করার সময় এটা লাগে 4.2 |যেমন :4.2.1=5
floor() = (ceil function reverce system) বিভিন্ন সময় রেটিং সিস্টেম তৈরী করার সময় এটা লাগে 4.2 |যেমন :4.2.1=4
round()=
var_dump()
htmlspecialchars()=  ampersand('&amp;')  double quote('&quot;')  Single quote('&#039;')  (less than)'&lt;'
nl2br()= <br>      ---> do the work line brack ..
wordwrap() =
array_merge(


 পিএইচপিতে trim() ফাংশন দিয়ে যেকোন স্ট্রিং থেকে স্পেস কিংবা যেকোন অক্ষর/ক্যারেক্টার মুছে দেয়া যায় (স্ট্রিংটির শুরু কিংবা শেষ থেকে)।
*/

$text="bangladesh";
$text1="bangladesh";
$textture=trim($text1,"desh");
var_dump($textture) ;

/*
 * implode()=ফাংশন দিয়ে অ্যারের এলিমেন্টগুলিকে জোড়া দিয়ে স্ট্রিং বানানো যায়।
 */

echo"<br>";
$test=array(' Arif ',' Mominur',' utop');
$fuck= implode(' ',$test);
echo $fuck;

/*
 * পিএইচপিতে explode() ফাংশন দিয়ে একটা স্ট্রিংকে একটা ক্যারেক্টার বা স্ট্রিং দিয়ে ভাগ করে অ্যারে বানানো যায়। এই ফাংশনটি implode() এর বিপরীত।
 * */

echo"<br>";

$str = ' mominur Rahman,arif , utpol';
$arr = explode(',', $str);
var_dump($arr);

/*
 * is_array() ফাংশন দিয়ে পিএইচপিতে একটা ভেরিয়েবল অ্যারে কিনা সেটা চেক করা যায়।
 * */

echo"<br>";

$array=array("html","css","java","php");
$is_array= is_array($array);
var_dump($is_array);

echo"<br>";

$is_array= count($array);
var_dump($is_array);

/*
 * substr()
 * পিএইচপিতে একটা স্ট্রিং থেকে নির্দিষ্ট কোন অংশ বের করার দরকার হলে substr() ফাংশন ব্যবহার করা হয়।*/
$t="Bangladesh is best";
$sub=substr($t,4,10,);
echo $sub;

echo"<br>";
$arr=" i do string replased sentence";
$old_string=array("Rangpur","thakurgoan");
$current_string= array('i letter spased');
$replaseed= str_replace($old_string,$current_string,$arr);
if ($replaseed!=flase){
    echo "Replasement is not corrected in here";
}
else{
    echo "Replasement is corrected in the tag";
}

/* isset = একটা ভেরিয়েবলের অস্তিত্ব আছে কিনা এবং ভেরিয়েবলটি NULL কিনা সেটা যাচাই করতে isset() ফাংশন ব্যবহার করা হয়।

*/

echo"<br>";
$x="Mominur";
$y="Arif Arman";
$isset=isset($x,$y);
if($isset!=1){
    echo "you function is set here";
}
else{
    echo "You function is never here";
}

echo"<br>";
echo date('d, M, Y',strtotime('26 august '));

echo"<br>";
echo ceil(45.3);

echo "<br>";
echo floor('4.5552');

echo "<br>";
echo round('53545.255523');


$x = '<h1><span>Bangladesh is a 
country of natural
 beauty</span></h1>;

<p>Webcoachbd DOT com is the largest bengali tutorial site</p>';

echo nl2br(strip_tags($x,'<h1>'));



$x = "Webcoachbd is the largest bengali tutorial site in this planet so far";
echo wordwrap($x,30,"\n");



This is my php  function


?>

