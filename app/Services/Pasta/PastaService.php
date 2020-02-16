<?php
namespace App\Services\Pasta;

use App\Models\PastaModel;

class PastaService
{
    protected $pasta_model;
    public function __construct(PastaModel $model)
    {
        $this->pasta_model = $model;
    }

    function randHash($len=32)
    {
        return substr(md5(openssl_random_pseudo_bytes(20)),-$len);
    }

    public function create_pasta($pasta_mass)
    {
        $this->pasta_model->pasta_name = $pasta_mass['pasta_name'];
        $this->pasta_model->text = $pasta_mass['text'];
        $this->pasta_model->access_type = $pasta_mass['access_type'];
        $this->pasta_model->active_time = $pasta_mass['active_time'];
        $this->pasta_model->hash = $this->randHash(10);
        $this->pasta_model->save();

        return $this->pasta_model->hash;
    }

    public function get_pasta($hash)
    {
        return($this->pasta_model::where('hash', $hash)->first());
    }

    public function get10pasts() {
        return $this->pasta_model::orderBy('created_at')->where('access_type','0')->where('active_time','>',date('Y-m-d H:i:s'))->limit(10)->get();
    }
}
