<?php

namespace Controller;

use Model\UserModel;

class IndexController
{
	use Behavior\SecurityAware;

	public function index()
	{
		if ($_POST) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			$userModel = new UserModel();
			$user = $userModel->login($email, $password);

			if (empty($user)) {
				$_SESSION['message_error'] = 'Dados de autenticação estão incorretos!';

				header('Location: ?route=index/index');
				die();
			}

			$this->createSession([
				'id' => $user->getId(),
				'name' => $user->getName(),
				'email' => $user->getEmail(),
			]);

			header('Location: ?route=user/actionList');
		}

		return [
			'message' => 'Seja Bem Vindo!'
		];
	}

	public function logout()
	{
		$this->destroySession();

		header('Location: ?route=index/index');
	}
}
