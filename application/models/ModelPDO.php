<?php
/**
 * Provides connection and work with database
 * 
 * @author Viktor Kurchenko
 */
	class ModelPDO extends PDO
	
	{
	
		private $table = "students";
		
		public function __construct($file = 'setting.ini')
		{
			if (!$settings = parse_ini_file($file, TRUE)) throw new exception('Unable to open ' . $file . '.');
			//$table = $settings['database']['table'];
			$dns = $settings['database']['driver'] .
			':host=' . $settings['database']['host'] .
			((!empty($settings['database']['port'])) ? (';port=' . $settings['database']['port']) : '') .
			';dbname=' . $settings['database']['schema'];
			
			parent::__construct($dns, $settings['database']['username'], $settings['database']['password']);
			
		}
		
		/**
		 * Return row from DB by id
		 * 
		 * @param int $id Unique id
		 */
        public function get($id){
			$sth = parent::prepare("SELECT * FROM students WHERE id=:id");
			
			$sth->bindParam(':id', $id, PDO::PARAM_INT);
            if(!$sth->execute()){
				
                throw new Exception('Error fetching row');
            }
            return $sth->fetch(PDO::FETCH_ASSOC);
        }

        /**
         * Insert record of student into DB
         * 
         * @param Student $student Student to be inserted
         */
        public function insert($student){
			$firstName = $student->getFirstName();
			$lastName = $student->getLastName();
			$gender = $student->getGender();
			$age = $student->getAge();
			$sgroup = $student->getGroup();
			$faculty = $student->getFaculty();
			
			$sth = parent::prepare("INSERT INTO students (id,firstName,lastName,gender,age,sgroup,faculty) 
                        VALUES (NULL,:firstName,:lastName,:gender,:age,:sgroup,:faculty)");
			
			$sth->bindParam(':firstName', $firstName, PDO::PARAM_STR);
			$sth->bindParam(':lastName', $lastName, PDO::PARAM_STR);
			$sth->bindParam(':gender', $gender, PDO::PARAM_STR);
			$sth->bindParam(':age', $age, PDO::PARAM_INT);
			$sth->bindParam(':sgroup', $sgroup, PDO::PARAM_STR);
			$sth->bindParam(':faculty', $faculty, PDO::PARAM_STR);
			
			if(!$sth->execute()){
			throw new Exception('Error inserting row');
			}
        }

        /**
         * Update existing record of student in DB
         * 
         * @param Student $student Student to be updated
         */
        public function update($student){
            $id = $student->getId();
			$firstName = $student->getFirstName();
			$lastName = $student->getLastName();
			$gender = $student->getGender();
			$age = $student->getAge();
			$sgroup = $student->getGroup();
			$faculty = $student->getFaculty();
			
			$sth = parent::prepare("UPDATE students SET firstname=:firstName,lastname=:lastName, gender=:gender, age=:age,sgroup=:sgroup,faculty=:faculty WHERE id=:id");
			
			$sth->bindParam(':firstName', $firstName, PDO::PARAM_STR);
			$sth->bindParam(':lastName', $lastName, PDO::PARAM_STR);
			$sth->bindParam(':gender', $gender, PDO::PARAM_STR);
			$sth->bindParam(':age', $age, PDO::PARAM_INT);
			$sth->bindParam(':sgroup', $sgroup, PDO::PARAM_STR);
			$sth->bindParam(':faculty', $faculty, PDO::PARAM_STR);
			$sth->bindParam(':id', $id, PDO::PARAM_INT);
			
			if(!$sth->execute()){
			echo $sth->errorInfo()[2];
			throw new Exception('Error inserting row');
			}
			
        }

        /**
         * Delete student record from DB
         * 
         * @param int $id Id of student to be deleted
         */
        public function delete($id){
            $sth = parent::prepare("DELETE FROM students WHERE id=:id");
			
			$sth->bindParam(':id', $id, PDO::PARAM_INT);
            if(!$sth->execute()){
				
                throw new Exception('Error fetching row');
            }
           
		}
        
	}
?>