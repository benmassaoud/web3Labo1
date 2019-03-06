<?php
    //Exemple de tableau echo $data[i][j]
    $data = array();
    //Fonction qui récupère les données du fichier
    function importer($fichier){
        if ($fh = fopen($fichier, 'r')) {
            while (!feof($fh)) {
                $ligne = explode(";",fgets($fh));
                global $data;
                array_push($data,$ligne);
            }
            fclose($fh);
        }
    }
    //Importer le fichier programmeurs.txt
    importer('data/programmeurs.txt');

    function listeProgrammeursJour($array, $jour){
        $resultat = array();
        for ($i=0; $i < count($array); $i++) { 
            if ($array[$i][1]===$jour) {
                array_push($resultat,$array[$i]);
            }
        }
        return $resultat;
    }

    //Top consommateur
    function topBuveur($array){
        $resultat= array();
        for ($i=0; $i < count($array); $i++) {
            if (isset($resultat[$array[$i][0]]))
                $resultat[$array[$i][0]] += (int)$array[$i][2];
            else
                $resultat[$array[$i][0]] = (int)$array[$i][2];
        }
        return $resultat;
    }

    //Fonction qui contruit un tableau
    function buildTable($array){
        echo "<table class=\"table table-hover\"><thead class=\"thead-dark\"><tr><th>Nom</th><th>Jour</th><th>Tasses</th></tr></thead>";
        for ($i=0; $i < count($array); $i++) { 
            echo "<tr>";
            foreach ($array[$i] as $element) 
                echo "<td>".$element."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    function moyenneConsommationJour($array, $param){
        $compteur=0; $somme=0;
        for ($i=0; $i < count($array); $i++) 
            if ($array[$i][1]===$param) {
                $somme+=(int)$array[$i][2];
                $compteur++;
            }
        return round($somme/$compteur,2);
    }

    //Selon le bouton qui a été clique on affiche l'info
    if (isset($_GET['form'])) {
        switch ($_GET['form']) {
            case 'conso':
                buildTable($data);
                break;
            case 'consoJour':
                buildTable(listeProgrammeursJour($data, $_GET['param']));
                break;
            case 'topConso':
                //print_r(topBuveur($data));
                $resultat = topBuveur($data);
                arsort($resultat);
                echo '<ol class="list-group">';
                foreach ($resultat as $key => $value) {
                    if ($value === reset($resultat)) 
                        echo '<strong><li class="list-group-item d-flex justify-content-between align-items-center">Top Buveur! : '.$key.' <span class="badge badge-success badge-pill">'.$value.' tasses</span></li></strong>';
                    else
                        echo '<li class="list-group-item d-flex justify-content-between align-items-center">'.$key.' <span class="badge badge-secondary badge-pill">'.$value.' tasses</span></li>';
                }
                echo '</ol>';
                //echo array_search(max(topBuveur($data)),topBuveur($data));
                break;
            case 'moyConsoJour':
                echo "<div class='alert alert-success' role='alert'><h5>La moyenne de consommation pour ".$_GET['param']." est de ".moyenneConsommationJour($data,$_GET['param'])." tasses</h5></div>";
                break;
            case 'consoProg':
                $resultat = topBuveur($data);
                echo "<div class='alert alert-success' role='alert'><h5>Le nombre de tasses consommées par ".$_GET['param']." est ".topBuveur($data)[$_GET['param']]." tasses</h5></div>";
                break;
            case 'topJour':
                $semaine = array('Lundi','Mardi','Mercredi','Jeudi','Vendredi');
                $topJourMoyenne = 0;
                $topJour;
                for ($i=0; $i < count($semaine); $i++) { 
                    if (moyenneConsommationJour($data, $semaine[$i]) > $topJourMoyenne) {
                        $topJourMoyenne = moyenneConsommationJour($data,$semaine[$i]);
                        $topJour = $semaine[$i];
                    }
                    
                }

                echo "<div class='alert alert-success' role='alert'> <h5>".$topJour." avec une moyenne de ".$topJourMoyenne." tasses</h5> </div>";
                //echo "<h5>".$topJour." avec une moyenne de ".$topJourMoyenne." tasses</h5>";
                break;
        }
    }
?>