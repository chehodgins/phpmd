<?php
/**
 * This file is part of PHP_PMD.
 *
 * PHP Version 5
 *
 * Copyright (c) 2009-2011, Manuel Pichler <mapi@phpmd.org>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Manuel Pichler nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @category   PHP
 * @package    PHP_PMD
 * @subpackage Rule_Design
 * @author     Manuel Pichler <mapi@phpmd.org>
 * @copyright  2009-2011 Manuel Pichler. All rights reserved.
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version    SVN: $Id$
 * @link       http://phpmd.org
 */

require_once dirname(__FILE__) . '/../../AbstractTest.php';

require_once 'PHP/PMD/Rule/Design/CouplingBetweenObjects.php';

/**
 * Test case for the {@link PHP_PMD_Rule_Design_CouplingBetweenObjects} class.
 *
 * @category   PHP
 * @package    PHP_PMD
 * @subpackage Rule_Design
 * @author     Manuel Pichler <mapi@phpmd.org>
 * @copyright  2009-2011 Manuel Pichler. All rights reserved.
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version    Release: @package_version@
 * @link       http://phpmd.org
 *
 * @ticket 10474987
 * @covers PHP_PMD_Rule_Design_CouplingBetweenObjects
 * @group phpmd
 * @group phpmd::rule
 * @group phpmd::rule::design
 */
class PHP_PMD_Rule_Design_CouplingBetweenObjectsTest extends PHP_PMD_AbstractTest
{
    /**
     * testRuleNotAppliesToClassWithCboLessThanThreshold
     * 
     * @return void
     */
    public function testRuleNotAppliesToClassWithCboLessThanThreshold()
    {
        $rule = new PHP_PMD_Rule_Design_CouplingBetweenObjects();
        $rule->setReport($this->getReportMock(0));
        $rule->addProperty('minimum', '42');
        $rule->apply($this->getClassMock('cbo', 41));
    }

    /**
     * testRuleAppliesToClassWithCboEqualToThreshold
     *
     * @return void
     */
    public function testRuleAppliesToClassWithCboEqualToThreshold()
    {
        $rule = new PHP_PMD_Rule_Design_CouplingBetweenObjects();
        $rule->setReport($this->getReportMock(1));
        $rule->addProperty('minimum', '42');
        $rule->apply($this->getClassMock('cbo', 42));        
    }

    /**
     * testRuleAppliesToClassWithCboGreaterThanThreshold
     *
     * @return void
     */
    public function testRuleAppliesToClassWithCboGreaterThanThreshold()
    {
        $rule = new PHP_PMD_Rule_Design_CouplingBetweenObjects();
        $rule->setReport($this->getReportMock(1));
        $rule->addProperty('minimum', '41');
        $rule->apply($this->getClassMock('cbo', 42));
    }
}