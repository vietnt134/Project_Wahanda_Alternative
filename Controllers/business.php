<?php
/**
 *
 */
class business extends Controller {

	function __construct() {
		parent::__construct();
	}

	public function signup() {
		$this -> view -> script = array(URL . 'Views/business/signup/js/default.js');
		$this -> view -> render('business/signup/index', TRUE);
	}
	public function venuedetail()
	{
		$this -> view -> script = array(URL . 'Views/business/venuedetail/js/default.js');
		$this->view->render('business/venuedetail/index',TRUE);
	}
	

}
?>