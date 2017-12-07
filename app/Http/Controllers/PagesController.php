<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function gethome()
   {
       return view('pages.home');
   }
  public function getover()
  {
        return view('pages.over');
  }
  public function getzaal()
  {
        return view('pages.zaal');
  }
  public function getbestuur()
  {
        return view('pages.bestuur');
  }
  public function getinfo()
  {
        return view('pages.info');
  }
  public function getvrijwilligers()
  {
        return view('pages.vrijwilligers');
  }
  public function getbeheer()
  {
        return view('pages.beheer');
  }
  public function getgalerij()
   {
         return view('pages.galerij');
   }
 public function getcontact()
  {
          return view('pages.contact');
    }
}
