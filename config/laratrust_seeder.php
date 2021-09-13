<?php

return [
    'role_structure' => [
        'admin' => [
            'users' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'prof' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'student' => [
            'profile' => 'r,u'
        ],
    
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
