<?php
class UserModel extends Model{
	public function register(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		if($post['submit']){
			if($post['name'] == '' || $post['telefon'] == '' || $post['region'] == '' || $post['email'] == '' || $post['password'] == '' || $post['zanaet_1'] == '' || $post['zanaet_2'] == '' || $post['opis'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}

			// Insert into MySQL
			$this->query('INSERT INTO users (name, telefon, region, email, password, zanaet_1, zanaet_2, opis) VALUES(:name, :telefon, :region, :email, :password, :zanaet_1, :zanaet_2, :opis)');
			$this->bind(':name', $post['name']);
			$this->bind(':telefon', $post['telefon']);
			$this->bind(':region', $post['region']);
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			$this->bind(':zanaet_1', $post['zanaet_1']);
			$this->bind(':zanaet_2', $post['zanaet_2']);
			$this->bind(':opis', $post['opis']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'shares');
			}
		}
		return;
	}

	public function login(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		if($post['submit']){
			// Compare Login
			$this->query('SELECT * FROM users WHERE email = :email AND password = :password');
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			
			$row = $this->single();

			if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"id"	=> $row['id'],
					"name"	=> $row['name'],
					"email"	=> $row['email']
				);
				header('Location: '.ROOT_URL.'shares');
			} else {
				Messages::setMsg('Incorrect Login', 'error');
			}
		}
		return;
	}
}