<?php
/**
 * Original Package.
 *
 * @license MIT
 * @copyright 2021 hazuki3417 all rights reserved.
 */

namespace Selen\JapaneseEra;

use Selen\JapaneseEra\Data\Table;
use Selen\JapaneseEra\States\Convert;

/**
 * 西暦を和暦に変換するクラス.
 */
class DateTime
{
    /**
     * @var \DateTime
     */
    private $dateTime;

    /**
     * @var Table
     */
    private $table;

    private $isYearConvert = false;
    private $isEraAdd      = false;

    /**
     * Selen\JapaneseEra\DateTimeオブジェクトを返します。
     *
     * @param ?\DateTime $dateTime
     */
    public function __construct(\DateTime $dateTime)
    {
        $dateTime       = new \DateTime();
        $this->table    = new Table();
        $this->dateTime = $dateTime;
    }

    /**
     * @param string $style
     *
     * @return string
     */
    public function format($style)
    {
        if (!$this->existsYearIdentifier($style)) {
            // 年変換識別子なしの処理
            return $this->dateTime->format($style);
        }

        if (!Convert::isConvert()) {
            // 和暦変換なしの処理
            return $this->dateTime->format($style);
        }

        // 和暦変換ありの処理

        $jpOriginDate = $this->table->fetch($this->dateTime);

        if ($jpOriginDate === null) {
            // 和暦に対応していない日時だったときの処理
            return $this->dateTime->format($style);
        }

        // 和暦に対応した日時だったときの処理

        // 西暦と和暦の差分年を計算
        $jpDiffYear = $this->dateTime->diff($jpOriginDate->startDateTime())->y;

        // 和暦名を取得
        $jpEraName = $jpOriginDate->name();

        // 和暦表記の文字列を作成
        $jpYearShort = sprintf('%s%d', $jpEraName, $jpDiffYear);
        $jpYearLong  = sprintf('%s%02d', $jpEraName, $jpDiffYear);

        $targetStr  = ['Y', 'y'];
        $replaceStr = [$jpYearLong, $jpYearShort];

        // Y / y 識別子を和暦表記の文字列で置換
        $style = str_replace($targetStr, $replaceStr, $style);

        // 標準の日付フォーマット開始
        return $this->dateTime->format($style);
    }

    /**
     * 西暦年数を和暦年数に変換します。
     *
     * @param bool $useGannnen 初年度表記を元にするかどうか指定します
     */
    public function toJpYear($useGannnen = false)
    {
        if (!is_bool($useGannnen)) {
            throw new \InvalidArgumentException('Invalid argument type.');
        }

        $useGannnen ?
            Convert::setYearTypeGannnen() :
            Convert::setYearTypeNumber();
        return $this;
    }

    /**
     * 元号を追加します。
     *
     * @param bool $useShort 省略文字（アルファベット）にするかどうか指定します
     */
    public function toJpEra($useShort = false)
    {
        if (!is_bool($useShort)) {
            throw new \InvalidArgumentException('Invalid argument type.');
        }

        return $this;
    }

    /**
     * 年変換文字列（Y/y）が存在するか確認します。
     *
     * @param string $formatStr
     *
     * @return bool 存在する場合はtrueを、存在しない場合はfalseを返します
     */
    private function existsYearIdentifier($formatStr)
    {
        return stripos($formatStr, 'y') !== false;
    }

    // /**
    //  * 西暦を和暦に変換します。
    //  *
    //  * @param string $str
    //  * @param mixed $format
    //  */
    // public static function toJpDate($str, $format)
    // {
    //     $self = new self(new \DateTime($str));

    //     return $self->format($format);
    // }

    // /**
    //  * 和暦を西暦に変換します。
    //  *
    //  * @param string $str
    //  * @param mixed $format
    //  *
    //  * @return string
    //  */
    // public static function toAdDate($str, $format)
    // {
    //     $self = new self(new \DateTime($str));

    //     return $self->format($format);
    // }
}
