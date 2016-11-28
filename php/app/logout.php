<?php
session_start();
session_destroy();
header('Location: ../views/auth/admin.login.php');