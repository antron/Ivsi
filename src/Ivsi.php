<?php

/**
 * Ivsi.
 */

namespace Antron\Ivsi;

/**
 * Ivsi.
 */
class Ivsi
{

    /**
     * Dump.
     * 
     * @param type $sudo
     */
    public static function dump($sudo = false)
    {
        if (is_dir(storage_path('ivsi'))) {

            $command = self::makeCommandDump();

            if ($sudo) {
                $command = 'sudo ' . $command;
            }

            exec($command);
            
        } else {

            print 'Not Found ' . storage_path('ivsi') . "\n";
        }
    }

    public static function restore()
    {
        $stdin = '';

        while ($stdin <> 'yes') {
            print "Enter yes\n";
            $stdin = trim(fgets(STDIN));
        }

        $datas = [
            'mysql',
            '-u',
            env('DB_USERNAME'),
            '-h',
            env('DB_HOST'),
            env('DB_DATABASE'),
            '<',
            storage_path('ivsi/dump.sql'),
        ];

        exec(implode(' ', $datas));
    }

    private static function makeCommandDump()
    {

        $array = [
            'mysqldump',
            '-u',
            env('DB_USERNAME'),
            env('DB_DATABASE'),
            '-h',
            env('DB_HOST'),
            '-p' . env('DB_PASSWORD'),
            '>',
            storage_path('ivsi/dump.sql'),
        ];

        return implode(' ', $array);
    }

}
