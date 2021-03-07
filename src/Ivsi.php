<?php

/**
 * 当日日付.
 */

namespace Antron\Ivsi;

class Ivsi
{

    public static function dump($sudo = false)
    {

        $datas = [
            'mysqldump',
            '-u',
            env('DB_USERNAME'),
            env('DB_DATABASE'),
            '>',
            storage_path('ivsi/dump.sql'),
        ];

        $command = implode(' ', $datas);

        if ($sudo) {
            $command = 'sudo ' . $command;
        }

        exec($command);
    }

    public static function restore()
    {

        $datas = [
            'mysql',
            '-u',
            env('DB_USERNAME'),
            '=D',
            env('DB_DATABASE'),
            '<',
            storage_path('ivsi/dump.sql'),
        ];

        exec(implode(' ', $datas));
    }

}
