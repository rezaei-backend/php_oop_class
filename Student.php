<?php 
require_once "./User.php";
class Student extends User{
    public $score; 
    public function Set_score($score){
        $this->score = $score;
    }
    public function get_ncode(){
        return $this->ncode;
    }
    public function Get_score(){
        $score= $this->score;
        if ($score > 10 ) {
            return 1;
        }else{
            return 0;
        }
    }
}

$s1 = new Student("sara" , "saraei");
$s1->Set_score(9);
$score = $s1->Get_score();
echo $s1->get_ncode();

?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?=  $s1->get_name_family() ?></h1>

    <h4>نتیجه نمره : </h4>
    <?php 
    if($score){
        echo "قبول شدی";
    }else{
        echo "مردود شدی ";
    }
    ?>
</body>
</html>