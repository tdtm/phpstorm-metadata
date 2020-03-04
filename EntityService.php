<?php

    namespace Example;

    interface EntityService
    {
        public function findById($id);

        public function findMany($query);
    }
