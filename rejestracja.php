<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<main>
        <header>
            sklep - księgarnia
        </header>
        <nav>
            <?php
                include("menu.txt");
            ?>
        </nav>
        <section>
            
            <form action="rejskrypt.php" method="GET">
                login: <input type="text" name="login" id="">
                <br>
                hasło: <input type="text" name="haslo" id="">
                <input type="submit" value="WYSLIJ">
            </form>
            
        </section>
    </main>
</body>
</html>
