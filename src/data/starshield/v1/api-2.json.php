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
        'ListSSLConfigurations' => [
            'name' => 'ListSSLConfigurations',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/custom_certificates',
            ],
            'input' => [ 'shape' => 'ListSSLConfigurationsRequestShape', ],
            'output' => [ 'shape' => 'ListSSLConfigurationsResponseShape', ],
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
        'ModifyInstance' => [
            'name' => 'ModifyInstance',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instance/{instanceId}',
            ],
            'input' => [ 'shape' => 'ModifyInstanceRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceResponseShape', ],
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
        'UniversalSSLSettingsDetails' => [
            'name' => 'UniversalSSLSettingsDetails',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_identifier}/ssl$$universal$$settings',
            ],
            'input' => [ 'shape' => 'UniversalSSLSettingsDetailsRequestShape', ],
            'output' => [ 'shape' => 'UniversalSSLSettingsDetailsResponseShape', ],
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
        'ListRules' => [
            'name' => 'ListRules',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/zones/{zone_id}/firewall$$waf$$packages/{package_id}/rules',
            ],
            'input' => [ 'shape' => 'ListRulesRequestShape', ],
            'output' => [ 'shape' => 'ListRulesResponseShape', ],
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
        'DateHistogram' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'timeseries' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'total' => [ 'type' => 'double', 'locationName' => 'total', ],
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
        'ZoneAnalytics' => [
            'type' => 'structure',
            'members' => [
                'totals' =>  [ 'shape' => 'Totals', ],
                'timeseries' => [ 'type' => 'list', 'member' => [ 'shape' => 'Totals', ], ],
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
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'ty_pe' => [ 'type' => 'string', 'locationName' => 'ty_pe', ],
                'hosts' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'certificates' => [ 'type' => 'list', 'member' => [ 'shape' => 'Certificate', ], ],
                'primary_certificate' => [ 'type' => 'string', 'locationName' => 'primary_certificate', ],
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
                'flowRemain' => [ 'type' => 'double', 'locationName' => 'flowRemain', ],
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
        'DescribePopIpRes' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'coloId' => [ 'type' => 'integer', 'locationName' => 'coloId', ],
                'domains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ipIsptype' => [ 'type' => 'integer', 'locationName' => 'ipIsptype', ],
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
        'DeleteAdvancedCertificateManagerCertificatePackResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteAdvancedCertificateManagerCertificatePackResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteAdvancedCertificateManagerCertificatePackRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
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
        'DeleteAdvancedCertificateManagerCertificatePackResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'ListCertificatePacksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
            ],
        ],
        'DeleteSSLConfigurationResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'ListSSLConfigurationsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CustomSSL', ], ],
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
        'DeleteSSLConfigurationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteSSLConfigurationResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'CheckInstancesNameResultShape' => [
            'type' => 'structure',
            'members' => [
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
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
            ],
        ],
        'SelectDetailListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SelectDetailListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'UniversalSSLSettingsDetailsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UniversalSSLSettingsDetailsResultShape', ],
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
        'RuleGroupDetailsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone_identifier' => [ 'type' => 'string', 'locationName' => 'zone_identifier', ],
                'package_identifier' => [ 'type' => 'string', 'locationName' => 'package_identifier', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
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
        'FirewallPackageDetailsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'WAFRulePackage', ],
            ],
        ],
        'FirewallPackageDetailsRequestShape' => [
            'type' => 'structure',
            'members' => [
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
        'ListRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'WAFRule', ], ],
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
        'PurgeFilesByCache_TagsAndHostOrPrefixResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'PurgeFilesByCache_TagsAndHostOrPrefixResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'PurgeFilesByURLResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'PurgeFilesByURLResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PurgeAllFilesResultShape' => [
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
                'items' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], ],
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
