<?php
/**
 * @file ArrayUtils.php
 * @author strickyan(beishanwen.com)
 * @date 2018/05/01 00:00:00
 * @brief 数组工具包
 */

namespace beishanwen\php\libs\Dt;

class ArrayUtils
{

    /**
     * @brief 将数组里的某些元素，元素值为逗号隔开的字符串，转成数组格式
     * @author strickyan@beishanwen.com
     * @param $arr
     * @param $keys
     * @return array
     */
    public static function String2Array($arr = array(), $keys = array())
    {
        foreach ($arr as &$data) {
            foreach ($keys as $key) {
                if (isset($data[$key])) {
                    if ($data[$key] != '') {
                        $data[$key] = explode(",", $data[$key]);
                    } else {
                        $data[$key] = array();
                    }

                }
            }
        }
        return $arr;
    }

    /**
     * @brief 检查数组里的某些元素是否为数字格式
     * @author strickyan@beishanwen.com
     * @param $arr
     * @param $keys
     * @param $ignore_values
     * @return boolean
     */
    public static function isNumeric($arr = array(), $keys = array(), $ignore_values = array())
    {
        foreach ($keys as $key) {
            if (in_array($arr[$key], $ignore_values)) {
                continue;
            }
            if (!is_numeric($arr[$key])) {
                return false;
            }
        }
        return true;
    }

    /**
     * @brief 检查数组里的某些元素是否为数组格式
     * @author strickyan@beishanwen.com
     * @param $arr
     * @param $keys
     * @return boolean
     */
    public static function isArray($arr = array(), $keys = array())
    {
        foreach ($keys as $key) {
            if (!is_array($arr[$key])) {
                return false;
            }
        }
        return true;
    }

    /**
     * @brief 检查数组B是否包含 A
     * @author strickyan@beishanwen.com
     * @param $arr_a
     * @param $arr_b
     * @return boolean
     */
    public static function arrayInArray($arr_a = array(), $arr_b = array())
    {
        foreach ($arr_a as $val) {
            if (!in_array($val, $arr_b)) {
                return false;
            }
        }
        return true;
    }

}
