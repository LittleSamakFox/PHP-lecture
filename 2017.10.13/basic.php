<?PHP

	//basic class
	class Student{
		private $StudentID;
		private $StudentName;
		
		public function printStudent(){
			print "ID : " .$this->StudentID ."<br>";
			print "Name : " .$this->StudentName."<br>";
		}
		
		public function setStudentID($ID){
			$this->StudentID = $ID;
		}
		public function setStudentName($Name){
			$this->StudentName=$Name;
		}
	}
	$object = new student;
	$object->setStudentID(1234);
	$object->setStudentName("Kim");
	$object->printStudent();
	print"<br>";
	
	
	//class with constructor(seng sung za)
	class fruit{
		private $fruit_name;
		private $price;
		private $color;
		
		public function fruit($name, $price, $color){
			$this->fruit_name=$name;
			$this->price=$price;
			$this->color=$color;
		}
		public function print_fruit(){
			print "Fruit name : " .$this->fruit_name ." | ";
			print "Fruit price : " .$this->price ." | ";
			print "Fruit color : " .$this->color ."<br>";
		}
	}
	$Apple = new fruit('Apple',1000,'red');
	$Orrange = new fruit('Orrange',2000,'orange');
	$Banana = new fruit('Banana',500,'yellow');
	$Pear = new fruit('Pear',300,'gray');
	
	$Apple->print_fruit();
	$Orrange->print_fruit();
	$Banana->print_fruit();
	$Pear->print_fruit();
	print"<br>";
	
	//class with inheritance
	class People{
		protected $name;
		protected $age;
		
		public function printPeople(){
			print "name : " . $this->name . "<br>";
			print "age : " . $this->age . "<br>";
		}
	}
	
	class Students extends People{
		protected $studentID;
		
		public function Students($name, $age, $id){
			$this->name=$name;
			$this->age=$age;
			$this->studentID=$id;
		}
		
		public function printStudents(){
			print "-----Student-----<br>";
			$this->printPeople();
			print "ID : " . $this->studentID ."<br>";
		}
	}
	
	class Professor extends People{
		private $office;
		
		public function Professor($name,$age,$office){
			$this->name=$name;
			$this->age=$age;
			$this->office=$office;
		}
		public function printProfessor(){
			print "-----Professor-----<br>";
			$this->printPeople();
			print "Office : " . $this->office ."<br>";
		}
	}
	
	class Staff extends People{
		private $title;
		
		public function Staff($name, $age, $title){
			$this->name = $name;
			$this->age = $age;
			$this->title = $title;
		}
		
		public function printStaff(){
			print " --- Staff --- <br> ";
			$this->printPeople();
			print "title : " . $this->title . "<br>";
			print "<br>";
		}
	}
	$object1=new Students("Lee", 21, 20170123);
	$object2=new Professor("Kim", 42, 107);
	$object3=new Staff("Park", 37, "Chief");
	$object1->printStudents();
	$object2->printProfessor();
	$object3->printStaff();
	print"<br>";
	
	//regular expressions
	$urls = array("www.samsung.co.kr", "www.daum.net", "www.donga.co.kr", "www.chosun.com", "www.kbs.co.kr", "vinus.donga.co.kr", "www.LIST.co.kr", "www.note.abc.co.kr");
	print "using it ereg() <br>";
	foreach($urls as $url){
		if( ereg("^www\.[a-z]+\.co\.kr$",$url))
			print "$url<br>";
	}
	
	print"<br> using eregi()<br>";
	foreach($urls as $url){
		if( eregi("^www\.[a-z]+\.co\.kr$",$url))
			print "$url<br>";
	}
?> 
