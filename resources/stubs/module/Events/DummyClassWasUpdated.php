<?php

namespace DummyNamespace\Events;

use DummyRootNamespaceEvents\Event;
use DummyNamespace\Models\DummyClass;

class DummyClassWasUpdated extends Event
{
	public $DummySlug;

    /**
     * DummyClassWasUpdated constructor.
     * @param $DummySlug
     */
    public function __construct(DummyClass $DummySlug)
    {
        $this->DummySlug = $DummySlug;
    }
}