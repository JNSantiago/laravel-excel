<?php

namespace App\Imports;

use App\Bairro;
use Maatwebsite\Excel\Concerns\ToModel;

class BairrosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Bairro([
            'razao_social'      => $row[5] ? $row[5] : 'Não Informado',
            'nome_fantasia'     => $row[6] ? $row[6] : 'Não Informado', 
            'lat'               => $row[22] ? $row[22] : 'Não Informado',
            'long'              => $row[23] ? $row[23] : 'Não Informado'
        ]);
    }
}
