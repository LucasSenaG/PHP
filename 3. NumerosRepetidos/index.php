<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3. Números Repetidos</title>
</head>
<body>
    <?php
        $array[20] = null;
        for ($i = 0; $i < 20 ; $i++){
            $array[$i] = rand(1, 10);
            echo $array[$i] . '<br>';
        }

        $array = array_unique(array_diff_assoc($array, array_unique($array)));
           
        echo "<br><br>Números repetidos:<br>";
        foreach($array as $valor){
        echo $valor . "<br>";}
    ?>
</body>
</html>