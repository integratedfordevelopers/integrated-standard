<?php

/*
 * This file is part of the Integrated package.
 *
 * (c) e-Active B.V. <integrated@e-active.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Integrated\Behat\Context\Hook;

use Behat\Behat\Context\Context;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ORM\EntityManagerInterface;
use Integrated\Bundle\ContentBundle\Document\Content\Content;
use Integrated\Bundle\ContentBundle\Document\ContentType\ContentType;

class DoctrineODMContext implements Context
{
    /**
     * @var EntityManagerInterface
     */
    private $documentManager;

    /**
     * @param DocumentManager $documentManager
     */
    public function __construct(DocumentManager $documentManager)
    {
        $this->documentManager = $documentManager;
    }

    /**
     * @BeforeScenario
     * @throws \Doctrine\ODM\MongoDB\MongoDBException
     */
    public function purgeDatabase()
    {
        $this->documentManager->getDocumentCollection(Content::class)->drop();
        $this->documentManager->getDocumentCollection(ContentType::class)->drop();
    }
}
