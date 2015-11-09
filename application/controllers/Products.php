<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Product');
		$show= $this->Product->get_all_products();
		$this->load->view('index', array('show' => $show));
	}

	public function new_product()
	{
		$this->load->view('new_product');
	}

	public function edit($id)
	{
		$this->load->model('Product');
		$edit_product = $this->Product->get_id($id);
		$this->load->view('edit_product', $edit_product);
	}

	public function show($id)
	{
		$this->load->model('Product');
		$our_product = $this->Product->get_id($id);
		$this->load->view('show',$our_product);
	}
	public function create()
	{
		$this->load->model('Product');
		$product = array (
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description'),
			'price' => $this->input->post('price')
			);
		$this->Product->add_products($product);
		redirect('/');
	}
	public function destroy($id)
	{
		$this->load->model('Product');
		$this->Product->delete_product($id);
		redirect('/');

	}
	public function update($id)
	{
		$this->load->model('Product');
		$product = array (
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description'),
			'price' => $this->input->post('price'),
			'id' => $id
			);
		$this->Product->update($product);
		redirect('/');
	}

}
