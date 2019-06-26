<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Product;
use App\Entity\ProductCart;
use Symfony\Component\Serializer\Serializer;


class ProductController extends AbstractController
{

  public function validateCart(Request $request)
  {
    //$serializer = $this->get('serializer');
    $idCart = $request->attributes->get('id');

    $productCartRepository = $this->getDoctrine()->getRepository(ProductCart::class);
    $productRepository = $this->getDoctrine()->getRepository(Product::class);

    $productCarts = $productCartRepository->findBy(array("cart" => $idCart));
    dump($productCarts);
    die;

    /*


    foreach($productCarts as $productCart){
      $idProduct = $productCart->getProduct()->getId();

    }

    $product = $productRepository->find(2);
    dump($product);
    die;

    $response = $serializer->serialize($productCarts, 'json');*/

    return new Response($response);
  }

  public function category(Request $request)
  {
    $serializer = $this->get('serializer');
    $idCategory = $request->attributes->get('id');
    $repository = $this->getDoctrine()->getRepository(Product::class);

    $products = $repository->findByCategory($idCategory);
    $response = $serializer->serialize($products, 'json');

    return new Response($response);
  }
}
