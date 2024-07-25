<?php


final class Login extends CNX{
    private $user;
    public function __construct($user) {
        $this->user = $user;
        }
        private function logIn() {
            $sql= "SELECT * FROM abonne WHERE NumAb = ? OR email = ?;";
            $stmt = parent::connect()->prepare($sql);
            $stmt->execute([$this->user,$this->user]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
            
}

public function logUser() {
    if ($this->logIn()) {
        session_start();
        $_SESSION['user_list'] = $this->logIn();
        header('location: ../login.php?login=Success');
        exit;
    }
}
    
}
