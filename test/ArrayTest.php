<?php

require_once './src/Array/ArrayFunc.php';

use PHPUnit\Framework\TestCase;
use Array\ArrayFunc;

class ArrayTest extends TestCase {

    /** インスタンス */
    protected $func;

    /**
     * テストを開始する前にコールされる
     *
     * @return void
     */
    protected function setUp(): void {
        $this->func = new ArrayFunc();
    } 

    /**
     * @test
     */
    public function testArrayCast() {

        $input = ['1', '2', '3'];
        $output = [1, 2, 3];
        $this->assertEquals($output, $this->func->array_cast($input, 'int'));
    }

}