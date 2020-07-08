<?php

/**
 *
 */
interface entity
{
    public function create( $object);
    public function deleteById( $id);
    public function searchById( $id);
    public function modifyById( $object);
    public function getAll();
    public function deleteAll();
}