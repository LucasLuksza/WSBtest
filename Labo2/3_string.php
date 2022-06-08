<?php
$text = <<<TEXT
    WSB - Wyższa Szkoła
    Bankowa<br>
TEXT;
echo"$text<br>";

echo nl2br($text);
$lorem='Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>';

echo $lorem;
echo wordwrap($lorem, 40, "<br>");
echo wordwrap($lorem, 40, "<hr>");
ob_clean();

$name1="Anna";
$name2="  Anna ";
echo "Ilość znakóww w zmiennej \$name1: ".strlen($name1)."<br>";
echo "Ilość znakóww w zmiennej \$name2: ".strlen($name2)."<br>";
echo strlen(ltrim($name2))."<br>";
echo strlen(rtrim($name2))."<br>";
echo strlen(trim($name2))."<br>";

$name="jANUsz";
echo strtolower($name)."<br>";
echo strtoupper($name)."<br>";
$text="janUSz kOWalskI";
echo ucfirst($text)."<br>";
echo ucwords($text)."<br>";

echo ucwords(strtolower($text))."<br>";
$x=1;
$y=1.0;

echo gettype($x)."<br>";
echo gettype($y)."<br>";

if ($x===$y){
  echo "identyczne <br>";
}else{
  echo"nieidentyczne <br>";
}

if ($x==$y){
  echo "równe <br>";
}else{
  echo"rózne <br>";
}

?>
