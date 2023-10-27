<?php

namespace InfyOm\Generator\Common;
use InfyOm\Generator\Common\GeneratorConfig;
use Illuminate\Support\Str;

class FileSystem
{
    public function __construct()
    {
        $this->config = app(GeneratorConfig::class);
    }

    public function getFile(string $path): string
    {
        if (!file_exists($path)) {
            return '';
        }

        return file_get_contents($path);
    }

    /**
     * Création de fichier deux fois
     * - dans le dossier _Compoenets
     * - et dans le projet si le fichier n'existe pas 
     */
    public function createFile(string $file, string $contents): bool|int
    {

        $fileInComponent = $file;
        $fileInProject =  Str::replace("../components","",$file);

        $path = dirname($file);

        if (!empty($path) && !file_exists($path)) {
            mkdir($path, 0755, true);
        }

        // $this->config->commandInfo(infy_nl()."createComponentAndFileIfNotExist fileInComponent : ". $fileInComponent );
        // $this->config->commandInfo(infy_nl()."createComponentAndFileIfNotExist fileInProject : ". $fileInProject );
        //  dd($fileInProject);
    
       


        // Create file in project if not exist
        if(!file_exists($fileInProject)) {
            file_put_contents($fileInProject, $contents);
            $this->config->commandComment(infy_nl().'create note exist file : ');
            $this->config->commandWarn($fileInProject);
        } 

        return file_put_contents($fileInComponent, $contents);
    }

    public function createDirectoryIfNotExist(string $path, bool $replace = false): bool
    {
        if (!empty($path) && file_exists($path) && $replace) {
            return rmdir($path);
        }

        if (!empty($path) && !file_exists($path)) {
            return mkdir($path, 0755, true);
        }

        return false;
    }

    public function deleteFile(string $path, string $fileName): bool
    {
        if (file_exists($path.$fileName)) {
            return unlink($path.$fileName);
        }

        return false;
    }
}
