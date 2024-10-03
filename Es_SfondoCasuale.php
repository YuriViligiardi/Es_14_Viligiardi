<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funzione Sfondo Casuale</title>
</head>
<body>
    <?php
        $lar = rand(50,501);
        $color = sfondoCasuale($lar);
        createDiv($lar, $color);

        function sfondoCasuale($l){
            $c;
            if ($l < 150) {
                $c = "#7FFFD4";
            } elseif ($l >= 150 && $l <= 250) {
                $c = "#1E90FF";
            } else {
                $c = "#0000FF";
            }
            return $c;
        }

        function createDiv($l, $c){
            echo "<div style='background-color:$c; width:" . $l . "px; height:" . $l*2 . "px;'></div>";
        }
    ?>
</body>
</html>