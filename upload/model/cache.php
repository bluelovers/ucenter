<?php

/*
	[UCenter] (C)2001-2009 Comsenz Inc.
	This is NOT a freeware, use is subject to license terms

	$Id: cache.php 845 2008-12-08 05:36:51Z zhaoxiongfei $
*/

!defined('IN_UC') && exit('Access Denied');

if(!function_exists('file_put_contents')) {
	function file_put_contents($filename, $s) {
		$fp = @fopen($filename, 'w');
		@fwrite($fp, $s);
		@fclose($fp);
	}
}

class cachemodel {

	var $db;
	var $base;
	var $map;

	function __construct(&$base) {
		$this->cachemodel($base);
	}

	function cachemodel(&$base) {
		$this->base = $base;
		$this->db = $base->db;
		$this->map = array(
			'settings' => array('settings'),
			'badwords' => array('badwords'),
			'plugins' => array('plugins'),
			'apps' => array('apps'),
		);
	}

	//public
	function updatedata($cachefile = '') {
		if($cachefile) {
			foreach((array)$this->map[$cachefile] as $modules) {
				/*
				$s = "<?php\r\n";
				*/
				$s = "<?php\n";
				foreach((array)$modules as $m) {
					$method = "_get_$m";
//					$s .= '$_CACHE[\''.$m.'\'] = '.var_export($this->$method(), TRUE).";\r\n";
					$s .= '$_CACHE[\''.$m.'\'] = '.var_export($this->$method(), TRUE).";\n";
				}
				/*
				$s .= "\r\n?>";
				*/
				$s .= "\n?>";
				@file_put_contents(UC_DATADIR."./cache/$cachefile.php", $s);
			}
		} else {
			foreach((array)$this->map as $file => $modules) {
				/*
				$s = "<?php\r\n";
				*/
				$s = "<?php\n";
				foreach($modules as $m) {
					$method = "_get_$m";
//					$s .= '$_CACHE[\''.$m.'\'] = '.var_export($this->$method(), TRUE).";\r\n";
					$s .= '$_CACHE[\''.$m.'\'] = '.var_export($this->$method(), TRUE).";\n";
				}
				/*
				$s .= "\r\n?>";
				*/
				$s .= "\n?>";
				@file_put_contents(UC_DATADIR."./cache/$file.php", $s);
			}
		}
	}

	function updatetpl() {
		$tpl = dir(UC_DATADIR.'view');
		while($entry = $tpl->read()) {
			if(preg_match("/\.php$/", $entry)) {
				@unlink(UC_DATADIR.'view/'.$entry);
			}
		}
		$tpl->close();
	}

	//private
	function _get_badwords() {
		$data = $this->db->fetch_all("SELECT * FROM ".UC_DBTABLEPRE."badwords");
		$return = array();
		if(is_array($data)) {
			foreach($data as $k => $v) {
				$return['findpattern'][$k] = $v['findpattern'];
				$return['replace'][$k] = $v['replacement'];
			}
		}
		return $return;
	}

	//private
	function _get_apps() {
		$this->base->load('app');
		$apps = $_ENV['app']->get_apps();
		$apps2 = array();
		if(is_array($apps)) {
			foreach($apps as $v) {
				$apps2[$v['appid']] = $v;
			}
		}
		return $apps2;
	}

	//private
	function _get_settings() {
		return $this->base->get_setting();
	}

	//private
	function _get_plugins() {
		$this->base->load('plugin');
		return $_ENV['plugin']->get_plugins();
	}
}

?>