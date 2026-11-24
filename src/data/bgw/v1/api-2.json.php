<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'bgw',
        'protocol' => 'json',
//        'serviceFullName' => 'bgw',
//        'serviceId' => 'bgw',
    ],
    'operations' => [
        'DescribeBgws' => [
            'name' => 'DescribeBgws',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/bgws/',
            ],
            'input' => [ 'shape' => 'DescribeBgwsRequestShape', ],
            'output' => [ 'shape' => 'DescribeBgwsResponseShape', ],
        ],
        'DescribeBgw' => [
            'name' => 'DescribeBgw',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/bgws/{bgwId}',
            ],
            'input' => [ 'shape' => 'DescribeBgwRequestShape', ],
            'output' => [ 'shape' => 'DescribeBgwResponseShape', ],
        ],
        'DescribeBgwRoutes' => [
            'name' => 'DescribeBgwRoutes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/bgws/{bgwId}/bgwRoutes/',
            ],
            'input' => [ 'shape' => 'DescribeBgwRoutesRequestShape', ],
            'output' => [ 'shape' => 'DescribeBgwRoutesResponseShape', ],
        ],
        'DescribeopJdBgwVifConfs' => [
            'name' => 'DescribeopJdBgwVifConfs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/opJdBgwVifConfs/',
            ],
            'input' => [ 'shape' => 'DescribeopJdBgwVifConfsRequestShape', ],
            'output' => [ 'shape' => 'DescribeopJdBgwVifConfsResponseShape', ],
        ],
        'DescribePrivateVirtualInterfaces' => [
            'name' => 'DescribePrivateVirtualInterfaces',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/privateVifs/',
            ],
            'input' => [ 'shape' => 'DescribePrivateVirtualInterfacesRequestShape', ],
            'output' => [ 'shape' => 'DescribePrivateVirtualInterfacesResponseShape', ],
        ],
        'DescribePrivateVirtualInterface' => [
            'name' => 'DescribePrivateVirtualInterface',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/privateVifs/{privateVifId}',
            ],
            'input' => [ 'shape' => 'DescribePrivateVirtualInterfaceRequestShape', ],
            'output' => [ 'shape' => 'DescribePrivateVirtualInterfaceResponseShape', ],
        ],
        'DescribeVpcAttachment' => [
            'name' => 'DescribeVpcAttachment',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpcAttachments/{vpcAttachmentId}',
            ],
            'input' => [ 'shape' => 'DescribeVpcAttachmentRequestShape', ],
            'output' => [ 'shape' => 'DescribeVpcAttachmentResponseShape', ],
        ],
        'DescribeVpcAttachments' => [
            'name' => 'DescribeVpcAttachments',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpcAttachments',
            ],
            'input' => [ 'shape' => 'DescribeVpcAttachmentsRequestShape', ],
            'output' => [ 'shape' => 'DescribeVpcAttachmentsResponseShape', ],
        ],
        'ModifyAdminStatus' => [
            'name' => 'ModifyAdminStatus',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vpnTunnels/{vpnTunnelId}:adminStatus',
            ],
            'input' => [ 'shape' => 'ModifyAdminStatusRequestShape', ],
            'output' => [ 'shape' => 'ModifyAdminStatusResponseShape', ],
        ],
        'DescribeConnections' => [
            'name' => 'DescribeConnections',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/connections/',
            ],
            'input' => [ 'shape' => 'DescribeConnectionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeConnectionsResponseShape', ],
        ],
        'DescribeConnection' => [
            'name' => 'DescribeConnection',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/connections/{connectionId}',
            ],
            'input' => [ 'shape' => 'DescribeConnectionRequestShape', ],
            'output' => [ 'shape' => 'DescribeConnectionResponseShape', ],
        ],
    ],
    'shapes' => [
        'AllocateJdBgwVifConfSpec' => [
            'type' => 'structure',
            'members' => [
                'jdBgwVifConfId' => [ 'type' => 'string', 'locationName' => 'jdBgwVifConfId', ],
                'bgwVip' => [ 'type' => 'string', 'locationName' => 'bgwVip', ],
            ],
        ],
        'AuditConnectionSpec' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'rejectedReason' => [ 'type' => 'string', 'locationName' => 'rejectedReason', ],
                'jdConfItem' =>  [ 'shape' => 'AllocateJdBgwVifConfSpec', ],
            ],
        ],
        'AutoRenewSpec' => [
            'type' => 'structure',
            'members' => [
                'autoRenewStatus' => [ 'type' => 'string', 'locationName' => 'autoRenewStatus', ],
                'renewTimeUnit' => [ 'type' => 'string', 'locationName' => 'renewTimeUnit', ],
                'renewTimeSpan' => [ 'type' => 'integer', 'locationName' => 'renewTimeSpan', ],
            ],
        ],
        'Bfd' => [
            'type' => 'structure',
            'members' => [
                'minTxInterval' => [ 'type' => 'integer', 'locationName' => 'minTxInterval', ],
                'minRxInterval' => [ 'type' => 'integer', 'locationName' => 'minRxInterval', ],
                'detectMultiplier' => [ 'type' => 'integer', 'locationName' => 'detectMultiplier', ],
            ],
        ],
        'BfdSpec' => [
            'type' => 'structure',
            'members' => [
                'minTxInterval' => [ 'type' => 'integer', 'locationName' => 'minTxInterval', ],
                'minRxInterval' => [ 'type' => 'integer', 'locationName' => 'minRxInterval', ],
                'detectMultiplier' => [ 'type' => 'integer', 'locationName' => 'detectMultiplier', ],
            ],
        ],
        'Bgp' => [
            'type' => 'structure',
            'members' => [
                'addressFamily' => [ 'type' => 'string', 'locationName' => 'addressFamily', ],
                'customerAsn' => [ 'type' => 'integer', 'locationName' => 'customerAsn', ],
                'jdCloudAsn' => [ 'type' => 'integer', 'locationName' => 'jdCloudAsn', ],
                'authKey' => [ 'type' => 'string', 'locationName' => 'authKey', ],
            ],
        ],
        'BgpPeer' => [
            'type' => 'structure',
            'members' => [
                'bgpPeerId' => [ 'type' => 'string', 'locationName' => 'bgpPeerId', ],
                'addressFamily' => [ 'type' => 'string', 'locationName' => 'addressFamily', ],
                'customerIp' => [ 'type' => 'string', 'locationName' => 'customerIp', ],
                'jdCloudIp' => [ 'type' => 'string', 'locationName' => 'jdCloudIp', ],
                'customerAsn' => [ 'type' => 'integer', 'locationName' => 'customerAsn', ],
                'jdCloudAsn' => [ 'type' => 'integer', 'locationName' => 'jdCloudAsn', ],
                'authKey' => [ 'type' => 'string', 'locationName' => 'authKey', ],
                'privateVifId' => [ 'type' => 'string', 'locationName' => 'privateVifId', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'BgpPeerSpec' => [
            'type' => 'structure',
            'members' => [
                'addressFamily' => [ 'type' => 'string', 'locationName' => 'addressFamily', ],
                'customerIp' => [ 'type' => 'string', 'locationName' => 'customerIp', ],
                'jdCloudIp' => [ 'type' => 'string', 'locationName' => 'jdCloudIp', ],
                'customerAsn' => [ 'type' => 'integer', 'locationName' => 'customerAsn', ],
                'authKey' => [ 'type' => 'string', 'locationName' => 'authKey', ],
            ],
        ],
        'BgpSpec' => [
            'type' => 'structure',
            'members' => [
                'addressFamily' => [ 'type' => 'string', 'locationName' => 'addressFamily', ],
                'customerAsn' => [ 'type' => 'integer', 'locationName' => 'customerAsn', ],
                'authKey' => [ 'type' => 'string', 'locationName' => 'authKey', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Bgw' => [
            'type' => 'structure',
            'members' => [
                'bgwId' => [ 'type' => 'string', 'locationName' => 'bgwId', ],
                'bgwName' => [ 'type' => 'string', 'locationName' => 'bgwName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'vifIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcAttachmentIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpnConnectionIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'azType' => [ 'type' => 'string', 'locationName' => 'azType', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
            ],
        ],
        'BgwRoute' => [
            'type' => 'structure',
            'members' => [
                'bgwRouteId' => [ 'type' => 'string', 'locationName' => 'bgwRouteId', ],
                'bgwId' => [ 'type' => 'string', 'locationName' => 'bgwId', ],
                'bgwRouteDestination' => [ 'type' => 'string', 'locationName' => 'bgwRouteDestination', ],
                'bgwRouteNexthop' => [ 'type' => 'string', 'locationName' => 'bgwRouteNexthop', ],
                'origin' => [ 'type' => 'string', 'locationName' => 'origin', ],
                'bgwRoutePriority' => [ 'type' => 'integer', 'locationName' => 'bgwRoutePriority', ],
                'bgwRouteNextHopType' => [ 'type' => 'string', 'locationName' => 'bgwRouteNextHopType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'BgwRouteSpec' => [
            'type' => 'structure',
            'members' => [
                'bgwRouteDestination' => [ 'type' => 'string', 'locationName' => 'bgwRouteDestination', ],
                'bgwNexthopType' => [ 'type' => 'string', 'locationName' => 'bgwNexthopType', ],
                'bgwRouteNexthop' => [ 'type' => 'string', 'locationName' => 'bgwRouteNexthop', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'BgwSpec' => [
            'type' => 'structure',
            'members' => [
                'bgwName' => [ 'type' => 'string', 'locationName' => 'bgwName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'azType' => [ 'type' => 'string', 'locationName' => 'azType', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'resourceTag' => [ 'type' => 'string', 'locationName' => 'resourceTag', ],
            ],
        ],
        'ConfirmConnectionSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeTimeUnit' => [ 'type' => 'string', 'locationName' => 'chargeTimeUnit', ],
                'chargeTimeSpan' => [ 'type' => 'integer', 'locationName' => 'chargeTimeSpan', ],
                'autoPay' => [ 'type' => 'boolean', 'locationName' => 'autoPay', ],
                'autoRenewSpec' =>  [ 'shape' => 'AutoRenewSpec', ],
            ],
        ],
        'Monitor' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'adminStatus' => [ 'type' => 'string', 'locationName' => 'adminStatus', ],
                'samplingPeriod' => [ 'type' => 'integer', 'locationName' => 'samplingPeriod', ],
            ],
        ],
        'ConnectionLocation' => [
            'type' => 'structure',
            'members' => [
                'locationId' => [ 'type' => 'string', 'locationName' => 'locationId', ],
                'locationName' => [ 'type' => 'string', 'locationName' => 'locationName', ],
                'locationType' => [ 'type' => 'string', 'locationName' => 'locationType', ],
                'locationCode' => [ 'type' => 'string', 'locationName' => 'locationCode', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'locationPortSpec' =>  [ 'shape' => 'LocationPortSpec', ],
                'locationISP' =>  [ 'shape' => 'LocationISP', ],
            ],
        ],
        'LocationPortSpec' => [
            'type' => 'structure',
            'members' => [
                'locationPortSpecId' => [ 'type' => 'string', 'locationName' => 'locationPortSpecId', ],
                'portSpecName' => [ 'type' => 'string', 'locationName' => 'portSpecName', ],
                'portSpecCode' => [ 'type' => 'string', 'locationName' => 'portSpecCode', ],
                'locationCode' => [ 'type' => 'string', 'locationName' => 'locationCode', ],
                'portSpecType' => [ 'type' => 'string', 'locationName' => 'portSpecType', ],
                'bandwidthGbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthGbps', ],
            ],
        ],
        'Connection' => [
            'type' => 'structure',
            'members' => [
                'connectionId' => [ 'type' => 'string', 'locationName' => 'connectionId', ],
                'connectionName' => [ 'type' => 'string', 'locationName' => 'connectionName', ],
                'location' =>  [ 'shape' => 'ConnectionLocation', ],
                'partner' =>  [ 'shape' => 'Partner', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
                'vifIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'connectionStatus' => [ 'type' => 'string', 'locationName' => 'connectionStatus', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'idcAddress' => [ 'type' => 'string', 'locationName' => 'idcAddress', ],
                'contactName' => [ 'type' => 'string', 'locationName' => 'contactName', ],
                'phoneNumber' => [ 'type' => 'string', 'locationName' => 'phoneNumber', ],
                'rejectedReason' => [ 'type' => 'string', 'locationName' => 'rejectedReason', ],
                'resourceIdInitial' => [ 'type' => 'string', 'locationName' => 'resourceIdInitial', ],
                'resourceIdPTenancy' => [ 'type' => 'string', 'locationName' => 'resourceIdPTenancy', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'monitor' =>  [ 'shape' => 'Monitor', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
            ],
        ],
        'Partner' => [
            'type' => 'structure',
            'members' => [
                'partnerId' => [ 'type' => 'string', 'locationName' => 'partnerId', ],
                'partnerName' => [ 'type' => 'string', 'locationName' => 'partnerName', ],
                'partnerCode' => [ 'type' => 'string', 'locationName' => 'partnerCode', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'phoneNumber' => [ 'type' => 'string', 'locationName' => 'phoneNumber', ],
                'mailbox' => [ 'type' => 'string', 'locationName' => 'mailbox', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
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
        'LocationISP' => [
            'type' => 'structure',
            'members' => [
                'locationISPId' => [ 'type' => 'string', 'locationName' => 'locationISPId', ],
                'ispName' => [ 'type' => 'string', 'locationName' => 'ispName', ],
                'locationCode' => [ 'type' => 'string', 'locationName' => 'locationCode', ],
                'ispCode' => [ 'type' => 'string', 'locationName' => 'ispCode', ],
            ],
        ],
        'ConnectionSpec' => [
            'type' => 'structure',
            'members' => [
                'connectionName' => [ 'type' => 'string', 'locationName' => 'connectionName', ],
                'partnerCode' => [ 'type' => 'string', 'locationName' => 'partnerCode', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'idcAddress' => [ 'type' => 'string', 'locationName' => 'idcAddress', ],
                'contactName' => [ 'type' => 'string', 'locationName' => 'contactName', ],
                'phoneNumber' => [ 'type' => 'string', 'locationName' => 'phoneNumber', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'autoPay' => [ 'type' => 'boolean', 'locationName' => 'autoPay', ],
                'location' =>  [ 'shape' => 'LocationSpec', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
            ],
        ],
        'LocationSpec' => [
            'type' => 'structure',
            'members' => [
                'locationCode' => [ 'type' => 'string', 'locationName' => 'locationCode', ],
                'locationPortSpecCode' => [ 'type' => 'string', 'locationName' => 'locationPortSpecCode', ],
                'locationISPCode' => [ 'type' => 'string', 'locationName' => 'locationISPCode', ],
            ],
        ],
        'CreatePrivateVifSpec' => [
            'type' => 'structure',
            'members' => [
                'privateVifName' => [ 'type' => 'string', 'locationName' => 'privateVifName', ],
                'connectionId' => [ 'type' => 'string', 'locationName' => 'connectionId', ],
                'privateVifOwner' => [ 'type' => 'string', 'locationName' => 'privateVifOwner', ],
                'bgwId' => [ 'type' => 'string', 'locationName' => 'bgwId', ],
                'vlan' => [ 'type' => 'integer', 'locationName' => 'vlan', ],
                'bgpPeers' => [ 'type' => 'list', 'member' => [ 'shape' => 'BgpPeerSpec', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'enableBgp' => [ 'type' => 'boolean', 'locationName' => 'enableBgp', ],
                'peerIps' => [ 'type' => 'list', 'member' => [ 'shape' => 'PeerIpsSpec', ], ],
                'bgpSpec' =>  [ 'shape' => 'BgpSpec', ],
                'healthCheck' =>  [ 'shape' => 'HealthCheckSpec', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
            ],
        ],
        'NqaSpec' => [
            'type' => 'structure',
            'members' => [
                'txInterval' => [ 'type' => 'integer', 'locationName' => 'txInterval', ],
                'thresholdCount' => [ 'type' => 'integer', 'locationName' => 'thresholdCount', ],
                'responseTimeout' => [ 'type' => 'integer', 'locationName' => 'responseTimeout', ],
            ],
        ],
        'PeerIpsSpec' => [
            'type' => 'structure',
            'members' => [
                'customerIp' => [ 'type' => 'string', 'locationName' => 'customerIp', ],
                'jdCloudIp' => [ 'type' => 'string', 'locationName' => 'jdCloudIp', ],
            ],
        ],
        'HealthCheckSpec' => [
            'type' => 'structure',
            'members' => [
                'healthCheckType' => [ 'type' => 'string', 'locationName' => 'healthCheckType', ],
                'nqaInfo' =>  [ 'shape' => 'NqaSpec', ],
                'bfdInfo' =>  [ 'shape' => 'BfdSpec', ],
            ],
        ],
        'CreateVpnTunnelsSpec' => [
            'type' => 'structure',
            'members' => [
                'vpnConnectionId' => [ 'type' => 'string', 'locationName' => 'vpnConnectionId', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
                'vpnTunnelSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'VpnTunnelBatchSpec', ], ],
            ],
        ],
        'VpnTunnelBatchSpec' => [
            'type' => 'structure',
            'members' => [
                'vpnTunnelName' => [ 'type' => 'string', 'locationName' => 'vpnTunnelName', ],
                'cloudPublicIp' => [ 'type' => 'string', 'locationName' => 'cloudPublicIp', ],
                'customerIp' => [ 'type' => 'string', 'locationName' => 'customerIp', ],
                'psk' => [ 'type' => 'string', 'locationName' => 'psk', ],
                'tunnelIp' => [ 'type' => 'string', 'locationName' => 'tunnelIp', ],
                'localTunnelIp' => [ 'type' => 'string', 'locationName' => 'localTunnelIp', ],
                'ikeVersion' => [ 'type' => 'string', 'locationName' => 'ikeVersion', ],
                'ikeMode' => [ 'type' => 'string', 'locationName' => 'ikeMode', ],
                'ikeKeyExchange' => [ 'type' => 'string', 'locationName' => 'ikeKeyExchange', ],
                'ikeCipher' => [ 'type' => 'string', 'locationName' => 'ikeCipher', ],
                'ikeAuth' => [ 'type' => 'string', 'locationName' => 'ikeAuth', ],
                'ikeDpdSec' => [ 'type' => 'integer', 'locationName' => 'ikeDpdSec', ],
                'ikeSaLifeSec' => [ 'type' => 'integer', 'locationName' => 'ikeSaLifeSec', ],
                'ipsecCipher' => [ 'type' => 'string', 'locationName' => 'ipsecCipher', ],
                'ipsecAuth' => [ 'type' => 'string', 'locationName' => 'ipsecAuth', ],
                'ipsecKeyExchange' => [ 'type' => 'string', 'locationName' => 'ipsecKeyExchange', ],
                'ipsecSaLifeSec' => [ 'type' => 'integer', 'locationName' => 'ipsecSaLifeSec', ],
                'ipsecSaLifepkt' => [ 'type' => 'long', 'locationName' => 'ipsecSaLifepkt', ],
                'ipsecSaLifebyte' => [ 'type' => 'long', 'locationName' => 'ipsecSaLifebyte', ],
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
            ],
        ],
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
                'autoChangeChargeMode' => [ 'type' => 'boolean', 'locationName' => 'autoChangeChargeMode', ],
                'autoChangeChargeModeDate' => [ 'type' => 'string', 'locationName' => 'autoChangeChargeModeDate', ],
                'buyScenario' => [ 'type' => 'string', 'locationName' => 'buyScenario', ],
            ],
        ],
        'CustomerGateway' => [
            'type' => 'structure',
            'members' => [
                'customerGatewayId' => [ 'type' => 'string', 'locationName' => 'customerGatewayId', ],
                'customerGatewayName' => [ 'type' => 'string', 'locationName' => 'customerGatewayName', ],
                'customerIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'bgpAsn' => [ 'type' => 'integer', 'locationName' => 'bgpAsn', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'updatedTime' => [ 'type' => 'string', 'locationName' => 'updatedTime', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
            ],
        ],
        'ModifyCustomerGatewaySpec' => [
            'type' => 'structure',
            'members' => [
                'customerGatewayName' => [ 'type' => 'string', 'locationName' => 'customerGatewayName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'customerIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CustomerGatewaySpec' => [
            'type' => 'structure',
            'members' => [
                'customerGatewayName' => [ 'type' => 'string', 'locationName' => 'customerGatewayName', ],
                'customerIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'bgpAsn' => [ 'type' => 'integer', 'locationName' => 'bgpAsn', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
            ],
        ],
        'HealthCheck' => [
            'type' => 'structure',
            'members' => [
                'healthCheckType' => [ 'type' => 'string', 'locationName' => 'healthCheckType', ],
                'nqaInfo' =>  [ 'shape' => 'Nqa', ],
                'bfdInfo' =>  [ 'shape' => 'Bfd', ],
            ],
        ],
        'Nqa' => [
            'type' => 'structure',
            'members' => [
                'txInterval' => [ 'type' => 'integer', 'locationName' => 'txInterval', ],
                'thresholdCount' => [ 'type' => 'integer', 'locationName' => 'thresholdCount', ],
                'responseTimeout' => [ 'type' => 'integer', 'locationName' => 'responseTimeout', ],
            ],
        ],
        'JdBgwVifConf' => [
            'type' => 'structure',
            'members' => [
                'jdBgwVifConfId' => [ 'type' => 'string', 'locationName' => 'jdBgwVifConfId', ],
                'partnerID' => [ 'type' => 'string', 'locationName' => 'partnerID', ],
                'locationCode' => [ 'type' => 'string', 'locationName' => 'locationCode', ],
                'interconnectID' => [ 'type' => 'string', 'locationName' => 'interconnectID', ],
                'outerconnectID' => [ 'type' => 'string', 'locationName' => 'outerconnectID', ],
                'stag' => [ 'type' => 'integer', 'locationName' => 'stag', ],
                'ctag' => [ 'type' => 'integer', 'locationName' => 'ctag', ],
                'bgpAsn' => [ 'type' => 'integer', 'locationName' => 'bgpAsn', ],
                'customerRouterIP1' => [ 'type' => 'string', 'locationName' => 'customerRouterIP1', ],
                'customerRouterIP2' => [ 'type' => 'string', 'locationName' => 'customerRouterIP2', ],
                'dxRouterIP1' => [ 'type' => 'string', 'locationName' => 'dxRouterIP1', ],
                'dxRouterIP2' => [ 'type' => 'string', 'locationName' => 'dxRouterIP2', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
                'deviceInfo' => [ 'type' => 'string', 'locationName' => 'deviceInfo', ],
                'connectionId' => [ 'type' => 'string', 'locationName' => 'connectionId', ],
                'bgwVip' => [ 'type' => 'string', 'locationName' => 'bgwVip', ],
                'vifId' => [ 'type' => 'string', 'locationName' => 'vifId', ],
                'used' => [ 'type' => 'string', 'locationName' => 'used', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'updatedAt' => [ 'type' => 'string', 'locationName' => 'updatedAt', ],
            ],
        ],
        'JdBgwVifConfBaseSpec' => [
            'type' => 'structure',
            'members' => [
                'jdBgwVifConfId' => [ 'type' => 'string', 'locationName' => 'jdBgwVifConfId', ],
            ],
        ],
        'JdBgwVifConfSpec' => [
            'type' => 'structure',
            'members' => [
                'partnerID' => [ 'type' => 'string', 'locationName' => 'partnerID', ],
                'interconnectID' => [ 'type' => 'string', 'locationName' => 'interconnectID', ],
                'outerconnectID' => [ 'type' => 'string', 'locationName' => 'outerconnectID', ],
                'stag' => [ 'type' => 'integer', 'locationName' => 'stag', ],
                'ctag' => [ 'type' => 'integer', 'locationName' => 'ctag', ],
                'bgpAsn' => [ 'type' => 'integer', 'locationName' => 'bgpAsn', ],
                'customerRouterIP1' => [ 'type' => 'string', 'locationName' => 'customerRouterIP1', ],
                'customerRouterIP2' => [ 'type' => 'string', 'locationName' => 'customerRouterIP2', ],
                'dxRouterIP1' => [ 'type' => 'string', 'locationName' => 'dxRouterIP1', ],
                'dxRouterIP2' => [ 'type' => 'string', 'locationName' => 'dxRouterIP2', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
                'deviceInfo' => [ 'type' => 'string', 'locationName' => 'deviceInfo', ],
            ],
        ],
        'Location' => [
            'type' => 'structure',
            'members' => [
                'locationId' => [ 'type' => 'string', 'locationName' => 'locationId', ],
                'locationName' => [ 'type' => 'string', 'locationName' => 'locationName', ],
                'locationCode' => [ 'type' => 'string', 'locationName' => 'locationCode', ],
                'locationType' => [ 'type' => 'string', 'locationName' => 'locationType', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'locationPortSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'LocationPortSpec', ], ],
                'locationISPs' => [ 'type' => 'list', 'member' => [ 'shape' => 'LocationISP', ], ],
            ],
        ],
        'ModifyBgwRouteSpec' => [
            'type' => 'structure',
            'members' => [
                'bgwRouteId' => [ 'type' => 'string', 'locationName' => 'bgwRouteId', ],
                'bgwRouteDestination' => [ 'type' => 'string', 'locationName' => 'bgwRouteDestination', ],
                'bgwNexthopType' => [ 'type' => 'string', 'locationName' => 'bgwNexthopType', ],
                'bgwRouteNexthop' => [ 'type' => 'string', 'locationName' => 'bgwRouteNexthop', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'ModifyBgwSpec' => [
            'type' => 'structure',
            'members' => [
                'bgwName' => [ 'type' => 'string', 'locationName' => 'bgwName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'ModifyConnectionSpec' => [
            'type' => 'structure',
            'members' => [
                'connectionName' => [ 'type' => 'string', 'locationName' => 'connectionName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'monitor' =>  [ 'shape' => 'MonitorSpec', ],
            ],
        ],
        'MonitorSpec' => [
            'type' => 'structure',
            'members' => [
                'samplingPeriod' => [ 'type' => 'integer', 'locationName' => 'samplingPeriod', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'ModifyJdBgwVifConfSpec' => [
            'type' => 'structure',
            'members' => [
                'jdBgwVifConfId' => [ 'type' => 'string', 'locationName' => 'jdBgwVifConfId', ],
                'partnerID' => [ 'type' => 'string', 'locationName' => 'partnerID', ],
                'interconnectID' => [ 'type' => 'string', 'locationName' => 'interconnectID', ],
                'outerconnectID' => [ 'type' => 'string', 'locationName' => 'outerconnectID', ],
                'stag' => [ 'type' => 'integer', 'locationName' => 'stag', ],
                'ctag' => [ 'type' => 'integer', 'locationName' => 'ctag', ],
                'bgpAsn' => [ 'type' => 'integer', 'locationName' => 'bgpAsn', ],
                'customerRouterIP1' => [ 'type' => 'string', 'locationName' => 'customerRouterIP1', ],
                'customerRouterIP2' => [ 'type' => 'string', 'locationName' => 'customerRouterIP2', ],
                'dxRouterIP1' => [ 'type' => 'string', 'locationName' => 'dxRouterIP1', ],
                'dxRouterIP2' => [ 'type' => 'string', 'locationName' => 'dxRouterIP2', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
                'deviceInfo' => [ 'type' => 'string', 'locationName' => 'deviceInfo', ],
            ],
        ],
        'ModifyPartnerConnectionStatusSpec' => [
            'type' => 'structure',
            'members' => [
                'connectionOwner' => [ 'type' => 'string', 'locationName' => 'connectionOwner', ],
                'connectionStatus' => [ 'type' => 'string', 'locationName' => 'connectionStatus', ],
            ],
        ],
        'ModifyPrivateVirtualInterfaceSpec' => [
            'type' => 'structure',
            'members' => [
                'privateVifName' => [ 'type' => 'string', 'locationName' => 'privateVifName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'healthCheck' =>  [ 'shape' => 'HealthCheckSpec', ],
                'monitor' =>  [ 'shape' => 'MonitorSpec', ],
            ],
        ],
        'ModifyQuotaSpec' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'parentResourceId' => [ 'type' => 'string', 'locationName' => 'parentResourceId', ],
                'maxLimit' => [ 'type' => 'integer', 'locationName' => 'maxLimit', ],
            ],
        ],
        'ModifyVpcAttachmentSpec' => [
            'type' => 'structure',
            'members' => [
                'vpcAttachmentName' => [ 'type' => 'string', 'locationName' => 'vpcAttachmentName', ],
                'propagationAttribute' =>  [ 'shape' => 'PropagationAttribute', ],
            ],
        ],
        'PropagationAttribute' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'propagateType' => [ 'type' => 'string', 'locationName' => 'propagateType', ],
                'subnetIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ModifyVpnTrafficSelectorSpec' => [
            'type' => 'structure',
            'members' => [
                'localSubnet' => [ 'type' => 'string', 'locationName' => 'localSubnet', ],
                'remoteSubnets' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'OpConnection' => [
            'type' => 'structure',
            'members' => [
                'connectionId' => [ 'type' => 'string', 'locationName' => 'connectionId', ],
                'connectionName' => [ 'type' => 'string', 'locationName' => 'connectionName', ],
                'location' =>  [ 'shape' => 'ConnectionLocation', ],
                'partner' =>  [ 'shape' => 'Partner', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
                'vifIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'connectionStatus' => [ 'type' => 'string', 'locationName' => 'connectionStatus', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'idcAddress' => [ 'type' => 'string', 'locationName' => 'idcAddress', ],
                'contactName' => [ 'type' => 'string', 'locationName' => 'contactName', ],
                'phoneNumber' => [ 'type' => 'string', 'locationName' => 'phoneNumber', ],
                'rejectedReason' => [ 'type' => 'string', 'locationName' => 'rejectedReason', ],
                'connectionOwner' => [ 'type' => 'string', 'locationName' => 'connectionOwner', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
            ],
        ],
        'PeerIps' => [
            'type' => 'structure',
            'members' => [
                'customerIp' => [ 'type' => 'string', 'locationName' => 'customerIp', ],
                'jdCloudIp' => [ 'type' => 'string', 'locationName' => 'jdCloudIp', ],
            ],
        ],
        'Peer' => [
            'type' => 'structure',
            'members' => [
                'peerId' => [ 'type' => 'string', 'locationName' => 'peerId', ],
                'bgpPeerState' => [ 'type' => 'string', 'locationName' => 'bgpPeerState', ],
                'peerHealthState' => [ 'type' => 'string', 'locationName' => 'peerHealthState', ],
                'peerIps' =>  [ 'shape' => 'PeerIps', ],
            ],
        ],
        'PrivateVif' => [
            'type' => 'structure',
            'members' => [
                'privateVifId' => [ 'type' => 'string', 'locationName' => 'privateVifId', ],
                'privateVifName' => [ 'type' => 'string', 'locationName' => 'privateVifName', ],
                'connectionId' => [ 'type' => 'string', 'locationName' => 'connectionId', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'privateVifOwner' => [ 'type' => 'string', 'locationName' => 'privateVifOwner', ],
                'bgwId' => [ 'type' => 'string', 'locationName' => 'bgwId', ],
                'bgpPeers' => [ 'type' => 'list', 'member' => [ 'shape' => 'BgpPeer', ], ],
                'vlan' => [ 'type' => 'integer', 'locationName' => 'vlan', ],
                'privateVifStatus' => [ 'type' => 'string', 'locationName' => 'privateVifStatus', ],
                'inActiveReason' => [ 'type' => 'string', 'locationName' => 'inActiveReason', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'enableBgp' => [ 'type' => 'boolean', 'locationName' => 'enableBgp', ],
                'peers' => [ 'type' => 'list', 'member' => [ 'shape' => 'Peer', ], ],
                'bgp' =>  [ 'shape' => 'Bgp', ],
                'healthCheck' =>  [ 'shape' => 'HealthCheck', ],
                'monitor' =>  [ 'shape' => 'Monitor', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
            ],
        ],
        'PropagateCidrInfo' => [
            'type' => 'structure',
            'members' => [
                'subnetCidr' => [ 'type' => 'string', 'locationName' => 'subnetCidr', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
            ],
        ],
        'Quota' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'parentResourceId' => [ 'type' => 'string', 'locationName' => 'parentResourceId', ],
                'maxLimit' => [ 'type' => 'integer', 'locationName' => 'maxLimit', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
            ],
        ],
        'ReplenishFailed' => [
            'type' => 'structure',
            'members' => [
                'connectionId' => [ 'type' => 'string', 'locationName' => 'connectionId', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
            ],
        ],
        'ReplenishTrafficOrderSpec' => [
            'type' => 'structure',
            'members' => [
                'connectionIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'customerPin' => [ 'type' => 'string', 'locationName' => 'customerPin', ],
            ],
        ],
        'ReplenishPortOrderSpec' => [
            'type' => 'structure',
            'members' => [
                'connectionIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'customerPin' => [ 'type' => 'string', 'locationName' => 'customerPin', ],
                'autoPay' => [ 'type' => 'boolean', 'locationName' => 'autoPay', ],
            ],
        ],
        'ResizeConnection' => [
            'type' => 'structure',
            'members' => [
                'locationPortSpecCode' => [ 'type' => 'string', 'locationName' => 'locationPortSpecCode', ],
                'autoPay' => [ 'type' => 'boolean', 'locationName' => 'autoPay', ],
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
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'VpcAttachment' => [
            'type' => 'structure',
            'members' => [
                'vpcAttachmentId' => [ 'type' => 'string', 'locationName' => 'vpcAttachmentId', ],
                'vpcAttachmentName' => [ 'type' => 'string', 'locationName' => 'vpcAttachmentName', ],
                'bgwId' => [ 'type' => 'string', 'locationName' => 'bgwId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'propagateType' => [ 'type' => 'string', 'locationName' => 'propagateType', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'propagateCidrInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'PropagateCidrInfo', ], ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
            ],
        ],
        'VpcAttachmentSpec' => [
            'type' => 'structure',
            'members' => [
                'vpcAttachmentName' => [ 'type' => 'string', 'locationName' => 'vpcAttachmentName', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'propagateType' => [ 'type' => 'string', 'locationName' => 'propagateType', ],
                'bgwId' => [ 'type' => 'string', 'locationName' => 'bgwId', ],
                'subnetIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
            ],
        ],
        'VpnTrafficSelectorSpec' => [
            'type' => 'structure',
            'members' => [
                'localSubnet' => [ 'type' => 'string', 'locationName' => 'localSubnet', ],
                'remoteSubnets' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'policyType' => [ 'type' => 'string', 'locationName' => 'policyType', ],
            ],
        ],
        'VpnConnection' => [
            'type' => 'structure',
            'members' => [
                'vpnConnectionId' => [ 'type' => 'string', 'locationName' => 'vpnConnectionId', ],
                'vpnConnectionName' => [ 'type' => 'string', 'locationName' => 'vpnConnectionName', ],
                'bgwId' => [ 'type' => 'string', 'locationName' => 'bgwId', ],
                'cgwId' => [ 'type' => 'string', 'locationName' => 'cgwId', ],
                'bgpEnabled' => [ 'type' => 'boolean', 'locationName' => 'bgpEnabled', ],
                'localAsn' => [ 'type' => 'integer', 'locationName' => 'localAsn', ],
                'cloudPublicIp' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'providers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'haStatus' => [ 'type' => 'string', 'locationName' => 'haStatus', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'updatedTime' => [ 'type' => 'string', 'locationName' => 'updatedTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'trafficSelectors' => [ 'type' => 'list', 'member' => [ 'shape' => 'VpnTrafficSelectorSpec', ], ],
                'azType' => [ 'type' => 'string', 'locationName' => 'azType', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
            ],
        ],
        'VpnConnectionDiagnose' => [
            'type' => 'structure',
            'members' => [
                'vpnConnectionId' => [ 'type' => 'string', 'locationName' => 'vpnConnectionId', ],
                'vpnTunnelId' => [ 'type' => 'string', 'locationName' => 'vpnTunnelId', ],
                'failedReasonCode' => [ 'type' => 'string', 'locationName' => 'failedReasonCode', ],
                'failedTime' => [ 'type' => 'string', 'locationName' => 'failedTime', ],
                'sourceLogs' => [ 'type' => 'string', 'locationName' => 'sourceLogs', ],
                'failedPhase' => [ 'type' => 'integer', 'locationName' => 'failedPhase', ],
            ],
        ],
        'ModifyVpnConnectionSpec' => [
            'type' => 'structure',
            'members' => [
                'vpnConnectionName' => [ 'type' => 'string', 'locationName' => 'vpnConnectionName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'bgpEnabled' => [ 'type' => 'boolean', 'locationName' => 'bgpEnabled', ],
                'trafficSelectors' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModifyVpnTrafficSelectorSpec', ], ],
            ],
        ],
        'VpnConnectionSpec' => [
            'type' => 'structure',
            'members' => [
                'vpnConnectionName' => [ 'type' => 'string', 'locationName' => 'vpnConnectionName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'bgwId' => [ 'type' => 'string', 'locationName' => 'bgwId', ],
                'cgwId' => [ 'type' => 'string', 'locationName' => 'cgwId', ],
                'bgpEnabled' => [ 'type' => 'boolean', 'locationName' => 'bgpEnabled', ],
                'localAsn' => [ 'type' => 'integer', 'locationName' => 'localAsn', ],
                'providers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
            ],
        ],
        'VpnTunnel' => [
            'type' => 'structure',
            'members' => [
                'vpnTunnelId' => [ 'type' => 'string', 'locationName' => 'vpnTunnelId', ],
                'vpnTunnelName' => [ 'type' => 'string', 'locationName' => 'vpnTunnelName', ],
                'vpnConnectionId' => [ 'type' => 'string', 'locationName' => 'vpnConnectionId', ],
                'cloudPublicIp' => [ 'type' => 'string', 'locationName' => 'cloudPublicIp', ],
                'customerIp' => [ 'type' => 'string', 'locationName' => 'customerIp', ],
                'psk' => [ 'type' => 'string', 'locationName' => 'psk', ],
                'localId' => [ 'type' => 'string', 'locationName' => 'localId', ],
                'remoteId' => [ 'type' => 'string', 'locationName' => 'remoteId', ],
                'localIp' => [ 'type' => 'string', 'locationName' => 'localIp', ],
                'localTunnelIp' => [ 'type' => 'string', 'locationName' => 'localTunnelIp', ],
                'remoteIp' => [ 'type' => 'string', 'locationName' => 'remoteIp', ],
                'remoteTunnelIp' => [ 'type' => 'string', 'locationName' => 'remoteTunnelIp', ],
                'tunnelIp' => [ 'type' => 'string', 'locationName' => 'tunnelIp', ],
                'ikeVersion' => [ 'type' => 'string', 'locationName' => 'ikeVersion', ],
                'ikeMode' => [ 'type' => 'string', 'locationName' => 'ikeMode', ],
                'ikeKeyExchange' => [ 'type' => 'string', 'locationName' => 'ikeKeyExchange', ],
                'ikeCipher' => [ 'type' => 'string', 'locationName' => 'ikeCipher', ],
                'ikeAuth' => [ 'type' => 'string', 'locationName' => 'ikeAuth', ],
                'ikeDpdSec' => [ 'type' => 'integer', 'locationName' => 'ikeDpdSec', ],
                'ikeSaLifeSec' => [ 'type' => 'integer', 'locationName' => 'ikeSaLifeSec', ],
                'ipsecCipher' => [ 'type' => 'string', 'locationName' => 'ipsecCipher', ],
                'ipsecAuth' => [ 'type' => 'string', 'locationName' => 'ipsecAuth', ],
                'ipsecKeyExchange' => [ 'type' => 'string', 'locationName' => 'ipsecKeyExchange', ],
                'ipsecSaLifeSec' => [ 'type' => 'integer', 'locationName' => 'ipsecSaLifeSec', ],
                'ipsecSaLifepkt' => [ 'type' => 'long', 'locationName' => 'ipsecSaLifepkt', ],
                'ipsecSaLifebyte' => [ 'type' => 'long', 'locationName' => 'ipsecSaLifebyte', ],
                'adminStatus' => [ 'type' => 'string', 'locationName' => 'adminStatus', ],
                'opStatus' => [ 'type' => 'string', 'locationName' => 'opStatus', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'updatedTime' => [ 'type' => 'string', 'locationName' => 'updatedTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
            ],
        ],
        'VpnTunnelAdminStatus' => [
            'type' => 'structure',
            'members' => [
                'adminStatus' => [ 'type' => 'string', 'locationName' => 'adminStatus', ],
            ],
        ],
        'VpnTunnelModifySpec' => [
            'type' => 'structure',
            'members' => [
                'psk' => [ 'type' => 'string', 'locationName' => 'psk', ],
                'vpnTunnelName' => [ 'type' => 'string', 'locationName' => 'vpnTunnelName', ],
                'tunnelIp' => [ 'type' => 'string', 'locationName' => 'tunnelIp', ],
                'localTunnelIp' => [ 'type' => 'string', 'locationName' => 'localTunnelIp', ],
                'ikeVersion' => [ 'type' => 'string', 'locationName' => 'ikeVersion', ],
                'ikeMode' => [ 'type' => 'string', 'locationName' => 'ikeMode', ],
                'ikeKeyExchange' => [ 'type' => 'string', 'locationName' => 'ikeKeyExchange', ],
                'ikeCipher' => [ 'type' => 'string', 'locationName' => 'ikeCipher', ],
                'ikeAuth' => [ 'type' => 'string', 'locationName' => 'ikeAuth', ],
                'ikeDpdSec' => [ 'type' => 'integer', 'locationName' => 'ikeDpdSec', ],
                'ikeSaLifeSec' => [ 'type' => 'integer', 'locationName' => 'ikeSaLifeSec', ],
                'ipsecCipher' => [ 'type' => 'string', 'locationName' => 'ipsecCipher', ],
                'ipsecAuth' => [ 'type' => 'string', 'locationName' => 'ipsecAuth', ],
                'ipsecKeyExchange' => [ 'type' => 'string', 'locationName' => 'ipsecKeyExchange', ],
                'ipsecSaLifeSec' => [ 'type' => 'integer', 'locationName' => 'ipsecSaLifeSec', ],
                'ipsecSaLifepkt' => [ 'type' => 'long', 'locationName' => 'ipsecSaLifepkt', ],
                'ipsecSaLifebyte' => [ 'type' => 'long', 'locationName' => 'ipsecSaLifebyte', ],
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
            ],
        ],
        'VpnTunnelSpec' => [
            'type' => 'structure',
            'members' => [
                'vpnConnectionId' => [ 'type' => 'string', 'locationName' => 'vpnConnectionId', ],
                'vpnTunnelName' => [ 'type' => 'string', 'locationName' => 'vpnTunnelName', ],
                'cloudPublicIp' => [ 'type' => 'string', 'locationName' => 'cloudPublicIp', ],
                'customerIp' => [ 'type' => 'string', 'locationName' => 'customerIp', ],
                'psk' => [ 'type' => 'string', 'locationName' => 'psk', ],
                'tunnelIp' => [ 'type' => 'string', 'locationName' => 'tunnelIp', ],
                'localTunnelIp' => [ 'type' => 'string', 'locationName' => 'localTunnelIp', ],
                'ikeVersion' => [ 'type' => 'string', 'locationName' => 'ikeVersion', ],
                'ikeMode' => [ 'type' => 'string', 'locationName' => 'ikeMode', ],
                'ikeKeyExchange' => [ 'type' => 'string', 'locationName' => 'ikeKeyExchange', ],
                'ikeCipher' => [ 'type' => 'string', 'locationName' => 'ikeCipher', ],
                'ikeAuth' => [ 'type' => 'string', 'locationName' => 'ikeAuth', ],
                'ikeDpdSec' => [ 'type' => 'integer', 'locationName' => 'ikeDpdSec', ],
                'ikeSaLifeSec' => [ 'type' => 'integer', 'locationName' => 'ikeSaLifeSec', ],
                'ipsecCipher' => [ 'type' => 'string', 'locationName' => 'ipsecCipher', ],
                'ipsecAuth' => [ 'type' => 'string', 'locationName' => 'ipsecAuth', ],
                'ipsecKeyExchange' => [ 'type' => 'string', 'locationName' => 'ipsecKeyExchange', ],
                'ipsecSaLifeSec' => [ 'type' => 'integer', 'locationName' => 'ipsecSaLifeSec', ],
                'ipsecSaLifepkt' => [ 'type' => 'long', 'locationName' => 'ipsecSaLifepkt', ],
                'ipsecSaLifebyte' => [ 'type' => 'long', 'locationName' => 'ipsecSaLifebyte', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
            ],
        ],
        'DescribeBgwsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBgwsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBgwRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bgwId' => [ 'type' => 'string', 'locationName' => 'bgwId', ],
            ],
        ],
        'DescribeBgwResultShape' => [
            'type' => 'structure',
            'members' => [
                'bgw' =>  [ 'shape' => 'Bgw', ],
            ],
        ],
        'DescribeBgwsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'resourceGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeBgwsResultShape' => [
            'type' => 'structure',
            'members' => [
                'bgws' => [ 'type' => 'list', 'member' => [ 'shape' => 'Bgw', ], ],
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
        'DescribeBgwResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBgwResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBgwRoutesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bgwId' => [ 'type' => 'string', 'locationName' => 'bgwId', ],
            ],
        ],
        'DescribeBgwRoutesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBgwRoutesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBgwRoutesResultShape' => [
            'type' => 'structure',
            'members' => [
                'bgwRoutes' => [ 'type' => 'list', 'member' => [ 'shape' => 'BgwRoute', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeopJdBgwVifConfsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeopJdBgwVifConfsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeopJdBgwVifConfsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeopJdBgwVifConfsResultShape' => [
            'type' => 'structure',
            'members' => [
                'jdBgwVifConfs' => [ 'type' => 'list', 'member' => [ 'shape' => 'JdBgwVifConf', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribePrivateVirtualInterfaceResultShape' => [
            'type' => 'structure',
            'members' => [
                'privateVif' =>  [ 'shape' => 'PrivateVif', ],
            ],
        ],
        'DescribePrivateVirtualInterfaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'privateVifId' => [ 'type' => 'string', 'locationName' => 'privateVifId', ],
            ],
        ],
        'DescribePrivateVirtualInterfacesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePrivateVirtualInterfacesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePrivateVirtualInterfaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePrivateVirtualInterfaceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePrivateVirtualInterfacesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'resourceGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribePrivateVirtualInterfacesResultShape' => [
            'type' => 'structure',
            'members' => [
                'privateVifs' => [ 'type' => 'list', 'member' => [ 'shape' => 'PrivateVif', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeVpcAttachmentsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'resourceGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeVpcAttachmentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeVpcAttachmentResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeVpcAttachmentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'vpcAttachmentId' => [ 'type' => 'string', 'locationName' => 'vpcAttachmentId', ],
            ],
        ],
        'DescribeVpcAttachmentsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeVpcAttachmentsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeVpcAttachmentResultShape' => [
            'type' => 'structure',
            'members' => [
                'vpcAttachment' =>  [ 'shape' => 'VpcAttachment', ],
            ],
        ],
        'DescribeVpcAttachmentsResultShape' => [
            'type' => 'structure',
            'members' => [
                'vpcAttachments' => [ 'type' => 'list', 'member' => [ 'shape' => 'VpcAttachment', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyAdminStatusResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyAdminStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'adminStatus' => [ 'type' => 'string', 'locationName' => 'adminStatus', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'vpnTunnelId' => [ 'type' => 'string', 'locationName' => 'vpnTunnelId', ],
            ],
        ],
        'ModifyAdminStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeConnectionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeConnectionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeConnectionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'connectionId' => [ 'type' => 'string', 'locationName' => 'connectionId', ],
            ],
        ],
        'DescribeConnectionResultShape' => [
            'type' => 'structure',
            'members' => [
                'connection' =>  [ 'shape' => 'Connection', ],
            ],
        ],
        'DescribeConnectionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'connections' => [ 'type' => 'list', 'member' => [ 'shape' => 'Connection', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeConnectionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'resourceGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeConnectionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeConnectionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
