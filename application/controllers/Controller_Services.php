<?php
include_once ('application\core\loader.php');

/**
 * Controller for adding and editing of student data
 */
class Controller_Services extends Controller
{
	function __construct()
	{	
		$this->model = new Model_Main();
		$this->view = new View();
	}
	
	/**
	 * Default action for class
	 */
	function action_index()
	{
		$this->view->generate('404_view.php', 'template_view.php');
	}
		
	/**
	 * Show page of student adding
	 */
	function action_show_add_view()
	{
		$this->view->setHeader('Create student', 'add');
		$this->view->generate('services_view.php', 'template_view.php');
	}
	
	/**
	 * Logic of student's adding
	 */
	function action_add()
	{
		
		$mdStud = Request::init()->get_params();
		$this->model->insert_student($mdStud);
		$data=$this->model->get_data();
		$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('Location:'.$host.'');
	}
    
	/**
	 * Show page of student editing
	 */
    function action_show_edit_view()
	{
		$studId = Request::init()->get_id();
		$data = $this->model->get_student($studId[0]);
		$this->view->setHeader("Edit student's data", "edit");
		$this->view->generate('services_view.php', 'template_view.php', $data);
	}
		
	/**
	 * Logic of student editing
	 */
	function action_edit()
	{
		$request = Request::init();
		$mdStud = $request->get_params(1);
		$this->model->update_student($mdStud);
		$data=$this->model->get_data();
		$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('Location:'.$host.'');
	}
}