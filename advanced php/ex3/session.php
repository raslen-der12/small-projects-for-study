<?php


ini_set('session.use_only_cookies',1);
ini_set('session.use_strict_mode',1);


session_set_cookie_params([
    'lifetime' => 3600,
    'path' => '/',
    'domain' => 'localhost',
    'secure' => true,
    'httponly' => true

]);

session_cache_limiter('private_no_expire'); // works

session_start();

if (!isset($_SESSION["last_regeneration"])) {
    session_regenerate_id();
    $_SESSION["last_regeneration"] = time();
    
}else{
    $interval= 60*60;
    if (time()-$_SESSION["last_regeneration"] >= $interval ) {
        session_regenerate_id();
        $_SESSION["last_regeneration"] = time();
    }
}


