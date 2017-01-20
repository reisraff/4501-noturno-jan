<?php

namespace Model;

use Core\AbstractModel;

class UserModel extends AbstractModel
{
	private $id;
	private $name;
	private $email;
	private $password;

	public function getId()
	{
		return $this->id;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($password)
	{
		$this->password = md5($password);
	}

	public function create()
	{
		$query = 'INSERT INTO
			users (name, email, password)
		VALUES (:name, :email, :password)';

		$this->executeQuery(
			$query,
			[
				'name' => $this->name,
				'email' => $this->email,
				'password' => $this->password
			]
		);

		$this->id = $this->getLastInsertedId();
	}

	public function update()
	{
		$query = 'UPDATE
			users
		SET
			name = :name,
			email = :email,
			password = :password
		WHERE
			id = :id';

		$this->executeQuery(
			$query,
			[
				'id' => $this->id,
				'name' => $this->name,
				'email' => $this->email,
				'password' => $this->password,
			]
		);
	}

	public function delete()
	{
		$query = 'DELETE FROM users WHERE id = :id';

		$this->executeQuery($query, ['id' => $this->id]);

		return $this->getById($this->id) == null;
	}

	public function getById($id)
	{
		$query = 'SELECT * FROM users WHERE id = :id';
		$user = $this->fetch(
			$query,
			[
				'id' => $id
			]
		);

		if (isset($user['id'])) {
			$this->id = $user['id'];
			$this->name = $user['name'];
			$this->email = $user['email'];

			return $this;
		}

		return null;
	}

	public function getAll()
	{
		$query = 'SELECT * FROM users';

		$users = $this->fetchAll($query);

		$return = [];

		foreach ($users as $user) {
			$this->id = $user['id'];
			$this->name = $user['name'];
			$this->email = $user['email'];

			$return[] = clone $this;
		}

		return $return;
	}

	public function login($email, $password)
	{
		$password = md5($password);

		$query = 'SELECT
			*
		FROM
			users
		WHERE
			email = :email
			AND password = :password
		';

		$user = $this->fetch(
			$query,
			[
				'email' => $email,
				'password' => $password
			]
		);

		if (isset($user['id'])) {
			$this->id = $user['id'];
			$this->name = $user['name'];
			$this->email = $user['email'];

			return $this;
		}

		return null;
	}
}
