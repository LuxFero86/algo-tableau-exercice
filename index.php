<?php
    $yoann =  [12, 15, 8, 6, 20, 19];
    $bulletinScolaire = [
        "math" => 15,
        "français" => 12,
        "histoire-géo" => 8,
        "physique-chimie" => 18
    ];
    $noteEleve = [
        "yoann" => [12, 15, 8, 6, 20, 19],
        "jeff" => [9, 5, 17, 16, 12, 13],
        "mathieu" => [20, 18, 8, 4, 15, 16]
    ];

    foreach($yoann as $note){
        $note -= 2;
    }

    function calculMoyenne($notes){
        $somme = 0;
        foreach($notes as $key => $value){
            $somme += $value;
        }
        return round($somme / sizeof($notes), 1);
    }

    function moyenneGenerale($notes){
        $somme = 0;
        foreach($notes as $key => $value){
            $somme += calculMoyenne($value);
        }
        return round($somme / sizeof($notes), 1);
    }

    include "./header.php";
?>
    <main>
        <h1>Notes de Yoann</h1>
        <ul>
            <?php for($i = 0; $i < sizeof($yoann); $i++){
                echo "<li>Note ".($i+1)." : $yoann[$i]</li>";
            } ?>
        </ul>
        <h1>Bulletin scolaire de Yoann</h1>
        <ul>
            <?php foreach ($bulletinScolaire as $key => $value){
                echo "<li>$key : $value</li>";
            }
            echo "<br><li>Moyenne générale :".calculMoyenne($yoann)."</li>"; ?>
        </ul>
        <h1>Moyenne de la classe</h1>
        <ul>
            <?php foreach ($noteEleve as $key => $value){
                echo "<li>$key : ".calculMoyenne($value)."</li>";
            }
            echo "<br><li>Moyenne générale :".moyenneGenerale($noteEleve)."</li>"; ?>
        </ul>
        <h1>Notes max et min</h1>
        <ul>
            <?php foreach ($noteEleve as $key => $value){
                echo "<li>$key : max = ".max($value)." / min = ".min($value)."</li>";
            } ?>
        </ul>
    </main>
<?php include "./footer.php"; ?>