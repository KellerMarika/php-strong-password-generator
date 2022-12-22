<?php

/* DATI */
$passwordLength = isset($_GET["password-lenght"]) ? $_GET["password-lenght"] : "";
echo ("passwordLength:" . $passwordLength . "<br>");

$repeatChar = isset($_GET["repeat"]) ? $_GET["repeat"] : "false";
echo ("repeatChar:" . $repeatChar . "<br>");

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
//creo stringa di caratteri sulla base dei valori passati attraverso il GET (stoccati in $charsList)
foreach ($charsList as $charsType) {
  if ($charsType["isIncluded"]) {
    $admittedChars .= $charsType["chars"];
  }
}
echo  "$admittedChars <br>";


function a($passwordLength, $admittedChars, $repeatChar)
{

  $randomPassword = "";
  while (strlen($randomPassword) < $passwordLength) {
    $randomIndex = rand(0, strlen($admittedChars) - 1);

    //controllo che non funziona
    if ($repeatChar == false) {
      echo "repeat-false";
      if (!str_contains($randomPassword, $admittedChars[$randomIndex])) {
        $randomPassword .= $admittedChars[$randomIndex];
        echo ($randomPassword . "<br>");
      }
    } else {
      echo "repeat-true";

      $randomPassword .= $admittedChars[$randomIndex];
      echo ($randomPassword . "<br>");
    }
  }
};

a($passwordLength, $admittedChars, $repeatChar);
