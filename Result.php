<?php

$score = 0;

// user answers
$userAnswers = $_POST['answers'] ?? [];
$correctAnswers = $_POST['correct'] ?? [];

$total = count($correctAnswers); // ✔ only attempted questions

foreach ($correctAnswers as $index => $correct) {
    if (isset($userAnswers[$index]) && $userAnswers[$index] == $correct) {
        $score++;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Your Score: <?php echo $score . " / " . $total; ?></h2>

<?php if ($score == $total): ?>
    <p>🎉 Excellent! All answers are correct.</p>
<?php elseif ($score >= ($total / 2)): ?>
    <p>👍 Good job! You did well.</p>
<?php else: ?>
    <p>❌ Try again! Keep practicing.</p>
<?php endif; ?>

<br>
<a href="index.php">Try Again</a>

</body>
</html>