<?php

namespace InfyOm\Generator\Generators;
use Illuminate\Support\Str;
use InfyOm\Generator\Common\GeneratorConfig;

class BaseGenerator
{
    public GeneratorConfig $config;

    public string $path;

    public function __construct()
    {
        $this->config = app(GeneratorConfig::class);
    }

    public function rollbackFile($path, $fileName): bool
    {
        if (file_exists($path.$fileName)) {
            return g_filesystem()->deleteFile($path, $fileName);
        }

        return false;
    }

    public function variables(): array
    {
        return [];
    }


    // public function createComponentAndFileIfNotExist ($path, $fileName,$templateData){

    //     $component_path = $path;
    //     $project_path = Str::replace("_components/","",$path);

    //     $fileInComponent =  $component_path.$fileName;
    //     $fileInProject =  $project_path.$fileName;

    //     // $this->config->commandInfo(infy_nl()."createComponentAndFileIfNotExist fileInComponent : ". $fileInComponent );
    //     // $this->config->commandInfo(infy_nl()."createComponentAndFileIfNotExist fileInProject : ". $fileInProject );
        
    //     // dd($fileInComponent);
    
    //     g_filesystem()->createFile($fileInComponent, $templateData);

    //     // Create file in project if not exist
    //     if(!file_exists($fileInProject)) {
    //         g_filesystem()->createFile($fileInProject, $templateData);
    //         $this->config->commandWarn($fileInProject);
    //     } 
    // }
}
