<?php
require_once('shorty.php');
class ShortyTest extends PHPUnit_Framework_TestCase
{
    public function testisgd()
    {
        echo "Now shortening https://github.com/lizhaofeng1998/shorty-php with is.gd\n";
        $return = shorty::isgd('https://github.com/lizhaofeng1998/shorty-php');
        echo 'We got '.$return."\n";
        $expected = 'http%s';
        $this->assertStringMatchesFormat($expected, $return);
    }
    
    public function testvgd()
    {
        echo "Now shortening https://github.com/lizhaofeng1998/shorty-php with v.gd\n";
        $return = shorty::vgd('https://github.com/lizhaofeng1998/shorty-php');
        echo 'We got '.$return."\n";
        $expected = 'http%s';
        $this->assertStringMatchesFormat($expected, $return);
    }
    
    public function testrddme()
    {
        echo "Now shortening https://github.com/lizhaofeng1998/shorty-php with rdd.me\n";
        $return = shorty::rddme('https://github.com/lizhaofeng1998/shorty-php');
        echo 'We got '.$return."\n";
        $expected = 'http%s';
        $this->assertStringMatchesFormat($expected, $return);
    }
    
    /* Skipping metamark.net test due to unstable API
    public function testmetamark()
    {
        echo "Now shortening https://github.com/lizhaofeng1998/shorty-php with metamark.net\n";
        $return = shorty::metamark('https://github.com/lizhaofeng1998/shorty-php');
        echo 'We got '.$return."\n";
        $expected = 'http%s';
        $this->assertStringMatchesFormat($expected, $return);
    }
    */
    
    public function testtoly()
    {
        echo "Now shortening https://github.com/lizhaofeng1998/shorty-php with to.ly\n";
        $return = shorty::toly('https://github.com/lizhaofeng1998/shorty-php');
        echo 'We got '.$return."\n";
        $expected = 'http%s';
        $this->assertStringMatchesFormat($expected, $return);
    }
    
    public function testrewd()
    {
        echo "Now shortening https://github.com/lizhaofeng1998/shorty-php with rewd.co\n";
        $return = shorty::rewd('https://github.com/lizhaofeng1998/shorty-php');
        echo 'We got '.$return."\n";
        $expected = 'http%s';
        $this->assertStringMatchesFormat($expected, $return);
    }

    public function testsafemn()
    {
        echo "Now shortening https://github.com/lizhaofeng1998/shorty-php with safe.mn\n";
        $return = shorty::safemn('https://github.com/lizhaofeng1998/shorty-php');
        echo 'We got '.$return."\n";
        $expected = 'http%s';
        $this->assertStringMatchesFormat($expected, $return);
    }
    
    public function testshortr()
    {
        echo "Now shortening https://github.com/lizhaofeng1998/shorty-php with shortr.info\n";
        $return = shorty::shortr('https://github.com/lizhaofeng1998/shorty-php');
        echo 'We got '.$return."\n";
        $expected = 'http%s';
        $this->assertStringMatchesFormat($expected, $return);
    }
}
?>
