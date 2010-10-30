<?php

namespace Ferret\Detector;

require_once 'PHPUnit/Framework.php';

require_once 'src/Ferret/Detector/DetectorInterface.php';
require_once 'src/Ferret/Detector/DetectorAbstract.php';
require_once 'src/Ferret/Detector/MIMEType.php';

/**
 * Test class for MIMEType.
 * @group Ferret
   * @group ExternalLibrary
 * @group Fileinfo
 */
class MIMETypeTest extends \PHPUnit_Framework_TestCase {

  /**
   * @var MIMEType
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp() {
    $this->object = new MIMEType;
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown() {
    
  }

  /**
   * @todo Implement testDetect().
   */
  public function testDetect() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
    'This test has not been implemented yet.'
    );
  }

}
