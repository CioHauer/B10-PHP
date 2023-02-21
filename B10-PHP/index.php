<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>FIFA World Cup </title>
</head>
<body>
<nav class="navbar  mb-5">
  <div class="container d-flex justify-content-start gap-5">
    <a class="navbar-brand">FIFA World Cup</a>
    <a class="navbar-brand">CLACIFICACCION</a>
  
  </div>
</nav>
<form action="">
<div class="container cont mt-5" >
    <div class="row">
        <h2 class="mb-4 mt-4">PARTIDA 1</h2>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="images/Belgium.png" alt="">
            <h4 class="d-flex align-items-center">BELGIUM</h4>
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <input class="input-sm" type="number"   name="belgFirst">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="number"  name="canaFirst">
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <h4 class="d-flex align-items-center">CANADA</h4>
            <img src="images/canada.png" alt="" >
        </div>
    </div>
</div>
<div class="container cont" >
    <div class="row">
        <h2 class="mb-4 mt-4">PARTIDA 2</h2>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="images/croatia.png" alt=""> 
            <h4 class="d-flex align-items-center">CROATIA</h4>
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <input type="number"   name="croiFirst">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="number"  name="maroFirst">
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <h4 class="d-flex align-items-center">MOROCCO</h4>
            <img src="images/morroco.png" alt="" >
        </div>
    </div>
</div>
<div class="container cont">
    <div class="row">
        <h2 class="mb-4 mt-4">PARTIDA 3</h2>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="images/croatia.png" alt=""> 
            <h4 class="d-flex align-items-center">CROATIA</h4>
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <input type="number"  name="croiSecond">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="number"  name="canSecond">
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <h4 class="d-flex align-items-center">CANADA</h4>
            <img src="images/canada.png" alt="" >
        </div>
    </div>
</div>
<div class="container cont">
    <div class="row">
        <h2 class="mb-4 mt-4">PARTIDA 4</h2>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="images/morroco.png" alt=""> 
            <h4 class="d-flex align-items-center">MOROCCO</h4>
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <input type="number"   name="maroSecond">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="number"  name="belgSecond">
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <h4 class="d-flex align-items-center">BELGIUM</h4>
            <img src="images/belgium.png" alt="" >
        </div>
    </div>
</div>
<div class="container cont">
    <div class="row">
        <h2 class="mb-4 mt-4">PARTIDA 5</h2>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="images/morroco.png" alt=""> 
            <h4 class="d-flex align-items-center">MOROCCO</h4>
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <input type="number"   name="maroThird">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="number"  name="canaThird">
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <h4 class="d-flex align-items-center">CANADA</h4>
            <img src="images/canada.png" alt="" >
        </div>
    </div>
</div>
<div class="container cont">
    <div class="row">
        <h2 class="mb-4 mt-4">PARTIDA 6</h2>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="images/belgium.png" alt="">
            <h4 class="d-flex align-items-center">BELGIUM</h4>
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <input type="number"   name="belgThird">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="number"  name="croiThird">
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <h4 class="d-flex align-items-center">CROATIA</h4>
            <img src="images/croatia.png" alt="" >
        </div>
    </div>
</div>

<input id="btn1" type="submit" name='submit' class="d-grid gap-2 col-3 mx-auto mt-5 mb-5 justify-content-center" value="Simulate">
</form>


