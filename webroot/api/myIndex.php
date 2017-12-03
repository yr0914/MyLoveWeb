<?php
/**
 * Created by PhpStorm.
 * User: myLove
 * Date: 2017/11/7
 * Time: 15:09
 * @e-mail mylove.520.y@gmail.com
 * @overview
 */
$type = $_POST['type'];
$data = [];
if (isset($type) && is_numeric($type)) {
    if ($type == 1) {
        $data = array(
            'type' => $type,
            'name' => '测试',
            'site' => '搞事情');
    } else if ($type == 2) {
        $data = array(
            'type' => $type,
            'name' => '结果',
            'site' => '有结果');
    }
    $response = array(
        'code' => 200,
        'message' => 'success for request',
        'data' => $data,
    );
    echo json_encode($response);
    exit();
}
$response = array(
    'code' => 999,
    'message' => 'argument error for request',
    'data' => $data,
);
echo json_encode($response);