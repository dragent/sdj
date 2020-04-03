<?php

    /**
     *
     */
    interface entitieDao
    {
        public function create( $object);
        public function deleteById( $id);
        public function searchById( $id);
        public function modifyById( $id, $object);
        public function getAll();
        public function deleteAll();
    }
