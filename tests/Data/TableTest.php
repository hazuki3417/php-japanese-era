<?php

use PHPUnit\Framework\TestCase;
use Selen\JapaneseEra\Data\Table;

/**
 * @group Selen
 * @group Selen/JapaneseEra
 * @group Selen/JapaneseEra/Data
 * @group Selen/JapaneseEra/Data/Table
 *
 * @coversDefaultClass \Selen\JapaneseEra\Data\Table
 *
 * @see \Selen\JapaneseEra\Data\Table ソースコード
 *
 * @internal
 *
 * [Command]
 * ./vendor/bin/phpunit --group=Selen/JapaneseEra/Data/Table
 */
class TableTest extends TestCase
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
        $instance = new Table();
        $this->assertInstanceOf(Table::class, $instance);
    }

    /**
     * 対応していない日時を指定したときのテスト
     */
    public function testFetchNull()
    {
        $instance = new Table();
        $record   = $instance->fetch(new \DateTime('18681022'));

        $this->assertNull($record);
    }

    /**
     * 境界値テスト
     *
     * @dataProvider dataProviderPatten1TestFetch
     *
     * @param mixed $testData テストデータ
     * @param mixed $expectedData 期待値
     */
    public function testFetch1($testData, $expectedData)
    {
        $instance = new Table();
        $record   = $instance->fetch(new \DateTime($testData));

        $verifiableData = [
            'name'      => $record->name(),
            'alpha'     => $record->alpha(),
            'startDate' => $record->startDateTime()->format('Ymd'),
            'endDate'   => $record->endDateTime()->format('Ymd'),
        ];

        $this->assertEquals($verifiableData, $expectedData);
    }

    /**
     * 境界値テストパターン
     *
     * @return array
     */
    public function dataProviderPatten1TestFetch()
    {
        return [
            // 境界値テスト
            'testPatten1' => [
                'testData'     => '18681023',
                'expectedData' => $this->expectedDataMeiji(),
            ],
            'testPatten2' => [
                'testData'     => '19120729',
                'expectedData' => $this->expectedDataMeiji(),
            ],
            'testPatten3' => [
                'testData'     => '19120730',
                'expectedData' => $this->expectedDataTaisyou(),
            ],
            'testPatten4' => [
                'testData'     => '19261224',
                'expectedData' => $this->expectedDataTaisyou(),
            ],
            'testPatten5' => [
                'testData'     => '19261225',
                'expectedData' => $this->expectedDataSyouwa(),
            ],
            'testPatten6' => [
                'testData'     => '19890107',
                'expectedData' => $this->expectedDataSyouwa(),
            ],
            'testPatten7' => [
                'testData'     => '19890108',
                'expectedData' => $this->expectedDataHeisei(),
            ],
            'testPatten8' => [
                'testData'     => '20190430',
                'expectedData' => $this->expectedDataHeisei(),
            ],
            'testPatten9' => [
                'testData'     => '20190501',
                'expectedData' => $this->expectedDataReiwa(),
            ],
            'testPatten10' => [
                'testData'     => '99991231',
                'expectedData' => $this->expectedDataReiwa(),
            ],
        ];
    }

    public function expectedDataMeiji()
    {
        return [
            'name'      => '明治',
            'alpha'     => 'M',
            'startDate' => '18681023',
            'endDate'   => '19120729',
        ];
    }

    public function expectedDataTaisyou()
    {
        return [
            'name'      => '大正',
            'alpha'     => 'T',
            'startDate' => '19120730',
            'endDate'   => '19261224',
        ];
    }

    public function expectedDataSyouwa()
    {
        return [
            'name'      => '昭和',
            'alpha'     => 'S',
            'startDate' => '19261225',
            'endDate'   => '19890107',
        ];
    }

    public function expectedDataHeisei()
    {
        return [
            'name'      => '平成',
            'alpha'     => 'H',
            'startDate' => '19890108',
            'endDate'   => '20190430',
        ];
    }

    public function expectedDataReiwa()
    {
        return [
            'name'      => '令和',
            'alpha'     => 'R',
            'startDate' => '20190501',
            'endDate'   => '99991231',
        ];
    }
}
