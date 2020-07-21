<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ResetTables extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reset:tables';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command For Reset All Tables';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        foreach(\DB::select('SHOW TABLES') as $table) {
            $table_array = get_object_vars($table);
            \Schema::disableForeignKeyConstraints();
            \Schema::drop($table_array[key($table_array)]);
        }
        echo "All Tables were dropped";
    }
}
