<?php
function testRuleDoesNotApplyToUnusedLocalArrayVariableInFunction()
{
    static $bar;

    return 1 + ($bar[0]++);
}
