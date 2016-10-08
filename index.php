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

            $provisionActivity=array("specs","mugs","sausage rolls");
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
                    if($i%2==0){
                        print "On the $i of the month specs are available bouyachaka<br>";
                    }elseif($i%3==0){
                        print "On the $i of the month mugs are available bouyachaka<br>";
                    }elseif ($i%4==0){
                        print "On the $i of the month specs and sausage rolls are available<br>";
                    }else{
                        print "On the $i of the month no products are available bouyachaka<br>";
                    }
                }
            ?>
        </p>
    </body>
</html>