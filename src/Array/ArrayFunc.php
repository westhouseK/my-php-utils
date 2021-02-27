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
    public function array_cast(array $arr, string $cast_type): array {
        return array_map($cast_type.'val', $arr);
    }

}