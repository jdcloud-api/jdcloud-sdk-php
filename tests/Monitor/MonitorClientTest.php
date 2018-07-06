<?php

namespace Jdcloud\Test\Monitor;

use Jdcloud\Credentials\Credentials;
use Jdcloud\Result;
use Jdcloud\Monitor\MonitorClient;
use PHPUnit\Framework\TestCase;
use Jdcloud\Endpoint\EndpointProvider;

/**
 * @covers Jdcloud\Monitor\MonitorClient
 */
class MonitorClientTest extends TestCase
{
    public function testdescribeMetrics()
    {        
        $client = new MonitorClient([
            'credentials'  => new Credentials('ak', 'sk'),
            'version' => 'latest',
            'http'    => [
                'verify' => 'C:/ca-bundle.crt'
            ]
        ]);
        
        
        try{
            $res = $client->describeMetrics([
                'regionId'  => 'cn-north-1',
                'serviceCode' => 'vm',
            ]);
            var_dump($res);
            $this->assertNotNull($res);
            $this->assertNotNull($res['requestId']);
            $this->assertNotNull($res['result']);
        }catch (\Jdcloud\Exception\JdcloudException $e) {
            print("ERROR");
            var_dump($e->getMessage());
            $this->assertFalse(true);
        }
    }
    
//     public function testcreateAlarm()
//     {
//         $client = new MonitorClient([
//             'credentials'  => new Credentials('35DDDCFFB86CF2D494F0F3B6B0B3EF68', '93C107EF1F3A0C46C6329C04F561A29E'),
//             'version' => 'latest',
//             'http'    => [
//                 'verify' => 'C:/ca-bundle.crt'
//             ]
//         ]);
        
        
//         try{
//             $res = $client->createAlarm([
//                 'regionId'  => 'cn-north-1',
//                 'clientToken'  => 'dsf4safd6hjsfssdf567jaf',
//                 'createAlarmSpec'     => [
//                     'serviceCode' => 'vm',
//                     'resourceIds' => ['i-p1jsfkbki8'],                    
//                     'metric' => 'cpu_util',
//                     'period' => 2,
//                     'calculation' => 'max',
//                     'operation' => '==',
//                     'serviceCode' => 'vm',
//                     'threshold' => 100.0,
//                     'times' => 1,
//                 ]
//             ]);
//             var_dump($res);
//             $this->assertNotNull($res);
//             $this->assertNotNull($res['requestId']);
//             $this->assertNotNull($res['result']);
//         }catch (\Jdcloud\Exception\JdcloudException $e) {
//             print("ERROR");
//             var_dump($e->getMessage());
//             $this->assertFalse(true);
//         }
//     }
}