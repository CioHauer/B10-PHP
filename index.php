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
    if ( isset( $_GET['submit'] ) ) {
    //Get name value from inputs
    $maro = $_GET['maroFirst']; 
    $croi = $_GET['croiFirst']; 
    $belg = $_GET['belgFirst']; 
    $cana = $_GET['canaFirst']; 
    $maro2 = $_GET['maroSecond']; 
    $croi2 = $_GET['croiSecond']; 
    $belg2 = $_GET['belgSecond']; 
    $cana2 = $_GET['canSecond']; 
    $maro3 = $_GET['maroThird']; 
    $croi3 = $_GET['croiThird']; 
    $cana3 = $_GET['canaThird']; 
    $belg3 = $_GET['belgThird'];


    //counter
    $point = array("MORROCO" => 0, "CROATIE" => 0, "CANADA" => 0, "BELGIUM" => 0); 
    $matches = array("MORROCO" => 0, "CROATIE" => 0, "CANADA" => 0, "BELGIUM" => 0);
    $gagnant = array('MORROCO' => 0, 'CROATIE' => 0 , 'CANADA' => 0 , 'BELGIUM' => 0);
    $null = array("MORROCO" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELGIUM" => 0);
    $defaite = array("MORROCO" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELGIUM" => 0);
    $goalfor = array("MORROCO" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELGIUM" => 0);
    $goalsConceded = array("MORROCO" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELGIUM" => 0);

    //add point by counter
    if($maro!="" && $croi!=""){
        $matches["MORROCO"] += 1;
        $matches["CROATIE"] += 1;
        // Store the number of goals scored by each team
        $goalfor["MORROCO"] += $maro;
        $goalfor["CROATIE"] += $croi;
         // Store the number of goals conceded by each team
        $goalsConceded["MORROCO"] += $croi;
        $goalsConceded["CROATIE"] += $maro;
// Store the number of wins, draws, and losses for each team
        if($maro > $croi ){
            $point["MORROCO"] += 3;
            $gagnant["MORROCO"] += 1;
            $defaite["CROATIE"] += 1;

        }
        elseif ($maro < $croi ){
            $point["CROATIE"] += 3;
            $gagnant["CROATIE"] += 1;
            $defaite["MORROCO"] += 1;

        }
        else {
            $point["MORROCO"] += 1;
            $point["CROATIE"] += 1;
            $null["MORROCO"] += 1;
            $null["CROATIE"] += 1;

        }
    }
    
    if($belg!="" && $cana!=""){

        $matches["CANADA"] += 1;
        $matches["BELGIUM"] += 1;
        $goalfor["BELGIUM"] += $belg;
        $goalfor["CANADA"] += $cana;
        $goalsConceded["BELGIUM"] += $cana;
        $goalsConceded["CANADA"] += $belg;

        if($belg > $cana ){
            $point["BELGIUM"] += 3;
            $gagnant["BELGIUM"] += 1;
            $defaite["CANADA"] += 1;
            
        }
        elseif ($belg < $cana ){
            $point["CANADA"] += 3;
            $gagnant["CANADA"] += 1;
            $defaite["BELGIUM"] += 1;
        }
        else {
            $point["BELGIUM"] += 1;
            $point["CANADA"] += 1;
            $null["BELGIUM"] += 1;
            $null["CANADA"] += 1;
        }
    }

    if($maro2!="" && $belg2!=""){

        $matches["MORROCO"] += 1;
        $matches["BELGIUM"] += 1;
        $goalfor["MORROCO"] += $maro2;
        $goalfor["BELGIUM"] += $belg2;
        $goalsConceded["MORROCO"] += $belg2;
        $goalsConceded["BELGIUM"] += $maro2;
        

        if($maro2 > $belg2 ){
            $point["MORROCO"] += 3;
            $gagnant["MORROCO"] += 1;
            $defaite["BELGIUM"] += 1;

        }
        elseif ($maro2 < $belg2 ){
            $point["BELGIUM"] += 3;
            $gagnant["BELGIUM"] += 1;
            $defaite["MORROCO"] += 1;

        }
        else {
            $point["MORROCO"] += 1;
            $point["BELGIUM"] += 1;
            $null["MORROCO"] += 1;
            $null["BELGIUM"] += 1;

        }
    }
    
    if($croi2!="" && $cana2!=""){

        $matches["CANADA"] += 1;
        $matches["CROATIE"] += 1;
        $goalfor["CROATIE"] += $croi2;
        $goalfor["CANADA"] += $cana2;
        $goalsConceded["CROATIE"] += $cana2;
        $goalsConceded["CANADA"] += $croi2;

        if($croi2 > $cana2 ){
            $point["CROATIE"] += 3;
            $gagnant["CROATIE"] += 1;
            $defaite["CANADA"] += 1;
        }
        elseif ($croi2 < $cana2 ){
            $point["CANADA"] += 3;
            $gagnant["CANADA"] += 1;
            $defaite["CROATIE"] += 1;
            
        }
        else {
            $point["CROATIE"] += 1;
            $point["CANADA"] += 1;
            $null["CROATIE"] += 1;
            $null["CANADA"] += 1;
        }
    }

    if($maro3!="" && $cana3!=""){

        $matches["MORROCO"] += 1;
        $matches["CANADA"] += 1;
        $goalfor["MORROCO"] += $maro3;
        $goalfor["CANADA"] += $cana3;
        $goalsConceded["MORROCO"] += $cana3;
        $goalsConceded["CANADA"] += $maro3;

        if($maro3 > $cana3 ){
            $point["MORROCO"] += 3;
            $gagnant["MORROCO"] += 1;
            $defaite["CANADA"] += 1;

        }
        elseif ($maro3 < $cana3 ){
            $point["CANADA"] += 3;
            $gagnant["CANADA"] += 1;
            $defaite["MORROCO"] += 1;

        }
        else {
            $point["MORROCO"] += 1;
            $point["CANADA"] += 1;
            $null["MORROCO"] += 1;
            $null["CANADA"] += 1;

        }
    }
    
    if($belg3!="" && $croi3!=""){

        $matches["CROATIE"] += 1;
        $matches["BELGIUM"] += 1;
        $goalfor["BELGIUM"] += $belg3;
        $goalfor["CROATIE"] += $croi3;
        $goalsConceded["BELGIUM"] += $croi3;
        $goalsConceded["CROATIE"] += $belg3;

        if($belg3 > $croi3 ){
            $point["BELGIUM"] += 3;
            $gagnant["BELGIUM"] += 1;
            $defaite["CROATIE"] += 1;
        }
        elseif ($belg3 < $croi3 ){
            $point["CROATIE"] += 3;
            $gagnant["CROATIE"] += 1;
            $defaite["BELGIUM"] += 1;
        }
        else {
            $point["BELGIUM"] += 1;
            $point["CROATIE"] += 1;
            $null["BELGIUM"] += 1;
            $null["CROATIE"] += 1;
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

    //ceux compteur final en variables
    $Mnul =  $null["MORROCO"];
    $CRnul = $null["CROATIE"];
    $CNnul = $null["CANADA"];
    $Bnul =  $null["BELGIUM"];

    //ceux compteur final en variables
    $Mdef =  $defaite["MORROCO"];
    $CRdef = $defaite["CROATIE"];
    $CNdef = $defaite["CANADA"];
    $Bdef =  $defaite["BELGIUM"]; 

    //ceux compteur final en variables
    $Mgoal =  $goalfor["MORROCO"];
    $CRgoal = $goalfor["CROATIE"];
    $CNgoal = $goalfor["CANADA"];
    $Bgoal =  $goalfor["BELGIUM"];

    //ceux compteur final en variables
    $Mgoals =  $goalsConceded["MORROCO"];
    $CRgoals = $goalsConceded["CROATIE"];
    $CNgoals = $goalsConceded["CANADA"];
    $Bgoals =  $goalsConceded["BELGIUM"];



 
    $diffEQ1 = $Mgoal - $Mgoals ;
    $diffEQ2 = $CRgoal - $CRgoals ;
    $diffEQ3 = $CNgoal - $CNgoals ;
    $diffEQ4 = $Bgoal - $Bgoals ;

    echo "
    <div class='container cont  pt-3 '>
    <table class='table table-bordered border-primary border border-dark'>
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
    </table>
    </div>
    " ;
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
<!-- // Function to generate the ranked table
function generateTable() {
  global $teams;
  // Calculate the total points for each team
  foreach ($teams as $team => $data) {
    $teams[$team]['points'] = $data['wins'] * 3 + $data['draws'];
  }
  // Sort the teams based on their ranking criteria
  uasort($teams, function ($a, $b) {
    // First compare by points
    if ($a['points'] != $b['points']) {
      return $b['points'] - $a['points'];
    }
    // Then compare by goal difference
    if ($a['goals_scored'] - $a['goals_conceded'] != $b['goals_scored'] - $b['goals_conceded']) {
      return ($b['goals_scored'] - $b['goals_conceded']) - ($a['goals_scored'] - $a['goals_conceded']);
    }
    // Then compare by goals scored
    if ($a['goals_scored'] != $b['goals_scored']) {
      return $b['goals_scored'] - $a['goals_scored'];
    }
    // If still tied, use other criteria as defined in the problem statement
    // ...
    // If still tied, use the spirit points as a tiebreaker
    // ...
    // If still tied, consider the teams as equal
    return 0;
  });
  // Output the ranked table
  echo '<table>';
  echo '<tr><th>Rank</ -->



