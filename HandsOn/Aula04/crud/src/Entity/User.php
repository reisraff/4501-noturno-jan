<?php

namespace Entity;

use Collection\ArrayCollection;

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

		$this->id = $this->getLastInsertedId();
	}

	public function delete()
	{
		$query = 'DELETE FROM users WHERE id = :id';
		$this->executeQuery($query, ['id' => $this->id]);

		return $this->getById($this->id) == null;
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
			$this->setName($user['name']);
			$this->setEmail($user['email']);

			return $this;
		} else {
			return null;
		}
	}

	public function getAll()
	{
		$return = new ArrayCollection();
		$usersArray = $this->fetchAll('SELECT * FROM users');

		foreach ($usersArray as $user) {
			$this->id = $user['id'];
			$this->setName($user['name']);
			$this->setEmail($user['email']);

			$return->addItem(clone $this);
		}

		return $return;
	}
}
