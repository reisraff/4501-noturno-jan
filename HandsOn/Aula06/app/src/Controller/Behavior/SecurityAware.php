<?php

namespace Controller\Behavior;

trait SecurityAware
{
	public function createSession(array $session)
	{
		$_SESSION['user'] = $session;
	}

	public function destroySession()
	{
		unset($_SESSION['user']);
	}

	public function checkLogin()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}

		return false;
	}
}
