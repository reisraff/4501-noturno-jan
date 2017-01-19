<?php

namespace Controller;

use Model\UserModel;

class UserController
{
	public function actionList()
	{
		$userModel = new UserModel;
		$users = $userModel->getAll();

		return [
			'users' => $users
		];
	}
}
