<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		check_already_login();
		$this->load->view('login');
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			if ($query->num_rows() > 0) {
				// echo $row->username;
				$row = $query->row();
				$params = array(
					'userid' => $row->user_id,
					'role' => $row->role 
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('Selamat, login berhasil');
					window.location='".site_url('dashboard')."';
				</script>";
			}else {
				echo "<script>
					alert('Login gagal');
					window.location='".site_url('auth/login')."';
				</script>";
			}
		}
	}

	public function logout()
	{
		$params = array('userid', 'role');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}

}

// <?php
// defined('BASEPATH') or exit('No direct script access allowed');

// class Image extends CI_Controller
// {

// 	function __construct()
// 	{
// 		parent::__construct();
// 		$this->load->model('image_m');
// 	}

// 	public function index()
// 	{
// 		$data['row'] = $this->image_m->get();
// 		$this->load->view('image/image_data', $data);
// 	}

// 	public function add()
// 	{
// 		$image = new stdClass();
// 		$image->id_image = null;
// 		$image->image = null;
// 		$data = array(
// 			'page' => 'add',
// 			'row' => $image
// 		);
// 		$this->load->view('image/image_form', $data);
// 	}

// 	public function edit($id)
// 	{
// 		$query = $this->image_m->get($id);
// 		if ($query->num_rows() > 0) {
// 			$image = $query->row();
// 			$data = array(
// 				'page' => 'edit',
// 				'row' => $image
// 			);
// 			$this->load->view('image/image_form', $data);
// 		} else {
// 			echo "<script>alert('Data tidak ditemukan');";
// 			echo "window.location='" . site_url('image') . "';</script>";
// 		}
// 	}

// 	public function process()
// 	{
// 		$post = $this->input->post(null, TRUE);
// 		if (isset($_POST['add'])) {
// 			$config['upload_path']          = './assets/upload/';
// 			$config['allowed_types']        = 'gif|jpg|png|jpeg';
// 			$config['max_size']             = 2048;
// 			// $config['file_name']             = 'image' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
// 			$config['file_name']             = 'image' . date('ymd') . '';
// 			$this->load->library('upload', $config);

// 			if (@$_FILES['image']['name'] != null) {
// 				if ($this->upload->do_upload('image')) {
// 					$post['image'] = $this->upload->data('file_name');
// 					$this->image_m->add($post);
// 					echo "<script>
// 					alert('Selamat, login berhasil');
// 					window.location='" . site_url('auth') . "';
// 				</script>";
// 					redirect('image');
// 				} else {
// 					$error = $this->upload->display_errors();
// 					echo "<script>
// 						alert('eror, login berhasil');
// 						window.location='" . site_url('auth') . "';
// 					</script>";
// 				}
// 			} else {
// 				$post['image'] = null;
// 				$this->image_m->add($post);
// 				echo "<script>
// 					alert('Selamat, login berhasil');
// 					window.location='" . site_url('auth') . "';
// 				</script>";
// 				redirect('image');
// 			}
// 		} else if (isset($_POST['edit'])) {
// 			$this->image_m->edit($post);
// 		}
// 		if ($this->db->affected_rows() > 0) {
// 			$this->session->set_flashdata('success', 'Data berhasil disimpan');
// 		}
// 		redirect('image');
// 	}

// 	public function del($id)
// 	{
// 		$this->image_m->del($id);

// 		if ($this->db->affected_rows() > 0) {
// 			$this->session->set_flashdata('success', 'Data berhasil dihapus');
// 		}
// 		redirect('image');
// 	}
// }

// <?php defined('BASEPATH') OR exit('No direct script access allowed');

// class Image_m extends CI_Model {

//     public function get($id = null)
//     {
//         $this->db->from('image');
//         if ($id != null) {
//             $this->db->where('id_image', $id);
//         }
//         $query = $this->db->get();
//         return $query;
//     }

//     public function add($post)
//     {
//         $params = [
//             'image' => $post['image']
//         ];
//         $this->db->insert('image', $params);
//     }

//     public function edit($post)
//     {
//         $params = [
//             'name' => $post['category_name'],
//             'updated' => date('Y-m-d H:i:s')
//         ];
// 		$this->db->where('category_id', $post['id']);
//         $this->db->update('p_category', $params);
//     }

//     public function del($id)
// 	{
// 		$this->db->where('category_id', $id);
// 		$this->db->delete('p_category');
// 	}
// }
// //<!-- : -->