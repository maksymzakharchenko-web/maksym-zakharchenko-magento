<?php
declare(strict_types=1);

namespace MaksymZ\ControllerDemos\Controller\Controllers;

use Magento\Framework\Controller\Result\Raw;

class RawResponseDemoController implements \Magento\Framework\App\Action\HttpGetActionInterface
{
    private \Magento\Framework\Controller\Result\RawFactory $rawFactory;

    /**
     * @param \Magento\Framework\Controller\Result\RawFactory $rawFactory
     */
    public function __construct(
        \Magento\Framework\Controller\Result\RawFactory $rawFactory
    ) {
        $this->rawFactory = $rawFactory;
    }

    /**
     * inherit doc
     * @return Raw
     */
    public function execute(): Raw
    {
        return $this->rawFactory->create()->setHeader('Content-Type', 'text/html')->setContents(
            <<<HTML
            <body>
                <div style="border: 1px solid black; padding: 10px;">
                    <h2>Form</h2>
                        <form method="get" action="/maksymz-controller-demos/controllers/jsonresponsedemocontroller" >
                            <label>Vendor name
                                <input name="vendorName" type="text" value="MaksymZ">
                            </label>
                            <label>Module name
                                <input name="moduleName" type="text" value="ControllerDemos">
                            </label>
                                <button>Submit</button>
                        </form>
                </div>
                <div style="padding: 10px;">
                    <h2>Navigation</h2>
                    <ul>
                        <li><a href="/maksymz-controller-demos/controllers/redirectresponsedemocontroller" target="_blank">Redirect Response Demo</a></li>
                        <li><a href="/maksymz-controller-demos/controllers/jsonresponsedemocontroller" target="_blank">Json Response Demo</a></li>
                        <li><a href="/maksymz-controller-demos/controllers/forwardresponsedemocontroller" target="_blank">Forward Response Demo</a></li>
                    </ul>
                </div>
            </body>
        HTML
        );
    }
}