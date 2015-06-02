<?php
/**
 * @author Viktor Kurchenko
 * 
 * Entity of a student
 */
	class Student
	{
		private $id;
        private $firstName;
        private $lastName;
        private $gender;
        private $age;
        private $sgroup;
        private $faculty;
        
        
        public function __construct(){}

        /**
         * Set id from DB
         * 
         * @param int $id Unique key of record in DB
         */
        public function setId($id){
            $this->id=$id;
        }
		
		/**
		 * Set first name
		 * @param string $firstName Student's first name
		 */
        public function setFirstName($firstName){
            $this->firstName=$firstName;
        }

        /**
         * Set last name
         * @param string $lastName Student's last name
         */
        public function setLastName($lastName){
            $this->lastName=$lastName;
        }

        /**
         * Set gender
         * @param string $gender Student's gender
         */
        public function setGender($gender){
            $this->gender=$gender;
        }
        
        /**
         * Set age
         * @param int $age Student's age
         */
        public function setAge($age){
            $this->age=$age;
        }
        
        /**
         * Set academic group
         * @param string $sgroup Student's group
         */
        public function setGroup($sgroup){
            $this->sgroup=$sgroup;
        }
        
        /**
         * Set faculty
         * @param string $faculty Student's faculty
         */
        public function setFaculty($faculty){
            $this->faculty=$faculty;
        }
		
		/**
		 * Get id
		 * @return int Student's id
		 */
        public function getId(){
            return $this->id;
        }
		
		/**
		 * Get first name
		 * @return string Student's first name
		 */
        public function getFirstName(){
            return $this->firstName;
        }

        /**
         * Get last name
         * @return string Student's last name
         */
        public function getLastName(){
            return $this->lastName;
        }

        /**
         * Get gender
         * @return string Student's gender
         */
        public function getGender(){
            return $this->gender;
        }
        
        /**
         * Get age
         * @return int Student's age
         */
        public function getAge(){
            return $this->age;
        }
        
        /**
         * Get academic group
         * @return string Student's group
         */
        public function getGroup(){
            return $this->sgroup;
        }
        
        /**
         * Get faculty
         * @return string Student's faculty
         */
        public function getFaculty(){
            return $this->faculty;
        }
}
?>