<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 12/13/2018
 * Time: 8:09 AM
 */

namespace SimplifiedMagento\FirstModule\Controller\Page;


use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use SimplifiedMagento\FirstModule\NotMagento\PencilInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use SimplifiedMagento\FirstModule\NotMagento\Pencil;

class HelloWorld extends \Magento\Framework\App\Action\Action
{
    protected $pencilInterface;
    protected $productRepository;
    protected $pencil;
    public function __construct(Context $context,
                                Pencil $pencil,
                                PencilInterface $pencilInterface,
                                ProductRepositoryInterface $productRepository)
    {
        $this->pencil = $pencil;
        $this->pencilInterface = $pencilInterface;
        $this->productRepository = $productRepository;
        parent::__construct($context);
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $reflection = new \ReflectionClass(\SimplifiedMagento\FirstModule\NotMagento\Pencil::class);
        $constructors = get_object_vars($this->pencil);
        print_r($reflection->getConstructor());
    }
}


