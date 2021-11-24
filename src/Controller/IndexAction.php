<?php

declare(strict_types=1);

namespace App\Controller;

use App\Module\Log\Entity\Log;
use Core\Http\Interfaces\RequestInterface;
use Core\Http\Response\HtmlResponse;
use Core\View\View;

class IndexAction
{
    private int $perPage;

    public function __construct(int $perPage)
    {
        $this->perPage = $perPage;
    }

    /**
     * @param RequestInterface $request
     * @return HtmlResponse
     * @throws \Exception
     */
    public function __invoke(RequestInterface $request): HtmlResponse
    {
        $type = $request->getQueryParams()['type'] ?? '';
        $sort = $request->getQueryParams()['ts'] ?? '';
        $page = $request->getQueryParams()['page'] ?? 1;

        $offset = ($page - 1) * $this->perPage;
        $logs = Log::find($offset, $this->perPage, ['type' => $type, 'ts' => $sort]);

        return new HtmlResponse(View::render('home', [
            'title' => 'Home page',
            'logs' => $logs,
            'page' => $page,
            'type' => $type
        ]));
    }
}
