<?php
class testRuleDoesNotApplyToNestedMethodCalls
{
    private function _foo()
    {

    }

    protected function bar()
    {
        $this->_foo()->bar()->bing();
    }
}
