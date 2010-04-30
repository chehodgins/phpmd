<?php
class testRuleDoesNotApplyToStaticArrayProperty
{
    protected static $a = array();

    public function testRuleDoesNotApplyToStaticArrayProperty()
    {
        return self::$a[0];
    }
}
<?php
class testRuleDoesNotApplyToStaticArrayProperty
{
    protected static $x = null;

    public function testRuleDoesNotApplyToStaticArrayProperty()
    {
        return testRuleDoesNotApplyToStaticProperty::$x[0];
    }
}
