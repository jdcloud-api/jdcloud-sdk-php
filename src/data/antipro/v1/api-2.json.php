<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'antipro',
        'protocol' => 'json',
//        'serviceFullName' => 'antipro',
//        'serviceId' => 'antipro',
    ],
    'operations' => [
        'DescribeAttackLogs' => [
            'name' => 'DescribeAttackLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/attacklog',
            ],
            'input' => [ 'shape' => 'DescribeAttackLogsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAttackLogsResponseShape', ],
        ],
        'DescribeAttackStatistics' => [
            'name' => 'DescribeAttackStatistics',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeAttackStatistics',
            ],
            'input' => [ 'shape' => 'DescribeAttackStatisticsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAttackStatisticsResponseShape', ],
        ],
        'DescribeAttackTypeCount' => [
            'name' => 'DescribeAttackTypeCount',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeAttackTypeCount',
            ],
            'input' => [ 'shape' => 'DescribeAttackTypeCountRequestShape', ],
            'output' => [ 'shape' => 'DescribeAttackTypeCountResponseShape', ],
        ],
        'DescribeAttackSource' => [
            'name' => 'DescribeAttackSource',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/attacklog/{attackLogId}:describeAttackSource',
            ],
            'input' => [ 'shape' => 'DescribeAttackSourceRequestShape', ],
            'output' => [ 'shape' => 'DescribeAttackSourceResponseShape', ],
        ],
        'DescribeIpMonitorFlow' => [
            'name' => 'DescribeIpMonitorFlow',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeIpMonitorFlow',
            ],
            'input' => [ 'shape' => 'DescribeIpMonitorFlowRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpMonitorFlowResponseShape', ],
        ],
        'DescribeInstances' => [
            'name' => 'DescribeInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'DescribeInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstancesResponseShape', ],
        ],
        'CreateInstance' => [
            'name' => 'CreateInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'CreateInstanceRequestShape', ],
            'output' => [ 'shape' => 'CreateInstanceResponseShape', ],
        ],
        'DescribeInstance' => [
            'name' => 'DescribeInstance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DescribeInstanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceResponseShape', ],
        ],
        'ModifyInstance' => [
            'name' => 'ModifyInstance',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'ModifyInstanceRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceResponseShape', ],
        ],
        'ModifyInstanceName' => [
            'name' => 'ModifyInstanceName',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceName',
            ],
            'input' => [ 'shape' => 'ModifyInstanceNameRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceNameResponseShape', ],
        ],
        'AddProtectedIp' => [
            'name' => 'AddProtectedIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:addProtectedIp',
            ],
            'input' => [ 'shape' => 'AddProtectedIpRequestShape', ],
            'output' => [ 'shape' => 'AddProtectedIpResponseShape', ],
        ],
        'DeleteProtectedIp' => [
            'name' => 'DeleteProtectedIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:deleteProtectedIp',
            ],
            'input' => [ 'shape' => 'DeleteProtectedIpRequestShape', ],
            'output' => [ 'shape' => 'DeleteProtectedIpResponseShape', ],
        ],
        'DescribeProtectedIpList' => [
            'name' => 'DescribeProtectedIpList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeProtectedIpList',
            ],
            'input' => [ 'shape' => 'DescribeProtectedIpListRequestShape', ],
            'output' => [ 'shape' => 'DescribeProtectedIpListResponseShape', ],
        ],
        'DescribeProtectionRule' => [
            'name' => 'DescribeProtectionRule',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeProtectionRule',
            ],
            'input' => [ 'shape' => 'DescribeProtectionRuleRequestShape', ],
            'output' => [ 'shape' => 'DescribeProtectionRuleResponseShape', ],
        ],
        'DescribeGeoAreas' => [
            'name' => 'DescribeGeoAreas',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeGeoAreas',
            ],
            'input' => [ 'shape' => 'DescribeGeoAreasRequestShape', ],
            'output' => [ 'shape' => 'DescribeGeoAreasResponseShape', ],
        ],
        'ModifyProtectionRule' => [
            'name' => 'ModifyProtectionRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyProtectionRule',
            ],
            'input' => [ 'shape' => 'ModifyProtectionRuleRequestShape', ],
            'output' => [ 'shape' => 'ModifyProtectionRuleResponseShape', ],
        ],
        'CheckInstanceName' => [
            'name' => 'CheckInstanceName',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/checkInstanceName',
            ],
            'input' => [ 'shape' => 'CheckInstanceNameRequestShape', ],
            'output' => [ 'shape' => 'CheckInstanceNameResponseShape', ],
        ],
        'DescribeProtectionOutline' => [
            'name' => 'DescribeProtectionOutline',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeProtectionOutline',
            ],
            'input' => [ 'shape' => 'DescribeProtectionOutlineRequestShape', ],
            'output' => [ 'shape' => 'DescribeProtectionOutlineResponseShape', ],
        ],
        'DescribeInstanceAclCnt' => [
            'name' => 'DescribeInstanceAclCnt',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeInstanceAclCnt',
            ],
            'input' => [ 'shape' => 'DescribeInstanceAclCntRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceAclCntResponseShape', ],
        ],
        'EnableInstanceAcl' => [
            'name' => 'EnableInstanceAcl',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:enableInstanceAcl',
            ],
            'input' => [ 'shape' => 'EnableInstanceAclRequestShape', ],
            'output' => [ 'shape' => 'EnableInstanceAclResponseShape', ],
        ],
        'DisableInstanceAcl' => [
            'name' => 'DisableInstanceAcl',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:disableInstanceAcl',
            ],
            'input' => [ 'shape' => 'DisableInstanceAclRequestShape', ],
            'output' => [ 'shape' => 'DisableInstanceAclResponseShape', ],
        ],
        'DescribeInstanceAclEnable' => [
            'name' => 'DescribeInstanceAclEnable',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeInstanceAclEnable',
            ],
            'input' => [ 'shape' => 'DescribeInstanceAclEnableRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceAclEnableResponseShape', ],
        ],
        'DescribeAcls' => [
            'name' => 'DescribeAcls',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/acl',
            ],
            'input' => [ 'shape' => 'DescribeAclsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAclsResponseShape', ],
        ],
        'CreateAcl' => [
            'name' => 'CreateAcl',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/acl',
            ],
            'input' => [ 'shape' => 'CreateAclRequestShape', ],
            'output' => [ 'shape' => 'CreateAclResponseShape', ],
        ],
        'ModifyAcl' => [
            'name' => 'ModifyAcl',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/acl/{aclId}',
            ],
            'input' => [ 'shape' => 'ModifyAclRequestShape', ],
            'output' => [ 'shape' => 'ModifyAclResponseShape', ],
        ],
        'DeleteAcl' => [
            'name' => 'DeleteAcl',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/acl/{aclId}',
            ],
            'input' => [ 'shape' => 'DeleteAclRequestShape', ],
            'output' => [ 'shape' => 'DeleteAclResponseShape', ],
        ],
        'ModifyAclPriority' => [
            'name' => 'ModifyAclPriority',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/acl/{aclId}:modifyAclPriority',
            ],
            'input' => [ 'shape' => 'ModifyAclPriorityRequestShape', ],
            'output' => [ 'shape' => 'ModifyAclPriorityResponseShape', ],
        ],
        'EnableAcl' => [
            'name' => 'EnableAcl',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/acl/{aclId}:enableAcl',
            ],
            'input' => [ 'shape' => 'EnableAclRequestShape', ],
            'output' => [ 'shape' => 'EnableAclResponseShape', ],
        ],
        'DisableAcl' => [
            'name' => 'DisableAcl',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/acl/{aclId}:disableAcl',
            ],
            'input' => [ 'shape' => 'DisableAclRequestShape', ],
            'output' => [ 'shape' => 'DisableAclResponseShape', ],
        ],
        'DescribeIpSets' => [
            'name' => 'DescribeIpSets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/ipSets',
            ],
            'input' => [ 'shape' => 'DescribeIpSetsRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpSetsResponseShape', ],
        ],
        'CreateIpSet' => [
            'name' => 'CreateIpSet',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/ipSets',
            ],
            'input' => [ 'shape' => 'CreateIpSetRequestShape', ],
            'output' => [ 'shape' => 'CreateIpSetResponseShape', ],
        ],
        'DescribeIpSet' => [
            'name' => 'DescribeIpSet',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/ipSets/{ipSetId}',
            ],
            'input' => [ 'shape' => 'DescribeIpSetRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpSetResponseShape', ],
        ],
        'ModifyIpSet' => [
            'name' => 'ModifyIpSet',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/ipSets/{ipSetId}',
            ],
            'input' => [ 'shape' => 'ModifyIpSetRequestShape', ],
            'output' => [ 'shape' => 'ModifyIpSetResponseShape', ],
        ],
        'DeleteIpSet' => [
            'name' => 'DeleteIpSet',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/ipSets/{ipSetId}',
            ],
            'input' => [ 'shape' => 'DeleteIpSetRequestShape', ],
            'output' => [ 'shape' => 'DeleteIpSetResponseShape', ],
        ],
        'DescribePortSets' => [
            'name' => 'DescribePortSets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/portSets',
            ],
            'input' => [ 'shape' => 'DescribePortSetsRequestShape', ],
            'output' => [ 'shape' => 'DescribePortSetsResponseShape', ],
        ],
        'CreatePortSet' => [
            'name' => 'CreatePortSet',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/portSets',
            ],
            'input' => [ 'shape' => 'CreatePortSetRequestShape', ],
            'output' => [ 'shape' => 'CreatePortSetResponseShape', ],
        ],
        'DescribePortSet' => [
            'name' => 'DescribePortSet',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/portSets/{portSetId}',
            ],
            'input' => [ 'shape' => 'DescribePortSetRequestShape', ],
            'output' => [ 'shape' => 'DescribePortSetResponseShape', ],
        ],
        'ModifyPortSet' => [
            'name' => 'ModifyPortSet',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/portSets/{portSetId}',
            ],
            'input' => [ 'shape' => 'ModifyPortSetRequestShape', ],
            'output' => [ 'shape' => 'ModifyPortSetResponseShape', ],
        ],
        'DeletePortSet' => [
            'name' => 'DeletePortSet',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/portSets/{portSetId}',
            ],
            'input' => [ 'shape' => 'DeletePortSetRequestShape', ],
            'output' => [ 'shape' => 'DeletePortSetResponseShape', ],
        ],
        'DescribeElasticIpResources' => [
            'name' => 'DescribeElasticIpResources',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/elasticIpResources',
            ],
            'input' => [ 'shape' => 'DescribeElasticIpResourcesRequestShape', ],
            'output' => [ 'shape' => 'DescribeElasticIpResourcesResponseShape', ],
        ],
        'DescribeCpsIpResources' => [
            'name' => 'DescribeCpsIpResources',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cpsIpResources',
            ],
            'input' => [ 'shape' => 'DescribeCpsIpResourcesRequestShape', ],
            'output' => [ 'shape' => 'DescribeCpsIpResourcesResponseShape', ],
        ],
        'DescribeCcsIpResources' => [
            'name' => 'DescribeCcsIpResources',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/ccsIpResources',
            ],
            'input' => [ 'shape' => 'DescribeCcsIpResourcesRequestShape', ],
            'output' => [ 'shape' => 'DescribeCcsIpResourcesResponseShape', ],
        ],
        'DescribeWafIpResources' => [
            'name' => 'DescribeWafIpResources',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/wafIpResources',
            ],
            'input' => [ 'shape' => 'DescribeWafIpResourcesRequestShape', ],
            'output' => [ 'shape' => 'DescribeWafIpResourcesResponseShape', ],
        ],
        'DescribeOperationRecords' => [
            'name' => 'DescribeOperationRecords',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/operationRecords',
            ],
            'input' => [ 'shape' => 'DescribeOperationRecordsRequestShape', ],
            'output' => [ 'shape' => 'DescribeOperationRecordsResponseShape', ],
        ],
    ],
    'shapes' => [
        'PortSetSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'port' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'IpSetSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'IpSet' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'ModifyAclSpec' => [
            'type' => 'structure',
            'members' => [
                'sipType' => [ 'type' => 'integer', 'locationName' => 'sipType', ],
                'sip' => [ 'type' => 'string', 'locationName' => 'sip', ],
                'sipIpSetId' => [ 'type' => 'string', 'locationName' => 'sipIpSetId', ],
                'dipType' => [ 'type' => 'integer', 'locationName' => 'dipType', ],
                'dip' => [ 'type' => 'string', 'locationName' => 'dip', ],
                'dipIpSetId' => [ 'type' => 'string', 'locationName' => 'dipIpSetId', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'portType' => [ 'type' => 'integer', 'locationName' => 'portType', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'portSetId' => [ 'type' => 'string', 'locationName' => 'portSetId', ],
                'action' => [ 'type' => 'integer', 'locationName' => 'action', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'ModifyAclPrioritySpec' => [
            'type' => 'structure',
            'members' => [
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
            ],
        ],
        'Acl' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'sipType' => [ 'type' => 'integer', 'locationName' => 'sipType', ],
                'sip' => [ 'type' => 'string', 'locationName' => 'sip', ],
                'sipIpSetId' => [ 'type' => 'string', 'locationName' => 'sipIpSetId', ],
                'sipIpSetName' => [ 'type' => 'string', 'locationName' => 'sipIpSetName', ],
                'dipType' => [ 'type' => 'integer', 'locationName' => 'dipType', ],
                'dip' => [ 'type' => 'string', 'locationName' => 'dip', ],
                'dipIpSetId' => [ 'type' => 'string', 'locationName' => 'dipIpSetId', ],
                'dipIpSetName' => [ 'type' => 'string', 'locationName' => 'dipIpSetName', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'portType' => [ 'type' => 'integer', 'locationName' => 'portType', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'portSetId' => [ 'type' => 'string', 'locationName' => 'portSetId', ],
                'portSetName' => [ 'type' => 'string', 'locationName' => 'portSetName', ],
                'action' => [ 'type' => 'integer', 'locationName' => 'action', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'PortSet' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'port' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'CreateAclSpec' => [
            'type' => 'structure',
            'members' => [
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'sipType' => [ 'type' => 'integer', 'locationName' => 'sipType', ],
                'sip' => [ 'type' => 'string', 'locationName' => 'sip', ],
                'sipIpSetId' => [ 'type' => 'string', 'locationName' => 'sipIpSetId', ],
                'dipType' => [ 'type' => 'integer', 'locationName' => 'dipType', ],
                'dip' => [ 'type' => 'string', 'locationName' => 'dip', ],
                'dipIpSetId' => [ 'type' => 'string', 'locationName' => 'dipIpSetId', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'portType' => [ 'type' => 'integer', 'locationName' => 'portType', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'portSetId' => [ 'type' => 'string', 'locationName' => 'portSetId', ],
                'action' => [ 'type' => 'integer', 'locationName' => 'action', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'AttackLog' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'resourceType' => [ 'type' => 'integer', 'locationName' => 'resourceType', ],
                'attackLogId' => [ 'type' => 'string', 'locationName' => 'attackLogId', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'cause' => [ 'type' => 'integer', 'locationName' => 'cause', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'blackHole' => [ 'type' => 'boolean', 'locationName' => 'blackHole', ],
                'peak' => [ 'type' => 'double', 'locationName' => 'peak', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'attackType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'AttackTypeCount' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
            ],
        ],
        'AutoRenewalSpec' => [
            'type' => 'structure',
            'members' => [
                'autoRenewalEnable' => [ 'type' => 'boolean', 'locationName' => 'autoRenewalEnable', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'integer', 'locationName' => 'timeUnit', ],
            ],
        ],
        'Country' => [
            'type' => 'structure',
            'members' => [
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'children' => [ 'type' => 'list', 'member' => [ 'shape' => 'Country', ], ],
            ],
        ],
        'CreateInstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ipNum' => [ 'type' => 'integer', 'locationName' => 'ipNum', ],
                'bpGbps' => [ 'type' => 'integer', 'locationName' => 'bpGbps', ],
                'epGbps' => [ 'type' => 'integer', 'locationName' => 'epGbps', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'integer', 'locationName' => 'timeUnit', ],
            ],
        ],
        'ExtraOperationSpec' => [
            'type' => 'structure',
            'members' => [
                'operationType' => [ 'type' => 'integer', 'locationName' => 'operationType', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
            ],
        ],
        'GeoBlack' => [
            'type' => 'structure',
            'members' => [
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ProtectedIp' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'safeStatus' => [ 'type' => 'integer', 'locationName' => 'safeStatus', ],
                'resourceType' => [ 'type' => 'integer', 'locationName' => 'resourceType', ],
                'protectionRuleType' => [ 'type' => 'integer', 'locationName' => 'protectionRuleType', ],
            ],
        ],
        'InstanceTagEnable' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'tagEnable' => [ 'type' => 'boolean', 'locationName' => 'tagEnable', ],
            ],
        ],
        'ProtectedObject' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'ipList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProtectedIp', ], ],
            ],
        ],
        'InstanceBillingId' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'billingIdBP' => [ 'type' => 'string', 'locationName' => 'billingIdBP', ],
                'billingIdEP' => [ 'type' => 'string', 'locationName' => 'billingIdEP', ],
            ],
        ],
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'ipCount' => [ 'type' => 'integer', 'locationName' => 'ipCount', ],
                'aclLimit' => [ 'type' => 'integer', 'locationName' => 'aclLimit', ],
                'basicBandwidth' => [ 'type' => 'integer', 'locationName' => 'basicBandwidth', ],
                'elasticBandwidth' => [ 'type' => 'integer', 'locationName' => 'elasticBandwidth', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'protectedObjects' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProtectedObject', ], ],
                'onTrial' => [ 'type' => 'boolean', 'locationName' => 'onTrial', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'InstanceName' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'IpResource' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceType' => [ 'type' => 'integer', 'locationName' => 'resourceType', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'cleanThresholdBps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdBps', ],
                'cleanThresholdPps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdPps', ],
                'balckHoleThreshold' => [ 'type' => 'long', 'locationName' => 'balckHoleThreshold', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'safeStatus' => [ 'type' => 'integer', 'locationName' => 'safeStatus', ],
            ],
        ],
        'IpResourceFlow' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'postProtect' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'preProtect' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'IpResourceInfo' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'safeStatus' => [ 'type' => 'integer', 'locationName' => 'safeStatus', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'blackHoleThreshold' => [ 'type' => 'long', 'locationName' => 'blackHoleThreshold', ],
                'cleanThresholdBps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdBps', ],
                'cleanThresholdPps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdPps', ],
            ],
        ],
        'ModifyInstanceNameSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'ModifyInstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'ipNum' => [ 'type' => 'integer', 'locationName' => 'ipNum', ],
                'bpGbps' => [ 'type' => 'integer', 'locationName' => 'bpGbps', ],
                'epGbps' => [ 'type' => 'integer', 'locationName' => 'epGbps', ],
            ],
        ],
        'OperationRecord' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'action' => [ 'type' => 'integer', 'locationName' => 'action', ],
                'info' => [ 'type' => 'string', 'locationName' => 'info', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
            ],
        ],
        'InternalOperationRecord' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'action' => [ 'type' => 'integer', 'locationName' => 'action', ],
                'opType' => [ 'type' => 'integer', 'locationName' => 'opType', ],
                'info' => [ 'type' => 'string', 'locationName' => 'info', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
            ],
        ],
        'OrderSpec' => [
            'type' => 'structure',
            'members' => [
                'buyType' => [ 'type' => 'integer', 'locationName' => 'buyType', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pkgType' => [ 'type' => 'integer', 'locationName' => 'pkgType', ],
                'ipNum' => [ 'type' => 'integer', 'locationName' => 'ipNum', ],
                'bpGbps' => [ 'type' => 'integer', 'locationName' => 'bpGbps', ],
                'epGbps' => [ 'type' => 'integer', 'locationName' => 'epGbps', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'integer', 'locationName' => 'timeUnit', ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
            ],
        ],
        'PriceSpec' => [
            'type' => 'structure',
            'members' => [
                'buyType' => [ 'type' => 'integer', 'locationName' => 'buyType', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'billingType' => [ 'type' => 'integer', 'locationName' => 'billingType', ],
                'pkgType' => [ 'type' => 'integer', 'locationName' => 'pkgType', ],
                'ipNum' => [ 'type' => 'integer', 'locationName' => 'ipNum', ],
                'bp' => [ 'type' => 'integer', 'locationName' => 'bp', ],
                'ep' => [ 'type' => 'integer', 'locationName' => 'ep', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'integer', 'locationName' => 'timeUnit', ],
            ],
        ],
        'ProtectedIpSpec' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ProtectedObjectsSpec' => [
            'type' => 'structure',
            'members' => [
                'eip' => [ 'type' => 'boolean', 'locationName' => 'eip', ],
                'cps' => [ 'type' => 'boolean', 'locationName' => 'cps', ],
                'ccs' => [ 'type' => 'boolean', 'locationName' => 'ccs', ],
            ],
        ],
        'ProtectionOutline' => [
            'type' => 'structure',
            'members' => [
                'protectedDay' => [ 'type' => 'long', 'locationName' => 'protectedDay', ],
                'protectedIpCount' => [ 'type' => 'long', 'locationName' => 'protectedIpCount', ],
                'weekAttackCount' => [ 'type' => 'long', 'locationName' => 'weekAttackCount', ],
                'weekAttackPeak' => [ 'type' => 'double', 'locationName' => 'weekAttackPeak', ],
                'weekAttackUnit' => [ 'type' => 'string', 'locationName' => 'weekAttackUnit', ],
                'monthAttackCount' => [ 'type' => 'long', 'locationName' => 'monthAttackCount', ],
                'monthAttackPeak' => [ 'type' => 'double', 'locationName' => 'monthAttackPeak', ],
                'monthAttackUnit' => [ 'type' => 'string', 'locationName' => 'monthAttackUnit', ],
                'currentAttackCount' => [ 'type' => 'long', 'locationName' => 'currentAttackCount', ],
            ],
        ],
        'ProtectionRule' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'cleanThresholdBps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdBps', ],
                'cleanThresholdPps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdPps', ],
                'spoofIpEnable' => [ 'type' => 'integer', 'locationName' => 'spoofIpEnable', ],
                'srcNewConnLimitEnable' => [ 'type' => 'integer', 'locationName' => 'srcNewConnLimitEnable', ],
                'srcNewConnLimitValue' => [ 'type' => 'long', 'locationName' => 'srcNewConnLimitValue', ],
                'dstNewConnLimitEnable' => [ 'type' => 'integer', 'locationName' => 'dstNewConnLimitEnable', ],
                'dstNewConnLimitValue' => [ 'type' => 'long', 'locationName' => 'dstNewConnLimitValue', ],
                'datagramRangeMin' => [ 'type' => 'long', 'locationName' => 'datagramRangeMin', ],
                'datagramRangeMax' => [ 'type' => 'long', 'locationName' => 'datagramRangeMax', ],
                'geoBlackList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GeoBlack', ], ],
                'ipBlackList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ipWhiteList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ProtectionRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'cleanThresholdBps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdBps', ],
                'cleanThresholdPps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdPps', ],
                'spoofIpEnable' => [ 'type' => 'integer', 'locationName' => 'spoofIpEnable', ],
                'srcNewConnLimitEnable' => [ 'type' => 'integer', 'locationName' => 'srcNewConnLimitEnable', ],
                'srcNewConnLimitValue' => [ 'type' => 'long', 'locationName' => 'srcNewConnLimitValue', ],
                'dstNewConnLimitEnable' => [ 'type' => 'integer', 'locationName' => 'dstNewConnLimitEnable', ],
                'dstNewConnLimitValue' => [ 'type' => 'long', 'locationName' => 'dstNewConnLimitValue', ],
                'datagramRangeMin' => [ 'type' => 'long', 'locationName' => 'datagramRangeMin', ],
                'datagramRangeMax' => [ 'type' => 'long', 'locationName' => 'datagramRangeMax', ],
                'geoBlackList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ipBlackList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ipWhiteList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeAttackStatisticsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAttackStatisticsResultShape', ],
                'error' =>  [ 'shape' => 'DescribeAttackStatisticsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpMonitorFlowResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpMonitorFlowResultShape', ],
                'error' =>  [ 'shape' => 'DescribeIpMonitorFlowResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAttackTypeCountResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AttackTypeCount', ], ],
            ],
        ],
        'DescribeAttackTypeCountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAttackTypeCountResultShape', ],
                'error' =>  [ 'shape' => 'DescribeAttackTypeCountResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpMonitorFlowRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeIpMonitorFlowResultShape' => [
            'type' => 'structure',
            'members' => [
                'bps' =>  [ 'shape' => 'IpResourceFlow', ],
                'pps' =>  [ 'shape' => 'IpResourceFlow', ],
            ],
        ],
        'DescribeAttackLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AttackLog', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeAttackStatisticsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeAttackStatisticsResultShape' => [
            'type' => 'structure',
            'members' => [
                'attackCount' => [ 'type' => 'integer', 'locationName' => 'attackCount', ],
                'blackHoleCount' => [ 'type' => 'integer', 'locationName' => 'blackHoleCount', ],
                'peak' => [ 'type' => 'double', 'locationName' => 'peak', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'DescribeAttackSourceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'attackLogId' => [ 'type' => 'string', 'locationName' => 'attackLogId', ],
            ],
        ],
        'DescribeAttackTypeCountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeAttackSourceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAttackSourceResultShape', ],
                'error' =>  [ 'shape' => 'DescribeAttackSourceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAttackLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAttackLogsResultShape', ],
                'error' =>  [ 'shape' => 'DescribeAttackLogsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAttackSourceResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeAttackLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeProtectedIpListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeProtectedIpListResultShape', ],
                'error' =>  [ 'shape' => 'DescribeProtectedIpListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpSetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpSetResultShape', ],
                'error' =>  [ 'shape' => 'DescribeIpSetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'EnableAclRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'aclId' => [ 'type' => 'string', 'locationName' => 'aclId', ],
            ],
        ],
        'DescribeProtectedIpListResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProtectedIp', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeInstanceAclCntResultShape' => [
            'type' => 'structure',
            'members' => [
                'cnt' => [ 'type' => 'integer', 'locationName' => 'cnt', ],
            ],
        ],
        'EnableInstanceAclResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyAclRequestShape' => [
            'type' => 'structure',
            'members' => [
                'modifyAclSpec' =>  [ 'shape' => 'ModifyAclSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'aclId' => [ 'type' => 'string', 'locationName' => 'aclId', ],
            ],
        ],
        'DisableInstanceAclResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeIpSetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpSet', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeProtectionRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CheckInstanceNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'CreateInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceResultShape', ],
                'error' =>  [ 'shape' => 'CreateInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteIpSetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteIpSetResultShape', ],
                'error' =>  [ 'shape' => 'DeleteIpSetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyPortSetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'portSetSpec' =>  [ 'shape' => 'PortSetSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'portSetId' => [ 'type' => 'string', 'locationName' => 'portSetId', ],
            ],
        ],
        'DescribeProtectionRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeProtectionRuleResultShape', ],
                'error' =>  [ 'shape' => 'DescribeProtectionRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeletePortSetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'portSetId' => [ 'type' => 'string', 'locationName' => 'portSetId', ],
            ],
        ],
        'AddProtectedIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddProtectedIpResultShape', ],
                'error' =>  [ 'shape' => 'AddProtectedIpResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateIpSetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ipSetSpec' =>  [ 'shape' => 'IpSetSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeIpSetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'ipSetId' => [ 'type' => 'string', 'locationName' => 'ipSetId', ],
            ],
        ],
        'ModifyInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'modifyInstanceSpec' =>  [ 'shape' => 'ModifyInstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyAclPriorityRequestShape' => [
            'type' => 'structure',
            'members' => [
                'modifyAclPrioritySpec' =>  [ 'shape' => 'ModifyAclPrioritySpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'aclId' => [ 'type' => 'string', 'locationName' => 'aclId', ],
            ],
        ],
        'DescribeGeoAreasRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeIpSetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpSetsResultShape', ],
                'error' =>  [ 'shape' => 'DescribeIpSetsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddProtectedIpResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DeleteAclRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'aclId' => [ 'type' => 'string', 'locationName' => 'aclId', ],
            ],
        ],
        'DisableInstanceAclResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'DisableInstanceAclResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceAclEnableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceAclEnableResultShape', ],
                'error' =>  [ 'shape' => 'DescribeInstanceAclEnableResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateAclResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateAclResultShape', ],
                'error' =>  [ 'shape' => 'CreateAclResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyProtectionRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'protectionRuleSpec' =>  [ 'shape' => 'ProtectionRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeGeoAreasResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Country', ], ],
            ],
        ],
        'DescribeIpSetResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'IpSet', ],
            ],
        ],
        'DescribeInstanceAclCntRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteIpSetResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'BatchResultDetail', ],
            ],
        ],
        'DeleteProtectedIpResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Instance', ],
            ],
        ],
        'CreateIpSetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateIpSetResultShape', ],
                'error' =>  [ 'shape' => 'CreateIpSetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreatePortSetResultShape' => [
            'type' => 'structure',
            'members' => [
                'portSetId' => [ 'type' => 'string', 'locationName' => 'portSetId', ],
            ],
        ],
        'DeletePortSetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeletePortSetResultShape', ],
                'error' =>  [ 'shape' => 'DeletePortSetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddProtectedIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'protectedIpSpec' =>  [ 'shape' => 'ProtectedIpSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceResultShape', ],
                'error' =>  [ 'shape' => 'DescribeInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Instance', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DeleteProtectedIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'protectedIpSpec' =>  [ 'shape' => 'ProtectedIpSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteIpSetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'ipSetId' => [ 'type' => 'string', 'locationName' => 'ipSetId', ],
            ],
        ],
        'DescribeInstanceAclEnableResultShape' => [
            'type' => 'structure',
            'members' => [
                'aclEnable' => [ 'type' => 'integer', 'locationName' => 'aclEnable', ],
            ],
        ],
        'CreateIpSetResultShape' => [
            'type' => 'structure',
            'members' => [
                'ipSetId' => [ 'type' => 'string', 'locationName' => 'ipSetId', ],
            ],
        ],
        'DescribeInstanceAclCntResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceAclCntResultShape', ],
                'error' =>  [ 'shape' => 'DescribeInstanceAclCntResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableInstanceAclRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeletePortSetResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'BatchResultDetail', ],
            ],
        ],
        'CreateAclResultShape' => [
            'type' => 'structure',
            'members' => [
                'aclId' => [ 'type' => 'string', 'locationName' => 'aclId', ],
            ],
        ],
        'CreatePortSetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'portSetSpec' =>  [ 'shape' => 'PortSetSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'modifyInstanceNameSpec' =>  [ 'shape' => 'ModifyInstanceNameSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableAclRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'aclId' => [ 'type' => 'string', 'locationName' => 'aclId', ],
            ],
        ],
        'ModifyAclPriorityResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'ModifyAclPriorityResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePortSetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribePortSetResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'PortSet', ],
            ],
        ],
        'ModifyAclResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableAclResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EnableAclResultShape', ],
                'error' =>  [ 'shape' => 'EnableAclResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAclsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyAclResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'ModifyAclResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceNameResultShape', ],
                'error' =>  [ 'shape' => 'ModifyInstanceNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePortSetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'PortSet', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeGeoAreasResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeGeoAreasResultShape', ],
                'error' =>  [ 'shape' => 'DescribeGeoAreasResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableInstanceAclResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'EnableInstanceAclResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'createInstanceSpec' =>  [ 'shape' => 'CreateInstanceSpec', ],
                'autoRenewalSpec' =>  [ 'shape' => 'AutoRenewalSpec', ],
                'extraOperationSpec' =>  [ 'shape' => 'ExtraOperationSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateAclRequestShape' => [
            'type' => 'structure',
            'members' => [
                'createAclSpec' =>  [ 'shape' => 'CreateAclSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeProtectionOutlineResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ProtectionOutline', ],
            ],
        ],
        'DescribeAclsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Acl', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'EnableAclResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'BatchResultDetail', ],
            ],
        ],
        'ModifyAclPriorityResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyProtectionRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyProtectionRuleResultShape', ],
                'error' =>  [ 'shape' => 'ModifyProtectionRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyProtectionRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'CheckInstanceNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CheckInstanceNameResultShape', ],
                'error' =>  [ 'shape' => 'CheckInstanceNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableAclResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisableAclResultShape', ],
                'error' =>  [ 'shape' => 'DisableAclResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePortSetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePortSetResultShape', ],
                'error' =>  [ 'shape' => 'DescribePortSetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceAclEnableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribePortSetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'portSetId' => [ 'type' => 'string', 'locationName' => 'portSetId', ],
            ],
        ],
        'DescribePortSetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePortSetsResultShape', ],
                'error' =>  [ 'shape' => 'DescribePortSetsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableInstanceAclRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceResultShape', ],
                'error' =>  [ 'shape' => 'ModifyInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CheckInstanceNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
            ],
        ],
        'DescribeProtectionOutlineResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeProtectionOutlineResultShape', ],
                'error' =>  [ 'shape' => 'DescribeProtectionOutlineResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeProtectionOutlineRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyIpSetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'ModifyIpSetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyPortSetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'ModifyPortSetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'error' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyIpSetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ipSetSpec' =>  [ 'shape' => 'IpSetSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'ipSetId' => [ 'type' => 'string', 'locationName' => 'ipSetId', ],
            ],
        ],
        'ModifyPortSetResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeIpSetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAclsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAclsResultShape', ],
                'error' =>  [ 'shape' => 'DescribeAclsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteAclResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteAclResultShape', ],
                'error' =>  [ 'shape' => 'DeleteAclResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeProtectionRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ProtectionRule', ],
            ],
        ],
        'DeleteProtectedIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteProtectedIpResultShape', ],
                'error' =>  [ 'shape' => 'DeleteProtectedIpResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreatePortSetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreatePortSetResultShape', ],
                'error' =>  [ 'shape' => 'CreatePortSetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyIpSetResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteAclResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'BatchResultDetail', ],
            ],
        ],
        'DisableAclResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'BatchResultDetail', ],
            ],
        ],
        'DescribeProtectedIpListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
            ],
        ],
        'DescribeCpsIpResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeCcsIpResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpResource', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeCpsIpResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCpsIpResourcesResultShape', ],
                'error' =>  [ 'shape' => 'DescribeCpsIpResourcesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeElasticIpResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeWafIpResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeCcsIpResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeWafIpResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeWafIpResourcesResultShape', ],
                'error' =>  [ 'shape' => 'DescribeWafIpResourcesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeElasticIpResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpResource', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeElasticIpResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeElasticIpResourcesResultShape', ],
                'error' =>  [ 'shape' => 'DescribeElasticIpResourcesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCcsIpResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCcsIpResourcesResultShape', ],
                'error' =>  [ 'shape' => 'DescribeCcsIpResourcesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeWafIpResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpResource', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeCpsIpResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpResource', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeOperationRecordsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'action' => [ 'type' => 'integer', 'locationName' => 'action', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DescribeOperationRecordsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeOperationRecordsResultShape', ],
                'error' =>  [ 'shape' => 'DescribeOperationRecordsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeOperationRecordsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationRecord', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
    ],
];
