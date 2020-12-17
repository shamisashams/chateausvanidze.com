<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;

class LocaleFileController extends AdminController
{
    private $lang = '';
    private $file;
    private $key;
    private $value;
    private $path;
    private $arrayLang = array();

    public function changeLang(Request $request)
    {
        $this->lang = 'en';
        $this->file = 're';
        $this->key = 'login';
        $this->value = '321321';


        $this->changeLangFileContent();
        //$this->deleteLangFileContent();

        dd($this->arrayLang);

    }


    private function changeLangFileContent()
    {
        $this->read();
        $this->arrayLang[$this->key] = $this->value;
        $this->save();
    }



    private function read()
    {
        if ($this->lang == '') $this->lang = App::getLocale();
        $directory = base_path().'/resources/lang/'.$this->lang;

        $this->path = base_path().'/resources/lang/'.$this->lang.'/'.$this->file.'.php';
        $this->arrayLang = Lang::get($this->file);
        if (gettype($this->arrayLang) == 'string') $this->arrayLang = array();
    }

    private function save()
    {
        $content = "<?php\n\nreturn\n[\n";

        foreach ($this->arrayLang as $this->key => $this->value)
        {
            $content .= "\t'".$this->key."' => '".$this->value."',\n";
        }

        $content .= "];";

        file_put_contents($this->path, $content);
    }
}
