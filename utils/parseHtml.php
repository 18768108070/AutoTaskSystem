<?php
/**
 * Created by PhpStorm.
 * User: carl.huang
 * Date: 14-6-10
 * Time: 下午1:03
 */


$ch = curl_init();
$options = array();
$options[CURLOPT_URL]='http://www.baidu.com/sdafasdf';
$options[CURLOPT_FOLLOWLOCATION] = false;
$options[CURLOPT_HEADER] = true;
curl_setopt_array($ch,$options);
$result = curl_exec($ch);
