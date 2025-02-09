<?php

return [
    // Thêm 'api/' vào trước module admin
    'api/admin/<controller:\w+>/<action:\w+>' => 'admin/<controller>/<action>',
    
    'GET admin/user' => 'admin/user/index',
    'user/<id:\d+>' => 'user/view',         // URL: user/123 -> actionView, param: id=123
    'post/<year:\d{4}>/<month:\d{2}>' => 'post/archive', // URL: post/2024/12 -> actionArchive, params: year=2024, month=12
    'product/<slug:[a-zA-Z0-9\-]+>' => 'product/detail', // URL: product/my-product -> actionDetail, param: slug=my-product
];