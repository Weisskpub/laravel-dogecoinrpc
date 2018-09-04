<?php

namespace Weisskpub\Dogecoin\Traits;

trait Dogecoind
{
    public function dogecoind()
    {
        return app('dogecoind');
    }
}
