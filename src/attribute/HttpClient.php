<?php

/*
 * This file is part of the Kuiper package.
 *
 * (c) Ye Wenbin <wenbinye@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace kuiper\http\client\attribute;

use Attribute;
use kuiper\rpc\annotation\RpcClient;

#[Attribute(Attribute::TARGET_CLASS)]
class HttpClient extends RpcClient
{
    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $responseParser;
}