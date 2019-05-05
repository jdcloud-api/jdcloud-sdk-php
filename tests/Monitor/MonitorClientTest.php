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
    private function getCred(){
        $ak = getenv('PHP_TEST_AK');
        $sk = getenv('PHP_TEST_SK');
        print("KEY" . $ak . " sk: " . $sk);
        $cred = new Credentials($ak, $sk);
        return $cred;
    }
    
    public function testdescribeMetrics()
    {        
        $client = new MonitorClient([
            'credentials'  => $this->getCred(),
            
            'version' => 'latest',
            'scheme' => 'http'
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
            $this->assertNotNull($res['result']['metrics']);
        }catch (\Jdcloud\Exception\JdcloudException $e) {
            print("ERROR");
            var_dump($e->getMessage());
            $this->assertFalse(true);
        }
    }
    
//     public function testcreateAlarm()
//     {
//         $client = new MonitorClient([
//             'credentials'  => $this->getCred(),
            
//             'version' => 'latest',
//             'scheme' => 'http'
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