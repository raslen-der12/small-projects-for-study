<?PHP



final class Cntrl{
    private $nom;
    private $pre;
    private $ddn;
    private $gov;
    private $cdp;
    private $adr;
    private $usn;
    private $mdp;
    private $rpw;
    private $dom;
    private $atd;

    public function __construct($nom, $pre, $ddn, $gov,$cdp, $adr, $usn, $mdp, $rpw, $dom, $atd)
    {
        $this->nom = $nom;
        $this->pre = $pre;
        $this->ddn = $ddn;
        $this->gov = $gov;
        $this->cdp = $cdp;
        $this->adr = $adr;
        $this->usn = $usn;
        $this->mdp = $mdp;
        $this->rpw = $rpw;
        $this->dom = $dom;
        $this->atd = $atd;
    }
    private function Vempty() {
        if (!empty($this->nom) &&  !empty($this->pre) &&  !empty($this->ddn)&&  !empty($this->gov) && !empty($this->cdp) &&  !empty($this->adr) &&  !empty($this->usn) &&  !empty($this->mdp) &&  !empty($this->rpw) &&  !empty($this->dom)) {
            return "";
        }else {
            return "false";
        }
    }
    private function Vnom() {
        if (preg_match('/^[a-zA-Z]+$/', $this->nom)) {
            return "";
            }else {
                return "invalid nom ";
            }
                

        
    }
    private function Vpre() {
        if (preg_match('/^[a-zA-Z]+$/', $this->pre)) {
            return "";
            }else {
                return "invalid prenom ";
            }
                

        
    }
    private function Vddn() {
        if (preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $this->ddn)) {
            $date = new DateTime($this->ddn);
            $year = $date->format('Y');                
            $today = strtotime(date("Y-m-d"));
            $fyear = date('Y', $today);
            if ($fyear - $year <12) {
                return "age minimal 12";
            }else {
                return "";
            }
        }else {
            return "invalid date";
            }
        
    }

    private function Vcdp() {
        if (preg_match('/^[0-9]{4}$/', $this->cdp)) {
            return "";
        }else {
            return "code postale 4 chiffre";
        }
        
    }
    private function Vpwd() {
        if ($this->mdp === $this->rpw) {
            return "";
            }
        else {
            return "comfirmation incorrect";
        }
    }
    public function validation() {
        if ($this->Vempty()=== "" && $this->Vnom()=== ""&& $this->Vpre()=== ""&& $this->Vddn()=== "" && $this->Vcdp()=== ""&& $this->Vpwd()=== "") {
            return [];
        }
        if ($this->Vempty()==="false") {
            return "false";
        }else {
            return ["Errnom"=>$this->Vnom(),"Errpre"=>$this->Vpre(),"Errddn"=>$this->Vddn(),"Errcdp"=>$this->Vcdp(),"Errpwd"=>$this->Vpwd()];
        }
    }

}


