<?PHP
	extract(array_merge($HTTP_GET_VARS,$HTTP_POST_VARS));
	class People{
		protected $p_name;
		protected $p_age;
		public function print_People(){
			print "name : " . $this->p_name ."<br>";
			print "age : " . $this->p_age ."<br>";
		}
		public function People($name, $age){
			$this->p_name = $name;
			$this->p_age = $age;
		}
	}
	
	class Student extends People{
		private $p_number;
		public function print_Student(){
			$this->print_People();
			print "school number : " . $this->p_number ."<br>";
		}
		public function Student($name, $age, $num){
			$this->p_name = $name;
			$this->p_age = $age;
			$this->p_number =$num;
		}
	}
	$object = new Student($name, $age, $schoolnum);
	$object->print_Student();
?>
