<?php
function testRuleDoesNotApplyToUnusedLocalObjectVariableInFunction()
{
    static $bar;

    return $bar->foo();
}
