<?php
$input = '80,60,55,40,100,25,80,95,30,60';
$scores = explode(",", $input);
foreach ($scores as $index => $score) {
    ${'score' . ($index + 1)} = $score;
    echo 'score' . ($index + 1) . ': ' . ${'score' . ($index + 1)} . "\n";
};

function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

// $scores を再設定しない
$totalScore = array_reduce($scores, "sum");
$averageScore = $totalScore / count($scores);

echo "合計: " . $totalScore . "\n";
echo "平均: " . $averageScore . "\n";
?>