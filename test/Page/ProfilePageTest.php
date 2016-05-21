<?php

/**
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Academe\LeaveTest\Page;

use Academe\Leave\Page\ProfilePage as ViewPage;
use Zend\Diactoros\Response;
use Zend\Diactoros\ServerRequest;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class ProfilePageTest extends \PHPUnit_Framework_TestCase
{
    /** @var RouterInterface */
    protected $router;

    /** @var TemplateRendererInterface */
    protected $template;

    protected function setUp()
    {
        $this->router = $this->prophesize(RouterInterface::class);
        $this->template = $this->prophesize(TemplateRendererInterface::class);
    }

    /**
     * @todo Fixed correct response
     */
    public function testResponse()
    {
        $page = new ViewPage($this->router->reveal(), $this->template->reveal());
        $response = $page(new ServerRequest(['/leave/profile']), new Response(), function () {
        });

        $this->assertTrue($response instanceof Response);
    }
}
