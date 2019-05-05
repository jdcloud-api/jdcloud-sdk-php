<?php

namespace Jdcloud\Test\Mps;

use Jdcloud\Credentials\Credentials;
use Jdcloud\Result;
use Jdcloud\Mps\MpsClient;
use PHPUnit\Framework\TestCase;
use Jdcloud\Endpoint\EndpointProvider;

/**
 * @covers Jdcloud\Mps\MpsClient
 */
class MpsClientTest extends TestCase
{
    private function getCred(){
        $ak = getenv('PHP_TEST_AK');
        $sk = getenv('PHP_TEST_SK');
        print("KEY" . $ak . " sk: " . $sk);
        $cred = new Credentials($ak, $sk);
        return $cred;
    }
    
    public function testDescribeMpss()
        {    
            $client = new MpsClient([
                'credentials'  => $this->getCred(),
                'version' => 'latest',
                'scheme' => 'http'
            ]);
    
    
            try{
                $res = $client->listThumbnailTask([
                    'regionId'  => 'cn-north-1'
            ]);
            var_dump($res);
            $this->assertNotNull($res);
            $this->assertNotNull($res['requestId']);
            $this->assertNotNull($res['result']);
            $this->assertNotNull($res['result']['limit']);
            }catch (\Jdcloud\Exception\JdcloudException $e) {
                print("ERROR");
                var_dump($e->getMessage());
                $this->assertFalse(true);
            }
        }
}