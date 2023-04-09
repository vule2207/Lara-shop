<?php

namespace App\Repositories;

abstract class BaseRepositories implements RepositoriesInterface
{
	protected $models;

	public function __construct()
	{
		$this->models = app()->make(
			$this->getModel()
		);
	}
	abstract public function getModel();

	public function all()
	{
		return $this->models->all();
	}

	public function find(int $id)
	{
		return $this->models->findOrFail($id);
	}

	public function create(array $data)
	{
		return $this->models->create($data);
	}

	public function update(array $data, $id)
	{
		$object = $this->models->find($id);
		return $object->update($data);
	}

	public function delete($id)
	{
		$object = $this->models->find($id);
		return $object->delete();
	}
}
