<?php
class Employee 
{
    // by using public will make the oop syntax work in the php file
	public $firstName;
	public $lastName;
	public $employeeID;
	public $sSNum;
	public $jobTitle;
	public $startDate;
	public $hourlyWage;
	public $bonusAmt;
		
		//get employee first name

    public function getFirstName()
    {
        return $this->firstName;
    } 

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
		}
		
		//get employee last name

		public function getLastName()
    {
        return $this->lastName;
    } 

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
		}

		//get employee ID

		public function getEmployeeID()
    {
        return $this->employeeID;
    } 

    public function setEmployeeID($employeeID)
    {
        $this->employeeID = $employeeID;
		}

		//get employee social security number

		public function getSSNum()
    {
        return $this->sSNum;
    } 

    public function setSSNum($sSNum)
    {
        $this->sSNum = $sSNum;
		}

		//get employee job title
	
		public function getJobTitle()
    {
        return $this->jobTitle;
    } 

    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
		}

		//get employee start date
	
		public function getStartDate()
    {
        return $this->startDate;
    } 

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
		}

		//get employee hourly wage
	
		public function getHourlyWage()
    {
        return $this->hourlyWage;
    } 

    public function setHourlyWage($hourlyWage)
    {
        $this->hourlyWage = $hourlyWage;
		}

		//get employee bonus amount
	
		public function getBonusAmt()
    {
        return $this->bonusAmt;
    } 

    public function setBonusAmt($bonusAmt)
    {
        $this->bonusAmt = $bonusAmt;
		}
}

?>