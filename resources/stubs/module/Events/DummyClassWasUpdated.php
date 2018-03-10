<?php

namespace DummyNamespace\Events;

use DummyRootNamespaceEvents\Event;
use DummyRootNamespaceModules\DummyBasename\Models\DummyClass;

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