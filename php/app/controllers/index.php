<?php

$tasks = $app['db']->selectAll('profesori');

require '../views/admin/index.php';