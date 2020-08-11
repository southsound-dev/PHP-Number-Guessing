<?php


$play_count = 1;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "I'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?\n";

function guessNumber() {
  global $guess_high, $guess_low, $correct_guesses, $play_count;
  $num = rand(1,10);
  echo "\n";
  echo "Make your guess...";
  echo "\n";
  $guess = intval(readline(">> "));
  if ($guess >= 1){
    if ($guess <= 10) {
      echo "You're in round ${play_count}";
  echo "\n";
  echo "The number you guessed was ${guess}";
  echo "\n";
  echo "And the correct number is.... ${num}";
  echo "\n";
    if ($guess == $num) {
    $correct_guesses++;
  } elseif ($guess > $num) {
      $guess_high++;
  } elseif($guess < $num) {
      $guess_low++;}
    elseif($play_count = 10){
    exit();}else {
    }
  }
      else {
    echo "\n";
    echo "Please valid numbers are from 1 to 10. Guess Again.";
    echo "\n";
  }
  $play_count++;}
    else {
    echo "\n";
    echo "Please valid numbers are from 1 to 10. Guess Again.";
    echo "\n";
  }
  } 

for ($i = 1; $i <= 10; $i++) {
    guessNumber();
}





  $percent_correct = $correct_guesses/$play_count * 100;
  echo "Your average right guess percent is ${percent_correct}, keep trying";
  echo "\n";
  if($guess_high > $guess_low) {
    echo "When you guessed wrong, you tended to guess high.";
  }elseif($guess_low > $guess_high){
    echo "When you guessed wrong, you tended to guess low.";
  }
  echo "\n";



