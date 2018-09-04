<?php

if (! function_exists('dogecoind')) {
    /**
     * Get dogecoind client instance.
     *
     * @return \Weisskpub\Dogecoin\Client
     */
    function dogecoind()
    {
        return app('dogecoind');
    }
}
