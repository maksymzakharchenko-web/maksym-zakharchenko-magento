<?php

declare(strict_types=1);

namespace MaksymZ\ControllerDemos\Controller\Index;

use Magento\Framework\View\Result\Page;

class PageResponse implements \Magento\Framework\App\Action\HttpGetActionInterface
{
    private \Magento\Framework\View\Result\PageFactory $pageFactory;

    /**
     * @param \Magento\Framework\View\Result\PageFactory $pageFactory
     */
    public function __construct(\Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }

    /**
     * Page result demo: https://maksym-zakharchenko-magento.local/maksymz-controller-demos/index/pageresponse
     *
     * @return Page
     */
    public function execute(): Page
    {
        return $this->pageFactory->create();
    }
}
