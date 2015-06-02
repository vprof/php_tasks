<?php
/**
 * Class for work with main view
 */
class Controller_Main extends Controller
{
	function __construct()
	{	
		$this->model = new Model_Main();
		$this->view = new View();
	}
	
	/**
	 * Defalut action
	 */
	function action_index()
	{	
		$data = $this->model->get_data();
		$this->view->generate('main_view.php', 'template_view.php', $data);
	}
}