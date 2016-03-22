<?php
/* Settings Test cases generated on: 2010-05-31 14:05:09 : 1275334809*/
App::import('Controller', 'Settings');

class TestSettingsController extends SettingsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SettingsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.setting', 'app.user', 'app.announcement', 'app.group', 'app.biography', 'app.comment', 'app.post', 'app.fastfwd', 'app.forward', 'app.favorite', 'app.feedback', 'app.tag', 'app.forwards_tag');

	function startTest() {
		$this->Settings =& new TestSettingsController();
		$this->Settings->constructClasses();
	}

	function endTest() {
		unset($this->Settings);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>