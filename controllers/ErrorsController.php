<?php

class ErrorsController extends BaseController {
	
	public function index() {
		$this->registry->template->blog_heading = 'This is the 404';
		$this->registry->template->show('errors/error404');
	}

}
?>
