<?php
/**
 * The TestListener class.
 */

namespace Anubisthejackle\PHPUnit\Bootstrap;

use PHPUnit\Framework\AssertionFailedError;
use PHPUnit\Framework\Test;
use PHPUnit\Framework\TestListener as PHPUnitListener;
use PHPUnit\Framework\TestSuite;
use PHPUnit\Framework\Warning;

abstract class AbstractTestListener implements PHPUnitListener {
    
    abstract public function startTestSuite(TestSuite $suite): void;

    public function addError(Test $test, \Throwable $t, float $time): void{}
    public function addWarning(Test $test, Warning $e, float $time): void{}
    public function addFailure(Test $test, AssertionFailedError $e, float $time): void{}
    public function addIncompleteTest(Test $test, \Throwable $t, float $time): void{}
    public function addRiskyTest(Test $test, \Throwable $t, float $time): void{}
    public function addSkippedTest(Test $test, \Throwable $t, float $time): void{}
    public function endTestSuite(TestSuite $suite): void{}
    public function startTest(Test $test): void{}
    public function endTest(Test $test, float $time): void{}
}