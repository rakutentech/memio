<?php

namespace fixture\Gnugat\Medio;

use fixture\Gnugat\Medio\SubDir\Dependency;
use fixture\Gnugat\Medio\SubDir\OtherDependency;

class EmptyService
{
    private $dependency;

    private $otherDependency;

    public function __construct(OtherDependency $otherDependency, Dependency $dependency)
    {
        $this->otherDependency = $otherDependency;
        $this->dependency = $dependency;
    }
}
