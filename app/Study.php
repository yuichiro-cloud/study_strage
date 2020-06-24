<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use cebe\markdown\Markdown as Markdown;

class Study extends Model
{
    //
    public function parse(){
        $parser = new Markdown();
        return $parser->parse($this->memo);

    }

    public function getMarkBodyAttribute(){
        return $this->parse();
    }
}
