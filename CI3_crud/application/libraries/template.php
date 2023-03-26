<?php

 class template
 {
 	protected $_ci;

 	public function __construct()
 	{
 		$this->_ci = &get_instance();
 	}

 	function display($template = NULL, $data = NULL) {
 		if ($template!=NULL) 
 			$data['_content'] = $this->_ci->load->view($template, $data, TRUE);
 			$data['_header'] = $this->_ci->load->view('template/header', $data, TRUE);
 			$data['_sidebar'] = $this->_ci->load->view('template/sidebar', $data, TRUE);
 			$data['_footer'] = $this->_ci->load->view('template/footer', $data, TRUE);
 			$data['_template'] = $this->_ci->load->view('template/templates', $data);
 	}
 } 
 ?>