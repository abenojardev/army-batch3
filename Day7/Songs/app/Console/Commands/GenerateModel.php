<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateModel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'g:model {table}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates a model';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    const NO_TABLE_SELECTED = 'No table selected';
    public function handle()
    {
        if(!isset($this->argument('table'))){
            return NO_TABLE_SELECTED;
        }
        
        $table = DB::getSchemaBuilder()->getColumnListing($this->argument('table'));

        if(empty($table)){
            return ''
        }
        return ;
    }
}