<?php
    if (isset($_GET['submit'])) {
        $teams = ["MORROCO", "CROATIE", "BELGIUM", "CANADA"];
    // the arrays are filled with 0 values for each team using the array_fill_keys function
         $point = array_fill_keys($teams, 0);
        $matches = array_fill_keys($teams, 0);
       $gagnant= array_fill_keys($teams, 0);
        $null = array_fill_keys($teams, 0);
        $defaite = array_fill_keys($teams, 0);
        $goalfor = array_fill_keys($teams, 0);
        $goalsAgainst = array_fill_keys($teams, 0);
        
        $inputs = [
            // arrays that store each team's data
            ["maroFirst", "croiFirst", "MORROCO", "CROATIE"],
            ["belgFirst", "canaFirst", "BELGIUM", "CANADA"],
            ["maroSecond", "belgSecond", "MORROCO", "BELGIUM"],
            ["croiSecond", "canSecond", "CROATIE", "CANADA"],
            ["maroThird", "canaThird", "MORROCO", "CANADA"],
            ["croiThird", "belgThird", "CROATIE", "BELGIUM"],
        ];
        
        foreach ($inputs as $input) {
            $score1 = isset($_GET[$input[0]]) ? $_GET[$input[0]] : "";
            $score2 = isset($_GET[$input[1]]) ? $_GET[$input[1]] : "";
            
            if ($score1 !== "" && $score2 !== "") {
                $team1 = $input[2];
                $team2 = $input[3];
                
                $matches[$team1]++;
                $matches[$team2]++;
                
                $goalfor[$team1] += $score1;
                $goalfor[$team2] += $score2;
                
                $goalsAgainst[$team1] += $score2;
                $goalsAgainst[$team2] += $score1;
                
                if ($score1 > $score2) {
                     $point[$team1] += 3;
                   $gagnant[$team1]++;
                    $defaite[$team2]++;
                } else if ($score1 < $score2) {
                     $point[$team2] += 3;
                   $gagnant[$team2]++;
                    $defaite[$team1]++;
                } else {
                     $point[$team1]++;
                     $point[$team2]++;
                    $null[$team1]++;
                    $null[$team2]++;
                }
            }
        }
    
    $Mmat = $matches["MORROCO"] ;
    $CRmat = $matches["CROATIE"] ;
    $CAmat = $matches["CANADA"] ;
    $Bmat = $matches["BELGIUM"] ;
    
    $Mpts =  $point["MORROCO"];
    $CRpts =  $point["CROATIE"];
    $CNpts =  $point["CANADA"];
    $Bpts =  $point["BELGIUM"];

    $Mgan =  $gagnant["MORROCO"];
    $CRgan =  $gagnant["CROATIE"];
    $CNgan =  $gagnant["CANADA"];
    $Bgan=  $gagnant["BELGIUM"];

    $Mnul =  $null["MORROCO"];
    $CRnul = $null["CROATIE"];
    $CNnul = $null["CANADA"];
    $Bnul =  $null["BELGIUM"];

    $Mdef =  $defaite["MORROCO"];
    $CRdef = $defaite["CROATIE"];
    $CNdef = $defaite["CANADA"];
    $Bdef =  $defaite["BELGIUM"]; 

    $Mgoal =  $goalfor["MORROCO"];
    $CRgoal = $goalfor["CROATIE"];
    $CNgoal = $goalfor["CANADA"];
    $Bgoal =  $goalfor["BELGIUM"];

    $Mgoals =  $goalsAgainst["MORROCO"];
    $CRgoals = $goalsAgainst["CROATIE"];
    $CNgoals = $goalsAgainst["CANADA"];
    $Bgoals =  $goalsAgainst["BELGIUM"];

    $diffEQ1 = $Mgoal - $Mgoals ;
    $diffEQ2 = $CRgoal - $CRgoals ;
    $diffEQ3 = $CNgoal - $CNgoals ;
    $diffEQ4 = $Bgoal - $Bgoals ;

        
        echo <<<HTML
        <div class="container pt-3">
            <table class="table table-bordered border-dark">
                <tr>
                    <th>Selección</th>
                    <th>PTS.</th>
                    <th>PAR.</th>
                    <th>GAN.</th>
                    <th>EMP.</th>
                    <th>PER.</th>
                    <th>G.F.</th>
                    <th>G.C.</th>
                    <th>+/-</th>
                </tr>
                <tr>
                    <td>MOROCCO</td>
                    <td>$Mpts</td>
                    <td>$Mmat</td>
                    <td>$Mgan</td>
                    <td>$Mnul</td>
                    <td>$Mdef</td>
                    <td>$Mgoal</td>
                    <td>$Mgoals</td>
                    <td>$diffEQ1</td>
                </tr>
                <tr>
                    <td>CROATIA</td>
                    <td>$CRpts</td>
                    <td>$CRmat</td>
                    <td>$CRgan</td>
                    <td>$CRnul</td>
                    <td>$CRdef</td>
                    <td>$CRgoal</td>
                    <td>$CRgoals</td>
                    <td>$diffEQ2</td>
                </tr>
                <tr>
                    <td>BELGIUM</td>
                    <td>$Bpts</td>
                    <td>$Bmat</td>
                    <td>$Bgan</td>
                    <td>$Bnul</td>
                    <td>$Bdef</td>
                    <td>$Bgoal</td>
                    <td>$Bgoals</td>
                    <td>$diffEQ4</td>
                </tr>
                <tr>
                    <td>CANADA</td>
                    <td>$CNpts</td>
                    <td>$CAmat</td>
                    <td>$CNgan</td>
                    <td>$CNnul</td>
                    <td>$CNdef</td>
                    <td>$CNgoal</td>
                    <td>$CNgoals</td>
                    <td>$diffEQ3</td>
                </tr>
            </table>
        </div>
        HTML;    
}

?>

<style>
    body {
    background-color: #00ffff54;
}
    nav.navbar.mb-5 {
    background-color: #ffc107;
}
.container {
    width: 76%;
}
h2.mb-4.mt-4 {
    text-align: center;
    background-color: #303f9f5e;
}
   .col-sm-4 input {
    width: 4.5em !important;
    border-radius: 12px;
    background-color: #e0f7fa;
    padding: 0 0.8em;
}
    img{
        width: 3.5rem !important
    }
    input#btn1 {
    font-size: 1.2em;
    color: black;
    background-color: mediumseagreen;
    padding: 0.6em 1em;
    font-weight: 600;
    border-radius: 12px;
    border: 2px solid forestgreen;
}
</style>
</body>
</html>
