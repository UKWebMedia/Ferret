<?php
namespace Versionable\Ferret\Detector;

/**
 * Test class for Pathinfo.
 * Generated by PHPUnit on 2010-10-09 at 20:06:58.
 * 
 * @group Ferret
 */
class PathinfoTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Pathinfo
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
      
      $this->object = new Pathinfo;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    public function testDetect()
    {
      $this->assertEquals('text/plain', $this->object->detect(__DIR__.'/../../../data/unit.txt'));
      
    }
    
    public function testDetectFail()
    {
      $this->assertFalse($this->object->detect(__DIR__.'/../../../data/unit.false'));
      
    } 
    
    public function testSetMapping()
    {
      $this->assertTrue($this->object->setMapping(array('txt' => 'text/plain')));
    }

    public function testSetMappingFail()
    {
      $this->assertFalse($this->object->setMapping(null));
    }   
}
