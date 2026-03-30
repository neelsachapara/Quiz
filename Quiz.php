<?php 
include 'questions.php';

// random 10 questions
shuffle($questions);
$selectedQuestions = array_slice($questions, 0, 10);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz Application</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Simple Quiz</h2>

<form action="Result.php" method="POST">

<?php foreach($selectedQuestions as $index => $q): ?>
    
    <p><strong><?php echo ($index + 1) . ". " . $q['question']; ?></strong></p>

    <?php foreach($q['options'] as $key => $option): ?>
    <input type="radio" 
           name="answers[<?php echo $index; ?>]" 
           value="<?php echo $key; ?>" 
           required>
        <?php echo htmlspecialchars($option); ?><br>
    <?php endforeach; ?>

    <!-- correct answer pass -->
    <input type="hidden" name="correct[<?php echo $index; ?>]" value="<?php echo $q['answer']; ?>">

<?php endforeach; ?>

<br>
<input type="submit" value="Submit Quiz">

</form>
<footer class="footer">
    Name: Neel Sachapara<br>
    Enrollment No: 240905040060<br>
    Class: Y<br>
    Sub: FWD<br>
    ALA: 1
</footer>

<script src="script.js"></script>
</body>
</html>   
