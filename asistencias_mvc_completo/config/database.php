<?php
class Database {
    public static function connect() {
        return new PDO('mysql:host=localhost;dbname=asistencias_db', 'root', '');
    }
}