<?php
ob_start();
require_once __DIR__ . "/func/config.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ACCResults</title>

    <link rel="stylesheet" href="style/index.css?v=<?= front_ver ?>">
    <script data-main="script/index.js?v=<?= front_ver ?>" src="script/require.min.js?v=<?= front_ver ?>"></script>

    <link href="style/tabulator.min.css" rel="stylesheet">
</head>
<body>
    <header id="topBar">
        <h3>ACCResults</h3>
    </header>
    <div id="resultTable"></div>
</body>
</html>
<?php
ob_end_flush();
?>
