<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Test extends Model
{

        protected $table = "tests";
        protected $fillable = ['name','descripcion','url','path'];
    
        public function setPathAttribute($path){
            if(! empty($path)){
                $name = Carbon::now()->second.$path->getClientOriginalName();
                $this->attributes['path'] = $name;
                \Storage::disk('local')->put($name, \File::get($path));
            }
        }
        public static function Tests(){
            return DB::table('tests')
                ->select('tests.*')
                ->get();
        }
    }
    
