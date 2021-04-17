<?php
declare(strict_types=1);

namespace AclCaching\Test\TestCase\View\Helper;

use AclCaching\View\Helper\AclCachingHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * AclCaching\View\Helper\AclCachingHelper Test Case
 */
class AclCachingHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \AclCaching\View\Helper\AclCachingHelper
     */
    protected $AclCaching;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $view = new View();
        $this->AclCaching = new AclCachingHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->AclCaching);

        parent::tearDown();
    }
}
