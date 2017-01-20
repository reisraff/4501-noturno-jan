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

		if ($user == null) {
			$_SESSION['message_error'] = 'Usuário não existe!';

			header('Location: ?route=user/actionList');
			die();
		}

		if ($_POST) {
			$user->setName($_POST['name']);
			$user->setEmail($_POST['email']);
			$user->setPassword($_POST['password']);
			$user->update();

			header(
				'Location: ?route=user/actionView/'
				. $user->getId()
			);
		}

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
			$user->setPassword($_POST['password']);
			$user->create();

			header(
				'Location: ?route=user/actionView/'
				. $user->getId()
			);
		}
	}

	public function actionDelete($id)
	{
		$userModel = new UserModel();
		$user = $userModel->getById($id);

		if ($user == null) {
			$_SESSION['message_error'] = 'Usuário não existe!';

			header('Location: ?route=user/actionList');
			die();
		}

		$user->delete();

		header('Location: ?route=user/actionList');
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
