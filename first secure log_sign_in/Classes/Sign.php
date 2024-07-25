<?php


class Sign extends CNX {
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

    private function insertuser($username,$password,$email,$name){
        $sql = "INSERT INTO abonne  VALUES (?,?,?,?)";
        $option=[
            'cost' => 12
        ];
        $hashedpwd= password_hash($password, PASSWORD_BCRYPT,$option);
        $stmt = parent::connect()->prepare($sql);
        $stmt->execute([$username,$email,$name,$hashedpwd]);
        $stmt=null;

    }


    


    public function signUser(){
        


        $this->insertuser($this->username,$this->password,$this->email,$this->name);

    }

}