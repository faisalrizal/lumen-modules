<?php

namespace DummyNamespace\Events;

use DummyRootNamespaceEvents\Event;
use DummyNamespace\Models\DummyClass;

class DummyClassWasDeleted extends Event
{
	public $DummySlug;

    /**
     * DummyClassWasDeleted constructor.
     * @param $DummySlug
     */
    public function __construct(DummyClass $DummySlug)
    {
        $this->DummySlug = $DummySlug;
    }
}