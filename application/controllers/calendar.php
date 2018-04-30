
<?php 
Class calendar extends CI_Controller{
	function getCalendar(){
		$data['title'] = 'Calendar';
		$data['page'] = 'calendar/calendar';
		$this->load->view('layout', $data);
	}

}
 ?>