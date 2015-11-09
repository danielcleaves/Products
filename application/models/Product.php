<?php 

class Product extends CI_Model {

	public function get_all_products()
	{
		return $this->db->query("SELECT * FROM products")->result_array();
	}

	public function add_products($products)
	{
		$query = "INSERT INTO Products(name,description,price,created_at,updated_at)
		VALUES(?,?,?,NOW(),NOW())";
		$values = array($products['name'], $products['description'], $products['price']);
		$this->db->query($query, $values);
		return;
	}

	public function get_id($id)
	{
		$query = "SELECT name, description, price, id FROM products WHERE id = '{$id}'";
		return $this->db->query($query)->row_array();
	}

	public function delete_product($id)
	{
		$query = "DELETE FROM products WHERE id = '{$id}'";
		$this->db->query($query);
	}

	public function update($products)
	{
		$query = "UPDATE products SET name = ? , description = ?, price = ?, updated_at = NOW()
		WHERE id = ?";
		$result = array($products['name'], $products['description'], $products['price'], $products['id']);
		$this->db->query($query,$result);
		return $result;
	}

}

?>