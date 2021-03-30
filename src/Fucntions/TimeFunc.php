<?php
declare(strict_types=1);

// HACK: namespaceの付与
namespace Functions;

/**
 * 時間を扱うの関数群
 */
class TimeFunc {

    /**
     * get_microtime()
     * 
     * 現在のマイクロ秒を取得する
     *
     * @return string
     */
    public function get_microtime(): string {
        return microtime(true);
    }


    /**
     * measure_exec_time()
     * 
     * 処理の実行時間を算出する
     *
     * @param string $start_time 処理実行開始時間
     * @param string $end_time 処理実行終了時間
     * @return string 処理時間
     */
    public function measure_exec_time(string $start_time, string $end_time): string {
        return '実行時間: ' . $end_time - $start_time . '秒'. PHP_EOL;
    }
}