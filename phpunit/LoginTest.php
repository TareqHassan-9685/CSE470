<?php

class PatientTest extends \PHPUnit\Framework\TestCase
{
	
	public function testName()
	{
		$user = new \App\Models\Login;

		$user->setName('Tareq');

		$this->assertEquals($user->getName(), 'Tareq');
	}

    public function testID()
	{
		$user = new \App\Models\Login;

		$user->setID('5');

		$this->assertEquals($user->getID(), '5');
	}

	public function testPass()
	{
		$user = new \App\Models\Login;

		$user->setPass(1234);

		$this->assertEquals($user->getPass(), '1234');

		
	}

    
}



