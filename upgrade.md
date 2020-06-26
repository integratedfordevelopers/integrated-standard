# Update instructions #

Starting Integrated 0.11 you always need to run the new Integrated installer after upgrading:

php bin/console integrated:install

If you want to run asset install and cache clear manually you can use the installer for migrations only: 

php bin/console integrated:install --steps migrations

Please note that the init:* commands (like init:queue) have been replaced by migrations.

To upgrade to 0.11, please do all version upgraded to 0.10 first.

## Upgrade to Integrated version 0.10 ##
- Just upgrade the integrated* packages

## Upgrade to Integrated version 0.9 ##
- DEPRECATED: _theme global. Use integrated_active_theme() function instead.
- Change in security.yml:

 { path: ^/admin, roles: IS_AUTHENTICATED_REMEMBERED }

To:

 { path: ^/admin, roles: [IS_AUTHENTICATED_REMEMBERED, ROLE_SCOPE_INTEGRATED] }


- Add in security.yml:

firewalls:

        default:

            scope: ~

- Moved PublishTime::DATE_MAX to PublishTimeInterface::DATE_MAX 
- Added PublishTimeInterface
- Added PublishableInterface

## Upgrade to Integrated version 0.8 ##
- Integrated 0.8 ships with Symfony 3.4. Follow the upgrade guides from Symfony when upgrading your code from Symfony 2.8 to 3.4:
* https://github.com/symfony/symfony/blob/3.4/UPGRADE-3.0.md
* https://github.com/symfony/symfony/blob/3.4/UPGRADE-3.1.md
* https://github.com/symfony/symfony/blob/3.4/UPGRADE-3.2.md
* https://github.com/symfony/symfony/blob/3.4/UPGRADE-3.3.md
* https://github.com/symfony/symfony/blob/3.4/UPGRADE-3.4.md
* https://symfony.com/doc/3.4/setup/upgrade_major.html

Other changes are:
* The Integrated bundles are combined in one repository. Load integrated/integrated as composer package
* The view directories within Integrated are now lowercase (following the Symfony best practices)
* For mongodb_options in parameters.yml you might need to replace "db" with "authSource" to specify the authentication database
* Uglyfyjs is not required any more, becuase of future Webpack migration
* Make sure jquery UI is in the template:
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
* Update your /Vagrantfile and puphpet/config-custom.yaml from the integrated/puphpet package
* Your application needs to be PHP 7.1 compatible

## Upgrade to Integrated version 0.7 ##
- remove javascripts (also jquery ui) from base view (are now loaded with asset manager)

{% javascripts output='js/scripts.js'
            '@IntegratedWebsiteBundle/Resources/public/js/page.js'
            '@IntegratedWebsiteBundle/Resources/public/js/menu.js'
            '@IntegratedWebsiteBundle/Resources/public/js/grid.js' %}
            <script type="text/javascript" src="{{ asset_url }}"></script>
        {% endjavascripts %}

Remove edit form

Add handlebars:

{% if app.request.attributes.get('integrated_block_edit') %}
    {{ include('@IntegratedWebsite/handlebars/grid.html.twig') }}
{% endif %}

{% if app.request.attributes.get('integrated_menu_edit') %}
    {{ include('@IntegratedWebsite/handlebars/menu.html.twig') }}
{% endif %}

Remove template 'IntegratedWebsiteBundle:Form:form_div_layout.html.twig' from config.yml
- Edit and save a content type so the content type page URLs are generated
- Verify the generated content type page URLs and maybe change them back to the old ones for backwards compatibility
- Update views to use the integrated_url Twig function for URLs, to fully support the new URLs
- In order to enable the remember me the security.yml must be changed with the following for the default/main firewall:
                remember_me:
                    secret:   '%secret%'
                    lifetime: 2592000 # 30 days
                    path:     /	
- Call the following commands:
doctrine:schema:update command
init:scope command
- put content block around base template grid
{% block content %}
   {{ integrated_grid('main') }}
{% endblock %}

integrated block and menu edit variables become request variables

integrated_block_edit|default -> app.request.attributes.get('integrated_block_edit')

integrated_menu_edit|default -> app.request.attributes.get('integrated_menu_edit')

- Verify app/config/security.yml:
    access_decision_manager:
        strategy: unanimous
- run: composer install

## Upgrade to Integrated version 0.6 ##
- Add to your config.yml:

    framework:
        serializer:
            enabled: true

    assetic:
        filters:
            uglifyjs2: ~
