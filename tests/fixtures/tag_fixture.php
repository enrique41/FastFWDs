<?php
/* Tag Fixture generated on: 2010-05-31 14:05:25 : 1275334825 */
class TagFixture extends CakeTestFixture {
	var $name = 'Tag';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'tag' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30),
		'description' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 75),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'tag' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'created' => '2010-05-31 14:40:25'
		),
	);
}
?>