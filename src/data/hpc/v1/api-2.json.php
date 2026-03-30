<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'hpc',
        'protocol' => 'json',
//        'serviceFullName' => 'hpc',
//        'serviceId' => 'hpc',
    ],
    'operations' => [
        'DescribeDiagnosticResults' => [
            'name' => 'DescribeDiagnosticResults',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/diagnosis',
            ],
            'input' => [ 'shape' => 'DescribeDiagnosticResultsRequestShape', ],
            'output' => [ 'shape' => 'DescribeDiagnosticResultsResponseShape', ],
        ],
        'CreateDiagnosticTask' => [
            'name' => 'CreateDiagnosticTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/diagnosis',
            ],
            'input' => [ 'shape' => 'CreateDiagnosticTaskRequestShape', ],
            'output' => [ 'shape' => 'CreateDiagnosticTaskResponseShape', ],
        ],
        'DescribeDiagnosticResult' => [
            'name' => 'DescribeDiagnosticResult',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/diagnosis/{diagnosticId}',
            ],
            'input' => [ 'shape' => 'DescribeDiagnosticResultRequestShape', ],
            'output' => [ 'shape' => 'DescribeDiagnosticResultResponseShape', ],
        ],
        'DescribeInstanceTypes' => [
            'name' => 'DescribeInstanceTypes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instanceTypes',
            ],
            'input' => [ 'shape' => 'DescribeInstanceTypesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceTypesResponseShape', ],
        ],
        'DescribeInstances' => [
            'name' => 'DescribeInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/baremetals',
            ],
            'input' => [ 'shape' => 'DescribeInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstancesResponseShape', ],
        ],
        'CreateInstances' => [
            'name' => 'CreateInstances',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/baremetals',
            ],
            'input' => [ 'shape' => 'CreateInstancesRequestShape', ],
            'output' => [ 'shape' => 'CreateInstancesResponseShape', ],
        ],
        'DescribeInstance' => [
            'name' => 'DescribeInstance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/baremetals/{instanceId}',
            ],
            'input' => [ 'shape' => 'DescribeInstanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceResponseShape', ],
        ],
        'StartInstance' => [
            'name' => 'StartInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/baremetals/{instanceId}:startInstance',
            ],
            'input' => [ 'shape' => 'StartInstanceRequestShape', ],
            'output' => [ 'shape' => 'StartInstanceResponseShape', ],
        ],
        'StopInstance' => [
            'name' => 'StopInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/baremetals/{instanceId}:stopInstance',
            ],
            'input' => [ 'shape' => 'StopInstanceRequestShape', ],
            'output' => [ 'shape' => 'StopInstanceResponseShape', ],
        ],
        'RebootInstance' => [
            'name' => 'RebootInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/baremetals/{instanceId}:rebootInstance',
            ],
            'input' => [ 'shape' => 'RebootInstanceRequestShape', ],
            'output' => [ 'shape' => 'RebootInstanceResponseShape', ],
        ],
        'RebuildInstance' => [
            'name' => 'RebuildInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/baremetals/{instanceId}:rebuildInstance',
            ],
            'input' => [ 'shape' => 'RebuildInstanceRequestShape', ],
            'output' => [ 'shape' => 'RebuildInstanceResponseShape', ],
        ],
        'RecoverInstance' => [
            'name' => 'RecoverInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/baremetals/{instanceId}:recoverInstance',
            ],
            'input' => [ 'shape' => 'RecoverInstanceRequestShape', ],
            'output' => [ 'shape' => 'RecoverInstanceResponseShape', ],
        ],
        'ModifyInstancePassword' => [
            'name' => 'ModifyInstancePassword',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/baremetals/{instanceId}:modifyInstancePassword',
            ],
            'input' => [ 'shape' => 'ModifyInstancePasswordRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstancePasswordResponseShape', ],
        ],
        'AssociateElasticIp' => [
            'name' => 'AssociateElasticIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/baremetals/{instanceId}:associateElasticIp',
            ],
            'input' => [ 'shape' => 'AssociateElasticIpRequestShape', ],
            'output' => [ 'shape' => 'AssociateElasticIpResponseShape', ],
        ],
        'DisassociateElasticIp' => [
            'name' => 'DisassociateElasticIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/baremetals/{instanceId}:disassociateElasticIp',
            ],
            'input' => [ 'shape' => 'DisassociateElasticIpRequestShape', ],
            'output' => [ 'shape' => 'DisassociateElasticIpResponseShape', ],
        ],
        'ModifyInstanceAttribute' => [
            'name' => 'ModifyInstanceAttribute',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/baremetals/{instanceId}:modifyInstanceAttribute',
            ],
            'input' => [ 'shape' => 'ModifyInstanceAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceAttributeResponseShape', ],
        ],
        'DescribeChargeDuration' => [
            'name' => 'DescribeChargeDuration',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/baremetals:describeChargeDuration',
            ],
            'input' => [ 'shape' => 'DescribeChargeDurationRequestShape', ],
            'output' => [ 'shape' => 'DescribeChargeDurationResponseShape', ],
        ],
        'ExportInstancesData' => [
            'name' => 'ExportInstancesData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/baremetals:exportInstancesData',
            ],
            'input' => [ 'shape' => 'ExportInstancesDataRequestShape', ],
            'output' => [ 'shape' => 'ExportInstancesDataResponseShape', ],
        ],
        'DescribeNetworkTopology' => [
            'name' => 'DescribeNetworkTopology',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/network:describeNetworkTopology',
            ],
            'input' => [ 'shape' => 'DescribeNetworkTopologyRequestShape', ],
            'output' => [ 'shape' => 'DescribeNetworkTopologyResponseShape', ],
        ],
        'DescribeNetworkRelationship' => [
            'name' => 'DescribeNetworkRelationship',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/network:describeNetworkRelationship',
            ],
            'input' => [ 'shape' => 'DescribeNetworkRelationshipRequestShape', ],
            'output' => [ 'shape' => 'DescribeNetworkRelationshipResponseShape', ],
        ],
        'DescribeCommunicationRange' => [
            'name' => 'DescribeCommunicationRange',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/network:describeCommunicationRange',
            ],
            'input' => [ 'shape' => 'DescribeCommunicationRangeRequestShape', ],
            'output' => [ 'shape' => 'DescribeCommunicationRangeResponseShape', ],
        ],
        'DeleteCluster' => [
            'name' => 'DeleteCluster',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/operation:deleteCluster',
            ],
            'input' => [ 'shape' => 'DeleteClusterRequestShape', ],
            'output' => [ 'shape' => 'DeleteClusterResponseShape', ],
        ],
        'ModifyCluster' => [
            'name' => 'ModifyCluster',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/operation:modifyCluster',
            ],
            'input' => [ 'shape' => 'ModifyClusterRequestShape', ],
            'output' => [ 'shape' => 'ModifyClusterResponseShape', ],
        ],
        'CreateCluster' => [
            'name' => 'CreateCluster',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/operation:createCluster',
            ],
            'input' => [ 'shape' => 'CreateClusterRequestShape', ],
            'output' => [ 'shape' => 'CreateClusterResponseShape', ],
        ],
        'DescribePackages' => [
            'name' => 'DescribePackages',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/packages',
            ],
            'input' => [ 'shape' => 'DescribePackagesRequestShape', ],
            'output' => [ 'shape' => 'DescribePackagesResponseShape', ],
        ],
        'DescribePackage' => [
            'name' => 'DescribePackage',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/packages/{packageId}',
            ],
            'input' => [ 'shape' => 'DescribePackageRequestShape', ],
            'output' => [ 'shape' => 'DescribePackageResponseShape', ],
        ],
        'TaskFinished' => [
            'name' => 'TaskFinished',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/pipelinetasks/{taskID}:finished',
            ],
            'input' => [ 'shape' => 'TaskFinishedRequestShape', ],
            'output' => [ 'shape' => 'TaskFinishedResponseShape', ],
        ],
        'TaskHeartbeat' => [
            'name' => 'TaskHeartbeat',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/pipelinetasks/{taskID}:heartbeat',
            ],
            'input' => [ 'shape' => 'TaskHeartbeatRequestShape', ],
            'output' => [ 'shape' => 'TaskHeartbeatResponseShape', ],
        ],
        'DescribeTasks' => [
            'name' => 'DescribeTasks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/resources/{resourceID}/pipelinetasks',
            ],
            'input' => [ 'shape' => 'DescribeTasksRequestShape', ],
            'output' => [ 'shape' => 'DescribeTasksResponseShape', ],
        ],
        'DescribeQuota' => [
            'name' => 'DescribeQuota',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/quotas:describeQuota',
            ],
            'input' => [ 'shape' => 'DescribeQuotaRequestShape', ],
            'output' => [ 'shape' => 'DescribeQuotaResponseShape', ],
        ],
        'DescribeAvailableClusters' => [
            'name' => 'DescribeAvailableClusters',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters',
            ],
            'input' => [ 'shape' => 'DescribeAvailableClustersRequestShape', ],
            'output' => [ 'shape' => 'DescribeAvailableClustersResponseShape', ],
        ],
        'EventRemoteWrite' => [
            'name' => 'EventRemoteWrite',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/writeevents',
            ],
            'input' => [ 'shape' => 'EventRemoteWriteRequestShape', ],
            'output' => [ 'shape' => 'EventRemoteWriteResponseShape', ],
        ],
    ],
    'shapes' => [
        'BindInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'Charge' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeStatus' => [ 'type' => 'string', 'locationName' => 'chargeStatus', ],
                'chargeStartTime' => [ 'type' => 'string', 'locationName' => 'chargeStartTime', ],
                'chargeExpiredTime' => [ 'type' => 'string', 'locationName' => 'chargeExpiredTime', ],
                'chargeRetireTime' => [ 'type' => 'string', 'locationName' => 'chargeRetireTime', ],
            ],
        ],
        'ChargeDuration' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'chargeDuration' => [ 'type' => 'string', 'locationName' => 'chargeDuration', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeStatus' => [ 'type' => 'string', 'locationName' => 'chargeStatus', ],
                'chargeStartTime' => [ 'type' => 'string', 'locationName' => 'chargeStartTime', ],
                'chargeExpiredTime' => [ 'type' => 'string', 'locationName' => 'chargeExpiredTime', ],
                'chargeRetireTime' => [ 'type' => 'string', 'locationName' => 'chargeRetireTime', ],
            ],
        ],
        'Cluster' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'azType' => [ 'type' => 'string', 'locationName' => 'azType', ],
                'hpcClusterId' => [ 'type' => 'string', 'locationName' => 'hpcClusterId', ],
                'hpcClusterName' => [ 'type' => 'string', 'locationName' => 'hpcClusterName', ],
                'podIds' => [ 'type' => 'string', 'locationName' => 'podIds', ],
                'suIds' => [ 'type' => 'string', 'locationName' => 'suIds', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DiagnosticResultDetail' => [
            'type' => 'structure',
            'members' => [
                'diagnosticId' => [ 'type' => 'string', 'locationName' => 'diagnosticId', ],
                'nodeIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'diagnosticType' => [ 'type' => 'string', 'locationName' => 'diagnosticType', ],
                'diagnosticState' => [ 'type' => 'string', 'locationName' => 'diagnosticState', ],
                'diagnosticResults' => [ 'type' => 'object', 'locationName' => 'diagnosticResults', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'DiagnosticTaskSpec' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'nodeIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'diagnosticType' => [ 'type' => 'string', 'locationName' => 'diagnosticType', ],
                'params' => [ 'type' => 'object', 'locationName' => 'params', ],
            ],
        ],
        'Gpu' => [
            'type' => 'structure',
            'members' => [
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
                'vram' => [ 'type' => 'integer', 'locationName' => 'vram', ],
            ],
        ],
        'RdmaNetworkInterface' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'portId' => [ 'type' => 'string', 'locationName' => 'portId', ],
                'guid' => [ 'type' => 'string', 'locationName' => 'guid', ],
                'macAddress' => [ 'type' => 'string', 'locationName' => 'macAddress', ],
                'ipAddress' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'scene' => [ 'type' => 'string', 'locationName' => 'scene', ],
            ],
        ],
        'InstanceNetworkInterfaceAttachment' => [
            'type' => 'structure',
            'members' => [
                'deviceIndex' => [ 'type' => 'integer', 'locationName' => 'deviceIndex', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'networkInterface' =>  [ 'shape' => 'InstanceNetworkInterface', ],
            ],
        ],
        'NetworkInterfacePrivateIp' => [
            'type' => 'structure',
            'members' => [
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
            ],
        ],
        'InstanceDiskAttachment' => [
            'type' => 'structure',
            'members' => [
                'diskCategory' => [ 'type' => 'string', 'locationName' => 'diskCategory', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'localDisk' =>  [ 'shape' => 'LocalDisk', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'InstanceInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'bind' => [ 'type' => 'list', 'member' => [ 'shape' => 'BindInfo', ], ],
            ],
        ],
        'InstanceNetworkInterface' => [
            'type' => 'structure',
            'members' => [
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
                'macAddress' => [ 'type' => 'string', 'locationName' => 'macAddress', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'primaryIp' =>  [ 'shape' => 'NetworkInterfacePrivateIp', ],
            ],
        ],
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'hostName' => [ 'type' => 'string', 'locationName' => 'hostName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'hpcClusterId' => [ 'type' => 'string', 'locationName' => 'hpcClusterId', ],
                'hpcClusterName' => [ 'type' => 'string', 'locationName' => 'hpcClusterName', ],
                'packageId' => [ 'type' => 'string', 'locationName' => 'packageId', ],
                'osType' => [ 'type' => 'string', 'locationName' => 'osType', ],
                'osVersion' => [ 'type' => 'string', 'locationName' => 'osVersion', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'systemDisk' =>  [ 'shape' => 'InstanceDiskAttachment', ],
                'dataDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceDiskAttachment', ], ],
                'rdmaNetworkInterfaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'RdmaNetworkInterface', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
                'primaryNetworkInterface' =>  [ 'shape' => 'InstanceNetworkInterfaceAttachment', ],
                'launchTime' => [ 'type' => 'string', 'locationName' => 'launchTime', ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
                'platform' => [ 'type' => 'string', 'locationName' => 'platform', ],
                'bootMode' => [ 'type' => 'string', 'locationName' => 'bootMode', ],
                'architecture' => [ 'type' => 'string', 'locationName' => 'architecture', ],
                'progress' => [ 'type' => 'integer', 'locationName' => 'progress', ],
            ],
        ],
        'LocalDisk' => [
            'type' => 'structure',
            'members' => [
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'diskSizeGB' => [ 'type' => 'integer', 'locationName' => 'diskSizeGB', ],
            ],
        ],
        'InstanceNetworkInterfaceAttachmentSpec' => [
            'type' => 'structure',
            'members' => [
                'deviceIndex' => [ 'type' => 'integer', 'locationName' => 'deviceIndex', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'networkInterface' =>  [ 'shape' => 'NetworkInterfaceSpec', ],
            ],
        ],
        'NetworkInterfaceSpec' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'networkInterfaceName' => [ 'type' => 'string', 'locationName' => 'networkInterfaceName', ],
                'primaryIpAddress' => [ 'type' => 'string', 'locationName' => 'primaryIpAddress', ],
                'secondaryIpAddresses' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'secondaryIpCount' => [ 'type' => 'integer', 'locationName' => 'secondaryIpCount', ],
                'secondaryIpMaskLen' => [ 'type' => 'integer', 'locationName' => 'secondaryIpMaskLen', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'InstanceChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
            ],
        ],
        'Userdata' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'InstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'packageId' => [ 'type' => 'string', 'locationName' => 'packageId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'hostName' => [ 'type' => 'string', 'locationName' => 'hostName', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'primaryNetworkInterface' =>  [ 'shape' => 'InstanceNetworkInterfaceAttachmentSpec', ],
                'charge' =>  [ 'shape' => 'InstanceChargeSpec', ],
                'userdata' => [ 'type' => 'list', 'member' => [ 'shape' => 'Userdata', ], ],
                'metadata' => [ 'type' => 'list', 'member' => [ 'shape' => 'Metadata', ], ],
                'installGpuDriver' => [ 'type' => 'boolean', 'locationName' => 'installGpuDriver', ],
                'su' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'hpcClusterId' => [ 'type' => 'string', 'locationName' => 'hpcClusterId', ],
                'hpcClusterName' => [ 'type' => 'string', 'locationName' => 'hpcClusterName', ],
            ],
        ],
        'Metadata' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'InstanceTypeState' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'inStock' => [ 'type' => 'boolean', 'locationName' => 'inStock', ],
                'availableCount' => [ 'type' => 'integer', 'locationName' => 'availableCount', ],
            ],
        ],
        'Rdma' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'bandwidthGbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthGbps', ],
            ],
        ],
        'InstanceType' => [
            'type' => 'structure',
            'members' => [
                'family' => [ 'type' => 'string', 'locationName' => 'family', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'architecture' => [ 'type' => 'string', 'locationName' => 'architecture', ],
                'memoryMB' => [ 'type' => 'integer', 'locationName' => 'memoryMB', ],
                'nicLimit' => [ 'type' => 'integer', 'locationName' => 'nicLimit', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'forbiddenElasticIp' => [ 'type' => 'boolean', 'locationName' => 'forbiddenElasticIp', ],
                'state' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceTypeState', ], ],
                'rdma' =>  [ 'shape' => 'Rdma', ],
                'generation' => [ 'type' => 'integer', 'locationName' => 'generation', ],
                'localDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'LocalDisk', ], ],
            ],
        ],
        'NetworkTopology' => [
            'type' => 'structure',
            'members' => [
                'clusterLayers' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterLayer', ], ],
            ],
        ],
        'InstanceLayer' => [
            'type' => 'structure',
            'members' => [
                'layerType' => [ 'type' => 'string', 'locationName' => 'layerType', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'hostName' => [ 'type' => 'string', 'locationName' => 'hostName', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
            ],
        ],
        'ClusterLayer' => [
            'type' => 'structure',
            'members' => [
                'layerType' => [ 'type' => 'string', 'locationName' => 'layerType', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'podLayers' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodLayer', ], ],
            ],
        ],
        'PodLayer' => [
            'type' => 'structure',
            'members' => [
                'layerType' => [ 'type' => 'string', 'locationName' => 'layerType', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'suLayers' => [ 'type' => 'list', 'member' => [ 'shape' => 'SuLayer', ], ],
            ],
        ],
        'SuLayer' => [
            'type' => 'structure',
            'members' => [
                'layerType' => [ 'type' => 'string', 'locationName' => 'layerType', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'instanceLayers' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceLayer', ], ],
            ],
        ],
        'PackageInfo' => [
            'type' => 'structure',
            'members' => [
                'packageId' => [ 'type' => 'string', 'locationName' => 'packageId', ],
                'packageName' => [ 'type' => 'string', 'locationName' => 'packageName', ],
                'osType' => [ 'type' => 'string', 'locationName' => 'osType', ],
                'osVersion' => [ 'type' => 'string', 'locationName' => 'osVersion', ],
                'architecture' => [ 'type' => 'string', 'locationName' => 'architecture', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'Quota' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'used' => [ 'type' => 'integer', 'locationName' => 'used', ],
                'limited' => [ 'type' => 'integer', 'locationName' => 'limited', ],
            ],
        ],
        'TaskFinishedSpec' => [
            'type' => 'structure',
            'members' => [
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'eventType' => [ 'type' => 'string', 'locationName' => 'eventType', ],
                'instanceID' => [ 'type' => 'string', 'locationName' => 'instanceID', ],
                'stdout' => [ 'type' => 'string', 'locationName' => 'stdout', ],
                'taskID' => [ 'type' => 'string', 'locationName' => 'taskID', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
                'userVars' => [ 'type' => 'object', 'locationName' => 'userVars', ],
            ],
        ],
        'DescribeDiagnosticResultsResultShape' => [
            'type' => 'structure',
            'members' => [
                'diagnosticResults' => [ 'type' => 'list', 'member' => [ 'shape' => 'DiagnosticResult', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeDiagnosticResultRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'diagnosticId' => [ 'type' => 'string', 'locationName' => 'diagnosticId', ],
            ],
        ],
        'DescribeDiagnosticResultsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'diagnosticType' => [ 'type' => 'string', 'locationName' => 'diagnosticType', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeDiagnosticResultsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDiagnosticResultsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDiagnosticResultResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDiagnosticResultResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateDiagnosticTaskResult' => [
            'type' => 'structure',
            'members' => [
                'diagnosticId' => [ 'type' => 'string', 'locationName' => 'diagnosticId', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
            ],
        ],
        'CreateDiagnosticTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateDiagnosticTaskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDiagnosticResultResultShape' => [
            'type' => 'structure',
            'members' => [
                'diagnosticResultDetail' =>  [ 'shape' => 'DiagnosticResultDetail', ],
            ],
        ],
        'CreateDiagnosticTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'diagnosticTaskSpec' =>  [ 'shape' => 'DiagnosticTaskSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateDiagnosticTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'createDiagnosticTaskResult' =>  [ 'shape' => 'CreateDiagnosticTaskResult', ],
            ],
        ],
        'DiagnosticResult' => [
            'type' => 'structure',
            'members' => [
                'diagnosticId' => [ 'type' => 'string', 'locationName' => 'diagnosticId', ],
                'nodeIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'diagnosticType' => [ 'type' => 'string', 'locationName' => 'diagnosticType', ],
                'diagnosticState' => [ 'type' => 'string', 'locationName' => 'diagnosticState', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'DescribeInstanceTypesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceTypesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceTypesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceType', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
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
        'DescribeInstanceTypesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyInstanceAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'userdata' => [ 'type' => 'list', 'member' => [ 'shape' => 'Userdata', ], ],
                'metadata' => [ 'type' => 'list', 'member' => [ 'shape' => 'Metadata', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeInstanceResultShape', ],
            ],
        ],
        'StopInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RecoverInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstancePasswordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssociateElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstancePasswordResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ExportInstancesDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'integer', 'locationName' => 'taskId', ],
            ],
        ],
        'AssociateElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisassociateElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeChargeDurationResultShape' => [
            'type' => 'structure',
            'members' => [
                'chargeDuration' =>  [ 'shape' => 'ChargeDuration', ],
            ],
        ],
        'CreateInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceSpec' =>  [ 'shape' => 'InstanceSpec', ],
                'maxCount' => [ 'type' => 'integer', 'locationName' => 'maxCount', ],
                'dryRun' => [ 'type' => 'boolean', 'locationName' => 'dryRun', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DisassociateElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'AssociateElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ExportInstancesDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startPage' => [ 'type' => 'integer', 'locationName' => 'startPage', ],
                'endPage' => [ 'type' => 'integer', 'locationName' => 'endPage', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'columns' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'networkTopologyOrder' => [ 'type' => 'boolean', 'locationName' => 'networkTopologyOrder', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StopInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'Instance', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DisassociateElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StartInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'RebuildInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RebootInstanceResultShape' => [
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
        'RecoverInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeChargeDurationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeChargeDurationResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeChargeDurationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'RebootInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'StopInstanceResponseShape' => [
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
        'DescribeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instance' =>  [ 'shape' => 'Instance', ],
            ],
        ],
        'DescribeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RebuildInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'packageId' => [ 'type' => 'string', 'locationName' => 'packageId', ],
                'hostname' => [ 'type' => 'string', 'locationName' => 'hostname', ],
                'metadata' => [ 'type' => 'list', 'member' => [ 'shape' => 'Metadata', ], ],
                'userdata' => [ 'type' => 'list', 'member' => [ 'shape' => 'Userdata', ], ],
                'clearDataDisks' => [ 'type' => 'boolean', 'locationName' => 'clearDataDisks', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstancePasswordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'RebuildInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ExportInstancesDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ExportInstancesDataResultShape', ],
            ],
        ],
        'ModifyInstanceAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RecoverInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeNetworkTopologyResultShape' => [
            'type' => 'structure',
            'members' => [
                'networkTopology' =>  [ 'shape' => 'NetworkTopology', ],
            ],
        ],
        'DescribeNetworkRelationshipResultShape' => [
            'type' => 'structure',
            'members' => [
                'relationship' => [ 'type' => 'string', 'locationName' => 'relationship', ],
            ],
        ],
        'DescribeNetworkTopologyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeNetworkRelationshipRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId1' => [ 'type' => 'string', 'locationName' => 'instanceId1', ],
                'instanceId2' => [ 'type' => 'string', 'locationName' => 'instanceId2', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeCommunicationRangeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'communicationRange' => [ 'type' => 'string', 'locationName' => 'communicationRange', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeCommunicationRangeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCommunicationRangeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNetworkRelationshipResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeNetworkRelationshipResultShape', ],
            ],
        ],
        'DescribeNetworkTopologyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNetworkTopologyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCommunicationRangeResultShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'Instance', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateClusterResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteClusterResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyClusterResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'podIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'suIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'podIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'suIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribePackageResultShape' => [
            'type' => 'structure',
            'members' => [
                'packageInfo' =>  [ 'shape' => 'PackageInfo', ],
            ],
        ],
        'DescribePackagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePackagesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePackagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'packageList' => [ 'type' => 'list', 'member' => [ 'shape' => 'PackageInfo', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribePackagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'packageName' => [ 'type' => 'string', 'locationName' => 'packageName', ],
                'packageIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'osType' => [ 'type' => 'string', 'locationName' => 'osType', ],
                'architecture' => [ 'type' => 'string', 'locationName' => 'architecture', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribePackageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePackageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePackageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'packageId' => [ 'type' => 'string', 'locationName' => 'packageId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'TaskFinishedRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' =>  [ 'shape' => 'TaskFinishedSpec', ],
                'taskID' => [ 'type' => 'string', 'locationName' => 'taskID', ],
            ],
        ],
        'TaskHeartbeatResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'TaskHeartbeatResultShape', ],
            ],
        ],
        'TaskFinishedResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeTasksResultShape', ],
            ],
        ],
        'TaskHeartbeatResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceID' => [ 'type' => 'string', 'locationName' => 'resourceID', ],
            ],
        ],
        'DescribeTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'tasks' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'TaskHeartbeatRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskID' => [ 'type' => 'string', 'locationName' => 'taskID', ],
            ],
        ],
        'TaskFinishedResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'TaskFinishedResultShape', ],
            ],
        ],
        'DescribeQuotaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeQuotaResultShape' => [
            'type' => 'structure',
            'members' => [
                'quota' =>  [ 'shape' => 'Quota', ],
            ],
        ],
        'DescribeQuotaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeQuotaResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAvailableClustersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAvailableClustersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAvailableClustersResultShape' => [
            'type' => 'structure',
            'members' => [
                'clusters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Cluster', ], ],
            ],
        ],
        'DescribeAvailableClustersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'EventRemoteWriteResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'EventRemoteWriteResultShape', ],
            ],
        ],
        'EventRemoteWriteResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EventRemoteWriteRequestShape' => [
            'type' => 'structure',
            'members' => [
                'route' => [ 'type' => 'string', 'locationName' => 'route', ],
                'body' => [ 'type' => '', 'locationName' => 'body', ],
            ],
        ],
    ],
];
