<?php
class ShareModel extends Model{
	public function Index(){
	$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['region'] == '' || $post['zanaet_1'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
			
			//$result = db_query('SELECT n.title FROM node n WHERE n.title = :title', array(':title' => $title));
			//foreach ($result as $record) {
 			//echo $result->fetchColumn(0);
 			//echo ";";
			$this->query('SELECT * FROM users WHERE region = :region AND (zanaet_1 = :zanaet_1 OR zanaet_2 = :zanaet_1)');
			$this->bind(':region', $post['region']);
			$this->bind(':zanaet_1', $post['zanaet_1']);
			
			
		$rows = $this->resultSet();
		return $rows;
			//SELECT * FROM Customers WHERE City='Berlin' OR Country='Germany';
			//SELECT * FROM Customersn WHERE Country='Germany' AND (City='Berlin' OR City='München');
			// Verify
			
		}
		return;
	}
		
	

	public function add(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['title'] == '' || $post['body'] == '' || $post['link'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
			// Insert into MySQL
			$this->query('INSERT INTO shares (title, body, link, user_id) VALUES(:title, :body, :link, :user_id)');
			$this->bind(':title', $post['title']);
			$this->bind(':body', $post['body']);
			$this->bind(':link', $post['link']);
			$this->bind(':user_id', $post['user_id']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'shares');
			}
		}
		return;
	}
public function search(){
	$this->query('SELECT * FROM users');
		$rows = $this->resultSet();
		return $rows;
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['region'] == '' || $post['zanaet_1'] == '' || $post['zanaet_2'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
			
			//$result = db_query('SELECT n.title FROM node n WHERE n.title = :title', array(':title' => $title));
			//foreach ($result as $record) {
 			//echo $result->fetchColumn(0);
 			//echo ";";
			$this->query('SELECT * FROM users WHERE region = :region');
			$this->bind(':region', $post['region']);
			//$this->bind(':zanaet_1', $post['zanaet']);
			//$this->bind(':zanaet_2', $post['zanaet']);
			
		$rows = $this->resultSet();
		return $rows;
			//SELECT * FROM Customers WHERE City='Berlin' OR Country='Germany';
			//SELECT * FROM Customersn WHERE Country='Germany' AND (City='Berlin' OR City='München');
			// Verify
			
		}
		return;
	}
}