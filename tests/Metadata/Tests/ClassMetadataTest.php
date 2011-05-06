<?php

namespace Metadata\Tests;

use Metadata\ClassMetadata;

class ClassMetadataTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $metadata = new ClassMetadata('Metadata\Tests\Fixtures\TestObject');

        $this->assertEquals('Metadata\Tests\Fixtures\TestObject', $metadata->name);
        $this->assertEquals('Metadata\Tests\Fixtures\TestObject', $metadata->reflection->getName());
    }

    public function testSerializeUnserialize()
    {
        $metadata = new ClassMetadata('Metadata\Tests\Fixtures\TestObject');

        $this->assertEquals($metadata, unserialize(serialize($metadata)));
    }
}