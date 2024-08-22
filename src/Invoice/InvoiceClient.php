<?php
/**
 * Invoice
 *
 * @category Jdcloud
 * @package  Jdcloud\Invoice
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Invoice;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with invoice.
 *
 * @method \Jdcloud\Result describeAddresses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAddressesAsync(array $args = [])
 * @method \Jdcloud\Result describeChildrenArea(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChildrenAreaAsync(array $args = [])
 * @method \Jdcloud\Result describeAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAddressAsync(array $args = [])
 * @method \Jdcloud\Result modifyAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyAddressAsync(array $args = [])
 * @method \Jdcloud\Result deleteAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAddressAsync(array $args = [])
 * @method \Jdcloud\Result createAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAddressAsync(array $args = [])
 * @method \Jdcloud\Result describeInvoiceOrderList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInvoiceOrderListAsync(array $args = [])
 * @method \Jdcloud\Result createInvoiceAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInvoiceAgentAsync(array $args = [])
 * @method \Jdcloud\Result editInvoiceTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise editInvoiceTemplateAsync(array $args = [])
 * @method \Jdcloud\Result decribeInvoicedChildOrders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise decribeInvoicedChildOrdersAsync(array $args = [])
 * @method \Jdcloud\Result describeInvoices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInvoicesAsync(array $args = [])
 * @method \Jdcloud\Result describeInvoice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInvoiceAsync(array $args = [])
 * @method \Jdcloud\Result billDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise billDetailAsync(array $args = [])
 * @method \Jdcloud\Result getCompanyCreditInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCompanyCreditInfoAsync(array $args = [])
 * @method \Jdcloud\Result getOrderRelateInvoice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOrderRelateInvoiceAsync(array $args = [])
 * @method \Jdcloud\Result getOrderRelateInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOrderRelateInfoAsync(array $args = [])
 * @method \Jdcloud\Result createInvoice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInvoiceAsync(array $args = [])
 * @method \Jdcloud\Result refundInvoice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise refundInvoiceAsync(array $args = [])
 * @method \Jdcloud\Result artificialRefund(array $args = [])
 * @method \GuzzleHttp\Promise\Promise artificialRefundAsync(array $args = [])
 * @method \Jdcloud\Result cancelInvoice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelInvoiceAsync(array $args = [])
 * @method \Jdcloud\Result describeInvoiceUrl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInvoiceUrlAsync(array $args = [])
 * @method \Jdcloud\Result describeInvoiceOrders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInvoiceOrdersAsync(array $args = [])
 * @method \Jdcloud\Result invoiceOweList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invoiceOweListAsync(array $args = [])
 * @method \Jdcloud\Result deductOweFee(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deductOweFeeAsync(array $args = [])
 * @method \Jdcloud\Result getTaxInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTaxInfoAsync(array $args = [])
 * @method \Jdcloud\Result getInvoicePreview(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInvoicePreviewAsync(array $args = [])
 * @method \Jdcloud\Result calculateInvoicePrice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise calculateInvoicePriceAsync(array $args = [])
 * @method \Jdcloud\Result describeMonthDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMonthDetailAsync(array $args = [])
 * @method \Jdcloud\Result describeInvoiceTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInvoiceTemplateAsync(array $args = [])
 * @method \Jdcloud\Result createInvoiceTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInvoiceTemplateAsync(array $args = [])
 * @method \Jdcloud\Result modifyInvoiceTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInvoiceTemplateAsync(array $args = [])
 * @method \Jdcloud\Result deleteInvoiceTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInvoiceTemplateAsync(array $args = [])
 * @method \Jdcloud\Result checkInvoiceOwedInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkInvoiceOwedInfoAsync(array $args = [])
 * @method \Jdcloud\Result batchUpdateInvoiceRefundOrder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchUpdateInvoiceRefundOrderAsync(array $args = [])
 * @method \Jdcloud\Result refundOwedInvoice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise refundOwedInvoiceAsync(array $args = [])
 * @method \Jdcloud\Result describeOrderInvoice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOrderInvoiceAsync(array $args = [])
 * @method \Jdcloud\Result updateInvoiceRefundAmount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateInvoiceRefundAmountAsync(array $args = [])
 */
class InvoiceClient extends JdCloudClient
{
    public function __construct(array $args)
    {
        $args['with_resolved'] = function (array $args) {
            $this->getHandlerList()->appendInit(
                PresignUrlMiddleware::wrap(
                    $this,
                    $args['endpoint_provider'],
                    [
                        'operations' => [
                        ],
                        'service' => 'invoice',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'invoice'
            );
        };

        parent::__construct($args);
    }
}