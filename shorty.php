<?php
/*
    shorty-php - A faster way to shorten your URLs in PHP
	Copyright (C) 2012  Zhaofeng Li (lizhaofeng1998)

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

class shorty{
    private static $vgdapi = 'http://v.gd/create.php';
    private static $isgdapi = 'http://is.gd/create.php';
    private static $rddmeapi = 'http://www.readability.com/api/shortener/v1/urls';
    private static $metamarkapi = 'http://metamark.net/api/rest/simple';
    private static $tolyapi = 'http://to.ly/api.php';
    private static $rewdapi = 'http://rewd.co/api.php';
    private static $safemnapi = 'http://safe.mn/api/shorten';
    
    private static $error = 'Error encountered while shortening URL: ';
    
    private static function shortgd($url, $api){
        $return = file_get_contents($api.'?format=simple&url='.urlencode($url));
        if(strpos($return, 'http') === 0) return $return; //Success
        else throw new Exception(self::$error.$return); //Fail
    }
    public static function vgd($url){return self::shortgd($url, self::$vgdapi);}
    public static function isgd($url){return self::shortgd($url, self::$isgdapi);}
    
    public static function rddme($url){
    	$cxt = array();
		$cxt['http'] = array  
		(  
			'method' => 'POST',  
			'content' => http_build_query(array('url'=>$url)),
		);
		$return = json_decode(file_get_contents(self::$rddmeapi, false, stream_context_create($cxt)));
        if($return->success) return $return->meta->rdd_url;
		else throw new Exception(self::$error.'Unknown error');
    }
    
    public static function metamark($url){
        $return = file_get_contents(self::$metamarkapi.'?long_url='.urlencode($url));
        if(strpos($return, 'ERROR:') === 0) throw new Exception(self::$error.$return);
        else return $return;
    }
    
    public static function toly($url){
        $return = file_get_contents(self::$tolyapi.'?longurl='.urlencode($url));
        if(strpos($return, 'http') === 0) return $return;
        else throw new Exception(self::$error.$return);
    }
    
    public static function rewd($url){
        $return = file_get_contents(self::$rewdapi.'?url='.urlencode($url));
        return $return;
    }
    
    public static function safemn($url){
        $return = json_decode(file_get_contents(self::$safemnapi.'?format=json&url='.urlencode($url)));
        if(isset($return->error)) throw new Exception(self::$error.$return->error);
        else return $return->url;
    }
}
