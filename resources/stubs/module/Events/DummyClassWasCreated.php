<?php

namespace DummyNamespace\Events;

use DummyRootNamespaceEvents\Event;
use DummyRootNamespaceModules\DummyBasename\Models\DummyClass;

class DummyClassWasCreated extends Event
{
    public $DummySlug;

    /**
     * DummyClassWasCreated constructor.
     * @param $DummySlug
     */
    public function __construct(DummyClass $DummySlug)
    {
        $this->DummySlug = $DummySlug;
    }

}