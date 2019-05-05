<?php

namespace Jdcloud\Test\Disk;

use Jdcloud\Credentials\Credentials;
use Jdcloud\Result;
use Jdcloud\Disk\DiskClient;
use PHPUnit\Framework\TestCase;
use Jdcloud\Endpoint\EndpointProvider;

/**
 * @covers Jdcloud\Disk\DiskClient
 */
class DiskClientTest extends TestCase
{
    private function getCred(){
        $ak = getenv('PHP_TEST_AK');
        $sk = getenv('PHP_TEST_SK');
        print("KEY" . $ak . " sk: " . $sk);
        $cred = new Credentials($ak, $sk);
        return $cred;
    }
    
    public function testDescribeDisks()
        {
            $fix_endpoint = EndpointProvider::patterns([
                '*/*' => ['endpoint' => 'disk.cn-north-1.jdcloud-api.com']
            ]);
    
            $client = new DiskClient([
                'credentials'  => $this->getCred(),
                'version' => 'latest',
                'endpoint_provider' => $fix_endpoint,
                'scheme' => 'http'
            ]);
    
    
            try{
                $res = $client->describeDisks([
                    'regionId'  => 'cn-north-1',
                    'pageNumber'  => '1',
                    'pageSize'  => '10',
                    'filters'     => [
//                         [
//                             'name' => 'diskType',
//                             'values' => ['ssd', 'premium-hdd']
//                         ],
                        [
                            'name' => 'az',
                            'values' => ['cn-north-1a']
                        ]
                    ],
//                     'tags'     => [
//                         [
//                             'key' => 'diskType',
//                             'values' => ['ssd', 'premium-hdd']
//                         ],
//                         [
//                             'key' => 'az',
//                             'values' => ['cn-north-1']
//                         ]
//                     ]
            ]);
            var_dump($res);
            $this->assertNotNull($res);
            $this->assertNotNull($res['requestId']);
            $this->assertNotNull($res['result']);
            $this->assertNotNull($res['result']['totalCount']);
            }catch (\Jdcloud\Exception\JdcloudException $e) {
                print("ERROR");
                var_dump($e->getMessage());
                $this->assertFalse(true);
            }
        }
}