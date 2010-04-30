<?php
class testRuleDoesNotApplyToUnusedLocalObjectVariableInMethod
{
    function testRuleDoesNotApplyToUnusedLocalObjectVariableInMethod()
    {
        static $foo;

        return $foo->bar()->bing();
    }
}
