<?php
// ListduijiangController.php

namespace Josecheng\Duijiang\Api\Controller;

use Flarum\Api\Controller\AbstractListController;
use Psr\Http\Message\ServerRequestInterface;
use Tobscure\JsonApi\Document;

class ListduijiangController extends AbstractListController
{
    protected function data(ServerRequestInterface $request, Document $document)
    {
        // 这里可以添加你的控制器逻辑
    }
}
