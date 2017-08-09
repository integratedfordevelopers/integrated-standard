<?php

namespace Application\Migrations\MongoDB;

use AppBundle\Doctrine\ODM\Migration\AbstractMigration;

use Doctrine\MongoDB\Database;

use Integrated\Bundle\ContentBundle\Document\ContentType\ContentType;
use Integrated\Bundle\ContentBundle\Document\ContentType\Embedded\Field;
use Integrated\Bundle\PollBundle\Document\Poll;

/**
 * @author Michael Jongman <michael@e-active.nl>
 */
class Version20170804131829 extends AbstractMigration
{
    /**
     * @return string
     */
    public function getDescription()
    {
        return "INTEGRATED-1221: Added contentType poll";
    }

    /**
     * @param Database $db
     */
    public function up(Database $db)
    {
        if (!$contentType = $this->getDocumentManager()->getRepository(ContentType::class)->find('poll')) {
            $contentType = new ContentType();
            $contentType->setId('poll');
            $contentType->setName('Poll');
            $contentType->setClass(Poll::class);
            $contentType->setFields(
                [
                    (new Field)
                        ->setName('title')
                        ->setOptions(
                            [
                                'required' => true,
                                'label' => 'Titel'
                            ]
                        )
                    ,
                    (new Field)
                        ->setName('options')
                        ->setOptions(
                            [
                                'required' => true,
                                'label' => 'Opties'
                            ]
                        )
                ]
            );

            $this->getDocumentManager()->persist($contentType);
            $this->getDocumentManager()->flush($contentType);
        }
    }

    /**
     * @param Database $db
     */
    public function down(Database $db)
    {
    }
}
