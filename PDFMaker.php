<?php
/**
 * Created by PhpStorm.
 * User: mutta
 * Date: 01-Jan-19
 * Time: 11:10 PM
 */
require_once __DIR__ . '/vendor/autoload.php';
$mpdf= new \Mpdf\Mpdf();

$mpdf->WriteHTML()