<?php

require_once './src/Demo/Demo.php';

use PHPUnit\Framework\TestCase;
use Demo\Demo;

class DemoTest extends TestCase {

    /**
     * 1つ目のテストメソッドがコールされる前に行いたい前処理を書きます。
     */
    public static function setUpBeforeClass(): void {}


    /**
     * 各テストメソッドがコールされる前に行いたい前処理を書きます。
     */
    protected function setUp(): void {}


    /**
     * 各テストメソッドがコールされた後に行いたい後処理を書きます。
     */
    protected function tearDown(): void {}


    /**
     * 最後のテストメソッドがコールされた後に行いたい後処理を書きます。
     */
    public static function tearDownAfterClass(): void {}


    /**
     * @test
     */
    public function testDemoTest() {

        $demo = new Demo();
        $demo->name = 'taro';
        $this->assertEquals('taro', $demo->name);
    }

}