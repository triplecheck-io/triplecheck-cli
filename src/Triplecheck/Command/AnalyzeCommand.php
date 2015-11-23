<?php

namespace Triplecheck\Command;

use Symfony\Component\Console\Command\Command;

class AnalyzeCommand extends Command
{
    protected function configure()
    {
        $this->setName('analyze')
            ->setDescription('Analyze the current path and return the a report with the problems if any.');
    }

}
