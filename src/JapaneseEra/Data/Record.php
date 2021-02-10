<?php

namespace Selen\JapaneseEra\Data;

use InvalidArgumentException;

/**
 * 和暦情報を保持するクラス
 *
 * @method mixed methodName()
 *
 * @property mixed $name
 */
class Record
{
    /**
     * @var string 和暦名を保持するプロパティ
     */
    private $name;

    /**
     * @var string 和暦名（アルファベット）を保持するプロパティ
     */
    private $alpha;

    /**
     * @var \DateTime 和暦の開始日時を保持するプロパティ
     */
    private $startDateTime;

    /**
     * @var \DateTime 和暦の終了日時を保持するプロパティ
     */
    private $endDateTime;

    /**
     * コンストラクター
     *
     * @param string $name 和暦名を渡します
     * @param string $alpha 和暦名（アルファベット）を渡します
     * @param \DateTime $start 和暦の開始日時を渡します
     * @param \DateTime $end 和暦の終了日時を渡します
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
     * 和暦名を取得します。
     *
     * @return string 和暦名を返します
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * 和暦名（アルファベット）を取得します。
     *
     * @return string 和暦名（アルファベット）を取得します
     */
    public function alpha()
    {
        return $this->alpha;
    }

    /**
     * 和暦の開始日時を取得します。
     *
     * @return \Datetime 和暦の開始日時を取得します
     */
    public function startDateTime()
    {
        return $this->startDateTime;
    }

    /**
     * 和暦の終了日時を取得します。
     *
     * @return \Datetime 和暦の終了日時を取得します
     */
    public function endDateTime()
    {
        return $this->endDateTime;
    }
}
