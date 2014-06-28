<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved.
 *
 * 版权所有 （C）阿里云计算有限公司
 */
namespace Aliyun\OSS\Utilities;

abstract class OSSResponseParserFactory
{
    public static function factory()
    {
        return new OSSSXParserFactory();
    }

    abstract public function createParser($name);
    abstract public function createErrorParser();
}
