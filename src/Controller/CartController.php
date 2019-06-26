<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Cart;

class CartController
{
  public function validation(Request $request)
  {
    $id = $request->attributes->get('id');
    return new Response(sprintf('Cart: %s',$id));
  }
}