- add {{ integrated_stylesheets() }} and  {{ integrated_javascripts() }} to base template (not necessary for GIM)
- Add to your app/kernel.php the following line: new Integrated\Bundle\ImageBundle\IntegratedImageBundle(),
- Add to AppKernel.php:
            new Integrated\Bundle\CommentBundle\IntegratedCommentBundle(),

Add to routing.yml:
    integrated_comment:
        resource: "@IntegratedCommentBundle/Resources/config/routing.xml"
        prefix: "/admin"

Add to composer.json:
        "integrated/comment-bundle": "~0.6.0"
- asset config "integrated_js" should not contain an other version of select2 (for example @AppBundle/Resources/public/js/select2.js)
- Each document that extends directly from the Content document needs to implement a __toString() function.
- Add to AppKernel.php:
            new Integrated\Bundle\ContentHistoryBundle\IntegratedContentHistoryBundle(),

Add to routing:
integrated_content_history:
     resource: "@IntegratedContentHistoryBundle/Resources/config/routing.xml"
     prefix: "/admin"

Add to composer.json:
        "integrated/content-history-bundle": "~0.6",

- php app/console c:c && php app/console c:c -e prod
php app/console s:i:q -e prod -f
php app/console s:i:r -e prod 2

## Upgrade to Integrated version 0.5 ##
- Update some settings from https://github.com/integratedfordevelopers/integrated/blob/0.5/app/config/config.yml:
- Add sass filter to assetic
- Update integrated_css assets
- Update braincrafted_bootstrap configuration
- field property changes from string to array of embedded document. Needs to be changed in mongo.
In the view this also should be fixed for old sites (loop over the fields)
- Don't has images has been renamed to Doesn't have images. Search selected that use this need to be edited.
- AssetBundle required in AppKernel:
new Integrated\Bundle\AssetBundle\IntegratedAssetBundle(),

Remove from config.yml:
- @IntegratedFormTypeBundle/Resources/public/components/smalot-bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js
- @IntegratedFormTypeBundle/Resources/public/js/datetimepicker.js

- Add roles to database and add to user groups which you want to give access

INSERT INTO `security_roles` (`id`, `name`, `label`, `description`, `hidden`) VALUES (NULL, 'ROLE_USER_MANAGER', 'User manager', NULL, ''), (NULL, 'ROLE_BLOCK_MANAGER', 'Block manager', NULL, ''), (NULL, 'ROLE_PAGE_MANAGER', 'Page manager', NULL, ''), (NULL, 'ROLE_WORKFLOW_MANAGER', 'Workflow manager', NULL, ''), (NULL, 'ROLE_CHANNEL_MANAGER', 'Channel manager', NULL, '');
- This service should be added in the config.yml.

services:
    twig.extension.text:
        class: Twig_Extensions_Extension_Text
        tags:
            - { name: twig.extension }

## Upgrade to Integrated version 0.4 ##
Add to config.yml:

    knp_gaufrette:
        adapters:
            local:
                local:
                    directory: %kernel.root_dir%/../web/uploads/documents

        filesystems:
            integrated:
                adapter: local

    integrated_storage:
        resolver:
            integrated:
                public: /uploads/documents

Add to composer.json:

    "integrated/storage-bundle": "~0.4",

Add to AppKernel.php:

    new Knp\Bundle\GaufretteBundle\KnpGaufretteBundle(),
    new Integrated\Bundle\StorageBundle\IntegratedStorageBundle(),

Two new parameters needed in parameters.yml.dist (and parameters.yml): recaptcha_site_key and recaptcha_secret_key
Your application need to be Symfony 2.7 compatible (https://github.com/symfony/symfony/blob/v2.7.0-BETA1/UPGRADE-2.7.md)
Registers the bundle in your app/AppKernel.php:

    new Gregwar\ImageBundle\GregwarImageBundle(),

Replace app.channel with _channel when used in Twig view
Remove secure: true from vihuvac_recaptcha section in config.yml

## Upgrade to Integrated 0.1.1.7 ##
php5-intl is now required
Update config.yml: services section has been added for Twig_Extensions_Extension_Intl
Modify init:queue command in composer.json to: php app/console init:queue --force
Add command in composer.json: php app/console init:locking --force
Edit and save your content types to use the TinyMCE editor instead of wysihtml5x 
Add locking bundle to AppKernel.php: new Integrated\Bundle\LockingBundle\IntegratedLockingBundle(),
Add cron: * * * * * php app/console locking:dbal:clean
