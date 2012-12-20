<?php

namespace Versionable\Tests\Ferret\Detector;

/**
 * Test class for DetectorAbstract.
 * Generated by PHPUnit on 2011-10-21 at 11:53:33.
 */
class DetectorAbstractTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var DetectorAbstract
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = $this->getMockForAbstractClass('\Versionable\Ferret\Detector\DetectorAbstract');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * @todo Implement testGetHash().
     */
    public function testGetHash()
    {
        $this->assertEquals(get_class($this->object), $this->object->getHash());
    }

    /**
     * @todo Implement testEqual().
     */
    public function testEqual()
    {
        $this->assertTrue($this->object->equal($this->object));

        $this->assertFalse($this->object->equal(new \Versionable\Ferret\Detector\Pathinfo()));
    }

}