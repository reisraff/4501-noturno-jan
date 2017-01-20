<?php

namespace Controller\Behavior;

trait SecurityAware
{
	public function createSession(array $session)
	{
		$_SESSION['user'] = $session;
	}
}
