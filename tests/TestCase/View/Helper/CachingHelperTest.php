<?php
declare(strict_types=1);

namespace AclCaching\Test\TestCase\View\Helper;

use AclCaching\View\Helper\CachingHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * AclCaching\View\Helper\CachingHelper Test Case
 */
class CachingHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \AclCaching\View\Helper\CachingHelper
     */
    protected $Caching;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $view = new View();
        $this->Caching = new CachingHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Caching);

        parent::tearDown();
    }
}
