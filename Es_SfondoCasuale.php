<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funzione Sfondo Casuale</title>
</head>
<body>
    <?php
        function sfondoCasuale($lar){
            $c;
            if ($lar < 150) {
                $c = "#7FFFD4";
            } elseif ($lar >= 150 && $lar <= 250) {
                $c = "#1E90FF";
            } else {
                $c = "#0000FF";
            }
            return $c;
        }

        function createDiv($lar, $c){
            echo "";
        }
    ?>
</body>
</html>