<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'gulliver/system/class.restClient.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 20:28:28.
*/

class classRestClientTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var RestClient
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $this->object = new RestClient();
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
        $this->assertTrue( count($methods) == 20);
    }

    /**
    * @covers RestClient::__construct
    * @todo   Implement test__construct().
    */
    public function test__construct()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('__construct', $methods ), 'exists method __construct' );
        $r = new ReflectionMethod('RestClient', '__construct');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers RestClient::execute
    * @todo   Implement testexecute().
    */
    public function testexecute()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('execute', $methods ), 'exists method execute' );
        $r = new ReflectionMethod('RestClient', 'execute');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers RestClient::getHeaders
    * @todo   Implement testgetHeaders().
    */
    public function testgetHeaders()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getHeaders', $methods ), 'exists method getHeaders' );
        $r = new ReflectionMethod('RestClient', 'getHeaders');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers RestClient::getResponse
    * @todo   Implement testgetResponse().
    */
    public function testgetResponse()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getResponse', $methods ), 'exists method getResponse' );
        $r = new ReflectionMethod('RestClient', 'getResponse');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers RestClient::getResponseCode
    * @todo   Implement testgetResponseCode().
    */
    public function testgetResponseCode()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getResponseCode', $methods ), 'exists method getResponseCode' );
        $r = new ReflectionMethod('RestClient', 'getResponseCode');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers RestClient::getResponseMessage
    * @todo   Implement testgetResponseMessage().
    */
    public function testgetResponseMessage()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getResponseMessage', $methods ), 'exists method getResponseMessage' );
        $r = new ReflectionMethod('RestClient', 'getResponseMessage');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers RestClient::getResponseContentType
    * @todo   Implement testgetResponseContentType().
    */
    public function testgetResponseContentType()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getResponseContentType', $methods ), 'exists method getResponseContentType' );
        $r = new ReflectionMethod('RestClient', 'getResponseContentType');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers RestClient::setNoFollow
    * @todo   Implement testsetNoFollow().
    */
    public function testsetNoFollow()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('setNoFollow', $methods ), 'exists method setNoFollow' );
        $r = new ReflectionMethod('RestClient', 'setNoFollow');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers RestClient::close
    * @todo   Implement testclose().
    */
    public function testclose()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('close', $methods ), 'exists method close' );
        $r = new ReflectionMethod('RestClient', 'close');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers RestClient::setUrl
    * @todo   Implement testsetUrl().
    */
    public function testsetUrl()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('setUrl', $methods ), 'exists method setUrl' );
        $r = new ReflectionMethod('RestClient', 'setUrl');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'url');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers RestClient::setContentType
    * @todo   Implement testsetContentType().
    */
    public function testsetContentType()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('setContentType', $methods ), 'exists method setContentType' );
        $r = new ReflectionMethod('RestClient', 'setContentType');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'contentType');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers RestClient::setCredentials
    * @todo   Implement testsetCredentials().
    */
    public function testsetCredentials()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('setCredentials', $methods ), 'exists method setCredentials' );
        $r = new ReflectionMethod('RestClient', 'setCredentials');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'user');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'pass');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers RestClient::setMethod
    * @todo   Implement testsetMethod().
    */
    public function testsetMethod()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('setMethod', $methods ), 'exists method setMethod' );
        $r = new ReflectionMethod('RestClient', 'setMethod');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'method');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers RestClient::setParameters
    * @todo   Implement testsetParameters().
    */
    public function testsetParameters()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('setParameters', $methods ), 'exists method setParameters' );
        $r = new ReflectionMethod('RestClient', 'setParameters');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'params');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers RestClient::createClient
    * @todo   Implement testcreateClient().
    */
    public function testcreateClient()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('createClient', $methods ), 'exists method createClient' );
        $r = new ReflectionMethod('RestClient', 'createClient');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'url');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers RestClient::post
    * @todo   Implement testpost().
    */
    public function testpost()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('post', $methods ), 'exists method post' );
        $r = new ReflectionMethod('RestClient', 'post');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'url');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'params');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'user');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
        $this->assertTrue( $params[3]->getName() == 'pwd');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == false);
        $this->assertTrue( $params[4]->getName() == 'contentType');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == true);
        $this->assertTrue( $params[4]->getDefaultValue() == 'multipart/form-data');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers RestClient::put
    * @todo   Implement testput().
    */
    public function testput()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('put', $methods ), 'exists method put' );
        $r = new ReflectionMethod('RestClient', 'put');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'url');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'body');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'user');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == '');
        $this->assertTrue( $params[3]->getName() == 'pwd');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == '');
        $this->assertTrue( $params[4]->getName() == 'contentType');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == true);
        $this->assertTrue( $params[4]->getDefaultValue() == '');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers RestClient::get
    * @todo   Implement testget().
    */
    public function testget()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('get', $methods ), 'exists method get' );
        $r = new ReflectionMethod('RestClient', 'get');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'url');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'user');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'pwd');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
        $this->assertTrue( $params[3]->getName() == 'contentType');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == '');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers RestClient::delete
    * @todo   Implement testdelete().
    */
    public function testdelete()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('delete', $methods ), 'exists method delete' );
        $r = new ReflectionMethod('RestClient', 'delete');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'url');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'user');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
        $this->assertTrue( $params[2]->getName() == 'pwd');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == '');
        $this->assertTrue( $params[3]->getName() == 'contentType');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == '');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers RestClient::call
    * @todo   Implement testcall().
    */
    public function testcall()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('call', $methods ), 'exists method call' );
        $r = new ReflectionMethod('RestClient', 'call');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'method');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'url');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'body');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
        $this->assertTrue( $params[3]->getName() == 'user');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == '');
        $this->assertTrue( $params[4]->getName() == 'pwd');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == true);
        $this->assertTrue( $params[4]->getDefaultValue() == '');
        $this->assertTrue( $params[5]->getName() == 'contentType');
        $this->assertTrue( $params[5]->isArray() == false);
        $this->assertTrue( $params[5]->isOptional () == true);
        $this->assertTrue( $params[5]->getDefaultValue() == '');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

  } 