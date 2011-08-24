<?php
class NormalizeUrlTests extends PHPUnit_Framework_TestCase
{
	public static function setUpBeforeClass()
	{
		require("normalize_url.php");
	}
	
	public function testWwwSubdomain()
	{
		$this->assertEquals("http://example.com/", normalizeURL("http://www.example.com/"));
	}
	
	public function testDefaultPorts()
	{
		$this->assertEquals("http://example.com/", normalizeURL("http://example.com:80/"));
		$this->assertEquals("https://example.com/", normalizeURL("https://example.com:443/"));
	}
	
	public function testDuplicateSlashes()
	{
		$this->assertEquals("http://example.com/", normalizeURL("http://example.com///"));
	}
	
	public function testDecodeUnreservedChars()
	{
		$this->assertEquals("http://example.com/c/", normalizeURL("http://example.com/%63/"));
	}
	
	public function testDirectoryIndex()
	{
		$this->assertEquals("http://example.com/", normalizeURL("http://example.com/index.html"));
	}
	
	public function testPathSegment()
	{
		$this->assertEquals("http://example.com/a/b/c/", normalizeURL("http://example.com/a/./b/../b/%63/"));
	}
	
	public function testAlphabeticParams()
	{
		$this->assertEquals("http://example.com/?a=b&c=d", normalizeURL("http://example.com/?c=d&a=b"));
	}
}