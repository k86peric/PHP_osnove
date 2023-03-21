<?php

session_start();

$_SESSION['foo'] = 'bar';

session_write_close();

var_dump(
    $_SESSION
);