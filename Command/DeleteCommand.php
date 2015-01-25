<?php

namespace JXF\Bundle\bundleTest\Command;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Delete cache entries.
 *
 * @author Alan Doucette <dragonwize@gmail.com>
 */
class DeleteCommand extends CacheCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('JXF:delete')
            ->setDescription('descript');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('executed command JXF Delete');
    }
}
