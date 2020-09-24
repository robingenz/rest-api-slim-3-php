<?php
class UserRepository {

    public function __construct(PDO $database)
    {
        $this->database = $database;
    }


}