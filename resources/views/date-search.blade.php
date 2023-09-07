<!DOCTYPE html>
<html>
<head>
    <title>Date Search</title>
</head>
<body>
    <h1>Date Search</h1>
    <form method="GET" action="/crossword-app/public/get-object-by-date">
        <label for="date">Enter Date (YYYY-MM-DD):</label>
        <input type="text" id="date" name="date" required>
        <button type="submit">Search</button>
    </form>
</body>
</html>