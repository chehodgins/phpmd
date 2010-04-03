<?php
/**
 * This file is part of PHP_PMD.
 *
 * PHP Version 5
 *
 * Copyright (c) 2009-2010, Manuel Pichler <mapi@phpmd.org>.
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
 * @copyright  2009-2010 Manuel Pichler. All rights reserved.
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version    SVN: $Id$
 * @link       http://phpmd.org
 */

require_once 'PHPUnit/Framework.php';

require_once dirname(__FILE__) . '/LongClassTest.php';
require_once dirname(__FILE__) . '/LongMethodTest.php';
require_once dirname(__FILE__) . '/LongParameterListTest.php';
require_once dirname(__FILE__) . '/NpathComplexityTest.php';
require_once dirname(__FILE__) . '/TooManyFieldsTest.php';
require_once dirname(__FILE__) . '/TooManyMethodsTest.php';
require_once dirname(__FILE__) . '/WeightedMethodCountTest.php';

/**
 * Main test suite for the PHP_PMD_Rule_Design package.
 *
 * @category   PHP
 * @package    PHP_PMD
 * @subpackage Rule_Design
 * @author     Manuel Pichler <mapi@phpmd.org>
 * @copyright  2009-2010 Manuel Pichler. All rights reserved.
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version    Release: @package_version@
 * @link       http://phpmd.org
 */
class PHP_PMD_Rule_Design_AllTests
{
    /**
     * Creates a phpunit test suite.
     *
     * @return PHPUnit_Framework_TestSuite
     */
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('PHP_PMD_Rule_Design - Tests');

        $suite->addTestSuite('PHP_PMD_Rule_Design_LongClassTest');
        $suite->addTestSuite('PHP_PMD_Rule_Design_LongMethodTest');
        $suite->addTestSuite('PHP_PMD_Rule_Design_LongParameterListTest');
        $suite->addTestSuite('PHP_PMD_Rule_Design_NpathComplexityTest');
        $suite->addTestSuite('PHP_PMD_Rule_Design_TooManyFieldsTest');
        $suite->addTestSuite('PHP_PMD_Rule_Design_TooManyMethodsTest');
        $suite->addTestSuite('PHP_PMD_Rule_Design_WeightedMethodCountTest');

        return $suite;
    }
}
