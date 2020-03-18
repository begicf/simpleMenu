<?php


namespace simpleMenu\model;


use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    public $timestamps = false;

    protected $table = 'menu';

    protected $fillable = array('parent_id','title','url','order');

    public function parent() {

        return $this->hasOne('simpleMenu\model\Menu', 'id', 'parent_id');

    }

    public function children() {

        return $this->hasMany('simpleMenu\model\Menu', 'parent_id', 'id');

    }

    public static function tree() {

        return static::with(implode('.', array_fill(0, 4, 'children')))->where('parent_id', '=', 0)->get();

    }
}
