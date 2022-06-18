<?php
require __DIR__.'/vendor/autoload.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

try{
    $key='fgdgfdgdfg';
    $toekn='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyaWQiOiI3In0.C6doBEWSNzkJOir856YvWgnEy5nmsR1HnDRA7aVxHBU';
    $decoded = JWT::decode($toekn, new Key($key, 'HS256'));
    
    print_r($decoded);
}catch(\Exception $err){
    // echo $err;
    echo 'sorry your token is invalid';

}
?>