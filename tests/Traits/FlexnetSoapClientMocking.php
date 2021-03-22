<?php

namespace Flexsim\FlexnetOperations\Tests\Traits;

use function PHPUnit\Framework\directoryExists;

trait FlexnetSoapClientMocking
{
    protected function generateSoapClientMock($servicePath)
    {
        return $this->getMockFromWsdl($this->getWsdlsPath() . $servicePath . '.wsdl');
    }

    protected function getWsdlsPath()
    {
        $rootDirectory = explode('tests', __DIR__)[0];

        if (directoryExists($wsdlsDir = $rootDirectory . 'wsdls/')) {
            return $wsdlsDir;
        }
    }
}
