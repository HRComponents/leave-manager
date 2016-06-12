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

use LeaveManager\Options\ModuleOptions;
use LeaveManager\ConfigProvider;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module
{
    private $config = [];

    /**
     * Return default configuration for zend-mvc applications.
     */
    public function getConfig()
    {
        $provider = new ConfigProvider();

        $this->config = $provider->getTemplateConfig();
        $this->config['middleware_pipeline']    = $provider->getMiddlewareConfig();
        $this->config['service_manager']        = $provider->getDependencyConfig();
        $this->config['router']['routes']       = $provider->getRouteConfig();
        $this->config['navigation']             = $provider->getNavigationConfig();
        $this->config['controllers']            = $provider->getControllerConfig();
        $this->config['controller_plugins']     = $provider->getControllerPluginConfig();

        // Overrides the default config to use Glob module config
        return array_merge_recursive($this->config, $provider->getGlobConfig());
    }

    /**
     * Autoload site settings for variables and layouts
     *
     * @param MvcEvent $event
     */
    public function onBootstrap(MvcEvent $event)
    {
        $eventManager = $event->getApplication()->getEventManager();

        $eventManager->attach('dispatch', [$this, 'loadLeaveCreditVariables'], 10);

        $listener = new ModuleRouteListener();
        $listener->attach($eventManager);
    }

    public function loadLeaveCreditVariables(MvcEvent $event)
    {
        // Fetch configuration
        $config     = $event->getApplication()->getServiceManager()->get("Config");
        $options    = (array_key_exists('leave_credit_settings', $config)) ? $config['leave_credit_settings'] : [];
        $variables  = new ModuleOptions($options);

        // Set configuration
        $event->getViewModel()->setVariables($variables->toArray());
    }
}
