<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved.
 *
 * 版权所有 （C）阿里云计算有限公司
 */

namespace Aliyun\Common\Auth;

use Aliyun\Common\Utilities\AssertUtils;

abstract class ServiceSignature
{
    abstract public function getSignatureMethod();
    abstract public function getSignatureVersion();
    abstract protected function computeSignatureCore($key, $data);

    public function computeSignature($key, $data)
    {
        AssertUtils::assertNotEmpty($key, 'key');
        AssertUtils::assertNotEmpty($data, 'data');

        return $this->computeSignatureCore($key, $data);
    }

    public static function factory()
    {
        return new HmacSHA1Signature();
    }
}
