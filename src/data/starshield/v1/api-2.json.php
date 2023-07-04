<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'starshield',
        'protocol' => 'json',
//        'serviceFullName' => 'starshield',
//        'serviceId' => 'starshield',
    ],
    'operations' => [
        'Dashboard' => [
            'name' => 'Dashboard',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/analytics$$dashboard',
            ],
            'input' => [ 'shape' => 'DashboardRequestShape', ],
            'output' => [ 'shape' => 'DashboardResponseShape', ],
        ],
        'TopK' => [
            'name' => 'TopK',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/analytics$$topK',
            ],
            'input' => [ 'shape' => 'TopKRequestShape', ],
            'output' => [ 'shape' => 'TopKResponseShape', ],
        ],
        'BandwidthTopK' => [
            'name' => 'BandwidthTopK',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/analytics$$bandwidthTopK',
            ],
            'input' => [ 'shape' => 'BandwidthTopKRequestShape', ],
            'output' => [ 'shape' => 'BandwidthTopKResponseShape', ],
        ],
        'DateHistogram' => [
            'name' => 'DateHistogram',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/analytics$$dateHistogram',
            ],
            'input' => [ 'shape' => 'DateHistogramRequestShape', ],
            'output' => [ 'shape' => 'DateHistogramResponseShape', ],
        ],
        'DateHistogramBandwidth' => [
            'name' => 'DateHistogramBandwidth',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/analytics$$dateHistogramBandwidth',
            ],
            'input' => [ 'shape' => 'DateHistogramBandwidthRequestShape', ],
            'output' => [ 'shape' => 'DateHistogramBandwidthResponseShape', ],
        ],
        'BandwidthTrend' => [
            'name' => 'BandwidthTrend',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/analytics$$bandwidthTrend',
            ],
            'input' => [ 'shape' => 'BandwidthTrendRequestShape', ],
            'output' => [ 'shape' => 'BandwidthTrendResponseShape', ],
        ],
        'CacheTopK' => [
            'name' => 'CacheTopK',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/analytics$$cacheTopK',
            ],
            'input' => [ 'shape' => 'CacheTopKRequestShape', ],
            'output' => [ 'shape' => 'CacheTopKResponseShape', ],
        ],
        'CacheBandwidthTopK' => [
            'name' => 'CacheBandwidthTopK',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/analytics$$cacheBandwidthTopK',
            ],
            'input' => [ 'shape' => 'CacheBandwidthTopKRequestShape', ],
            'output' => [ 'shape' => 'CacheBandwidthTopKResponseShape', ],
        ],
        'CacheDateHistogram' => [
            'name' => 'CacheDateHistogram',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/analytics$$cacheDateHistogram',
            ],
            'input' => [ 'shape' => 'CacheDateHistogramRequestShape', ],
            'output' => [ 'shape' => 'CacheDateHistogramResponseShape', ],
        ],
        'CacheDateHistogramBandwidth' => [
            'name' => 'CacheDateHistogramBandwidth',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/analytics$$cacheDateHistogramBandwidth',
            ],
            'input' => [ 'shape' => 'CacheDateHistogramBandwidthRequestShape', ],
            'output' => [ 'shape' => 'CacheDateHistogramBandwidthResponseShape', ],
        ],
        'FirewallTopK' => [
            'name' => 'FirewallTopK',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/analytics$$firewallTopK',
            ],
            'input' => [ 'shape' => 'FirewallTopKRequestShape', ],
            'output' => [ 'shape' => 'FirewallTopKResponseShape', ],
        ],
        'FirewallDateHistogram' => [
            'name' => 'FirewallDateHistogram',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/analytics$$firewallDateHistogram',
            ],
            'input' => [ 'shape' => 'FirewallDateHistogramRequestShape', ],
            'output' => [ 'shape' => 'FirewallDateHistogramResponseShape', ],
        ],
        'QpsZone' => [
            'name' => 'QpsZone',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/qps',
            ],
            'input' => [ 'shape' => 'QpsZoneRequestShape', ],
            'output' => [ 'shape' => 'QpsZoneResponseShape', ],
        ],
        'Xps' => [
            'name' => 'Xps',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/xps',
            ],
            'input' => [ 'shape' => 'XpsRequestShape', ],
            'output' => [ 'shape' => 'XpsResponseShape', ],
        ],
        'QpsInstance' => [
            'name' => 'QpsInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/instances/{instanceId}/qps',
            ],
            'input' => [ 'shape' => 'QpsInstanceRequestShape', ],
            'output' => [ 'shape' => 'QpsInstanceResponseShape', ],
        ],
        'BpsZone' => [
            'name' => 'BpsZone',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/bps',
            ],
            'input' => [ 'shape' => 'BpsZoneRequestShape', ],
            'output' => [ 'shape' => 'BpsZoneResponseShape', ],
        ],
        'BpsInstance' => [
            'name' => 'BpsInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/instances/{instanceId}/bps',
            ],
            'input' => [ 'shape' => 'BpsInstanceRequestShape', ],
            'output' => [ 'shape' => 'BpsInstanceResponseShape', ],
        ],
        'FirewallActivityLog' => [
            'name' => 'FirewallActivityLog',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/analytics$$firewallActivityLog',
            ],
            'input' => [ 'shape' => 'FirewallActivityLogRequestShape', ],
            'output' => [ 'shape' => 'FirewallActivityLogResponseShape', ],
        ],
        'AccessLog' => [
            'name' => 'AccessLog',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/analytics$$accessLog',
            ],
            'input' => [ 'shape' => 'AccessLogRequestShape', ],
            'output' => [ 'shape' => 'AccessLogResponseShape', ],
        ],
        'GroupBy' => [
            'name' => 'GroupBy',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/analytics$$groupBy',
            ],
            'input' => [ 'shape' => 'GroupByRequestShape', ],
            'output' => [ 'shape' => 'GroupByResponseShape', ],
        ],
        'ListAvailablePageRuleSetting' => [
            'name' => 'ListAvailablePageRuleSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/pagerules$$settings',
            ],
            'input' => [ 'shape' => 'ListAvailablePageRuleSettingRequestShape', ],
            'output' => [ 'shape' => 'ListAvailablePageRuleSettingResponseShape', ],
        ],
        'ListCertificatePacks' => [
            'name' => 'ListCertificatePacks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/ssl$$certificate_packs',
            ],
            'input' => [ 'shape' => 'ListCertificatePacksRequestShape', ],
            'output' => [ 'shape' => 'ListCertificatePacksResponseShape', ],
        ],
        'DeleteAdvancedCertificateManagerCertificatePack' => [
            'name' => 'DeleteAdvancedCertificateManagerCertificatePack',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/zones/{zone_identifier}/ssl$$certificate_packs/{identifier}',
            ],
            'input' => [ 'shape' => 'DeleteAdvancedCertificateManagerCertificatePackRequestShape', ],
            'output' => [ 'shape' => 'DeleteAdvancedCertificateManagerCertificatePackResponseShape', ],
        ],
        'OrderAdvancedCertificateManagerCertificatePack' => [
            'name' => 'OrderAdvancedCertificateManagerCertificatePack',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/ssl$$certificate_packs$$order',
            ],
            'input' => [ 'shape' => 'OrderAdvancedCertificateManagerCertificatePackRequestShape', ],
            'output' => [ 'shape' => 'OrderAdvancedCertificateManagerCertificatePackResponseShape', ],
        ],
        'ListAvailableCustomPages' => [
            'name' => 'ListAvailableCustomPages',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/custom_pages',
            ],
            'input' => [ 'shape' => 'ListAvailableCustomPagesRequestShape', ],
            'output' => [ 'shape' => 'ListAvailableCustomPagesResponseShape', ],
        ],
        'UpdateCustomPageURL' => [
            'name' => 'UpdateCustomPageURL',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/zones/{zone_identifier}/custom_pages/{identifier}',
            ],
            'input' => [ 'shape' => 'UpdateCustomPageURLRequestShape', ],
            'output' => [ 'shape' => 'UpdateCustomPageURLResponseShape', ],
        ],
        'ListSSLConfigurations' => [
            'name' => 'ListSSLConfigurations',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/custom_certificates',
            ],
            'input' => [ 'shape' => 'ListSSLConfigurationsRequestShape', ],
            'output' => [ 'shape' => 'ListSSLConfigurationsResponseShape', ],
        ],
        'CreateSSLConfiguration' => [
            'name' => 'CreateSSLConfiguration',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/custom_certificates',
            ],
            'input' => [ 'shape' => 'CreateSSLConfigurationRequestShape', ],
            'output' => [ 'shape' => 'CreateSSLConfigurationResponseShape', ],
        ],
        'EditSSLConfiguration' => [
            'name' => 'EditSSLConfiguration',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/custom_certificates/{identifier}',
            ],
            'input' => [ 'shape' => 'EditSSLConfigurationRequestShape', ],
            'output' => [ 'shape' => 'EditSSLConfigurationResponseShape', ],
        ],
        'DeleteSSLConfiguration' => [
            'name' => 'DeleteSSLConfiguration',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/zones/{zone_identifier}/custom_certificates/{identifier}',
            ],
            'input' => [ 'shape' => 'DeleteSSLConfigurationRequestShape', ],
            'output' => [ 'shape' => 'DeleteSSLConfigurationResponseShape', ],
        ],
        'ListDNSRecords' => [
            'name' => 'ListDNSRecords',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/dns_records',
            ],
            'input' => [ 'shape' => 'ListDNSRecordsRequestShape', ],
            'output' => [ 'shape' => 'ListDNSRecordsResponseShape', ],
        ],
        'CreateDNSRecord' => [
            'name' => 'CreateDNSRecord',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/dns_records',
            ],
            'input' => [ 'shape' => 'CreateDNSRecordRequestShape', ],
            'output' => [ 'shape' => 'CreateDNSRecordResponseShape', ],
        ],
        'UpdateDNSRecord' => [
            'name' => 'UpdateDNSRecord',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/zones/{zone_identifier}/dns_records/{identifier}',
            ],
            'input' => [ 'shape' => 'UpdateDNSRecordRequestShape', ],
            'output' => [ 'shape' => 'UpdateDNSRecordResponseShape', ],
        ],
        'DeleteDNSRecord' => [
            'name' => 'DeleteDNSRecord',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/zones/{zone_identifier}/dns_records/{identifier}',
            ],
            'input' => [ 'shape' => 'DeleteDNSRecordRequestShape', ],
            'output' => [ 'shape' => 'DeleteDNSRecordResponseShape', ],
        ],
        'CreateFilters' => [
            'name' => 'CreateFilters',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/filters',
            ],
            'input' => [ 'shape' => 'CreateFiltersRequestShape', ],
            'output' => [ 'shape' => 'CreateFiltersResponseShape', ],
        ],
        'UpdateIndividualFilter' => [
            'name' => 'UpdateIndividualFilter',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/zones/{zone_identifier}/filters/{id}',
            ],
            'input' => [ 'shape' => 'UpdateIndividualFilterRequestShape', ],
            'output' => [ 'shape' => 'UpdateIndividualFilterResponseShape', ],
        ],
        'ListOfFirewallRules' => [
            'name' => 'ListOfFirewallRules',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/firewall$$rules',
            ],
            'input' => [ 'shape' => 'ListOfFirewallRulesRequestShape', ],
            'output' => [ 'shape' => 'ListOfFirewallRulesResponseShape', ],
        ],
        'CreateFirewallRules' => [
            'name' => 'CreateFirewallRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/firewall$$rules',
            ],
            'input' => [ 'shape' => 'CreateFirewallRulesRequestShape', ],
            'output' => [ 'shape' => 'CreateFirewallRulesResponseShape', ],
        ],
        'UpdateIndividualFirewallRule' => [
            'name' => 'UpdateIndividualFirewallRule',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/zones/{zone_identifier}/firewall$$rules/{id}',
            ],
            'input' => [ 'shape' => 'UpdateIndividualFirewallRuleRequestShape', ],
            'output' => [ 'shape' => 'UpdateIndividualFirewallRuleResponseShape', ],
        ],
        'DeleteIndividualFirewallRules' => [
            'name' => 'DeleteIndividualFirewallRules',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/zones/{zone_identifier}/firewall$$rules/{id}',
            ],
            'input' => [ 'shape' => 'DeleteIndividualFirewallRulesRequestShape', ],
            'output' => [ 'shape' => 'DeleteIndividualFirewallRulesResponseShape', ],
        ],
        'DescribeBotStatus' => [
            'name' => 'DescribeBotStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/bot/{zoneId}',
            ],
            'input' => [ 'shape' => 'DescribeBotStatusRequestShape', ],
            'output' => [ 'shape' => 'DescribeBotStatusResponseShape', ],
        ],
        'OpenFirewallBot' => [
            'name' => 'OpenFirewallBot',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/bot/{zoneId}',
            ],
            'input' => [ 'shape' => 'OpenFirewallBotRequestShape', ],
            'output' => [ 'shape' => 'OpenFirewallBotResponseShape', ],
        ],
        'CloseFirewallBot' => [
            'name' => 'CloseFirewallBot',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/bot/{zoneId}',
            ],
            'input' => [ 'shape' => 'CloseFirewallBotRequestShape', ],
            'output' => [ 'shape' => 'CloseFirewallBotResponseShape', ],
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
        'CreateFlowPack' => [
            'name' => 'CreateFlowPack',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/flowPack',
            ],
            'input' => [ 'shape' => 'CreateFlowPackRequestShape', ],
            'output' => [ 'shape' => 'CreateFlowPackResponseShape', ],
        ],
        'ModifyInstance' => [
            'name' => 'ModifyInstance',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instance/{instanceId}',
            ],
            'input' => [ 'shape' => 'ModifyInstanceRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceResponseShape', ],
        ],
        'DescribeInstanceByOrderNo' => [
            'name' => 'DescribeInstanceByOrderNo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instance/{orderNumber}/describeInstance',
            ],
            'input' => [ 'shape' => 'DescribeInstanceByOrderNoRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceByOrderNoResponseShape', ],
        ],
        'SelectDetailList' => [
            'name' => 'SelectDetailList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances:selectDetailList',
            ],
            'input' => [ 'shape' => 'SelectDetailListRequestShape', ],
            'output' => [ 'shape' => 'SelectDetailListResponseShape', ],
        ],
        'CheckInstancesName' => [
            'name' => 'CheckInstancesName',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances:checkName',
            ],
            'input' => [ 'shape' => 'CheckInstancesNameRequestShape', ],
            'output' => [ 'shape' => 'CheckInstancesNameResponseShape', ],
        ],
        'Ips' => [
            'name' => 'Ips',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/ips',
            ],
            'input' => [ 'shape' => 'IpsRequestShape', ],
            'output' => [ 'shape' => 'IpsResponseShape', ],
        ],
        'InstanceBandwidthAvg' => [
            'name' => 'InstanceBandwidthAvg',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/instances/{instanceId}/instanceBandwidthAvg',
            ],
            'input' => [ 'shape' => 'InstanceBandwidthAvgRequestShape', ],
            'output' => [ 'shape' => 'InstanceBandwidthAvgResponseShape', ],
        ],
        'InstanceBandwidthMax' => [
            'name' => 'InstanceBandwidthMax',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/instances/{instanceId}/instanceBandwidthMax',
            ],
            'input' => [ 'shape' => 'InstanceBandwidthMaxRequestShape', ],
            'output' => [ 'shape' => 'InstanceBandwidthMaxResponseShape', ],
        ],
        'InstanceBandwidthP95' => [
            'name' => 'InstanceBandwidthP95',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/instances/{instanceId}/instanceBandwidthP95',
            ],
            'input' => [ 'shape' => 'InstanceBandwidthP95RequestShape', ],
            'output' => [ 'shape' => 'InstanceBandwidthP95ResponseShape', ],
        ],
        'InstanceBandwidthDateHistogram' => [
            'name' => 'InstanceBandwidthDateHistogram',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/instances/{instanceId}/instanceBandwidthDateHistogram',
            ],
            'input' => [ 'shape' => 'InstanceBandwidthDateHistogramRequestShape', ],
            'output' => [ 'shape' => 'InstanceBandwidthDateHistogramResponseShape', ],
        ],
        'InstanceBandwidthMultiDateHistogram' => [
            'name' => 'InstanceBandwidthMultiDateHistogram',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/instances/{instanceId}/instanceBandwidthMultiDateHistogram',
            ],
            'input' => [ 'shape' => 'InstanceBandwidthMultiDateHistogramRequestShape', ],
            'output' => [ 'shape' => 'InstanceBandwidthMultiDateHistogramResponseShape', ],
        ],
        'BandwidthDateHistogramTopK' => [
            'name' => 'BandwidthDateHistogramTopK',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/instances/{instanceId}/bandwidthDateHistogramTopK',
            ],
            'input' => [ 'shape' => 'BandwidthDateHistogramTopKRequestShape', ],
            'output' => [ 'shape' => 'BandwidthDateHistogramTopKResponseShape', ],
        ],
        'BandwidthTopK' => [
            'name' => 'BandwidthTopK',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/instances/{instanceId}/bandwidthTopK',
            ],
            'input' => [ 'shape' => 'BandwidthTopKRequestShape', ],
            'output' => [ 'shape' => 'BandwidthTopKResponseShape', ],
        ],
        'InstanceBandwidthList' => [
            'name' => 'InstanceBandwidthList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/instances/{instanceId}/instanceBandwidthList',
            ],
            'input' => [ 'shape' => 'InstanceBandwidthListRequestShape', ],
            'output' => [ 'shape' => 'InstanceBandwidthListResponseShape', ],
        ],
        'InstanceTrafficSum' => [
            'name' => 'InstanceTrafficSum',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/instances/{instanceId}/instanceTrafficSum',
            ],
            'input' => [ 'shape' => 'InstanceTrafficSumRequestShape', ],
            'output' => [ 'shape' => 'InstanceTrafficSumResponseShape', ],
        ],
        'InstanceTrafficDateHistogram' => [
            'name' => 'InstanceTrafficDateHistogram',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/instances/{instanceId}/instanceTrafficDateHistogram',
            ],
            'input' => [ 'shape' => 'InstanceTrafficDateHistogramRequestShape', ],
            'output' => [ 'shape' => 'InstanceTrafficDateHistogramResponseShape', ],
        ],
        'InstanceTrafficMultiDateHistogram' => [
            'name' => 'InstanceTrafficMultiDateHistogram',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/instances/{instanceId}/instanceTrafficMultiDateHistogram',
            ],
            'input' => [ 'shape' => 'InstanceTrafficMultiDateHistogramRequestShape', ],
            'output' => [ 'shape' => 'InstanceTrafficMultiDateHistogramResponseShape', ],
        ],
        'TrafficDateHistogramTopK' => [
            'name' => 'TrafficDateHistogramTopK',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/instances/{instanceId}/trafficDateHistogramTopK',
            ],
            'input' => [ 'shape' => 'TrafficDateHistogramTopKRequestShape', ],
            'output' => [ 'shape' => 'TrafficDateHistogramTopKResponseShape', ],
        ],
        'TrafficTopK' => [
            'name' => 'TrafficTopK',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/instances/{instanceId}/trafficTopK',
            ],
            'input' => [ 'shape' => 'TrafficTopKRequestShape', ],
            'output' => [ 'shape' => 'TrafficTopKResponseShape', ],
        ],
        'InstanceRequestSum' => [
            'name' => 'InstanceRequestSum',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/instances/{instanceId}/instanceRequestSum',
            ],
            'input' => [ 'shape' => 'InstanceRequestSumRequestShape', ],
            'output' => [ 'shape' => 'InstanceRequestSumResponseShape', ],
        ],
        'InstanceRequestDateHistogram' => [
            'name' => 'InstanceRequestDateHistogram',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/instances/{instanceId}/instanceRequestDateHistogram',
            ],
            'input' => [ 'shape' => 'InstanceRequestDateHistogramRequestShape', ],
            'output' => [ 'shape' => 'InstanceRequestDateHistogramResponseShape', ],
        ],
        'InstanceRequestMultiDateHistogram' => [
            'name' => 'InstanceRequestMultiDateHistogram',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/instances/{instanceId}/instanceRequestMultiDateHistogram',
            ],
            'input' => [ 'shape' => 'InstanceRequestMultiDateHistogramRequestShape', ],
            'output' => [ 'shape' => 'InstanceRequestMultiDateHistogramResponseShape', ],
        ],
        'RequestDateHistogramTopK' => [
            'name' => 'RequestDateHistogramTopK',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/instances/{instanceId}/requestDateHistogramTopK',
            ],
            'input' => [ 'shape' => 'RequestDateHistogramTopKRequestShape', ],
            'output' => [ 'shape' => 'RequestDateHistogramTopKResponseShape', ],
        ],
        'RequestTopK' => [
            'name' => 'RequestTopK',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/instances/{instanceId}/requestTopK',
            ],
            'input' => [ 'shape' => 'RequestTopKRequestShape', ],
            'output' => [ 'shape' => 'RequestTopKResponseShape', ],
        ],
        'ListLogpushJobs' => [
            'name' => 'ListLogpushJobs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/logpush$$jobs',
            ],
            'input' => [ 'shape' => 'ListLogpushJobsRequestShape', ],
            'output' => [ 'shape' => 'ListLogpushJobsResponseShape', ],
        ],
        'CreateLogpushJob' => [
            'name' => 'CreateLogpushJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/logpush$$jobs',
            ],
            'input' => [ 'shape' => 'CreateLogpushJobRequestShape', ],
            'output' => [ 'shape' => 'CreateLogpushJobResponseShape', ],
        ],
        'Fields' => [
            'name' => 'Fields',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/logpush$$datasets/{dataset}/fields',
            ],
            'input' => [ 'shape' => 'FieldsRequestShape', ],
            'output' => [ 'shape' => 'FieldsResponseShape', ],
        ],
        'FieldsDefault' => [
            'name' => 'FieldsDefault',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/logpush$$datasets/{dataset}/fieldsDefault',
            ],
            'input' => [ 'shape' => 'FieldsDefaultRequestShape', ],
            'output' => [ 'shape' => 'FieldsDefaultResponseShape', ],
        ],
        'UpdateLogpushJob' => [
            'name' => 'UpdateLogpushJob',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/zones/{zone_identifier}/logpush$$jobs/{job_identifier}',
            ],
            'input' => [ 'shape' => 'UpdateLogpushJobRequestShape', ],
            'output' => [ 'shape' => 'UpdateLogpushJobResponseShape', ],
        ],
        'DeleteLogpushJob' => [
            'name' => 'DeleteLogpushJob',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/zones/{zone_identifier}/logpush$$jobs/{job_identifier}',
            ],
            'input' => [ 'shape' => 'DeleteLogpushJobRequestShape', ],
            'output' => [ 'shape' => 'DeleteLogpushJobResponseShape', ],
        ],
        'CheckDestinationExists' => [
            'name' => 'CheckDestinationExists',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/logpush$$validate$$destination$$exists',
            ],
            'input' => [ 'shape' => 'CheckDestinationExistsRequestShape', ],
            'output' => [ 'shape' => 'CheckDestinationExistsResponseShape', ],
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
                'requestUri' => '/v1/regions/{regionId}/packages/{packType}',
            ],
            'input' => [ 'shape' => 'DescribePackageRequestShape', ],
            'output' => [ 'shape' => 'DescribePackageResponseShape', ],
        ],
        'ListPageRules' => [
            'name' => 'ListPageRules',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/pagerules',
            ],
            'input' => [ 'shape' => 'ListPageRulesRequestShape', ],
            'output' => [ 'shape' => 'ListPageRulesResponseShape', ],
        ],
        'CreatePageRule' => [
            'name' => 'CreatePageRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/pagerules',
            ],
            'input' => [ 'shape' => 'CreatePageRuleRequestShape', ],
            'output' => [ 'shape' => 'CreatePageRuleResponseShape', ],
        ],
        'UpdatePageRule' => [
            'name' => 'UpdatePageRule',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/zones/{zone_identifier}/pagerules/{identifier}',
            ],
            'input' => [ 'shape' => 'UpdatePageRuleRequestShape', ],
            'output' => [ 'shape' => 'UpdatePageRuleResponseShape', ],
        ],
        'DeletePageRule' => [
            'name' => 'DeletePageRule',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/zones/{zone_identifier}/pagerules/{identifier}',
            ],
            'input' => [ 'shape' => 'DeletePageRuleRequestShape', ],
            'output' => [ 'shape' => 'DeletePageRuleResponseShape', ],
        ],
        'UniversalSSLSettingsDetails' => [
            'name' => 'UniversalSSLSettingsDetails',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/ssl$$universal$$settings',
            ],
            'input' => [ 'shape' => 'UniversalSSLSettingsDetailsRequestShape', ],
            'output' => [ 'shape' => 'UniversalSSLSettingsDetailsResponseShape', ],
        ],
        'EditUniversalSSLSettings' => [
            'name' => 'EditUniversalSSLSettings',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/ssl$$universal$$settings',
            ],
            'input' => [ 'shape' => 'EditUniversalSSLSettingsRequestShape', ],
            'output' => [ 'shape' => 'EditUniversalSSLSettingsResponseShape', ],
        ],
        'ListRuleGroups' => [
            'name' => 'ListRuleGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/firewall$$waf$$packages/{package_identifier}/groups',
            ],
            'input' => [ 'shape' => 'ListRuleGroupsRequestShape', ],
            'output' => [ 'shape' => 'ListRuleGroupsResponseShape', ],
        ],
        'RuleGroupDetails' => [
            'name' => 'RuleGroupDetails',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/firewall$$waf$$packages/{package_identifier}/groups/{identifier}',
            ],
            'input' => [ 'shape' => 'RuleGroupDetailsRequestShape', ],
            'output' => [ 'shape' => 'RuleGroupDetailsResponseShape', ],
        ],
        'EditRuleGroup' => [
            'name' => 'EditRuleGroup',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/firewall$$waf$$packages/{package_identifier}/groups/{identifier}',
            ],
            'input' => [ 'shape' => 'EditRuleGroupRequestShape', ],
            'output' => [ 'shape' => 'EditRuleGroupResponseShape', ],
        ],
        'ListFirewallPackages' => [
            'name' => 'ListFirewallPackages',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/firewall$$waf$$packages',
            ],
            'input' => [ 'shape' => 'ListFirewallPackagesRequestShape', ],
            'output' => [ 'shape' => 'ListFirewallPackagesResponseShape', ],
        ],
        'FirewallPackageDetails' => [
            'name' => 'FirewallPackageDetails',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/firewall$$waf$$packages/{identifier}',
            ],
            'input' => [ 'shape' => 'FirewallPackageDetailsRequestShape', ],
            'output' => [ 'shape' => 'FirewallPackageDetailsResponseShape', ],
        ],
        'EditFirewallPackage' => [
            'name' => 'EditFirewallPackage',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/firewall$$waf$$packages/{identifier}',
            ],
            'input' => [ 'shape' => 'EditFirewallPackageRequestShape', ],
            'output' => [ 'shape' => 'EditFirewallPackageResponseShape', ],
        ],
        'ListRules' => [
            'name' => 'ListRules',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_id}/firewall$$waf$$packages/{package_id}/rules',
            ],
            'input' => [ 'shape' => 'ListRulesRequestShape', ],
            'output' => [ 'shape' => 'ListRulesResponseShape', ],
        ],
        'RuleDetails' => [
            'name' => 'RuleDetails',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_id}/firewall$$waf$$packages/{package_id}/rules/{identifier}',
            ],
            'input' => [ 'shape' => 'RuleDetailsRequestShape', ],
            'output' => [ 'shape' => 'RuleDetailsResponseShape', ],
        ],
        'EditRule' => [
            'name' => 'EditRule',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_id}/firewall$$waf$$packages/{package_id}/rules/{identifier}',
            ],
            'input' => [ 'shape' => 'EditRuleRequestShape', ],
            'output' => [ 'shape' => 'EditRuleResponseShape', ],
        ],
        'ZoneBandwidthAvg' => [
            'name' => 'ZoneBandwidthAvg',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/zoneBandwidthAvg',
            ],
            'input' => [ 'shape' => 'ZoneBandwidthAvgRequestShape', ],
            'output' => [ 'shape' => 'ZoneBandwidthAvgResponseShape', ],
        ],
        'ZoneBandwidthMax' => [
            'name' => 'ZoneBandwidthMax',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/zoneBandwidthMax',
            ],
            'input' => [ 'shape' => 'ZoneBandwidthMaxRequestShape', ],
            'output' => [ 'shape' => 'ZoneBandwidthMaxResponseShape', ],
        ],
        'ZoneBandwidthP95' => [
            'name' => 'ZoneBandwidthP95',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/zoneBandwidthP95',
            ],
            'input' => [ 'shape' => 'ZoneBandwidthP95RequestShape', ],
            'output' => [ 'shape' => 'ZoneBandwidthP95ResponseShape', ],
        ],
        'ZoneBandwidthDateHistogram' => [
            'name' => 'ZoneBandwidthDateHistogram',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/zoneBandwidthDateHistogram',
            ],
            'input' => [ 'shape' => 'ZoneBandwidthDateHistogramRequestShape', ],
            'output' => [ 'shape' => 'ZoneBandwidthDateHistogramResponseShape', ],
        ],
        'ZoneBandwidthMultiDateHistogram' => [
            'name' => 'ZoneBandwidthMultiDateHistogram',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/zoneBandwidthMultiDateHistogram',
            ],
            'input' => [ 'shape' => 'ZoneBandwidthMultiDateHistogramRequestShape', ],
            'output' => [ 'shape' => 'ZoneBandwidthMultiDateHistogramResponseShape', ],
        ],
        'ZoneTrafficSum' => [
            'name' => 'ZoneTrafficSum',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/zoneTrafficSum',
            ],
            'input' => [ 'shape' => 'ZoneTrafficSumRequestShape', ],
            'output' => [ 'shape' => 'ZoneTrafficSumResponseShape', ],
        ],
        'ZoneTrafficDateHistogram' => [
            'name' => 'ZoneTrafficDateHistogram',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/zoneTrafficDateHistogram',
            ],
            'input' => [ 'shape' => 'ZoneTrafficDateHistogramRequestShape', ],
            'output' => [ 'shape' => 'ZoneTrafficDateHistogramResponseShape', ],
        ],
        'ZoneTrafficMultiDateHistogram' => [
            'name' => 'ZoneTrafficMultiDateHistogram',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/zoneTrafficMultiDateHistogram',
            ],
            'input' => [ 'shape' => 'ZoneTrafficMultiDateHistogramRequestShape', ],
            'output' => [ 'shape' => 'ZoneTrafficMultiDateHistogramResponseShape', ],
        ],
        'ZoneRequestSum' => [
            'name' => 'ZoneRequestSum',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/zoneRequestSum',
            ],
            'input' => [ 'shape' => 'ZoneRequestSumRequestShape', ],
            'output' => [ 'shape' => 'ZoneRequestSumResponseShape', ],
        ],
        'ZoneRequestDateHistogram' => [
            'name' => 'ZoneRequestDateHistogram',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/zoneRequestDateHistogram',
            ],
            'input' => [ 'shape' => 'ZoneRequestDateHistogramRequestShape', ],
            'output' => [ 'shape' => 'ZoneRequestDateHistogramResponseShape', ],
        ],
        'ZoneRequestMultiDateHistogram' => [
            'name' => 'ZoneRequestMultiDateHistogram',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{zone_identifier}/zoneRequestMultiDateHistogram',
            ],
            'input' => [ 'shape' => 'ZoneRequestMultiDateHistogramRequestShape', ],
            'output' => [ 'shape' => 'ZoneRequestMultiDateHistogramResponseShape', ],
        ],
        'ListZones' => [
            'name' => 'ListZones',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones',
            ],
            'input' => [ 'shape' => 'ListZonesRequestShape', ],
            'output' => [ 'shape' => 'ListZonesResponseShape', ],
        ],
        'CreateZone' => [
            'name' => 'CreateZone',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones',
            ],
            'input' => [ 'shape' => 'CreateZoneRequestShape', ],
            'output' => [ 'shape' => 'CreateZoneResponseShape', ],
        ],
        'DeleteZone' => [
            'name' => 'DeleteZone',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/zones/{identifier}',
            ],
            'input' => [ 'shape' => 'DeleteZoneRequestShape', ],
            'output' => [ 'shape' => 'DeleteZoneResponseShape', ],
        ],
        'PurgeAllFiles' => [
            'name' => 'PurgeAllFiles',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{identifier}/purge_cache__purgeAllFiles',
            ],
            'input' => [ 'shape' => 'PurgeAllFilesRequestShape', ],
            'output' => [ 'shape' => 'PurgeAllFilesResponseShape', ],
        ],
        'PurgeFilesByURL' => [
            'name' => 'PurgeFilesByURL',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{identifier}/purge_cache__purgeFilesByURL',
            ],
            'input' => [ 'shape' => 'PurgeFilesByURLRequestShape', ],
            'output' => [ 'shape' => 'PurgeFilesByURLResponseShape', ],
        ],
        'PurgeFilesByCache_TagsAndHostOrPrefix' => [
            'name' => 'PurgeFilesByCache_TagsAndHostOrPrefix',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/zones/{identifier}/purge_cache__purgeFilesByCache_TagsAndHostOrPrefix',
            ],
            'input' => [ 'shape' => 'PurgeFilesByCache_TagsAndHostOrPrefixRequestShape', ],
            'output' => [ 'shape' => 'PurgeFilesByCache_TagsAndHostOrPrefixResponseShape', ],
        ],
        'GetAllZoneSettings' => [
            'name' => 'GetAllZoneSettings',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings',
            ],
            'input' => [ 'shape' => 'GetAllZoneSettingsRequestShape', ],
            'output' => [ 'shape' => 'GetAllZoneSettingsResponseShape', ],
        ],
        'EditZoneSettingsInfo' => [
            'name' => 'EditZoneSettingsInfo',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings',
            ],
            'input' => [ 'shape' => 'EditZoneSettingsInfoRequestShape', ],
            'output' => [ 'shape' => 'EditZoneSettingsInfoResponseShape', ],
        ],
        'GetAdvancedDDOSSetting' => [
            'name' => 'GetAdvancedDDOSSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$advanced_ddos',
            ],
            'input' => [ 'shape' => 'GetAdvancedDDOSSettingRequestShape', ],
            'output' => [ 'shape' => 'GetAdvancedDDOSSettingResponseShape', ],
        ],
        'GetAlwaysOnlineSetting' => [
            'name' => 'GetAlwaysOnlineSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$always_online',
            ],
            'input' => [ 'shape' => 'GetAlwaysOnlineSettingRequestShape', ],
            'output' => [ 'shape' => 'GetAlwaysOnlineSettingResponseShape', ],
        ],
        'ChangeAlwaysOnlineSetting' => [
            'name' => 'ChangeAlwaysOnlineSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$always_online',
            ],
            'input' => [ 'shape' => 'ChangeAlwaysOnlineSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeAlwaysOnlineSettingResponseShape', ],
        ],
        'GetAlwaysUseHTTPSSetting' => [
            'name' => 'GetAlwaysUseHTTPSSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$always_use_https',
            ],
            'input' => [ 'shape' => 'GetAlwaysUseHTTPSSettingRequestShape', ],
            'output' => [ 'shape' => 'GetAlwaysUseHTTPSSettingResponseShape', ],
        ],
        'ChangeAlwaysUseHTTPSSetting' => [
            'name' => 'ChangeAlwaysUseHTTPSSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$always_use_https',
            ],
            'input' => [ 'shape' => 'ChangeAlwaysUseHTTPSSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeAlwaysUseHTTPSSettingResponseShape', ],
        ],
        'GetAutomaticHTTPSRewritesSetting' => [
            'name' => 'GetAutomaticHTTPSRewritesSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$automatic_https_rewrites',
            ],
            'input' => [ 'shape' => 'GetAutomaticHTTPSRewritesSettingRequestShape', ],
            'output' => [ 'shape' => 'GetAutomaticHTTPSRewritesSettingResponseShape', ],
        ],
        'ChangeAutomaticHTTPSRewritesSetting' => [
            'name' => 'ChangeAutomaticHTTPSRewritesSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$automatic_https_rewrites',
            ],
            'input' => [ 'shape' => 'ChangeAutomaticHTTPSRewritesSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeAutomaticHTTPSRewritesSettingResponseShape', ],
        ],
        'GetBrowserCacheTTLSetting' => [
            'name' => 'GetBrowserCacheTTLSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$browser_cache_ttl',
            ],
            'input' => [ 'shape' => 'GetBrowserCacheTTLSettingRequestShape', ],
            'output' => [ 'shape' => 'GetBrowserCacheTTLSettingResponseShape', ],
        ],
        'ChangeBrowserCacheTTLSetting' => [
            'name' => 'ChangeBrowserCacheTTLSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$browser_cache_ttl',
            ],
            'input' => [ 'shape' => 'ChangeBrowserCacheTTLSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeBrowserCacheTTLSettingResponseShape', ],
        ],
        'GetBrowserCheckSetting' => [
            'name' => 'GetBrowserCheckSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$browser_check',
            ],
            'input' => [ 'shape' => 'GetBrowserCheckSettingRequestShape', ],
            'output' => [ 'shape' => 'GetBrowserCheckSettingResponseShape', ],
        ],
        'ChangeBrowserCheckSetting' => [
            'name' => 'ChangeBrowserCheckSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$browser_check',
            ],
            'input' => [ 'shape' => 'ChangeBrowserCheckSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeBrowserCheckSettingResponseShape', ],
        ],
        'ChangeCacheLevelSetting' => [
            'name' => 'ChangeCacheLevelSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$cache_level',
            ],
            'input' => [ 'shape' => 'ChangeCacheLevelSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeCacheLevelSettingResponseShape', ],
        ],
        'GetChallengeTTLSetting' => [
            'name' => 'GetChallengeTTLSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$challenge_ttl',
            ],
            'input' => [ 'shape' => 'GetChallengeTTLSettingRequestShape', ],
            'output' => [ 'shape' => 'GetChallengeTTLSettingResponseShape', ],
        ],
        'ChangeChallengeTTLSetting' => [
            'name' => 'ChangeChallengeTTLSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$challenge_ttl',
            ],
            'input' => [ 'shape' => 'ChangeChallengeTTLSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeChallengeTTLSettingResponseShape', ],
        ],
        'GetDevelopmentModeSetting' => [
            'name' => 'GetDevelopmentModeSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$development_mode',
            ],
            'input' => [ 'shape' => 'GetDevelopmentModeSettingRequestShape', ],
            'output' => [ 'shape' => 'GetDevelopmentModeSettingResponseShape', ],
        ],
        'ChangeDevelopmentModeSetting' => [
            'name' => 'ChangeDevelopmentModeSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$development_mode',
            ],
            'input' => [ 'shape' => 'ChangeDevelopmentModeSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeDevelopmentModeSettingResponseShape', ],
        ],
        'GetEmailObfuscationSetting' => [
            'name' => 'GetEmailObfuscationSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$email_obfuscation',
            ],
            'input' => [ 'shape' => 'GetEmailObfuscationSettingRequestShape', ],
            'output' => [ 'shape' => 'GetEmailObfuscationSettingResponseShape', ],
        ],
        'ChangeEmailObfuscationSetting' => [
            'name' => 'ChangeEmailObfuscationSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$email_obfuscation',
            ],
            'input' => [ 'shape' => 'ChangeEmailObfuscationSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeEmailObfuscationSettingResponseShape', ],
        ],
        'GetHotlinkProtectionSetting' => [
            'name' => 'GetHotlinkProtectionSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$hotlink_protection',
            ],
            'input' => [ 'shape' => 'GetHotlinkProtectionSettingRequestShape', ],
            'output' => [ 'shape' => 'GetHotlinkProtectionSettingResponseShape', ],
        ],
        'ChangeHotlinkProtectionSetting' => [
            'name' => 'ChangeHotlinkProtectionSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$hotlink_protection',
            ],
            'input' => [ 'shape' => 'ChangeHotlinkProtectionSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeHotlinkProtectionSettingResponseShape', ],
        ],
        'GetIPGeolocationSetting' => [
            'name' => 'GetIPGeolocationSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$ip_geolocation',
            ],
            'input' => [ 'shape' => 'GetIPGeolocationSettingRequestShape', ],
            'output' => [ 'shape' => 'GetIPGeolocationSettingResponseShape', ],
        ],
        'ChangeIPGeolocationSetting' => [
            'name' => 'ChangeIPGeolocationSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$ip_geolocation',
            ],
            'input' => [ 'shape' => 'ChangeIPGeolocationSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeIPGeolocationSettingResponseShape', ],
        ],
        'GetIPv6Setting' => [
            'name' => 'GetIPv6Setting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$ipv6',
            ],
            'input' => [ 'shape' => 'GetIPv6SettingRequestShape', ],
            'output' => [ 'shape' => 'GetIPv6SettingResponseShape', ],
        ],
        'ChangeIPv6Setting' => [
            'name' => 'ChangeIPv6Setting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$ipv6',
            ],
            'input' => [ 'shape' => 'ChangeIPv6SettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeIPv6SettingResponseShape', ],
        ],
        'GetMinifySetting' => [
            'name' => 'GetMinifySetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$minify',
            ],
            'input' => [ 'shape' => 'GetMinifySettingRequestShape', ],
            'output' => [ 'shape' => 'GetMinifySettingResponseShape', ],
        ],
        'ChangeMinifySetting' => [
            'name' => 'ChangeMinifySetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$minify',
            ],
            'input' => [ 'shape' => 'ChangeMinifySettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeMinifySettingResponseShape', ],
        ],
        'GetMobileRedirectSetting' => [
            'name' => 'GetMobileRedirectSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$mobile_redirect',
            ],
            'input' => [ 'shape' => 'GetMobileRedirectSettingRequestShape', ],
            'output' => [ 'shape' => 'GetMobileRedirectSettingResponseShape', ],
        ],
        'ChangeMobileRedirectSetting' => [
            'name' => 'ChangeMobileRedirectSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$mobile_redirect',
            ],
            'input' => [ 'shape' => 'ChangeMobileRedirectSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeMobileRedirectSettingResponseShape', ],
        ],
        'GetMirageSetting' => [
            'name' => 'GetMirageSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$mirage',
            ],
            'input' => [ 'shape' => 'GetMirageSettingRequestShape', ],
            'output' => [ 'shape' => 'GetMirageSettingResponseShape', ],
        ],
        'ChangeMirageSetting' => [
            'name' => 'ChangeMirageSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$mirage',
            ],
            'input' => [ 'shape' => 'ChangeMirageSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeMirageSettingResponseShape', ],
        ],
        'GetEnableErrorPagesOnSetting' => [
            'name' => 'GetEnableErrorPagesOnSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$origin_error_page_pass_thru',
            ],
            'input' => [ 'shape' => 'GetEnableErrorPagesOnSettingRequestShape', ],
            'output' => [ 'shape' => 'GetEnableErrorPagesOnSettingResponseShape', ],
        ],
        'ChangeEnableErrorPagesOnSetting' => [
            'name' => 'ChangeEnableErrorPagesOnSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$origin_error_page_pass_thru',
            ],
            'input' => [ 'shape' => 'ChangeEnableErrorPagesOnSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeEnableErrorPagesOnSettingResponseShape', ],
        ],
        'GetOpportunisticEncryptionSetting' => [
            'name' => 'GetOpportunisticEncryptionSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$opportunistic_encryption',
            ],
            'input' => [ 'shape' => 'GetOpportunisticEncryptionSettingRequestShape', ],
            'output' => [ 'shape' => 'GetOpportunisticEncryptionSettingResponseShape', ],
        ],
        'ChangeOpportunisticEncryptionSetting' => [
            'name' => 'ChangeOpportunisticEncryptionSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$opportunistic_encryption',
            ],
            'input' => [ 'shape' => 'ChangeOpportunisticEncryptionSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeOpportunisticEncryptionSettingResponseShape', ],
        ],
        'GetPolishSetting' => [
            'name' => 'GetPolishSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$polish',
            ],
            'input' => [ 'shape' => 'GetPolishSettingRequestShape', ],
            'output' => [ 'shape' => 'GetPolishSettingResponseShape', ],
        ],
        'ChangePolishSetting' => [
            'name' => 'ChangePolishSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$polish',
            ],
            'input' => [ 'shape' => 'ChangePolishSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangePolishSettingResponseShape', ],
        ],
        'GetWebPSetting' => [
            'name' => 'GetWebPSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$webp',
            ],
            'input' => [ 'shape' => 'GetWebPSettingRequestShape', ],
            'output' => [ 'shape' => 'GetWebPSettingResponseShape', ],
        ],
        'ChangeWebPSetting' => [
            'name' => 'ChangeWebPSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$webp',
            ],
            'input' => [ 'shape' => 'ChangeWebPSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeWebPSettingResponseShape', ],
        ],
        'ChangeBrotliSetting' => [
            'name' => 'ChangeBrotliSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$brotli',
            ],
            'input' => [ 'shape' => 'ChangeBrotliSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeBrotliSettingResponseShape', ],
        ],
        'GetPrefetchPreloadSetting' => [
            'name' => 'GetPrefetchPreloadSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$prefetch_preload',
            ],
            'input' => [ 'shape' => 'GetPrefetchPreloadSettingRequestShape', ],
            'output' => [ 'shape' => 'GetPrefetchPreloadSettingResponseShape', ],
        ],
        'ChangePrefetchPreloadSetting' => [
            'name' => 'ChangePrefetchPreloadSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$prefetch_preload',
            ],
            'input' => [ 'shape' => 'ChangePrefetchPreloadSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangePrefetchPreloadSettingResponseShape', ],
        ],
        'GetPrivacyPassSetting' => [
            'name' => 'GetPrivacyPassSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$privacy_pass',
            ],
            'input' => [ 'shape' => 'GetPrivacyPassSettingRequestShape', ],
            'output' => [ 'shape' => 'GetPrivacyPassSettingResponseShape', ],
        ],
        'ChangePrivacyPassSetting' => [
            'name' => 'ChangePrivacyPassSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$privacy_pass',
            ],
            'input' => [ 'shape' => 'ChangePrivacyPassSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangePrivacyPassSettingResponseShape', ],
        ],
        'GetRocketLoaderSetting' => [
            'name' => 'GetRocketLoaderSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$rocket_loader',
            ],
            'input' => [ 'shape' => 'GetRocketLoaderSettingRequestShape', ],
            'output' => [ 'shape' => 'GetRocketLoaderSettingResponseShape', ],
        ],
        'ChangeRocketLoaderSetting' => [
            'name' => 'ChangeRocketLoaderSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$rocket_loader',
            ],
            'input' => [ 'shape' => 'ChangeRocketLoaderSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeRocketLoaderSettingResponseShape', ],
        ],
        'GetSecurityHeaderHSTSSetting' => [
            'name' => 'GetSecurityHeaderHSTSSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$security_header',
            ],
            'input' => [ 'shape' => 'GetSecurityHeaderHSTSSettingRequestShape', ],
            'output' => [ 'shape' => 'GetSecurityHeaderHSTSSettingResponseShape', ],
        ],
        'GetSecurityLevelSetting' => [
            'name' => 'GetSecurityLevelSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$security_level',
            ],
            'input' => [ 'shape' => 'GetSecurityLevelSettingRequestShape', ],
            'output' => [ 'shape' => 'GetSecurityLevelSettingResponseShape', ],
        ],
        'ChangeSecurityLevelSetting' => [
            'name' => 'ChangeSecurityLevelSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$security_level',
            ],
            'input' => [ 'shape' => 'ChangeSecurityLevelSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeSecurityLevelSettingResponseShape', ],
        ],
        'GetServerSideExcludeSetting' => [
            'name' => 'GetServerSideExcludeSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$server_side_exclude',
            ],
            'input' => [ 'shape' => 'GetServerSideExcludeSettingRequestShape', ],
            'output' => [ 'shape' => 'GetServerSideExcludeSettingResponseShape', ],
        ],
        'ChangeServerSideExcludeSetting' => [
            'name' => 'ChangeServerSideExcludeSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$server_side_exclude',
            ],
            'input' => [ 'shape' => 'ChangeServerSideExcludeSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeServerSideExcludeSettingResponseShape', ],
        ],
        'GetEnableQueryStringSortSetting' => [
            'name' => 'GetEnableQueryStringSortSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$sort_query_string_for_cache',
            ],
            'input' => [ 'shape' => 'GetEnableQueryStringSortSettingRequestShape', ],
            'output' => [ 'shape' => 'GetEnableQueryStringSortSettingResponseShape', ],
        ],
        'ChangeEnableQueryStringSortSetting' => [
            'name' => 'ChangeEnableQueryStringSortSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$sort_query_string_for_cache',
            ],
            'input' => [ 'shape' => 'ChangeEnableQueryStringSortSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeEnableQueryStringSortSettingResponseShape', ],
        ],
        'GetSSLSetting' => [
            'name' => 'GetSSLSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$ssl',
            ],
            'input' => [ 'shape' => 'GetSSLSettingRequestShape', ],
            'output' => [ 'shape' => 'GetSSLSettingResponseShape', ],
        ],
        'ChangeSSLSetting' => [
            'name' => 'ChangeSSLSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$ssl',
            ],
            'input' => [ 'shape' => 'ChangeSSLSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeSSLSettingResponseShape', ],
        ],
        'GetMinimumTLSVersionSetting' => [
            'name' => 'GetMinimumTLSVersionSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$min_tls_version',
            ],
            'input' => [ 'shape' => 'GetMinimumTLSVersionSettingRequestShape', ],
            'output' => [ 'shape' => 'GetMinimumTLSVersionSettingResponseShape', ],
        ],
        'ChangeMinimumTLSVersionSetting' => [
            'name' => 'ChangeMinimumTLSVersionSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$min_tls_version',
            ],
            'input' => [ 'shape' => 'ChangeMinimumTLSVersionSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeMinimumTLSVersionSettingResponseShape', ],
        ],
        'GetCiphersSetting' => [
            'name' => 'GetCiphersSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$ciphers',
            ],
            'input' => [ 'shape' => 'GetCiphersSettingRequestShape', ],
            'output' => [ 'shape' => 'GetCiphersSettingResponseShape', ],
        ],
        'ChangeCiphersSetting' => [
            'name' => 'ChangeCiphersSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$ciphers',
            ],
            'input' => [ 'shape' => 'ChangeCiphersSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeCiphersSettingResponseShape', ],
        ],
        'GetZoneEnableTLS1_3Setting' => [
            'name' => 'GetZoneEnableTLS1_3Setting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$tls_1_3',
            ],
            'input' => [ 'shape' => 'GetZoneEnableTLS1_3SettingRequestShape', ],
            'output' => [ 'shape' => 'GetZoneEnableTLS1_3SettingResponseShape', ],
        ],
        'ChangeTLS1_3Setting' => [
            'name' => 'ChangeTLS1_3Setting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$tls_1_3',
            ],
            'input' => [ 'shape' => 'ChangeTLS1_3SettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeTLS1_3SettingResponseShape', ],
        ],
        'GetTLSClientAuthSetting' => [
            'name' => 'GetTLSClientAuthSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$tls_client_auth',
            ],
            'input' => [ 'shape' => 'GetTLSClientAuthSettingRequestShape', ],
            'output' => [ 'shape' => 'GetTLSClientAuthSettingResponseShape', ],
        ],
        'ChangeTLSClientAuthSetting' => [
            'name' => 'ChangeTLSClientAuthSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$tls_client_auth',
            ],
            'input' => [ 'shape' => 'ChangeTLSClientAuthSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeTLSClientAuthSettingResponseShape', ],
        ],
        'GetTrueClientIPSetting' => [
            'name' => 'GetTrueClientIPSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$true_client_ip_header',
            ],
            'input' => [ 'shape' => 'GetTrueClientIPSettingRequestShape', ],
            'output' => [ 'shape' => 'GetTrueClientIPSettingResponseShape', ],
        ],
        'ChangeTrueClientIPSetting' => [
            'name' => 'ChangeTrueClientIPSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$true_client_ip_header',
            ],
            'input' => [ 'shape' => 'ChangeTrueClientIPSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeTrueClientIPSettingResponseShape', ],
        ],
        'GetWebApplicationFirewallWAFSetting' => [
            'name' => 'GetWebApplicationFirewallWAFSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$waf',
            ],
            'input' => [ 'shape' => 'GetWebApplicationFirewallWAFSettingRequestShape', ],
            'output' => [ 'shape' => 'GetWebApplicationFirewallWAFSettingResponseShape', ],
        ],
        'ChangeWebApplicationFirewallWAFSetting' => [
            'name' => 'ChangeWebApplicationFirewallWAFSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$waf',
            ],
            'input' => [ 'shape' => 'ChangeWebApplicationFirewallWAFSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeWebApplicationFirewallWAFSettingResponseShape', ],
        ],
        'GetHTTP2Setting' => [
            'name' => 'GetHTTP2Setting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$http2',
            ],
            'input' => [ 'shape' => 'GetHTTP2SettingRequestShape', ],
            'output' => [ 'shape' => 'GetHTTP2SettingResponseShape', ],
        ],
        'ChangeHTTP2Setting' => [
            'name' => 'ChangeHTTP2Setting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$http2',
            ],
            'input' => [ 'shape' => 'ChangeHTTP2SettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeHTTP2SettingResponseShape', ],
        ],
        'GetHTTP3Setting' => [
            'name' => 'GetHTTP3Setting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$http3',
            ],
            'input' => [ 'shape' => 'GetHTTP3SettingRequestShape', ],
            'output' => [ 'shape' => 'GetHTTP3SettingResponseShape', ],
        ],
        'ChangeHTTP3Setting' => [
            'name' => 'ChangeHTTP3Setting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$http3',
            ],
            'input' => [ 'shape' => 'ChangeHTTP3SettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeHTTP3SettingResponseShape', ],
        ],
        'Get0_RTTSessionResumptionSetting' => [
            'name' => 'Get0_RTTSessionResumptionSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$0rtt',
            ],
            'input' => [ 'shape' => 'Get0_RTTSessionResumptionSettingRequestShape', ],
            'output' => [ 'shape' => 'Get0_RTTSessionResumptionSettingResponseShape', ],
        ],
        'Change0_RTTSessionResumptionSetting' => [
            'name' => 'Change0_RTTSessionResumptionSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$0rtt',
            ],
            'input' => [ 'shape' => 'Change0_RTTSessionResumptionSettingRequestShape', ],
            'output' => [ 'shape' => 'Change0_RTTSessionResumptionSettingResponseShape', ],
        ],
        'GetPseudoIPv4Setting' => [
            'name' => 'GetPseudoIPv4Setting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$pseudo_ipv4',
            ],
            'input' => [ 'shape' => 'GetPseudoIPv4SettingRequestShape', ],
            'output' => [ 'shape' => 'GetPseudoIPv4SettingResponseShape', ],
        ],
        'ChangePseudoIPv4Setting' => [
            'name' => 'ChangePseudoIPv4Setting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$pseudo_ipv4',
            ],
            'input' => [ 'shape' => 'ChangePseudoIPv4SettingRequestShape', ],
            'output' => [ 'shape' => 'ChangePseudoIPv4SettingResponseShape', ],
        ],
        'GetWebSocketsSetting' => [
            'name' => 'GetWebSocketsSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$websockets',
            ],
            'input' => [ 'shape' => 'GetWebSocketsSettingRequestShape', ],
            'output' => [ 'shape' => 'GetWebSocketsSettingResponseShape', ],
        ],
        'ChangeWebSocketsSetting' => [
            'name' => 'ChangeWebSocketsSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$websockets',
            ],
            'input' => [ 'shape' => 'ChangeWebSocketsSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeWebSocketsSettingResponseShape', ],
        ],
        'GetImageResizingSetting' => [
            'name' => 'GetImageResizingSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$image_resizing',
            ],
            'input' => [ 'shape' => 'GetImageResizingSettingRequestShape', ],
            'output' => [ 'shape' => 'GetImageResizingSettingResponseShape', ],
        ],
        'GetHTTP2EdgePrioritizationSetting' => [
            'name' => 'GetHTTP2EdgePrioritizationSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$h2_prioritization',
            ],
            'input' => [ 'shape' => 'GetHTTP2EdgePrioritizationSettingRequestShape', ],
            'output' => [ 'shape' => 'GetHTTP2EdgePrioritizationSettingResponseShape', ],
        ],
        'ChangeHTTP2EdgePrioritizationSetting' => [
            'name' => 'ChangeHTTP2EdgePrioritizationSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$h2_prioritization',
            ],
            'input' => [ 'shape' => 'ChangeHTTP2EdgePrioritizationSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeHTTP2EdgePrioritizationSettingResponseShape', ],
        ],
        'ChangeMaxUploadSetting' => [
            'name' => 'ChangeMaxUploadSetting',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/zones/{zone_identifier}/settings$$max_upload',
            ],
            'input' => [ 'shape' => 'ChangeMaxUploadSettingRequestShape', ],
            'output' => [ 'shape' => 'ChangeMaxUploadSettingResponseShape', ],
        ],
    ],
    'shapes' => [
        'AccountInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DescribeDomainAlarmRes' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'alarmType' => [ 'type' => 'string', 'locationName' => 'alarmType', ],
                'detectItems' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'statCycle' => [ 'type' => 'integer', 'locationName' => 'statCycle', ],
                'statCycleUnit' => [ 'type' => 'string', 'locationName' => 'statCycleUnit', ],
                'statThreshold' => [ 'type' => 'long', 'locationName' => 'statThreshold', ],
                'alarmTimesLimit' => [ 'type' => 'integer', 'locationName' => 'alarmTimesLimit', ],
                'smsEnable' => [ 'type' => 'boolean', 'locationName' => 'smsEnable', ],
                'emailEnable' => [ 'type' => 'boolean', 'locationName' => 'emailEnable', ],
                'webMsEnable' => [ 'type' => 'boolean', 'locationName' => 'webMsEnable', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'domains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'contactUsers' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'contactGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'DescribeGlobalAlarmRes' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'alarmType' => [ 'type' => 'string', 'locationName' => 'alarmType', ],
                'statCycle' => [ 'type' => 'integer', 'locationName' => 'statCycle', ],
                'statCycleUnit' => [ 'type' => 'string', 'locationName' => 'statCycleUnit', ],
                'statThreshold' => [ 'type' => 'long', 'locationName' => 'statThreshold', ],
                'alarmTimesLimit' => [ 'type' => 'integer', 'locationName' => 'alarmTimesLimit', ],
                'smsEnable' => [ 'type' => 'boolean', 'locationName' => 'smsEnable', ],
                'emailEnable' => [ 'type' => 'boolean', 'locationName' => 'emailEnable', ],
                'webMsEnable' => [ 'type' => 'boolean', 'locationName' => 'webMsEnable', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'contactUsers' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'contactGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'ContactGroupRes' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'ContactUserRes' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'ActivityLog' => [
            'type' => 'structure',
            'members' => [
                'timestamp' => [ 'type' => 'string', 'locationName' => 'timestamp', ],
                'firewallAction' => [ 'type' => 'string', 'locationName' => 'firewallAction', ],
                'country' => [ 'type' => 'string', 'locationName' => 'country', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'httpMethod' => [ 'type' => 'string', 'locationName' => 'httpMethod', ],
                'httpProtocol' => [ 'type' => 'string', 'locationName' => 'httpProtocol', ],
                'requestUri' => [ 'type' => 'string', 'locationName' => 'requestUri', ],
                'firewallSource' => [ 'type' => 'string', 'locationName' => 'firewallSource', ],
                'userAgent' => [ 'type' => 'string', 'locationName' => 'userAgent', ],
                'ruleId' => [ 'type' => 'string', 'locationName' => 'ruleId', ],
                'group' => [ 'type' => 'string', 'locationName' => 'group', ],
                'ruleMessage' => [ 'type' => 'string', 'locationName' => 'ruleMessage', ],
            ],
        ],
        'AccessLog' => [
            'type' => 'structure',
            'members' => [
                'timestamp' => [ 'type' => 'string', 'locationName' => 'timestamp', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'country' => [ 'type' => 'string', 'locationName' => 'country', ],
                'httpMethod' => [ 'type' => 'string', 'locationName' => 'httpMethod', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'requestUri' => [ 'type' => 'string', 'locationName' => 'requestUri', ],
                'httpProtocol' => [ 'type' => 'string', 'locationName' => 'httpProtocol', ],
                'responseStatus' => [ 'type' => 'integer', 'locationName' => 'responseStatus', ],
                'responseBytes' => [ 'type' => 'integer', 'locationName' => 'responseBytes', ],
            ],
        ],
        'TopK' => [
            'type' => 'structure',
            'members' => [
                'topK' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
            ],
        ],
        'AnalyticsReportingFilter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'SimpleDateHistogram' => [
            'type' => 'structure',
            'members' => [
                'dataSeries' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'timeSeries' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
            ],
        ],
        'Bandwidth' => [
            'type' => 'structure',
            'members' => [
                'all' => [ 'type' => 'double', 'locationName' => 'all', ],
                'all_beautified' => [ 'type' => 'string', 'locationName' => 'all_beautified', ],
                'cached' => [ 'type' => 'double', 'locationName' => 'cached', ],
                'cached_beautified' => [ 'type' => 'string', 'locationName' => 'cached_beautified', ],
                'cachedPercentage' => [ 'type' => 'string', 'locationName' => 'cachedPercentage', ],
            ],
        ],
        'Requests' => [
            'type' => 'structure',
            'members' => [
                'all' => [ 'type' => 'double', 'locationName' => 'all', ],
            ],
        ],
        'Item' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'DateHistogram' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'timeseries' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'total' => [ 'type' => 'double', 'locationName' => 'total', ],
            ],
        ],
        'CdnSingleMetric' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'Totals' => [
            'type' => 'structure',
            'members' => [
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'requests' =>  [ 'shape' => 'Requests', ],
                'bandwidth' =>  [ 'shape' => 'Bandwidth', ],
            ],
        ],
        'ZoneAnalytics' => [
            'type' => 'structure',
            'members' => [
                'totals' =>  [ 'shape' => 'Totals', ],
                'timeseries' => [ 'type' => 'list', 'member' => [ 'shape' => 'Totals', ], ],
            ],
        ],
        'CdnZoneBandwidth' => [
            'type' => 'structure',
            'members' => [
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'maxBPS' => [ 'type' => 'double', 'locationName' => 'maxBPS', ],
                'maxBpsTs' => [ 'type' => 'double', 'locationName' => 'maxBpsTs', ],
                'trafficSum' => [ 'type' => 'double', 'locationName' => 'trafficSum', ],
                'requestSum' => [ 'type' => 'double', 'locationName' => 'requestSum', ],
            ],
        ],
        'CdnBandwidthMax' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
                'timestamp' => [ 'type' => 'double', 'locationName' => 'timestamp', ],
            ],
        ],
        'TopkAnalytics' => [
            'type' => 'structure',
            'members' => [
                'countries' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topCountries' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topDeviceTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topHosts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topPaths' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topContentTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topStatusCodes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topIPs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topUserAgents' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topHttpMethods' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topASNs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topFirewallRuleIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topFirewallRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topWafRuleIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topWafRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
            ],
        ],
        'AvailablePageRule' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'properties' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CertificatePack' => [
            'type' => 'structure',
            'members' => [
                'certificate_authority' => [ 'type' => 'string', 'locationName' => 'certificate_authority', ],
                'created_on' => [ 'type' => 'string', 'locationName' => 'created_on', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'ty_pe' => [ 'type' => 'string', 'locationName' => 'ty_pe', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'validation_method' => [ 'type' => 'string', 'locationName' => 'validation_method', ],
                'validation_records' => [ 'type' => 'list', 'member' => [ 'shape' => 'Validation_record', ], ],
                'validity_days' => [ 'type' => 'integer', 'locationName' => 'validity_days', ],
                'hosts' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'certificates' => [ 'type' => 'list', 'member' => [ 'shape' => 'Certificate', ], ],
                'primary_certificate' => [ 'type' => 'string', 'locationName' => 'primary_certificate', ],
            ],
        ],
        'Validation_record' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'txt_name' => [ 'type' => 'string', 'locationName' => 'txt_name', ],
                'txt_value' => [ 'type' => 'string', 'locationName' => 'txt_value', ],
            ],
        ],
        'Advanced' => [
            'type' => 'structure',
            'members' => [
                'allocated' => [ 'type' => 'double', 'locationName' => 'allocated', ],
                'used' => [ 'type' => 'double', 'locationName' => 'used', ],
            ],
        ],
        'Geo_restrictions' => [
            'type' => 'structure',
            'members' => [
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
            ],
        ],
        'Certificate' => [
            'type' => 'structure',
            'members' => [
                'priority' => [ 'type' => 'double', 'locationName' => 'priority', ],
                'expires_on' => [ 'type' => 'string', 'locationName' => 'expires_on', ],
                'hosts' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'zone_id' => [ 'type' => 'string', 'locationName' => 'zone_id', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'geo_restrictions' =>  [ 'shape' => 'Geo_restrictions', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
                'signature' => [ 'type' => 'string', 'locationName' => 'signature', ],
                'issuer' => [ 'type' => 'string', 'locationName' => 'issuer', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'uploaded_on' => [ 'type' => 'string', 'locationName' => 'uploaded_on', ],
                'bundle_method' => [ 'type' => 'string', 'locationName' => 'bundle_method', ],
            ],
        ],
        'CustomPage' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'created_on' => [ 'type' => 'string', 'locationName' => 'created_on', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'required_tokens' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'preview_target' => [ 'type' => 'string', 'locationName' => 'preview_target', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'Keyless_server' => [
            'type' => 'structure',
            'members' => [
                'port' => [ 'type' => 'double', 'locationName' => 'port', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'permissions' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
                'created_on' => [ 'type' => 'string', 'locationName' => 'created_on', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'CustomSSL' => [
            'type' => 'structure',
            'members' => [
                'priority' => [ 'type' => 'double', 'locationName' => 'priority', ],
                'keyless_server' =>  [ 'shape' => 'Keyless_server', ],
                'expires_on' => [ 'type' => 'string', 'locationName' => 'expires_on', ],
                'hosts' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'zone_id' => [ 'type' => 'string', 'locationName' => 'zone_id', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'geo_restrictions' =>  [ 'shape' => 'Geo_restrictions', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
                'signature' => [ 'type' => 'string', 'locationName' => 'signature', ],
                'issuer' => [ 'type' => 'string', 'locationName' => 'issuer', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'uploaded_on' => [ 'type' => 'string', 'locationName' => 'uploaded_on', ],
                'bundle_method' => [ 'type' => 'string', 'locationName' => 'bundle_method', ],
            ],
        ],
        'DnsRecord' => [
            'type' => 'structure',
            'members' => [
                'meta' =>  [ 'shape' => 'Meta', ],
                'locked' => [ 'type' => 'boolean', 'locationName' => 'locked', ],
                'data' =>  [ 'shape' => 'Data', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ttl' => [ 'type' => 'double', 'locationName' => 'ttl', ],
                'zone_id' => [ 'type' => 'string', 'locationName' => 'zone_id', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
                'created_on' => [ 'type' => 'string', 'locationName' => 'created_on', ],
                'proxiable' => [ 'type' => 'boolean', 'locationName' => 'proxiable', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'ty_pe' => [ 'type' => 'string', 'locationName' => 'ty_pe', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'proxied' => [ 'type' => 'boolean', 'locationName' => 'proxied', ],
                'zone_name' => [ 'type' => 'string', 'locationName' => 'zone_name', ],
                'priority' => [ 'type' => 'double', 'locationName' => 'priority', ],
            ],
        ],
        'Meta' => [
            'type' => 'structure',
            'members' => [
                'auto_added' => [ 'type' => 'boolean', 'locationName' => 'auto_added', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
            ],
        ],
        'Data' => [
            'type' => 'structure',
            'members' => [
                'size' => [ 'type' => 'double', 'locationName' => 'size', ],
                'altitude' => [ 'type' => 'double', 'locationName' => 'altitude', ],
                'long_degrees' => [ 'type' => 'double', 'locationName' => 'long_degrees', ],
                'lat_degrees' => [ 'type' => 'double', 'locationName' => 'lat_degrees', ],
                'precision_horz' => [ 'type' => 'double', 'locationName' => 'precision_horz', ],
                'precision_vert' => [ 'type' => 'double', 'locationName' => 'precision_vert', ],
                'long_direction' => [ 'type' => 'string', 'locationName' => 'long_direction', ],
                'long_minutes' => [ 'type' => 'double', 'locationName' => 'long_minutes', ],
                'long_seconds' => [ 'type' => 'double', 'locationName' => 'long_seconds', ],
                'lat_direction' => [ 'type' => 'string', 'locationName' => 'lat_direction', ],
                'lat_minutes' => [ 'type' => 'double', 'locationName' => 'lat_minutes', ],
                'lat_seconds' => [ 'type' => 'double', 'locationName' => 'lat_seconds', ],
                'service' => [ 'type' => 'string', 'locationName' => 'service', ],
                'proto' => [ 'type' => 'string', 'locationName' => 'proto', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'priority' => [ 'type' => 'double', 'locationName' => 'priority', ],
                'weight' => [ 'type' => 'double', 'locationName' => 'weight', ],
                'port' => [ 'type' => 'double', 'locationName' => 'port', ],
                'target' => [ 'type' => 'string', 'locationName' => 'target', ],
                'ty_pe' => [ 'type' => 'double', 'locationName' => 'ty_pe', ],
                'key_tag' => [ 'type' => 'double', 'locationName' => 'key_tag', ],
                'algorithm' => [ 'type' => 'double', 'locationName' => 'algorithm', ],
                'certificate' => [ 'type' => 'string', 'locationName' => 'certificate', ],
                'flags' => [ 'type' => 'double', 'locationName' => 'flags', ],
                'protocol' => [ 'type' => 'double', 'locationName' => 'protocol', ],
                'public_key' => [ 'type' => 'string', 'locationName' => 'public_key', ],
                'digest_type' => [ 'type' => 'double', 'locationName' => 'digest_type', ],
                'digest' => [ 'type' => 'string', 'locationName' => 'digest', ],
                'order' => [ 'type' => 'double', 'locationName' => 'order', ],
                'preference' => [ 'type' => 'double', 'locationName' => 'preference', ],
                'regex' => [ 'type' => 'string', 'locationName' => 'regex', ],
                'replacement' => [ 'type' => 'string', 'locationName' => 'replacement', ],
                'usage' => [ 'type' => 'double', 'locationName' => 'usage', ],
                'selector' => [ 'type' => 'double', 'locationName' => 'selector', ],
                'matching_type' => [ 'type' => 'double', 'locationName' => 'matching_type', ],
                'fingerprint' => [ 'type' => 'string', 'locationName' => 'fingerprint', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
            ],
        ],
        'CAAdata' => [
            'type' => 'structure',
            'members' => [
                'flags' => [ 'type' => 'double', 'locationName' => 'flags', ],
                'tag' => [ 'type' => 'string', 'locationName' => 'tag', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'SRVdata' => [
            'type' => 'structure',
            'members' => [
                'priority' => [ 'type' => 'double', 'locationName' => 'priority', ],
                'weight' => [ 'type' => 'double', 'locationName' => 'weight', ],
                'port' => [ 'type' => 'double', 'locationName' => 'port', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'proto' => [ 'type' => 'string', 'locationName' => 'proto', ],
                'service' => [ 'type' => 'string', 'locationName' => 'service', ],
                'target' => [ 'type' => 'string', 'locationName' => 'target', ],
            ],
        ],
        'GetEsLogReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'remoteAddr' => [ 'type' => 'string', 'locationName' => 'remoteAddr', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'logType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'logId' => [ 'type' => 'string', 'locationName' => 'logId', ],
                'start' => [ 'type' => 'integer', 'locationName' => 'start', ],
                'end' => [ 'type' => 'integer', 'locationName' => 'end', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
            ],
        ],
        'GetAntiEventReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'antiType' => [ 'type' => 'string', 'locationName' => 'antiType', ],
                'remoteAddr' => [ 'type' => 'string', 'locationName' => 'remoteAddr', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'start' => [ 'type' => 'integer', 'locationName' => 'start', ],
                'end' => [ 'type' => 'integer', 'locationName' => 'end', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'sortKey' => [ 'type' => 'string', 'locationName' => 'sortKey', ],
                'sortDesc' => [ 'type' => 'string', 'locationName' => 'sortDesc', ],
                'isExport' => [ 'type' => 'boolean', 'locationName' => 'isExport', ],
            ],
        ],
        'AntiValue' => [
            'type' => 'structure',
            'members' => [
                'wafAnti' => [ 'type' => 'integer', 'locationName' => 'wafAnti', ],
                'ccAnti' => [ 'type' => 'integer', 'locationName' => 'ccAnti', ],
                'aclAnti' => [ 'type' => 'integer', 'locationName' => 'aclAnti', ],
                'botAnti' => [ 'type' => 'integer', 'locationName' => 'botAnti', ],
            ],
        ],
        'Qps' => [
            'type' => 'structure',
            'members' => [
                'qpsTotal' =>  [ 'shape' => 'ChartItemValue', ],
                'wafAnti' =>  [ 'shape' => 'ChartItemValue', ],
                'botAnti' =>  [ 'shape' => 'ChartItemValue', ],
                'ccAnti' =>  [ 'shape' => 'ChartItemValue', ],
                'aclAnti' =>  [ 'shape' => 'ChartItemValue', ],
                'cacheTotal' =>  [ 'shape' => 'ChartItemValue', ],
            ],
        ],
        'GetWafDataReq' => [
            'type' => 'structure',
            'members' => [
                'userPin' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'long', 'locationName' => 'endTime', ],
            ],
        ],
        'EsLogFile' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
            ],
        ],
        'GetChartReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'start' => [ 'type' => 'integer', 'locationName' => 'start', ],
                'end' => [ 'type' => 'integer', 'locationName' => 'end', ],
                'isSum' => [ 'type' => 'boolean', 'locationName' => 'isSum', ],
                'isWafRule' => [ 'type' => 'boolean', 'locationName' => 'isWafRule', ],
                'isRs' => [ 'type' => 'boolean', 'locationName' => 'isRs', ],
                'pieItem' => [ 'type' => 'string', 'locationName' => 'pieItem', ],
                'statusCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'isStaCode' => [ 'type' => 'boolean', 'locationName' => 'isStaCode', ],
            ],
        ],
        'UserPin2Ips' => [
            'type' => 'structure',
            'members' => [
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'ips' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserPinIpInfo', ], ],
            ],
        ],
        'WafTopN' => [
            'type' => 'structure',
            'members' => [
                'addr_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
                'url_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
                'area_top50' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
            ],
        ],
        'LogReportReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'logId' => [ 'type' => 'string', 'locationName' => 'logId', ],
                'accessTime' => [ 'type' => 'long', 'locationName' => 'accessTime', ],
            ],
        ],
        'UserPinIpInfo' => [
            'type' => 'structure',
            'members' => [
                'bandwidth' => [ 'type' => 'long', 'locationName' => 'bandwidth', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
            ],
        ],
        'StatusCodeData' => [
            'type' => 'structure',
            'members' => [
                'domainTop10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopCodeValue', ], ],
                'urlTop10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopCodeValue', ], ],
                'statusCodeTotal' =>  [ 'shape' => 'ChartItemValue', ],
                'statusCodePie' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
            ],
        ],
        'GetStatusCodeReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'start' => [ 'type' => 'integer', 'locationName' => 'start', ],
                'end' => [ 'type' => 'integer', 'locationName' => 'end', ],
                'statusCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'isStaCode' => [ 'type' => 'boolean', 'locationName' => 'isStaCode', ],
            ],
        ],
        'EsLogEvent' => [
            'type' => 'structure',
            'members' => [
                'accessTime' => [ 'type' => 'long', 'locationName' => 'accessTime', ],
                'remoteAddr' => [ 'type' => 'string', 'locationName' => 'remoteAddr', ],
                'remotePort' => [ 'type' => 'string', 'locationName' => 'remotePort', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'method' => [ 'type' => 'string', 'locationName' => 'method', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'payLoad' => [ 'type' => 'string', 'locationName' => 'payLoad', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'logType' => [ 'type' => 'string', 'locationName' => 'logType', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'upstreamErr' => [ 'type' => 'string', 'locationName' => 'upstreamErr', ],
                'timeLocal' => [ 'type' => 'string', 'locationName' => 'timeLocal', ],
                'hostname' => [ 'type' => 'string', 'locationName' => 'hostname', ],
                'bytesSent' => [ 'type' => 'string', 'locationName' => 'bytesSent', ],
                'requestLength' => [ 'type' => 'string', 'locationName' => 'requestLength', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'serverAddr' => [ 'type' => 'string', 'locationName' => 'serverAddr', ],
                'serverPort' => [ 'type' => 'string', 'locationName' => 'serverPort', ],
                'upstreamHttpName' => [ 'type' => 'string', 'locationName' => 'upstreamHttpName', ],
                'upstreamAddr' => [ 'type' => 'string', 'locationName' => 'upstreamAddr', ],
                'upstreamHttpPort' => [ 'type' => 'string', 'locationName' => 'upstreamHttpPort', ],
                'upstreamConnectTime' => [ 'type' => 'string', 'locationName' => 'upstreamConnectTime', ],
                'upstreamHeaderTime' => [ 'type' => 'string', 'locationName' => 'upstreamHeaderTime', ],
                'upstreamResponseTime' => [ 'type' => 'string', 'locationName' => 'upstreamResponseTime', ],
                'requestTime' => [ 'type' => 'string', 'locationName' => 'requestTime', ],
                'httpUserAgent' => [ 'type' => 'string', 'locationName' => 'httpUserAgent', ],
                'antiReason' => [ 'type' => 'string', 'locationName' => 'antiReason', ],
                'httpReferer' => [ 'type' => 'string', 'locationName' => 'httpReferer', ],
                'scheme' => [ 'type' => 'string', 'locationName' => 'scheme', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'sentHttpContentRange' => [ 'type' => 'string', 'locationName' => 'sentHttpContentRange', ],
                'antiRemoteAddr' => [ 'type' => 'string', 'locationName' => 'antiRemoteAddr', ],
                'antiStatus' => [ 'type' => 'string', 'locationName' => 'antiStatus', ],
                'antiReqRaw' => [ 'type' => 'string', 'locationName' => 'antiReqRaw', ],
                'antiRespRaw' => [ 'type' => 'string', 'locationName' => 'antiRespRaw', ],
                'antiGeo' => [ 'type' => 'string', 'locationName' => 'antiGeo', ],
                'antiRiskFid' => [ 'type' => 'string', 'locationName' => 'antiRiskFid', ],
                'antiRiskRaw' => [ 'type' => 'string', 'locationName' => 'antiRiskRaw', ],
            ],
        ],
        'ChartItemValue' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'KVPair' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'GetUserPinVipInfoReq' => [
            'type' => 'structure',
            'members' => [
                'userPins' => [ 'type' => 'string', 'locationName' => 'userPins', ],
            ],
        ],
        'TopN' => [
            'type' => 'structure',
            'members' => [
                'addr_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
                'area_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
                'url_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
                'ua_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
                'domain_anti_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopAntiValue', ], ],
                'url_anti_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopAntiValue', ], ],
            ],
        ],
        'ListEsLogDownloadReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'start' => [ 'type' => 'integer', 'locationName' => 'start', ],
                'end' => [ 'type' => 'integer', 'locationName' => 'end', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
            ],
        ],
        'TopAntiValue' => [
            'type' => 'structure',
            'members' => [
                'rank' => [ 'type' => 'integer', 'locationName' => 'rank', ],
                'src' => [ 'type' => 'string', 'locationName' => 'src', ],
                'pv' => [ 'type' => 'integer', 'locationName' => 'pv', ],
                'count' =>  [ 'shape' => 'AntiValue', ],
            ],
        ],
        'TopCodeValue' => [
            'type' => 'structure',
            'members' => [
                'rank' => [ 'type' => 'integer', 'locationName' => 'rank', ],
                'src' => [ 'type' => 'string', 'locationName' => 'src', ],
                'pv' => [ 'type' => 'integer', 'locationName' => 'pv', ],
                'status_code' => [ 'type' => 'list', 'member' => [ 'shape' => 'KVPair', ], ],
            ],
        ],
        'AclTopN' => [
            'type' => 'structure',
            'members' => [
                'addr_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
                'rulename_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
            ],
        ],
        'Exception' => [
            'type' => 'structure',
            'members' => [
                's499' =>  [ 'shape' => 'ChartItemValue', ],
                's503' =>  [ 'shape' => 'ChartItemValue', ],
                's404' =>  [ 'shape' => 'ChartItemValue', ],
                's502' =>  [ 'shape' => 'ChartItemValue', ],
                's504' =>  [ 'shape' => 'ChartItemValue', ],
                's5XX' =>  [ 'shape' => 'ChartItemValue', ],
            ],
        ],
        'Bps' => [
            'type' => 'structure',
            'members' => [
                'upBps' =>  [ 'shape' => 'ChartItemValue', ],
                'downBps' =>  [ 'shape' => 'ChartItemValue', ],
            ],
        ],
        'CcTopN' => [
            'type' => 'structure',
            'members' => [
                'addr_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
                'url_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
            ],
        ],
        'AntiEvent' => [
            'type' => 'structure',
            'members' => [
                'remoteAddr' => [ 'type' => 'string', 'locationName' => 'remoteAddr', ],
                'csaInfo' => [ 'type' => 'string', 'locationName' => 'csaInfo', ],
                'riskLevel' => [ 'type' => 'string', 'locationName' => 'riskLevel', ],
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'accessTime' => [ 'type' => 'long', 'locationName' => 'accessTime', ],
                'method' => [ 'type' => 'string', 'locationName' => 'method', ],
                'attackType' => [ 'type' => 'string', 'locationName' => 'attackType', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'payLoad' => [ 'type' => 'string', 'locationName' => 'payLoad', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'logId' => [ 'type' => 'string', 'locationName' => 'logId', ],
                'isReported' => [ 'type' => 'integer', 'locationName' => 'isReported', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'upstreamErr' => [ 'type' => 'string', 'locationName' => 'upstreamErr', ],
                'skipExist' => [ 'type' => 'integer', 'locationName' => 'skipExist', ],
                'denyExist' => [ 'type' => 'integer', 'locationName' => 'denyExist', ],
                'antiReqRaw' => [ 'type' => 'string', 'locationName' => 'antiReqRaw', ],
            ],
        ],
        'GetEsLogUrlReq' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'BotTopN' => [
            'type' => 'structure',
            'members' => [
                'addr_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
                'url_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
            ],
        ],
        'TopValue' => [
            'type' => 'structure',
            'members' => [
                'rank' => [ 'type' => 'integer', 'locationName' => 'rank', ],
                'src' => [ 'type' => 'string', 'locationName' => 'src', ],
                'pv' => [ 'type' => 'integer', 'locationName' => 'pv', ],
            ],
        ],
        'RefreshTask' => [
            'type' => 'structure',
            'members' => [
                'createDate' => [ 'type' => 'string', 'locationName' => 'createDate', ],
                'failed' => [ 'type' => 'float', 'locationName' => 'failed', ],
                'success' => [ 'type' => 'float', 'locationName' => 'success', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'retryStatus' => [ 'type' => 'string', 'locationName' => 'retryStatus', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'urlTasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'UrlTask', ], ],
            ],
        ],
        'UrlTask' => [
            'type' => 'structure',
            'members' => [
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'UrlItemV2' => [
            'type' => 'structure',
            'members' => [
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'urlId' => [ 'type' => 'string', 'locationName' => 'urlId', ],
                'callbackUrl' => [ 'type' => 'string', 'locationName' => 'callbackUrl', ],
            ],
        ],
        'SubUserRefreshLimit' => [
            'type' => 'structure',
            'members' => [
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'refreshCount' => [ 'type' => 'long', 'locationName' => 'refreshCount', ],
                'dirCount' => [ 'type' => 'long', 'locationName' => 'dirCount', ],
                'prefetchCount' => [ 'type' => 'long', 'locationName' => 'prefetchCount', ],
            ],
        ],
        'UrlItem' => [
            'type' => 'structure',
            'members' => [
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'urlId' => [ 'type' => 'long', 'locationName' => 'urlId', ],
            ],
        ],
        'Filter' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'expression' => [ 'type' => 'string', 'locationName' => 'expression', ],
                'paused' => [ 'type' => 'boolean', 'locationName' => 'paused', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'ref' => [ 'type' => 'string', 'locationName' => 'ref', ],
            ],
        ],
        'Query' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Path' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Action_parameters' => [
            'type' => 'structure',
            'members' => [
                'uri' =>  [ 'shape' => 'Uri', ],
            ],
        ],
        'FirewallRule' => [
            'type' => 'structure',
            'members' => [
                'products' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'priority' => [ 'type' => 'double', 'locationName' => 'priority', ],
                'paused' => [ 'type' => 'boolean', 'locationName' => 'paused', ],
                'ref' => [ 'type' => 'string', 'locationName' => 'ref', ],
                'action_parameters' =>  [ 'shape' => 'Action_parameters', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'filter' =>  [ 'shape' => 'Filter', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'Uri' => [
            'type' => 'structure',
            'members' => [
                'path' =>  [ 'shape' => 'Path', ],
                'query' =>  [ 'shape' => 'Query', ],
            ],
        ],
        'DescribePackRes' => [
            'type' => 'structure',
            'members' => [
                'packType' => [ 'type' => 'string', 'locationName' => 'packType', ],
                'packMode' => [ 'type' => 'string', 'locationName' => 'packMode', ],
                'flowLimit' => [ 'type' => 'long', 'locationName' => 'flowLimit', ],
                'availableZoneNum' => [ 'type' => 'integer', 'locationName' => 'availableZoneNum', ],
                'cdnSpeedTraffic' => [ 'type' => 'integer', 'locationName' => 'cdnSpeedTraffic', ],
                'ddosBaseProtect' => [ 'type' => 'integer', 'locationName' => 'ddosBaseProtect', ],
                'ddosElasticProtect' => [ 'type' => 'boolean', 'locationName' => 'ddosElasticProtect', ],
                'freeCert' => [ 'type' => 'boolean', 'locationName' => 'freeCert', ],
                'botManage' => [ 'type' => 'boolean', 'locationName' => 'botManage', ],
                'waf' => [ 'type' => 'boolean', 'locationName' => 'waf', ],
                'customUploadCert' => [ 'type' => 'integer', 'locationName' => 'customUploadCert', ],
                'ccAttackQpsSingle' => [ 'type' => 'integer', 'locationName' => 'ccAttackQpsSingle', ],
                'ccAttackQpsTotal' => [ 'type' => 'integer', 'locationName' => 'ccAttackQpsTotal', ],
                'dedicatedIp' => [ 'type' => 'integer', 'locationName' => 'dedicatedIp', ],
                'availableNodeNum' => [ 'type' => 'integer', 'locationName' => 'availableNodeNum', ],
                'specialCertNum' => [ 'type' => 'integer', 'locationName' => 'specialCertNum', ],
                'trueClientIp' => [ 'type' => 'boolean', 'locationName' => 'trueClientIp', ],
                'originErrorPagePass' => [ 'type' => 'boolean', 'locationName' => 'originErrorPagePass', ],
                'staticContentCache' => [ 'type' => 'boolean', 'locationName' => 'staticContentCache', ],
                'customClearByUrl' => [ 'type' => 'boolean', 'locationName' => 'customClearByUrl', ],
                'advanceCustomClear' => [ 'type' => 'boolean', 'locationName' => 'advanceCustomClear', ],
                'minCacheTtl' => [ 'type' => 'integer', 'locationName' => 'minCacheTtl', ],
                'clientUploadFileLimit' => [ 'type' => 'integer', 'locationName' => 'clientUploadFileLimit', ],
                'maxCacheFileLimit' => [ 'type' => 'integer', 'locationName' => 'maxCacheFileLimit', ],
                'urlPrefetch' => [ 'type' => 'boolean', 'locationName' => 'urlPrefetch', ],
                'pageRuleNum' => [ 'type' => 'integer', 'locationName' => 'pageRuleNum', ],
                'imageOptimize' => [ 'type' => 'boolean', 'locationName' => 'imageOptimize', ],
                'http2' => [ 'type' => 'boolean', 'locationName' => 'http2', ],
                'developMode' => [ 'type' => 'boolean', 'locationName' => 'developMode', ],
                'queryStringSort' => [ 'type' => 'boolean', 'locationName' => 'queryStringSort', ],
                'customNameServer' => [ 'type' => 'boolean', 'locationName' => 'customNameServer', ],
                'generalCert' => [ 'type' => 'boolean', 'locationName' => 'generalCert', ],
                'customCertNum' => [ 'type' => 'integer', 'locationName' => 'customCertNum', ],
                'websiteAnalyseTimeSpecs' => [ 'type' => 'integer', 'locationName' => 'websiteAnalyseTimeSpecs', ],
                'dnsAnalyseTime' => [ 'type' => 'integer', 'locationName' => 'dnsAnalyseTime', ],
                'attackAnalyseTime' => [ 'type' => 'integer', 'locationName' => 'attackAnalyseTime', ],
                'auditLog' => [ 'type' => 'boolean', 'locationName' => 'auditLog', ],
                'requestLog' => [ 'type' => 'boolean', 'locationName' => 'requestLog', ],
                'owaspCoreRule' => [ 'type' => 'boolean', 'locationName' => 'owaspCoreRule', ],
                'builtInPredefinedRule' => [ 'type' => 'boolean', 'locationName' => 'builtInPredefinedRule', ],
                'firewallRuleNum' => [ 'type' => 'integer', 'locationName' => 'firewallRuleNum', ],
                'firewalRegularRule' => [ 'type' => 'boolean', 'locationName' => 'firewalRegularRule', ],
            ],
        ],
        'DescribeInstancesRes' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'packType' => [ 'type' => 'string', 'locationName' => 'packType', ],
                'chargeState' => [ 'type' => 'string', 'locationName' => 'chargeState', ],
                'zonePackNum' => [ 'type' => 'integer', 'locationName' => 'zonePackNum', ],
                'trafficExpansion' => [ 'type' => 'integer', 'locationName' => 'trafficExpansion', ],
                'flowUsedCnt' => [ 'type' => 'long', 'locationName' => 'flowUsedCnt', ],
                'flowRemain' => [ 'type' => 'double', 'locationName' => 'flowRemain', ],
                'totalFlowStr' => [ 'type' => 'string', 'locationName' => 'totalFlowStr', ],
                'usedFlowStr' => [ 'type' => 'string', 'locationName' => 'usedFlowStr', ],
                'remainingFlowStr' => [ 'type' => 'string', 'locationName' => 'remainingFlowStr', ],
                'packMode' => [ 'type' => 'string', 'locationName' => 'packMode', ],
                'memo' => [ 'type' => 'string', 'locationName' => 'memo', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'packageInfo' =>  [ 'shape' => 'DescribePackRes', ],
            ],
        ],
        'KeylessSSL' => [
            'type' => 'structure',
            'members' => [
                'port' => [ 'type' => 'double', 'locationName' => 'port', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'permissions' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
                'created_on' => [ 'type' => 'string', 'locationName' => 'created_on', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DescribeOssUrlRes' => [
            'type' => 'structure',
            'members' => [
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'DescribeOssRes' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'double', 'locationName' => 'id', ],
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'intervalType' => [ 'type' => 'integer', 'locationName' => 'intervalType', ],
                'logType' => [ 'type' => 'integer', 'locationName' => 'logType', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
                'byteCount' => [ 'type' => 'string', 'locationName' => 'byteCount', ],
                'gzipByteCount' => [ 'type' => 'string', 'locationName' => 'gzipByteCount', ],
                'lastTime' => [ 'type' => 'string', 'locationName' => 'lastTime', ],
                'ossKey' => [ 'type' => 'string', 'locationName' => 'ossKey', ],
            ],
        ],
        'LogField' => [
            'type' => 'structure',
            'members' => [
                'fieldName' => [ 'type' => 'string', 'locationName' => 'fieldName', ],
                'fieldType' => [ 'type' => 'string', 'locationName' => 'fieldType', ],
                'fieldDescription' => [ 'type' => 'string', 'locationName' => 'fieldDescription', ],
            ],
        ],
        'LogpushJob' => [
            'type' => 'structure',
            'members' => [
                'zone_name' => [ 'type' => 'string', 'locationName' => 'zone_name', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'last_complete' => [ 'type' => 'string', 'locationName' => 'last_complete', ],
                'logpull_options' => [ 'type' => 'string', 'locationName' => 'logpull_options', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'error_message' => [ 'type' => 'string', 'locationName' => 'error_message', ],
                'destination_conf' => [ 'type' => 'string', 'locationName' => 'destination_conf', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'service' => [ 'type' => 'string', 'locationName' => 'service', ],
                'dataset' => [ 'type' => 'string', 'locationName' => 'dataset', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'frequency' => [ 'type' => 'string', 'locationName' => 'frequency', ],
                'last_error' => [ 'type' => 'string', 'locationName' => 'last_error', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'LogModule' => [
            'type' => 'structure',
            'members' => [
                'moduleName' => [ 'type' => 'string', 'locationName' => 'moduleName', ],
                'moduleFields' => [ 'type' => 'list', 'member' => [ 'shape' => 'LogField', ], ],
            ],
        ],
        'NetworkDateHistogram' => [
            'type' => 'structure',
            'members' => [
                'resultType' => [ 'type' => 'string', 'locationName' => 'resultType', ],
                'dataSeries' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'timeSeries' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
            ],
        ],
        'IpMaxBps' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'maxBps' => [ 'type' => 'double', 'locationName' => 'maxBps', ],
                'zones' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'SuspicionBehavior' => [
            'type' => 'structure',
            'members' => [
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'packType' => [ 'type' => 'string', 'locationName' => 'packType', ],
                'chargeState' => [ 'type' => 'string', 'locationName' => 'chargeState', ],
                'instanceExpireTime' => [ 'type' => 'string', 'locationName' => 'instanceExpireTime', ],
                'originIp' => [ 'type' => 'string', 'locationName' => 'originIp', ],
                'countryRegion' => [ 'type' => 'string', 'locationName' => 'countryRegion', ],
                'level' => [ 'type' => 'string', 'locationName' => 'level', ],
                'windowStartTime' => [ 'type' => 'string', 'locationName' => 'windowStartTime', ],
                'cnt' => [ 'type' => 'long', 'locationName' => 'cnt', ],
                'ws101Cnt' => [ 'type' => 'long', 'locationName' => 'ws101Cnt', ],
            ],
        ],
        'ZoneTraffic' => [
            'type' => 'structure',
            'members' => [
                'zonename' => [ 'type' => 'string', 'locationName' => 'zonename', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'packType' => [ 'type' => 'string', 'locationName' => 'packType', ],
                'chargeState' => [ 'type' => 'string', 'locationName' => 'chargeState', ],
                'instanceExpireTime' => [ 'type' => 'string', 'locationName' => 'instanceExpireTime', ],
                'bytes' => [ 'type' => 'long', 'locationName' => 'bytes', ],
                'totalFlowStr' => [ 'type' => 'string', 'locationName' => 'totalFlowStr', ],
                'usedFlowStr' => [ 'type' => 'string', 'locationName' => 'usedFlowStr', ],
                'remainingFlowStr' => [ 'type' => 'string', 'locationName' => 'remainingFlowStr', ],
                'instanceUsedStatus' => [ 'type' => 'string', 'locationName' => 'instanceUsedStatus', ],
                'icpStatus' => [ 'type' => 'boolean', 'locationName' => 'icpStatus', ],
            ],
        ],
        'ZoneBandwidth' => [
            'type' => 'structure',
            'members' => [
                'zonename' => [ 'type' => 'string', 'locationName' => 'zonename', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'packType' => [ 'type' => 'string', 'locationName' => 'packType', ],
                'chargeState' => [ 'type' => 'string', 'locationName' => 'chargeState', ],
                'instanceExpireTime' => [ 'type' => 'string', 'locationName' => 'instanceExpireTime', ],
                'bps' => [ 'type' => 'long', 'locationName' => 'bps', ],
                'totalFlowStr' => [ 'type' => 'string', 'locationName' => 'totalFlowStr', ],
                'usedFlowStr' => [ 'type' => 'string', 'locationName' => 'usedFlowStr', ],
                'remainingFlowStr' => [ 'type' => 'string', 'locationName' => 'remainingFlowStr', ],
                'instanceUsedStatus' => [ 'type' => 'string', 'locationName' => 'instanceUsedStatus', ],
                'icpStatus' => [ 'type' => 'boolean', 'locationName' => 'icpStatus', ],
            ],
        ],
        'GetAllInstancesRes' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
            ],
        ],
        'DescribePopIpRes' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'coloId' => [ 'type' => 'integer', 'locationName' => 'coloId', ],
                'domains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ipIsptype' => [ 'type' => 'integer', 'locationName' => 'ipIsptype', ],
            ],
        ],
        'OpZoneListRes' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'zone' => [ 'type' => 'string', 'locationName' => 'zone', ],
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'ty_pe' => [ 'type' => 'string', 'locationName' => 'ty_pe', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'nameServers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'verificationKey' => [ 'type' => 'string', 'locationName' => 'verificationKey', ],
                'ips' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ipType' => [ 'type' => 'string', 'locationName' => 'ipType', ],
                'internalId' => [ 'type' => 'long', 'locationName' => 'internalId', ],
            ],
        ],
        'PoPDetailRes' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'city' => [ 'type' => 'string', 'locationName' => 'city', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'isp' => [ 'type' => 'string', 'locationName' => 'isp', ],
                'routing_modes' => [ 'type' => 'object', 'locationName' => 'routing_modes', ],
                'service_levels' => [ 'type' => 'object', 'locationName' => 'service_levels', ],
            ],
        ],
        'DescribeZonesRes' => [
            'type' => 'structure',
            'members' => [
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'paused' => [ 'type' => 'boolean', 'locationName' => 'paused', ],
                'ty_pe' => [ 'type' => 'string', 'locationName' => 'ty_pe', ],
                'development_mode' => [ 'type' => 'integer', 'locationName' => 'development_mode', ],
                'verification_key' => [ 'type' => 'string', 'locationName' => 'verification_key', ],
                'cname_suffix' => [ 'type' => 'string', 'locationName' => 'cname_suffix', ],
                'original_name_servers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'original_registrar' => [ 'type' => 'string', 'locationName' => 'original_registrar', ],
                'original_dnshost' => [ 'type' => 'string', 'locationName' => 'original_dnshost', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
                'created_on' => [ 'type' => 'string', 'locationName' => 'created_on', ],
                'activated_on' => [ 'type' => 'string', 'locationName' => 'activated_on', ],
                'name_servers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ips' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ipType' => [ 'type' => 'string', 'locationName' => 'ipType', ],
            ],
        ],
        'ServiceLevels' => [
            'type' => 'structure',
            'members' => [
                'jdc_ent' => [ 'type' => 'string', 'locationName' => 'jdc_ent', ],
                'jdc_pro' => [ 'type' => 'string', 'locationName' => 'jdc_pro', ],
                'jdc_free' => [ 'type' => 'string', 'locationName' => 'jdc_free', ],
                'jdc_basic' => [ 'type' => 'string', 'locationName' => 'jdc_basic', ],
                'jdc_flagship' => [ 'type' => 'string', 'locationName' => 'jdc_flagship', ],
            ],
        ],
        'RoutingModes' => [
            'type' => 'structure',
            'members' => [
                'ipv4' => [ 'type' => 'string', 'locationName' => 'ipv4', ],
                'ipv6' => [ 'type' => 'string', 'locationName' => 'ipv6', ],
            ],
        ],
        'DescribeUrlBlockRegulationResp' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'regulationName' => [ 'type' => 'string', 'locationName' => 'regulationName', ],
                'blockUrl' => [ 'type' => 'string', 'locationName' => 'blockUrl', ],
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
                'filterId' => [ 'type' => 'string', 'locationName' => 'filterId', ],
                'firewallRuleId' => [ 'type' => 'string', 'locationName' => 'firewallRuleId', ],
                'opType' => [ 'type' => 'integer', 'locationName' => 'opType', ],
                'enableRegulation' => [ 'type' => 'integer', 'locationName' => 'enableRegulation', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
            ],
        ],
        'ChangePoPStatusConfig' => [
            'type' => 'structure',
            'members' => [
                'routingModes' =>  [ 'shape' => 'RoutingModes', ],
                'serviceLevels' =>  [ 'shape' => 'ServiceLevels', ],
            ],
        ],
        'DescribeCandidateZoneRes' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DescribeBanG2CZoneStatusRes' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'reason' => [ 'type' => 'integer', 'locationName' => 'reason', ],
            ],
        ],
        'OpZoneRecordDetails' => [
            'type' => 'structure',
            'members' => [
                'opZoneRecords' =>  [ 'shape' => 'OpZoneRecords', ],
                'sameContentZones' => [ 'type' => 'list', 'member' => [ 'shape' => 'SameContentZones', ], ],
            ],
        ],
        'ListAuditLog' => [
            'type' => 'structure',
            'members' => [
                'auditId' => [ 'type' => 'string', 'locationName' => 'auditId', ],
                'auditWhen' => [ 'type' => 'string', 'locationName' => 'auditWhen', ],
                'metadataAction' => [ 'type' => 'string', 'locationName' => 'metadataAction', ],
                'metadataId' => [ 'type' => 'string', 'locationName' => 'metadataId', ],
                'metadataName' => [ 'type' => 'string', 'locationName' => 'metadataName', ],
                'actionType' => [ 'type' => 'string', 'locationName' => 'actionType', ],
                'actionResult' => [ 'type' => 'boolean', 'locationName' => 'actionResult', ],
                'actorUser' => [ 'type' => 'string', 'locationName' => 'actorUser', ],
                'actorId' => [ 'type' => 'string', 'locationName' => 'actorId', ],
                'actorIp' => [ 'type' => 'string', 'locationName' => 'actorIp', ],
                'actorType' => [ 'type' => 'string', 'locationName' => 'actorType', ],
                'interfaceType' => [ 'type' => 'string', 'locationName' => 'interfaceType', ],
                'ownerId' => [ 'type' => 'string', 'locationName' => 'ownerId', ],
                'oldValue' => [ 'type' => 'string', 'locationName' => 'oldValue', ],
                'newValue' => [ 'type' => 'string', 'locationName' => 'newValue', ],
            ],
        ],
        'OpZoneDetails' => [
            'type' => 'structure',
            'members' => [
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'zoneStatus' => [ 'type' => 'string', 'locationName' => 'zoneStatus', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'packType' => [ 'type' => 'string', 'locationName' => 'packType', ],
                'chargeState' => [ 'type' => 'string', 'locationName' => 'chargeState', ],
                'icpStatus' => [ 'type' => 'boolean', 'locationName' => 'icpStatus', ],
                'zoneCreateTime' => [ 'type' => 'string', 'locationName' => 'zoneCreateTime', ],
                'instanceExpireTime' => [ 'type' => 'string', 'locationName' => 'instanceExpireTime', ],
                'pauseStatus' => [ 'type' => 'boolean', 'locationName' => 'pauseStatus', ],
                'lockdownStatus' => [ 'type' => 'boolean', 'locationName' => 'lockdownStatus', ],
                'blackListEnable' => [ 'type' => 'boolean', 'locationName' => 'blackListEnable', ],
                'whiteListEnable' => [ 'type' => 'boolean', 'locationName' => 'whiteListEnable', ],
                'totalFlowStr' => [ 'type' => 'string', 'locationName' => 'totalFlowStr', ],
                'usedFlowStr' => [ 'type' => 'string', 'locationName' => 'usedFlowStr', ],
                'remainingFlowStr' => [ 'type' => 'string', 'locationName' => 'remainingFlowStr', ],
                'cnameSuffix' => [ 'type' => 'string', 'locationName' => 'cnameSuffix', ],
                'nameServers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'verificationKey' => [ 'type' => 'string', 'locationName' => 'verificationKey', ],
                'zoneType' => [ 'type' => 'string', 'locationName' => 'zoneType', ],
                'ipType' => [ 'type' => 'integer', 'locationName' => 'ipType', ],
            ],
        ],
        'OpZoneRecords' => [
            'type' => 'structure',
            'members' => [
                'recordId' => [ 'type' => 'string', 'locationName' => 'recordId', ],
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'ttl' => [ 'type' => 'integer', 'locationName' => 'ttl', ],
                'proxied' => [ 'type' => 'boolean', 'locationName' => 'proxied', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'proxiable' => [ 'type' => 'boolean', 'locationName' => 'proxiable', ],
                'priority' => [ 'type' => 'string', 'locationName' => 'priority', ],
            ],
        ],
        'SameContentZones' => [
            'type' => 'structure',
            'members' => [
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
            ],
        ],
        'OpZoneJoinIns' => [
            'type' => 'structure',
            'members' => [
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'zoneStatus' => [ 'type' => 'string', 'locationName' => 'zoneStatus', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'packType' => [ 'type' => 'string', 'locationName' => 'packType', ],
                'chargeState' => [ 'type' => 'string', 'locationName' => 'chargeState', ],
                'icpStatus' => [ 'type' => 'boolean', 'locationName' => 'icpStatus', ],
                'zoneCreateTime' => [ 'type' => 'string', 'locationName' => 'zoneCreateTime', ],
                'instanceExpireTime' => [ 'type' => 'string', 'locationName' => 'instanceExpireTime', ],
                'pauseStatus' => [ 'type' => 'boolean', 'locationName' => 'pauseStatus', ],
                'lockdownStatus' => [ 'type' => 'boolean', 'locationName' => 'lockdownStatus', ],
                'blackListEnable' => [ 'type' => 'boolean', 'locationName' => 'blackListEnable', ],
                'whiteListEnable' => [ 'type' => 'boolean', 'locationName' => 'whiteListEnable', ],
                'dnsRecordArchived' => [ 'type' => 'boolean', 'locationName' => 'dnsRecordArchived', ],
            ],
        ],
        'OriginCA' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'certificate' => [ 'type' => 'string', 'locationName' => 'certificate', ],
                'hostnames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'expires_on' => [ 'type' => 'string', 'locationName' => 'expires_on', ],
                'request_type' => [ 'type' => 'string', 'locationName' => 'request_type', ],
                'requested_validity' => [ 'type' => 'double', 'locationName' => 'requested_validity', ],
                'csr' => [ 'type' => 'string', 'locationName' => 'csr', ],
            ],
        ],
        'Action' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'object', 'locationName' => 'value', ],
            ],
        ],
        'PageRuleOnlyPriority' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
            ],
        ],
        'Target' => [
            'type' => 'structure',
            'members' => [
                'target' => [ 'type' => 'string', 'locationName' => 'target', ],
                'constraint' =>  [ 'shape' => 'Constraint', ],
            ],
        ],
        'PageRule' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'targets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Target', ], ],
                'actions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Action', ], ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
                'created_on' => [ 'type' => 'string', 'locationName' => 'created_on', ],
            ],
        ],
        'Constraint' => [
            'type' => 'structure',
            'members' => [
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'RateLimitRuleCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'host' =>  [ 'shape' => 'MatchOpValCfg', ],
                'url' =>  [ 'shape' => 'MatchOpValCfg', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'rate' => [ 'type' => 'integer', 'locationName' => 'rate', ],
                'burst' => [ 'type' => 'integer', 'locationName' => 'burst', ],
                'matchAction' => [ 'type' => 'string', 'locationName' => 'matchAction', ],
                'redirection' => [ 'type' => 'string', 'locationName' => 'redirection', ],
            ],
        ],
        'SetRatelimitRulesReq' => [
            'type' => 'structure',
            'members' => [
                'rules' => [ 'type' => 'list', 'member' => [ 'shape' => 'RateLimitRuleCfg', ], ],
            ],
        ],
        'RateLimitRuleListCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'host' =>  [ 'shape' => 'MatchOpValCfg', ],
                'url' =>  [ 'shape' => 'MatchOpValCfg', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'rate' => [ 'type' => 'integer', 'locationName' => 'rate', ],
                'burst' => [ 'type' => 'integer', 'locationName' => 'burst', ],
                'matchAction' => [ 'type' => 'string', 'locationName' => 'matchAction', ],
                'redirection' => [ 'type' => 'string', 'locationName' => 'redirection', ],
            ],
        ],
        'MatchOpValCfg' => [
            'type' => 'structure',
            'members' => [
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
            ],
        ],
        'DelRulesReq' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
            ],
        ],
        'DisableRulesReq' => [
            'type' => 'structure',
            'members' => [
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
            ],
        ],
        'ListRulesReq' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'Rule' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'expression' => [ 'type' => 'string', 'locationName' => 'expression', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'action_parameters' =>  [ 'shape' => 'Action_parameters', ],
                'ratelimit' =>  [ 'shape' => 'Ratelimit', ],
            ],
        ],
        'Ratelimit' => [
            'type' => 'structure',
            'members' => [
                'characteristics' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'requests_per_period' => [ 'type' => 'double', 'locationName' => 'requests_per_period', ],
                'period' => [ 'type' => 'double', 'locationName' => 'period', ],
                'mitigation_timeout' => [ 'type' => 'double', 'locationName' => 'mitigation_timeout', ],
                'requests_to_origin' => [ 'type' => 'boolean', 'locationName' => 'requests_to_origin', ],
                'counting_expression' => [ 'type' => 'string', 'locationName' => 'counting_expression', ],
            ],
        ],
        'Response' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
            ],
        ],
        'RuleSet' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'kind' => [ 'type' => 'string', 'locationName' => 'kind', ],
                'phase' => [ 'type' => 'string', 'locationName' => 'phase', ],
                'last_updated' => [ 'type' => 'string', 'locationName' => 'last_updated', ],
                'rules' => [ 'type' => 'list', 'member' => [ 'shape' => 'Rule', ], ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
            ],
        ],
        'SSLVerification' => [
            'type' => 'structure',
            'members' => [
                'certificate_status' => [ 'type' => 'string', 'locationName' => 'certificate_status', ],
                'signature' => [ 'type' => 'string', 'locationName' => 'signature', ],
                'verification_type' => [ 'type' => 'string', 'locationName' => 'verification_type', ],
                'verification_status' => [ 'type' => 'boolean', 'locationName' => 'verification_status', ],
                'verification_info' =>  [ 'shape' => 'Verification_info', ],
                'brand_check' => [ 'type' => 'boolean', 'locationName' => 'brand_check', ],
                'validation_method' => [ 'type' => 'string', 'locationName' => 'validation_method', ],
                'cert_pack_uuid' => [ 'type' => 'string', 'locationName' => 'cert_pack_uuid', ],
            ],
        ],
        'Verification_info' => [
            'type' => 'structure',
            'members' => [
                'record_name' => [ 'type' => 'string', 'locationName' => 'record_name', ],
                'record_target' => [ 'type' => 'string', 'locationName' => 'record_target', ],
                'record_value' => [ 'type' => 'string', 'locationName' => 'record_value', ],
                'http_url' => [ 'type' => 'string', 'locationName' => 'http_url', ],
                'http_body' => [ 'type' => 'string', 'locationName' => 'http_body', ],
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
                'cname_target' => [ 'type' => 'string', 'locationName' => 'cname_target', ],
                'txt_name' => [ 'type' => 'string', 'locationName' => 'txt_name', ],
                'txt_value' => [ 'type' => 'string', 'locationName' => 'txt_value', ],
            ],
        ],
        'Dns' => [
            'type' => 'structure',
            'members' => [
                'ty_pe' => [ 'type' => 'string', 'locationName' => 'ty_pe', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'Origin_dns' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'Edge_ips' => [
            'type' => 'structure',
            'members' => [
                'ty_pe' => [ 'type' => 'string', 'locationName' => 'ty_pe', ],
                'connectivity' => [ 'type' => 'string', 'locationName' => 'connectivity', ],
            ],
        ],
        'SpectrumApplication' => [
            'type' => 'structure',
            'members' => [
                'origin_direct' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'dns' =>  [ 'shape' => 'Dns', ],
                'proxy_protocol' => [ 'type' => 'string', 'locationName' => 'proxy_protocol', ],
                'edge_ips' =>  [ 'shape' => 'Edge_ips', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
                'created_on' => [ 'type' => 'string', 'locationName' => 'created_on', ],
                'ip_firewall' => [ 'type' => 'boolean', 'locationName' => 'ip_firewall', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'origin_dns' =>  [ 'shape' => 'Origin_dns', ],
                'origin_port' => [ 'type' => 'string', 'locationName' => 'origin_port', ],
                'traffic_type' => [ 'type' => 'string', 'locationName' => 'traffic_type', ],
            ],
        ],
        'UniversalSSLSetting' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
            ],
        ],
        'WAFRuleGroup' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'rules_count' => [ 'type' => 'double', 'locationName' => 'rules_count', ],
                'modified_rules_count' => [ 'type' => 'double', 'locationName' => 'modified_rules_count', ],
                'package_id' => [ 'type' => 'string', 'locationName' => 'package_id', ],
                'mode' => [ 'type' => 'string', 'locationName' => 'mode', ],
                'allowed_modes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Group' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'WAFRule' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'priority' => [ 'type' => 'string', 'locationName' => 'priority', ],
                'group' =>  [ 'shape' => 'Group', ],
                'package_id' => [ 'type' => 'string', 'locationName' => 'package_id', ],
                'allowed_modes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'default_mode' => [ 'type' => 'string', 'locationName' => 'default_mode', ],
                'mode' => [ 'type' => 'string', 'locationName' => 'mode', ],
            ],
        ],
        'WAFRulePackage' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'detection_mode' => [ 'type' => 'string', 'locationName' => 'detection_mode', ],
                'zone_id' => [ 'type' => 'string', 'locationName' => 'zone_id', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'sensitivity' => [ 'type' => 'string', 'locationName' => 'sensitivity', ],
                'action_mode' => [ 'type' => 'string', 'locationName' => 'action_mode', ],
            ],
        ],
        'WorkerRoute' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'pattern' => [ 'type' => 'string', 'locationName' => 'pattern', ],
                'script' => [ 'type' => 'string', 'locationName' => 'script', ],
            ],
        ],
        'WorkerScript' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'script' => [ 'type' => 'string', 'locationName' => 'script', ],
                'etag' => [ 'type' => 'string', 'locationName' => 'etag', ],
                'size' => [ 'type' => 'double', 'locationName' => 'size', ],
                'created_on' => [ 'type' => 'string', 'locationName' => 'created_on', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
                'available_on_subdomain' => [ 'type' => 'boolean', 'locationName' => 'available_on_subdomain', ],
                'requestCount' => [ 'type' => 'double', 'locationName' => 'requestCount', ],
            ],
        ],
        'Plan' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'price' => [ 'type' => 'double', 'locationName' => 'price', ],
                'currency' => [ 'type' => 'string', 'locationName' => 'currency', ],
                'frequency' => [ 'type' => 'string', 'locationName' => 'frequency', ],
                'legacy_id' => [ 'type' => 'string', 'locationName' => 'legacy_id', ],
                'is_subscribed' => [ 'type' => 'boolean', 'locationName' => 'is_subscribed', ],
                'can_subscribe' => [ 'type' => 'boolean', 'locationName' => 'can_subscribe', ],
            ],
        ],
        'User_owner' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'ty_pe' => [ 'type' => 'string', 'locationName' => 'ty_pe', ],
            ],
        ],
        'Account' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'EnableCname2RsReq' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
            ],
        ],
        'Organization_owner' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ty_pe' => [ 'type' => 'string', 'locationName' => 'ty_pe', ],
            ],
        ],
        'Owner' => [
            'type' => 'structure',
            'members' => [
                'user_owner' =>  [ 'shape' => 'User_owner', ],
                'organization_owner' =>  [ 'shape' => 'Organization_owner', ],
            ],
        ],
        'Zone' => [
            'type' => 'structure',
            'members' => [
                'plan_pending' =>  [ 'shape' => 'Plan_pending', ],
                'original_dnshost' => [ 'type' => 'string', 'locationName' => 'original_dnshost', ],
                'permissions' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'development_mode' => [ 'type' => 'double', 'locationName' => 'development_mode', ],
                'verification_key' => [ 'type' => 'string', 'locationName' => 'verification_key', ],
                'plan' =>  [ 'shape' => 'Plan', ],
                'original_name_servers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'account' =>  [ 'shape' => 'Account', ],
                'activated_on' => [ 'type' => 'string', 'locationName' => 'activated_on', ],
                'paused' => [ 'type' => 'boolean', 'locationName' => 'paused', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'owner' =>  [ 'shape' => 'Owner', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
                'created_on' => [ 'type' => 'string', 'locationName' => 'created_on', ],
                'ty_pe' => [ 'type' => 'string', 'locationName' => 'ty_pe', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name_servers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'original_registrar' => [ 'type' => 'string', 'locationName' => 'original_registrar', ],
                'enableCname2Rs' => [ 'type' => 'integer', 'locationName' => 'enableCname2Rs', ],
                'cname_suffix' => [ 'type' => 'string', 'locationName' => 'cname_suffix', ],
            ],
        ],
        'Plan_pending' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'price' => [ 'type' => 'double', 'locationName' => 'price', ],
                'currency' => [ 'type' => 'string', 'locationName' => 'currency', ],
                'frequency' => [ 'type' => 'string', 'locationName' => 'frequency', ],
                'legacy_id' => [ 'type' => 'string', 'locationName' => 'legacy_id', ],
                'is_subscribed' => [ 'type' => 'boolean', 'locationName' => 'is_subscribed', ],
                'can_subscribe' => [ 'type' => 'boolean', 'locationName' => 'can_subscribe', ],
            ],
        ],
        'BrowserCheck' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'Value_0' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'mobile_subdomain' => [ 'type' => 'string', 'locationName' => 'mobile_subdomain', ],
                'strip_uri' => [ 'type' => 'boolean', 'locationName' => 'strip_uri', ],
            ],
        ],
        'Strict_transport_security' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'max_age' => [ 'type' => 'double', 'locationName' => 'max_age', ],
                'include_subdomains' => [ 'type' => 'boolean', 'locationName' => 'include_subdomains', ],
                'nosniff' => [ 'type' => 'boolean', 'locationName' => 'nosniff', ],
            ],
        ],
        'DevelopmentMode' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
                'time_remaining' => [ 'type' => 'double', 'locationName' => 'time_remaining', ],
            ],
        ],
        'ZoneSetting' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'value' => [ 'type' => 'object', 'locationName' => 'value', ],
            ],
        ],
        'HTTP3Value' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'ChallengePageTTL' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'PrivacyPass' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'RocketLoader' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'PolishWebPConversion' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'WebSockets' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'IPv6' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'HTTP2EdgePrioritization' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'PrefetchPreload' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'HTTP2Value' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'Zero_RTTValue' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'SSL' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'ZoneEnableOpportunisticEncryption' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'Value_0_0' => [
            'type' => 'structure',
            'members' => [
                'css' => [ 'type' => 'string', 'locationName' => 'css', ],
                'html' => [ 'type' => 'string', 'locationName' => 'html', ],
                'js' => [ 'type' => 'string', 'locationName' => 'js', ],
            ],
        ],
        'MirageImageOptimization' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'ImageResizing' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'TLSClientAuthentication' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'Auto_MinifyAssets' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' =>  [ 'shape' => 'Value_0_0', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'MobileRedirect' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' =>  [ 'shape' => 'Value_0', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'PseudoIPv4Value' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'BrowserCacheTTL' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'PolishImageOptimization' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'EmailObfuscation' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'HotlinkProtection' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'ServerSideExclude' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'ZoneConfItem' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'WebApplicationFirewall' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'IPGeolocation' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'CloudflareCacheLevel' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'MaxUpload' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'SecurityLevel' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'BrotliCompression' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'SecurityHeader' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' =>  [ 'shape' => 'Value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'Value' => [
            'type' => 'structure',
            'members' => [
                'strict_transport_security' =>  [ 'shape' => 'Strict_transport_security', ],
            ],
        ],
        'AdvancedDDoSProtection' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'AlwaysOnlineMode' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'modified_on' => [ 'type' => 'string', 'locationName' => 'modified_on', ],
            ],
        ],
        'CacheDateHistogramResultShape' => [
            'type' => 'structure',
            'members' => [
                'dateHistograms' => [ 'type' => 'list', 'member' => [ 'shape' => 'DateHistogram', ], ],
                'timeScope' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'util' => [ 'type' => 'string', 'locationName' => 'util', ],
            ],
        ],
        'QpsZoneResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QpsZoneResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CacheDateHistogramBandwidthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'topK' => [ 'type' => 'integer', 'locationName' => 'topK', ],
                'criterionName' => [ 'type' => 'string', 'locationName' => 'criterionName', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'AnalyticsReportingFilter', ], ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'FirewallActivityLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'double', 'locationName' => 'total', ],
                'activityLogs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ActivityLog', ], ],
            ],
        ],
        'QpsInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QpsInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AccessLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AccessLogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BpsInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BpsInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'FirewallActivityLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'FirewallActivityLogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'TopKResultShape' => [
            'type' => 'structure',
            'members' => [
                'topkAnalytics' =>  [ 'shape' => 'TopkAnalytics', ],
            ],
        ],
        'DashboardResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DashboardResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BandwidthTopKResultShape' => [
            'type' => 'structure',
            'members' => [
                'topkAnalytics' =>  [ 'shape' => 'TopkAnalytics', ],
            ],
        ],
        'FirewallDateHistogramRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'topK' => [ 'type' => 'integer', 'locationName' => 'topK', ],
                'criterionName' => [ 'type' => 'string', 'locationName' => 'criterionName', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'AnalyticsReportingFilter', ], ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'DashboardResultShape' => [
            'type' => 'structure',
            'members' => [
                'totals' =>  [ 'shape' => 'Totals', ],
                'timeseries' => [ 'type' => 'list', 'member' => [ 'shape' => 'Totals', ], ],
            ],
        ],
        'BpsZoneResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BpsZoneResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'XpsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'SimpleDateHistogram', ],
            ],
        ],
        'BandwidthTopKResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BandwidthTopKResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'XpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'DateHistogramBandwidthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'topK' => [ 'type' => 'integer', 'locationName' => 'topK', ],
                'criterionName' => [ 'type' => 'string', 'locationName' => 'criterionName', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'AnalyticsReportingFilter', ], ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'DateHistogramBandwidthResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DateHistogramBandwidthResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'XpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'XpsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QpsInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'SimpleDateHistogram', ],
            ],
        ],
        'BpsZoneRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'CacheDateHistogramResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CacheDateHistogramResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DateHistogramBandwidthResultShape' => [
            'type' => 'structure',
            'members' => [
                'dateHistograms' => [ 'type' => 'list', 'member' => [ 'shape' => 'DateHistogram', ], ],
                'timeScope' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'util' => [ 'type' => 'string', 'locationName' => 'util', ],
            ],
        ],
        'DateHistogramResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DateHistogramResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CacheTopKRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'topK' => [ 'type' => 'integer', 'locationName' => 'topK', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'AnalyticsReportingFilter', ], ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'CacheDateHistogramRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'topK' => [ 'type' => 'integer', 'locationName' => 'topK', ],
                'criterionName' => [ 'type' => 'string', 'locationName' => 'criterionName', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'AnalyticsReportingFilter', ], ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'TopKRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'topK' => [ 'type' => 'integer', 'locationName' => 'topK', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'AnalyticsReportingFilter', ], ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'CacheTopKResultShape' => [
            'type' => 'structure',
            'members' => [
                'countries' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topCountries' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topDeviceTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topHosts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topPaths' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topContentTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topStatusCodes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topIPs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topUserAgents' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topHttpMethods' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topASNs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topFirewallRuleIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topFirewallRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topWafRuleIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topWafRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
            ],
        ],
        'FirewallTopKResultShape' => [
            'type' => 'structure',
            'members' => [
                'countries' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topCountries' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topDeviceTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topHosts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topPaths' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topContentTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topStatusCodes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topIPs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topUserAgents' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topHttpMethods' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topASNs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topFirewallRuleIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topFirewallRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topWafRuleIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topWafRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
            ],
        ],
        'FirewallTopKRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'topK' => [ 'type' => 'integer', 'locationName' => 'topK', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'AnalyticsReportingFilter', ], ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'BpsInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'BandwidthTrendResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BandwidthTrendResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GroupByResultShape' => [
            'type' => 'structure',
            'members' => [
                'items' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
            ],
        ],
        'CacheDateHistogramBandwidthResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CacheDateHistogramBandwidthResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CacheBandwidthTopKResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CacheBandwidthTopKResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CacheDateHistogramBandwidthResultShape' => [
            'type' => 'structure',
            'members' => [
                'dateHistograms' => [ 'type' => 'list', 'member' => [ 'shape' => 'DateHistogram', ], ],
                'timeScope' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'util' => [ 'type' => 'string', 'locationName' => 'util', ],
            ],
        ],
        'FirewallTopKResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'FirewallTopKResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DateHistogramRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'topK' => [ 'type' => 'integer', 'locationName' => 'topK', ],
                'criterionName' => [ 'type' => 'string', 'locationName' => 'criterionName', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'AnalyticsReportingFilter', ], ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'FirewallDateHistogramResultShape' => [
            'type' => 'structure',
            'members' => [
                'dateHistograms' => [ 'type' => 'list', 'member' => [ 'shape' => 'DateHistogram', ], ],
                'timeScope' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'util' => [ 'type' => 'string', 'locationName' => 'util', ],
            ],
        ],
        'TopKResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'TopKResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DashboardRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'AnalyticsReportingFilter', ], ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'BandwidthTopKRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'topK' => [ 'type' => 'integer', 'locationName' => 'topK', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'AnalyticsReportingFilter', ], ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'CacheBandwidthTopKResultShape' => [
            'type' => 'structure',
            'members' => [
                'countries' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topCountries' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topDeviceTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topHosts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topPaths' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topContentTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topStatusCodes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topIPs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topUserAgents' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topHttpMethods' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topASNs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topFirewallRuleIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topFirewallRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topWafRuleIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
                'topWafRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
            ],
        ],
        'BpsZoneResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'SimpleDateHistogram', ],
            ],
        ],
        'AccessLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'AnalyticsReportingFilter', ], ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'DateHistogramResultShape' => [
            'type' => 'structure',
            'members' => [
                'dateHistograms' => [ 'type' => 'list', 'member' => [ 'shape' => 'DateHistogram', ], ],
                'timeScope' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'util' => [ 'type' => 'string', 'locationName' => 'util', ],
            ],
        ],
        'CacheBandwidthTopKRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'topK' => [ 'type' => 'integer', 'locationName' => 'topK', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'AnalyticsReportingFilter', ], ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'BpsInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'SimpleDateHistogram', ],
            ],
        ],
        'FirewallDateHistogramResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'FirewallDateHistogramResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QpsZoneRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'AccessLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'double', 'locationName' => 'total', ],
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AccessLog', ], ],
            ],
        ],
        'BandwidthTrendResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'SimpleDateHistogram', ],
            ],
        ],
        'BandwidthTrendRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'CacheTopKResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CacheTopKResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GroupByRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'criterionName' => [ 'type' => 'string', 'locationName' => 'criterionName', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GroupByResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GroupByResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QpsInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'QpsZoneResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'SimpleDateHistogram', ],
            ],
        ],
        'FirewallActivityLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'AnalyticsReportingFilter', ], ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ListAvailablePageRuleSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListAvailablePageRuleSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListAvailablePageRuleSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ListAvailablePageRuleSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AvailablePageRule', ], ],
            ],
        ],
        'DeleteAdvancedCertificateManagerCertificatePackResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteAdvancedCertificateManagerCertificatePackResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListCertificatePacksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListCertificatePacksResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListCertificatePacksResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CertificatePack', ], ],
            ],
        ],
        'OrderAdvancedCertificateManagerCertificatePackResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'OrderAdvancedCertificateManagerCertificatePackResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListCertificatePacksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'OrderAdvancedCertificateManagerCertificatePackRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ty_pe' => [ 'type' => 'string', 'locationName' => 'ty_pe', ],
                'hosts' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'validation_method' => [ 'type' => 'string', 'locationName' => 'validation_method', ],
                'validity_days' => [ 'type' => 'integer', 'locationName' => 'validity_days', ],
                'certificate_authority' => [ 'type' => 'string', 'locationName' => 'certificate_authority', ],
                'cloudflare_branding' => [ 'type' => 'boolean', 'locationName' => 'cloudflare_branding', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'DeleteAdvancedCertificateManagerCertificatePackRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
            ],
        ],
        'OrderAdvancedCertificateManagerCertificatePackResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'CertificatePack', ],
            ],
        ],
        'DeleteAdvancedCertificateManagerCertificatePackResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'UpdateCustomPageURLResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateCustomPageURLResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListAvailableCustomPagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ListAvailableCustomPagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListAvailableCustomPagesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateCustomPageURLResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'CustomPage', ],
            ],
        ],
        'ListAvailableCustomPagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CustomPage', ], ],
            ],
        ],
        'UpdateCustomPageURLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
            ],
        ],
        'DeleteSSLConfigurationResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'ListSSLConfigurationsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListSSLConfigurationsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteSSLConfigurationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
            ],
        ],
        'ListSSLConfigurationsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'page' => [ 'type' => 'double', 'locationName' => 'page', ],
                'per_page' => [ 'type' => 'double', 'locationName' => 'per_page', ],
                'match' => [ 'type' => 'string', 'locationName' => 'match', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'CreateSSLConfigurationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateSSLConfigurationResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteSSLConfigurationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteSSLConfigurationResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EditSSLConfigurationResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'CustomSSL', ],
            ],
        ],
        'CreateSSLConfigurationResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'CustomSSL', ],
            ],
        ],
        'CreateSSLConfigurationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'certificate' => [ 'type' => 'string', 'locationName' => 'certificate', ],
                'private_key' => [ 'type' => 'string', 'locationName' => 'private_key', ],
                'bundle_method' => [ 'type' => 'string', 'locationName' => 'bundle_method', ],
                'geo_restrictions' =>  [ 'shape' => 'Geo_restrictions', ],
                'ty_pe' => [ 'type' => 'string', 'locationName' => 'ty_pe', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'EditSSLConfigurationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'private_key' => [ 'type' => 'string', 'locationName' => 'private_key', ],
                'certificate' => [ 'type' => 'string', 'locationName' => 'certificate', ],
                'bundle_method' => [ 'type' => 'string', 'locationName' => 'bundle_method', ],
                'geo_restrictions' =>  [ 'shape' => 'Geo_restrictions', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
            ],
        ],
        'ListSSLConfigurationsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CustomSSL', ], ],
            ],
        ],
        'EditSSLConfigurationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EditSSLConfigurationResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateDNSRecordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ty_pe' => [ 'type' => 'string', 'locationName' => 'ty_pe', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'ttl' => [ 'type' => 'double', 'locationName' => 'ttl', ],
                'proxied' => [ 'type' => 'boolean', 'locationName' => 'proxied', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'srvData' =>  [ 'shape' => 'SRVdata', ],
                'caaData' =>  [ 'shape' => 'CAAdata', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
            ],
        ],
        'UpdateDNSRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateDNSRecordResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteDNSRecordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
            ],
        ],
        'UpdateDNSRecordResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'DnsRecord', ],
            ],
        ],
        'ListDNSRecordsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListDNSRecordsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteDNSRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteDNSRecordResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListDNSRecordsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'match' => [ 'type' => 'string', 'locationName' => 'match', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'order' => [ 'type' => 'string', 'locationName' => 'order', ],
                'page' => [ 'type' => 'double', 'locationName' => 'page', ],
                'per_page' => [ 'type' => 'double', 'locationName' => 'per_page', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'proxied' => [ 'type' => 'boolean', 'locationName' => 'proxied', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'DeleteDNSRecordResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'ListDNSRecordsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DnsRecord', ], ],
            ],
        ],
        'CreateDNSRecordResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'DnsRecord', ],
            ],
        ],
        'CreateDNSRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateDNSRecordResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateDNSRecordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ty_pe' => [ 'type' => 'string', 'locationName' => 'ty_pe', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'ttl' => [ 'type' => 'double', 'locationName' => 'ttl', ],
                'priority' => [ 'type' => 'double', 'locationName' => 'priority', ],
                'proxied' => [ 'type' => 'boolean', 'locationName' => 'proxied', ],
                'srvData' =>  [ 'shape' => 'SRVdata', ],
                'caaData' =>  [ 'shape' => 'CAAdata', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'UpdateIndividualFilterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'expression' => [ 'type' => 'string', 'locationName' => 'expression', ],
                'paused' => [ 'type' => 'boolean', 'locationName' => 'paused', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'ref' => [ 'type' => 'string', 'locationName' => 'ref', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'UpdateIndividualFilterResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Filter', ],
            ],
        ],
        'UpdateIndividualFilterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateIndividualFilterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateFiltersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateFiltersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateFiltersResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'CreateFiltersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ListOfFirewallRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListOfFirewallRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateIndividualFirewallRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateIndividualFirewallRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateIndividualFirewallRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'filter' =>  [ 'shape' => 'Filter', ],
                'products' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'priority' => [ 'type' => 'double', 'locationName' => 'priority', ],
                'paused' => [ 'type' => 'boolean', 'locationName' => 'paused', ],
                'ref' => [ 'type' => 'string', 'locationName' => 'ref', ],
                'action_parameters' =>  [ 'shape' => 'Action_parameters', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'OpenFirewallBotRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
            ],
        ],
        'DescribeBotStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBotStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CloseFirewallBotResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CloseFirewallBotResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CloseFirewallBotResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'CloseFirewallBotRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
            ],
        ],
        'DeleteIndividualFirewallRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'delete_filter_if_unused' => [ 'type' => 'boolean', 'locationName' => 'delete_filter_if_unused', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DescribeBotStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
            ],
        ],
        'ListOfFirewallRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'FirewallRule', ], ],
            ],
        ],
        'CreateFirewallRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'firewallRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'FirewallRule', ], ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'CreateFirewallRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateFirewallRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OpenFirewallBotResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DeleteIndividualFirewallRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'FirewallRule', ],
            ],
        ],
        'ListOfFirewallRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'paused' => [ 'type' => 'boolean', 'locationName' => 'paused', ],
                'page' => [ 'type' => 'double', 'locationName' => 'page', ],
                'per_page' => [ 'type' => 'double', 'locationName' => 'per_page', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'CreateFirewallRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'FirewallRule', ], ],
            ],
        ],
        'UpdateIndividualFirewallRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'FirewallRule', ],
            ],
        ],
        'OpenFirewallBotResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'OpenFirewallBotResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBotStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'subscriptionType' => [ 'type' => 'string', 'locationName' => 'subscriptionType', ],
                'subscriptionId' => [ 'type' => 'string', 'locationName' => 'subscriptionId', ],
                'switchStatus' => [ 'type' => 'string', 'locationName' => 'switchStatus', ],
            ],
        ],
        'DeleteIndividualFirewallRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteIndividualFirewallRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateFlowPackResultShape' => [
            'type' => 'structure',
            'members' => [
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
            ],
        ],
        'DescribeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'SelectDetailListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceList' => [ 'type' => 'string', 'locationName' => 'resourceList', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'IpsResultShape' => [
            'type' => 'structure',
            'members' => [
                'jdcloudCidrs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ModifyInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
            ],
        ],
        'CheckInstancesNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'packType' => [ 'type' => 'string', 'locationName' => 'packType', ],
                'zonePackNum' => [ 'type' => 'integer', 'locationName' => 'zonePackNum', ],
                'duration' => [ 'type' => 'integer', 'locationName' => 'duration', ],
                'durationUnit' => [ 'type' => 'string', 'locationName' => 'durationUnit', ],
                'autoRenewStatus' => [ 'type' => 'string', 'locationName' => 'autoRenewStatus', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'memo' => [ 'type' => 'string', 'locationName' => 'memo', ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
                'buyScenario' => [ 'type' => 'string', 'locationName' => 'buyScenario', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstanceByOrderNoResultShape' => [
            'type' => 'structure',
            'members' => [
                'describeInstancesRes' =>  [ 'shape' => 'DescribeInstancesRes', ],
            ],
        ],
        'IpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CheckInstancesNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SelectDetailListResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
            ],
        ],
        'IpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'IpsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CheckInstancesNameResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateFlowPackRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fixedFlowPackType' => [ 'type' => 'integer', 'locationName' => 'fixedFlowPackType', ],
                'fixedFlowPackNum' => [ 'type' => 'integer', 'locationName' => 'fixedFlowPackNum', ],
                'flowPackNum' => [ 'type' => 'integer', 'locationName' => 'flowPackNum', ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
                'buyScenario' => [ 'type' => 'string', 'locationName' => 'buyScenario', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeInstancesRes', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'ModifyInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'packType' => [ 'type' => 'string', 'locationName' => 'packType', ],
                'zonePackNum' => [ 'type' => 'integer', 'locationName' => 'zonePackNum', ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
                'buyScenario' => [ 'type' => 'string', 'locationName' => 'buyScenario', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceByOrderNoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'orderNumber' => [ 'type' => 'string', 'locationName' => 'orderNumber', ],
            ],
        ],
        'SelectDetailListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SelectDetailListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateFlowPackResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateFlowPackResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceByOrderNoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceByOrderNoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'TrafficDateHistogramTopKRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'InstanceTrafficDateHistogramRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'InstanceTrafficMultiDateHistogramResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'InstanceTrafficMultiDateHistogramResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'InstanceTrafficMultiDateHistogramResultShape' => [
            'type' => 'structure',
            'members' => [
                'dateHistograms' => [ 'type' => 'list', 'member' => [ 'shape' => 'DateHistogram', ], ],
                'timeScope' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'util' => [ 'type' => 'string', 'locationName' => 'util', ],
            ],
        ],
        'TrafficTopKResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'TopK', ],
            ],
        ],
        'InstanceRequestDateHistogramResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'InstanceRequestDateHistogramResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'InstanceTrafficMultiDateHistogramRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryModes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'TrafficDateHistogramTopKResultShape' => [
            'type' => 'structure',
            'members' => [
                'dateHistograms' => [ 'type' => 'list', 'member' => [ 'shape' => 'DateHistogram', ], ],
                'timeScope' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'util' => [ 'type' => 'string', 'locationName' => 'util', ],
            ],
        ],
        'InstanceTrafficSumResultShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'InstanceBandwidthAvgResultShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'InstanceRequestMultiDateHistogramRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryModes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'InstanceRequestSumResultShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'InstanceRequestSumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'InstanceRequestSumResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'InstanceBandwidthMaxRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'InstanceTrafficDateHistogramResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'InstanceTrafficDateHistogramResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'InstanceRequestMultiDateHistogramResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'InstanceRequestMultiDateHistogramResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'InstanceBandwidthDateHistogramResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'InstanceBandwidthDateHistogramResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BandwidthDateHistogramTopKResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BandwidthDateHistogramTopKResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'InstanceBandwidthMultiDateHistogramResultShape' => [
            'type' => 'structure',
            'members' => [
                'dateHistograms' => [ 'type' => 'list', 'member' => [ 'shape' => 'DateHistogram', ], ],
                'timeScope' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'util' => [ 'type' => 'string', 'locationName' => 'util', ],
            ],
        ],
        'InstanceTrafficDateHistogramResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'SimpleDateHistogram', ],
            ],
        ],
        'InstanceBandwidthDateHistogramRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'InstanceRequestSumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'InstanceBandwidthAvgResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'InstanceBandwidthAvgResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RequestTopKRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'InstanceTrafficSumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'InstanceTrafficSumResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'InstanceBandwidthAvgRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'InstanceBandwidthP95ResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'InstanceBandwidthP95ResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RequestTopKResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RequestTopKResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'TrafficTopKRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'BandwidthDateHistogramTopKResultShape' => [
            'type' => 'structure',
            'members' => [
                'dateHistograms' => [ 'type' => 'list', 'member' => [ 'shape' => 'DateHistogram', ], ],
                'timeScope' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'util' => [ 'type' => 'string', 'locationName' => 'util', ],
            ],
        ],
        'RequestDateHistogramTopKRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'InstanceBandwidthListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'RequestDateHistogramTopKResultShape' => [
            'type' => 'structure',
            'members' => [
                'dateHistograms' => [ 'type' => 'list', 'member' => [ 'shape' => 'DateHistogram', ], ],
                'timeScope' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'util' => [ 'type' => 'string', 'locationName' => 'util', ],
            ],
        ],
        'InstanceBandwidthListResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'double', 'locationName' => 'total', ],
                'cdnZoneBandwidths' => [ 'type' => 'list', 'member' => [ 'shape' => 'CdnZoneBandwidth', ], ],
            ],
        ],
        'InstanceRequestDateHistogramResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'SimpleDateHistogram', ],
            ],
        ],
        'InstanceTrafficSumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'BandwidthDateHistogramTopKRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'InstanceBandwidthMaxResultShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
                'timestamp' => [ 'type' => 'double', 'locationName' => 'timestamp', ],
            ],
        ],
        'InstanceRequestDateHistogramRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'InstanceBandwidthListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'InstanceBandwidthListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RequestTopKResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'TopK', ],
            ],
        ],
        'InstanceBandwidthP95RequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'InstanceBandwidthP95ResultShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'InstanceBandwidthMultiDateHistogramResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'InstanceBandwidthMultiDateHistogramResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'InstanceBandwidthMaxResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'InstanceBandwidthMaxResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'InstanceBandwidthDateHistogramResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'SimpleDateHistogram', ],
            ],
        ],
        'InstanceBandwidthMultiDateHistogramRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryModes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'TrafficDateHistogramTopKResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'TrafficDateHistogramTopKResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RequestDateHistogramTopKResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RequestDateHistogramTopKResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'TrafficTopKResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'TrafficTopKResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'InstanceRequestMultiDateHistogramResultShape' => [
            'type' => 'structure',
            'members' => [
                'dateHistograms' => [ 'type' => 'list', 'member' => [ 'shape' => 'DateHistogram', ], ],
                'timeScope' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'util' => [ 'type' => 'string', 'locationName' => 'util', ],
            ],
        ],
        'CreateLogpushJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_name' => [ 'type' => 'string', 'locationName' => 'zone_name', ],
                'destination_conf' => [ 'type' => 'string', 'locationName' => 'destination_conf', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'dataset' => [ 'type' => 'string', 'locationName' => 'dataset', ],
                'logpull_options' => [ 'type' => 'string', 'locationName' => 'logpull_options', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'CreateLogpushJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateLogpushJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteLogpushJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteLogpushJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateLogpushJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'LogpushJob', ],
            ],
        ],
        'FieldsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
                'dataset' => [ 'type' => 'string', 'locationName' => 'dataset', ],
            ],
        ],
        'FieldsDefaultResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'FieldsDefaultResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteLogpushJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
                'job_identifier' => [ 'type' => 'string', 'locationName' => 'job_identifier', ],
            ],
        ],
        'FieldsDefaultRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
                'dataset' => [ 'type' => 'string', 'locationName' => 'dataset', ],
            ],
        ],
        'UpdateLogpushJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'LogpushJob', ],
            ],
        ],
        'ListLogpushJobsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'CheckDestinationExistsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CheckDestinationExistsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListLogpushJobsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListLogpushJobsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'FieldsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'FieldsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CheckDestinationExistsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'destination_conf' => [ 'type' => 'string', 'locationName' => 'destination_conf', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'FieldsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LogModule', ], ],
            ],
        ],
        'CheckDestinationExistsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'boolean', 'locationName' => 'data', ],
            ],
        ],
        'ListLogpushJobsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LogpushJob', ], ],
            ],
        ],
        'FieldsDefaultResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LogModule', ], ],
            ],
        ],
        'DeleteLogpushJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'LogpushJob', ],
            ],
        ],
        'UpdateLogpushJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateLogpushJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateLogpushJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'logpull_options' => [ 'type' => 'string', 'locationName' => 'logpull_options', ],
                'destination_conf' => [ 'type' => 'string', 'locationName' => 'destination_conf', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
                'job_identifier' => [ 'type' => 'string', 'locationName' => 'job_identifier', ],
            ],
        ],
        'DescribePackagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribePackRes', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribePackageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePackageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePackagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribePackageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'packType' => [ 'type' => 'integer', 'locationName' => 'packType', ],
            ],
        ],
        'DescribePackageResultShape' => [
            'type' => 'structure',
            'members' => [
                'describePackRes' =>  [ 'shape' => 'DescribePackRes', ],
            ],
        ],
        'DescribePackagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePackagesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdatePageRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdatePageRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeletePageRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
            ],
        ],
        'CreatePageRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'targets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Target', ], ],
                'actions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Action', ], ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'CreatePageRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreatePageRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdatePageRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'PageRule', ],
            ],
        ],
        'UpdatePageRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'targets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Target', ], ],
                'actions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Action', ], ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
            ],
        ],
        'ListPageRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'order' => [ 'type' => 'string', 'locationName' => 'order', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'match' => [ 'type' => 'string', 'locationName' => 'match', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ListPageRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'PageRule', ], ],
            ],
        ],
        'CreatePageRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'PageRule', ],
            ],
        ],
        'DeletePageRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'DeletePageRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeletePageRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListPageRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListPageRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UniversalSSLSettingsDetailsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UniversalSSLSettingsDetailsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EditUniversalSSLSettingsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'UniversalSSLSetting', ],
            ],
        ],
        'EditUniversalSSLSettingsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EditUniversalSSLSettingsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UniversalSSLSettingsDetailsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'UniversalSSLSettingsDetailsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'UniversalSSLSetting', ],
            ],
        ],
        'EditUniversalSSLSettingsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'RuleGroupDetailsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
                'package_identifier' => [ 'type' => 'string', 'locationName' => 'package_identifier', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
            ],
        ],
        'EditRuleGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EditRuleGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListRuleGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'mode' => [ 'type' => 'string', 'locationName' => 'mode', ],
                'rules_count' => [ 'type' => 'double', 'locationName' => 'rules_count', ],
                'page' => [ 'type' => 'double', 'locationName' => 'page', ],
                'per_page' => [ 'type' => 'double', 'locationName' => 'per_page', ],
                'order' => [ 'type' => 'string', 'locationName' => 'order', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'match' => [ 'type' => 'string', 'locationName' => 'match', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
                'package_identifier' => [ 'type' => 'string', 'locationName' => 'package_identifier', ],
            ],
        ],
        'ListRuleGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'WAFRuleGroup', ], ],
            ],
        ],
        'RuleGroupDetailsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RuleGroupDetailsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EditRuleGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'WAFRuleGroup', ],
            ],
        ],
        'RuleGroupDetailsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'WAFRuleGroup', ],
            ],
        ],
        'ListRuleGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListRuleGroupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EditRuleGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'mode' => [ 'type' => 'string', 'locationName' => 'mode', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
                'package_identifier' => [ 'type' => 'string', 'locationName' => 'package_identifier', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
            ],
        ],
        'FirewallPackageDetailsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'WAFRulePackage', ],
            ],
        ],
        'EditFirewallPackageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EditFirewallPackageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'FirewallPackageDetailsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
            ],
        ],
        'EditFirewallPackageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sensitivity' => [ 'type' => 'string', 'locationName' => 'sensitivity', ],
                'action_mode' => [ 'type' => 'string', 'locationName' => 'action_mode', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
            ],
        ],
        'ListFirewallPackagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'page' => [ 'type' => 'double', 'locationName' => 'page', ],
                'per_page' => [ 'type' => 'double', 'locationName' => 'per_page', ],
                'order' => [ 'type' => 'string', 'locationName' => 'order', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'match' => [ 'type' => 'string', 'locationName' => 'match', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ListFirewallPackagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'WAFRulePackage', ], ],
            ],
        ],
        'ListFirewallPackagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListFirewallPackagesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'FirewallPackageDetailsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'FirewallPackageDetailsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EditFirewallPackageResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'WAFRulePackage', ],
            ],
        ],
        'ListRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RuleDetailsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RuleDetailsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RuleDetailsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_id' => [ 'type' => 'string', 'locationName' => 'zone_id', ],
                'package_id' => [ 'type' => 'string', 'locationName' => 'package_id', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
            ],
        ],
        'EditRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'WAFRule', ],
            ],
        ],
        'EditRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EditRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RuleDetailsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'WAFRule', ],
            ],
        ],
        'ListRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'WAFRule', ], ],
            ],
        ],
        'EditRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'mode' => [ 'type' => 'string', 'locationName' => 'mode', ],
                'zone_id' => [ 'type' => 'string', 'locationName' => 'zone_id', ],
                'package_id' => [ 'type' => 'string', 'locationName' => 'package_id', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
            ],
        ],
        'ListRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'mode' => [ 'type' => 'string', 'locationName' => 'mode', ],
                'priority' => [ 'type' => 'string', 'locationName' => 'priority', ],
                'match' => [ 'type' => 'string', 'locationName' => 'match', ],
                'order' => [ 'type' => 'string', 'locationName' => 'order', ],
                'page' => [ 'type' => 'double', 'locationName' => 'page', ],
                'per_page' => [ 'type' => 'double', 'locationName' => 'per_page', ],
                'group_id' => [ 'type' => 'string', 'locationName' => 'group_id', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'zone_id' => [ 'type' => 'string', 'locationName' => 'zone_id', ],
                'package_id' => [ 'type' => 'string', 'locationName' => 'package_id', ],
            ],
        ],
        'ZoneTrafficMultiDateHistogramResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ZoneTrafficMultiDateHistogramResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ZoneRequestSumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ZoneRequestSumResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ZoneTrafficSumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ZoneBandwidthMultiDateHistogramResultShape' => [
            'type' => 'structure',
            'members' => [
                'dateHistograms' => [ 'type' => 'list', 'member' => [ 'shape' => 'DateHistogram', ], ],
                'timeScope' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'util' => [ 'type' => 'string', 'locationName' => 'util', ],
            ],
        ],
        'ZoneTrafficDateHistogramRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ZoneBandwidthP95RequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ZoneBandwidthAvgResultShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'ZoneBandwidthDateHistogramResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ZoneBandwidthDateHistogramResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ZoneBandwidthMaxResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ZoneBandwidthMaxResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ZoneBandwidthMaxRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ZoneTrafficMultiDateHistogramResultShape' => [
            'type' => 'structure',
            'members' => [
                'dateHistograms' => [ 'type' => 'list', 'member' => [ 'shape' => 'DateHistogram', ], ],
                'timeScope' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'util' => [ 'type' => 'string', 'locationName' => 'util', ],
            ],
        ],
        'ZoneBandwidthP95ResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ZoneBandwidthP95ResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ZoneTrafficMultiDateHistogramRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryModes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ZoneBandwidthMultiDateHistogramRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryModes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ZoneTrafficDateHistogramResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ZoneTrafficDateHistogramResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ZoneRequestDateHistogramResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'SimpleDateHistogram', ],
            ],
        ],
        'ZoneRequestMultiDateHistogramResultShape' => [
            'type' => 'structure',
            'members' => [
                'dateHistograms' => [ 'type' => 'list', 'member' => [ 'shape' => 'DateHistogram', ], ],
                'timeScope' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'util' => [ 'type' => 'string', 'locationName' => 'util', ],
            ],
        ],
        'ZoneBandwidthDateHistogramResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'SimpleDateHistogram', ],
            ],
        ],
        'ZoneBandwidthAvgResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ZoneBandwidthAvgResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ZoneTrafficSumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ZoneTrafficSumResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ZoneRequestSumResultShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'ZoneRequestMultiDateHistogramRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryModes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ZoneRequestDateHistogramRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ZoneRequestSumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ZoneBandwidthP95ResultShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'ZoneBandwidthDateHistogramRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ZoneBandwidthMaxResultShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
                'timestamp' => [ 'type' => 'double', 'locationName' => 'timestamp', ],
            ],
        ],
        'ZoneRequestDateHistogramResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ZoneRequestDateHistogramResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ZoneBandwidthMultiDateHistogramResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ZoneBandwidthMultiDateHistogramResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ZoneRequestMultiDateHistogramResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ZoneRequestMultiDateHistogramResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ZoneTrafficSumResultShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'ZoneBandwidthAvgRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'since' => [ 'type' => 'string', 'locationName' => 'since', ],
                'until' => [ 'type' => 'string', 'locationName' => 'until', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ZoneTrafficDateHistogramResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'SimpleDateHistogram', ],
            ],
        ],
        'DeleteZoneRequestShape' => [
            'type' => 'structure',
            'members' => [
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
            ],
        ],
        'ListZonesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Zone', ], ],
            ],
        ],
        'DeleteZoneResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteZoneResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PurgeAllFilesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'PurgeAllFilesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PurgeFilesByCache_TagsAndHostOrPrefixRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'hosts' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'prefixes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
            ],
        ],
        'CreateZoneResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Zone', ],
            ],
        ],
        'PurgeFilesByURLResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'PurgeFilesByURLResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateZoneResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateZoneResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PurgeAllFilesResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Zone', ],
            ],
        ],
        'PurgeFilesByCache_TagsAndHostOrPrefixResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Zone', ],
            ],
        ],
        'PurgeFilesByURLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'files' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
            ],
        ],
        'PurgeFilesByCache_TagsAndHostOrPrefixResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'PurgeFilesByCache_TagsAndHostOrPrefixResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateZoneRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'account' =>  [ 'shape' => 'Account', ],
                'jump_start' => [ 'type' => 'boolean', 'locationName' => 'jump_start', ],
                'ty_pe' => [ 'type' => 'string', 'locationName' => 'ty_pe', ],
            ],
        ],
        'PurgeAllFilesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'purge_everything' => [ 'type' => 'boolean', 'locationName' => 'purge_everything', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
            ],
        ],
        'DeleteZoneResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Zone', ],
            ],
        ],
        'PurgeFilesByURLResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Zone', ],
            ],
        ],
        'ListZonesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListZonesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListZonesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'match' => [ 'type' => 'string', 'locationName' => 'match', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                '__account__name' => [ 'type' => 'string', 'locationName' => '__account__name', ],
                'order' => [ 'type' => 'string', 'locationName' => 'order', ],
                'page' => [ 'type' => 'double', 'locationName' => 'page', ],
                'per_page' => [ 'type' => 'double', 'locationName' => 'per_page', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                '__account__id' => [ 'type' => 'string', 'locationName' => '__account__id', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
            ],
        ],
        'EditZoneSettingsInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ChangeAutomaticHTTPSRewritesSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeAutomaticHTTPSRewritesSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetAlwaysUseHTTPSSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ZoneSetting', ],
            ],
        ],
        'GetAdvancedDDOSSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetAutomaticHTTPSRewritesSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangePolishSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'PolishImageOptimization', ],
            ],
        ],
        'GetTLSClientAuthSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeWebApplicationFirewallWAFSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeWebApplicationFirewallWAFSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeWebSocketsSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'WebSockets', ],
            ],
        ],
        'GetPseudoIPv4SettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'PseudoIPv4Value', ],
            ],
        ],
        'GetPrefetchPreloadSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetPolishSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'PolishImageOptimization', ],
            ],
        ],
        'GetEmailObfuscationSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetEmailObfuscationSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetSecurityHeaderHSTSSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetSecurityHeaderHSTSSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeAlwaysUseHTTPSSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeAlwaysUseHTTPSSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeEmailObfuscationSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeEmailObfuscationSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeHTTP2SettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeBrotliSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeAlwaysOnlineSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeAlwaysOnlineSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeTLS1_3SettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeIPGeolocationSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'IPGeolocation', ],
            ],
        ],
        'GetIPv6SettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'IPv6', ],
            ],
        ],
        'ChangePolishSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeAlwaysUseHTTPSSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetWebPSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetWebPSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeWebPSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeWebPSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetMinimumTLSVersionSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ZoneSetting', ],
            ],
        ],
        'Get0_RTTSessionResumptionSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'Get0_RTTSessionResumptionSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeEnableQueryStringSortSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeBrowserCacheTTLSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetHTTP2SettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangePseudoIPv4SettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'PseudoIPv4Value', ],
            ],
        ],
        'ChangeBrowserCheckSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetIPGeolocationSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetIPGeolocationSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'Change0_RTTSessionResumptionSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetHTTP2SettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetHTTP2SettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeHTTP3SettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeHTTP3SettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeMobileRedirectSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' =>  [ 'shape' => 'Value_0', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetSSLSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'Change0_RTTSessionResumptionSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Zero_RTTValue', ],
            ],
        ],
        'ChangeServerSideExcludeSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ServerSideExclude', ],
            ],
        ],
        'GetTLSClientAuthSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'TLSClientAuthentication', ],
            ],
        ],
        'ChangeCiphersSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeTrueClientIPSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeTrueClientIPSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetMirageSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetMirageSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeDevelopmentModeSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'DevelopmentMode', ],
            ],
        ],
        'GetBrowserCacheTTLSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeMinifySettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' =>  [ 'shape' => 'Value_0_0', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeMaxUploadSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'EditZoneSettingsInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'items' => [ 'type' => 'list', 'member' => [ 'shape' => 'ZoneConfItem', ], ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeCacheLevelSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'CloudflareCacheLevel', ],
            ],
        ],
        'ChangeTrueClientIPSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ZoneSetting', ],
            ],
        ],
        'ChangeBrowserCheckSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'BrowserCheck', ],
            ],
        ],
        'ChangePolishSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangePolishSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetEnableQueryStringSortSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetEnableQueryStringSortSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeWebPSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'PolishWebPConversion', ],
            ],
        ],
        'ChangeTLSClientAuthSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'TLSClientAuthentication', ],
            ],
        ],
        'GetBrowserCheckSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeMirageSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeMirageSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetAlwaysOnlineSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetAlwaysOnlineSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetSSLSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetSSLSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeDevelopmentModeSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeTLSClientAuthSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeTLSClientAuthSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetAdvancedDDOSSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetAdvancedDDOSSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeSecurityLevelSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'SecurityLevel', ],
            ],
        ],
        'GetAllZoneSettingsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetWebSocketsSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetHTTP2EdgePrioritizationSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetHTTP2EdgePrioritizationSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetChallengeTTLSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ChallengePageTTL', ],
            ],
        ],
        'GetPolishSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeTLS1_3SettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ZoneSetting', ],
            ],
        ],
        'GetBrowserCheckSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'BrowserCheck', ],
            ],
        ],
        'GetSSLSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'SSL', ],
            ],
        ],
        'ChangeBrowserCacheTTLSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'BrowserCacheTTL', ],
            ],
        ],
        'ChangeServerSideExcludeSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeServerSideExcludeSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetImageResizingSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetImageResizingSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeMaxUploadSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'MaxUpload', ],
            ],
        ],
        'ChangeIPv6SettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeIPv6SettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeWebApplicationFirewallWAFSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'WebApplicationFirewall', ],
            ],
        ],
        'GetTrueClientIPSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeBrowserCheckSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeBrowserCheckSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeChallengeTTLSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetPrivacyPassSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetPrivacyPassSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeHTTP2SettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'HTTP2Value', ],
            ],
        ],
        'GetZoneEnableTLS1_3SettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetZoneEnableTLS1_3SettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangePrivacyPassSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetHotlinkProtectionSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetHotlinkProtectionSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetMinimumTLSVersionSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'Get0_RTTSessionResumptionSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Zero_RTTValue', ],
            ],
        ],
        'GetMirageSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'MirageImageOptimization', ],
            ],
        ],
        'ChangeEnableQueryStringSortSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeEnableQueryStringSortSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeMobileRedirectSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'MobileRedirect', ],
            ],
        ],
        'ChangeHTTP2EdgePrioritizationSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeEnableErrorPagesOnSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ZoneSetting', ],
            ],
        ],
        'GetHotlinkProtectionSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeRocketLoaderSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetPrefetchPreloadSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetPrefetchPreloadSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'Change0_RTTSessionResumptionSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'Change0_RTTSessionResumptionSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetChallengeTTLSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetChallengeTTLSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeCacheLevelSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeCacheLevelSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeMinifySettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Auto_MinifyAssets', ],
            ],
        ],
        'ChangePseudoIPv4SettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetWebPSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetAlwaysUseHTTPSSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetIPGeolocationSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'IPGeolocation', ],
            ],
        ],
        'ChangeIPGeolocationSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeIPGeolocationSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetOpportunisticEncryptionSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetOpportunisticEncryptionSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeTLS1_3SettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeTLS1_3SettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangePrefetchPreloadSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'PrefetchPreload', ],
            ],
        ],
        'GetPrivacyPassSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'PrivacyPass', ],
            ],
        ],
        'GetIPv6SettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetSecurityHeaderHSTSSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetEnableErrorPagesOnSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetEnableErrorPagesOnSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeHTTP2EdgePrioritizationSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeHTTP2EdgePrioritizationSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangePrefetchPreloadSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangePrefetchPreloadSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetEnableQueryStringSortSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ZoneSetting', ],
            ],
        ],
        'ChangeMinimumTLSVersionSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeMinimumTLSVersionSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetPseudoIPv4SettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetPseudoIPv4SettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeWebSocketsSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeWebSocketsSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeDevelopmentModeSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeDevelopmentModeSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetAllZoneSettingsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetAllZoneSettingsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetServerSideExcludeSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetAlwaysOnlineSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetMobileRedirectSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetMobileRedirectSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetImageResizingSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ImageResizing', ],
            ],
        ],
        'GetBrowserCacheTTLSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'BrowserCacheTTL', ],
            ],
        ],
        'ChangeSSLSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'SSL', ],
            ],
        ],
        'ChangeIPv6SettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetPrivacyPassSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeHTTP3SettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetMinifySettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Auto_MinifyAssets', ],
            ],
        ],
        'ChangePseudoIPv4SettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangePseudoIPv4SettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangePrefetchPreloadSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeRocketLoaderSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeRocketLoaderSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetWebSocketsSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetWebSocketsSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeAlwaysOnlineSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeChallengeTTLSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeChallengeTTLSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeWebApplicationFirewallWAFSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeAutomaticHTTPSRewritesSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ZoneSetting', ],
            ],
        ],
        'GetDevelopmentModeSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'DevelopmentMode', ],
            ],
        ],
        'ChangeOpportunisticEncryptionSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ZoneEnableOpportunisticEncryption', ],
            ],
        ],
        'ChangeHotlinkProtectionSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeHotlinkProtectionSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeSecurityLevelSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeSecurityLevelSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetAlwaysOnlineSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'AlwaysOnlineMode', ],
            ],
        ],
        'GetRocketLoaderSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeMirageSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'MirageImageOptimization', ],
            ],
        ],
        'ChangeEnableErrorPagesOnSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeEnableErrorPagesOnSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeWebPSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeRocketLoaderSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'RocketLoader', ],
            ],
        ],
        'GetSecurityLevelSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeHotlinkProtectionSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'HotlinkProtection', ],
            ],
        ],
        'ChangeTrueClientIPSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetDevelopmentModeSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetMobileRedirectSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'MobileRedirect', ],
            ],
        ],
        'ChangeHTTP3SettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'HTTP3Value', ],
            ],
        ],
        'ChangeOpportunisticEncryptionSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeHTTP2SettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeHTTP2SettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeMinifySettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeMinifySettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetWebSocketsSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'WebSockets', ],
            ],
        ],
        'GetTrueClientIPSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTrueClientIPSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetHTTP3SettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetHTTP3SettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetChallengeTTLSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetPseudoIPv4SettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeCiphersSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GetTrueClientIPSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ZoneSetting', ],
            ],
        ],
        'EditZoneSettingsInfoResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetBrowserCheckSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetBrowserCheckSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetHTTP2SettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'HTTP2Value', ],
            ],
        ],
        'ChangeBrowserCacheTTLSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeBrowserCacheTTLSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetHTTP3SettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetHTTP2EdgePrioritizationSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeIPGeolocationSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetWebApplicationFirewallWAFSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetEnableErrorPagesOnSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetMinifySettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetAllZoneSettingsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ZoneSetting', ], ],
            ],
        ],
        'GetBrowserCacheTTLSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetBrowserCacheTTLSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetEmailObfuscationSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetOpportunisticEncryptionSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeMinimumTLSVersionSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ZoneSetting', ],
            ],
        ],
        'GetEmailObfuscationSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'EmailObfuscation', ],
            ],
        ],
        'GetMinifySettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetMinifySettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeOpportunisticEncryptionSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeOpportunisticEncryptionSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeServerSideExcludeSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetPolishSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetPolishSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeSSLSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetMinimumTLSVersionSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetMinimumTLSVersionSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetCiphersSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GetOpportunisticEncryptionSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ZoneEnableOpportunisticEncryption', ],
            ],
        ],
        'GetRocketLoaderSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetRocketLoaderSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetAdvancedDDOSSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'AdvancedDDoSProtection', ],
            ],
        ],
        'ChangeAlwaysUseHTTPSSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ZoneSetting', ],
            ],
        ],
        'GetZoneEnableTLS1_3SettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeHTTP2EdgePrioritizationSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'HTTP2EdgePrioritization', ],
            ],
        ],
        'ChangeMobileRedirectSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeMobileRedirectSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetAlwaysUseHTTPSSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetAlwaysUseHTTPSSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeBrotliSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeBrotliSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetCiphersSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetWebPSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'PolishWebPConversion', ],
            ],
        ],
        'ChangeEnableQueryStringSortSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ZoneSetting', ],
            ],
        ],
        'GetCiphersSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetCiphersSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangePrivacyPassSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangePrivacyPassSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetEnableQueryStringSortSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetTLSClientAuthSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTLSClientAuthSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeEmailObfuscationSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetAutomaticHTTPSRewritesSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ZoneSetting', ],
            ],
        ],
        'ChangeWebSocketsSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeEnableErrorPagesOnSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeAutomaticHTTPSRewritesSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetMirageSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetIPv6SettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetIPv6SettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeCacheLevelSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetServerSideExcludeSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ServerSideExclude', ],
            ],
        ],
        'ChangeChallengeTTLSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ChallengePageTTL', ],
            ],
        ],
        'GetDevelopmentModeSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDevelopmentModeSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeEmailObfuscationSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'EmailObfuscation', ],
            ],
        ],
        'GetWebApplicationFirewallWAFSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetWebApplicationFirewallWAFSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetSecurityLevelSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'SecurityLevel', ],
            ],
        ],
        'GetIPGeolocationSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeBrotliSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'BrotliCompression', ],
            ],
        ],
        'GetEnableErrorPagesOnSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ZoneSetting', ],
            ],
        ],
        'GetImageResizingSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetHTTP2EdgePrioritizationSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'HTTP2EdgePrioritization', ],
            ],
        ],
        'ChangeMaxUploadSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeMaxUploadSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeHotlinkProtectionSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetZoneEnableTLS1_3SettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ZoneSetting', ],
            ],
        ],
        'Get0_RTTSessionResumptionSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeIPv6SettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'IPv6', ],
            ],
        ],
        'GetServerSideExcludeSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetServerSideExcludeSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetSecurityLevelSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetSecurityLevelSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangePrivacyPassSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'PrivacyPass', ],
            ],
        ],
        'GetHotlinkProtectionSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'HotlinkProtection', ],
            ],
        ],
        'ChangeMinimumTLSVersionSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeCiphersSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeCiphersSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeMirageSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetMobileRedirectSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetWebApplicationFirewallWAFSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'WebApplicationFirewall', ],
            ],
        ],
        'ChangeAlwaysOnlineSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'AlwaysOnlineMode', ],
            ],
        ],
        'GetAutomaticHTTPSRewritesSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetAutomaticHTTPSRewritesSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChangeTLSClientAuthSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'GetRocketLoaderSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'RocketLoader', ],
            ],
        ],
        'GetSecurityHeaderHSTSSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'SecurityHeader', ],
            ],
        ],
        'ChangeSecurityLevelSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'ChangeSSLSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ChangeSSLSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetHTTP3SettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'HTTP3Value', ],
            ],
        ],
        'GetPrefetchPreloadSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ZoneSetting', ],
            ],
        ],
    ],
];
