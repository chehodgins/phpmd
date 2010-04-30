<?php

class testRuleDoesNotApplyToPrivateArrayField
{
    private $a = null;
    public function testRuleDoesNotApplyToPrivateArrayField () {
        return $this->a[0]++;
    }
}
