<?php

class RoomBookTest extends \PHPUnit\Framework\TestCase
{
	
	
	

	public function testTitle()
	{
		$user = new \App\Models\RoomBook;

		$user->setTitle('Mr.');

		$this->assertEquals($user->getTitle(), 'Mr.');
	}

    public function testfname()
	{
		$user = new \App\Models\RoomBook;

		$user->setfname('Tareq');

		$this->assertEquals($user->getfname(), 'Tareq');
	}

	public function testlname()
	{
		$user = new \App\Models\RoomBook;

		$user->setlname('Hassan');

		$this->assertEquals($user->getlname(), 'Hassan');

		
	}
	
	public function testEmail()
	{
		$user = new \App\Models\RoomBook;

		$user->setEmail('ab@gmail.com');

		$this->assertEquals($user->getEmail(), 'ab@gmail.com');

		
	}
	
	public function testnat()
	{
		$user = new \App\Models\RoomBook;

		$user->setnat('Bangladesh');

		$this->assertEquals($user->getnat(), 'Bangladesh');

		
	}
	
	
	public function testcountry()
	{
		$user = new \App\Models\RoomBook;

		$user->setcountry('Bangladesh');

		$this->assertEquals($user->getcountry(), 'Bangladesh');

		
	}
	
	public function testphone()
	{
		$user = new \App\Models\RoomBook;

		$user->setphone('013554466');

		$this->assertEquals($user->getphone(), '013554466');

		
	}
	
	public function testtroom()
	{
		$user = new \App\Models\RoomBook;

		$user->settroom('Deluxe Room');

		$this->assertEquals($user->gettroom(), 'Deluxe Room');

		
	}
	
	public function testnroom()
	{
		$user = new \App\Models\RoomBook;

		$user->setnroom('1');

		$this->assertEquals($user->getnroom(), '1');

		
	}
	
	public function testbed()
	{
		$user = new \App\Models\RoomBook;

		$user->setbed('Double');

		$this->assertEquals($user->getbed(), 'Double');

		
	}
	
	public function testmeal()
	{
		$user = new \App\Models\RoomBook;

		$user->setmeal('Full Board');

		$this->assertEquals($user->getmeal(), 'Full Board');

		
	}
	
	
	public function testcin()
	{
		$user = new \App\Models\RoomBook;

		$user->setcin('2021-09-26');

		$this->assertEquals($user->getcin(), '2021-09-26');

		
	}
	
	public function testcout()
	{
		$user = new \App\Models\RoomBook;

		$user->setcout('2021-09-29');

		$this->assertEquals($user->getcout(), '2021-09-29');

		
	}
		
	
	public function testdays()
	{
		$user = new \App\Models\RoomBook;

		$user->setdays('3');

		$this->assertEquals($user->getdays(), '3');

		
	}
	
	public function teststa()
	{
		$user = new \App\Models\RoomBook;

		$user->setsta('Conform');

		$this->assertEquals($user->getsta(), 'Conform');

		
	}
	
	
	

    
}


