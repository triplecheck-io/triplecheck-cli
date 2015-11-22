<?php

namespace spec\Triplecheck\Command;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AnalyzeCommandSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Triplecheck\Command\AnalyzeCommand');
    }

    function it_is_a_symfony_command()
    {
        $this->shouldHaveType('Symfony\Component\Console\Command\Command');
    }
}
