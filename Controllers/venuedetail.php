<?php
/**
 * 
 */
class venuedetail extends Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
		$this -> view -> script = array(URL . 'Views/venuedetail/js/default.js');
		$this->view->render('venuedetail/index',TRUE);
	}

}

?>