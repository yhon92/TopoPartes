<?php

namespace TodoPartes\Managers;

abstract class BaseManager {

	protected $entity;
	protected $data;
	protected $errors;

	public function __construct($entity, $data)
	{
		$this->entity = $entity;
		$this->data   = array_only($data, array_keys($this->getRules()));
	}

	abstract public function getRules();

	public function isValid()
	{
		$rules = $this->getRules();

		$validation = \Validator::make($this->data, $rules);

		$isValid = $validation->passes();
		
		$this->errors = $validation->messages();

		return $isValid;
		/*if ($validation->fails())
		{
			throw new ValidationException('Validation failed', $validation->messages());
		}*/
	}

	public function prepareData($data)
	{
		return $data;
	}

	public function save()
	{
		// $this->isValid();

		if ( ! $this->isValid()) {
			return false;
		}

		// $this->entity->fill($this->prepareData($this->data));
		$this->entity->fill($this->data);
		$this->entity->save();

		return true;
	}
	public function getErrors()
	{
		return $this->errors;
	}

} 