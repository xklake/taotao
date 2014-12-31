<?php

use phpstudy2; 

$haha = new test(); 


return; 

$size = "large";
$var_array = array("color" => "blue",
		"size"  => "medium",
		"shape" => "sphere");

extract($var_array, EXTR_OVERWRITE, "wddx");

var_dump($var_array); 
echo "$color, $size, $shape, $size\n";


return; 
$string = 'April 15, 2003';
$pattern = '/(\w+) (\d+), (\d+)/i';
$replacement = '$0,,,,,${1}1,$3';
echo preg_replace($pattern, $replacement, $string);

return;

echo "<br><br>";
$str = "asdf{title}asdf{author}sadf{con}asfasdfasdfasf";
$mode = "/{(.*)}/U";
$flags1 = PREG_PATTERN_ORDER;       //整个数组是二维数组，$arr1[0]是包括边界所构成匹配字符串的数组，$arr1[1]除去边界所构成的匹配字符串的数组；
preg_match_all($mode,$str,$arr1,$flags1);
print_r($arr1);


echo "<br><br>";
$flags2 = PREG_SET_ORDER;           //整个数组是二维数组，$arr2[0][0]是第一个包括边界所构成的匹配的字符串，$arr2[0][1]是第一个除去边界所构成的匹配的字符串，之后的数组以此类推
preg_match_all($mode,$str,$arr2,$flags2);
print_r($arr2);


echo "<br><br>";
$flags3 = PREG_OFFSET_CAPTURE;          //整个数组是三维数组，$arr3[0][0][0]是第一个包括边界所构成的匹配的字符串，$arr3[0][0][1]是到达第一个匹配字符串的边界的偏移量（边界不算在内），之后以此类推，$arr2[1][0][0]是第一个包括边界所构成的匹配的字符串，$arr3[1][0][1]是到达第一个匹配字符串的边界的偏移量（边界算在内）;
preg_match_all($mode,$str,$arr3,$flags3);
print_r($arr3);

/*
Array ( 
[0] => Array 
	( 
		[0] => Array ( [0] => {title} [1] => 4 ) 
		[1] => Array ( [0] => {author} [1] => 15 ) 
		[2] => Array ( [0] => {con} [1] => 27 ) 
	)
	 
[1] => Array 
	( 
		[0] => Array ( [0] => title [1] => 5 ) 
		[1] => Array ( [0] => author [1] => 16 ) 
		[2] => Array ( [0] => con [1] => 28 ) 
	) 
)
*/


return;

preg_match("@^(http://)?([^/]+)@i","http://www.5idev.com/index.html", $matches);
$host = $matches[2];
print_r($matches); 

// 从主机名中取得后面两段
preg_match("@[^./]+.[^./]+$@", $host, $matches);
echo "域名为：{$matches[0]}";

print_r($matches);


return;

preg_match('@^(?:http://)?([^/]+)@i',"http://www.php.net/index.html", $matches);
$host = $matches[1];
print_r($matches);

return;

// get last two segments of host name
preg_match('/[^.]+\.[^.]+$/', $host, $matches);
echo "domain name is: {$matches[0]}\n";

$subject = "abcdef";
$pattern = '/^def/';
preg_match($pattern, substr($subject,3), $matches, PREG_OFFSET_CAPTURE);
print_r($matches);


$str = 'aaaaaabbbbb'; 
preg_match('/[a-z]+/', $str, $arr, PREG_OFFSET_CAPTURE); 

var_dump($arr); 

return;


$str = 'abc123abc';
preg_match('/abc(?:\d+)/', $str, $arr);

echo $arr['num']."<br/>";

echo $arr[1]."<br/>";
echo $arr[0]."<br/>";


$content = "现在时刻：".date("Y-m-d h:i a");

echo ($content."<br/>"); 


//匹配日期和时间.
if (preg_match ("/d{4}-d{2}-d{2} d{2}:d{2} [ap]m/", date("Y-m-d h:i a"), $m))
{
	echo "匹配的时间是：" .$m[0]. "n"; //"2012-04-20 07:31 am"
}
else 
{
	echo "nope!<br/>";
}

//分别取得日期和时间
if (preg_match ("/([d-]{10}) ([d:]{5} [ap]m)/", $content, $m))
{
	echo "当前日期是：" .$m[1]. "n"; //"2012-04-20"
	echo "当前时间是：" .$m[2]. "n"; //"07:31 am"
}
else
{
	echo "nope!<br/>";
}

return ; 


$ar = [0, 1, 2, 3, "a"=>"this is haha"];
unset($ar[0]); 
var_dump($ar); 

$ab = []; 
$ab[] = 0; 
$ab[] = 1;
$ab[] = 2;
$ab[] = "this is bb";
$ab["kk"] = "this is kk";
unset($ab["kk"]); 
unset($ab[1]);

var_dump($ab);

function test($name)
{
	var_dump($name);
	echo $name;
}

test("this is");
//test(require("phpstudy3.php"));
//test(include_once("phpstudy2.php")); 


echo "<br/>";

if(preg_match("/php/", "php is the web scripting language of choice.", $matches)){
	print "A match was found:". $matches[0];
} else {
	print "A match was not found.";
}



preg_match("/^(http:\/\/)?([^\/]+)/i","http://www.5idev.com/index.html", $matches);
$host = $matches[2];

var_dump($matches);

var_dump($host);
// 从主机名中取得后面两段
preg_match("/[^\.\/]+\.[^\.\/]+$/", $host, $matches);
echo "域名为：{$matches[0]}";

var_dump($matches); 

?>