<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Doctrine\Bundle\MongoDBBundle\DoctrineMongoDBBundle(),
            new Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Sp\BowerBundle\SpBowerBundle(),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Knp\Bundle\GaufretteBundle\KnpGaufretteBundle(),
            new Braincrafted\Bundle\BootstrapBundle\BraincraftedBootstrapBundle(),
            new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
            new Vihuvac\Bundle\RecaptchaBundle\VihuvacRecaptchaBundle(),
            new Gregwar\ImageBundle\GregwarImageBundle(),

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
            new Integrated\Bundle\ImportBundle\IntegratedImportBundle(),
            new Integrated\Bundle\ThompsonThemeBundle\IntegratedThompsonThemeBundle(),

            new AppBundle\AppBundle(),
        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle();
            $bundles[] = new Nelmio\Alice\Bridge\Symfony\NelmioAliceBundle();

            if ('dev' === $this->getEnvironment()) {
                $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
                $bundles[] = new Symfony\Bundle\WebServerBundle\WebServerBundle();
            }
        }

        return $bundles;
    }

    public function getRootDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return dirname(__DIR__).'/var/cache/'.$this->getEnvironment();
    }

    public function getLogDir()
    {
        return dirname(__DIR__).'/var/logs';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
