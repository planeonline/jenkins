<?php
//namespace RESTFulPhalcon\Tests;
//
//use RESTFulPhalcon;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-02-25 at 22:15:25.
 */
class PlaneControllerTest extends \UnitTestCase // \PHPUnit_Framework_TestCase
{    
    /**
     * @var PlaneController
     */
    protected $_controllerObj;

    /**
     * Controller's url
     * @var string 
     */
    protected $_url = '/plane';
    
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    public function setUp(\Phalcon\DiInterface $di = NULL, \Phalcon\Config $config = NULL)
    {                       
        $_SERVER["REQUEST_METHOD"] = "GET";


        if(false !== strpos(ROOT_PATH,'jenkins')){
            $configPath = ROOT_PATH . '/../app/config/config-ci-test.ini';
        }else{
            $configPath = ROOT_PATH . '/../app/config/config-test.ini';
        }

        $config = new \Phalcon\Config\Adapter\Ini($configPath);
        
        parent::setUp($di,$config);
        $this->_controllerObj = new PlaneController();                
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    public function tearDown()
    {
        unset($_SERVER["REQUEST_METHOD"]);
        parent::tearDown();
    }

    /**
     * @covers RESTFulPhalcon\RestController::onConstruct
     * @todo   Implement testOnConstruct().
     */
    public function testOnConstruct()
    {
//        $this->_controllerObj->indexAction();
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    public function testIndexAction(){
        
        $this->expectOutputString('{"metadata":{"url":":","endpoint":"","method":"GET"},"results":[{"metadata":{"status":"OK","code":200,"model":"Plane","criteria":{"conditions":"id = \"2\"","limit":{"number":"10","offset":"0"}},"size":10,"start":0,"total":0,"count":0},"result":[]}]}');
        
        
        
        //$raw = array("_url" => $this->_url, "expands"=> "make");
        $raw = array("_url" => $this->_url, "id"=> "2");
        
        $_GET += $raw;
        
        $mockRestRequest = $this->getMock("RESTFulPhalcon\RestRequest", array("getParams"));
         
        $mockRestRequest->expects($this->once())
            ->method("getParams")
            ->will($this->returnValue($raw));       
        
        $this->_controllerObj->setRestRequest($mockRestRequest);

        $this->_controllerObj->indexAction();
    }

    /**
     * @covers RESTFulPhalcon\RestController::setRestRequest
     * @todo   Implement testSetRestRequest().
     */
    public function testSetRestRequest()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers RESTFulPhalcon\RestController::getRestRequest
     * @todo   Implement testGetRestRequest().
     */
    public function testGetRestRequest()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
}