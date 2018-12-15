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
use Magento\Vault\Api\PaymentTokenManagementInterface;

class HelloWorld extends \Magento\Framework\App\Action\Action
{
    protected $pencilInterface;
    protected  $paymentTokenManagement;
    public function __construct(Context $context,
                                PencilInterface $pencilInterface,
                                PaymentTokenManagementInterface $paymentTokenManagement


    )
    {

        $this->pencilInterface = $pencilInterface;
        $this->paymentTokenManagement = $paymentTokenManagement;
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
        //echo $this->pencilInterface->getPencilType();
        echo get_class($this->paymentTokenManagement);
    }
}

