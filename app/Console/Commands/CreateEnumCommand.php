<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Pluralizer;

class CreateEnumCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:enum {name} {type}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create New PHP Enum';


    public function getSingularClassName($name) : string
    {
        return ucwords(Pluralizer::singular($name));
    }



    public function getStubVariables() : array
    {
        return [
            'NAMESPACE'     => 'App\\Enum',
            'CLASS_NAME'    => $this->getSingularClassName($this->argument('name')),
            'TYPE'          => $this->argument('type')
        ];
    }

    public function getSourceFilePath()
    {
        // return base_path('App\\Enum') .'\\' .$this->getSingularClassName($this->argument('name')) . 'Enum.php';
        return app_path('Enum') .'\\' .$this->getSingularClassName($this->argument('name')) . '.php';
    }

    public function getStubPath() : string
    {
        $stub_dir = base_path().'/stubs/enum.stub';
        $this->info("stub dir is {$stub_dir}");
        return $stub_dir;
    }

    public function getSourceFile()
    {
        return $this->getStubContents($this->getStubPath(), $this->getStubVariables());
    }


    public function getStubContents($stub , $stubVariables = [])
    {
        $contents = file_get_contents($stub);

        foreach ($stubVariables as $search => $replace)
        {
            $contents = str_replace('$'.$search.'$' , $replace, $contents);
        }

        return $contents;

    }

    public function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Enum';
    }

     /**
     * Build the directory for the class if necessary.
     *
     * @param  string  $path
     * @return string
     */
    protected function makeDirectory($path)
    {
        if (File::exists($path)) {
            $this->info("creating a folder in {$path}");
        }

        return $path;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $path = $this->getSourceFilePath();

        $this->makeDirectory($path);

        $contents = $this->getSourceFile();

        if (! File::exists($path)) {
            File::put($path, $contents);
            $this->info("File : {$path} created");
        } else {
            $this->info("File : {$path} already exits");
        }
    }
}
