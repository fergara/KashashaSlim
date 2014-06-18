<?php

class Score extends ActiveRecord\Model {

    static $validates_presence_of = array(
        array('score'),
        array('kashasha_id'),
        array('kashasheiro_id'),
        array('bar_id')
    );

    static $belongs_to = array(
        array('kashasheiro'),
        array('kashasha'),
        array('bar')
    );
}

?>
