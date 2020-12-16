<?php
define('ID',2021);
$fname='Sudipta';
$lname='Adak';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo ("My name is $fname $lname"." ".ID);
    ?></h1>
    <p>INDEX ARRAYS</p>
    <?php
        $arr1=['Sudi','Ryan','Kev'];
        $arr2=array('Ken','Ripp','Krii');
        print_r($arr1);
        $arr1[2]='ROBIN';
        print_r($arr1);
        $arr3=array_merge($arr1,$arr2);
        print_r($arr3);

    ?>
        <p>ASSOCIATIVE ARRAYS</p>
        <?php
            $asso_arr=['Pattinson'=>'Bowler','Warner'=>'Batsmen'];
            print_r($asso_arr);
            print_r($asso_arr['Warner']);
            $asso_arr['MaxWell']='All-Rounder';
            print_r($asso_arr);
            echo(count($asso_arr));
        ?>
        <p>FUNCTION</p>
        <?php
            function sayHello(){
                echo ('HELLO FROM sayHEllo Function');
            }
            sayHello();

            function add($a,$b){
                $c=$a+$b;
                return "ADDITION RESULT IS $c";
            }
            echo(add(5,6));
        ?>
</body>
</html>