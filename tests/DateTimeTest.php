<?php

use PHPUnit\Framework\TestCase;
use Selen\JapaneseEra\DateTime;

/**
 * @group Selen\JapaneseEra\DateTime
 *
 * @coversDefaultClass \Selen\JapaneseEra\DateTime
 *
 * @internal
 */
class DateTimeTest extends TestCase
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

    /**
     * 西暦から和暦への変換をテスト（0パディングあり）
     *
     * @dataProvider dataProviderAdToJpLongYearTest
     *
     * @param string $testData
     * @param string $expetedData
     */
    public function testFormatAdToJpLongYear($testData, $expetedData)
    {
        $dateTime   = new DateTime(new \DateTime($testData));
        var_dump($testData);
        $formatDate = $dateTime->toJpYear()->format('Y');
        $this->assertEquals($formatDate, $expetedData);
        $this->assertTrue(true);
    }

    /**
     * 西暦から和暦への変換をテスト（0パディングなし）
     *
     * @dataProvider dataProviderAdToJpShortYearTest
     *
     * @param string $testData
     * @param string $expetedData
     */
    public function testFormatAdToJpShortYear($testData, $expetedData)
    {
        $dateTime   = new DateTime(new \DateTime($testData));
        var_dump($testData);
        $formatDate = $dateTime->toJpYear()->format('y');
        $this->assertEquals($formatDate, $expetedData);
        $this->assertTrue(true);
    }

    /**
     * 西暦から和暦への変換テストパターン（0パディングあり）
     */
    public function dataProviderAdToJpLongYearTest()
    {
        // 網羅したらテストパターン名を数字付きに修正
        return [
            // 明治以前は変換できないため通常のフォーマットで変換される
            /*'testPatten' =>*/ ['testData' => '18670101', 'expeted' => '1867'],

            /*'testPatten' =>*/ ['testData' => '18681023', 'expeted' => '明治01'],
            /*'testPatten' =>*/ ['testData' => '18690101', 'expeted' => '明治02'],
            /*'testPatten' =>*/ ['testData' => '18700101', 'expeted' => '明治03'],
            /*'testPatten' =>*/ ['testData' => '18710101', 'expeted' => '明治04'],
            /*'testPatten' =>*/ ['testData' => '18720101', 'expeted' => '明治05'],
            /*'testPatten' =>*/ ['testData' => '18730101', 'expeted' => '明治06'],
            /*'testPatten' =>*/ ['testData' => '18740101', 'expeted' => '明治07'],
            /*'testPatten' =>*/ ['testData' => '18750101', 'expeted' => '明治08'],
            /*'testPatten' =>*/ ['testData' => '18760101', 'expeted' => '明治09'],
            /*'testPatten' =>*/ ['testData' => '18770101', 'expeted' => '明治10'],
            /*'testPatten' =>*/ ['testData' => '18780101', 'expeted' => '明治11'],
            /*'testPatten' =>*/ ['testData' => '18790101', 'expeted' => '明治12'],
            /*'testPatten' =>*/ ['testData' => '18800101', 'expeted' => '明治13'],
            /*'testPatten' =>*/ ['testData' => '18810101', 'expeted' => '明治14'],
            /*'testPatten' =>*/ ['testData' => '18820101', 'expeted' => '明治15'],
            /*'testPatten' =>*/ ['testData' => '18830101', 'expeted' => '明治16'],
            /*'testPatten' =>*/ ['testData' => '18840101', 'expeted' => '明治17'],
            /*'testPatten' =>*/ ['testData' => '18850101', 'expeted' => '明治18'],
            /*'testPatten' =>*/ ['testData' => '18860101', 'expeted' => '明治19'],
            /*'testPatten' =>*/ ['testData' => '18870101', 'expeted' => '明治20'],
            /*'testPatten' =>*/ ['testData' => '18880101', 'expeted' => '明治21'],
            /*'testPatten' =>*/ ['testData' => '18890101', 'expeted' => '明治22'],
            /*'testPatten' =>*/ ['testData' => '18900101', 'expeted' => '明治23'],
            /*'testPatten' =>*/ ['testData' => '18910101', 'expeted' => '明治24'],
            /*'testPatten' =>*/ ['testData' => '18920101', 'expeted' => '明治25'],
            /*'testPatten' =>*/ ['testData' => '18930101', 'expeted' => '明治26'],
            /*'testPatten' =>*/ ['testData' => '18940101', 'expeted' => '明治27'],
            /*'testPatten' =>*/ ['testData' => '18950101', 'expeted' => '明治28'],
            /*'testPatten' =>*/ ['testData' => '18960101', 'expeted' => '明治29'],
            /*'testPatten' =>*/ ['testData' => '18970101', 'expeted' => '明治30'],
            /*'testPatten' =>*/ ['testData' => '18980101', 'expeted' => '明治31'],
            /*'testPatten' =>*/ ['testData' => '18990101', 'expeted' => '明治32'],
            /*'testPatten' =>*/ ['testData' => '19000101', 'expeted' => '明治33'],
            /*'testPatten' =>*/ ['testData' => '19010101', 'expeted' => '明治34'],
            /*'testPatten' =>*/ ['testData' => '19020101', 'expeted' => '明治35'],
            /*'testPatten' =>*/ ['testData' => '19030101', 'expeted' => '明治36'],
            /*'testPatten' =>*/ ['testData' => '19040101', 'expeted' => '明治37'],
            /*'testPatten' =>*/ ['testData' => '19050101', 'expeted' => '明治38'],
            /*'testPatten' =>*/ ['testData' => '19060101', 'expeted' => '明治39'],
            /*'testPatten' =>*/ ['testData' => '19070101', 'expeted' => '明治40'],
            /*'testPatten' =>*/ ['testData' => '19080101', 'expeted' => '明治41'],
            /*'testPatten' =>*/ ['testData' => '19090101', 'expeted' => '明治42'],
            /*'testPatten' =>*/ ['testData' => '19100101', 'expeted' => '明治43'],
            /*'testPatten' =>*/ ['testData' => '19110101', 'expeted' => '明治44'],

            /*'testPatten' =>*/ ['testData' => '19120729', 'expeted' => '明治45'],
            // 境界値テスト
            /*'testPatten' =>*/ ['testData' => '19120730', 'expeted' => '大正01'],

            /*'testPatten' =>*/ ['testData' => '19130101', 'expeted' => '大正02'],
            /*'testPatten' =>*/ ['testData' => '19140101', 'expeted' => '大正03'],
            /*'testPatten' =>*/ ['testData' => '19150101', 'expeted' => '大正04'],
            /*'testPatten' =>*/ ['testData' => '19160101', 'expeted' => '大正05'],
            /*'testPatten' =>*/ ['testData' => '19170101', 'expeted' => '大正06'],
            /*'testPatten' =>*/ ['testData' => '19180101', 'expeted' => '大正07'],
            /*'testPatten' =>*/ ['testData' => '19190101', 'expeted' => '大正08'],
            /*'testPatten' =>*/ ['testData' => '19200101', 'expeted' => '大正09'],
            /*'testPatten' =>*/ ['testData' => '19210101', 'expeted' => '大正10'],
            /*'testPatten' =>*/ ['testData' => '19220101', 'expeted' => '大正11'],
            /*'testPatten' =>*/ ['testData' => '19230101', 'expeted' => '大正12'],
            /*'testPatten' =>*/ ['testData' => '19240101', 'expeted' => '大正13'],
            /*'testPatten' =>*/ ['testData' => '19250101', 'expeted' => '大正14'],

            /*'testPatten' =>*/ ['testData' => '19261224', 'expeted' => '大正15'],
            // 境界値テスト
            /*'testPatten' =>*/ ['testData' => '19261225', 'expeted' => '昭和01'],

            /*'testPatten' =>*/ ['testData' => '19270101', 'expeted' => '昭和02'],
            /*'testPatten' =>*/ ['testData' => '19280101', 'expeted' => '昭和03'],
            /*'testPatten' =>*/ ['testData' => '19290101', 'expeted' => '昭和04'],
            /*'testPatten' =>*/ ['testData' => '19300101', 'expeted' => '昭和05'],
            /*'testPatten' =>*/ ['testData' => '19310101', 'expeted' => '昭和06'],
            /*'testPatten' =>*/ ['testData' => '19320101', 'expeted' => '昭和07'],
            /*'testPatten' =>*/ ['testData' => '19330101', 'expeted' => '昭和08'],
            /*'testPatten' =>*/ ['testData' => '19340101', 'expeted' => '昭和09'],
            /*'testPatten' =>*/ ['testData' => '19350101', 'expeted' => '昭和10'],
            /*'testPatten' =>*/ ['testData' => '19360101', 'expeted' => '昭和11'],
            /*'testPatten' =>*/ ['testData' => '19370101', 'expeted' => '昭和12'],
            /*'testPatten' =>*/ ['testData' => '19380101', 'expeted' => '昭和13'],
            /*'testPatten' =>*/ ['testData' => '19390101', 'expeted' => '昭和14'],
            /*'testPatten' =>*/ ['testData' => '19400101', 'expeted' => '昭和15'],
            /*'testPatten' =>*/ ['testData' => '19410101', 'expeted' => '昭和16'],
            /*'testPatten' =>*/ ['testData' => '19420101', 'expeted' => '昭和17'],
            /*'testPatten' =>*/ ['testData' => '19430101', 'expeted' => '昭和18'],
            /*'testPatten' =>*/ ['testData' => '19440101', 'expeted' => '昭和19'],
            /*'testPatten' =>*/ ['testData' => '19450101', 'expeted' => '昭和20'],
            /*'testPatten' =>*/ ['testData' => '19460101', 'expeted' => '昭和21'],
            /*'testPatten' =>*/ ['testData' => '19470101', 'expeted' => '昭和22'],
            /*'testPatten' =>*/ ['testData' => '19480101', 'expeted' => '昭和23'],
            /*'testPatten' =>*/ ['testData' => '19490101', 'expeted' => '昭和24'],
            /*'testPatten' =>*/ ['testData' => '19500101', 'expeted' => '昭和25'],
            /*'testPatten' =>*/ ['testData' => '19510101', 'expeted' => '昭和26'],
            /*'testPatten' =>*/ ['testData' => '19520101', 'expeted' => '昭和27'],
            /*'testPatten' =>*/ ['testData' => '19530101', 'expeted' => '昭和28'],
            /*'testPatten' =>*/ ['testData' => '19540101', 'expeted' => '昭和29'],
            /*'testPatten' =>*/ ['testData' => '19550101', 'expeted' => '昭和30'],
            /*'testPatten' =>*/ ['testData' => '19560101', 'expeted' => '昭和31'],
            /*'testPatten' =>*/ ['testData' => '19570101', 'expeted' => '昭和32'],
            /*'testPatten' =>*/ ['testData' => '19580101', 'expeted' => '昭和33'],
            /*'testPatten' =>*/ ['testData' => '19590101', 'expeted' => '昭和34'],
            /*'testPatten' =>*/ ['testData' => '19600101', 'expeted' => '昭和35'],
            /*'testPatten' =>*/ ['testData' => '19610101', 'expeted' => '昭和36'],
            /*'testPatten' =>*/ ['testData' => '19620101', 'expeted' => '昭和37'],
            /*'testPatten' =>*/ ['testData' => '19630101', 'expeted' => '昭和38'],
            /*'testPatten' =>*/ ['testData' => '19640101', 'expeted' => '昭和39'],
            /*'testPatten' =>*/ ['testData' => '19650101', 'expeted' => '昭和40'],
            /*'testPatten' =>*/ ['testData' => '19660101', 'expeted' => '昭和41'],
            /*'testPatten' =>*/ ['testData' => '19670101', 'expeted' => '昭和42'],
            /*'testPatten' =>*/ ['testData' => '19680101', 'expeted' => '昭和43'],
            /*'testPatten' =>*/ ['testData' => '19690101', 'expeted' => '昭和44'],
            /*'testPatten' =>*/ ['testData' => '19700101', 'expeted' => '昭和45'],
            /*'testPatten' =>*/ ['testData' => '19710101', 'expeted' => '昭和46'],
            /*'testPatten' =>*/ ['testData' => '19720101', 'expeted' => '昭和47'],
            /*'testPatten' =>*/ ['testData' => '19730101', 'expeted' => '昭和48'],
            /*'testPatten' =>*/ ['testData' => '19740101', 'expeted' => '昭和49'],
            /*'testPatten' =>*/ ['testData' => '19750101', 'expeted' => '昭和50'],
            /*'testPatten' =>*/ ['testData' => '19760101', 'expeted' => '昭和51'],
            /*'testPatten' =>*/ ['testData' => '19770101', 'expeted' => '昭和52'],
            /*'testPatten' =>*/ ['testData' => '19780101', 'expeted' => '昭和53'],
            /*'testPatten' =>*/ ['testData' => '19790101', 'expeted' => '昭和54'],
            /*'testPatten' =>*/ ['testData' => '19800101', 'expeted' => '昭和55'],
            /*'testPatten' =>*/ ['testData' => '19810101', 'expeted' => '昭和56'],
            /*'testPatten' =>*/ ['testData' => '19820101', 'expeted' => '昭和57'],
            /*'testPatten' =>*/ ['testData' => '19830101', 'expeted' => '昭和58'],
            /*'testPatten' =>*/ ['testData' => '19840101', 'expeted' => '昭和59'],
            /*'testPatten' =>*/ ['testData' => '19850101', 'expeted' => '昭和60'],
            /*'testPatten' =>*/ ['testData' => '19860101', 'expeted' => '昭和61'],
            /*'testPatten' =>*/ ['testData' => '19870101', 'expeted' => '昭和62'],
            /*'testPatten' =>*/ ['testData' => '19880101', 'expeted' => '昭和63'],

            /*'testPatten' =>*/ ['testData' => '19890107', 'expeted' => '昭和64'],
            // 境界値テスト
            /*'testPatten' =>*/ ['testData' => '19890108', 'expeted' => '平成01'],

            /*'testPatten' =>*/ ['testData' => '19900101', 'expeted' => '平成02'],
            /*'testPatten' =>*/ ['testData' => '19910101', 'expeted' => '平成03'],
            /*'testPatten' =>*/ ['testData' => '19920101', 'expeted' => '平成04'],
            /*'testPatten' =>*/ ['testData' => '19930101', 'expeted' => '平成05'],
            /*'testPatten' =>*/ ['testData' => '19940101', 'expeted' => '平成06'],
            /*'testPatten' =>*/ ['testData' => '19950101', 'expeted' => '平成07'],
            /*'testPatten' =>*/ ['testData' => '19960101', 'expeted' => '平成08'],
            /*'testPatten' =>*/ ['testData' => '19970101', 'expeted' => '平成09'],
            /*'testPatten' =>*/ ['testData' => '19980101', 'expeted' => '平成10'],
            /*'testPatten' =>*/ ['testData' => '19990101', 'expeted' => '平成11'],
            /*'testPatten' =>*/ ['testData' => '20000101', 'expeted' => '平成12'],
            /*'testPatten' =>*/ ['testData' => '20010101', 'expeted' => '平成13'],
            /*'testPatten' =>*/ ['testData' => '20020101', 'expeted' => '平成14'],
            /*'testPatten' =>*/ ['testData' => '20030101', 'expeted' => '平成15'],
            /*'testPatten' =>*/ ['testData' => '20040101', 'expeted' => '平成16'],
            /*'testPatten' =>*/ ['testData' => '20050101', 'expeted' => '平成17'],
            /*'testPatten' =>*/ ['testData' => '20060101', 'expeted' => '平成18'],
            /*'testPatten' =>*/ ['testData' => '20070101', 'expeted' => '平成19'],
            /*'testPatten' =>*/ ['testData' => '20080101', 'expeted' => '平成20'],
            /*'testPatten' =>*/ ['testData' => '20090101', 'expeted' => '平成21'],
            /*'testPatten' =>*/ ['testData' => '20100101', 'expeted' => '平成22'],
            /*'testPatten' =>*/ ['testData' => '20110101', 'expeted' => '平成23'],
            /*'testPatten' =>*/ ['testData' => '20120101', 'expeted' => '平成24'],
            /*'testPatten' =>*/ ['testData' => '20130101', 'expeted' => '平成25'],
            /*'testPatten' =>*/ ['testData' => '20140101', 'expeted' => '平成26'],
            /*'testPatten' =>*/ ['testData' => '20150101', 'expeted' => '平成27'],
            /*'testPatten' =>*/ ['testData' => '20160101', 'expeted' => '平成28'],
            /*'testPatten' =>*/ ['testData' => '20170101', 'expeted' => '平成29'],
            /*'testPatten' =>*/ ['testData' => '20180101', 'expeted' => '平成30'],

            /*'testPatten' =>*/ ['testData' => '20190430', 'expeted' => '平成31'],
            // 境界値テスト
            /*'testPatten' =>*/ ['testData' => '20190501', 'expeted' => '令和01'],

            /*'testPatten' =>*/ ['testData' => '20200101', 'expeted' => '令和02'],
            /*'testPatten' =>*/ ['testData' => '20210101', 'expeted' => '令和03'],
            /*'testPatten' =>*/ ['testData' => '20220101', 'expeted' => '令和04'],
            /*'testPatten' =>*/ ['testData' => '20230101', 'expeted' => '令和05'],
            /*'testPatten' =>*/ ['testData' => '20240101', 'expeted' => '令和06'],
            /*'testPatten' =>*/ ['testData' => '20250101', 'expeted' => '令和07'],
            /*'testPatten' =>*/ ['testData' => '20260101', 'expeted' => '令和08'],
            /*'testPatten' =>*/ ['testData' => '20270101', 'expeted' => '令和09'],
            /*'testPatten' =>*/ ['testData' => '20280101', 'expeted' => '令和10'],
        ];
    }

    /**
     * 西暦から和暦への変換テストパターン（0パディングなし）
     */
    public function dataProviderAdToJpShortYearTest()
    {
        // 網羅したらテストパターン名を数字付きに修正
        return [
            // 明治以前は変換できないため通常のフォーマットで変換される
            /*'testPatten' =>*/ ['testData' => '18670101', 'expeted' => '1867'],

            /*'testPatten' =>*/ ['testData' => '18681023', 'expeted' => '明治1'],
            /*'testPatten' =>*/ ['testData' => '18690101', 'expeted' => '明治2'],
            /*'testPatten' =>*/ ['testData' => '18700101', 'expeted' => '明治3'],
            /*'testPatten' =>*/ ['testData' => '18710101', 'expeted' => '明治4'],
            /*'testPatten' =>*/ ['testData' => '18720101', 'expeted' => '明治5'],
            /*'testPatten' =>*/ ['testData' => '18730101', 'expeted' => '明治6'],
            /*'testPatten' =>*/ ['testData' => '18740101', 'expeted' => '明治7'],
            /*'testPatten' =>*/ ['testData' => '18750101', 'expeted' => '明治8'],
            /*'testPatten' =>*/ ['testData' => '18760101', 'expeted' => '明治9'],
            /*'testPatten' =>*/ ['testData' => '18770101', 'expeted' => '明治10'],

            /*'testPatten' =>*/ ['testData' => '19120729', 'expeted' => '明治45'],
            // 境界値テスト
            /*'testPatten' =>*/ ['testData' => '19120730', 'expeted' => '大正1'],

            /*'testPatten' =>*/ ['testData' => '19130101', 'expeted' => '大正2'],
            /*'testPatten' =>*/ ['testData' => '19140101', 'expeted' => '大正3'],
            /*'testPatten' =>*/ ['testData' => '19150101', 'expeted' => '大正4'],
            /*'testPatten' =>*/ ['testData' => '19160101', 'expeted' => '大正5'],
            /*'testPatten' =>*/ ['testData' => '19170101', 'expeted' => '大正6'],
            /*'testPatten' =>*/ ['testData' => '19180101', 'expeted' => '大正7'],
            /*'testPatten' =>*/ ['testData' => '19190101', 'expeted' => '大正8'],
            /*'testPatten' =>*/ ['testData' => '19200101', 'expeted' => '大正9'],
            /*'testPatten' =>*/ ['testData' => '19210101', 'expeted' => '大正10'],

            /*'testPatten' =>*/ ['testData' => '19261224', 'expeted' => '大正15'],
            // 境界値テスト
            /*'testPatten' =>*/ ['testData' => '19261225', 'expeted' => '昭和1'],

            /*'testPatten' =>*/ ['testData' => '19270101', 'expeted' => '昭和2'],
            /*'testPatten' =>*/ ['testData' => '19280101', 'expeted' => '昭和3'],
            /*'testPatten' =>*/ ['testData' => '19290101', 'expeted' => '昭和4'],
            /*'testPatten' =>*/ ['testData' => '19300101', 'expeted' => '昭和5'],
            /*'testPatten' =>*/ ['testData' => '19310101', 'expeted' => '昭和6'],
            /*'testPatten' =>*/ ['testData' => '19320101', 'expeted' => '昭和7'],
            /*'testPatten' =>*/ ['testData' => '19330101', 'expeted' => '昭和8'],
            /*'testPatten' =>*/ ['testData' => '19340101', 'expeted' => '昭和9'],
            /*'testPatten' =>*/ ['testData' => '19350101', 'expeted' => '昭和10'],

            /*'testPatten' =>*/ ['testData' => '19890107', 'expeted' => '昭和64'],
            // 境界値テスト
            /*'testPatten' =>*/ ['testData' => '19890108', 'expeted' => '平成1'],

            /*'testPatten' =>*/ ['testData' => '19900101', 'expeted' => '平成2'],
            /*'testPatten' =>*/ ['testData' => '19910101', 'expeted' => '平成3'],
            /*'testPatten' =>*/ ['testData' => '19920101', 'expeted' => '平成4'],
            /*'testPatten' =>*/ ['testData' => '19930101', 'expeted' => '平成5'],
            /*'testPatten' =>*/ ['testData' => '19940101', 'expeted' => '平成6'],
            /*'testPatten' =>*/ ['testData' => '19950101', 'expeted' => '平成7'],
            /*'testPatten' =>*/ ['testData' => '19960101', 'expeted' => '平成8'],
            /*'testPatten' =>*/ ['testData' => '19970101', 'expeted' => '平成9'],
            /*'testPatten' =>*/ ['testData' => '19980101', 'expeted' => '平成10'],

            /*'testPatten' =>*/ ['testData' => '20190430', 'expeted' => '平成31'],
            // 境界値テスト
            /*'testPatten' =>*/ ['testData' => '20190501', 'expeted' => '令和1'],

            /*'testPatten' =>*/ ['testData' => '20200101', 'expeted' => '令和2'],
            /*'testPatten' =>*/ ['testData' => '20210101', 'expeted' => '令和3'],
            /*'testPatten' =>*/ ['testData' => '20220101', 'expeted' => '令和4'],
            /*'testPatten' =>*/ ['testData' => '20230101', 'expeted' => '令和5'],
            /*'testPatten' =>*/ ['testData' => '20240101', 'expeted' => '令和6'],
            /*'testPatten' =>*/ ['testData' => '20250101', 'expeted' => '令和7'],
            /*'testPatten' =>*/ ['testData' => '20260101', 'expeted' => '令和8'],
            /*'testPatten' =>*/ ['testData' => '20270101', 'expeted' => '令和9'],
            /*'testPatten' =>*/ ['testData' => '20280101', 'expeted' => '令和10'],
        ];
    }
}
