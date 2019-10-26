<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{

    public function get($conditions = [])
    {
        return $this::where($conditions[0], $conditions[1], $conditions[2])->get();
    }

    public function getAll()
    {
        return $this::all();
    }

    public function updateByID($id, $data = [])
    {
        $this::whereId($id)
            ->update($data);
    }

}
