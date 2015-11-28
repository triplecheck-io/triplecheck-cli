<?php

namespace Triplecheck;

use Symfony\Component\Console\Application;

class ApplicationFactory
{
    public function createApplication()
    {
        return new Application("TripleCheck", "0.0.1");
    }
}
