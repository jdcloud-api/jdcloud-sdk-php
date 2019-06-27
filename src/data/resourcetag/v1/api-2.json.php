<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'resourcetag',
        'protocol' => 'json',
//        'serviceFullName' => 'resourcetag',
//        'serviceId' => 'resourcetag',
    ],
    'operations' => [
        'TagResources' => [
            'name' => 'TagResources',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/tags:tagResources',
            ],
            'input' => [ 'shape' => 'TagResourcesRequestShape', ],
            'output' => [ 'shape' => 'TagResourcesResponseShape', ],
        ],
        'UnTagResources' => [
            'name' => 'UnTagResources',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/tags:unTagResources',
            ],
            'input' => [ 'shape' => 'UnTagResourcesRequestShape', ],
            'output' => [ 'shape' => 'UnTagResourcesResponseShape', ],
        ],
    ],
    'shapes' => [
        'FailedResourcesMap' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'FrontResourcesReqVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'serviceCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'orderCondition' => [ 'type' => 'string', 'locationName' => 'orderCondition', ],
                'descOrAsc' => [ 'type' => 'string', 'locationName' => 'descOrAsc', ],
                'currentPage' => [ 'type' => 'integer', 'locationName' => 'currentPage', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'PageInfo' => [
            'type' => 'structure',
            'members' => [
                'currentPage' => [ 'type' => 'integer', 'locationName' => 'currentPage', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalRecord' => [ 'type' => 'long', 'locationName' => 'totalRecord', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'FrontResourceTagMapping' => [
            'type' => 'structure',
            'members' => [
                'jrn' => [ 'type' => 'string', 'locationName' => 'jrn', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
            ],
        ],
        'TagsResourcesInfo' => [
            'type' => 'structure',
            'members' => [
                'tagKey' => [ 'type' => 'string', 'locationName' => 'tagKey', ],
                'tagValue' => [ 'type' => 'string', 'locationName' => 'tagValue', ],
                'vmResourceCount' => [ 'type' => 'long', 'locationName' => 'vmResourceCount', ],
                'diskResourceCount' => [ 'type' => 'long', 'locationName' => 'diskResourceCount', ],
                'sqlServerResourceCount' => [ 'type' => 'long', 'locationName' => 'sqlServerResourceCount', ],
                'mongodbResourceCount' => [ 'type' => 'long', 'locationName' => 'mongodbResourceCount', ],
                'ipResourceCount' => [ 'type' => 'long', 'locationName' => 'ipResourceCount', ],
                'esResourceCount' => [ 'type' => 'long', 'locationName' => 'esResourceCount', ],
                'jcqResourceCount' => [ 'type' => 'long', 'locationName' => 'jcqResourceCount', ],
                'drdsResourceCount' => [ 'type' => 'long', 'locationName' => 'drdsResourceCount', ],
                'memcachedResourceCount' => [ 'type' => 'long', 'locationName' => 'memcachedResourceCount', ],
                'redisResourceCount' => [ 'type' => 'long', 'locationName' => 'redisResourceCount', ],
                'databaseResourceCount' => [ 'type' => 'long', 'locationName' => 'databaseResourceCount', ],
                'dbRoResourceCount' => [ 'type' => 'long', 'locationName' => 'dbRoResourceCount', ],
                'perconaResourceCount' => [ 'type' => 'long', 'locationName' => 'perconaResourceCount', ],
                'mariadbResourceCount' => [ 'type' => 'long', 'locationName' => 'mariadbResourceCount', ],
                'mariadbRoResourceCount' => [ 'type' => 'long', 'locationName' => 'mariadbRoResourceCount', ],
                'pgResourceCount' => [ 'type' => 'long', 'locationName' => 'pgResourceCount', ],
                'cdnResourceCount' => [ 'type' => 'long', 'locationName' => 'cdnResourceCount', ],
            ],
        ],
        'FrontTagsResourcesInfo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'tagsResourcesInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagsResourcesInfo', ], ],
                'pageInfo' =>  [ 'shape' => 'PageInfo', ],
            ],
        ],
        'ResourceReqVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'serviceCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'orderCondition' => [ 'type' => 'string', 'locationName' => 'orderCondition', ],
                'descOrAsc' => [ 'type' => 'string', 'locationName' => 'descOrAsc', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'currentPage' => [ 'type' => 'integer', 'locationName' => 'currentPage', ],
            ],
        ],
        'ResourceTagMapping' => [
            'type' => 'structure',
            'members' => [
                'jrn' => [ 'type' => 'string', 'locationName' => 'jrn', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'ResourceResVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceTagMappingList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceTagMapping', ], ],
            ],
        ],
        'ResourcesMap' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'resourceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'TagKeysReqVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'serviceCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
            ],
        ],
        'TagKeysResVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'tagKeys' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'TagResourcesReqVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resources' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourcesMap', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'TagResourcesResVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'failedResourcesMap' => [ 'type' => 'list', 'member' => [ 'shape' => 'FailedResourcesMap', ], ],
                'successCount' => [ 'type' => 'integer', 'locationName' => 'successCount', ],
            ],
        ],
        'TagValuesReqVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
            ],
        ],
        'TagValuesResVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'tagValues' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'TagsResVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'UnTagResourcesReqVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resources' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourcesMap', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'UnTagResourcesResVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'failedResourcesMap' => [ 'type' => 'list', 'member' => [ 'shape' => 'FailedResourcesMap', ], ],
                'successCount' => [ 'type' => 'integer', 'locationName' => 'successCount', ],
            ],
        ],
        'UnTagResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UnTagResourcesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'TagResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'TagResourcesResVo', ],
            ],
        ],
        'UnTagResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'unTagResources' =>  [ 'shape' => 'UnTagResourcesReqVo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'TagResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tagResources' =>  [ 'shape' => 'TagResourcesReqVo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UnTagResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'UnTagResourcesResVo', ],
            ],
        ],
        'TagResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'TagResourcesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'FrontResourcesResult' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'frontResourceTagMapping' => [ 'type' => 'list', 'member' => [ 'shape' => 'FrontResourceTagMapping', ], ],
                'pageInfo' =>  [ 'shape' => 'PageInfo', ],
            ],
        ],
    ],
];
