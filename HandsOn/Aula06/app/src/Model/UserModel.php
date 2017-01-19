<?php

namespace Model;

use Core\AbstractModel;

class UserModel extends AbstractModel
{
	private $id;
	private $name;
	private $email;

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

	public function create()
	{

	}

	public function update()
	{

	}

	public function delete()
	{

	}

	public function getById($id)
	{

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
}
