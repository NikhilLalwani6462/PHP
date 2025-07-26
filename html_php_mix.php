<?php
$fruits = ["Apple","Banana","kiwi","Dragon"];
?>
<html>
    <head>
       <title>Fruits</title>
    </head>
    <body>
        <h1><strong>Fruits</strong></h1>
        <ol>
                <?php foreach($fruits as $fruit): ?>
                    <li><?= $fruit; ?></li>
                <?php endforeach; ?>
        </ol>

    </body>
</html>