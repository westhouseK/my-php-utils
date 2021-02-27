<?php
declare(strict_type=1);

/**
 * array_cast()
 * 配列の中身を指定に型にキャストする
 *
 * @param array $arr キャストしたい配列
 * @param string $cast_type 'int','str','float','bool'を指定することが可能
 * @return array キャストした配列を返却ss
 */
function array_cast(array $arr, string $cast_type): array {
    return array_map($cast_type.'val', $arr);
}