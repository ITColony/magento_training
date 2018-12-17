<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 12/15/2018
 * Time: 6:51 PM
 */

namespace SimplifiedMagento\FirstModule\Model;

use Magento\Sales\Api\Data\OrderPaymentInterface;
use Magento\Vault\Api\Data\PaymentTokenInterface;
use Magento\Vault\Api\PaymentTokenManagementInterface;
class CustomImplementation implements PaymentTokenManagementInterface
{

    /**
     * Lists payment tokens that match specified search criteria.
     *
     * @param int $customerId Customer ID.
     * @return \Magento\Vault\Api\Data\PaymentTokenSearchResultsInterface Payment token search result interface.
     * @since 100.1.0
     */
    public function getListByCustomerId($customerId)
    {
        // TODO: Implement getListByCustomerId() method.
    }

    /**
     * Get payment token by token Id.
     *
     * @param int $paymentId The gateway payment token ID.
     * @return \Magento\Vault\Api\Data\PaymentTokenInterface Payment token interface.
     * @since 100.1.0
     */
    public function getByPaymentId($paymentId)
    {
        // TODO: Implement getByPaymentId() method.
    }

    /**
     * Get payment token by gateway token.
     *
     * @param string $token The gateway token.
     * @param string $paymentMethodCode
     * @param int $customerId Customer ID.
     * @return PaymentTokenInterface|null Payment token interface.
     * @since 100.1.0
     */
    public function getByGatewayToken($token, $paymentMethodCode, $customerId)
    {
        // TODO: Implement getByGatewayToken() method.
    }

    /**
     * Get payment token by public hash.
     *
     * @param string $hash Public hash.
     * @param int $customerId Customer ID.
     * @return PaymentTokenInterface|null Payment token interface.
     * @since 100.1.0
     */
    public function getByPublicHash($hash, $customerId)
    {
        // TODO: Implement getByPublicHash() method.
    }

    /**
     * @param PaymentTokenInterface $token
     * @param OrderPaymentInterface $payment
     * @return bool
     * @since 100.1.0
     */
    public function saveTokenWithPaymentLink(PaymentTokenInterface $token, OrderPaymentInterface $payment)
    {
        // TODO: Implement saveTokenWithPaymentLink() method.
    }

    /**
     * Add link between payment token and order payment.
     *
     * @param int $paymentTokenId Payment token ID.
     * @param int $orderPaymentId Order payment ID.
     * @return bool
     * @since 100.1.0
     */
    public function addLinkToOrderPayment($paymentTokenId, $orderPaymentId)
    {
        // TODO: Implement addLinkToOrderPayment() method.
    }
}