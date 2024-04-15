<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesso</title>
</head>
<body>
    <form action="access.php" method="GET">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="mail">Email:</label>
        <input type="email" id="mail" name="mail" required><br>
        <label for="age">Età:</label>
        <input type="text" id="age" name="age" required><br>
        <input type="submit" value="Verifica Accesso">
    </form>
</body>
</html>
