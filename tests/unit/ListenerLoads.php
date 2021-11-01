<?php

namespace Anubisthejackle\PHPUnit\Bootstrap\Tests;

use PHPUnit\Framework\TestCase;

class ListenerLoads extends TestCase {
    public function testUnitTestBootstrapLoaded() {
        $this->assertTrue( defined('__ANUBISTHEJACKLE_UNIT_TEST_BOOTSTRAP_LOADED') );
    }

    /**
     * @preserveGlobalState disabled
     * @runInSeparateProcess
     */
    public function testUnitTestBootstrapLoadedInProcessIsolation() {
        $this->assertFalse( defined('__ANUBISTHEJACKLE_UNIT_TEST_BOOTSTRAP_LOADED_TWICE') );
    }
}