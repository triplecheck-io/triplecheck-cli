<?php

namespace Triplecheck\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AnalyzeCommand extends Command
{
    protected function configure()
    {
        $this->setName('analyze')
            ->setDescription('Analyze the current path and return the a report with the problems if any.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Test');
    }

}
