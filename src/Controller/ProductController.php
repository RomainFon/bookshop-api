<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Product;
use Symfony\Component\Serializer\Serializer;


class ProductController extends AbstractController
{

  public function category(Request $request)
  {
    $serializer = $this->get('serializer');
    $idCategory = $request->attributes->get('id');
    $repository = $this->getDoctrine()->getRepository(Product::class);

    $products = $repository->findBy(array("category" => $idCategory));
    $response = $serializer->serialize($products, 'json');

    return new Response($response);
  }
}
