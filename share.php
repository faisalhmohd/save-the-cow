
<?php
$score = $_GET["score"];
?>
<html>
<head>
<title>Share Your Score | The Ruchi Game </title>
<meta property="og:title" content="I have just scored <?php echo $score;?>!"/>
<meta property="og:image" content="http://theruchigame.com/images/sharepic.png"/>
<meta property="og:site_name" content="The Ruchi Game"/>
<meta property="og:description" content="<?php echo $score;?> is my new score on Save The Cow, try beating my new score! Also get a chance to win exciting prizes."/> 
</head>
<body>
<meta http-equiv="refresh" content="0;URL=http://theruchigame.com" />
</body>
</html>
