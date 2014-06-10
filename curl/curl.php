<?php
/**
 * Created by PhpStorm.
 * User: carl.huang
 * Date: 14-6-10
 * Time: 下午12:53
 */
$f = fopen('1.txt','w');
fclose($f);
$cookie = realpath('1.txt');
echo initCookie($cookie);

function initCookie($cookie)
{

    //TODO 抓取login页面,初始化cookie
    $ch = curl_init();
    $header =array('Host:libertagia.com');
    $options = array();
    $options[CURLOPT_URL] = 'http://libertagia.com/office/members/login';
    $options[CURLOPT_USERAGENT] = 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.114 Safari/537.36';
    $options[CURLOPT_FOLLOWLOCATION] = false; //禁止重定向跟随
    $options[CURLOPT_RETURNTRANSFER] = true; //禁止自动输出
    $options[CURLOPT_COOKIEJAR] = $cookie;
    $options[CURLOPT_COOKIEFILE] = $cookie;
    $options[CURLOPT_HTTPHEADER] = $header;
    $options[CURLOPT_HEADER] = true; // 输出头信息
    curl_setopt_array($ch, $options);
    $result = curl_exec($ch);
    return $result;
}

function captcha()
{
    //TODO 抓取验证码,保存
}

function parseCaptchaByOrc()
{
    //TODO King Orc 验证码识别
}

function login()
{
//TODO POST登陆
}

function index()
{
//TODO 抓取index页面数据
}

function initTask()
{
//TODO 抓取Task页面数据
}

function task()
{
//TODO POST进行下一次任务
}