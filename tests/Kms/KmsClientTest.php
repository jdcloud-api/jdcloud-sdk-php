<?php

namespace Jdcloud\Test\Kms;

use Jdcloud\Credentials\Credentials;
use Jdcloud\Result;
use Jdcloud\Kms\KmsClient;
use PHPUnit\Framework\TestCase;
use Jdcloud\Endpoint\EndpointProvider;

/**
 * @covers Jdcloud\Kms\KmsClient
 */
class KmsClientTest extends TestCase
{
    private function getCred(){
        $ak = getenv('PHP_TEST_AK');
        $sk = getenv('PHP_TEST_SK');
        print("KEY" . $ak . " sk: " . $sk);
        $cred = new Credentials($ak, $sk);
        return $cred;
    }
    
    
    
    public function testDescribeKeyDetail()
    {
        $fix_endpoint = EndpointProvider::patterns([
            '*/*' => ['endpoint' => 'kms.cn-north-1.jdcloud-api.com']
        ]);
        
        $client = new KmsClient([
            'credentials'  => $this->getCred(),
            'version' => 'latest',
            'endpoint_provider' => $fix_endpoint,
            'scheme' => 'http'
        ]);
        
        
        try{
            $res = $client->describeKeyDetail([
                'regionId'  => 'cn-north-1',
                'keyId'  => 'gl2qchfl44k87orz'
            ]);
            var_dump($res);
            $this->assertNotNull($res);
            $this->assertNotNull($res['requestId']);
            $this->assertNotNull($res['result']);
            $this->assertNotNull($res['result']['keyDetail']);
            $this->assertNotNull($res['result']['keyDetail']['keyName']);
        }catch (\Jdcloud\Exception\JdcloudException $e) {
            print("ERROR");
            var_dump($e->getMessage());
            $this->assertFalse(true);
        }
    }
    
    public function testDescribeKmss()
        {
            $fix_endpoint = EndpointProvider::patterns([
                '*/*' => ['endpoint' => 'kms.cn-north-1.jdcloud-api.com']
            ]);
    
            $client = new KmsClient([
                'credentials'  => $this->getCred(),
                'version' => 'latest',
                'endpoint_provider' => $fix_endpoint,
                'scheme' => 'http'
            ]);
    
    
            try{
                $res = $client->describeKeyList([
                    'regionId'  => 'cn-north-1',
                    'pageNumber'  => '1',
                    'pageSize'  => '10'                    
            ]);
            var_dump($res);
            $this->assertNotNull($res);
            $this->assertNotNull($res['requestId']);
            $this->assertNotNull($res['result']);
            $this->assertNotNull($res['result']['keyList']);
            }catch (\Jdcloud\Exception\JdcloudException $e) {
                print("ERROR");
                var_dump($e->getMessage());
                $this->assertFalse(true);
            }
        }
}