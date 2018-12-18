<?php

     return [
            'database' => [
                'name' => 'sate',
                'username' => 'root',
                'password' => '',
                'connection' => 'mysql:host=127.0.0.1',
                'options' => [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                    //just to have error codes
                ]
            ]
                ];