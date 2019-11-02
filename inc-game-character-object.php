<?php
class GameCharacter 
{
    // by using public will make the oop syntax work in the php file
    public $playerName;
	public $score;
		
		//get and set player name

    public function getPlayerName()
    {
        return $this->playerName;
    } 

    public function setPlayerName($name)
    {
        $this->playerName = $name;
		}
		
		//get and set score

    public function getScore()
    {
        return $this->score;
    } 

    public function setScore($score)
    {
        $this->score = $score;
    }
}

?>