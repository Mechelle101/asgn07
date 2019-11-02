<!DOCTYPE html>
<!--Author:  Mechelle
		Date:		 10/30
		File:		 software-order.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>Game Character</title>
	<link href="../css/styles.css" rel="stylesheet">
</head>

<body>
	<h1>Game Character</h1>
<?php

include ("inc-game-character-object.php");

$name1 = $_POST['name1'];
$name2 = $_POST['name2'];

$score1 = $_POST['score1'];
$score2 = $_POST['score2'];

$gameCharacter1  = new GameCharacter();
$gameCharacter2  = new GameCharacter();

$gameCharacter1->setPlayerName($name1);
$gameCharacter2->setPlayerName($name2);

$gameCharacter1->setScore($score1);
$gameCharacter2->setScore($score2);
	
	// compares the two scores and displays the game character with the highest score.
	print("<table>");
	if ($gameCharacter1->score > $gameCharacter2->score)
	{
		print("<tr><td>Player 1:</td><td>".$gameCharacter1->getPlayerName($name1)."</td></tr>
		<tr><td>Score:</td><td>".$gameCharacter1->getScore($score1)."</td></tr>");
	}
	else
	{
	print("<tr><td>Player 2:</td><td>".$gameCharacter2->getPlayerName($name2)."</td></tr>
	<tr><td>Score:</td><td>".$gameCharacter2->getScore($score2)."</td></tr>");		
	}	
	print("</table>");
		
?>
</body>
</html>