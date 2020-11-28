<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['data_siswa'] = $this->db->get("siswa")->result();
	
		$data['content'] = 'list_siswa';
		$this->load->view('layout', $data);
	}
	public function tambah(){
		$data['content'] = 'tambah_siswa';
		$this->load->view('layout', $data);
	}
	public function do_add(){
		$post=$this->input->post();
		$this->db->insert("siswa",$post);
		redirect("siswa");
	}
	public function do_delete($id){
		$where = array(
						"id"=>$id
					);
		$this->db->where($where)->delete("siswa");
		redirect("siswa");
	}
	public function view($id){
		$where = array(
						"id"=>$id
					);
		$data['siswa'] = $this->db->where($where)->get("siswa")->row();
		$data['content'] = 'view_siswa';
		$this->load->view('layout', $data);
	}
	public function do_update($id){
		$data = $this->input->post();
		$where = array(
						"id"=>$data["id"]
					);
		unset($data["id"]);
		$this->db->where($where)->update("siswa",$data );
		redirect("siswa");
	}
}
