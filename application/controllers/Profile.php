<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('profile_model');
    }

	public function index()
	{
		$url_image = API_URL.'foto/lists?api_key='.API_KEY;
		$url_user = API_URL.'user/info?api_key='.API_KEY.'&id_user=1';
		$data['lists'] = $this->profile_model->get_foto($url_image);
		$data['profiles'] = $this->profile_model->get_user($url_user);
		$data['title'] = 'Hardiyansyah Profile';
		$this->load->view('profile_view', $data);
	}
}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */