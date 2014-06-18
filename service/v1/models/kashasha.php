<?php

class Kashasha extends ActiveRecord\Model {
    
    static $validates_presence_of = array(
        array('popularname'),
        array('realname'),
        array('manufacturer'),
        array('city_id')
    );

    static $belongs_to = array( //city_id in the Kashashas table
        array('city')
    );

    static $has_many = array(
        array('scores'),
        array('kashasheiros', 'through' => 'scores')
    );
}

?>


