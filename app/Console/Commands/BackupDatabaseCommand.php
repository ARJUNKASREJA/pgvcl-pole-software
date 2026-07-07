<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class BackupDatabaseCommand extends Command
{
    protected $signature = 'backup:database';

    protected $description = 'Create Database Backup';

    public function handle()
    {
        $this->info('Database Backup Started');

        $filename='backup_'.date('Ymd_His').'.sql';

        $this->info('Backup File : '.$filename);

        $this->info('Database Backup Completed');

        return self::SUCCESS;
    }
}