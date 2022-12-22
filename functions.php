<?php

/* DATI */
$passwordLength = $_GET["password-lenght"]??  "";

$repeatChars = $_GET["repeat"] ?? false;

$charsList = [
  [
    "name" => "alphabetLowercase",
    "chars" => "abcdefghilmnopqrstuvwxyz",
    "isIncluded" => $_GET["alphabet"]??  false,
  ],
  [
    "name" => "alphabetUppercase",
    "chars" => "ABCDEFGHILMNOPQRSTUVWXYZ",
    "isIncluded" =>$_GET["alphabet"]??  false,
  ],
  [
    "name" => "integers",
    "chars" => "0123456789",
    "isIncluded"  => $_GET["integers"] ?? false,
  ],
  [
    "name" => "symbols",
    "chars" => "+-_/|\£%&?^@#*§ç>°",
    "isIncluded"  => $_GET["symbols"]?? false,
  ],
];

$admittedChars = "";
//creo stringa di caratteri sulla base dei valori passati attraverso il GET (stoccati in $charsList)
foreach ($charsList as $charsType) {
  if ($charsType["isIncluded"]) {
    $admittedChars .= $charsType["chars"];
  }
}
//echo  "$admittedChars <br>";


function a($passwordLength, $admittedChars, $repeatChars)
{

  $randomPassword = "";
  while (strlen($randomPassword) < $passwordLength) {
    $randomIndex = rand(0, strlen($admittedChars) - 1);

    //controllo che non funziona
    if ($repeatChars == false) {
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

a($passwordLength, $admittedChars, $repeatChars);
