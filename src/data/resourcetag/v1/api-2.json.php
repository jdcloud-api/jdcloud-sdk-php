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
        'DescribeResources' => [
            'name' => 'DescribeResources',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/tags:describeResources',
            ],
            'input' => [ 'shape' => 'DescribeResourcesRequestShape', ],
            'output' => [ 'shape' => 'DescribeResourcesResponseShape', ],
        ],
        'DescribeTags' => [
            'name' => 'DescribeTags',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/describeTags',
            ],
            'input' => [ 'shape' => 'DescribeTagsRequestShape', ],
            'output' => [ 'shape' => 'DescribeTagsResponseShape', ],
        ],
        'DescribeKeys' => [
            'name' => 'DescribeKeys',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/tags:describeKeys',
            ],
            'input' => [ 'shape' => 'DescribeKeysRequestShape', ],
            'output' => [ 'shape' => 'DescribeKeysResponseShape', ],
        ],
        'DescribeValues' => [
            'name' => 'DescribeValues',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/tags:describeValues',
            ],
            'input' => [ 'shape' => 'DescribeValuesRequestShape', ],
            'output' => [ 'shape' => 'DescribeValuesResponseShape', ],
        ],
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
        'QueryResource' => [
            'name' => 'QueryResource',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/queryResource',
            ],
            'input' => [ 'shape' => 'QueryResourceRequestShape', ],
            'output' => [ 'shape' => 'QueryResourceResponseShape', ],
        ],
    ],
    'shapes' => [
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'CheckTagsLegalityReqVo' => [
            'type' => 'structure',
            'members' => [
                'serviceCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'sysTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'CheckTagsLegalityResVo' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'CostAttrTagKeyInfo' => [
            'type' => 'structure',
            'members' => [
                'tagKey' => [ 'type' => 'string', 'locationName' => 'tagKey', ],
                'costAttr' => [ 'type' => 'boolean', 'locationName' => 'costAttr', ],
                'tagKeyValid' => [ 'type' => 'boolean', 'locationName' => 'tagKeyValid', ],
            ],
        ],
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
                'serviceCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'showTagStatus' => [ 'type' => 'integer', 'locationName' => 'showTagStatus', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'currentPage' => [ 'type' => 'integer', 'locationName' => 'currentPage', ],
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
                'detailUrl' => [ 'type' => 'string', 'locationName' => 'detailUrl', ],
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
                'sqlserverResourceCount' => [ 'type' => 'long', 'locationName' => 'sqlserverResourceCount', ],
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
                'nativecontainerResourceCount' => [ 'type' => 'long', 'locationName' => 'nativecontainerResourceCount', ],
                'podResourceCount' => [ 'type' => 'long', 'locationName' => 'podResourceCount', ],
                'jqsResourceCount' => [ 'type' => 'long', 'locationName' => 'jqsResourceCount', ],
                'zfsResourceCount' => [ 'type' => 'long', 'locationName' => 'zfsResourceCount', ],
                'kubernetesNodegroupResourceCount' => [ 'type' => 'long', 'locationName' => 'kubernetesNodegroupResourceCount', ],
                'apigatewayResourceCount' => [ 'type' => 'long', 'locationName' => 'apigatewayResourceCount', ],
                'storageResourceCount' => [ 'type' => 'long', 'locationName' => 'storageResourceCount', ],
                'tsdsResourceCount' => [ 'type' => 'long', 'locationName' => 'tsdsResourceCount', ],
                'jdwResourceCount' => [ 'type' => 'long', 'locationName' => 'jdwResourceCount', ],
                'antiproResourceCount' => [ 'type' => 'long', 'locationName' => 'antiproResourceCount', ],
                'dtsResourceCount' => [ 'type' => 'long', 'locationName' => 'dtsResourceCount', ],
                'cpsResourceCount' => [ 'type' => 'long', 'locationName' => 'cpsResourceCount', ],
                'edcpsResourceCount' => [ 'type' => 'long', 'locationName' => 'edcpsResourceCount', ],
                'sgwResourceCount' => [ 'type' => 'long', 'locationName' => 'sgwResourceCount', ],
                'wafResourceCount' => [ 'type' => 'long', 'locationName' => 'wafResourceCount', ],
                'kafkaResourceCount' => [ 'type' => 'long', 'locationName' => 'kafkaResourceCount', ],
                'zkResourceCount' => [ 'type' => 'long', 'locationName' => 'zkResourceCount', ],
                'balanceResourceCount' => [ 'type' => 'long', 'locationName' => 'balanceResourceCount', ],
                'nlbResourceCount' => [ 'type' => 'long', 'locationName' => 'nlbResourceCount', ],
                'dnlbResourceCount' => [ 'type' => 'long', 'locationName' => 'dnlbResourceCount', ],
                'threatscannerResourceCount' => [ 'type' => 'long', 'locationName' => 'threatscannerResourceCount', ],
                'jnsResourceCount' => [ 'type' => 'long', 'locationName' => 'jnsResourceCount', ],
                'rabbitmqResourceCount' => [ 'type' => 'long', 'locationName' => 'rabbitmqResourceCount', ],
                'natgatewayResourceCount' => [ 'type' => 'long', 'locationName' => 'natgatewayResourceCount', ],
                'clickHouseResourceCount' => [ 'type' => 'long', 'locationName' => 'clickHouseResourceCount', ],
                'tidbResourceCount' => [ 'type' => 'long', 'locationName' => 'tidbResourceCount', ],
                'dbsResourceCount' => [ 'type' => 'long', 'locationName' => 'dbsResourceCount', ],
                'jdccsResourceCount' => [ 'type' => 'long', 'locationName' => 'jdccsResourceCount', ],
                'epcsResourceCount' => [ 'type' => 'long', 'locationName' => 'epcsResourceCount', ],
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
        'OperateTagResourceRelationsInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'ResourceInfosMap' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'OperateTagResourceRelationsReqVo' => [
            'type' => 'structure',
            'members' => [
                'resourceInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceInfosMap', ], ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'sysTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'operate' => [ 'type' => 'integer', 'locationName' => 'operate', ],
            ],
        ],
        'OperateTagResourceRelationsResVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'relationInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperateTagResourceRelationsInfo', ], ],
            ],
        ],
        'ProductLineAccessInfo' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'feName' => [ 'type' => 'string', 'locationName' => 'feName', ],
                'feNameCn' => [ 'type' => 'string', 'locationName' => 'feNameCn', ],
                'standardAccess' => [ 'type' => 'boolean', 'locationName' => 'standardAccess', ],
                'distinguishRegion' => [ 'type' => 'boolean', 'locationName' => 'distinguishRegion', ],
            ],
        ],
        'QueryResourceReqVo' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
            ],
        ],
        'ResetTagResourcesInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'ResetTagResourcesReqVo' => [
            'type' => 'structure',
            'members' => [
                'serviceCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'resourceTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Resource2TagsMap', ], ],
            ],
        ],
        'Resource2TagsMap' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'ResetTagResourcesResVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resetTagResourcesInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResetTagResourcesInfo', ], ],
            ],
        ],
        'ResourceReqVo' => [
            'type' => 'structure',
            'members' => [
                'serviceCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'showTagStatus' => [ 'type' => 'integer', 'locationName' => 'showTagStatus', ],
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
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
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
        'TagCostAttrOperateInfo' => [
            'type' => 'structure',
            'members' => [
                'tagKey' => [ 'type' => 'string', 'locationName' => 'tagKey', ],
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'TagCostAttrOperateReq' => [
            'type' => 'structure',
            'members' => [
                'operations' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagCostAttrOperation', ], ],
            ],
        ],
        'TagCostAttrOperation' => [
            'type' => 'structure',
            'members' => [
                'tagKey' => [ 'type' => 'string', 'locationName' => 'tagKey', ],
                'operate' => [ 'type' => 'integer', 'locationName' => 'operate', ],
            ],
        ],
        'TagKeysReqVo' => [
            'type' => 'structure',
            'members' => [
                'serviceCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'showTagStatus' => [ 'type' => 'integer', 'locationName' => 'showTagStatus', ],
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
        'TagsReqVo' => [
            'type' => 'structure',
            'members' => [
                'serviceCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'kind' => [ 'type' => 'string', 'locationName' => 'kind', ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'showTagStatus' => [ 'type' => 'integer', 'locationName' => 'showTagStatus', ],
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
        'DescribeResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ResourceResVo', ],
            ],
        ],
        'DescribeValuesResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'TagValuesResVo', ],
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
        'UnTagResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'UnTagResourcesResVo', ],
            ],
        ],
        'DescribeTagsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTagsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeResourcesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryResourceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryResource' =>  [ 'shape' => 'QueryResourceReqVo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeKeysRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tagKeysVo' =>  [ 'shape' => 'TagKeysReqVo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeKeysResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'TagKeysResVo', ],
            ],
        ],
        'UnTagResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UnTagResourcesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'TagResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'TagResourcesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeValuesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeValuesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryResourceResultShape' => [
            'type' => 'structure',
            'members' => [
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeValuesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tagValuesVo' =>  [ 'shape' => 'TagValuesReqVo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryResourceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryResourceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'TagResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tagResources' =>  [ 'shape' => 'TagResourcesReqVo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeTagsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'TagsResVo', ],
            ],
        ],
        'DescribeKeysResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeKeysResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceVo' =>  [ 'shape' => 'ResourceReqVo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeTagsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tagKeysVo' =>  [ 'shape' => 'TagsReqVo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetCostAttrTagKeysResult' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'costAttrTagKeyInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'CostAttrTagKeyInfo', ], ],
                'pageInfo' =>  [ 'shape' => 'PageInfo', ],
            ],
        ],
        'TagCostAttrOperateResult' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'operateInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagCostAttrOperateInfo', ], ],
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
