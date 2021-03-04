<?php
declare(strict_types=1);

namespace Array;

/**
 * 配列操作の関数群
 */
class ArrayFunc {

    /**
     * array_cast()
     * 配列の中身を指定に型にキャストする
     *
     * @param array $arr キャストしたい配列
     * @param string $cast_type 'int','str','float','bool'を指定することが可能
     * @return array キャストした配列を返却ss
     */
    public function cast_array(array $arr, string $cast_type): array {
        return array_map($cast_type.'val', $arr);
    }


    /**
     * 2次元配列を1次元配列に変換する
     *
     * @param array $arr 2次元配列
     * @return array 1次元配列
     */
    public function convert_to_one_dimensional_array(array $arr): array {
        return array_merge(...$arr);
    }


    /**
     * セパレーターで配列を文字列結合する
     *
     * @param array $arr 対象の配列
     * @param string $separator 区切り文字 デフォルト: カンマ
     * @return string 配列の要素が区切り文字で区切られて返却される
     */
    public function concat_array(array $arr, string $separator = ','): string {
        return implode($separator, $arr);
    }
}