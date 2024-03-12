<?php

unset($_SESSION["user_id"]);
unset($_SESSION["user_name"]);
unset($_SESSION["role"]);

header("Location: ./index.php");
exit();
