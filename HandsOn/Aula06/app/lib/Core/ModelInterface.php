<?php

namespace Core;

interface ModelInterface
{
	public function create();
	public function update();
	public function delete();
	public function getById($id);
	public function getAll();
}
