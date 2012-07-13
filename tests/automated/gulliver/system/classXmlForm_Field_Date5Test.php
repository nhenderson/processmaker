<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 20:28:30.
*/

class classXmlForm_Field_Date5Test extends PHPUnit_Framework_TestCase
{
    /**
     * @var XmlForm_Field_Date5
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $this->object = new XmlForm_Field_Date5();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
    */
    protected function tearDown()
    {
    }

    /**
     * This is the default method to test, if the class still having 
     * the same number of methods.
    */
    public function testNumberOfMethodsInThisClass()
    {
        $this->assertTrue( count($methods) == 29);
    }

    /**
    * @covers XmlForm_Field_Date5::verifyDateFormat
    * @todo   Implement testverifyDateFormat().
    */
    public function testverifyDateFormat()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('verifyDateFormat', $methods ), 'exists method verifyDateFormat' );
        $r = new ReflectionMethod('XmlForm_Field_Date5', 'verifyDateFormat');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'date');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'mask');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers XmlForm_Field_Date5::isvalidBeforeFormat
    * @todo   Implement testisvalidBeforeFormat().
    */
    public function testisvalidBeforeFormat()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('isvalidBeforeFormat', $methods ), 'exists method isvalidBeforeFormat' );
        $r = new ReflectionMethod('XmlForm_Field_Date5', 'isvalidBeforeFormat');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'date');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers XmlForm_Field_Date5::calculateBeforeFormat
    * @todo   Implement testcalculateBeforeFormat().
    */
    public function testcalculateBeforeFormat()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('calculateBeforeFormat', $methods ), 'exists method calculateBeforeFormat' );
        $r = new ReflectionMethod('XmlForm_Field_Date5', 'calculateBeforeFormat');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'date');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'sign');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers XmlForm_Field_Date5::render
    * @todo   Implement testrender().
    */
    public function testrender()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('render', $methods ), 'exists method render' );
        $r = new ReflectionMethod('XmlForm_Field_Date5', 'render');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'value');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
        $this->assertTrue( $params[1]->getName() == 'owner');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers XmlForm_Field_Date5::renderGrid
    * @todo   Implement testrenderGrid().
    */
    public function testrenderGrid()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('renderGrid', $methods ), 'exists method renderGrid' );
        $r = new ReflectionMethod('XmlForm_Field_Date5', 'renderGrid');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'values');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
        $this->assertTrue( $params[1]->getName() == 'owner');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
        $this->assertTrue( $params[2]->getName() == 'onlyValue');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == '');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers XmlForm_Field_Date5::__draw_widget
    * @todo   Implement test__draw_widget().
    */
    public function test__draw_widget()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('__draw_widget', $methods ), 'exists method __draw_widget' );
        $r = new ReflectionMethod('XmlForm_Field_Date5', '__draw_widget');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'pID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'value');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'owner');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == '');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers XmlForm_Field_Date5::getSplitDate
    * @todo   Implement testgetSplitDate().
    */
    public function testgetSplitDate()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getSplitDate', $methods ), 'exists method getSplitDate' );
        $r = new ReflectionMethod('XmlForm_Field_Date5', 'getSplitDate');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'date');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'mask');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

  } 