<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <?php deps("src/dependencies/styles.php"); ?>
</head>
<body>
    <?php component("navbar"); ?>
    <div>
        <?php slot($content); ?>
    </div>
    <?php component("footer"); ?>
    <?php deps("src/dependencies/scripts.php"); ?>
</body>
</html>