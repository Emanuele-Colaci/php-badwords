<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./server.php" method="GET">
        <div>
        <label style="display: block; margin: 10px;">Frase</label>
            <textarea style="margin: 10px;" name="paragraph" id="paragraph" cols="30" rows="5"></textarea>
        </div>
        <div>
            <label style="display: block; margin: 10px;">Inserisci una parola da censurare</label>
            <input style="margin: 10px;" type="text" name="censure">
        </div>
        <input style="margin: 10px;" type="submit" value="invia">
    </form>
</body>
</html>