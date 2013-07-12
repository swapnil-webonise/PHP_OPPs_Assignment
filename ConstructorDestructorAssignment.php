<?php
error_reporting(E_ALL);
ini_set('display_errors', true);


class School
{
	private $classNames;
	public function __construct()
	{
		$classNames=array();
	}
	public function setClassNames($arr)
	{
		$this->classNames=$arr;
	}
	public function getClassNames()
	{
		return $this->classNames;
	}
}

class Classes
{
	private $indentifier;
	private $teachers;
	public function __construct()
	{
		$this->teachers=array();
		$this->indentifier="";
	}
	public function setIndentifier($indentifier)
	{
		$this->indentifier=$indentifier;
	}
	public function setTeachers($teachersArr)
	{
		$this->teachers=$teachersArr;
	}
	public function getIndentifier()
	{
		return $this->indentifier;
	}
	public function getTeachers()
	{
		return $this->teachers;
	}
}

class Student
{
	private $name;
	private $classNumber;
	public function __construct()
	{
		$this->name="";
		$this->classNumber=null;
	}

	public function setName($name)
	{
		$this->name=$name;
	}
	
	public function setclassNumber($classNumber)
	{
		$this->classNumber=$classNumber;
	}

	public function getName()
	{
		return $this->name;
	}
	
	public function getclassNumber()
	{
		return $this->classNumber;
	}
}

class Teacher
{
	private $name;
	private $title;
	private $disciplines;
	public function __construct()
	{
		$this->disciplines=array();
		$this->name="";
		$this->title="";
	}

	public function setName($name)
	{
		$this->name=$name;
	}
	
	public function setTitle($title)
	{
		$this->title=$title;
	}
	public function setDisciplines($disciplinesArr)
	{
		$this->disciplines=$disciplinesArr;
	}
	public function getName()
	{
		return $this->name;
	}
	
	public function getTitle()
	{
		return $this->title;
	}
	public function getDisciplines()
	{
		return $this->disciplines;
	}
}

class Discipline
{
	private $name;
	private $numberOfLectures;
	private $numberOfExercises;
	public function __construct()
	{
		$this->name="";
		$this->numberOfLectures=null;
		$this->numberOfExercises=null;
	}

	public function setName($name)
	{
		$this->name=$name;
	}
	
	public function setNumberOfLectures($numberOfLectures)
	{
		$this->numberOfLectures=$numberOfLectures;
	}

	public function setNumberOfExercises($numberOfExercises)
	{
		$this->numberOfExercises=$numberOfExercises;
	}	

	public function getName()
	{
		return $this->name;
	}
	
	public function getNumberOfLectures()
	{
		return $this->numberOfLectures;
	}

	public function getNumberOfExercises()
	{
		return $this->numberOfExercises;
	}	
}

	$disciplineArray1 = array();
	$disciplineArray1[0] = new Discipline();
	$disciplineArray1[0]->setName("Discipline 1");
	$disciplineArray1[0]->setNumberOfLectures(10);
	$disciplineArray1[0]->setNumberOfExercises(30);

	$disciplineArray2 = array();
	$disciplineArray2[0] = new Discipline();
	$disciplineArray2[0]->setName("Discipline 2");
	$disciplineArray2[0]->setNumberOfLectures(5);
	$disciplineArray2[0]->setNumberOfExercises(20);


	$teacherArray = array();
	$teacherArray[0] = new Teacher();
	$teacherArray[0]->setName("Teacher 1");
	$teacherArray[0]->setTitle("title 1");
	$teacherArray[0]->setDisciplines($disciplineArray1);
	
	$teacherArray[1] = new Teacher();
	$teacherArray[1]->setName("Teacher 2");
	$teacherArray[1]->setTitle("title 2");
	$teacherArray[1]->setDisciplines($disciplineArray2);


	$sobj=new School();

	$classsArray = array();

	$classsArray[0] = new Classes();
	$classsArray[0]->setIndentifier("SSC");
	$classsArray[0]->setTeachers($teacherArray);

	$classsArray[1] = new Classes();
	$classsArray[1]->setIndentifier("HSC");
	$classsArray[1]->setTeachers($teacherArray);

	$sobj->setClassNames($classsArray);
	
	echo "<pre>";
	print_r($sobj->getClassNames());
	echo "</pre>";
?>
