<?php
namespace Jdcloud\Test\Vm;

use Jdcloud\Credentials\Credentials;
use Jdcloud\Result;
use Jdcloud\Vm\VmClient;
use PHPUnit\Framework\TestCase;
use Jdcloud\Endpoint\EndpointProvider;

/**
 * @covers Jdcloud\Vm\VmClient
 */
class VmClientTest extends TestCase
{
    public function testdescribeInstanceTypes()
    {        
        $vm = new VmClient([
            'credentials'  => new Credentials('ak', 'sk'),
            'version' => 'latest',
            'debug'   => [
                'logfn'        => function ($msg) { echo $msg . "\n"; },
                'stream_size'  => 0,
                'scrub_auth'   => true,
                'http'         => true,
                'auth_headers' => [
                    'X-My-Secret-Header' => '[XXX]',
                ],
                'auth_strings' => [
                    '/SuperSecret=[A-Za-z0-9]{20}/i' => 'SuperSecret=[REDACTED]',
                ],
             ],
            'scheme' => 'http'
        ]);
        
       
        try{
        $res = $vm->describeInstanceTypes([
            'Filters'     => 'cn-north-1',
            'regionId'  => 'cn-north-1',
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
    
    public function testDescribeInstance()
    {        
        $vm = new VmClient([
            'credentials'  => new Credentials('ak', 'sk'),
            'version' => 'latest',
            'scheme' => 'https',
            'http'    => [
                'verify' => 'C:/ca-bundle.crt'
            ]
        ]);
        
        
        try{
            $res = $vm->describeInstance([
                'instanceId'     => 'i-y0b7cte32g',
                'regionId'  => 'cn-north-1',
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
    
    public function testCreateInstances()
    {
        $vm = new VmClient([
            'credentials'  => new Credentials('ak', 'sk'),
            'version' => 'latest',
            'scheme' => 'https',
            'http'    => [
                'verify' => 'C:/ca-bundle.crt'
            ]
        ]);
        
        
        try{
            $res = $vm->createInstances([
                'regionId'  => 'cn-north-1',
                'instanceSpec' => [
                    'az' => 'cn-north-1a',
                    'imageId' => '8e187a0a-ea7c-4ad1-ba32-f21e52fb8926',
                    'instanceType' =>  'g.n2.medium',
                    'name' => 'phpcreate',
                    'primaryNetworkInterface' => [
                        'networkInterface' => [
                            'subnetId' => 'subnet-ll47yy373i'
                         ]
                    ],
                    'systemDisk' => [
                        'diskCategory' => 'local'
                    ]
                ]
            ]);
            print_r($res);
            print("Request Id: ". $res['requestId']. "\n");
            print_r($res['result']);
            $this->assertNotNull($res);
            $this->assertNotNull($res['requestId']);
            $this->assertNotNull($res['result']);
        }catch (\Jdcloud\Exception\JdcloudException $e) {
            print("Detail Message: " . $e->getMessage(). "\n");
            print("Request Id: ". $e->getJdcloudRequestId(). "\n");
            print("Error Type: ". $e->getJdcloudErrorType(). "\n");
            print("Error Code: " . $e->getJdcloudErrorCode(). "\n");
            print("Error Detail Status: ". $e->getJdcloudErrorStatus(). "\n");
            print("Error Detail Message: ". $e->getJdcloudErrorMessage(). "\n");
            $this->assertFalse(true);
        }
    }
}
