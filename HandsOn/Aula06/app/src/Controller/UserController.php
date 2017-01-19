<?php

namespace Controller;

use Model\UserModel;

class UserController
{
	public function actionView($id)
	{
		$userModel = new UserModel();
		$user = $userModel->getById($id);

		return [
			'user' => $user
		];
	}

	public function actionEdit($id)
	{
		$userModel = new UserModel();
		$user = $userModel->getById($id);

		return [
			'user' => $user
		];
	}

	public function actionCreate()
	{
		if ($_POST) {
			$user = new UserModel();
			$user->setName($_POST['name']);
			$user->setEmail($_POST['email']);
			$user->create();

			// @todo alterar para user/view/:id
			header('Location: ?route=user/actionList');
		}
	}

	public function actionList()
	{
		$userModel = new UserModel;
		$users = $userModel->getAll();

		return [
			'users' => $users
		];
	}
}
