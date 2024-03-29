<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'lavm',
        'protocol' => 'json',
//        'serviceFullName' => 'lavm',
//        'serviceId' => 'lavm',
    ],
    'operations' => [
        'DescribeDisks' => [
            'name' => 'DescribeDisks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/disks',
            ],
            'input' => [ 'shape' => 'DescribeDisksRequestShape', ],
            'output' => [ 'shape' => 'DescribeDisksResponseShape', ],
        ],
        'DescribeFirewallRules' => [
            'name' => 'DescribeFirewallRules',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/firewallRule',
            ],
            'input' => [ 'shape' => 'DescribeFirewallRulesRequestShape', ],
            'output' => [ 'shape' => 'DescribeFirewallRulesResponseShape', ],
        ],
        'CreateFirewallRule' => [
            'name' => 'CreateFirewallRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/firewallRule',
            ],
            'input' => [ 'shape' => 'CreateFirewallRuleRequestShape', ],
            'output' => [ 'shape' => 'CreateFirewallRuleResponseShape', ],
        ],
        'ModifyFirewallRule' => [
            'name' => 'ModifyFirewallRule',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/firewallRule',
            ],
            'input' => [ 'shape' => 'ModifyFirewallRuleRequestShape', ],
            'output' => [ 'shape' => 'ModifyFirewallRuleResponseShape', ],
        ],
        'DeleteFirewallRule' => [
            'name' => 'DeleteFirewallRule',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/firewallRule',
            ],
            'input' => [ 'shape' => 'DeleteFirewallRuleRequestShape', ],
            'output' => [ 'shape' => 'DeleteFirewallRuleResponseShape', ],
        ],
        'DescribeImages' => [
            'name' => 'DescribeImages',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/images',
            ],
            'input' => [ 'shape' => 'DescribeImagesRequestShape', ],
            'output' => [ 'shape' => 'DescribeImagesResponseShape', ],
        ],
        'CreateCustomImage' => [
            'name' => 'CreateCustomImage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/images',
            ],
            'input' => [ 'shape' => 'CreateCustomImageRequestShape', ],
            'output' => [ 'shape' => 'CreateCustomImageResponseShape', ],
        ],
        'DeleteCustomImage' => [
            'name' => 'DeleteCustomImage',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/images/{imageId}',
            ],
            'input' => [ 'shape' => 'DeleteCustomImageRequestShape', ],
            'output' => [ 'shape' => 'DeleteCustomImageResponseShape', ],
        ],
        'ModifyImageAttribute' => [
            'name' => 'ModifyImageAttribute',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/images/{imageId}:modifyImageAttribute',
            ],
            'input' => [ 'shape' => 'ModifyImageAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifyImageAttributeResponseShape', ],
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
        'CreateInstances' => [
            'name' => 'CreateInstances',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'CreateInstancesRequestShape', ],
            'output' => [ 'shape' => 'CreateInstancesResponseShape', ],
        ],
        'StartInstance' => [
            'name' => 'StartInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:startInstance',
            ],
            'input' => [ 'shape' => 'StartInstanceRequestShape', ],
            'output' => [ 'shape' => 'StartInstanceResponseShape', ],
        ],
        'StopInstance' => [
            'name' => 'StopInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:stopInstance',
            ],
            'input' => [ 'shape' => 'StopInstanceRequestShape', ],
            'output' => [ 'shape' => 'StopInstanceResponseShape', ],
        ],
        'RebootInstance' => [
            'name' => 'RebootInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:rebootInstance',
            ],
            'input' => [ 'shape' => 'RebootInstanceRequestShape', ],
            'output' => [ 'shape' => 'RebootInstanceResponseShape', ],
        ],
        'DescribeInstanceVncUrl' => [
            'name' => 'DescribeInstanceVncUrl',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/vnc',
            ],
            'input' => [ 'shape' => 'DescribeInstanceVncUrlRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceVncUrlResponseShape', ],
        ],
        'ResetSystem' => [
            'name' => 'ResetSystem',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:resetSystem',
            ],
            'input' => [ 'shape' => 'ResetSystemRequestShape', ],
            'output' => [ 'shape' => 'ResetSystemResponseShape', ],
        ],
        'UpdateInstanceAttribute' => [
            'name' => 'UpdateInstanceAttribute',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:updateInstanceAttribute',
            ],
            'input' => [ 'shape' => 'UpdateInstanceAttributeRequestShape', ],
            'output' => [ 'shape' => 'UpdateInstanceAttributeResponseShape', ],
        ],
        'DescribePlansCanUpgrade' => [
            'name' => 'DescribePlansCanUpgrade',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describePlansCanUpgrade',
            ],
            'input' => [ 'shape' => 'DescribePlansCanUpgradeRequestShape', ],
            'output' => [ 'shape' => 'DescribePlansCanUpgradeResponseShape', ],
        ],
        'UpgradeInstance' => [
            'name' => 'UpgradeInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:upgradeInstance',
            ],
            'input' => [ 'shape' => 'UpgradeInstanceRequestShape', ],
            'output' => [ 'shape' => 'UpgradeInstanceResponseShape', ],
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
        'DescribeInstancesTrafficPackages' => [
            'name' => 'DescribeInstancesTrafficPackages',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instancesTrafficPackages',
            ],
            'input' => [ 'shape' => 'DescribeInstancesTrafficPackagesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstancesTrafficPackagesResponseShape', ],
        ],
        'AssociateDomains' => [
            'name' => 'AssociateDomains',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:associateDomains',
            ],
            'input' => [ 'shape' => 'AssociateDomainsRequestShape', ],
            'output' => [ 'shape' => 'AssociateDomainsResponseShape', ],
        ],
        'DisassociateDomains' => [
            'name' => 'DisassociateDomains',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:disassociateDomains',
            ],
            'input' => [ 'shape' => 'DisassociateDomainsRequestShape', ],
            'output' => [ 'shape' => 'DisassociateDomainsResponseShape', ],
        ],
        'DescribeDomains' => [
            'name' => 'DescribeDomains',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instanceDomains',
            ],
            'input' => [ 'shape' => 'DescribeDomainsRequestShape', ],
            'output' => [ 'shape' => 'DescribeDomainsResponseShape', ],
        ],
        'DescribeKeypairs' => [
            'name' => 'DescribeKeypairs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/keypairs',
            ],
            'input' => [ 'shape' => 'DescribeKeypairsRequestShape', ],
            'output' => [ 'shape' => 'DescribeKeypairsResponseShape', ],
        ],
        'CreateKeypair' => [
            'name' => 'CreateKeypair',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/keypairs',
            ],
            'input' => [ 'shape' => 'CreateKeypairRequestShape', ],
            'output' => [ 'shape' => 'CreateKeypairResponseShape', ],
        ],
        'ImportKeypair' => [
            'name' => 'ImportKeypair',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/keypairs:import',
            ],
            'input' => [ 'shape' => 'ImportKeypairRequestShape', ],
            'output' => [ 'shape' => 'ImportKeypairResponseShape', ],
        ],
        'DeleteKeypair' => [
            'name' => 'DeleteKeypair',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/keypairs/{keyName}',
            ],
            'input' => [ 'shape' => 'DeleteKeypairRequestShape', ],
            'output' => [ 'shape' => 'DeleteKeypairResponseShape', ],
        ],
        'AttachKeypair' => [
            'name' => 'AttachKeypair',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/keypairs/{keyName}:attach',
            ],
            'input' => [ 'shape' => 'AttachKeypairRequestShape', ],
            'output' => [ 'shape' => 'AttachKeypairResponseShape', ],
        ],
        'DetachKeypair' => [
            'name' => 'DetachKeypair',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/keypairs/{keyName}:detach',
            ],
            'input' => [ 'shape' => 'DetachKeypairRequestShape', ],
            'output' => [ 'shape' => 'DetachKeypairResponseShape', ],
        ],
        'DescribePlans' => [
            'name' => 'DescribePlans',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/plans',
            ],
            'input' => [ 'shape' => 'DescribePlansRequestShape', ],
            'output' => [ 'shape' => 'DescribePlansResponseShape', ],
        ],
        'DescribePlansSoldOutStatus' => [
            'name' => 'DescribePlansSoldOutStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/describePlansSoldOutStatus',
            ],
            'input' => [ 'shape' => 'DescribePlansSoldOutStatusRequestShape', ],
            'output' => [ 'shape' => 'DescribePlansSoldOutStatusResponseShape', ],
        ],
        'QueryQuota' => [
            'name' => 'QueryQuota',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/quotas',
            ],
            'input' => [ 'shape' => 'QueryQuotaRequestShape', ],
            'output' => [ 'shape' => 'QueryQuotaResponseShape', ],
        ],
    ],
    'shapes' => [
        'CopyImage' => [
            'type' => 'structure',
            'members' => [
                'destinationImageId' => [ 'type' => 'string', 'locationName' => 'destinationImageId', ],
                'sourceImageId' => [ 'type' => 'string', 'locationName' => 'sourceImageId', ],
            ],
        ],
        'Disk' => [
            'type' => 'structure',
            'members' => [
                'createdTime' => [ 'type' => 'date-format', 'locationName' => 'createdTime', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'device' => [ 'type' => 'string', 'locationName' => 'device', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'diskName' => [ 'type' => 'string', 'locationName' => 'diskName', ],
                'diskChargeType' => [ 'type' => 'string', 'locationName' => 'diskChargeType', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'InstanceDomain' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'FirewallRule' => [
            'type' => 'structure',
            'members' => [
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'ruleId' => [ 'type' => 'string', 'locationName' => 'ruleId', ],
                'ruleProtocol' => [ 'type' => 'string', 'locationName' => 'ruleProtocol', ],
                'sourceAddress' => [ 'type' => 'string', 'locationName' => 'sourceAddress', ],
            ],
        ],
        'Image' => [
            'type' => 'structure',
            'members' => [
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'platform' => [ 'type' => 'string', 'locationName' => 'platform', ],
                'architecture' => [ 'type' => 'string', 'locationName' => 'architecture', ],
                'osType' => [ 'type' => 'string', 'locationName' => 'osType', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'icon' => [ 'type' => 'string', 'locationName' => 'icon', ],
                'imageState' => [ 'type' => 'string', 'locationName' => 'imageState', ],
                'systemDiskSize' => [ 'type' => 'string', 'locationName' => 'systemDiskSize', ],
            ],
        ],
        'Ids' => [
            'type' => 'structure',
            'members' => [
                'lavmIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'innerIpAddress' => [ 'type' => 'string', 'locationName' => 'innerIpAddress', ],
                'chargeType' => [ 'type' => 'string', 'locationName' => 'chargeType', ],
                'planId' => [ 'type' => 'string', 'locationName' => 'planId', ],
                'publicIpAddress' => [ 'type' => 'string', 'locationName' => 'publicIpAddress', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'expiredTime' => [ 'type' => 'string', 'locationName' => 'expiredTime', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'businessStatus' => [ 'type' => 'string', 'locationName' => 'businessStatus', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'domains' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceDomain', ], ],
            ],
        ],
        'DomainName' => [
            'type' => 'structure',
            'members' => [
                'domainNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'InstanceTrafficPackageUsage' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'trafficUsed' => [ 'type' => 'long', 'locationName' => 'trafficUsed', ],
                'trafficPackageTotal' => [ 'type' => 'long', 'locationName' => 'trafficPackageTotal', ],
                'trafficPackageRemaining' => [ 'type' => 'long', 'locationName' => 'trafficPackageRemaining', ],
                'trafficOverflow' => [ 'type' => 'long', 'locationName' => 'trafficOverflow', ],
            ],
        ],
        'Keypair' => [
            'type' => 'structure',
            'members' => [
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'keyFingerprint' => [ 'type' => 'string', 'locationName' => 'keyFingerprint', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Plan' => [
            'type' => 'structure',
            'members' => [
                'core' => [ 'type' => 'integer', 'locationName' => 'core', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'diskSize' => [ 'type' => 'integer', 'locationName' => 'diskSize', ],
                'flow' => [ 'type' => 'integer', 'locationName' => 'flow', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'planId' => [ 'type' => 'string', 'locationName' => 'planId', ],
                'classification' => [ 'type' => 'string', 'locationName' => 'classification', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'originalPrice' => [ 'type' => 'decimal', 'locationName' => 'originalPrice', ],
                'supportOS' => [ 'type' => 'string', 'locationName' => 'supportOS', ],
            ],
        ],
        'Quota' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'used' => [ 'type' => 'integer', 'locationName' => 'used', ],
            ],
        ],
        'ResourceInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'DescribeDisksResultShape' => [
            'type' => 'structure',
            'members' => [
                'disks' => [ 'type' => 'list', 'member' => [ 'shape' => 'Disk', ], ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'DescribeDisksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDisksResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDisksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'diskIds' => [ 'type' => 'string', 'locationName' => 'diskIds', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateFirewallRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateFirewallRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeFirewallRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeFirewallRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteFirewallRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyFirewallRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'firewallId' => [ 'type' => 'string', 'locationName' => 'firewallId', ],
            ],
        ],
        'ModifyFirewallRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyFirewallRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateFirewallRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'firewallId' => [ 'type' => 'string', 'locationName' => 'firewallId', ],
            ],
        ],
        'ModifyFirewallRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'ruleId' => [ 'type' => 'string', 'locationName' => 'ruleId', ],
                'sourceAddress' => [ 'type' => 'string', 'locationName' => 'sourceAddress', ],
                'ruleProtocol' => [ 'type' => 'string', 'locationName' => 'ruleProtocol', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteFirewallRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'ruleId' => [ 'type' => 'string', 'locationName' => 'ruleId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteFirewallRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeFirewallRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeFirewallRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'firewallRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'FirewallRule', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateFirewallRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'sourceAddress' => [ 'type' => 'string', 'locationName' => 'sourceAddress', ],
                'ruleProtocol' => [ 'type' => 'string', 'locationName' => 'ruleProtocol', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeImagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeImagesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteCustomImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateCustomImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeImagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageIds' => [ 'type' => 'string', 'locationName' => 'imageIds', ],
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'platform' => [ 'type' => 'string', 'locationName' => 'platform', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateCustomImageResultShape' => [
            'type' => 'structure',
            'members' => [
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
            ],
        ],
        'CreateCustomImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateCustomImageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteCustomImageResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyImageAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeImagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'images' => [ 'type' => 'list', 'member' => [ 'shape' => 'Image', ], ],
            ],
        ],
        'ModifyImageAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyImageAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteCustomImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDomainsResultShape' => [
            'type' => 'structure',
            'members' => [
                'domains' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceDomain', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'string', 'locationName' => 'instanceIds', ],
                'chargeType' => [ 'type' => 'string', 'locationName' => 'chargeType', ],
                'publicIpAddresses' => [ 'type' => 'string', 'locationName' => 'publicIpAddresses', ],
                'names' => [ 'type' => 'string', 'locationName' => 'names', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeDomainsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainNames' => [ 'type' => 'string', 'locationName' => 'domainNames', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribePlansCanUpgradeResultShape' => [
            'type' => 'structure',
            'members' => [
                'plans' => [ 'type' => 'list', 'member' => [ 'shape' => 'Plan', ], ],
            ],
        ],
        'DisassociateDomainsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateInstanceAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisassociateDomainsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'RebootInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AssociateDomainsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceVncUrlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeInstanceResultShape', ],
            ],
        ],
        'ResetSystemResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisassociateDomainsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstancesTrafficPackagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesTrafficPackagesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateInstanceAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StartInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePlansCanUpgradeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePlansCanUpgradeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceVncUrlResultShape' => [
            'type' => 'structure',
            'members' => [
                'vncUrl' => [ 'type' => 'string', 'locationName' => 'vncUrl', ],
            ],
        ],
        'DescribeInstancesTrafficPackagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceTrafficPackageUsages' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceTrafficPackageUsage', ], ],
            ],
        ],
        'DescribePlansCanUpgradeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'Instance', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'UpgradeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instance' =>  [ 'shape' => 'Instance', ],
            ],
        ],
        'DescribeInstancesTrafficPackagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StartInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'planId' => [ 'type' => 'string', 'locationName' => 'planId', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'period' => [ 'type' => 'integer', 'locationName' => 'period', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
                'amount' => [ 'type' => 'integer', 'locationName' => 'amount', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'chargeType' => [ 'type' => 'string', 'locationName' => 'chargeType', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'passwordAuth' => [ 'type' => 'string', 'locationName' => 'passwordAuth', ],
                'buyScenario' => [ 'type' => 'string', 'locationName' => 'buyScenario', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpgradeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'planId' => [ 'type' => 'string', 'locationName' => 'planId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StopInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RebootInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstanceVncUrlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeInstanceVncUrlResultShape', ],
            ],
        ],
        'CreateInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CreateInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateInstanceAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RebootInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpgradeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResetSystemRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'passwordAuth' => [ 'type' => 'string', 'locationName' => 'passwordAuth', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeDomainsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDomainsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssociateDomainsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ResetSystemResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AssociateDomainsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteKeypairResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AttachKeypairResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AttachKeypairResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeKeypairsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeKeypairsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AttachKeypairResultShape' => [
            'type' => 'structure',
            'members' => [
                'successInstanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'failInstanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeKeypairsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AttachKeypairRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'passwordAuth' => [ 'type' => 'string', 'locationName' => 'passwordAuth', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
            ],
        ],
        'CreateKeypairRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeKeypairsResultShape' => [
            'type' => 'structure',
            'members' => [
                'keypairs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Keypair', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteKeypairRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
            ],
        ],
        'DetachKeypairResultShape' => [
            'type' => 'structure',
            'members' => [
                'successInstanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'failInstanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ImportKeypairRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'publicKey' => [ 'type' => 'string', 'locationName' => 'publicKey', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ImportKeypairResultShape' => [
            'type' => 'structure',
            'members' => [
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'keyFingerprint' => [ 'type' => 'string', 'locationName' => 'keyFingerprint', ],
            ],
        ],
        'CreateKeypairResultShape' => [
            'type' => 'structure',
            'members' => [
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'privateKey' => [ 'type' => 'string', 'locationName' => 'privateKey', ],
                'keyFingerprint' => [ 'type' => 'string', 'locationName' => 'keyFingerprint', ],
            ],
        ],
        'DetachKeypairRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
            ],
        ],
        'ImportKeypairResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ImportKeypairResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DetachKeypairResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DetachKeypairResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'Filter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CreateKeypairResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateKeypairResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteKeypairResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribePlansRequestShape' => [
            'type' => 'structure',
            'members' => [
                'classification' => [ 'type' => 'string', 'locationName' => 'classification', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribePlansResultShape' => [
            'type' => 'structure',
            'members' => [
                'plans' => [ 'type' => 'list', 'member' => [ 'shape' => 'Plan', ], ],
            ],
        ],
        'DescribePlansResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePlansResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePlansSoldOutStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'planIds' => [ 'type' => 'string', 'locationName' => 'planIds', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribePlansSoldOutStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'statusMap' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribePlansSoldOutStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePlansSoldOutStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryQuotaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryQuotaResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryQuotaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryQuotaResultShape' => [
            'type' => 'structure',
            'members' => [
                'quotas' => [ 'type' => 'list', 'member' => [ 'shape' => 'Quota', ], ],
            ],
        ],
    ],
];
