
<?php 
Class calendar extends CI_Controller{
	function getEvenCalendar(){
		$data['title'] = 'Calendar';
		$data['page'] = 'calendar/even_calendar';
		$this->load->view('layout', $data);
	}

	function getMenuCalendar(){
		$data['title'] = 'Calendar';
		$data['page'] = 'calendar/menu_calendar';
		$this->load->view('layout', $data);
	}


	function getCalender(){
	 $data['title'] = 'Calender';
	 $data['page'] = 'calender/calender';
	     
	       $this->load->view('templates/header', $data);
	       $this->load->view('menu/admin_dasboard', $data);
	 $this->load->view('admin/calender/calender', $data);
	       $this->load->view('templates/footer', $data);
	}

}
 ?>