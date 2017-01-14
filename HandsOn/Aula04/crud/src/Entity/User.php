<?php

namespace Entity;

class User extends AbstractEntity
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

	public function save()
	{
		$query = 'INSERT INTO users (name, email) VALUES(:name, :email)';

		$this->executeQuery(
			$query,
			[
				'name' => $this->name,
				'email' => $this->email
			]
		);
	}

	public function delete()
	{
		$query = 'DELETE FROM users WHERE id = :id';
		$this->executeQuery($query, ['id' => $this->id]);
	}

	public function update()
	{
		$query = 'UPDATE
			users
		SET
			name = :name,
			email = :email
		WHERE
			id = :id';

		$this->executeQuery(
			$query, [
				'id' => $this->id,
				'name' => $this->name,
				'email' => $this->email
			]
		);
	}
}
