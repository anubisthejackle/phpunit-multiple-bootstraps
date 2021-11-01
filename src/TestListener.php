<?php
/**
 * The TestListener class.
 */

namespace Anubisthejackle\PHPUnit\Bootstrap;

use PHPUnit\Framework\TestSuite;

class TestListener extends AbstractTestListener {
    
    private static $bootstraps = [];

    public function __construct( string $testSuiteName, string $bootstrap ) {
        $testSuiteName = strtolower( $testSuiteName );

        if( empty( self::$bootstraps[$testSuiteName] ) ){
            self::$bootstraps[$testSuiteName] = [];
        }

        $suiteBootstraps = self::$bootstraps[$testSuiteName];
        $suiteBootstraps[] = $bootstrap;

        self::$bootstraps[$testSuiteName] = array_unique( $suiteBootstraps );
    }

    public function startTestSuite(TestSuite $suite): void{

        $testSuiteName = strtolower( $suite->getName() );

        if( empty( self::$bootstraps[ $testSuiteName ] ) ) {
            return;
        }

        foreach( self::$bootstraps[ $testSuiteName ] as $bootstrap ) {
            include_once $bootstrap;
        }
    }

}