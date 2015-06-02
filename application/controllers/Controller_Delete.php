<?php

	include_once ('application\core\loader.php');

	/**
	 * Controller of deleting objects
	 */
	class Controller_Delete extends Controller
	{
		function __construct()
		{	
			$this->model = new Model_Main();
			$this->view = new View();
		}
	
		/**
		 * Default action
		 */
		function action_index()
		{	
			$studId = Request::init()->get_id();
			$data = $this->model->get_students($studId);
			$this->view->generate('delete_view.php', 'template_view.php', $data );
		}
		
		/**
		 * Logic of deleting student
		 */
		function action_delete()
		{
			$request = Request::init();
			$idStud = $request->get_id();
			$this->model->delete_students($idStud);
			$data=$this->model->get_data();
			
			$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
			header('Location:'.$host.'');
		}
	}
?>