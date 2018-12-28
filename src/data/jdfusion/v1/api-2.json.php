<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'jdfusion',
        'protocol' => 'json',
//        'serviceFullName' => 'jdfusion',
//        'serviceId' => 'jdfusion',
    ],
    'operations' => [
        'GetCloudInfos' => [
            'name' => 'GetCloudInfos',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cloud_info',
            ],
            'input' => [ 'shape' => 'GetCloudInfosRequestShape', ],
            'output' => [ 'shape' => 'GetCloudInfosResponseShape', ],
        ],
        'RegistCloudInfo' => [
            'name' => 'RegistCloudInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cloud_info',
            ],
            'input' => [ 'shape' => 'RegistCloudInfoRequestShape', ],
            'output' => [ 'shape' => 'RegistCloudInfoResponseShape', ],
        ],
        'GetCloudInfoById' => [
            'name' => 'GetCloudInfoById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cloud_info/{cloudId}',
            ],
            'input' => [ 'shape' => 'GetCloudInfoByIdRequestShape', ],
            'output' => [ 'shape' => 'GetCloudInfoByIdResponseShape', ],
        ],
        'UnregistCloudInfo' => [
            'name' => 'UnregistCloudInfo',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/cloud_info/{cloudId}',
            ],
            'input' => [ 'shape' => 'UnregistCloudInfoRequestShape', ],
            'output' => [ 'shape' => 'UnregistCloudInfoResponseShape', ],
        ],
        'GetDisks' => [
            'name' => 'GetDisks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/disk_disks',
            ],
            'input' => [ 'shape' => 'GetDisksRequestShape', ],
            'output' => [ 'shape' => 'GetDisksResponseShape', ],
        ],
        'CreateDisk' => [
            'name' => 'CreateDisk',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/disk_disks',
            ],
            'input' => [ 'shape' => 'CreateDiskRequestShape', ],
            'output' => [ 'shape' => 'CreateDiskResponseShape', ],
        ],
        'GetDiskById' => [
            'name' => 'GetDiskById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/disk_disks/{id}',
            ],
            'input' => [ 'shape' => 'GetDiskByIdRequestShape', ],
            'output' => [ 'shape' => 'GetDiskByIdResponseShape', ],
        ],
        'RemoveDiskById' => [
            'name' => 'RemoveDiskById',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/disk_disks/{id}',
            ],
            'input' => [ 'shape' => 'RemoveDiskByIdRequestShape', ],
            'output' => [ 'shape' => 'RemoveDiskByIdResponseShape', ],
        ],
        'AttachDiskToVmInstanceByDiskId' => [
            'name' => 'AttachDiskToVmInstanceByDiskId',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/disk_disks/{id}:attach',
            ],
            'input' => [ 'shape' => 'AttachDiskToVmInstanceByDiskIdRequestShape', ],
            'output' => [ 'shape' => 'AttachDiskToVmInstanceByDiskIdResponseShape', ],
        ],
        'DetachDiskToVmInstanceByDiskId' => [
            'name' => 'DetachDiskToVmInstanceByDiskId',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/disk_disks/{id}:detach',
            ],
            'input' => [ 'shape' => 'DetachDiskToVmInstanceByDiskIdRequestShape', ],
            'output' => [ 'shape' => 'DetachDiskToVmInstanceByDiskIdResponseShape', ],
        ],
        'GetTaskInfoHistoryById' => [
            'name' => 'GetTaskInfoHistoryById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/task_infos/{task}/history',
            ],
            'input' => [ 'shape' => 'GetTaskInfoHistoryByIdRequestShape', ],
            'output' => [ 'shape' => 'GetTaskInfoHistoryByIdResponseShape', ],
        ],
        'GetTaskInfoById' => [
            'name' => 'GetTaskInfoById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/task_infos/{task}',
            ],
            'input' => [ 'shape' => 'GetTaskInfoByIdRequestShape', ],
            'output' => [ 'shape' => 'GetTaskInfoByIdResponseShape', ],
        ],
        'GetVmImages' => [
            'name' => 'GetVmImages',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vm_images',
            ],
            'input' => [ 'shape' => 'GetVmImagesRequestShape', ],
            'output' => [ 'shape' => 'GetVmImagesResponseShape', ],
        ],
        'GetVmInstancesById' => [
            'name' => 'GetVmInstancesById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vm_instances/{id}',
            ],
            'input' => [ 'shape' => 'GetVmInstancesByIdRequestShape', ],
            'output' => [ 'shape' => 'GetVmInstancesByIdResponseShape', ],
        ],
        'DeleteVmInstanceById' => [
            'name' => 'DeleteVmInstanceById',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/vm_instances/{id}',
            ],
            'input' => [ 'shape' => 'DeleteVmInstanceByIdRequestShape', ],
            'output' => [ 'shape' => 'DeleteVmInstanceByIdResponseShape', ],
        ],
        'GetVmInstances' => [
            'name' => 'GetVmInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vm_instances',
            ],
            'input' => [ 'shape' => 'GetVmInstancesRequestShape', ],
            'output' => [ 'shape' => 'GetVmInstancesResponseShape', ],
        ],
        'CreateVmInstance' => [
            'name' => 'CreateVmInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vm_instances',
            ],
            'input' => [ 'shape' => 'CreateVmInstanceRequestShape', ],
            'output' => [ 'shape' => 'CreateVmInstanceResponseShape', ],
        ],
        'StopVmInstanceById' => [
            'name' => 'StopVmInstanceById',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/vm_instances/{id}:stop',
            ],
            'input' => [ 'shape' => 'StopVmInstanceByIdRequestShape', ],
            'output' => [ 'shape' => 'StopVmInstanceByIdResponseShape', ],
        ],
        'StartVmInstanceById' => [
            'name' => 'StartVmInstanceById',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/vm_instances/{id}:start',
            ],
            'input' => [ 'shape' => 'StartVmInstanceByIdRequestShape', ],
            'output' => [ 'shape' => 'StartVmInstanceByIdResponseShape', ],
        ],
        'RebootVmInstanceById' => [
            'name' => 'RebootVmInstanceById',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/vm_instances/{id}:reboot',
            ],
            'input' => [ 'shape' => 'RebootVmInstanceByIdRequestShape', ],
            'output' => [ 'shape' => 'RebootVmInstanceByIdResponseShape', ],
        ],
        'GetVmInstanceTypes' => [
            'name' => 'GetVmInstanceTypes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vm_instanceTypes',
            ],
            'input' => [ 'shape' => 'GetVmInstanceTypesRequestShape', ],
            'output' => [ 'shape' => 'GetVmInstanceTypesResponseShape', ],
        ],
        'GetVmKeypairsByName' => [
            'name' => 'GetVmKeypairsByName',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vm_keypairs/{name}',
            ],
            'input' => [ 'shape' => 'GetVmKeypairsByNameRequestShape', ],
            'output' => [ 'shape' => 'GetVmKeypairsByNameResponseShape', ],
        ],
        'DeleteVmKeypairByName' => [
            'name' => 'DeleteVmKeypairByName',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/vm_keypairs/{name}',
            ],
            'input' => [ 'shape' => 'DeleteVmKeypairByNameRequestShape', ],
            'output' => [ 'shape' => 'DeleteVmKeypairByNameResponseShape', ],
        ],
        'GetVmKeypairs' => [
            'name' => 'GetVmKeypairs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vm_keypairs',
            ],
            'input' => [ 'shape' => 'GetVmKeypairsRequestShape', ],
            'output' => [ 'shape' => 'GetVmKeypairsResponseShape', ],
        ],
        'CreateVmKeypair' => [
            'name' => 'CreateVmKeypair',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vm_keypairs',
            ],
            'input' => [ 'shape' => 'CreateVmKeypairRequestShape', ],
            'output' => [ 'shape' => 'CreateVmKeypairResponseShape', ],
        ],
        'GetVpcEips' => [
            'name' => 'GetVpcEips',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_eips',
            ],
            'input' => [ 'shape' => 'GetVpcEipsRequestShape', ],
            'output' => [ 'shape' => 'GetVpcEipsResponseShape', ],
        ],
        'CreateVpcEip' => [
            'name' => 'CreateVpcEip',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vpc_eips',
            ],
            'input' => [ 'shape' => 'CreateVpcEipRequestShape', ],
            'output' => [ 'shape' => 'CreateVpcEipResponseShape', ],
        ],
        'GetVpcEipById' => [
            'name' => 'GetVpcEipById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_eips/{id}',
            ],
            'input' => [ 'shape' => 'GetVpcEipByIdRequestShape', ],
            'output' => [ 'shape' => 'GetVpcEipByIdResponseShape', ],
        ],
        'DeleteVpcEipById' => [
            'name' => 'DeleteVpcEipById',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/vpc_eips/{id}',
            ],
            'input' => [ 'shape' => 'DeleteVpcEipByIdRequestShape', ],
            'output' => [ 'shape' => 'DeleteVpcEipByIdResponseShape', ],
        ],
        'AssociateVpcEipById' => [
            'name' => 'AssociateVpcEipById',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/vpc_eips/{id}:associate',
            ],
            'input' => [ 'shape' => 'AssociateVpcEipByIdRequestShape', ],
            'output' => [ 'shape' => 'AssociateVpcEipByIdResponseShape', ],
        ],
        'DisassociateVpcEipById' => [
            'name' => 'DisassociateVpcEipById',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/vpc_eips/{id}:disassociate',
            ],
            'input' => [ 'shape' => 'DisassociateVpcEipByIdRequestShape', ],
            'output' => [ 'shape' => 'DisassociateVpcEipByIdResponseShape', ],
        ],
        'CreateVpcLBHttpListener' => [
            'name' => 'CreateVpcLBHttpListener',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vpc_lbHttpListener',
            ],
            'input' => [ 'shape' => 'CreateVpcLBHttpListenerRequestShape', ],
            'output' => [ 'shape' => 'CreateVpcLBHttpListenerResponseShape', ],
        ],
        'GetVpcNetworkInterfaceById' => [
            'name' => 'GetVpcNetworkInterfaceById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_networkInterfaces/{id}',
            ],
            'input' => [ 'shape' => 'GetVpcNetworkInterfaceByIdRequestShape', ],
            'output' => [ 'shape' => 'GetVpcNetworkInterfaceByIdResponseShape', ],
        ],
        'DeleteVpcNetworkInterfaceById' => [
            'name' => 'DeleteVpcNetworkInterfaceById',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/vpc_networkInterfaces/{id}',
            ],
            'input' => [ 'shape' => 'DeleteVpcNetworkInterfaceByIdRequestShape', ],
            'output' => [ 'shape' => 'DeleteVpcNetworkInterfaceByIdResponseShape', ],
        ],
        'GetVpcNetworkInterfaces' => [
            'name' => 'GetVpcNetworkInterfaces',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_networkInterfaces',
            ],
            'input' => [ 'shape' => 'GetVpcNetworkInterfacesRequestShape', ],
            'output' => [ 'shape' => 'GetVpcNetworkInterfacesResponseShape', ],
        ],
        'CreateVpcNetworkInterface' => [
            'name' => 'CreateVpcNetworkInterface',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vpc_networkInterfaces',
            ],
            'input' => [ 'shape' => 'CreateVpcNetworkInterfaceRequestShape', ],
            'output' => [ 'shape' => 'CreateVpcNetworkInterfaceResponseShape', ],
        ],
        'AttachVpcNetworkInterfaceById' => [
            'name' => 'AttachVpcNetworkInterfaceById',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/vpc_networkInterfaces/{id}:attach',
            ],
            'input' => [ 'shape' => 'AttachVpcNetworkInterfaceByIdRequestShape', ],
            'output' => [ 'shape' => 'AttachVpcNetworkInterfaceByIdResponseShape', ],
        ],
        'DetachVpcNetworkInterfaceById' => [
            'name' => 'DetachVpcNetworkInterfaceById',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/vpc_networkInterfaces/{id}:detach',
            ],
            'input' => [ 'shape' => 'DetachVpcNetworkInterfaceByIdRequestShape', ],
            'output' => [ 'shape' => 'DetachVpcNetworkInterfaceByIdResponseShape', ],
        ],
        'GetVpcSecurityGroupById' => [
            'name' => 'GetVpcSecurityGroupById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_securityGroups/{id}',
            ],
            'input' => [ 'shape' => 'GetVpcSecurityGroupByIdRequestShape', ],
            'output' => [ 'shape' => 'GetVpcSecurityGroupByIdResponseShape', ],
        ],
        'DeleteVpcSecurityGroupById' => [
            'name' => 'DeleteVpcSecurityGroupById',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/vpc_securityGroups/{id}',
            ],
            'input' => [ 'shape' => 'DeleteVpcSecurityGroupByIdRequestShape', ],
            'output' => [ 'shape' => 'DeleteVpcSecurityGroupByIdResponseShape', ],
        ],
        'GetVpcSecurityGroups' => [
            'name' => 'GetVpcSecurityGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_securityGroups',
            ],
            'input' => [ 'shape' => 'GetVpcSecurityGroupsRequestShape', ],
            'output' => [ 'shape' => 'GetVpcSecurityGroupsResponseShape', ],
        ],
        'CreateVpcSecurityGroup' => [
            'name' => 'CreateVpcSecurityGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vpc_securityGroups',
            ],
            'input' => [ 'shape' => 'CreateVpcSecurityGroupRequestShape', ],
            'output' => [ 'shape' => 'CreateVpcSecurityGroupResponseShape', ],
        ],
        'GetVpcSlbById' => [
            'name' => 'GetVpcSlbById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_slbs/{id}',
            ],
            'input' => [ 'shape' => 'GetVpcSlbByIdRequestShape', ],
            'output' => [ 'shape' => 'GetVpcSlbByIdResponseShape', ],
        ],
        'DeleteVpcSlbById' => [
            'name' => 'DeleteVpcSlbById',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/vpc_slbs/{id}',
            ],
            'input' => [ 'shape' => 'DeleteVpcSlbByIdRequestShape', ],
            'output' => [ 'shape' => 'DeleteVpcSlbByIdResponseShape', ],
        ],
        'GetVpcSlbs' => [
            'name' => 'GetVpcSlbs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_slbs',
            ],
            'input' => [ 'shape' => 'GetVpcSlbsRequestShape', ],
            'output' => [ 'shape' => 'GetVpcSlbsResponseShape', ],
        ],
        'CreateVpcSlb' => [
            'name' => 'CreateVpcSlb',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vpc_slbs',
            ],
            'input' => [ 'shape' => 'CreateVpcSlbRequestShape', ],
            'output' => [ 'shape' => 'CreateVpcSlbResponseShape', ],
        ],
        'GetVpcSubnetById' => [
            'name' => 'GetVpcSubnetById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_subnets/{id}',
            ],
            'input' => [ 'shape' => 'GetVpcSubnetByIdRequestShape', ],
            'output' => [ 'shape' => 'GetVpcSubnetByIdResponseShape', ],
        ],
        'DeleteVpcSubnetById' => [
            'name' => 'DeleteVpcSubnetById',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/vpc_subnets/{id}',
            ],
            'input' => [ 'shape' => 'DeleteVpcSubnetByIdRequestShape', ],
            'output' => [ 'shape' => 'DeleteVpcSubnetByIdResponseShape', ],
        ],
        'GetVpcSubnets' => [
            'name' => 'GetVpcSubnets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_subnets',
            ],
            'input' => [ 'shape' => 'GetVpcSubnetsRequestShape', ],
            'output' => [ 'shape' => 'GetVpcSubnetsResponseShape', ],
        ],
        'CreateVpcSubnet' => [
            'name' => 'CreateVpcSubnet',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vpc_subnets',
            ],
            'input' => [ 'shape' => 'CreateVpcSubnetRequestShape', ],
            'output' => [ 'shape' => 'CreateVpcSubnetResponseShape', ],
        ],
        'GetVpcById' => [
            'name' => 'GetVpcById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_vpcs/{id}',
            ],
            'input' => [ 'shape' => 'GetVpcByIdRequestShape', ],
            'output' => [ 'shape' => 'GetVpcByIdResponseShape', ],
        ],
        'DeleteVpcById' => [
            'name' => 'DeleteVpcById',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/vpc_vpcs/{id}',
            ],
            'input' => [ 'shape' => 'DeleteVpcByIdRequestShape', ],
            'output' => [ 'shape' => 'DeleteVpcByIdResponseShape', ],
        ],
        'GetVpcs' => [
            'name' => 'GetVpcs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_vpcs',
            ],
            'input' => [ 'shape' => 'GetVpcsRequestShape', ],
            'output' => [ 'shape' => 'GetVpcsResponseShape', ],
        ],
        'CreateVpc' => [
            'name' => 'CreateVpc',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vpc_vpcs',
            ],
            'input' => [ 'shape' => 'CreateVpcRequestShape', ],
            'output' => [ 'shape' => 'CreateVpcResponseShape', ],
        ],
        'GetVpcVServerGroups' => [
            'name' => 'GetVpcVServerGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_vserverGroups',
            ],
            'input' => [ 'shape' => 'GetVpcVServerGroupsRequestShape', ],
            'output' => [ 'shape' => 'GetVpcVServerGroupsResponseShape', ],
        ],
        'CreateVpcVServerGroup' => [
            'name' => 'CreateVpcVServerGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vpc_vserverGroups',
            ],
            'input' => [ 'shape' => 'CreateVpcVServerGroupRequestShape', ],
            'output' => [ 'shape' => 'CreateVpcVServerGroupResponseShape', ],
        ],
    ],
    'shapes' => [
        'CloudNotFoundException' => [
            'type' => 'structure',
            'members' => [
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'payload' =>  [ 'shape' => 'Payload1', ],
            ],
        ],
        'UserNotFoundResp' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'UserNotFoundException', ],
            ],
        ],
        'Payload1' => [
            'type' => 'structure',
            'members' => [
                'cloud' => [ 'type' => 'string', 'locationName' => 'cloud', ],
            ],
        ],
        'Payload' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'CloudInfoResp' => [
            'type' => 'structure',
            'members' => [
                'cloud' =>  [ 'shape' => 'CloudInfo', ],
            ],
        ],
        'CloudInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'vendor' => [ 'type' => 'string', 'locationName' => 'vendor', ],
                'info' => [ 'type' => 'object', 'locationName' => 'info', ],
                'metadata' => [ 'type' => 'object', 'locationName' => 'metadata', ],
            ],
        ],
        'GetUserCloudNotFoundResp' => [
            'type' => 'structure',
            'members' => [
                'error' => [ 'type' => 'object', 'locationName' => 'error', ],
            ],
        ],
        'CloudInfoListResp' => [
            'type' => 'structure',
            'members' => [
                'clouds' => [ 'type' => 'list', 'member' => [ 'shape' => 'CloudInfo', ], ],
            ],
        ],
        'CreateCloudInfoReq' => [
            'type' => 'structure',
            'members' => [
                'cloud' =>  [ 'shape' => 'CloudInfo', ],
            ],
        ],
        'UserNotFoundException' => [
            'type' => 'structure',
            'members' => [
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'payload' =>  [ 'shape' => 'Payload', ],
            ],
        ],
        'CloudDataDisk' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'diskSizeGB' => [ 'type' => 'integer', 'locationName' => 'diskSizeGB', ],
                'attachments' => [ 'type' => 'list', 'member' => [ 'shape' => 'ArrayDiskAttachment', ], ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'SystemDisk' => [
            'type' => 'structure',
            'members' => [
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'diskSize' => [ 'type' => 'integer', 'locationName' => 'diskSize', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'DiskItem' => [
            'type' => 'structure',
            'members' => [
                'disk' =>  [ 'shape' => 'CloudDataDisk', ],
            ],
        ],
        'DataDiskInfo' => [
            'type' => 'structure',
            'members' => [
                'diskSize' => [ 'type' => 'integer', 'locationName' => 'diskSize', ],
                'diskMediumType' => [ 'type' => 'string', 'locationName' => 'diskMediumType', ],
                'diskName' => [ 'type' => 'string', 'locationName' => 'diskName', ],
                'autoDelete' => [ 'type' => 'string', 'locationName' => 'autoDelete', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'CreateDataDisk' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'diskSizeGB' => [ 'type' => 'integer', 'locationName' => 'diskSizeGB', ],
                'attachments' => [ 'type' => 'list', 'member' => [ 'shape' => 'ArrayDiskAttachment', ], ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'AttachDataDisk' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'deleteWithInstance' => [ 'type' => 'boolean', 'locationName' => 'deleteWithInstance', ],
            ],
        ],
        'AttachDataDiskReq' => [
            'type' => 'structure',
            'members' => [
                'attach' =>  [ 'shape' => 'AttachDataDisk', ],
            ],
        ],
        'DetachDataDiskReq' => [
            'type' => 'structure',
            'members' => [
                'detach' =>  [ 'shape' => 'DetachDataDisk', ],
            ],
        ],
        'DiskCreateTask' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'ArrayDiskAttachment' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DataDiskAttachment' => [
            'type' => 'structure',
            'members' => [
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'dataDisk' =>  [ 'shape' => 'DataDiskInfo', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'diskCategory' => [ 'type' => 'string', 'locationName' => 'diskCategory', ],
            ],
        ],
        'DiskCollection' => [
            'type' => 'structure',
            'members' => [
                'disks' => [ 'type' => 'list', 'member' => [ 'shape' => 'CloudDataDisk', ], ],
            ],
        ],
        'SysDiskInfo' => [
            'type' => 'structure',
            'members' => [
                'diskSize' => [ 'type' => 'integer', 'locationName' => 'diskSize', ],
                'diskMediumType' => [ 'type' => 'string', 'locationName' => 'diskMediumType', ],
                'diskName' => [ 'type' => 'string', 'locationName' => 'diskName', ],
                'autoDelete' => [ 'type' => 'string', 'locationName' => 'autoDelete', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'ResourceTFInfo' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'body' => [ 'type' => 'string', 'locationName' => 'body', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'provider' => [ 'type' => 'string', 'locationName' => 'provider', ],
                'cloudId' => [ 'type' => 'string', 'locationName' => 'cloudId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
            ],
        ],
        'DetachDataDisk' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'tagKey' => [ 'type' => 'string', 'locationName' => 'tagKey', ],
                'tagValue' => [ 'type' => 'string', 'locationName' => 'tagValue', ],
            ],
        ],
        'CreateDataDiskReq' => [
            'type' => 'structure',
            'members' => [
                'disk' =>  [ 'shape' => 'CreateDataDisk', ],
            ],
        ],
        'TaskInfo' => [
            'type' => 'structure',
            'members' => [
                'beginTime' => [ 'type' => 'string', 'locationName' => 'beginTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
                'taskResult' => [ 'type' => 'string', 'locationName' => 'taskResult', ],
                'lastCode' => [ 'type' => 'string', 'locationName' => 'lastCode', ],
                'taskLastInfo' => [ 'type' => 'string', 'locationName' => 'taskLastInfo', ],
                'resourceIDs' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'msg' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
            ],
        ],
        'ImageInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'architecture' => [ 'type' => 'string', 'locationName' => 'architecture', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'imageSource' => [ 'type' => 'string', 'locationName' => 'imageSource', ],
                'osType' => [ 'type' => 'string', 'locationName' => 'osType', ],
                'platform' => [ 'type' => 'string', 'locationName' => 'platform', ],
                'progress' => [ 'type' => 'string', 'locationName' => 'progress', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
            ],
        ],
        'VmImageCollection' => [
            'type' => 'structure',
            'members' => [
                'images' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageInfo', ], ],
            ],
        ],
        'ImageType' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'imageSource' => [ 'type' => 'string', 'locationName' => 'imageSource', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'osType' => [ 'type' => 'string', 'locationName' => 'osType', ],
                'osVersion' => [ 'type' => 'string', 'locationName' => 'osVersion', ],
                'platform' => [ 'type' => 'string', 'locationName' => 'platform', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
            ],
        ],
        'VmInstanceItem' => [
            'type' => 'structure',
            'members' => [
                'vm' =>  [ 'shape' => 'VmInfoDetail', ],
            ],
        ],
        'SecurityGroup' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
            ],
        ],
        'NetAttachment' => [
            'type' => 'structure',
            'members' => [
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'deviceIndex' => [ 'type' => 'integer', 'locationName' => 'deviceIndex', ],
                'networkInterface' =>  [ 'shape' => 'NetworkInterface', ],
            ],
        ],
        'CreateVm' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'hostName' => [ 'type' => 'string', 'locationName' => 'hostName', ],
                'imageType' =>  [ 'shape' => 'ImageType', ],
                'instanceType' =>  [ 'shape' => 'InstanceType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'instanceFlavorType' => [ 'type' => 'string', 'locationName' => 'instanceFlavorType', ],
                'securityGroupId' => [ 'type' => 'string', 'locationName' => 'securityGroupId', ],
                'internetMaxBandwidthIn' => [ 'type' => 'integer', 'locationName' => 'internetMaxBandwidthIn', ],
                'internetMaxBandwidthOut' => [ 'type' => 'integer', 'locationName' => 'internetMaxBandwidthOut', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'passwordInherit' => [ 'type' => 'boolean', 'locationName' => 'passwordInherit', ],
                'userData' => [ 'type' => 'string', 'locationName' => 'userData', ],
                'keyPairName' => [ 'type' => 'string', 'locationName' => 'keyPairName', ],
                'systemDisk' =>  [ 'shape' => 'SystemDisk', ],
            ],
        ],
        'VmInfoDetail' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'hostName' => [ 'type' => 'string', 'locationName' => 'hostName', ],
                'imageType' =>  [ 'shape' => 'ImageType', ],
                'instanceType' =>  [ 'shape' => 'InstanceType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'sysDiskInfo' =>  [ 'shape' => 'SysDiskInfo', ],
                'dataDiskAttachments' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataDiskAttachment', ], ],
                'primaryNetworkInterface' =>  [ 'shape' => 'NetAttachment', ],
                'secondaryNetworkInterfaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetAttachment', ], ],
                'metadata' => [ 'type' => 'string', 'locationName' => 'metadata', ],
            ],
        ],
        'VmInstanceCollection' => [
            'type' => 'structure',
            'members' => [
                'vms' => [ 'type' => 'list', 'member' => [ 'shape' => 'VmInfo', ], ],
            ],
        ],
        'CreateVmReq' => [
            'type' => 'structure',
            'members' => [
                'vms' =>  [ 'shape' => 'CreateVm', ],
            ],
        ],
        'NetworkInterface' => [
            'type' => 'structure',
            'members' => [
                'macAddress' => [ 'type' => 'string', 'locationName' => 'macAddress', ],
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
                'sanityCheck' => [ 'type' => 'integer', 'locationName' => 'sanityCheck', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'primaryIp' =>  [ 'shape' => 'Ip', ],
                'secondaryIps' => [ 'type' => 'list', 'member' => [ 'shape' => 'Ip', ], ],
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurityGroup', ], ],
            ],
        ],
        'VmInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'hostName' => [ 'type' => 'string', 'locationName' => 'hostName', ],
                'imageType' =>  [ 'shape' => 'ImageType', ],
                'instanceType' =>  [ 'shape' => 'InstanceType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'InstanceType' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
            ],
        ],
        'Ip' => [
            'type' => 'structure',
            'members' => [
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
            ],
        ],
        'VmInstanceCreateTask' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'VmInstanceTypeCollection' => [
            'type' => 'structure',
            'members' => [
                'instanceTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceTypeInfo', ], ],
            ],
        ],
        'InstanceTypeInfo' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'gpuAmount' => [ 'type' => 'integer', 'locationName' => 'gpuAmount', ],
                'gpuSpec' => [ 'type' => 'string', 'locationName' => 'gpuSpec', ],
                'localStorageSize' => [ 'type' => 'integer', 'locationName' => 'localStorageSize', ],
                'localStorageType' => [ 'type' => 'string', 'locationName' => 'localStorageType', ],
                'localStorageAmount' => [ 'type' => 'integer', 'locationName' => 'localStorageAmount', ],
                'nicLimit' => [ 'type' => 'integer', 'locationName' => 'nicLimit', ],
            ],
        ],
        'VmKeypairCollection' => [
            'type' => 'structure',
            'members' => [
                'keypairs' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeypairInfo', ], ],
            ],
        ],
        'CreateKeypairReq' => [
            'type' => 'structure',
            'members' => [
                'keypair' =>  [ 'shape' => 'CreateKeypair', ],
            ],
        ],
        'KeypairInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'keyFingerprint' => [ 'type' => 'string', 'locationName' => 'keyFingerprint', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
            ],
        ],
        'VmKeypairCreateTask' => [
            'type' => 'structure',
            'members' => [
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceTFInfo', ], ],
            ],
        ],
        'VmKeypairItem' => [
            'type' => 'structure',
            'members' => [
                'keypair' =>  [ 'shape' => 'KeypairInfo', ],
            ],
        ],
        'CreateKeypair' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'keyFingerprint' => [ 'type' => 'string', 'locationName' => 'keyFingerprint', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'publicKey' => [ 'type' => 'string', 'locationName' => 'publicKey', ],
            ],
        ],
        'AssociateEipAddressReq' => [
            'type' => 'structure',
            'members' => [
                'associate' =>  [ 'shape' => 'AssociateEipAddress', ],
            ],
        ],
        'EipAddress' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'ipAddress' => [ 'type' => 'string', 'locationName' => 'ipAddress', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'bandwidth' => [ 'type' => 'string', 'locationName' => 'bandwidth', ],
                'allocationTime' => [ 'type' => 'string', 'locationName' => 'allocationTime', ],
            ],
        ],
        'UnassociateEipAddress' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'force' => [ 'type' => 'boolean', 'locationName' => 'force', ],
            ],
        ],
        'AllocateEipAddressReq' => [
            'type' => 'structure',
            'members' => [
                'allocate' =>  [ 'shape' => 'AllocateEipAddress', ],
            ],
        ],
        'VpcEipCollection' => [
            'type' => 'structure',
            'members' => [
                'eipAddresses' => [ 'type' => 'list', 'member' => [ 'shape' => 'EipAddress', ], ],
            ],
        ],
        'VpcEipCreateTask' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'AssociateEipAddress' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
            ],
        ],
        'UnassociateEipAddressReq' => [
            'type' => 'structure',
            'members' => [
                'unassociate' =>  [ 'shape' => 'UnassociateEipAddress', ],
            ],
        ],
        'AllocateEipAddress' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'bandwidth' => [ 'type' => 'string', 'locationName' => 'bandwidth', ],
                'provider' => [ 'type' => 'string', 'locationName' => 'provider', ],
            ],
        ],
        'VpcEipItem' => [
            'type' => 'structure',
            'members' => [
                'eipAddress' =>  [ 'shape' => 'EipAddress', ],
            ],
        ],
        'ListenerPortsAndProtocol' => [
            'type' => 'structure',
            'members' => [
                'listenerPort' => [ 'type' => 'integer', 'locationName' => 'listenerPort', ],
                'listenerProtocol' => [ 'type' => 'string', 'locationName' => 'listenerProtocol', ],
                'listenerForward' => [ 'type' => 'string', 'locationName' => 'listenerForward', ],
                'forwardPort' => [ 'type' => 'integer', 'locationName' => 'forwardPort', ],
            ],
        ],
        'CreateLoadBalancerHTTPListener' => [
            'type' => 'structure',
            'members' => [
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'listenerPort' => [ 'type' => 'integer', 'locationName' => 'listenerPort', ],
                'backendServerPort' => [ 'type' => 'integer', 'locationName' => 'backendServerPort', ],
                'vserverGroupId' => [ 'type' => 'string', 'locationName' => 'vserverGroupId', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'healthCheckConnectPort' => [ 'type' => 'integer', 'locationName' => 'healthCheckConnectPort', ],
                'healthyThreshold' => [ 'type' => 'integer', 'locationName' => 'healthyThreshold', ],
                'unhealthyThreshold' => [ 'type' => 'integer', 'locationName' => 'unhealthyThreshold', ],
                'healthCheckTimeout' => [ 'type' => 'integer', 'locationName' => 'healthCheckTimeout', ],
                'healthCheckInterval' => [ 'type' => 'integer', 'locationName' => 'healthCheckInterval', ],
                'healthCheckHttpCode' => [ 'type' => 'string', 'locationName' => 'healthCheckHttpCode', ],
            ],
        ],
        'CreateLoadBalancerHTTPListenerReq' => [
            'type' => 'structure',
            'members' => [
                'httpListener' =>  [ 'shape' => 'CreateLoadBalancerHTTPListener', ],
            ],
        ],
        'VpcNetworkInterfaceItem' => [
            'type' => 'structure',
            'members' => [
                'netInterface' =>  [ 'shape' => 'NetInterfaceInfo', ],
            ],
        ],
        'VpcNetworkInterfaceCollection' => [
            'type' => 'structure',
            'members' => [
                'netInterfaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetInterfaceInfo', ], ],
            ],
        ],
        'CreateNetInterfaceReq' => [
            'type' => 'structure',
            'members' => [
                'netInterface' =>  [ 'shape' => 'CreateNetInterface', ],
            ],
        ],
        'CreateNetInterface' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'associatedPublicIp' => [ 'type' => 'string', 'locationName' => 'associatedPublicIp', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'macAddress' => [ 'type' => 'string', 'locationName' => 'macAddress', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'securityGroupId' => [ 'type' => 'string', 'locationName' => 'securityGroupId', ],
            ],
        ],
        'DetachNetInterfaceReq' => [
            'type' => 'structure',
            'members' => [
                'detach' =>  [ 'shape' => 'DetachNetInterface', ],
            ],
        ],
        'AttachNetInterfaceReq' => [
            'type' => 'structure',
            'members' => [
                'attach' =>  [ 'shape' => 'AttachNetInterface', ],
            ],
        ],
        'DetachNetInterface' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'NetInterfaceInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'associatedPublicIp' => [ 'type' => 'string', 'locationName' => 'associatedPublicIp', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'macAddress' => [ 'type' => 'string', 'locationName' => 'macAddress', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
            ],
        ],
        'AttachNetInterface' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'VpcSecurityGroupItem' => [
            'type' => 'structure',
            'members' => [
                'securityGroup' =>  [ 'shape' => 'SecurityGroupDetail', ],
            ],
        ],
        'PermissionType' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'ipProtocol' => [ 'type' => 'string', 'locationName' => 'ipProtocol', ],
                'portRange' => [ 'type' => 'string', 'locationName' => 'portRange', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'sourceCidrIp' => [ 'type' => 'string', 'locationName' => 'sourceCidrIp', ],
                'sourceGroupId' => [ 'type' => 'string', 'locationName' => 'sourceGroupId', ],
                'sourceGroupOwnerAccount' => [ 'type' => 'string', 'locationName' => 'sourceGroupOwnerAccount', ],
                'destCidrIp' => [ 'type' => 'string', 'locationName' => 'destCidrIp', ],
                'destGroupId' => [ 'type' => 'string', 'locationName' => 'destGroupId', ],
                'destGroupOwnerAccount' => [ 'type' => 'string', 'locationName' => 'destGroupOwnerAccount', ],
                'policy' => [ 'type' => 'string', 'locationName' => 'policy', ],
                'nicType' => [ 'type' => 'string', 'locationName' => 'nicType', ],
                'priority' => [ 'type' => 'string', 'locationName' => 'priority', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
            ],
        ],
        'CreateSecurityGroup' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'VpcSecurityGroupCreateTask' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'CreateSecurityGroupReq' => [
            'type' => 'structure',
            'members' => [
                'securityGroup' =>  [ 'shape' => 'CreateSecurityGroup', ],
            ],
        ],
        'SecurityGroupInfo' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'VpcSecurityGroupCollection' => [
            'type' => 'structure',
            'members' => [
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurityGroupInfo', ], ],
            ],
        ],
        'SecurityGroupDetail' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'permissions' => [ 'type' => 'list', 'member' => [ 'shape' => 'PermissionType', ], ],
            ],
        ],
        'VpcSlbCreateTask' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'SlbInfoDetail' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'ipAddress' => [ 'type' => 'string', 'locationName' => 'ipAddress', ],
                'addressType' => [ 'type' => 'string', 'locationName' => 'addressType', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'vpc' => [ 'type' => 'string', 'locationName' => 'vpc', ],
                'networkType' => [ 'type' => 'string', 'locationName' => 'networkType', ],
                'masterAz' => [ 'type' => 'string', 'locationName' => 'masterAz', ],
                'slaveAz' => [ 'type' => 'string', 'locationName' => 'slaveAz', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'listenerPortsAndProtocol' => [ 'type' => 'list', 'member' => [ 'shape' => 'ListenerPortsAndProtocol', ], ],
                'backendServers' => [ 'type' => 'list', 'member' => [ 'shape' => 'BackendServer2', ], ],
                'loadBalancerSpec' => [ 'type' => 'string', 'locationName' => 'loadBalancerSpec', ],
            ],
        ],
        'VpcSlbItem' => [
            'type' => 'structure',
            'members' => [
                'slb' =>  [ 'shape' => 'SlbInfoDetail', ],
            ],
        ],
        'BackendServer2' => [
            'type' => 'structure',
            'members' => [
                'serverId' => [ 'type' => 'string', 'locationName' => 'serverId', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'CreateSlb' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'ipAddress' => [ 'type' => 'string', 'locationName' => 'ipAddress', ],
                'addressType' => [ 'type' => 'string', 'locationName' => 'addressType', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'vpc' => [ 'type' => 'string', 'locationName' => 'vpc', ],
                'networkType' => [ 'type' => 'string', 'locationName' => 'networkType', ],
                'masterAz' => [ 'type' => 'string', 'locationName' => 'masterAz', ],
                'slaveAz' => [ 'type' => 'string', 'locationName' => 'slaveAz', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'loadBalancerSpec' => [ 'type' => 'string', 'locationName' => 'loadBalancerSpec', ],
            ],
        ],
        'CreateSlbReq' => [
            'type' => 'structure',
            'members' => [
                'slb' =>  [ 'shape' => 'CreateSlb', ],
            ],
        ],
        'VpcSlbCollection' => [
            'type' => 'structure',
            'members' => [
                'slbs' => [ 'type' => 'list', 'member' => [ 'shape' => 'SlbInfo', ], ],
            ],
        ],
        'BackendServer' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'serverId' => [ 'type' => 'string', 'locationName' => 'serverId', ],
                'serverHealthStatus' => [ 'type' => 'string', 'locationName' => 'serverHealthStatus', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'SlbInfo' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'ipAddress' => [ 'type' => 'string', 'locationName' => 'ipAddress', ],
                'addressType' => [ 'type' => 'string', 'locationName' => 'addressType', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'vpc' => [ 'type' => 'string', 'locationName' => 'vpc', ],
                'networkType' => [ 'type' => 'string', 'locationName' => 'networkType', ],
                'masterAz' => [ 'type' => 'string', 'locationName' => 'masterAz', ],
                'slaveAz' => [ 'type' => 'string', 'locationName' => 'slaveAz', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'CreateSubnetReq' => [
            'type' => 'structure',
            'members' => [
                'subnet' =>  [ 'shape' => 'CreateSubnet', ],
            ],
        ],
        'VpcSubnetItem' => [
            'type' => 'structure',
            'members' => [
                'subnet' =>  [ 'shape' => 'SubnetDesInfo', ],
            ],
        ],
        'SubnetDesInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'cidrBlock' => [ 'type' => 'string', 'locationName' => 'cidrBlock', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
            ],
        ],
        'CreateSubnet' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'cidrBlock' => [ 'type' => 'string', 'locationName' => 'cidrBlock', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
            ],
        ],
        'SubnetInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetName' => [ 'type' => 'string', 'locationName' => 'subnetName', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'availableIpCount' => [ 'type' => 'integer', 'locationName' => 'availableIpCount', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'endIp' => [ 'type' => 'string', 'locationName' => 'endIp', ],
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
                'startIp' => [ 'type' => 'string', 'locationName' => 'startIp', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
            ],
        ],
        'VpcSubnetCollection' => [
            'type' => 'structure',
            'members' => [
                'subnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubnetDesInfo', ], ],
            ],
        ],
        'VpcItem' => [
            'type' => 'structure',
            'members' => [
                'vpc' =>  [ 'shape' => 'VpcInfoDetail', ],
            ],
        ],
        'VpcInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
            ],
        ],
        'VpcInfoDetail' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'subnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubnetInfo', ], ],
                'routeTableIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'VpcCollection' => [
            'type' => 'structure',
            'members' => [
                'vpcs' => [ 'type' => 'list', 'member' => [ 'shape' => 'VpcInfo', ], ],
            ],
        ],
        'CreateVpc' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'cidrBlock' => [ 'type' => 'string', 'locationName' => 'cidrBlock', ],
                'userCidr' => [ 'type' => 'string', 'locationName' => 'userCidr', ],
            ],
        ],
        'VpcCreateTask' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'CreateVpcReq' => [
            'type' => 'structure',
            'members' => [
                'vpc' =>  [ 'shape' => 'CreateVpc', ],
            ],
        ],
        'CreateVserverGroup' => [
            'type' => 'structure',
            'members' => [
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'vserverGroupName' => [ 'type' => 'string', 'locationName' => 'vserverGroupName', ],
                'backendServers' => [ 'type' => 'list', 'member' => [ 'shape' => 'BackendServer', ], ],
            ],
        ],
        'VpcVServerGroupCollection' => [
            'type' => 'structure',
            'members' => [
                'vserverGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'VserverGroupInfo', ], ],
            ],
        ],
        'CreateVserverGroupReq' => [
            'type' => 'structure',
            'members' => [
                'vserverGroup' =>  [ 'shape' => 'CreateVserverGroup', ],
            ],
        ],
        'VserverGroupInfo' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'vserverGroupId' => [ 'type' => 'string', 'locationName' => 'vserverGroupId', ],
                'vserverGroupName' => [ 'type' => 'string', 'locationName' => 'vserverGroupName', ],
            ],
        ],
        'RegistCloudInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' =>  [ 'shape' => 'CreateCloudInfoReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetCloudInfoByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'cloud' =>  [ 'shape' => 'CloudInfo', ],
            ],
        ],
        'UnregistCloudInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RegistCloudInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'cloud' =>  [ 'shape' => 'CloudInfo', ],
            ],
        ],
        'GetCloudInfosResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetCloudInfosResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RegistCloudInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RegistCloudInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetCloudInfoByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetCloudInfoByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetCloudInfosResultShape' => [
            'type' => 'structure',
            'members' => [
                'clouds' => [ 'type' => 'list', 'member' => [ 'shape' => 'CloudInfo', ], ],
            ],
        ],
        'GetCloudInfosRequestShape' => [
            'type' => 'structure',
            'members' => [
                'driver' => [ 'type' => 'string', 'locationName' => 'driver', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetCloudInfoByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cloudId' => [ 'type' => 'string', 'locationName' => 'cloudId', ],
            ],
        ],
        'UnregistCloudInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cloudId' => [ 'type' => 'string', 'locationName' => 'cloudId', ],
            ],
        ],
        'UnregistCloudInfoResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RemoveDiskByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetDiskByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDiskByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AttachDiskToVmInstanceByDiskIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' =>  [ 'shape' => 'AttachDataDiskReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'CreateDiskResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'CreateDiskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' =>  [ 'shape' => 'CreateDataDiskReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetDisksResultShape' => [
            'type' => 'structure',
            'members' => [
                'disks' => [ 'type' => 'list', 'member' => [ 'shape' => 'CloudDataDisk', ], ],
            ],
        ],
        'DetachDiskToVmInstanceByDiskIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDisksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDisksResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AttachDiskToVmInstanceByDiskIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AttachDiskToVmInstanceByDiskIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DetachDiskToVmInstanceByDiskIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetDisksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AttachDiskToVmInstanceByDiskIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'DetachDiskToVmInstanceByDiskIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' =>  [ 'shape' => 'DetachDataDiskReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetDiskByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'CreateDiskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateDiskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RemoveDiskByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDiskByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'disk' =>  [ 'shape' => 'CloudDataDisk', ],
            ],
        ],
        'RemoveDiskByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetTaskInfoHistoryByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTaskInfoHistoryByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTaskInfoByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'task' => [ 'type' => 'string', 'locationName' => 'task', ],
            ],
        ],
        'GetTaskInfoHistoryByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskInfo', ], ],
            ],
        ],
        'GetTaskInfoByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTaskInfoByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTaskInfoByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'TaskInfo', ],
            ],
        ],
        'GetTaskInfoHistoryByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'task' => [ 'type' => 'string', 'locationName' => 'task', ],
            ],
        ],
        'GetVmImagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'images' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageInfo', ], ],
            ],
        ],
        'GetVmImagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVmImagesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVmImagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageSource' => [ 'type' => 'string', 'locationName' => 'imageSource', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'RebootVmInstanceByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetVmInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'vms' => [ 'type' => 'list', 'member' => [ 'shape' => 'VmInfo', ], ],
            ],
        ],
        'GetVmInstancesByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DeleteVmInstanceByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopVmInstanceByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateVmInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'GetVmInstancesByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVmInstancesByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteVmInstanceByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'StopVmInstanceByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetVmInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StopVmInstanceByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVmInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVmInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartVmInstanceByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RebootVmInstanceByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RebootVmInstanceByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'CreateVmInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVmInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVmInstancesByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'vm' =>  [ 'shape' => 'VmInfoDetail', ],
            ],
        ],
        'DeleteVmInstanceByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVmInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' =>  [ 'shape' => 'CreateVmReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StartVmInstanceByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'StartVmInstanceByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetVmInstanceTypesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceTypeInfo', ], ],
            ],
        ],
        'GetVmInstanceTypesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVmInstanceTypesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVmInstanceTypesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetVmKeypairsByNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVmKeypairsByNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVmKeypairsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetVmKeypairsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVmKeypairsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVmKeypairRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' =>  [ 'shape' => 'CreateKeypairReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetVmKeypairsByNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'GetVmKeypairsByNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'keypair' =>  [ 'shape' => 'KeypairInfo', ],
            ],
        ],
        'DeleteVmKeypairByNameResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteVmKeypairByNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVmKeypairResultShape' => [
            'type' => 'structure',
            'members' => [
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceTFInfo', ], ],
            ],
        ],
        'GetVmKeypairsResultShape' => [
            'type' => 'structure',
            'members' => [
                'keypairs' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeypairInfo', ], ],
            ],
        ],
        'DeleteVmKeypairByNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'CreateVmKeypairResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVmKeypairResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteVpcEipByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateVpcEipRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' =>  [ 'shape' => 'AllocateEipAddressReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AssociateVpcEipByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' =>  [ 'shape' => 'AssociateEipAddressReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DisassociateVpcEipByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' =>  [ 'shape' => 'UnassociateEipAddressReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'AssociateVpcEipByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'CreateVpcEipResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'DeleteVpcEipByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcEipsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcEipsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcEipsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetVpcEipByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcEipByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcEipsResultShape' => [
            'type' => 'structure',
            'members' => [
                'eipAddresses' => [ 'type' => 'list', 'member' => [ 'shape' => 'EipAddress', ], ],
            ],
        ],
        'CreateVpcEipResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVpcEipResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssociateVpcEipByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AssociateVpcEipByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcEipByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DisassociateVpcEipByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetVpcEipByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'eipAddress' =>  [ 'shape' => 'EipAddress', ],
            ],
        ],
        'DeleteVpcEipByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DisassociateVpcEipByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVpcLBHttpListenerResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'CreateVpcLBHttpListenerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' =>  [ 'shape' => 'CreateLoadBalancerHTTPListenerReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateVpcLBHttpListenerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVpcLBHttpListenerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVpcNetworkInterfaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVpcNetworkInterfaceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteVpcNetworkInterfaceByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcNetworkInterfaceByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcNetworkInterfaceByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AttachVpcNetworkInterfaceByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'AttachVpcNetworkInterfaceByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' =>  [ 'shape' => 'AttachNetInterfaceReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'CreateVpcNetworkInterfaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' =>  [ 'shape' => 'CreateNetInterfaceReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AttachVpcNetworkInterfaceByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AttachVpcNetworkInterfaceByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcNetworkInterfacesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteVpcNetworkInterfaceByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetVpcNetworkInterfaceByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'netInterface' =>  [ 'shape' => 'NetInterfaceInfo', ],
            ],
        ],
        'DetachVpcNetworkInterfaceByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetVpcNetworkInterfacesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcNetworkInterfacesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DetachVpcNetworkInterfaceByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVpcNetworkInterfaceResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'GetVpcNetworkInterfaceByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetVpcNetworkInterfacesResultShape' => [
            'type' => 'structure',
            'members' => [
                'netInterfaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetInterfaceInfo', ], ],
            ],
        ],
        'DetachVpcNetworkInterfaceByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' =>  [ 'shape' => 'DetachNetInterfaceReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DeleteVpcNetworkInterfaceByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetVpcSecurityGroupByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetVpcSecurityGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetVpcSecurityGroupByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'securityGroup' =>  [ 'shape' => 'SecurityGroupDetail', ],
            ],
        ],
        'DeleteVpcSecurityGroupByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateVpcSecurityGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVpcSecurityGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteVpcSecurityGroupByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVpcSecurityGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' =>  [ 'shape' => 'CreateSecurityGroupReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetVpcSecurityGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcSecurityGroupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcSecurityGroupByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcSecurityGroupByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcSecurityGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurityGroupInfo', ], ],
            ],
        ],
        'CreateVpcSecurityGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'DeleteVpcSecurityGroupByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DeleteVpcSlbByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVpcSlbRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' =>  [ 'shape' => 'CreateSlbReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetVpcSlbByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'slb' =>  [ 'shape' => 'SlbInfoDetail', ],
            ],
        ],
        'CreateVpcSlbResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVpcSlbResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcSlbByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DeleteVpcSlbByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetVpcSlbsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcSlbsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcSlbsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateVpcSlbResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'GetVpcSlbsResultShape' => [
            'type' => 'structure',
            'members' => [
                'slbs' => [ 'type' => 'list', 'member' => [ 'shape' => 'SlbInfo', ], ],
            ],
        ],
        'GetVpcSlbByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcSlbByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteVpcSlbByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetVpcSubnetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'subnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubnetDesInfo', ], ],
            ],
        ],
        'CreateVpcSubnetResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'GetVpcSubnetByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'subnet' =>  [ 'shape' => 'SubnetDesInfo', ],
            ],
        ],
        'CreateVpcSubnetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' =>  [ 'shape' => 'CreateSubnetReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateVpcSubnetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVpcSubnetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcSubnetByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DeleteVpcSubnetByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteVpcSubnetByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetVpcSubnetByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcSubnetByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcSubnetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcSubnetsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcSubnetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteVpcSubnetByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVpcResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVpcResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcsResultShape' => [
            'type' => 'structure',
            'members' => [
                'vpcs' => [ 'type' => 'list', 'member' => [ 'shape' => 'VpcInfo', ], ],
            ],
        ],
        'GetVpcsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetVpcsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteVpcByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetVpcByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'CreateVpcRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' =>  [ 'shape' => 'CreateVpcReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateVpcResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'DeleteVpcByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'vpc' =>  [ 'shape' => 'VpcInfoDetail', ],
            ],
        ],
        'DeleteVpcByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetVpcVServerGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcVServerGroupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcVServerGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'slbid' => [ 'type' => 'string', 'locationName' => 'slbid', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateVpcVServerGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'CreateVpcVServerGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' =>  [ 'shape' => 'CreateVserverGroupReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetVpcVServerGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'vserverGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'VserverGroupInfo', ], ],
            ],
        ],
        'CreateVpcVServerGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVpcVServerGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
