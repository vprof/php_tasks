<?php

class View
{
	
	/**
	 * Main class of View pattern
	 * 
	 * @author Viktor Kurchenko
	 */
	
	/**
	 * Loads initial view
	 * @param $content_view View displayed page content
	 * @param $template_view General pattern of pages
	 * @param array $data Array containing page content
	 */
	function generate($content_view, $template_view, $data = null)
	{						
		include 'application/views/'.$template_view;
	}
	
	public $header;
	public $action;
	
	/**
	 * Set header of view
	 * @param $header Page header
	 * @param $action Page modification marker
	 */
	function setHeader($header, $action)
	{
		$this->header=$header;
		$this->action=$action;
	}
}
