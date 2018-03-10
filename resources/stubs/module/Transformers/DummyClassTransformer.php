<?php

namespace DummyNamespace\Transformers;

use League\Fractal\TransformerAbstract;
use DummyRootNamespaceModules\DummyBasename\Models\DummyClass;

class DummyClassTransformer extends TransformerAbstract
{
    public function transform(DummyName $DummySlug)
    {
         return [
            'id'         => (int) $DummySlug->id,

            /* place your other model properties here */

            'registered' => (string) $DummySlug->created_at->diffForHumans(),
            'created_at' => (string) $DummySlug->created_at->toDateTimeString(),
            'updated_at' => (string) $DummySlug->updated_at->toDateTimeString(),
         ];
    }
}