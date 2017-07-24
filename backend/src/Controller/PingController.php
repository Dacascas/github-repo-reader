<?php

namespace Tesonet\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class PingController
{
    /** @var  array */
    private $versioningInfo;

    /**
     * PingController constructor.
     * @param array $versioningInfo
     */
    public function __construct(array $versioningInfo)
    {
        $this->versioningInfo = $versioningInfo;
    }

    /**
     * @return JsonResponse
     */
    public function pingAction()
    {
        return new JsonResponse($this->versioningInfo);
    }
}
