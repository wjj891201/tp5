<?php

return [
    'app_id' => 'wxefd1a40e6ceac6f3',
    'app_secret' => '1907bef6cd2b3bdf9ac38b0dfdfeb24f',
    'login_url' => "https://api.weixin.qq.com/sns/jscode2session?appid=%s&secret=%s&js_code=%s&grant_type=authorization_code",
    'access_token_url' => "https://api.weixin.qq.com/cgi-bin/token?" .
    "grant_type=client_credential&appid=%s&secret=%s",
];