<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
        <p>
            <?php
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
                }
            ?>
        </p>

    </body>
</html>