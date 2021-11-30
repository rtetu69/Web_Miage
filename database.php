<?php

class Database
{
    const DB_HOST = 'mysql:host=localhost;dbname=mvc-training;charset=utf8';
    const DB_USER = 'root';
    const DB_PASSWORD = '';

    public function getConnection(): PDO
    {
        try {
            $connection = new PDO(self::DB_HOST, self::DB_USER, self::DB_PASSWORD);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $connection;
        } catch(\Exception $exception) {
            die ('Connection error : '.$exception->getMessage());
        }
    }
}