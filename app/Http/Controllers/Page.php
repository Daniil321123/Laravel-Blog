<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page extends Controller
{
   public function showOne($param) {
       $pages = [
           1 => 'страница 1',
           2 => 'страница 2',
           3 => 'страница 3',
           4 => 'страница 4',
           5 => 'страница 5',
       ];
       return $pages[$param];
   }
}
