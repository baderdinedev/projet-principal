<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your head content -->
</head>
<body>
    <h2>Quiz Result</h2>

    @if ($isCorrect)
        <p>Congratulations! Your answer is correct.</p>
    @else
        <p>Sorry, your answer is incorrect.</p>
        @if(isset($explanation))
            <p>Explanation: {{ $explanation }}</p>
        @endif
    @endif

    <p>Your Answer: {{ $selectedAnswer }}</p>
</body>
</html>
