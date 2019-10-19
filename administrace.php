<?php

session_start();

if (isset($_SESSION['loggedIn'])) {
    echo "prihlásený";
} else {
    echo 'neprihlásený';
}
