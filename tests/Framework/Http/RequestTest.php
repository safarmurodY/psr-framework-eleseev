<?php

namespace Tests\Framework\Http;

use Framework\Http\Request;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{

    protected function setUp(): void
    {
        parent::setUp();
        $_GET = [];
        $_POST = [];
    }

    public function testEmpty()
    {
        $request = new Request();

        self::assertEquals([], $request->getQueryParams());
        self::assertNull($request->getParsedBody());
    }

    public function testQueryParams()
    {
        $_GET = $data = [
            'name' => 'John',
            'age' => 28,
        ];
        $request = new Request();

        self::assertEquals($data, $request->getQueryParams());
        self::assertNull($request->getParsedBody());
    }
    public function testParsedBody()
    {

        $_POST = $data = ['title' => 'Title'];
        $request = new Request();

        self::assertEquals([], $request->getQueryParams());
        self::assertEquals($data, $request->getParsedBody());
    }

}