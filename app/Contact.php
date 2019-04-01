<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $fillable=[
      'first_name','last_name','email'
  ];
  //ili
//   protected $guarded=[
//     'id'
// ];
// sa ovim smo naveli da samo id ne popunjavamo, sto znaci da je ostalo fillable
}
