
<?php 
Class calendar extends CI_Controller{
	function getCalendar(){
		$data['title'] = 'Calendar';
		$data['page'] = 'calendar/calendar';
		$this->load->view('layout', $data);
	}

	function CalendarModal(){
		$data['title'] = 'Add Even';
		$data['page'] = 'calendar/calendar';
		// $data['page'] = 'calendar/calendar_modal';
		$this->load->view('layout', $data);
	}	
}
 ?>