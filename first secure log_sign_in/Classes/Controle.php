<?php

declare(strict_types=1);



class Ctrl{
    
    private $username;
    private $password;
    private $pwd;
    private $email;
    private $name;
    
    public function __construct( $username, $password, $pwd, $email, $name){

        $this->username=$username;
        $this->password=$password;
        $this->pwd=$pwd;
        $this->email=$email;
        $this->name=$name;

    }


    private function estVide(){
        if (!empty($this->username) && !empty( $this->password) && !empty($this->pwd) && !empty($this->email) && !empty($this->name)) {
            return "false";
        }else {
            return "empty field(s)";
        }
    }
    private function confirmPass(){
        if ($this->password === $this->pwd) {

            return "false";
        }else {

            return "the password confirmation is wrong";
        }

    }
    private function checkEmail(){
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return "false";
        }else {
            return "email invalid";
        }
    }
    private function checkUsername(){
        if (preg_match('/^[a-zA-Z0-9]+$/', $this->username))
        return "false";
        else{
        return "username invalid";
    }
}
public function check() {
    if ($this->estVide()=== "false" && $this->confirmPass()=== "false" && $this->checkEmail()=== "false" && $this->checkUsername()=== "false") {
        return [];
    }else {
        return ["empty_input(s)" =>$this->estVide(),"password_confirm" =>$this->confirmPass(),"invalid_email" =>$this->checkEmail(),"invalid_username" =>$this->checkUsername()];
    }
}

}



final class Control{
    private $user;
    private $password;
    public function __construct( $user,  $password){
        $this->user = $user;
        $this->password = $password;
    }
    private function estVide(){
        if (!empty($this->user) && !empty( $this->password)) {
            return "false";
        }else {
            return "empty field(s)";
        }
    }
    private function checkEmail(){
        if (filter_var($this->user, FILTER_VALIDATE_EMAIL)) {
            return "email";
        }else {
            if (preg_match('/^[a-zA-Z0-9]+$/', $this->user))
                return "username";
            else{
                return "username invalid";
    }
            
        }
    }
    public function logsInput(){
        if ($this->estVide()=== "false" && ($this->checkEmail() === "email" || $this->checkEmail()==="username")) {
            return ["input_type" => $this->checkEmail(),"empty_input(s)" => "none"];
        }else {
            return ["empty_input(s)" =>  $this->estVide() , "input_type" => $this->checkEmail()];
        }
    }








}
