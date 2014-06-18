<?php

class Kashasheiro extends ActiveRecord\Model {

    static $validates_presence_of = array(
        array('nickname'),
        array('fullname'),
        array('email'),
        array('age')
    );

    static $has_many = array(
        array('kashashas')
    );

}

?>
