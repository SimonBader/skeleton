<?php

namespace Pimcore\Bundle\PimcoreEcommerceFrameworkBundle\Console\Command\Voucher;

use OnlineShop\Framework\CartManager\Cart;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CleanupStatisticsCommand extends AbstractVoucherCommand
{
    protected function configure()
    {
        $this->setName('ecommerce:voucher:cleanup-statistics');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @throws \OnlineShop\Framework\Exception\InvalidConfigException
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->cleanupStatistics();
    }
}
