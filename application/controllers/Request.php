<?php
	/**
	 * Class to work with http requests
	 * 
	 * @author Viktor Kurchenko
	 */
	class Request {
		
		/**
		 * @return Request Newly created request
		 */
		public static function init()
		{
			return new Request();
		}
		
		/**
		 * @return Id of student
		 */
		public function get_id()
		{
			return $_POST['stud'];
		}
		
		/**
		 * @return List of student data
		 */
		public function get_params($action=NULL)
		{
			if(!is_null($action)){
				$action=$_POST['id'];
			}
			echo $action.'+';
			
			return array('id'=>$action,'firstName'=>$_POST['firstName'], 'lastName'=>$_POST['lastName'], 'age'=>$_POST['age'], 'gender'=>$_POST['gender'], 'sgroup'=>$_POST['group'], 'faculty'=>$_POST['faculty']);
		}
}
?>