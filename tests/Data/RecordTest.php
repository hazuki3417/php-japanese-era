<?php

namespace Selen\JapaneseEra\Tests\Data;

use PHPUnit\Framework\TestCase;
use Selen\JapaneseEra\Data\Record;

/**
 * @group Selen
 * @group Selen/JapaneseEra
 * @group Selen/JapaneseEra/Data
 * @group Selen/JapaneseEra/Data/Record
 *
 * @coversDefaultClass \Selen\JapaneseEra\Data\Record
 *
 * @see \Selen\JapaneseEra\Data\Record ソースコード
 *
 * @internal
 *
 * [Command]
 * ./vendor/bin/phpunit --group=Selen/JapaneseEra/Data/Record
 */
class RecordTest extends TestCase
{
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
    }

    public function testConstruct()
    {
        $name          = '令和';
        $alpha         = 'R';
        $startDateTime = new \DateTime();
        $endDateTime   = new \DateTime();

        $instance = new Record($name, $alpha, $startDateTime, $endDateTime);
        $this->assertInstanceOf(Record::class, $instance);

        $this->assertEquals($name, $instance->name());
        $this->assertEquals($alpha, $instance->alpha());
        $this->assertEquals($startDateTime, $instance->startDateTime());
        $this->assertEquals($endDateTime, $instance->endDateTime());
    }

    public function testConstructException1()
    {
        $this->expectException(\InvalidArgumentException::class);

        new Record(true, '', new \DateTime(), new \DateTime());
    }

    public function testConstructException2()
    {
        $this->expectException(\InvalidArgumentException::class);

        new Record('', true, new \DateTime(), new \DateTime());
    }
}
