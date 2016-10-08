<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
        <p>
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
            <?php
                $wantedGood="sausages rolls";
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
    </body>
</html>