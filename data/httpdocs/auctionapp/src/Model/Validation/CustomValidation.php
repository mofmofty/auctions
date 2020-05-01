<?php

namespace App\Model\Validation;

use Cake\Validation\Validation;

class CustomValidation extends Validation
{
    /**
     * ファイル容量制限
     * @param $files
     * @return bool
     */
    public static function limitFileSize($files)
    {
        //5Mバイト以下
        return ($files['size'] < 5000000);
    }

    /**
     * 画像ファイル「PNG」「JPEG」「JPG」「GIF」のチェック
     * @param $files
     * @return bool
     */
    public static function isImage($files)
    {
        $ret = true;
        $mimes = array("image/png", "image/jpeg", "image/jpg", "image/gif");
        $exts = array("png", "jpeg", "jpg", "gif");
        $sep = explode('.', $files['name']);
        $ext = end($sep);
        if (!in_array($files['type'], $mimes) || !in_array($ext, $exts)) {
            $ret = false;
        }
        return $ret;
    }
}
