<?php

function loopData($data, $key)
{
    $res = '[';
    foreach ($data as $value) {
        if ($value[$key] == '') {
            $res .= "'',";
        } else {
            $res .= "'" . $value[$key] . "',";
        }
    }
    return $res . ']';
}


function createLog($data = [], $key = 0)
{
    $session = session();
    // $data = [];
    $res = [];
    if ($key == 0) {
        $res['cid'] = $session->get('id_user');
        $res['uid'] = 0;
    } else {
        $res['uid'] = $session->get('id_user');
    }
    $data = array_merge($data, $res);
    return $data;
}
