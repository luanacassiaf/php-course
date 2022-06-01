<?php

setcookie('user', 'Luana', time()+3600);
setcookie('email', 'luanacassiaf@gmail.com', time()+3600);
setcookie('lastSearch', 'Pikachu', time()+3600);

var_dump($_COOKIE);