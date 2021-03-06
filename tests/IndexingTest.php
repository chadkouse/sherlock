<?php
/**
 * User: Zachary Tong
 * Date: 2/17/13
 * Time: 7:34 PM
 */

namespace Sherlock\tests;
use Sherlock\Sherlock;


/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-02-07 at 03:12:53.
 */
class IndexingTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var \Sherlock\sherlock
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new \Sherlock\sherlock;
		$this->object->addNode('localhost', '9200');
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
		try{
			$this->object->index('testindexing')->delete();
		}
		catch(\Exception $e)
		{

		}
	}


	function assertThrowsException($exception_name, $code) {
		$e = null;
		try{
			$code();
		}catch (\Exception $e) {
			// No more code, we only want to catch the exception in $e
		}

		$this->assertInstanceOf($exception_name, $e);
	}


	public function testAddDoc()
	{
	 	$sherlock = $this->object;

		$doc = $sherlock->addDocument()->index('testindexing')->type('tweet')->document(array("field" => "test"));
		$response = $doc->execute();
		$this->assertInstanceOf('\sherlock\responses\IndexResponse', $response);
		$this->assertEquals(true, $response->ok);
	}

}