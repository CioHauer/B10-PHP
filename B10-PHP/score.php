?>
<form action="">
<?php

$matches = array(
  array("team1" => "BELGIUM", "team2" => "CANADA", "team1_score" => $_POST['belgFirst'], "team2_score" => $_POST['canaFirst']),
  array("team1" => "CROATIA", "team2" => "MOROCCO", "team1_score" => $_POST['croiFirst'], "team2_score" => $_POST['maroFirst']),
  array("team1" => "CROATIA", "team2" => "CANADA", "team1_score" => $_POST['croiSecond'], "team2_score" => $_POST['canSecond']),
  array("team1" => "MOROCCO", "team2" => "BELGIUM", "team1_score" => $_POST['maroSecond'], "team2_score" => $_POST['belgSecond']),
  array("team1" => "MOROCCO", "team2" => "CANADA", "team1_score" => $_POST['maroThird'], "team2_score" => $_POST['canaThird']),
  array("team1" => "BELGIUM", "team2" => "CROATIA", "team1_score" => $_POST['belgThird'], "team2_score" => $_POST['croiThird']),
);

function sortByScore($a, $b) {
    if ($a['team1_score'] == $b['team1_score']) {
        return 0;
    }
    return ($a['team1_score'] > $b['team1_score']) ? -1 : 1;
}

usort($matches, 'sortByScore');

$counter = 1;

foreach ($matches as $match) {
    ?>
<div class="container cont mt-5" >
    <div class="row">
        <h2 class="mb-4 mt-4">PARTIDA <?php echo $counter; ?></h2>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="images/<?php echo strtolower($match['team1']); ?>.png" alt="Flag">
            <p><?php echo $match['team1']; ?></p>
    </div>
    <div class="col-sm-4 d-flex justify-content-evenly score">
        <p><?php echo $match['team1_score']; ?></p>
       
        <input class="input-sm" type="number"   name="<?php echo strtolower($match['team1_score']); ?>">
            <h3 class="d-flex align-items-center">vs</h3>
        <input type="number"  name="<?php echo strtolower($match['team2_score']); ?>">
        <p><?php echo $match['team2_score']; ?></p>
    </div>
    <div class="col-sm-4 d-flex justify-content-evenly">
        <p><?php echo $match['team2']; ?></p>
        <img src="images/<?php echo strtolower($match['team2']); ?>.png" alt="<?php echo $match['team2']; ?> Flag">
    </div>
</div>
</div>
<?php $counter++; } ?>
</form>
