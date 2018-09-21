<?php

/*
 * This file is part of the Integrated package.
 *
 * (c) e-Active B.V. <integrated@e-active.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Integrated\Behat\Context\Setup;

use Behat\Behat\Context\Context;
use Doctrine\ORM\EntityManager;
use Exception;
use Integrated\Bundle\ChannelBundle\Model\Config;

class ConnectorContext implements Context
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * @var array
     */
    private $connectors;

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;

        $this->connectors = [
            'website' => [
                'name' => 'Website',
            ],
            'twitter' => [
                'name' => 'Twitter',
            ]
        ];
    }

    /**
     * @Given there is a connector :type named :name
     * @param string $type
     * @param string $name
     * @throws Exception
     */
    public function createConnector($type, $name)
    {
        if (!isset($this->connectors[$type])) {
            throw new Exception('There is no implementation for this connector');
        }

        $connector = new Config();
        $connector->setName($name);
        $connector->setAdapter($type);

        $this->entityManager->persist($connector);
        $this->entityManager->flush();
    }
}
