<!DOCTYPE html>
<html>
<head>
    <title>Add Crosswords</title>
</head>
<body>
    <h1>Add Crosswords</h1>
    <form method="POST" action="{{ route('crosswords.store') }}">
        <label for="answer">Answer: </label>
        <input type="text" id="answer" name="answer" required>
        <label for="clue">Clue: </label>
        <input type="text" id="clue" name="clue" required>
        <label for="length">Length: </label>
        <input type="number" id="length" name="length" required>
        <label for="direction">Direction: </label>
        <input type="text" id="direction" name="direction" required>
        <button type="submit">Add</button>
    </form>
</body>
</html>