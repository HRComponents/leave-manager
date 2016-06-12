<?php

/**
 * The MIT License
 *
 * Copyright (c) 2016, Coding Matters, Inc. (Gab Amba <gamba@gabbydgab.com>)
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace LeaveManagerTest\Leave;

use LeaveManager\Module;

class ModuleTest extends \PHPUnit_Framework_TestCase
{
    protected $config;

    public function setUp()
    {
        $module = new Module();
        $this->config = $module->getConfig();
    }

    /**
     * @test
     * @dataProvider configKeys
     */
    public function moduleHasFollowingConfig($key)
    {
        $this->assertArrayHasKey($key, $this->config);
    }

    public function configKeys()
    {
        return [
            'service_manager'       => ['service_manager'],
            'templates'             => ['templates'],
            'view_manager'          => ['view_manager'],
            'middleware_pipeline'   => ['middleware_pipeline'],
            'router'                => ['router'],
            'view_helpers'          => ['view_helpers'],
            'controllers'           => ['controllers'],
            'controller_plugins'    => ['controller_plugins'],
        ];
    }
}
