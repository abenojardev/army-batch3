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

        $this->generateModel(
            $this->argument('table'),
            $this->generateName(),
            $table
        );

        return $this->info('Model has been generated !');
    }


    public function generateModel($tableName, $className, $fillable)
    {
        $template = '<?php';
        $template .= "\n\n"; 
        $template .= 'namespace App\Models;'; 
        $template .= "\n\n"; 
        $template .= 'use Illuminate\Database\Eloquent\Factories\HasFactory;';
        $template .= "\n"; 
        $template .= 'use Illuminate\Database\Eloquent\Model;';
        $template .= "\n\n"; 

        $template .= 'class '.$className.' extends Model';
        $template .= "\n"; 
        $template .= '{';
        $template .= "\n"; 
            $template .= '    use HasFactory;';
            $template .= "\n\n"; 
            $template .= '    protected $table = "'.$tableName.'";'; 
            $template .= "\n\n"; 
            $template .= '    protected $fillable = [';
            $template .= "\n\n"; 
            foreach($fillable as $x){ 
                $template .= "        '".$x."',"; 
                $template .= "\n"; 
            }
            $template .= "\n"; 
            $template .= '    ];'; 
            $template .= "\n\n"; 
        $template .= '}'; 

        return $this->createFile($template, $className);
    }

    public function createFile($template, $className)
    {
        $model = fopen("app/Models/".$className.".php", "w") or die("Unable to open file!"); 
        fwrite($model, $template); 
        fclose($model);
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
