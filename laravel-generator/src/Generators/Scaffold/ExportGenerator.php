<?php

namespace InfyOm\Generator\Generators\Scaffold;

use Illuminate\Support\Str;
use InfyOm\Generator\Generators\BaseGenerator;

class ExportGenerator extends BaseGenerator
{
    private string $exportFileName;

    public function __construct()
    {
        parent::__construct();
        $this->path = config('laravel_generator.path.exports', app_path('Exports/'));
        $this->exportFileName = 'Export'.$this->config->modelNames->name.'.php';
    }

    public function generate()
    {
        $templateData = view('laravel-generator::scaffold.exports.export', $this->variables())->render();

        g_filesystem()->createFile($this->path.$this->exportFileName, $templateData);

        $this->config->commandComment(infy_nl().'Export created: ');
        $this->config->commandInfo($this->path.$this->exportFileName);
       


    }

    public function rollback()
    {
        if ($this->rollbackFile($this->path, $this->exportFileName)) {
            $this->config->commandComment('Export file deleted: '.$this->exportFileName);
        }
    }
}
