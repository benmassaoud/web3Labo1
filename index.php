<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion de café</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="container">
        <h1>LABO1 <small class="text-muted">Zakaria Benmassaoud</small></h1>

        <div class="card">
            <h5 class="card-header"></h5>
            <div class="card-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link" id="nav-conso-tab" data-toggle="tab" href="#nav-conso" role="tab"
                            aria-controls="nav-conso" aria-selected="true">Consommation</a>
                        <a class="nav-item nav-link" id="nav-consoJour-tab" data-toggle="tab" href="#nav-consoJour"
                            role="tab" aria-controls="nav-consoJour" aria-selected="false">Conso/jour</a>
                        <a class="nav-item nav-link" id="nav-topConso-tab" data-toggle="tab" href="#nav-topConso" role="tab"
                            aria-controls="nav-topConso" aria-selected="false">Top buveur</a>
                        <a class="nav-item nav-link" id="nav-moyConsoJour-tab" data-toggle="tab" href="#nav-moyConsoJour"
                            role="tab" aria-controls="nav-moyConsoJour" aria-selected="false">Moy. consommée/jour</a>
                        <a class="nav-item nav-link" id="nav-consoProg-tab" data-toggle="tab" href="#nav-consoProg"
                            role="tab" aria-controls="nav-consoProg" aria-selected="false">Conso/programmeur</a>
                        <a class="nav-item nav-link" id="nav-topJour-tab" data-toggle="tab" href="#nav-topJour" role="tab"
                            aria-controls="nav-topJour" aria-selected="false">Top jour</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade" id="nav-conso" role="tabpanel" aria-labelledby="nav-conso-tab">
                        <h5 class="card-title">Afficher le contenu du fichier</h5>
                        <form action="" method="POST">
                            <input type="submit" class="btn btn-primary" name="conso" value="Valider" onclick="return valider(this.name)">
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-consoJour" role="tabpanel" aria-labelledby="nav-consoJour-tab">
                        <h5 class="card-title">Liste de tous les programmeurs qui ont consommé des tasses de café pour
                            une journée donnée</h5>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="selectJour">Choisir un jour</label>
                                <select name="selectJour" class="form-control" id="selectJour">
                                    <option value="Lundi">Lundi</option>
                                    <option value="Mardi">Mardi</option>
                                    <option value="Mercredi">Mercredi</option>
                                    <option value="Jeudi">Jeudi</option>
                                    <option value="Vendredi">Vendredi</option>

                                </select>
                            </div>
                            <input type="submit" class="btn btn-primary" name="consoJour" value="Valider" onclick="return valider(this.name, document.getElementById('selectJour').value)">
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-topConso" role="tabpanel" aria-labelledby="nav-topConso-tab">
                        <h5 class="card-title">Le nom du programmeur qui a consommé le plus de tasses de café</h5>
                        <form action="" method="POST">
                            <input type="submit" class="btn btn-primary" name="topConso" value="Valider" onclick="return valider(this.name)">
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-moyConsoJour" role="tabpanel" aria-labelledby="nav-moyConsoJour-tab">
                        <h5 class="card-title">La moyenne de tasses de café consommés par jour de la semaine</h5>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="selectJourMoyConsoJour">Choisir un jour</label>
                                <select name="selectJourMoyConsoJour" class="form-control" id="selectJourMoyConsoJour">
                                    <option value="Lundi">Lundi</option>
                                    <option value="Mardi">Mardi</option>
                                    <option value="Mercredi">Mercredi</option>
                                    <option value="Jeudi">Jeudi</option>
                                    <option value="Vendredi">Vendredi</option>
                                </select>
                            </div>
                            <input type="submit" class="btn btn-primary" name="moyConsoJour" value="Valider" onclick="return valider(this.name, document.getElementById('selectJourMoyConsoJour').value)">
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-consoProg" role="tabpanel" aria-labelledby="nav-consoProg-tab">
                        <h5 class="card-title">Pour un programmeur donné le nombre de tasses consommées</h5>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="selectProgrammeur">Choisir un programmeur</label>
                                <select name="selectProgrammeur" class="form-control" id="selectProgrammeur">
                                    <option value="Gilbert">Gilbert</option>
                                    <option value="Wally">Wally</option>
                                    <option value="Edgar">Edgar</option>
                                    <option value="Eugene">Eugene</option>
                                    <option value="Josephine">Josephine</option>
                                    <option value="Clarence">Clarence</option>
                                </select>
                            </div>
                            <input type="submit" class="btn btn-primary" name="consoProg" value="Valider" onclick="return valider(this.name, document.getElementById('selectProgrammeur').value)">
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-topJour" role="tabpanel" aria-labelledby="nav-topJour-tab">
                        <h5 class="card-title">Le jour de la semaine qui a la moyenne de consommation la plus élevée</h5>
                        <form action="" method="POST">
                            <input type="submit" class="btn btn-primary" name="topJour" value="Valider" onclick="return valider(this.name)">
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="contenu"></div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="js/app.js"></script>

</body>

</html>