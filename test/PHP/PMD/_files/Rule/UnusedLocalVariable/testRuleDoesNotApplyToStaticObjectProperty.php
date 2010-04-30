<?php
class testRuleDoesNotApplyToStaticObjectProperty
{
    protected static $c = null;

    public function testRuleDoesNotApplyToStaticObjectProperty()
    {
        return self::$c->getValue();
    }
}
<?php
class testRuleDoesNotApplyToStaticObjectProperty
{
    protected static $x = null;

    public function testRuleDoesNotApplyToStaticObjectProperty()
    {
        return testRuleDoesNotApplyToStaticProperty::$x->foo();
    }
}
