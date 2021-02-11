<?php

/**
 * @license MIT
 * @author hazuki3417 <hazuki3417@gmail.com>
 * @copyright 2021 hazuki3417 all rights reserved.
 */

namespace Selen\JapaneseEra\Data;

use InvalidArgumentException;

/**
 * 和暦情報を保持するクラス
 *
 * @see \Selen\JapaneseEra\Tests\Data\RecordTest テストコードクラス
 */
class Record
{
    /**
     * 和暦名を保持するプロパティ
     *
     * @var string
     */
    private $name;

    /**
     * 和暦名（アルファベット）を保持するプロパティ
     *
     * @var string
     */
    private $alpha;

    /**
     * 和暦の開始日時を保持するプロパティ
     *
     * @var \DateTime
     */
    private $startDateTime;

    /**
     * 和暦の終了日時を保持するプロパティ
     *
     * @var \DateTime
     */
    private $endDateTime;

    /**
     * 和暦情報を保持したオブジェクトを作成します
     *
     * @param string $name 和暦名を渡します
     * @param string $alpha 和暦名（アルファベット）を渡します
     * @param \DateTime $start 和暦の開始日時を渡します
     * @param \DateTime $end 和暦の終了日時を渡します
     *
     * @return Record 新しいRecordオブジェクトを返します
     */
    public function __construct(
        $name,
        $alpha,
        \DateTime $start,
        \DateTime $end
    ) {
        if (!is_string($name)) {
            throw new InvalidArgumentException('Invalid argument $name.');
        }

        if (!is_string($alpha)) {
            throw new InvalidArgumentException('Invalid argument $alpha.');
        }

        $this->name          = $name;
        $this->alpha         = $alpha;
        $this->startDateTime = $start;
        $this->endDateTime   = $end;
    }

    /**
     * 和暦名を取得します
     *
     * @return string 和暦名を返します
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * 和暦名（アルファベット）を取得します
     *
     * @return string 和暦名（アルファベット）を返します
     */
    public function alpha()
    {
        return $this->alpha;
    }

    /**
     * 和暦の開始日時を取得します
     *
     * @return \Datetime 和暦の開始日時を返します
     */
    public function startDateTime()
    {
        return $this->startDateTime;
    }

    /**
     * 和暦の終了日時を取得します
     *
     * @return \Datetime 和暦の終了日時を返します
     */
    public function endDateTime()
    {
        return $this->endDateTime;
    }
}
