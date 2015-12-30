<?php 
	include "config.php";
?>
<!doctype html>
<html>
<head>
   <title>Bounus BlackJack</title>
   <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>
  <div class="gameStage" id="gameStage">
    <div class="chipContainer">
	    <span class="chipIcon chipFive fristLeft" data-chip="5"></span>
	    <span class="chipIcon chipTen" data-chip="10"></span>
	    <span class="chipIcon chipTwentyFive" data-chip="25"></span>
	    <span class="chipIcon chipFifty" data-chip="50"></span>
	    <span class="chipIcon chipHundread" data-chip="100"></span>
	</div>

	<div class="chip-placed-area" id="chipPlacedArea"></div>
	
	<div class="controllIcon newGame"></div>
	<div class="controllIcon deal"></div>
	<div class="controllIcon undo"></div>
	<div class="controllIcon stand"></div>
	
	<div class="controllIcon hit"></div>
	<div class="controllIcon rebet"></div>
	
	<div class="controllIcon double"></div>
	<div class="controllIcon clearChip"></div>
	<div class="controllIcon doubleRebet"></div>
</div>

<script type="text/javascript">
	var socketUrl = "<?php echo $socketUrl?>";
</script>

<script src="bower_components/jQuery/dist/jquery.min.js"></script>
<script src="bower_components/underscore/underscore-min.js"></script>


<script src="<?php echo $socketUrl."/socket.io/socket.io.js"?>"></script>

<script src="js/helpers/animation.js"></script>
<script src="js/game.js"></script>
<script src="js/game.cards.js"></script>
<script src="js/game.chip.js"></script>
<script src="js/game.state.js"></script>
<script src="js/game.notifications.js"></script>
<script src="js/game.socket.js"></script>

</body>
</html>