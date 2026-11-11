<?php

set_time_limit(180);

error_reporting(E_ALL);
ini_set('display_errors', 1);

$app = require __DIR__ . '/../bootstrap.php';

$question = $_POST['question'] ?? '';
$answer = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $question) {
    try {
        $answer = $app->getResponse($question);
    } catch (\Throwable $e) {
        $answer = $e->getMessage();
    }
}
?>

<form method="POST">
    <label for="question">Ask a question:</label>

    <input
        id="question"
        type="text"
        name="question"
        value="<?= htmlspecialchars($question) ?>"
        required
    >

    <input type="submit" value="Ask">
</form>

<p>
    <strong>Answer:</strong> 
    <?= nl2br(htmlspecialchars($answer)) ?>
</p>