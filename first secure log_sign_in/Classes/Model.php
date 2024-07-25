<?php



class Mod extends CNX{

    private $username;
    private $password;
    private $email;
    private $name;

    public function __construct($username,$password,$email,$name){
        $this->username=$username;
        $this->password=$password;
        $this->email=$email;
        $this->name=$name;

    }
    private function takenUser (){
        $sql="SELECT NumAb FROM abonne WHERE NumAb= ? ;";
        $stmt= parent::connect()->prepare($sql);
        $stmt->execute([$this->username]);
        
        $res=$stmt->fetch(PDO::FETCH_ASSOC);
        $stmt=null;

        return $res;
    }
    private function takenEmail (){
        $sql="SELECT email FROM abonne WHERE email= ? ;";
        $stmt= parent::connect()->prepare($sql);
        $stmt->execute([$this->email]);
        $res=$stmt->fetch(PDO::FETCH_ASSOC);
        $stmt=null;
        return $res;
    }
    


    public function valid() {
        if ( $this->takenEmail() || $this->takenUser()) {
            return true;
        }else {
            return false;
        }
    }




    
}

final class Model extends CNX {
    private $user;
    private $password;
    private $type;
    public function __construct($user,$password,$type) {
        $this->user = $user;
        $this->password = $password;
        $this->type = $type;
    }
    private function checkUser (){
        $sql="SELECT NumAb FROM abonne WHERE NumAb= ? ;";
        $stmt= parent::connect()->prepare($sql);
        $stmt->execute([$this->user]);
        
        $res=$stmt->fetch(PDO::FETCH_ASSOC);
        $stmt=null;

        return $res;
    }
    private function checkEmail (){
        $sql="SELECT email FROM abonne WHERE email= ? ;";
        $stmt= parent::connect()->prepare($sql);
        $stmt->execute([$this->user]);
        $res=$stmt->fetch(PDO::FETCH_ASSOC);
        $stmt=null;
        return $res;
    }
    private function checkPassword (){
        $sql="SELECT Password FROM abonne WHERE NumAb= ? ;";
        $stmt= parent::connect()->prepare($sql);
        $stmt->execute([$this->user]);
        $res=$stmt->fetch(PDO::FETCH_ASSOC);
        $stmt=null;
        return $res;
        }

    private function checklog() {
        if ($this->type === "email") {
            if (!$this->checkEmail()) {
                return "email not exist";
            }else {
                return "false";
            }
        }elseif ($this->type === "username") {
            if (!$this->checkUser()) {
                    return "username not exist";
                }else {
                    return "false";
                }
        }
    }
    public function login() {
        if ($this->checklog() === "false") {
            if (password_verify($this->password,$this->checkPassword()["Password"]) ) {
                return "true";
            }else {
                return "password wrong";
            }
        }else {
            return $this->checklog();
        }
    }

    
}
