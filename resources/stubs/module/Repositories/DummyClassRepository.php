<?php

namespace DummyNamespace\Repositories;

use DummyNamespace\Models\DummyClass;
use DummyNamespace\Events\DummyClassWasCreated;
use DummyNamespace\Events\DummyClassWasUpdated;
use DummyNamespace\Events\DummyClassWasDeleted;

class DummyClassRepository
{
	public function model()
	{
		return new DummyClass();
	}

	public function all()
	{
		return $this->model()->all();
	}

	public function find($id)
	{
		return $this->model()->findOrfail($id);
	}

	public function ruleCreate()
	{
		return $this->model()->rules_create();
	}

	public function create($request)
	{
		$DummySlug = $this->model();

		$DummySlug->fill($request);
		$DummySlug->save();

		event(new DummyClassWasCreated($DummySlug));

		return $DummySlug;
	}

	public function ruleUpdate()
	{
		return $this->model()->rules_update();
	}

	public function update($id, $request)
	{
		$DummySlug = $this->model()->findOrfail($id);

		$DummySlug->fill($request);
		$DummySlug->save();

		event(new DummyClassWasUpdated($DummySlug));

		return $DummySlug;
	}

	public function delete($id)
	{
		$DummySlug = $this->model()->findOrfail($id);

		$DummySlug->delete();

		event(new DummyClassWasDeleted($DummySlug));
	}

}