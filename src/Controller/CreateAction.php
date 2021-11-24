<?php

declare(strict_types=1);

namespace App\Controller;

use App\Module\Log\Entity\Log;
use Core\Http\Interfaces\RequestInterface;
use Core\Http\Response\HtmlResponse;
use Core\View\View;

class CreateAction
{
    /**
     * @param RequestInterface $request
     * @return HtmlResponse
     * @throws \Exception
     */
    public function __invoke(RequestInterface $request): HtmlResponse
    {
        if ($request->getMethod() === 'POST') {
            (new Log())
                ->setTs((new \DateTime()))
                ->setType((int) $request->getParsedBody()['type'])
                ->setMessage($request->getParsedBody()['message'])
                ->save();
            $request->locationTo('/');
        }

        return new HtmlResponse(View::render('create', [
            'title' => 'Create page',
        ]));
    }
}
