<?php
namespace Magento\Sales\Block\Adminhtml\Order\Creditmemo\View;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Creditmemo\View
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Creditmemo\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Framework\Registry $registry, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getBackUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBackUrl');
        if (!$pluginInfo) {
            return parent::getBackUrl();
        } else {
            return $this->___callPlugins('getBackUrl', func_get_args(), $pluginInfo);
        }
    }
}