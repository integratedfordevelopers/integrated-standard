<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Doctrine\Bundle\MongoDBBundle\DoctrineMongoDBBundle(),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Sp\BowerBundle\SpBowerBundle(),
            new Braincrafted\Bundle\BootstrapBundle\BraincraftedBootstrapBundle(),
            new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
            new Knp\Bundle\GaufretteBundle\KnpGaufretteBundle(),
            new Vihuvac\Bundle\RecaptchaBundle\VihuvacRecaptchaBundle(),
            new Gregwar\ImageBundle\GregwarImageBundle(),
            new AntiMattr\Bundle\MongoDBMigrationsBundle\MongoDBMigrationsBundle(),
            new Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle(),

            new Integrated\Bundle\AssetBundle\IntegratedAssetBundle(),
            new Integrated\Bundle\ContentBundle\IntegratedContentBundle(),
            new Integrated\Bundle\FormTypeBundle\IntegratedFormTypeBundle(),
            new Integrated\Bundle\SolrBundle\IntegratedSolrBundle(),
            new Integrated\Bundle\StorageBundle\IntegratedStorageBundle(),
            new Integrated\Bundle\UserBundle\IntegratedUserBundle(),
            new Integrated\Bundle\LockingBundle\IntegratedLockingBundle(),
            new Integrated\Bundle\SlugBundle\IntegratedSlugBundle(),
            new Integrated\Bundle\ThemeBundle\IntegratedThemeBundle(),
            new Integrated\Bundle\PageBundle\IntegratedPageBundle(),
            new Integrated\Bundle\BlockBundle\IntegratedBlockBundle(),
            new Integrated\Bundle\ChannelBundle\IntegratedChannelBundle(),
            new Integrated\Bundle\WebsiteBundle\IntegratedWebsiteBundle(),
            new Integrated\Bundle\MenuBundle\IntegratedMenuBundle(),
            new Integrated\Bundle\WorkflowBundle\IntegratedWorkflowBundle(),
            new Integrated\Bundle\ContentHistoryBundle\IntegratedContentHistoryBundle(),
            new Integrated\Bundle\ImageBundle\IntegratedImageBundle(),
            new Integrated\Bundle\CommentBundle\IntegratedCommentBundle(),
            new Integrated\Bundle\ThompsonThemeBundle\IntegratedThompsonThemeBundle(),
            new Integrated\Bundle\PollBundle\IntegratedPollBundle(),

            new AppBundle\AppBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
            $bundles[] = new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
