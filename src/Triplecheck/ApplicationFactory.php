<?php

namespace Triplecheck;

use Symfony\Component\Console\Application;

class ApplicationFactory
{
    const VERSION = '0.0.1';

    public function getName()
    {
        return 'Triple Check';
    }

    public function createApplication()
    {
        return new Application($this->getName(), self::VERSION);
    }
}
