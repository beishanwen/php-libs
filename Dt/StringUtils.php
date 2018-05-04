<?php
/**
 * @file StringUtils.php
 * @author strickyan(beishanwen.com)
 * @date 2018/05/01 17:45:23
 * @brief 工具包
 */

namespace beishanwen\php\libs\Dt;

class StringUtils
{
    /**
     * @brief 防止 sql 注入
     * @author strickyan@beishanwen.com
     * @param string $value
     * @return boolean
     */
    public static function checkInputString($value)
    {
        if (is_string($value)) {
            $value = addslashes(trim($value));
            // 适用各个 PHP 版本的用法
            if (get_magic_quotes_gpc()) {
                $value = stripslashes($value);
            }
        }
        return $value;
    }

}