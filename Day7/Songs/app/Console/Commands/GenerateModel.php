<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Str, DB, Artisan;

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

    const NO_TABLE_SELECTED = 'No table selected!';
    const TABLE_NOT_EXISTS = 'Table does not exists!';
    public function handle()
    {
        if(empty($this->argument('table'))){
            return $this->error(self::NO_TABLE_SELECTED);
        }
        
        $table = DB::getSchemaBuilder()->getColumnListing($this->argument('table'));

        if(empty($table)){
            return $this->error(self::TABLE_NOT_EXISTS);
        }

        $name = $this->generateName();
        

        return $this->info($name);
    }


    public function generateModel()
    {
        $template = '<?php';
        $template .= '\n\n'; 
        $template .= 'namespace App\Models;'; 
        $template .= '\n\n'; 
        $template .= 'use Illuminate\Database\Eloquent\Factories\HasFactory';
        $template .= '\n'; 
        $template .= 'use Illuminate\Database\Eloquent\Model';
        $template .= '\n\n'; 

        $template .= 'class Album extends Model';
        $template .= '{';
            use HasFactory;

            protected $table = 'albums';
            
            protected $fillable = [
                'name',
                'date_released',
            ];
            
        $template .= '}';

    }

    public function generateName()
    {
        $model_name = '';
        $name = Str::singular($this->argument('table'));
        $model_name_arr = Str::of($name)->explode('_');

        foreach($model_name_arr as $x){
            $model_name .= Str::ucfirst(Str::lower($x));
        } 

        return $model_name;
    }
}
