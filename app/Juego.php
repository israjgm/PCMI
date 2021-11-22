<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Juego extends Model
{
    protected $table = "juegos";
    protected $fillable = ['name','descripcion','url','path'];

    public function setPathAttribute($path){
    	if(! empty($path)){
			$name = Carbon::now()->second.$path->getClientOriginalName();
			$this->attributes['path'] = $name;
			\Storage::disk('local')->put($name, \File::get($path));
    	}
	}
    public static function Juegos(){
		return DB::table('juegos')
			->select('juegos.*')
			->get();
	}
}
