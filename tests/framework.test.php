<?php


use Vinala\Kernel\Foundation\Application;
use Vinala\Kernel\Testing\TestCase as BaseTestCase;

/**
 * FrameworkTest to test if the frameworkcan run it self.
 */
class FrameworkTest extends BaseTestCase
{
    /**
     * Check if owner name not empty.
     *
     * @return bool
     * @test
     */
    public function canRun()
    {
        $result = Application::getTestResult();

        return $this->assertFalse($result, 'The Framework can\'t run');
    }
}
