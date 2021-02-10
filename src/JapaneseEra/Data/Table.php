<?php

namespace Selen\JapaneseEra\Data;

class Table
{
    private $recordList = [];

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
     * 指定した日時の和暦情報を取得します。
     *
     * @return Record|null 見つかった場合はRecordを、見つからない場合はnullを返します
     */
    public function fetch(\DateTime $date)
    {
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
