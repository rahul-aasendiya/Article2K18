 <?php
if(!defined('BASEPATH'))exit('No direct Script Access allowed');
class Login extends CI_Controller
{
	public function index()
	{
		if ($this->session->userdata('user_id')) {
			return redirect('admin/dashboard');
		}
		$this->load->view('public/admin_login');	
	}
	public function admin_login()
	{
		//$this->form_validation->set_rules('Username','User Name','trim|required|alpha');
		//$this->form_validation->set_rules('Password','Password','required');
		$this->form_validation->set_error_delimiters("<div class='alert alert-danger' role='alert'>", '</div>');
		
		if($this->form_validation->run('admin_login')){
			$User=$this->input->post('Username');
			$Pass=$this->input->post('Password');
			$this->load->model('loginmodel');

			$login_id=$this->loginmodel->login_valid($User,$Pass);
			
			if ($login_id) {
				$this->session->set_userdata('user_id',$login_id);
				return redirect('admin/dashboard');
			}else{
				$this->session->set_flashdata('login_failed',"Invalid Username and Password.");
				return redirect('login');
			}
		}else{
			$this->load->view('public/admin_login');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('login');
	}
}