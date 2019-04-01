<?php

namespace app\api\validate;

class AddressNew extends BaseValidate
{

    protected $rule = [
        'name' => 'require|isNotEmpty',
//        'mobile' => 'require|isMobile',
        'mobile' => 'require|isNotEmpty',
        'province' => 'require|isNotEmpty',
        'city' => 'require|isNotEmpty',
        'country' => 'require|isNotEmpty',
        'detail' => 'require|isNotEmpty',
    ];

}