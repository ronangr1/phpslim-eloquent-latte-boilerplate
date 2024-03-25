<?php

namespace App\Template;

use Latte\Engine;
use Psr\Http\Message\ResponseInterface;

class Template extends AbstractTemplate
{
    /**
     * @param \Latte\Engine $templateEngine
     */
    public function __construct(
        protected readonly Engine $templateEngine
    ) {
    }

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param array $args
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function render(ResponseInterface $response, array $args): ResponseInterface
    {
        $this->templateEngine->setTempDirectory(BP . '/views/temp');
        $this->templateEngine->setautoRefresh();
        $templateToString = $this->templateEngine->renderToString(sprintf(BP . '/views/%s.latte', $args['template']));
        $response->getBody()->write($templateToString);
        return $response;
    }
}