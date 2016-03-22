<?php
/* Tag Test cases generated on: 2010-05-31 14:05:26 : 1275334826*/
App::import('Model', 'Tag');

class TagTestCase extends CakeTestCase {
	var $fixtures = array('app.tag', 'app.user', 'app.announcement', 'app.group', 'app.biography', 'app.comment', 'app.post', 'app.fastfwd', 'app.forward', 'app.favorite', 'app.feedback', 'app.forwards_tag', 'app.setting');

	function startTest() {
		$this->Tag =& ClassRegistry::init('Tag');
	}

	function endTest() {
		unset($this->Tag);
		ClassRegistry::flush();
	}

}
?>