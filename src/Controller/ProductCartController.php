<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\ProductCart;
use App\Entity\Product;

class ProductCartController extends AbstractController
{
  public function validation(Request $request)
  {
    $serializer = $this->get('serializer');
    $idCart = $request->attributes->get('id');

    $productCartRepository = $this->getDoctrine()->getRepository(ProductCart::class);
    $productRepository = $this->getDoctrine()->getRepository(Product::class);

    $productCarts = $productCartRepository->findBy(array("cart" => $idCart));
    foreach($productCarts as $productCart){
      $idProduct = $productCart->getProduct()->getId();

    }

    $product = $productRepository->find(2);
    dump($product);
    die;

    $response = $serializer->serialize($productCarts, 'json');

    return new Response($response);
  }
}
