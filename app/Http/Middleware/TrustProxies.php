}
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
     */
     * @var int
     *
     * The headers that should be used to detect proxies.
    /**

    protected $proxies;
     */
     * @var array|string
     *
     * The trusted proxies for this application.
    /**
{
class TrustProxies extends Middleware

use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;

namespace App\Http\Middleware;

<?php
