<?php


class Sess {
    private function sessionLimit() {
        ini_set("session.use_only_cookies",1);
        ini_set("session.use_stirct_mode",1);
        session_cache_limiter('private_no_expire');
        session_set_cookie_params([
            "lifetime"=> 1800,
            "domain"=> 'localhost',
            'path'=> '/',
            'secure'=> true,
            'httponly'=> true
        ]);
    }

    private function regen() {
        session_regenerate_id();
        $_SESSION["last_regeneration"]=time();
    }

    private function regenerate() {

        if (!isset($_SESSION["last_regeneration"])) {
            $this->regen();
        }else {
            $interval= 60*30;
            if (time()-$_SESSION["last_regeneration"]>=$interval) {
                $this->regen();
            }
        }
        
    }



    public function start() {
        $this->sessionLimit();
        session_start();
        $this->regenerate();

        }
 


}