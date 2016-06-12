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

namespace LeaveManager;

class ConfigProvider
{
    /**
     * Return configuration for this component.
     *
     * @return array
     */
    public function __invoke()
    {
        return [
            "middleware_pipeline"   => $this->getMiddlewareConfig(),
            "dependencies"          => $this->getDependencyConfig(),
            "controllers"           => $this->getControllerConfig(),
            "controller_plugins"    => $this->getControllerPluginConfig(),
            "navigation"            => $this->getNavigationConfig(),
            "routes"                => $this->getRouteConfig(),
            $this->getTemplateConfig(),
            $this->getGlobConfig()
        ];
    }

    /**
     * Return dependencies mapping for this module.
     *
     * @return array
     */
    public function getDependencyConfig()
    {
        return include __DIR__ . "/../config/dependencies.config.php";
    }

    /**
     * Return templates mapping for this module.
     *
     * @return array
     */
    public function getTemplateConfig()
    {
        return include __DIR__ . "/../config/templates.config.php";
    }

    /**
     * Return routes mapping for this module.
     *
     * @return array
     */
    public function getRouteConfig()
    {
        return include __DIR__ . "/../config/routes.config.php";
    }

    /**
     * Return middlewares mapping for this module.
     *
     * @return array
     */
    public function getMiddlewareConfig()
    {
        return include __DIR__ . "/../config/middleware.config.php";
    }

    /**
     * Return navigation mapping for this module.
     *
     * @return array
     */
    public function getNavigationConfig()
    {
        return include __DIR__ . "/../config/navigation.config.php";
    }

    /**
     * Return Glob configuration for this module.
     *
     * @return array
     */
    public function getGlobConfig()
    {
        return include __DIR__ . "/../config/glob.config.php";
    }

    /**
     * Return controllers mapping for this module.
     *
     * @return array
     */
    public function getControllerConfig()
    {
        return include __DIR__ . "/../config/controllers.config.php";
    }

    /**
     * Return controller-plugins mapping for this module.
     *
     * @return array
     */
    public function getControllerPluginConfig()
    {
        return include __DIR__ . "/../config/controller-plugins.config.php";
    }
}
