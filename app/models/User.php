<?php

/* 
 * Author: MD. ANWAR JAHID.
 * Email: ajr.jahid@gmail.com
 * FB: www.fb.com/ringkud
 */
use Illuminate\Database\Eloquent\Model as Eloquent;
class User extends Eloquent
{
    public $name;
    protected $fillable = ['username','password','email'];
}
