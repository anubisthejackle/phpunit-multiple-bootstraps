<?php

namespace Anubisthejackle\PHPUnit\Bootstrap;

class Bootstrap {

    private $testSuiteName;

    private $testSuiteFile;

    public function __construct( $testSuiteName = "None", $testSuiteFile = "None" ) {
        $this->testSuiteName = $testSuiteName;
        $this->testSuiteFile = $testSuiteFile;
    }

    public function loadTestSuiteBootstrap( string $testSuiteName ) {
        if( $this->testSuiteName !== $testSuiteName ) {
            return;
        }

        include_once $this->testSuiteFile;
    }
}