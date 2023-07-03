<?php require_once("controllers/control.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson8</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div style="margin: 0 auto; width: 1500px;">
        <header style="width: 100%; border: 1px solid black; background-color: yellow;">
            <section style="display: flex; justify-content: space-between;">
                <h1 style="color: black;">HEADER OF THE SITE</h1>
                <button style="background-color: red; color: white; width: 25%;">Cart</button>
            </section>
        </header>
        <main style="width: 100%; display: flex; flex-wrap: nowrap;">
            <section style="width: 20%; border: 1px solid black;">
                <?php include_once("templates/menu.php") ?>
            </section>
            <section style="width: 30%; display: flex; flex-flow: row wrap; justify-content: space-around;">
                <?php include_once("templates/".$content.".php"); ?>
            </section>
            <section style="width: 50%; border: 1px solid black;">
                <aside>
                    <ul style="list-style-type: none;">
                        <li>Advertisement</li>
                        <li>Advertisement</li>
                        <li>Advertisement</li>
                        <li>Advertisement</li>
                        <li>Advertisement</li>
                        <li>Advertisement</li>
                    </ul>
                </aside>
            </section>
        </main>
        <footer style="width: 100%; background-color: grey; border: 1px solid black;">
            <section>
                <h1 style="color: white;">FOOTER OF THE SITE</h1>
            </section>
        </footer>
    </div>
</body>
</html>