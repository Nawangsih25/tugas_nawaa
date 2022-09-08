<?php

session_start();

session_destroy();

echo "anda telah log out";

header("Location:form.php");