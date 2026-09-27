<?php 

class User {
    public $name;
    public $family;
    private $ncode = "1234";
    private $password;

    public function __construct($name , $family){
        $this->name = $name;
        $this->family = $family;
    }

    public function get_name_family(){
        
        return $this->name . " " . $this->family;
    }

    public function __destruct()
    {
        echo "ncode : " . $this->ncode;
    }

}

$u1=new User("ali" , "abbasi");
// echo $u1->get_name_family(); 
echo $u1->name;
// echo $u1->ncode;
echo "<br>";
// $u2=new User();
// $u2->set_name("ali");
// $u2->set_family("aliei");
// echo $u2->get_name_family(); 