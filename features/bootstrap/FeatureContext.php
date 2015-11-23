<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I have no valid folders or configuration
     */
    public function iHaveNoValidFoldersOrConfiguration()
    {

    }

    /**
     * @When I run triplecheck-cli with no options
     */
    public function iRunTriplecheckCliWithNoOptions()
    {
        $process = new Process('./tcheck.php analyze');
        $process->run();

        if(!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
    }

    /**
     * @Then I should see an error message with more information
     */
    public function iShouldSeeAnErrorMessageWithMoreInformation()
    {
        throw new PendingException();
    }

    /**
     * @Given I have a valid folder :arg1
     */
    public function iHaveAValidFolder($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I run triplecheck-cli with :arg1
     */
    public function iRunTriplecheckCliWith($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should see no errors
     */
    public function iShouldSeeNoErrors()
    {
        throw new PendingException();
    }

    /**
     * @Given I have a Magento model class that is flagged as complex by :arg1
     */
    public function iHaveAMagentoModelClassThatIsFlaggedAsComplexBy($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I run triplecheck-cli with the path to the file
     */
    public function iRunTriplecheckCliWithThePathToTheFile()
    {
        throw new PendingException();
    }

    /**
     * @Then I should see a high score and a warning message
     */
    public function iShouldSeeAHighScoreAndAWarningMessage()
    {
        throw new PendingException();
    }
}
