<?php
/* Biography Test cases generated on: 2010-05-31 14:05:33 : 1275334533*/
App::import('Model', 'Biography');

class BiographyTestCase extends CakeTestCase {
	var $fixtures = array('app.biography', 'app.user', 'app.announcement', 'app.group', 'app.comment', 'app.fastfwd', 'app.favorite', 'app.feedback', 'app.forward', 'app.forwards_tag', 'app.post', 'app.setting', 'app.tag');

	function startTest() {
		$this->Biography =& ClassRegistry::init('Biography');
	}

	function endTest() {
		unset($this->Biography);
		ClassRegistry::flush();
	}

}
?>