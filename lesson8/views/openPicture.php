<?php

$photo = trim(strip_tags($_GET['photo']));

?>

<img src="../images/<?= $photo ?>" alt="<?= $photo ?>">