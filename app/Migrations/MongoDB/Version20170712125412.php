<?php

namespace Application\Migrations\MongoDB;

use AppBundle\Doctrine\ODM\Migration\AbstractMigration;

use Doctrine\MongoDB\Database;

use Integrated\Bundle\ContentBundle\Document\Content\Content;

/**
 * @author Koen Prins <koen@e-active.nl>
 */
class Version20170712125412 extends AbstractMigration
{
    /**
     * @return string
     */
    public function getDescription()
    {
        return "INTEGRATED-1190: Add slug to all content that doesn't have a slug yet";
    }

    /**
     * @param Database $db
     */
    public function up(Database $db)
    {
        $content = $this->getSluglessContent();

        $count = 0;
        foreach ($content as $item) {
            $item->setSlug(false);
            if ($count % 500 == 0) {
                $this->getDocumentManager()->flush();
            }
            $count++;
        }
        $this->getDocumentManager()->flush();
    }

    /**
     * @param Database $db
     */
    public function down(Database $db)
    {
        $this->throwIrreversibleMigrationException();
    }

    /**
     * @return mixed
     */
    private function getSluglessContent()
    {
        return $this->getDocumentManager()->createQueryBuilder(Content::class)
            ->field('slug')->exists(false)
            ->getQuery()
            ->execute()
            ->toArray();
    }
}
