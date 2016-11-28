<?php

isset($_SESSION['email']) ? require 'app/bootstrap.php' : header('Location: views/auth/admin.login.php');