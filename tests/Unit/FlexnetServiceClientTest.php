<?php

namespace Flexsim\FlexnetOperations\Tests\Unit;

use Flexsim\FlexnetOperations\Clients\EntitlementOrderServiceClient;
use Flexsim\FlexnetOperations\Clients\FlexnetServiceClient;
use Flexsim\FlexnetOperations\Tests\Traits\FlexnetSoapClientMocking;
use PHPUnit\Framework\TestCase;
use RecursiveCallbackFilterIterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RecursiveRegexIterator;
use SoapClient;

class FlexnetServiceClientTest extends TestCase
{
    use FlexnetSoapClientMocking;

    protected $url = 'http://172.25.102.240/flexnet/services';
    protected $username = 'username';
    protected $password = 'password';
    protected $soapOptions = [];

    public function testAllWsdlServicesWork()
    {

        $directory = new RecursiveDirectoryIterator($this->getWsdlsPath(), RecursiveDirectoryIterator::SKIP_DOTS | RecursiveDirectoryIterator::KEY_AS_PATHNAME);

        $filter = new RecursiveRegexIterator($directory, '/wsdl/');

        $iterator = new RecursiveIteratorIterator($filter);

        foreach ($iterator as $info) {
            $flexnetClient = new FlexnetServiceClient($info->getPathName(), $this->username, $this->password);
            $this->assertInstanceOf(SoapClient::class, $flexnetClient->getSoapClient());
        }
    }
}
