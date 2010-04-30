<?php
class testRuleDoesNotApplyToUnusedLocalArrayVariableInMethod
{
    function testRuleDoesNotApplyToUnusedLocalArrayVariableInMethod()
    {
        static $foo;

        return 1 + ($foo[0]++);
    }
}
