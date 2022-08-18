<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        //1) Evaluation problem.

        function evaluate($name,$attendence,$hygiene,$rating){
            if($attendence<80||$hygiene<50||$rating<2){
                return "$name  , You are fired from the Rojan Krina Passal !";
            }
            else{
                return " Not Fired for now.";
            }
        }

        $result =  evaluate("Kusal Karki",20,70,3);

        echo $result;

        //Output : Kusal Karki , You are fired from the Rojan Krina Passal !


    ?>
    
</body>
</html>
