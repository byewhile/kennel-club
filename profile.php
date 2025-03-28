<?php
if (!isset($_SESSION["username"])) {
    header("Location: auth");
}
require_once "components/head.php" ?>
    <title>Профиль</title>
</head>
<body>
    <? require_once "components/header.php" ?>
</body>