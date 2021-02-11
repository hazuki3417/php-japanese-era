<?php

/**
 * @license MIT
 * @author hazuki3417 <hazuki3417@gmail.com>
 * @copyright 2021 hazuki3417 all rights reserved.
 */

namespace Selen\JapaneseEra\Data;

/**
 * 和暦情報一覧を保持するクラス
 *
 * @see \Selen\JapaneseEra\Tests\Data\TableTest テストクラス
 */
class Table
{
    /**
     * 和暦情報一覧を保持するプロパティ
     *
     * @var array
     */
    private $recordList = [];

    /**
     * 和暦情報一覧を保持したオブジェクトを作成します
     *
     * @return Table 新しいTableオブジェクトを返します
     */
    public function __construct()
    {
        $config = include __DIR__ . '/Config.php';

        foreach ($config as $data) {
            $this->recordList[] = new Record(
                $data['name'],
                $data['alpha'],
                new \DateTime($data['startDate']),
                new \DateTime($data['endDate'])
            );
        }
    }

    /**
     * 引数に指定した日時の和暦情報を取得します
     *
     * @param \DateTime $date 取得する和暦情報の日時を渡します
     *
     * @example index.php description
     *
     * @return Record|null 見つかった場合はRecordを、見つからない場合はnullを返します
     */
    public function fetch(\DateTime $date)
    {
        // FIXME: ここの処理を修正する
        /** @var Record $record */
        foreach ($this->recordList as $record) {
            if ($date < $record->startDateTime()) {
                continue;
            }

            if ($record->endDateTime() < $date) {
                continue;
            }
            return $record;
        }
    }
}
