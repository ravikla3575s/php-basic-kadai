<?php
$input = '80,60,55,40,100,25,80,95,30,60';
$scores = explode(",", $input);

$totalScore = 0;
for ($i = 0; $i < count($scores); $i++) {
    ${'score' . ($i + 1)} = $scores[$i];
    echo 'score' . ($i + 1) . ': ' . ${'score' . ($i + 1)} . "<br>";
    $totalScore += ${'score' . ($i + 1)};
}
echo $i.'<br>';
$averageScore = $totalScore / $i;
echo "合計: " . $totalScore . "<br>";
echo "平均: " . $averageScore . "<br>";
?>

<!-- <?php
$input = '80,60,55,40,100,25,80,95,30,60';
$scores = explode(",", $input);
foreach ($scores as $index => $score) {
    ${'score' . ($index + 1)} = $score;
    echo 'score' . ($index + 1) . ': ' . ${'score' . ($index + 1)} . "<br>";
};

function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

$totalScore = array_reduce($scores, "sum");
$averageScore = $totalScore / count($scores);

echo "合計: " . $totalScore . "<br>";
echo "平均: " . $averageScore . "<br>";
?> -->