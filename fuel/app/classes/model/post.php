<?php
    class Model_Post extends Orm\Model {
        protected static $_properties = array(
            'id',
            'author',
            'username',
            'title',
            'body',
            'created_at',
            'tags',
        );
}

    