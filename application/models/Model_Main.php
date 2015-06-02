<?php
	
	include_once ('application\core\loader.php');
	
	/**
	 * Main implementation of work with objects
	 */
	class Model_Main extends Model
	{
		public $conn;    
		function __construct ()
		{
			//global $conn;
			$this->conn = new ModelPDO('setting.ini')
			or die("Not connected: ". mysql_error());
		}
		
		/**
		 * Create new entity of student
		 * 
		 * @param array $row Student's info
		 * @return Student New student entity
		 */
		public function create_student($row)
		{
			$student = new Student();
			$student->setId($row['id']);
			$student->setFirstName($row['firstName']);
			$student->setLastName($row['lastName']);
			$student->setGender($row['gender']);
			$student->setAge($row['age']);
			$student->setGroup($row['sgroup']);
			$student->setFaculty($row['faculty']);
			
			return $student;
		}
		
		/**
		 * Add new student to the system
		 * 
		 * @param array $row Student's info
		 */
		public function insert_student($row)
		{
			$this->conn->insert($this->create_student($row));
		}
		
		/**
		 * Get several students from DB
		 * 
		 * @param array $ids Id's of students to get
		 */
		public function get_students($ids)
		{
			$students=array();
			foreach ($ids as $row){
			
				$students[]=$this->create_student($this->conn->get($row));
				
			}
			
			return $students;
		}
		
		/**
		 * Get information of one student
		 * 
		 * @param int $id Student's id
		 * @return Info about student
		 */
		public function get_student($id)
		{
			return $this->conn->get($id);
		}
				
		/**
		 * Update information about student
		 * 
		 * @param array $row Information of student to be updated
		 */
		public function update_student($row)
		{
			$student = new Student();
			$student->setId($row['id']);
			$student->setFirstName($row['firstName']);
			$student->setLastName($row['lastName']);
			$student->setGender($row['gender']);
			$student->setAge($row['age']);
			$student->setGroup($row['sgroup']);
			$student->setFaculty($row['faculty']);
			$this->conn->update($student);
		}
		
		/**
		 * Delete several students from DB
		 * 
		 * @param array $ids Ids of students to be deleted
		 */
		public function delete_students($ids)
		{
			
			foreach ($ids as $row){
			
				$this->conn->delete($row);
				
			}
		
		}
		
		/**
		 * Get full list of students
		 * 
		 * @return array $students List of students
		 */
		public function get_data()
		{
			global $conn;
			try{
			
				// connect to MySQL and select a database
				$students = array();
				
				$result = $this->conn->query("SELECT * FROM `students`");
				
				foreach($result as $row)
				{
					$students[] = $this->create_student($row);
					
				}
				
				return $students;
			}
			catch(Exception $e){
				echo $e->getMessage();
				exit();
			}
		}		
	}
?>