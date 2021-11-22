<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Video extends Model
{
    protected $table = "videos";
    protected $fillable = ['name','path','autor','categoria','url','min'];

    public function setPathAttribute($path){
    	if(! empty($path)){
			$name = Carbon::now()->second.$path->getClientOriginalName();
			$this->attributes['path'] = $name;
			\Storage::disk('local')->put($name, \File::get($path));
    	}
	}
    public static function Videos(){
		return DB::table('videos')
			->select('videos.*')
			->get();
	}
}
