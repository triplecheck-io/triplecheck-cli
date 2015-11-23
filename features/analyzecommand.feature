Feature: AnalyzeCommand
  As a Magento developer 
  I want to validate that my code meets certain standards
  Because I have pride on the code I write

  Scenario: I get an error message wen there is no configuration or path set
    Given I have no valid folders or configuration
    When I run triplecheck-cli with no options
    Then I should see an error message with more information

  Scenario: I can set what path I want to be scanned
    Given I have a valid folder "test-source"
    When I run triplecheck-cli with "--path=test-source/"
    Then I should see no errors

  Scenario: I get a warning for a complex model class
    Given I have a Magento model class that is flagged as complex by "PHPMD"
    When I run triplecheck-cli with the path to the file
    Then I should see a high score and a warning message