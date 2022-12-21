<?php

$passwordLength = isset($_GET["password-lenght"]) ? $_GET["password-lenght"] : "";
echo ("passwordLength:" . $passwordLength . "<br>");

$charsList = [
  [
    "name" => "alphabetLowercase",
    "chars" => "abcdefghilmnopqrstuvwxyz",
    "isIncluded" => isset($_GET["alphabet"]) ? $_GET["alphabet"] : false,
  ],
  [
    "name" => "alphabetUppercase",
    "chars" => "ABCDEFGHILMNOPQRSTUVWXYZ",
    "isIncluded" => isset($_GET["alphabet"]) ? $_GET["alphabet"] : false,
  ],
  [
    "name" => "integers",
    "chars" => "0123456789",
    "isIncluded"  => isset($_GET["integers"]) ? $_GET["integers"] : false,
  ],
  [
    "name" => "symbols",
    "chars" => "+-_/|\£%&?^@#*§ç>°",
    "isIncluded"  => isset($_GET["symbols"]) ? $_GET["symbols"] : false,
  ],
];

$admittedChars = "";

foreach ($charsList as $charsType) {

  if ($charsType["isIncluded"]) {
    $admittedChars .= $charsType["chars"];
    echo  "$admittedChars <br>";
  }
}




/* $i = 0;
$randomPassword = "";
while ($i <= $passwordLength) {
  $randomIndex = rand(0, strlen($admittedChars) - 1);
  var_dump(" random index: " . $randomIndex);

  $randomPassword .= $admittedChars[rand(0, $randomIndex)];
  var_dump($randomPassword);

  $i++;
} */
