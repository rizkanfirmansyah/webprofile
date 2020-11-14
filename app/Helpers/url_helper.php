<?php

function nama()
{
    return 'rizkan firmansyah';
}

function uri_encode($res)
{
    $data = $res . 'urldgthelper';
    return urlencode(base64_encode(base64_encode(($data))));
}

function uri_decode($result)
{
    $res = base64_decode(base64_decode(urlencode($result)));
    return substr($res, 0, -12);
}

function url($id)
{
    $request = \Config\Services::request();
    return $request->uri->getSegment($id);
}
