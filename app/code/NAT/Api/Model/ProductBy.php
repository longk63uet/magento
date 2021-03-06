<?php

namespace NAT\Api\Model;

use NAT\Api\Api\ProductByInterface;

class ProductBy implements ProductByInterface
{

/**NAT
* @var \Magento\Catalog\Api\ProductRepositoryInterface
*/
protected $productRepository;

public function __construct(
\Magento\Catalog\Api\ProductRepositoryInterface $productRepository)
{
$this->productRepository = $productRepository;
}

/**
* {@inheritdoc}
*/
public function getProductById($productId)
{
    return $this->productRepository->getById($productId);
}
}
