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
    public function testCastArray() {

        $input = ['1', '2', '3'];
        $output = [1, 2, 3];
        $this->assertEquals($output, $this->func->cast_array($input, 'int'));
    }


    /**
     * @test
     */
    public function testConvertToOneDimensionalArray() {

        $input = [
            ['a', 'b', 'c'],
            ['d', 'e']
        ];
        $output = ['a', 'b', 'c', 'd', 'e'];
        $this->assertEquals($output, $this->func->convert_to_one_dimensional_array($input));
    }

    /**
     * @test
     */
    public function testConcatArray() {

        $input = ['a', 'b', 'c'];
        $output = 'a,b,c';
        $this->assertEquals($output, $this->func->concat_array($input));
    }
}