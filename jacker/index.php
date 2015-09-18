<?php

$words = array("trap",
"face",
"floor",
"flirt",
"twin",
"boat",
"oxygen",
"human",
"sour",
"curve",
"loaf",
"spoon",
"editor",
"buckle",
"wrist",
"zone",
"grand",
"pain",
"chain",
"heel",
"annual",
"pastor",
"girl",
"exact",
"crow",
"spider",
"entire",
"travel",
"album",
"sexy",
"yell",
"check",
"hazel",
"trojan",
"godly",
"vacuum",
"mate",
"burst",
"senior",
"door",
"last",
"bumble",
"ripe",
"meal",
"evade",
"league",
"ignore",
"horny",
"wind",
"lumber",
"vulgar",
"home",
"goon",
"drop",
"sweat",
"bullet",
"oral",
"device",
"cafe",
"pass",
"funder",
"male",
"core",
"hitch",
"tense",
"demand",
"hydra",
"charm",
"lumber",
"knife",
"pace",
"date",
"amuse",
"grain",
"pride",
"alarm",
"easter",
"wool",
"obese",
"chef",
"cinema",
"racist",
"salt",
"spine",
"dire",
"hour",
"lyric",
"epic",
"frost",
"below",
"circus");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Car jacker word unscrambler</title>

	<style>
		body {background-color:white;}
		p{font-size: 14px; font-family: "Tahoma";}
		input{border-radius:2px;}
		h1{font-size: 30px; font-family: "Tahoma";}
		#theword{font-size: 20px; padding-left: 50px;}
		body{padding-left: 30px;}
		#correct{color:white; font-size: 20px;}
		#correct:hover{color:green; padding-left: 50px;}
	</style>
</head>
<body>
	<h1>The great jacker word unscrambler</h1>
	<p>Practice the unscrambling of all the words you need to know to become a jack-of-all-trades in LS-RP.</p>
	
	<p id="correct">
	<?php
		$nr = rand( 0, count( $words ) - 1 );
		echo( $words[ $nr ] );
	?>
	</p>

	<p id="theword">

	<?php
		echo( str_shuffle( $words[ $nr ] ) );
	?>

	<span id="timer"></span>

	</p>

	<form action="">
		<input autofocus type="text" name="answer">
		<input type="submit" value="Submit" id="answer">
	</form>

	<script>
		$('#answer').click(function() {
	 
	    	location.reload();
	 
		});

		var count=30;

		var counter=setInterval(timer, 1000); //1000 will  run it every 1 second

		function timer()
{
  count=count-1;
  if (count <= 0)
  {
     clearInterval(counter);
     return;
  }

 document.getElementById("timer").innerHTML=count + " secs"; // watch for spelling
}
	</script>
	
</body>
</html>