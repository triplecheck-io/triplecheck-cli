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

    function it_should_have_a_name()
    {
        $this->getName()->shouldReturn('analyze');
    }

    function it_should_have_a_description()
    {
        $this->getDescription()->shouldReturn('Analyze the current path and return the a report with the problems if any.');
    }
}
