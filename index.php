<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
        <p>
            <br>if else statement<br>
            <?php
                /* If else statement*/
                $myage=24;
               if($myage<=16)
               {
                   echo "buy specs";
               }
                elseif($myage>=18 and $myage<21)
                {
                    echo "buy mugs";
                }
                elseif($myage>=21)
                {
                    print "sausage rolls";
                    print "Bouyachaka";                }
            ?>
        </p>
        <p>
            <br>switch statement <br>
            <?php
                /* switch statement */
                $wantedGood="sausage rolls";
                switch($wantedGood){
                    case "specs":
                        print "you can buy specs bouyachaka";
                        break;
                    case "mugs":
                        print "You have to be 18 to buy mugs bouyachaka";
                        break;
                    case "sausage rolls":
                        print "You have to be 21 to buy sausages rolls bouyachaka";
                        break;
                    default:
                        print "bad luck bouyachaka";
                }
            ?>
        </p>
        <p>
            <br>array exercise <br>
            <?php
                /*  array exercise*/
            $provisionActivity=array("specs","mugs","sausage rolls");
            foreach($provisionActivity as $x){
                print("<p>$x</p>");
            }
            $provisionActivity[1]="hugs";
            unset($provisionActivity[2]);

            foreach($provisionActivity as $x){
                print("<p>$x</p>");
            }
            ?>
        </p>
        <p>
            <br>for loop exercise <br>
            <?php
                /* for loop exercise */
                for($i=2;$i<31;$i++){
                    if($i%4==0){
                        print "On the $i of the month specs and sausage rolls are available<br>";
                    }elseif($i%3==0){
                        print "On the $i of the month mugs are available bouyachaka<br>";
                    }elseif ($i%2==0){

                        print "On the $i of the month specs are available bouyachaka<br>";
                    }else{
                        print "On the $i of the month no products are available bouyachaka<br>";
                    }
                }
            ?>
        </p>
        <p>

            <br> while loop exercise <br>
            <?php

            /* while loop exercise
            $i=0;
            $mugs=7;
            $sausage_rolls=7;
            $specs=7;
            do{
            $i++;
            $todaygood = rand(0,2);
             /*
                switch case 0/1/2 -> produit - 1

            }while($mugs!=0 and $specs!=0 and $sausage_rolls!=0 or $i==30)
            */
            ?>
        </p>

        <p>
            <br> array exercise 2 <br>
            <?php
                $arra=array("a","n","y","t","g","l","z","i","h","u","r");
                sort($arra);
                $value=rand(0,count($arra));
                $name=$arra[$value];
                print strtoupper($name);
                print "$name win all of the specs";
                unset($arra[$value]);
                $value=rand(0,count($arra));
                $name=$arra[$value];
                print strtoupper($name);
                print "$name win all of the mugs";
                unset($arra[$value]);
                $value=rand(0,count($arra));
                $name=$arra[$value];
                print strtoupper($name);
                print "$name win all of the sausage rolls";
                unset($arra[$value]);

            ?>
        </p>



    </body>
</html>