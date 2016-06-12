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

namespace LeaveManager\Options;

use Zend\Stdlib\AbstractOptions;

final class ModuleOptions extends AbstractOptions
{
    /**
     * We use the __ prefix to avoid collisions with properties in
     * user-implementations.
     *
     * @var bool
     */
    protected $__strictMode__ = false;

    /**
     * Total Vacation Leave Credits (days per Year)
     *
     * @var integer
     */
    protected $vacationLeaveCredits = 10;

    /**
     * Total Sick Leave Credits (days per Year)
     *
     * @var integer
     */
    protected $sickLeaveCredits = '3';

    /**
     * Total Emergency Leave Credits (days per Year)
     *
     * @var integer
     */
    protected $emergencyLeaveCredits = 2;

    /**
     * Total Maternity Leave (months per Year)
     *
     * @var integer
     */
    protected $maternityLeaveCredits = 3;

    /**
     * Total Faternal Leave (weeks per Year)
     *
     * @var integer
     */
    protected $faternalLeaveCredits = 1;

    /**
     * @todo PHP 7 Scalar Typehint
     * @see http://php.net/manual/en/migration70.new-features.php
     *
     * @param Integer $days
     */
    public function setVacationLeaveCredits($days)
    {
        $this->vacationLeaveCredits = $days;
    }

    /**
     * @return Integer
     */
    public function getVacationLeaveCredits()
    {
        return $this->vacationLeaveCredits;
    }

    /**
     * @todo PHP 7 Scalar Typehint
     * @see http://php.net/manual/en/migration70.new-features.php
     *
     * @param Integer $days
     */
    public function setSickLeaveCredits($days)
    {
        $this->sickLeaveCredits = $days;
    }

    public function getSickLeaveCredits()
    {
        return $this->sickLeaveCredits;
    }

    /**
     * @todo PHP 7 Scalar Typehint
     * @see http://php.net/manual/en/migration70.new-features.php
     *
     * @param Integer $days
     */
    public function setEmergencyLeaveCredits($days)
    {
        $this->emergencyLeaveCredits = $days;
    }

    public function getEmergencyLeaveCredits()
    {
        return $this->sickLeaveCredits;
    }

    /**
     * @todo PHP 7 Scalar Typehint
     * @see http://php.net/manual/en/migration70.new-features.php
     *
     * @param Integer $months
     */
    public function setMaternityLeaveCredits($months)
    {
        $this->maternityLeaveCredits = $months;
    }

    public function getMaternityLeaveCredits()
    {
        return $this->maternityLeaveCredits;
    }

    /**
     * @todo PHP 7 Scalar Typehint
     * @see http://php.net/manual/en/migration70.new-features.php
     *
     * @param Integer $days
     */
    public function setFaternalLeaveCredits($days)
    {
        $this->faternalLeaveCredits = $days;
    }

    public function getFaternalLeaveCredits()
    {
        return $this->faternalLeaveCredits;
    }
}
