<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class Repository
{

    protected $model;

    public function update($id, $data): Model
    {
        $row = $this->model::find($id);
        $row->fill($data)->save();
        return $row;
    }
    public function create($data): Model
    {
        $row = new $this->model;
        $row->fill($data)->save();
        return $row;
    }
    public function destroy($id): bool
    {
        $row = $this->model::find($id);
        return  $row->delete();
    }
}
