<?php

namespace Jdcloud\Test\Vpc;

use Jdcloud\Credentials\Credentials;
use Jdcloud\Result;
use Jdcloud\Vpc\VpcClient;
use PHPUnit\Framework\TestCase;
use Jdcloud\Endpoint\EndpointProvider;

/**
 * @covers Jdcloud\Vpc\VpcClient
 */
class VpcClientTest extends TestCase
{
    private function getCred(){
        $ak = getenv('PHP_TEST_AK');
        $sk = getenv('PHP_TEST_SK');
        print("KEY" . $ak . " sk: " . $sk);
        $cred = new Credentials($ak, $sk);
        return $cred;
    }
    
    public function testModifyVpc()
    {        
        $client = new VpcClient([
            'credentials'  => $this->getCred(),
            'version' => 'latest',
            'scheme' => 'http'
        ]);
        
        
        try{
            $res = $client->modifyVpc([
                'regionId'  => 'cn-north-1',
                'vpcId'  => 'vpc-ouzf97gizz',
                'description'  => date("Y/m/d")
            ]);
            var_dump($res);
            $this->assertNotNull($res);
            $this->assertNotNull($res['requestId']);
        }catch (\Jdcloud\Exception\JdcloudException $e) {
            print("ERROR");
            var_dump($e->getMessage());
            $this->assertFalse(true);
        }
    }
    
//     public function testDescribeVpcs()
//         {
//             $fix_endpoint = EndpointProvider::patterns([
//                 '*/*' => ['endpoint' => 'vpc.cn-north-1.jdcloud-api.com']
//             ]);
    
//             $client = new VpcClient([
//                 'credentials'  => $this->getCred(),
//                 'version' => 'latest',
//                 'endpoint_provider' => $fix_endpoint,
//                 'scheme' => 'http'
//             ]);
    
    
//             try{
//                 $res = $client->describeVpcs([
//                     'regionId'  => 'cn-north-1',
//                     'pageNumber'  => '1',
//                     'pageSize'  => '10'
//             ]);
//             var_dump($res);
//             $this->assertNotNull($res);
//             $this->assertNotNull($res['requestId']);
//             $this->assertNotNull($res['result']);
//             $this->assertNotNull($res['result']['totalCount']);
//             }catch (\Jdcloud\Exception\JdcloudException $e) {
//                 print("ERROR");
//                 var_dump($e->getMessage());
//                 $this->assertFalse(true);
//             }
//         }
}