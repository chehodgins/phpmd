<?php

class testRuleDoesNotApplyToPrivateObjectField
{
    private $a = null;
    public function testRuleDoesNotApplyToPrivateObjectField () {
        return $this->a->foo()->bar();
    }
}
