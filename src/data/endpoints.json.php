<?php
// This file was auto-generated from sdk-root/src/data/endpoints.json
return [ 
    'partitions' => [
        [ 
            'defaults' => [ 
//                 'hostname' => '{service}.{region}.{dnsSuffix}',
                'hostname' => '{service}.{dnsSuffix}', 
                'protocols' => [ 'https', ], 
            ], 
            'dnsSuffix' => 'jdcloud-api.com', 
            'partition' => 'jdcloud-cn', 
            'partitionName' => 'JDCloud China', 
            'regionRegex' => '^cn\\-\\w+\\-\\d+$', 
            'regions' => [ 
                'cn-north-1' => [
                    'description' => 'China (Beijing)', 
                ],
                'cn-east-1' => [
                    'description' => 'China (Suqian)',
                ],
                'cn-east-2' => [
                    'description' => 'China (Shanghai)',
                ],
                'cn-south-1' => [
                    'description' => 'China (Guangzhou)',
                ], 
            ], 
            'services' => [
                'apigateway' => [ 'endpoints' => [ 'cn-north-1' => [], ], ],
                ],
            ],
    ], 
    
            ];

