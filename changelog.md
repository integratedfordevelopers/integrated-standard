# Changelog Integrated version 0.15 #

## Highlights ##
- Two factor authentication (optional)

## New Features ##
- [INTEGRATED-1651](https://eactive.atlassian.net/browse/INTEGRATED-1651) Allow two factor authentication with Google Authenticator
- [INTEGRATED-1654](https://eactive.atlassian.net/browse/INTEGRATED-1654) Dutch translations for authenticator messages

## Bug Fixes ##
- [INTEGRATED-1655](https://eactive.atlassian.net/browse/INTEGRATED-1655) User list is slow with many users
- [INTEGRATED-1657](https://eactive.atlassian.net/browse/INTEGRATED-1657) Small bundle fixes

# Changelog Integrated version 0.14 #

## Highlights ##
- Frontend editing has been improved a lot

## New Features ##
- [INTEGRATED-1118](https://eactive.atlassian.net/browse/INTEGRATED-1118) Improve front end editing
- [INTEGRATED-1263](https://eactive.atlassian.net/browse/INTEGRATED-1263) Lost password
- [INTEGRATED-1631](https://eactive.atlassian.net/browse/INTEGRATED-1631) Improve page URL display and validation
- [INTEGRATED-1633](https://eactive.atlassian.net/browse/INTEGRATED-1633) Improve website toolbar view
- [INTEGRATED-1635](https://eactive.atlassian.net/browse/INTEGRATED-1635) Don't display Solr lock exceptions in non-verbose mode
- [INTEGRATED-1638](https://eactive.atlassian.net/browse/INTEGRATED-1638) Improve content type page URL generation performance
- [INTEGRATED-1642](https://eactive.atlassian.net/browse/INTEGRATED-1642) Support upload of TIF and EPS
- [INTEGRATED-1648](https://eactive.atlassian.net/browse/INTEGRATED-1648) IP list and protection
- [INTEGRATED-1652](https://eactive.atlassian.net/browse/INTEGRATED-1652) Show description in IP list

## Bug Fixes ##
- [INTEGRATED-1390](https://eactive.atlassian.net/browse/INTEGRATED-1390) Relation-linked companies are shown as ID instead of name
- [INTEGRATED-1629](https://eactive.atlassian.net/browse/INTEGRATED-1629) Storage clean doesn't find all items
- [INTEGRATED-1640](https://eactive.atlassian.net/browse/INTEGRATED-1640) Don't crash json-ld on channel without domain

# Changelog Integrated version 0.13 #

## New Features ##
- [INTEGRATED-1613](https://eactive.atlassian.net/browse/INTEGRATED-1613) Add storage clean command
- [INTEGRATED-1615](https://eactive.atlassian.net/browse/INTEGRATED-1615) Deletion and usability improvements
- [INTEGRATED-1619](https://eactive.atlassian.net/browse/INTEGRATED-1619) Improve pages usability
- [INTEGRATED-1621](https://eactive.atlassian.net/browse/INTEGRATED-1621) Image browser display improvements
- [INTEGRATED-1625](https://eactive.atlassian.net/browse/INTEGRATED-1625) Show parent path in selection select box

## Bug Fixes ##
- [INTEGRATED-1617](https://eactive.atlassian.net/browse/INTEGRATED-1617) User when using same username on Integrated scope and other scope
- [INTEGRATED-1627](https://eactive.atlassian.net/browse/INTEGRATED-1627) Don't crash deletion reference display on objects without __toString()

# Changelog Integrated version 0.12 #

## New Features ##
- [INTEGRATED-1594](https://eactive.atlassian.net/browse/INTEGRATED-1594) Add scraper page module
- [INTEGRATED-1606](https://eactive.atlassian.net/browse/INTEGRATED-1606) Allow block permissions

## Bug Fixes ##
- [INTEGRATED-1602](https://eactive.atlassian.net/browse/INTEGRATED-1602) Scraper page doesn't refresh after update
- [INTEGRATED-1604](https://eactive.atlassian.net/browse/INTEGRATED-1604) Scraper page cache does not always refresh

# Changelog Integrated version 0.11 #

## New Features ##
- [INTEGRATED-264](https://eactive.atlassian.net/browse/INTEGRATED-264) Youtube shortcode support
- [INTEGRATED-526](https://eactive.atlassian.net/browse/INTEGRATED-526) Preview before publishing on website
- [INTEGRATED-809](https://eactive.atlassian.net/browse/INTEGRATED-809) [puphpet] Replace Vagrant with Docker + require PHP 7.2
- [INTEGRATED-1147](https://eactive.atlassian.net/browse/INTEGRATED-1147) Form document type
- [INTEGRATED-1200](https://eactive.atlassian.net/browse/INTEGRATED-1200) Do not export articles with publication date before connector configuration date
- [INTEGRATED-1254](https://eactive.atlassian.net/browse/INTEGRATED-1254) Add a hidden relation for authors
- [INTEGRATED-1383](https://eactive.atlassian.net/browse/INTEGRATED-1383) Add installer
- [INTEGRATED-1396](https://eactive.atlassian.net/browse/INTEGRATED-1396) Make sure content can't be viewed on the wrong channel
- [INTEGRATED-1418](https://eactive.atlassian.net/browse/INTEGRATED-1418) Display conflicting content type page URL -settings
- [INTEGRATED-1440](https://eactive.atlassian.net/browse/INTEGRATED-1440) Cover image inladen
- [INTEGRATED-1441](https://eactive.atlassian.net/browse/INTEGRATED-1441) Exclude future executed items from queue count
- [INTEGRATED-1444](https://eactive.atlassian.net/browse/INTEGRATED-1444) Change content type with bulk action
- [INTEGRATED-1446](https://eactive.atlassian.net/browse/INTEGRATED-1446) Canonical with multiple channels + source URL
- [INTEGRATED-1458](https://eactive.atlassian.net/browse/INTEGRATED-1458) Allow to add a channel dependent block
- [INTEGRATED-1465](https://eactive.atlassian.net/browse/INTEGRATED-1465) No delete button on the index page for content types. 
- [INTEGRATED-1478](https://eactive.atlassian.net/browse/INTEGRATED-1478) Small improvements in user section
- [INTEGRATED-1483](https://eactive.atlassian.net/browse/INTEGRATED-1483) Channel usability improvements
- [INTEGRATED-1485](https://eactive.atlassian.net/browse/INTEGRATED-1485) Player button in video still
- [INTEGRATED-1487](https://eactive.atlassian.net/browse/INTEGRATED-1487) Improve relation usability
- [INTEGRATED-1493](https://eactive.atlassian.net/browse/INTEGRATED-1493) Add phpstan to improve code quality
- [INTEGRATED-1496](https://eactive.atlassian.net/browse/INTEGRATED-1496) Bulk change channels
- [INTEGRATED-1500](https://eactive.atlassian.net/browse/INTEGRATED-1500) Allow copying pages
- [INTEGRATED-1505](https://eactive.atlassian.net/browse/INTEGRATED-1505) Allow to sort content
- [INTEGRATED-1515](https://eactive.atlassian.net/browse/INTEGRATED-1515) Contenttype page for person
- [INTEGRATED-1518](https://eactive.atlassian.net/browse/INTEGRATED-1518) Add support for superscript and subscript
- [INTEGRATED-1520](https://eactive.atlassian.net/browse/INTEGRATED-1520) Allow storage of credits and copyright restrictions
- [INTEGRATED-1524](https://eactive.atlassian.net/browse/INTEGRATED-1524) Fallback to default.html.twig when view cannot be located
- [INTEGRATED-1526](https://eactive.atlassian.net/browse/INTEGRATED-1526) Support SolrDocument in getUsedBy
- [INTEGRATED-1527](https://eactive.atlassian.net/browse/INTEGRATED-1527) Do not crash on missing references
- [INTEGRATED-1530](https://eactive.atlassian.net/browse/INTEGRATED-1530) Add integrated_breadcrumb Twig function
- [INTEGRATED-1532](https://eactive.atlassian.net/browse/INTEGRATED-1532) Allow HTML and text block to be dependent of content item
- [INTEGRATED-1534](https://eactive.atlassian.net/browse/INTEGRATED-1534) Improve user section
- [INTEGRATED-1535](https://eactive.atlassian.net/browse/INTEGRATED-1535) Improve relation Solr indexing
- [INTEGRATED-1537](https://eactive.atlassian.net/browse/INTEGRATED-1537) Support publishedTitle and intro text field for form block
- [INTEGRATED-1550](https://eactive.atlassian.net/browse/INTEGRATED-1550) Improve author select
- [INTEGRATED-1554](https://eactive.atlassian.net/browse/INTEGRATED-1554) Edit button is sometimes hidden in the back of other elements
- [INTEGRATED-1557](https://eactive.atlassian.net/browse/INTEGRATED-1557) More sort options for related content block
- [INTEGRATED-1559](https://eactive.atlassian.net/browse/INTEGRATED-1559) Add integrated_document twig function
- [INTEGRATED-1560](https://eactive.atlassian.net/browse/INTEGRATED-1560) Form block improvements
- [INTEGRATED-1562](https://eactive.atlassian.net/browse/INTEGRATED-1562) Do not duplicate local storage as cache
- [INTEGRATED-1567](https://eactive.atlassian.net/browse/INTEGRATED-1567) Allow to use a search selection as navigation menu
- [INTEGRATED-1573](https://eactive.atlassian.net/browse/INTEGRATED-1573) Too few results in bulk action relation select boxes
- [INTEGRATED-1577](https://eactive.atlassian.net/browse/INTEGRATED-1577) Solve ODM deprecations
- [INTEGRATED-1578](https://eactive.atlassian.net/browse/INTEGRATED-1578) Bulk action: delete
- [INTEGRATED-1581](https://eactive.atlassian.net/browse/INTEGRATED-1581) Allow sort by publication time for search queries

## Bug Fixes ##
- [INTEGRATED-1245](https://eactive.atlassian.net/browse/INTEGRATED-1245) Item cannot be deleted after doing a bulk action
- [INTEGRATED-1424](https://eactive.atlassian.net/browse/INTEGRATED-1424) Facebook connection broken after Facebook updates
- [INTEGRATED-1449](https://eactive.atlassian.net/browse/INTEGRATED-1449) Google Sitemap bugfixes
- [INTEGRATED-1451](https://eactive.atlassian.net/browse/INTEGRATED-1451) Content navigator crashes with high number of facets
- [INTEGRATED-1459](https://eactive.atlassian.net/browse/INTEGRATED-1459) Content type workflow rights are not respected in assignee list
- [INTEGRATED-1461](https://eactive.atlassian.net/browse/INTEGRATED-1461) Workflow status is not explicit when workflow is newly added
- [INTEGRATED-1464](https://eactive.atlassian.net/browse/INTEGRATED-1464) ContentTypeController doesn’t meet the Symfony 4 requirements.
- [INTEGRATED-1466](https://eactive.atlassian.net/browse/INTEGRATED-1466) There is no button that allows you to return to the overview of the content types when you see more information about a content type.
- [INTEGRATED-1467](https://eactive.atlassian.net/browse/INTEGRATED-1467) Content types should filter on alphabet.
- [INTEGRATED-1468](https://eactive.atlassian.net/browse/INTEGRATED-1468) Make a button to get more information about a content type.
- [INTEGRATED-1488](https://eactive.atlassian.net/browse/INTEGRATED-1488) Related content block sometimes disrespects channel
- [INTEGRATED-1492](https://eactive.atlassian.net/browse/INTEGRATED-1492) Symfony requires form type to configure 'multiple' if data is array
- [INTEGRATED-1501](https://eactive.atlassian.net/browse/INTEGRATED-1501) Assignee list is buggy
- [INTEGRATED-1507](https://eactive.atlassian.net/browse/INTEGRATED-1507) Permission check for assigned user is incorrect
- [INTEGRATED-1513](https://eactive.atlassian.net/browse/INTEGRATED-1513) Content type pages not deleted by channel
- [INTEGRATED-1541](https://eactive.atlassian.net/browse/INTEGRATED-1541) Redirect not found exceptions only
- [INTEGRATED-1543](https://eactive.atlassian.net/browse/INTEGRATED-1543) Cannonical URL triggers on empty source URL
- [INTEGRATED-1545](https://eactive.atlassian.net/browse/INTEGRATED-1545) Saving a page with a column loses page content
- [INTEGRATED-1547](https://eactive.atlassian.net/browse/INTEGRATED-1547) Avoid false CircularFallbackException
- [INTEGRATED-1552](https://eactive.atlassian.net/browse/INTEGRATED-1552) Drag/drop does not work with newer jQuery version
- [INTEGRATED-1564](https://eactive.atlassian.net/browse/INTEGRATED-1564) Do not double escape CDATA in RSS
- [INTEGRATED-1585](https://eactive.atlassian.net/browse/INTEGRATED-1585) Long open time for PDF files each pageview
- [INTEGRATED-1595](https://eactive.atlassian.net/browse/INTEGRATED-1595) Workflow assign select box is very slow in some cases

## Other Changes ##
- [INTEGRATED-751](https://eactive.atlassian.net/browse/INTEGRATED-751) Unit test with prefer-lowest

# Changelog Integrated version 0.10 #

## Highlights ##
- Added Products to content model
- Lot of bug fixes

## New Features ##
- [INTEGRATED-530](https://eactive.atlassian.net/browse/INTEGRATED-530) Redirect to primary domain name in channel activator
- [INTEGRATED-1384](https://eactive.atlassian.net/browse/INTEGRATED-1384) Add Product document
- [INTEGRATED-1395](https://eactive.atlassian.net/browse/INTEGRATED-1395) Allow company logo as cover
- [INTEGRATED-1397](https://eactive.atlassian.net/browse/INTEGRATED-1397) Improve consistency in backend styles
- [INTEGRATED-1398](https://eactive.atlassian.net/browse/INTEGRATED-1398) Upgrade Vagrant for for PHP 7.2 + MongoDB 4 (+multidb)
- [INTEGRATED-1401](https://eactive.atlassian.net/browse/INTEGRATED-1401) Integrated slug redirect should support URL's with slash
- [INTEGRATED-1426](https://eactive.atlassian.net/browse/INTEGRATED-1426) Allow override history block
- [INTEGRATED-1427](https://eactive.atlassian.net/browse/INTEGRATED-1427) Gravatar not using https url
- [INTEGRATED-1435](https://eactive.atlassian.net/browse/INTEGRATED-1435) Enable redirect to primary domain per channel
- [INTEGRATED-1436](https://eactive.atlassian.net/browse/INTEGRATED-1436) Remove index on identifier for Embedded\Storage
- [INTEGRATED-1453](https://eactive.atlassian.net/browse/INTEGRATED-1453) Support webpath gregwar
- [INTEGRATED-1556](https://eactive.atlassian.net/browse/INTEGRATED-1556) Carry over parameters on lock

## Bug Fixes ##
- [INTEGRATED-1090](https://eactive.atlassian.net/browse/INTEGRATED-1090) Long filenames in relation box strech the selection box
- [INTEGRATED-1405](https://eactive.atlassian.net/browse/INTEGRATED-1405) Don't display validation groups for locked items
- [INTEGRATED-1407](https://eactive.atlassian.net/browse/INTEGRATED-1407) Delete label shown twice (should be once)
- [INTEGRATED-1409](https://eactive.atlassian.net/browse/INTEGRATED-1409) Password edit form can't be cancelled because of browser html validation
- [INTEGRATED-1410](https://eactive.atlassian.net/browse/INTEGRATED-1410) Bulk actions sometimes fail with new permissions
- [INTEGRATED-1411](https://eactive.atlassian.net/browse/INTEGRATED-1411) Do not create facet for empty title
- [INTEGRATED-1413](https://eactive.atlassian.net/browse/INTEGRATED-1413) Queue runner with multiple threads is broken
- [INTEGRATED-1429](https://eactive.atlassian.net/browse/INTEGRATED-1429) Spinning Pinwheel Of Death after cancelling Integrated form
- [INTEGRATED-1431](https://eactive.atlassian.net/browse/INTEGRATED-1431) Integrated displays duplicate error messages in user form
- [INTEGRATED-1433](https://eactive.atlassian.net/browse/INTEGRATED-1433) Creating user with existing username, gives 500 error
- [INTEGRATED-1566](https://eactive.atlassian.net/browse/INTEGRATED-1566) Cursor not found exception in solr:indexer:queue
- [INTEGRATED-1580](https://eactive.atlassian.net/browse/INTEGRATED-1580) File deletion in storage bundle implemented incorrectly

# Changelog Integrated version 0.9 #

## Highlights ##
- Content access right on channel or contenttype level
- Add web and news sitemaps

## New Features ##
- [INTEGRATED-536](https://eactive.atlassian.net/browse/INTEGRATED-536) Correctly apply role permissions
- [INTEGRATED-1178](https://eactive.atlassian.net/browse/INTEGRATED-1178) Make sure __toString returns a string
- [INTEGRATED-1184](https://eactive.atlassian.net/browse/INTEGRATED-1184) Enlarge HTML block
- [INTEGRATED-1264](https://eactive.atlassian.net/browse/INTEGRATED-1264) Add theme path global variable and use it to include base views in Thompson / default theme, using the template locator
- [INTEGRATED-1269](https://eactive.atlassian.net/browse/INTEGRATED-1269) Do not convert SVG logos
- [INTEGRATED-1287](https://eactive.atlassian.net/browse/INTEGRATED-1287) Allow to limit content access per channel - apply limitations to content editing / solr indexing
- [INTEGRATED-1288](https://eactive.atlassian.net/browse/INTEGRATED-1288) Deployer recipe and configuration in integrated-standard
- [INTEGRATED-1309](https://eactive.atlassian.net/browse/INTEGRATED-1309) Do not allow users in other scopes on /admin 
- [INTEGRATED-1311](https://eactive.atlassian.net/browse/INTEGRATED-1311) Bethat: improve channel feature
- [INTEGRATED-1312](https://eactive.atlassian.net/browse/INTEGRATED-1312) Bethat: improve connector feature
- [INTEGRATED-1321](https://eactive.atlassian.net/browse/INTEGRATED-1321) Allow to limit content access per channel - edit channel
- [INTEGRATED-1322](https://eactive.atlassian.net/browse/INTEGRATED-1322) Allow to limit content access per channel - show allowed channels
- [INTEGRATED-1332](https://eactive.atlassian.net/browse/INTEGRATED-1332) Allow to limit content access per contenttype - edit contenttype
- [INTEGRATED-1336](https://eactive.atlassian.net/browse/INTEGRATED-1336) Write documentation about how to implement a XML for Content Types
- [INTEGRATED-1337](https://eactive.atlassian.net/browse/INTEGRATED-1337) Implement the standard content types in a XML
- [INTEGRATED-1338](https://eactive.atlassian.net/browse/INTEGRATED-1338) Change the content type manager to work with the XML files
- [INTEGRATED-1339](https://eactive.atlassian.net/browse/INTEGRATED-1339) Overview content types
- [INTEGRATED-1341](https://eactive.atlassian.net/browse/INTEGRATED-1341) Merge SitemapBundle in Integrated
- [INTEGRATED-1349](https://eactive.atlassian.net/browse/INTEGRATED-1349) Load content type XML files from all bundles
- [INTEGRATED-1351](https://eactive.atlassian.net/browse/INTEGRATED-1351) Profile edit page in Integrated
- [INTEGRATED-1354](https://eactive.atlassian.net/browse/INTEGRATED-1354) Fix feedback from Sitemapbundle
- [INTEGRATED-1370](https://eactive.atlassian.net/browse/INTEGRATED-1370) Fix error with tagName
- [INTEGRATED-1379](https://eactive.atlassian.net/browse/INTEGRATED-1379) Support for checkbox in custom field
- [INTEGRATED-1385](https://eactive.atlassian.net/browse/INTEGRATED-1385) Fix new native_function_invocation, fopen_flags rules
- [INTEGRATED-1389](https://eactive.atlassian.net/browse/INTEGRATED-1389) LinkText in featuredItemsBlock shouldn't be required
- [INTEGRATED-1391](https://eactive.atlassian.net/browse/INTEGRATED-1391) Related content block sometimes doesn't show all shared linked items
- [INTEGRATED-1392](https://eactive.atlassian.net/browse/INTEGRATED-1392) Thompson theme fixes and consistency updates

## Bug Fixes ##
- [INTEGRATED-1197](https://eactive.atlassian.net/browse/INTEGRATED-1197) Unpublished articles are exported with "add" state
- [INTEGRATED-1199](https://eactive.atlassian.net/browse/INTEGRATED-1199) Keep export of future publication articles in queue
- [INTEGRATED-1235](https://eactive.atlassian.net/browse/INTEGRATED-1235) Editing submenu
- [INTEGRATED-1286](https://eactive.atlassian.net/browse/INTEGRATED-1286) Spike: default value changes are saved to content history
- [INTEGRATED-1331](https://eactive.atlassian.net/browse/INTEGRATED-1331) Don't save non-changes to content history
- [INTEGRATED-1344](https://eactive.atlassian.net/browse/INTEGRATED-1344) Include image in page doesn't work
- [INTEGRATED-1348](https://eactive.atlassian.net/browse/INTEGRATED-1348) Doctrine tries to persist virtual roles - inject roles to token instead of user
- [INTEGRATED-1350](https://eactive.atlassian.net/browse/INTEGRATED-1350) Read / write access fields do not align
- [INTEGRATED-1357](https://eactive.atlassian.net/browse/INTEGRATED-1357) 500 error new workflow
- [INTEGRATED-1364](https://eactive.atlassian.net/browse/INTEGRATED-1364) Some collection forms are broken since Symfony 3 upgrade
- [INTEGRATED-1368](https://eactive.atlassian.net/browse/INTEGRATED-1368) Sitemap shows articles published in the future or past
- [INTEGRATED-1369](https://eactive.atlassian.net/browse/INTEGRATED-1369) ChannelChoiceType doesn't support multiple = false
- [INTEGRATED-1371](https://eactive.atlassian.net/browse/INTEGRATED-1371) Spike: users without a role can't log in
- [INTEGRATED-1373](https://eactive.atlassian.net/browse/INTEGRATED-1373) Twitter and Facebook connector do duplicate postings
- [INTEGRATED-1380](https://eactive.atlassian.net/browse/INTEGRATED-1380) Fix for lowercase view names in content type pages
- [INTEGRATED-1386](https://eactive.atlassian.net/browse/INTEGRATED-1386) Browse image misses buttons with jQuery 3
- [INTEGRATED-1387](https://eactive.atlassian.net/browse/INTEGRATED-1387) Content type page editing does not support fallback themes
- [INTEGRATED-1388](https://eactive.atlassian.net/browse/INTEGRATED-1388) Fallback for content url's without content type page (for custom work) is incorrect
- [INTEGRATED-1400](https://eactive.atlassian.net/browse/INTEGRATED-1400) Image browser for text block doesn't work on front-end
- [INTEGRATED-1412](https://eactive.atlassian.net/browse/INTEGRATED-1412) Fix workflow:worker:run command for Symfony 3

# Changelog Integrated version 0.8 #

## Highlights ##
- Repositories have been merged into integrated/integrated
- Upgrade to Symfony 3.4
- Require PHP 7.1

## New Features ##
- [INTEGRATED-1253](https://eactive.atlassian.net/browse/INTEGRATED-1253) Fixen built errors jenkins - alle repositories
- [INTEGRATED-1275](https://eactive.atlassian.net/browse/INTEGRATED-1275) Merge repositories into one
- [INTEGRATED-1276](https://eactive.atlassian.net/browse/INTEGRATED-1276) Dirty code: SolrType
- [INTEGRATED-1277](https://eactive.atlassian.net/browse/INTEGRATED-1277) Spike: dirty code: Documents
- [INTEGRATED-1280](https://eactive.atlassian.net/browse/INTEGRATED-1280) Upgrade to Symfony 3.4
- [INTEGRATED-1296](https://eactive.atlassian.net/browse/INTEGRATED-1296) Drag / drop easyness decreased after upgrade from 0.6 to 0.7
- [INTEGRATED-1298](https://eactive.atlassian.net/browse/INTEGRATED-1298) Merge INTEGRATED-1293 0.8 (Throw events in form block)
- [INTEGRATED-1314](https://eactive.atlassian.net/browse/INTEGRATED-1314) Behat: improve content type feature
- [INTEGRATED-1323](https://eactive.atlassian.net/browse/INTEGRATED-1323) Upgrade integrated/puphpet for PHP 7.1
- [INTEGRATED-1330](https://eactive.atlassian.net/browse/INTEGRATED-1330) Save sessions in server defined location by default

## Bug Fixes ##
- [INTEGRATED-1304](https://eactive.atlassian.net/browse/INTEGRATED-1304) Datafixtures are broken since Symfony upgrade to 3.4
- [INTEGRATED-1306](https://eactive.atlassian.net/browse/INTEGRATED-1306) All exceptions in Integrated are redirected to /admin/content (which is weird).
- [INTEGRATED-1324](https://eactive.atlassian.net/browse/INTEGRATED-1324) Bugs after Symfony 3.4 upgrade
- [INTEGRATED-1326](https://eactive.atlassian.net/browse/INTEGRATED-1326) [page-bundle] Cannot access protected method Integrated\Bundle\PageBundle\EventListener\ContentTypeChangedListener::contentTypeDeleted()
- [INTEGRATED-1327](https://eactive.atlassian.net/browse/INTEGRATED-1327) Some collection forms are broken after Symfony 3.4 upgrade
- [INTEGRATED-1329](https://eactive.atlassian.net/browse/INTEGRATED-1329) Improve locking

## Other Changes ##
- [INTEGRATED-980](https://eactive.atlassian.net/browse/INTEGRATED-980) [page-bundle] Spike: deleting routing from cache directory
- [INTEGRATED-1278](https://eactive.atlassian.net/browse/INTEGRATED-1278) Spike: fix testing with merged repositories
- [INTEGRATED-1279](https://eactive.atlassian.net/browse/INTEGRATED-1279) Require PHP 7.1

# Changelog Integrated version 0.7 #

## Highlights ##
- Introduced user scopes
- Added bulk actions
- Added poll
- More options for form block and related content block
- New document types
- Many improvements and additions in Thompson Theme
- JSON-LD schema.org implementation
- Upgrade to Symfony 2.8

## New Features ##
- [INTEGRATED-252](https://eactive.atlassian.net/browse/INTEGRATED-252) Disable submit button after submit
- [INTEGRATED-421](https://eactive.atlassian.net/browse/INTEGRATED-421) [website-bundle] HTML block to allow javascript to be used in blocks
- [INTEGRATED-428](https://eactive.atlassian.net/browse/INTEGRATED-428) [content-bundle] Show block in edit mode
- [INTEGRATED-515](https://eactive.atlassian.net/browse/INTEGRATED-515) Use json instead of form for block editing
- [INTEGRATED-572](https://eactive.atlassian.net/browse/INTEGRATED-572) [website-bundle] URL and breadcrumb resolver
- [INTEGRATED-620](https://eactive.atlassian.net/browse/INTEGRATED-620) Multiple/bulk actions in the content navigator
- [INTEGRATED-634](https://eactive.atlassian.net/browse/INTEGRATED-634) Upgrade to Symfony 2.8 first 4 bundles
- [INTEGRATED-789](https://eactive.atlassian.net/browse/INTEGRATED-789) Make workflow routing consistent with other bundles
- [INTEGRATED-860](https://eactive.atlassian.net/browse/INTEGRATED-860) Don't store document field information configured in code in database
- [INTEGRATED-884](https://eactive.atlassian.net/browse/INTEGRATED-884) Allow all persons to be chosen as author
- [INTEGRATED-954](https://eactive.atlassian.net/browse/INTEGRATED-954) Upgrade to Symfony 2.8 4-8 bundles
- [INTEGRATED-955](https://eactive.atlassian.net/browse/INTEGRATED-955) Upgrade to Symfony 2.8 8-12 bundles
- [INTEGRATED-956](https://eactive.atlassian.net/browse/INTEGRATED-956) Upgrade to Symfony 2.8 12-16 bundles
- [INTEGRATED-958](https://eactive.atlassian.net/browse/INTEGRATED-958) Ability to add logo and color for channel
- [INTEGRATED-965](https://eactive.atlassian.net/browse/INTEGRATED-965) [solr-bundle] Update autoloader Integrated Solr bundle from PSR-0 to PSR-4
- [INTEGRATED-967](https://eactive.atlassian.net/browse/INTEGRATED-967) Thompson theme is not displayed correctly
- [INTEGRATED-968](https://eactive.atlassian.net/browse/INTEGRATED-968) Implement navigation in Thompson theme
- [INTEGRATED-969](https://eactive.atlassian.net/browse/INTEGRATED-969) Implement "tiled" content block in Thompson theme
- [INTEGRATED-970](https://eactive.atlassian.net/browse/INTEGRATED-970) Use logo, main logo and name from channel in Thompson theme
- [INTEGRATED-971](https://eactive.atlassian.net/browse/INTEGRATED-971) PSR-0 to PSR-4 autoloader for all Integrated bundles
- [INTEGRATED-983](https://eactive.atlassian.net/browse/INTEGRATED-983) Social connector: Twitter
- [INTEGRATED-984](https://eactive.atlassian.net/browse/INTEGRATED-984) Social connector: Facebook
- [INTEGRATED-1000](https://eactive.atlassian.net/browse/INTEGRATED-1000) Change of title, subtitle, etc. isn't seen as a change when editing content
- [INTEGRATED-1002](https://eactive.atlassian.net/browse/INTEGRATED-1002) Update bundles to 0.7
- [INTEGRATED-1021](https://eactive.atlassian.net/browse/INTEGRATED-1021) Insert image / video dialog improvements
- [INTEGRATED-1025](https://eactive.atlassian.net/browse/INTEGRATED-1025) Add Behat, PHPUnit and PHPCS to .travis.yml file
- [INTEGRATED-1028](https://eactive.atlassian.net/browse/INTEGRATED-1028) Relation box on one line
- [INTEGRATED-1031](https://eactive.atlassian.net/browse/INTEGRATED-1031) Website search - search results page in datafixtures
- [INTEGRATED-1036](https://eactive.atlassian.net/browse/INTEGRATED-1036) "Remember me" is not remembered
- [INTEGRATED-1037](https://eactive.atlassian.net/browse/INTEGRATED-1037) User scopes - Manage scopes
- [INTEGRATED-1040](https://eactive.atlassian.net/browse/INTEGRATED-1040) Allow a user to have a scope
- [INTEGRATED-1041](https://eactive.atlassian.net/browse/INTEGRATED-1041) Login to the Integrated scope
- [INTEGRATED-1042](https://eactive.atlassian.net/browse/INTEGRATED-1042) Do not use autofill when editing a user
- [INTEGRATED-1043](https://eactive.atlassian.net/browse/INTEGRATED-1043) Allow a channel to have a user scope
- [INTEGRATED-1044](https://eactive.atlassian.net/browse/INTEGRATED-1044) Nicely allign checkboxes
- [INTEGRATED-1061](https://eactive.atlassian.net/browse/INTEGRATED-1061) Thompson theme: implement facet block view
- [INTEGRATED-1062](https://eactive.atlassian.net/browse/INTEGRATED-1062) Thompson theme: implement "search-results" content block view
- [INTEGRATED-1063](https://eactive.atlassian.net/browse/INTEGRATED-1063) Thompson theme: implement commercial content block view
- [INTEGRATED-1064](https://eactive.atlassian.net/browse/INTEGRATED-1064) Feature items block text/editor
- [INTEGRATED-1065](https://eactive.atlassian.net/browse/INTEGRATED-1065) Thompson theme: implement article detail view
- [INTEGRATED-1069](https://eactive.atlassian.net/browse/INTEGRATED-1069) Spike: JSON-LD schema.org implementation
- [INTEGRATED-1072](https://eactive.atlassian.net/browse/INTEGRATED-1072) Thompson theme: implement carousel content block view
- [INTEGRATED-1073](https://eactive.atlassian.net/browse/INTEGRATED-1073) Thompson theme: implement list content block view
- [INTEGRATED-1074](https://eactive.atlassian.net/browse/INTEGRATED-1074) Thompson theme: implement feature content block view
- [INTEGRATED-1075](https://eactive.atlassian.net/browse/INTEGRATED-1075) Thompson theme: implement taxonomy content block view
- [INTEGRATED-1078](https://eactive.atlassian.net/browse/INTEGRATED-1078) JSON-LD schema.org implementation
- [INTEGRATED-1107](https://eactive.atlassian.net/browse/INTEGRATED-1107) Improve using scopes for user commands
- [INTEGRATED-1115](https://eactive.atlassian.net/browse/INTEGRATED-1115) Allow adding text to pages with one click
- [INTEGRATED-1116](https://eactive.atlassian.net/browse/INTEGRATED-1116) Edit blocks in modal window
- [INTEGRATED-1121](https://eactive.atlassian.net/browse/INTEGRATED-1121) Add new blocks in modal window
- [INTEGRATED-1122](https://eactive.atlassian.net/browse/INTEGRATED-1122) Block management in controllers other than in PageBundle
- [INTEGRATED-1135](https://eactive.atlassian.net/browse/INTEGRATED-1135) Improve logo view in Thompson theme
- [INTEGRATED-1136](https://eactive.atlassian.net/browse/INTEGRATED-1136) Implement feature items block in Thompson theme
- [INTEGRATED-1143](https://eactive.atlassian.net/browse/INTEGRATED-1143) News document type
- [INTEGRATED-1146](https://eactive.atlassian.net/browse/INTEGRATED-1146) Comment document type
- [INTEGRATED-1148](https://eactive.atlassian.net/browse/INTEGRATED-1148) Thompson theme: style form block
- [INTEGRATED-1149](https://eactive.atlassian.net/browse/INTEGRATED-1149) Thompson theme: update event detail page view with date fields
- [INTEGRATED-1152](https://eactive.atlassian.net/browse/INTEGRATED-1152) Thompson theme: implement comment related content view
- [INTEGRATED-1169](https://eactive.atlassian.net/browse/INTEGRATED-1169) Redirection / 404 / 500 strategy
- [INTEGRATED-1170](https://eactive.atlassian.net/browse/INTEGRATED-1170) Add channel when adding content item with form block
- [INTEGRATED-1171](https://eactive.atlassian.net/browse/INTEGRATED-1171) Allow to link a content item created by a form block to the content document
- [INTEGRATED-1172](https://eactive.atlassian.net/browse/INTEGRATED-1172) Add "Show items linked by the current document" option to related content block
- [INTEGRATED-1173](https://eactive.atlassian.net/browse/INTEGRATED-1173) Add "Text after submit" option to form block, but keep redirect URL
- [INTEGRATED-1180](https://eactive.atlassian.net/browse/INTEGRATED-1180) Support for firewall in integrated-behat-extensions
- [INTEGRATED-1188](https://eactive.atlassian.net/browse/INTEGRATED-1188) Add Dutch translations to Thompson Theme

## Bug Fixes ##
- [INTEGRATED-170](https://eactive.atlassian.net/browse/INTEGRATED-170) Sorting is lost while filtering in content navigator
- [INTEGRATED-292](https://eactive.atlassian.net/browse/INTEGRATED-292) [website-bundle] Allow blocks with javascript to be added
- [INTEGRATED-312](https://eactive.atlassian.net/browse/INTEGRATED-312) [workflow-bundle] Reading content doens't work without write rights
- [INTEGRATED-566](https://eactive.atlassian.net/browse/INTEGRATED-566) [sitemap-bundle] Sitemap crashes with large number of documents
- [INTEGRATED-975](https://eactive.atlassian.net/browse/INTEGRATED-975) Fix unit test for AssetBundle
- [INTEGRATED-981](https://eactive.atlassian.net/browse/INTEGRATED-981) [library] Integrated library tests are failing
- [INTEGRATED-996](https://eactive.atlassian.net/browse/INTEGRATED-996) [locking-bundle] Clean up code locking bundle config
- [INTEGRATED-1018](https://eactive.atlassian.net/browse/INTEGRATED-1018) ThemeManager fails when removing a theme
- [INTEGRATED-1033](https://eactive.atlassian.net/browse/INTEGRATED-1033) Datafixtures are broken
- [INTEGRATED-1035](https://eactive.atlassian.net/browse/INTEGRATED-1035) [workflow-bundle] The ContentSubscriber has a error in the preUpdate
- [INTEGRATED-1038](https://eactive.atlassian.net/browse/INTEGRATED-1038) Content type creation is broken
- [INTEGRATED-1039](https://eactive.atlassian.net/browse/INTEGRATED-1039) Creation of content block is broken
- [INTEGRATED-1045](https://eactive.atlassian.net/browse/INTEGRATED-1045) integrated_image formtype is broken in 0.7
- [INTEGRATED-1049](https://eactive.atlassian.net/browse/INTEGRATED-1049) Cherry-pick INTEGRATED-1048 to 0.7
- [INTEGRATED-1080](https://eactive.atlassian.net/browse/INTEGRATED-1080) AssetBundle PSR-2 errors
- [INTEGRATED-1091](https://eactive.atlassian.net/browse/INTEGRATED-1091) [user-bundle] Could not load type "user_profile"
- [INTEGRATED-1092](https://eactive.atlassian.net/browse/INTEGRATED-1092) Adding a group fails when no data is entered
- [INTEGRATED-1094](https://eactive.atlassian.net/browse/INTEGRATED-1094) Behat tests fail in Integrated repository
- [INTEGRATED-1095](https://eactive.atlassian.net/browse/INTEGRATED-1095) Image cannot be deleted in 0.7 install
- [INTEGRATED-1105](https://eactive.atlassian.net/browse/INTEGRATED-1105) Workflow rights are not applied on the content edit page
- [INTEGRATED-1128](https://eactive.atlassian.net/browse/INTEGRATED-1128) Workflow form is indented
- [INTEGRATED-1134](https://eactive.atlassian.net/browse/INTEGRATED-1134) Feature items block is broken
- [INTEGRATED-1155](https://eactive.atlassian.net/browse/INTEGRATED-1155) Error when saving channel
- [INTEGRATED-1156](https://eactive.atlassian.net/browse/INTEGRATED-1156) Block with error disappears
- [INTEGRATED-1157](https://eactive.atlassian.net/browse/INTEGRATED-1157) Content detail page is broken
- [INTEGRATED-1159](https://eactive.atlassian.net/browse/INTEGRATED-1159) Edit of content type page is broken
- [INTEGRATED-1164](https://eactive.atlassian.net/browse/INTEGRATED-1164) Disappearing block 
- [INTEGRATED-1166](https://eactive.atlassian.net/browse/INTEGRATED-1166) Add block filters are broken after upgrade to 0.7
- [INTEGRATED-1174](https://eactive.atlassian.net/browse/INTEGRATED-1174) New content type page URL per channel is not injected in Solr
- [INTEGRATED-1175](https://eactive.atlassian.net/browse/INTEGRATED-1175) New content type page URL is not used in view in Thompson theme and default Theme
- [INTEGRATED-1185](https://eactive.atlassian.net/browse/INTEGRATED-1185) Spike: solr:worker:run crashes and fills the queue infinitely
- [INTEGRATED-1186](https://eactive.atlassian.net/browse/INTEGRATED-1186) Can't switch to second channel when viewing pages
- [INTEGRATED-1187](https://eactive.atlassian.net/browse/INTEGRATED-1187) Comment feature should not be shown in form block

## Other Changes ##
- [INTEGRATED-951](https://eactive.atlassian.net/browse/INTEGRATED-951) Try an embedded document approach for INTEGRATED-219

## Package versions ##
- integrated-asset-bundle       0.7
- integrated-block-bundle       0.7
- integrated-channel-bundle     0.7
- integrated-comment-bundle     0.7
- integrated-content-bundle     0.7
- integrated-content-history-bundle0.7
- integrated-formtype-bundle    0.7
- integrated-image-bundle       0.7
- integrated-library            0.7
- integrated-locking-bundle     0.7
- integrated-menu-bundle        0.7
- integrated-page-bundle        0.7
- integrated-puphpet            0.7
- integrated-slug-bundle        0.7
- integrated-social-bundle      0.7
- integrated-solr-bundle        0.7
- integrated-storage-bundle     0.7
- integrated-theme-bundle       0.7
- integrated-thompson-theme-bundle0.7
- integrated-user-bundle        0.7
- integrated-website-bundle     0.7
- integrated-workflow-bundle    0.7

# Changelog Integrated version 0.6 #

## Highlights ##
- Autosuggest for search bar
- Content history
- Drag/drop file upload
- New way of adding relations
- Allow inline images in content
- Comments on content for easier collaboration
- Allow set primary channel

## New Features ##
- [INTEGRATED-43](https://eactive.atlassian.net/browse/INTEGRATED-43) Implement autosuggest for search bar
- [INTEGRATED-61](https://eactive.atlassian.net/browse/INTEGRATED-61) Content history
- [INTEGRATED-134](https://eactive.atlassian.net/browse/INTEGRATED-134) Relations with select2: autosuggest on part of word
- [INTEGRATED-149](https://eactive.atlassian.net/browse/INTEGRATED-149) Drag/drop file upload (storage file upload form type)
- [INTEGRATED-212](https://eactive.atlassian.net/browse/INTEGRATED-212) Select image from computer or server when inserting image into editor
- [INTEGRATED-301](https://eactive.atlassian.net/browse/INTEGRATED-301) Easily get all content types that are instanceof a class
- [INTEGRATED-370](https://eactive.atlassian.net/browse/INTEGRATED-370) Implement new edit page linking with select2
- [INTEGRATED-416](https://eactive.atlassian.net/browse/INTEGRATED-416) Allow adding of inline images in editor
- [INTEGRATED-423](https://eactive.atlassian.net/browse/INTEGRATED-423) Add features to "add block" modal
- [INTEGRATED-543](https://eactive.atlassian.net/browse/INTEGRATED-543) [content-bundle] ContentType changes for dynamic fields
- [INTEGRATED-544](https://eactive.atlassian.net/browse/INTEGRATED-544) [content-bundle] Move ContentBundle mapping to XML
- [INTEGRATED-548](https://eactive.atlassian.net/browse/INTEGRATED-548) [library] Content changes for custom fields
- [INTEGRATED-678](https://eactive.atlassian.net/browse/INTEGRATED-678) Convert unsupported image formats
- [INTEGRATED-740](https://eactive.atlassian.net/browse/INTEGRATED-740) [comment-bundle] Comments on content for easier collaboration
- [INTEGRATED-757](https://eactive.atlassian.net/browse/INTEGRATED-757) Allow back button when content has not been changed, but unlock content item
- [INTEGRATED-807](https://eactive.atlassian.net/browse/INTEGRATED-807) [content-bundle] Channel domain validation does not allow localhost
- [INTEGRATED-871](https://eactive.atlassian.net/browse/INTEGRATED-871) Set primary channel for content item
- [INTEGRATED-878](https://eactive.atlassian.net/browse/INTEGRATED-878) Allow adding a company to a person (jobs)
- [INTEGRATED-882](https://eactive.atlassian.net/browse/INTEGRATED-882) Improve block overview
- [INTEGRATED-893](https://eactive.atlassian.net/browse/INTEGRATED-893) Select2 for relations: show images when adding an image
- [INTEGRATED-894](https://eactive.atlassian.net/browse/INTEGRATED-894) Select2 for relations: previous content types are added to add new
- [INTEGRATED-895](https://eactive.atlassian.net/browse/INTEGRATED-895) Get content history ready for 0.6
- [INTEGRATED-896](https://eactive.atlassian.net/browse/INTEGRATED-896) Show content history changes
- [INTEGRATED-904](https://eactive.atlassian.net/browse/INTEGRATED-904) Author drop down layout is not OK
- [INTEGRATED-909](https://eactive.atlassian.net/browse/INTEGRATED-909) Fixes for update to 0.6
- [INTEGRATED-910](https://eactive.atlassian.net/browse/INTEGRATED-910) Correct solr/content.xml for storage objects
- [INTEGRATED-935](https://eactive.atlassian.net/browse/INTEGRATED-935) Add __toString to Content document
- [INTEGRATED-940](https://eactive.atlassian.net/browse/INTEGRATED-940) Synchronize minimum versions in all Integrated bundles
- [INTEGRATED-942](https://eactive.atlassian.net/browse/INTEGRATED-942) Cherry pick INTEGRATED-941 for 0.6
- [INTEGRATED-946](https://eactive.atlassian.net/browse/INTEGRATED-946) Implement INTEGRATED-945 in 0.6
- [INTEGRATED-948](https://eactive.atlassian.net/browse/INTEGRATED-948) Implement INTEGRATED-947 in 0.6
- [INTEGRATED-952](https://eactive.atlassian.net/browse/INTEGRATED-952) Don't autosuggest items when the user does not have permission
- [INTEGRATED-960](https://eactive.atlassian.net/browse/INTEGRATED-960) Finish IntegratedCommentBundle
- [INTEGRATED-974](https://eactive.atlassian.net/browse/INTEGRATED-974) Automatically create menu when it does not exists
- [INTEGRATED-998](https://eactive.atlassian.net/browse/INTEGRATED-998) [storage-bundle] Make the Storage compatible with Metadata
- [INTEGRATED-1005](https://eactive.atlassian.net/browse/INTEGRATED-1005) Add content history to skeleton
- [INTEGRATED-1027](https://eactive.atlassian.net/browse/INTEGRATED-1027) Show more options in relations drop down
- [INTEGRATED-1050](https://eactive.atlassian.net/browse/INTEGRATED-1050) Index the storage object as json for the company logo instead of the image url
- [INTEGRATED-1055](https://eactive.atlassian.net/browse/INTEGRATED-1055) Allow custom rendering of inline images
- [INTEGRATED-1056](https://eactive.atlassian.net/browse/INTEGRATED-1056) Allow inline images to be the cover / allow inline video to be embedded
- [INTEGRATED-1079](https://eactive.atlassian.net/browse/INTEGRATED-1079) [export-bundle] Add job to person export

## Bug Fixes ##
- [INTEGRATED-241](https://eactive.atlassian.net/browse/INTEGRATED-241) Required relation
- [INTEGRATED-242](https://eactive.atlassian.net/browse/INTEGRATED-242) [Edit image page] File doesn't stay selected after uploading
- [INTEGRATED-276](https://eactive.atlassian.net/browse/INTEGRATED-276) 500 error after editing workflow states
- [INTEGRATED-686](https://eactive.atlassian.net/browse/INTEGRATED-686) [storage-bundle] storage:filesystem:redistribute and storage:filesystem:clear commands do not work
- [INTEGRATED-870](https://eactive.atlassian.net/browse/INTEGRATED-870) Setting Required for an Image does not work
- [INTEGRATED-887](https://eactive.atlassian.net/browse/INTEGRATED-887) [content-bundle] Wrong merge made
- [INTEGRATED-892](https://eactive.atlassian.net/browse/INTEGRATED-892) Solr indexer unit test are broken
- [INTEGRATED-901](https://eactive.atlassian.net/browse/INTEGRATED-901) File/image drag&drop spelling fix
- [INTEGRATED-907](https://eactive.atlassian.net/browse/INTEGRATED-907) Solr unit tests are broken after updating content interface
- [INTEGRATED-926](https://eactive.atlassian.net/browse/INTEGRATED-926) When adding a new relation item without image, "undefined is added"
- [INTEGRATED-927](https://eactive.atlassian.net/browse/INTEGRATED-927) Drag/drop does not work in default install
- [INTEGRATED-938](https://eactive.atlassian.net/browse/INTEGRATED-938) [content-bundle] ContentBundle unit test fix
- [INTEGRATED-939](https://eactive.atlassian.net/browse/INTEGRATED-939) [library] Library is not compatible with solarium 3.7
- [INTEGRATED-987](https://eactive.atlassian.net/browse/INTEGRATED-987) XML mapping is missing for FeaturedItemsBlock and ContentItemsBlock
- [INTEGRATED-989](https://eactive.atlassian.net/browse/INTEGRATED-989) Autosuggest fails with a big index
- [INTEGRATED-991](https://eactive.atlassian.net/browse/INTEGRATED-991) Storage routing is missing in default install
- [INTEGRATED-992](https://eactive.atlassian.net/browse/INTEGRATED-992) XML mapping for embedded storage not OK
- [INTEGRATED-1003](https://eactive.atlassian.net/browse/INTEGRATED-1003) Workflow facetfilter is missing in content navigator
- [INTEGRATED-1004](https://eactive.atlassian.net/browse/INTEGRATED-1004) Incorrect index on title
- [INTEGRATED-1006](https://eactive.atlassian.net/browse/INTEGRATED-1006) Popup does not close after add new
- [INTEGRATED-1007](https://eactive.atlassian.net/browse/INTEGRATED-1007) "Class '' does not exist" error in SearchContentReferenced
- [INTEGRATED-1008](https://eactive.atlassian.net/browse/INTEGRATED-1008) Insert image / video dialog bugs
- [INTEGRATED-1009](https://eactive.atlassian.net/browse/INTEGRATED-1009) Assignee shows logged in user when other user is selected
- [INTEGRATED-1015](https://eactive.atlassian.net/browse/INTEGRATED-1015) Slug is not generated as unique in 0.6
- [INTEGRATED-1016](https://eactive.atlassian.net/browse/INTEGRATED-1016) Solr cover images are broken
- [INTEGRATED-1017](https://eactive.atlassian.net/browse/INTEGRATED-1017) Cancel button does not work when adding a new content item from a relation
- [INTEGRATED-1019](https://eactive.atlassian.net/browse/INTEGRATED-1019) 500 error when canceling image edit
- [INTEGRATED-1034](https://eactive.atlassian.net/browse/INTEGRATED-1034) Fallback image fails in the first pageview after upgrading to 0.6
- [INTEGRATED-1051](https://eactive.atlassian.net/browse/INTEGRATED-1051) URL is not active after creation
- [INTEGRATED-1052](https://eactive.atlassian.net/browse/INTEGRATED-1052) Default theme fallbacks to default theme
- [INTEGRATED-1054](https://eactive.atlassian.net/browse/INTEGRATED-1054) Add comment does not always disappear
- [INTEGRATED-1076](https://eactive.atlassian.net/browse/INTEGRATED-1076) Use Integrated jQuery.filer
- [INTEGRATED-1084](https://eactive.atlassian.net/browse/INTEGRATED-1084) Label for Jobs is wrong
- [INTEGRATED-1088](https://eactive.atlassian.net/browse/INTEGRATED-1088) Remove examples and PHP files from integrated-jquery.filer
- [INTEGRATED-1089](https://eactive.atlassian.net/browse/INTEGRATED-1089) Long titles hide the delete cross in relation select2 boxes
- [INTEGRATED-1131](https://eactive.atlassian.net/browse/INTEGRATED-1131) Can't edit an selected image because of 'Add a Comment' function
- [INTEGRATED-1132](https://eactive.atlassian.net/browse/INTEGRATED-1132) When a format is selected, it's not highlighted.

## Package versions ##
- integrated-asset-bundle       0.5
- integrated-block-bundle       0.6
- integrated-channel-bundle     0.6
- integrated-comment-bundle     0.6
- integrated-content-bundle     0.6
- integrated-content-history-bundle0.6
- integrated-formtype-bundle    0.6
- integrated-image-bundle       0.6
- integrated-library            0.6
- integrated-locking-bundle     0.6
- integrated-menu-bundle        0.6
- integrated-page-bundle        0.6
- integrated-puphpet            0.5
- integrated-slug-bundle        0.6
- integrated-solr-bundle        0.6
- integrated-storage-bundle     0.6
- integrated-theme-bundle       0.6
- integrated-user-bundle        0.6
- integrated-website-bundle     0.6
- integrated-workflow-bundle    0.6

# Changelog Integrated version 0.5 #

## Highlights ##
- New backend design
- New block for websites (for example related content block)
- A lot of small new features and improvements

## New Features ##
- [INTEGRATED-29](https://eactive.atlassian.net/browse/INTEGRATED-29) Use stable versions of all external bundles
- [INTEGRATED-109](https://eactive.atlassian.net/browse/INTEGRATED-109) Index needed on references
- [INTEGRATED-258](https://eactive.atlassian.net/browse/INTEGRATED-258) Load js files with Twig extension instead of config
- [INTEGRATED-277](https://eactive.atlassian.net/browse/INTEGRATED-277) [content-bundle] Related content block
- [INTEGRATED-368](https://eactive.atlassian.net/browse/INTEGRATED-368) Implement new css (sass) with header/footer
- [INTEGRATED-369](https://eactive.atlassian.net/browse/INTEGRATED-369) Implement new edit page design
- [INTEGRATED-392](https://eactive.atlassian.net/browse/INTEGRATED-392) [content-bundle] Use a resized image version on edit page
- [INTEGRATED-473](https://eactive.atlassian.net/browse/INTEGRATED-473) [workflow-bundle] Fix wrong text on Workflow delete page
- [INTEGRATED-478](https://eactive.atlassian.net/browse/INTEGRATED-478) [workflow-bundle] ROLE_ADMIN should always have full access to content
- [INTEGRATED-503](https://eactive.atlassian.net/browse/INTEGRATED-503) Upgrade select2 to version 4.0.0
- [INTEGRATED-518](https://eactive.atlassian.net/browse/INTEGRATED-518) [content-bundle] Show the "Unsaved changes" modal when click Cancel
- [INTEGRATED-535](https://eactive.atlassian.net/browse/INTEGRATED-535) Add ROLE parameter to create:user command
- [INTEGRATED-538](https://eactive.atlassian.net/browse/INTEGRATED-538) [user-bundle] Allow a bundle to define roles
- [INTEGRATED-553](https://eactive.atlassian.net/browse/INTEGRATED-553) [content-bundle] Re-apply styles in new design
- [INTEGRATED-573](https://eactive.atlassian.net/browse/INTEGRATED-573) Multiple bootstrap size in container block
- [INTEGRATED-600](https://eactive.atlassian.net/browse/INTEGRATED-600) [content-bundle] Embed many form type
- [INTEGRATED-631](https://eactive.atlassian.net/browse/INTEGRATED-631) Don't allow to delete content or search selections when referenced somewhere
- [INTEGRATED-640](https://eactive.atlassian.net/browse/INTEGRATED-640) [content-bundle] Allow multiple facets in facetblock
- [INTEGRATED-641](https://eactive.atlassian.net/browse/INTEGRATED-641) select2 component with ajax support
- [INTEGRATED-645](https://eactive.atlassian.net/browse/INTEGRATED-645) Support active content item in view for related content block
- [INTEGRATED-646](https://eactive.atlassian.net/browse/INTEGRATED-646) Exclude active item in related content block
- [INTEGRATED-648](https://eactive.atlassian.net/browse/INTEGRATED-648) Support filter on content types for relation block
- [INTEGRATED-651](https://eactive.atlassian.net/browse/INTEGRATED-651) [block-bundle] Inject active document in Twig in base block handler
- [INTEGRATED-656](https://eactive.atlassian.net/browse/INTEGRATED-656) [solr-bundle] Add Json solrtype
- [INTEGRATED-660](https://eactive.atlassian.net/browse/INTEGRATED-660) [block-bundle] ContentItemsBlock
- [INTEGRATED-663](https://eactive.atlassian.net/browse/INTEGRATED-663) [workflow-bundle] Update "Assigned" userlist when changing to next status
- [INTEGRATED-664](https://eactive.atlassian.net/browse/INTEGRATED-664) Allow an assigned user to write to the content item
- [INTEGRATED-667](https://eactive.atlassian.net/browse/INTEGRATED-667) Allow search on specific field in ContentController
- [INTEGRATED-668](https://eactive.atlassian.net/browse/INTEGRATED-668) [solr-bundle] Solr propertyType
- [INTEGRATED-670](https://eactive.atlassian.net/browse/INTEGRATED-670) [website-bundle] Support options in integrated_block twig extension
- [INTEGRATED-676](https://eactive.atlassian.net/browse/INTEGRATED-676) [integrated] Add translation tags in the integrated bundles
- [INTEGRATED-677](https://eactive.atlassian.net/browse/INTEGRATED-677) [formtype-bundle] FormType for relations in manual coded forms
- [INTEGRATED-682](https://eactive.atlassian.net/browse/INTEGRATED-682) Select current user as default assignee for new articles until another next status is chosen
- [INTEGRATED-683](https://eactive.atlassian.net/browse/INTEGRATED-683) Disable the assigned list when changing to the next status
- [INTEGRATED-687](https://eactive.atlassian.net/browse/INTEGRATED-687) Sass with scssphp to remove Ruby dependency
- [INTEGRATED-688](https://eactive.atlassian.net/browse/INTEGRATED-688) [content-bundle] Sort search selections by title
- [INTEGRATED-690](https://eactive.atlassian.net/browse/INTEGRATED-690) Add status and assignee to content navigator
- [INTEGRATED-695](https://eactive.atlassian.net/browse/INTEGRATED-695) Split base view header in different views to be able to override parts
- [INTEGRATED-696](https://eactive.atlassian.net/browse/INTEGRATED-696) Use a nicer datetime picker
- [INTEGRATED-697](https://eactive.atlassian.net/browse/INTEGRATED-697) Show username/password only when checkbox is on
- [INTEGRATED-703](https://eactive.atlassian.net/browse/INTEGRATED-703) Author of an article should always be able to read (see, not write) his articles
- [INTEGRATED-706](https://eactive.atlassian.net/browse/INTEGRATED-706) [content-bundle] Delete references of relation
- [INTEGRATED-709](https://eactive.atlassian.net/browse/INTEGRATED-709) [workflow-bundle] Configure the visibility of comment, assignee and deadline
- [INTEGRATED-715](https://eactive.atlassian.net/browse/INTEGRATED-715) Refactor FileConstraintNormalizer to excellent code
- [INTEGRATED-733](https://eactive.atlassian.net/browse/INTEGRATED-733) Use storage object instead of referenceone for person picture and company logo
- [INTEGRATED-744](https://eactive.atlassian.net/browse/INTEGRATED-744) [solr-bundle] Move PropertyType and RelationJsonType from SolrBundle to ContentBundle, add unit tests and improve code
- [INTEGRATED-754](https://eactive.atlassian.net/browse/INTEGRATED-754) Improve Integrated dropdown menu's
- [INTEGRATED-755](https://eactive.atlassian.net/browse/INTEGRATED-755) Remove duplicate 'blocks' item from dropdown menu
- [INTEGRATED-756](https://eactive.atlassian.net/browse/INTEGRATED-756) [content-bundle] Improve Integrated add 'relation' modal
- [INTEGRATED-761](https://eactive.atlassian.net/browse/INTEGRATED-761) [storage-bundle] Wospixel image provider in storagebundle
- [INTEGRATED-784](https://eactive.atlassian.net/browse/INTEGRATED-784) Filter unpublished items in getReferencesBy...
- [INTEGRATED-788](https://eactive.atlassian.net/browse/INTEGRATED-788) [block-bundle] Split twig file for inheritance
- [INTEGRATED-812](https://eactive.atlassian.net/browse/INTEGRATED-812) [content-bundle] getUsedBy filter publish optional
- [INTEGRATED-816](https://eactive.atlassian.net/browse/INTEGRATED-816) [block-bundle] Add role specific to bundles
- [INTEGRATED-817](https://eactive.atlassian.net/browse/INTEGRATED-817) [deployment-bundle] Add migration tools
- [INTEGRATED-832](https://eactive.atlassian.net/browse/INTEGRATED-832) [deployment-bundle] abstractmigration add command execute function
- [INTEGRATED-833](https://eactive.atlassian.net/browse/INTEGRATED-833) [content-bundle] Add sort direction to related content block
- [INTEGRATED-836](https://eactive.atlassian.net/browse/INTEGRATED-836) Featured items block
- [INTEGRATED-849](https://eactive.atlassian.net/browse/INTEGRATED-849) Refactor StorageTrait into StorageExtension 
- [INTEGRATED-853](https://eactive.atlassian.net/browse/INTEGRATED-853) Allow selected navigation items to be highlighted
- [INTEGRATED-862](https://eactive.atlassian.net/browse/INTEGRATED-862) Remove duplicated content type Image and File 
- [INTEGRATED-864](https://eactive.atlassian.net/browse/INTEGRATED-864) Fix for strorage data fixtures
- [INTEGRATED-869](https://eactive.atlassian.net/browse/INTEGRATED-869) Use FilterContainer by default
- [INTEGRATED-873](https://eactive.atlassian.net/browse/INTEGRATED-873) StorageIntendUpload should not read full identity map
- [INTEGRATED-885](https://eactive.atlassian.net/browse/INTEGRATED-885) Change block limit to 5000 in "Add block" modal dialog
- [INTEGRATED-897](https://eactive.atlassian.net/browse/INTEGRATED-897) Revert unreviewed commit
- [INTEGRATED-1020](https://eactive.atlassian.net/browse/INTEGRATED-1020) Script to convert Mongo relation to Integrated relation
- [INTEGRATED-1023](https://eactive.atlassian.net/browse/INTEGRATED-1023) Allow username and password for solr

## Bug Fixes ##
- [INTEGRATED-185](https://eactive.atlassian.net/browse/INTEGRATED-185) Assigned field should refresh after selecting workflow status
- [INTEGRATED-284](https://eactive.atlassian.net/browse/INTEGRATED-284) Create new menu isn't responsive
- [INTEGRATED-286](https://eactive.atlassian.net/browse/INTEGRATED-286) Relation show page can fire 500
- [INTEGRATED-327](https://eactive.atlassian.net/browse/INTEGRATED-327) Error while deleting a workflow when default state has been set
- [INTEGRATED-333](https://eactive.atlassian.net/browse/INTEGRATED-333) Workflow re-index fails in some situations
- [INTEGRATED-335](https://eactive.atlassian.net/browse/INTEGRATED-335) [workflow-bundle] Content types without access are shown in "Create new" window
- [INTEGRATED-427](https://eactive.atlassian.net/browse/INTEGRATED-427) [library] Create/fix unit tests for feature/block
- [INTEGRATED-479](https://eactive.atlassian.net/browse/INTEGRATED-479) Crash when PublishTime field is used, but not filled
- [INTEGRATED-524](https://eactive.atlassian.net/browse/INTEGRATED-524) Deleting an author results in a 500 when editing or indexing the document
- [INTEGRATED-638](https://eactive.atlassian.net/browse/INTEGRATED-638) Sass is not available in vagrant
- [INTEGRATED-649](https://eactive.atlassian.net/browse/INTEGRATED-649) Using a null relation in function getUsedByd in ContentRepository does not work
- [INTEGRATED-650](https://eactive.atlassian.net/browse/INTEGRATED-650) maxItems and sortBy do not work for related content block
- [INTEGRATED-654](https://eactive.atlassian.net/browse/INTEGRATED-654) [workflow-bundle] All menu-options from the 'Create new'-menu are visible for every role
- [INTEGRATED-662](https://eactive.atlassian.net/browse/INTEGRATED-662) Block bundle layout is broken
- [INTEGRATED-669](https://eactive.atlassian.net/browse/INTEGRATED-669) Solr indexering doesn't skip and retry on error in document converter
- [INTEGRATED-685](https://eactive.atlassian.net/browse/INTEGRATED-685) [67039] Facet filtering with same name as search selection gives problems
- [INTEGRATED-704](https://eactive.atlassian.net/browse/INTEGRATED-704) Gray Integrated button is poorly visible (only when mouseover)
- [INTEGRATED-717](https://eactive.atlassian.net/browse/INTEGRATED-717) Author select component is broken after upgrade to version 4 of select2
- [INTEGRATED-727](https://eactive.atlassian.net/browse/INTEGRATED-727) [content-bundle] Require function doesn't work properly
- [INTEGRATED-729](https://eactive.atlassian.net/browse/INTEGRATED-729) [content-bundle] Related contentblock shows inactive documents
- [INTEGRATED-730](https://eactive.atlassian.net/browse/INTEGRATED-730) [website-bundle] Editbar should only be visible with ROLE_ADMIN
- [INTEGRATED-741](https://eactive.atlassian.net/browse/INTEGRATED-741) [storage-bundle] StorageManager delete function error
- [INTEGRATED-749](https://eactive.atlassian.net/browse/INTEGRATED-749) [block-bundle] Exception: TypeError: Cannot read property 'items' of undefined at $group reduce setup:18
- [INTEGRATED-758](https://eactive.atlassian.net/browse/INTEGRATED-758) [content-bundle] Uncaught ReferenceError: tinymce is not defined on pages without a tinymce editor
- [INTEGRATED-759](https://eactive.atlassian.net/browse/INTEGRATED-759) [block-bundle] Fix integrated facet filter for blocks and improve overview
- [INTEGRATED-782](https://eactive.atlassian.net/browse/INTEGRATED-782) Selecting content types for related content block does not work in Symfony 2.7.9 and later
- [INTEGRATED-785](https://eactive.atlassian.net/browse/INTEGRATED-785) Readonly workflows do not seem to work
- [INTEGRATED-790](https://eactive.atlassian.net/browse/INTEGRATED-790) [user-bundle] LoadFixtureData classname is wrong
- [INTEGRATED-798](https://eactive.atlassian.net/browse/INTEGRATED-798) [content-bundle] Fix content block search selection
- [INTEGRATED-799](https://eactive.atlassian.net/browse/INTEGRATED-799) Call to member function error in StorageBundle
- [INTEGRATED-800](https://eactive.atlassian.net/browse/INTEGRATED-800) [content-bundle] Add author names to solr mapping for Article
- [INTEGRATED-806](https://eactive.atlassian.net/browse/INTEGRATED-806) [storage-bundle] Image faker is imcompatible with new faker function of fzaninotto
- [INTEGRATED-808](https://eactive.atlassian.net/browse/INTEGRATED-808) [content-bundle] Document is missing in contentblockhandler
- [INTEGRATED-818](https://eactive.atlassian.net/browse/INTEGRATED-818) [content-bundle] RelationBlockContentTypes is not working
- [INTEGRATED-820](https://eactive.atlassian.net/browse/INTEGRATED-820) [formtype-bundle] Fix collection form type
- [INTEGRATED-821](https://eactive.atlassian.net/browse/INTEGRATED-821) workflow:index command should do a lock to prevent simultaneous runs
- [INTEGRATED-822](https://eactive.atlassian.net/browse/INTEGRATED-822) [formtype-bundle] integrated references should only show active items
- [INTEGRATED-829](https://eactive.atlassian.net/browse/INTEGRATED-829) Re-index items which use an item that is updated
- [INTEGRATED-838](https://eactive.atlassian.net/browse/INTEGRATED-838) [formtype-bundle] integrated_sortable_collection is not sortable
- [INTEGRATED-839](https://eactive.atlassian.net/browse/INTEGRATED-839) [slug-bundle] Slug is recomputed for same document
- [INTEGRATED-845](https://eactive.atlassian.net/browse/INTEGRATED-845) Relation can't be edited when content type is removed which use it
- [INTEGRATED-848](https://eactive.atlassian.net/browse/INTEGRATED-848) [content-bundle] Integrated style improvements (breadcrumbs, orange button, title)
- [INTEGRATED-851](https://eactive.atlassian.net/browse/INTEGRATED-851) [storage-bundle] EmbedMany properties must trigger an Storage Intent Upload change
- [INTEGRATED-852](https://eactive.atlassian.net/browse/INTEGRATED-852) [content-bundle] Field of type has invalid form type 
- [INTEGRATED-854](https://eactive.atlassian.net/browse/INTEGRATED-854) [storage-bundle] Remove image without uploaded file
- [INTEGRATED-855](https://eactive.atlassian.net/browse/INTEGRATED-855) Deadline is not hidden on edit when field is set to disabled 
- [INTEGRATED-856](https://eactive.atlassian.net/browse/INTEGRATED-856) [block-bundle] Optional publish end time
- [INTEGRATED-857](https://eactive.atlassian.net/browse/INTEGRATED-857) Image browser is not multi domain compatible
- [INTEGRATED-859](https://eactive.atlassian.net/browse/INTEGRATED-859) RelationExtension for DataFixtures
- [INTEGRATED-866](https://eactive.atlassian.net/browse/INTEGRATED-866) Expected argument of type "string", "NULL" given
- [INTEGRATED-868](https://eactive.atlassian.net/browse/INTEGRATED-868) Z-index on block options
- [INTEGRATED-874](https://eactive.atlassian.net/browse/INTEGRATED-874) [export-bundle] Export error
- [INTEGRATED-883](https://eactive.atlassian.net/browse/INTEGRATED-883) Classpath for RelationJsonType and PropertyType seems to be wrong
- [INTEGRATED-890](https://eactive.atlassian.net/browse/INTEGRATED-890) Integrated fails with Twig 1.26 / 1.26.1
- [INTEGRATED-891](https://eactive.atlassian.net/browse/INTEGRATED-891) Can't add article with workflow: Next status is mandatory
- [INTEGRATED-903](https://eactive.atlassian.net/browse/INTEGRATED-903) ROLE_ADMIN doesn't see all menu items
- [INTEGRATED-908](https://eactive.atlassian.net/browse/INTEGRATED-908) Allow access to storage object for use in (for example) resized images for solr result for 0.5
- [INTEGRATED-977](https://eactive.atlassian.net/browse/INTEGRATED-977) solr:worker:run can run simultaneously
- [INTEGRATED-1022](https://eactive.atlassian.net/browse/INTEGRATED-1022) /vagrant share is duplicate with Vagrant 1.9

## Package versions ##
- integrated-asset-bundle       0.5
- integrated-block-bundle       0.5
- integrated-channel-bundle     0.5
- integrated-content-bundle     0.5
- integrated-formtype-bundle    0.5
- integrated-library            0.5
- integrated-locking-bundle     0.4
- integrated-menu-bundle        0.5
- integrated-page-bundle        0.5
- integrated-puphpet            0.5
- integrated-slug-bundle        0.5
- integrated-solr-bundle        0.5
- integrated-storage-bundle     0.5
- integrated-theme-bundle       0.4
- integrated-user-bundle        0.5
- integrated-website-bundle     0.5
- integrated-workflow-bundle    0.5


# Changelog Integrated version 0.4 #

## Highlights ##
- Cloud storage support, store files anywhere
- Editable navigation for websites
- A lot of small new features and improvements

## New Features ##
- [INTEGRATED-7](https://eactive.atlassian.net/browse/INTEGRATED-7) [library] Integrated should filter control characters in input
- [INTEGRATED-39](https://eactive.atlassian.net/browse/INTEGRATED-39) Add image in editor when editing pages or blocks
- [INTEGRATED-147](https://eactive.atlassian.net/browse/INTEGRATED-147) [workflow-bundle] Allow only one default state checkbox to be checked
- [INTEGRATED-316](https://eactive.atlassian.net/browse/INTEGRATED-316) Title for block and title for content
- [INTEGRATED-377](https://eactive.atlassian.net/browse/INTEGRATED-377) Documentation of most important relation functions
- [INTEGRATED-389](https://eactive.atlassian.net/browse/INTEGRATED-389) Implement filesystem layer
- [INTEGRATED-393](https://eactive.atlassian.net/browse/INTEGRATED-393) Command for migration to new filesystem
- [INTEGRATED-407](https://eactive.atlassian.net/browse/INTEGRATED-407) Create SlugBundle for slugging names, titles, etc.
- [INTEGRATED-435](https://eactive.atlassian.net/browse/INTEGRATED-435) Editable navigation in website
- [INTEGRATED-442](https://eactive.atlassian.net/browse/INTEGRATED-442) Allow sent to of submitted forms to e-mail addresses
- [INTEGRATED-444](https://eactive.atlassian.net/browse/INTEGRATED-444) [block-bundle] Log block errors
- [INTEGRATED-453](https://eactive.atlassian.net/browse/INTEGRATED-453) [puphpet] Upgrade to a customizable, centralized Debian 8 Vagrant box with PuPHPet
- [INTEGRATED-488](https://eactive.atlassian.net/browse/INTEGRATED-488) Allow custom styles to be used
- [INTEGRATED-489](https://eactive.atlassian.net/browse/INTEGRATED-489) Allow sorting in block overview
- [INTEGRATED-493](https://eactive.atlassian.net/browse/INTEGRATED-493) ChannelBundle does not have a consistant path in skeleton
- [INTEGRATED-506](https://eactive.atlassian.net/browse/INTEGRATED-506) [workflow-bundle] Use select2 to choose read and write
- [INTEGRATED-507](https://eactive.atlassian.net/browse/INTEGRATED-507) Update new / edited statusses when editing workflow
- [INTEGRATED-528](https://eactive.atlassian.net/browse/INTEGRATED-528) Edit channel domains with collection
- [INTEGRATED-529](https://eactive.atlassian.net/browse/INTEGRATED-529) Allow to set primary domain name for channel
- [INTEGRATED-557](https://eactive.atlassian.net/browse/INTEGRATED-557) Add export function to xml, csv and xlsx
- [INTEGRATED-560](https://eactive.atlassian.net/browse/INTEGRATED-560) [block-bundle] Don't allow to delete a block when used in a page
- [INTEGRATED-563](https://eactive.atlassian.net/browse/INTEGRATED-563) Hide blocks with exceptions
- [INTEGRATED-567](https://eactive.atlassian.net/browse/INTEGRATED-567) [content-bundle] Show name in address form
- [INTEGRATED-568](https://eactive.atlassian.net/browse/INTEGRATED-568) Add option to show content items random in blocks
- [INTEGRATED-571](https://eactive.atlassian.net/browse/INTEGRATED-571) Controllers for document types from contentbundle
- [INTEGRATED-576](https://eactive.atlassian.net/browse/INTEGRATED-576) Allow Article content type for taxonomy facet
- [INTEGRATED-585](https://eactive.atlassian.net/browse/INTEGRATED-585) Add getReferencesByRelationId and getFirstReferenceByRelationId
- [INTEGRATED-586](https://eactive.atlassian.net/browse/INTEGRATED-586) Inject active document to blocks (for related blocks)
- [INTEGRATED-587](https://eactive.atlassian.net/browse/INTEGRATED-587) [content-bundle] Hide facets with 0-values in content navigator
- [INTEGRATED-588](https://eactive.atlassian.net/browse/INTEGRATED-588) "More" button for long facet filters
- [INTEGRATED-589](https://eactive.atlassian.net/browse/INTEGRATED-589) Replace tinymce in contentstyle path and remove example contentstyles
- [INTEGRATED-591](https://eactive.atlassian.net/browse/INTEGRATED-591) Require Symfony 2.7 for ContentBundle
- [INTEGRATED-608](https://eactive.atlassian.net/browse/INTEGRATED-608) Minimum match of 75% for search queries
- [INTEGRATED-609](https://eactive.atlassian.net/browse/INTEGRATED-609) [workflow-bundle] Throw event when workflow status changes
- [INTEGRATED-613](https://eactive.atlassian.net/browse/INTEGRATED-613) [website-bundle] Add edit block link from block editing mode
- [INTEGRATED-621](https://eactive.atlassian.net/browse/INTEGRATED-621) [website-bundle] Add template option to menu extension
- [INTEGRATED-625](https://eactive.atlassian.net/browse/INTEGRATED-625) [menu-bundle] getLastChild function doesn't work properly
- [INTEGRATED-626](https://eactive.atlassian.net/browse/INTEGRATED-626) Add option to phonenumber and address form type to hide/show specific fields
- [INTEGRATED-632](https://eactive.atlassian.net/browse/INTEGRATED-632) Add URL field to SearchBlock
- [INTEGRATED-636](https://eactive.atlassian.net/browse/INTEGRATED-636) [content-bundle] Add content to default view for content block
- [INTEGRATED-659](https://eactive.atlassian.net/browse/INTEGRATED-659) [workflow-bundle] Use select2 to choose transitions
- [INTEGRATED-674](https://eactive.atlassian.net/browse/INTEGRATED-674) Implement FileLocatorInterface in StorageBundle
- [INTEGRATED-675](https://eactive.atlassian.net/browse/INTEGRATED-675) [website-bundle] Support custom menu template
- [INTEGRATED-689](https://eactive.atlassian.net/browse/INTEGRATED-689) Author facet in content navigator
- [INTEGRATED-692](https://eactive.atlassian.net/browse/INTEGRATED-692) Add ImageType (storage bundle)
- [INTEGRATED-693](https://eactive.atlassian.net/browse/INTEGRATED-693) Add form validation options (storage bundle)
- [INTEGRATED-699](https://eactive.atlassian.net/browse/INTEGRATED-699) Add remove checkbox to FileType (StorageBundle)
- [INTEGRATED-707](https://eactive.atlassian.net/browse/INTEGRATED-707) Add contraints feature for images
- [INTEGRATED-739](https://eactive.atlassian.net/browse/INTEGRATED-739) Add support for image resizing with Gregwar

# Bug Fixes #
- [INTEGRATED-177](https://eactive.atlassian.net/browse/INTEGRATED-177) Changing 'State' to 'Workflow status'
- [INTEGRATED-178](https://eactive.atlassian.net/browse/INTEGRATED-178) Transitions order
- [INTEGRATED-326](https://eactive.atlassian.net/browse/INTEGRATED-326) Error while deleting a just created item
- [INTEGRATED-460](https://eactive.atlassian.net/browse/INTEGRATED-460) [menu-bundle] MenuBundle readme is incomplete
- [INTEGRATED-461](https://eactive.atlassian.net/browse/INTEGRATED-461) Vagrantfile does not work with on Windows 10 with Virtualbox 5
- [INTEGRATED-483](https://eactive.atlassian.net/browse/INTEGRATED-483) [website-bundle] 500 error after removing an active block
- [INTEGRATED-490](https://eactive.atlassian.net/browse/INTEGRATED-490) Link URL's for internal links get corrupted
- [INTEGRATED-541](https://eactive.atlassian.net/browse/INTEGRATED-541) [content-bundle] Use stable version for recaptcha-bundle
- [INTEGRATED-542](https://eactive.atlassian.net/browse/INTEGRATED-542) [content-bundle] Use stable version for doctrine/mongodb-odm
- [INTEGRATED-558](https://eactive.atlassian.net/browse/INTEGRATED-558) Counts for taxonomy facet filters are not correct when filtering on it
- [INTEGRATED-559](https://eactive.atlassian.net/browse/INTEGRATED-559) [block-bundle] Publication does not work for blocks
- [INTEGRATED-574](https://eactive.atlassian.net/browse/INTEGRATED-574) Fix integrated_file/image form type error
- [INTEGRATED-599](https://eactive.atlassian.net/browse/INTEGRATED-599) [puphpet] Application crashes in dev mode on puphpet when firephp/chromephp is enabled
- [INTEGRATED-605](https://eactive.atlassian.net/browse/INTEGRATED-605) Facet blocks do not work properly since remove of result cache
- [INTEGRATED-606](https://eactive.atlassian.net/browse/INTEGRATED-606) Sub-categories disappearing in search selections while using multiple blocks with same search selections on the same page
- [INTEGRATED-617](https://eactive.atlassian.net/browse/INTEGRATED-617) Logging in failed sometimes with Vagrant on OS X hosts
- [INTEGRATED-635](https://eactive.atlassian.net/browse/INTEGRATED-635) Error when editing pages in the default template
- [INTEGRATED-657](https://eactive.atlassian.net/browse/INTEGRATED-657) [content-bundle] Error when image has no file
- [INTEGRATED-673](https://eactive.atlassian.net/browse/INTEGRATED-673) Editor image dialog only supports contentType "image"
- [INTEGRATED-694](https://eactive.atlassian.net/browse/INTEGRATED-694) Fix integrated_image form row
- [INTEGRATED-712](https://eactive.atlassian.net/browse/INTEGRATED-712) [storage-bundle] Exception in FileEventSubscriber
- [INTEGRATED-716](https://eactive.atlassian.net/browse/INTEGRATED-716) Allow contraints on integrated_file formtype
- [INTEGRATED-736](https://eactive.atlassian.net/browse/INTEGRATED-736) Braincrafted config is broken after update to newest release
- [INTEGRATED-737](https://eactive.atlassian.net/browse/INTEGRATED-737) Image and File type are not completely removed
- [INTEGRATED-738](https://eactive.atlassian.net/browse/INTEGRATED-738) Interface should not define postWrite method
- [INTEGRATED-741](https://eactive.atlassian.net/browse/INTEGRATED-741) [storage-bundle] StorageManager delete function error
- [INTEGRATED-742](https://eactive.atlassian.net/browse/INTEGRATED-742) [content-bundle] gregwar/image-bundle has wrong version
- [INTEGRATED-743](https://eactive.atlassian.net/browse/INTEGRATED-743) No label by remove checkbox integrated_integrated_image_row (and file)
- [INTEGRATED-752](https://eactive.atlassian.net/browse/INTEGRATED-752) [storage-bundle] StorageIntentUpload class not found
- [INTEGRATED-793](https://eactive.atlassian.net/browse/INTEGRATED-793) Storage migration does not migrate items without db key
- [INTEGRATED-795](https://eactive.atlassian.net/browse/INTEGRATED-795) Server error when uploading image with validation error in other field
- [INTEGRATED-803](https://eactive.atlassian.net/browse/INTEGRATED-803) [solr-bundle] php app/console s:i:r -f exceeded the timeout of 60 seconds
- [INTEGRATED-804](https://eactive.atlassian.net/browse/INTEGRATED-804) [storage-bundle] Files without file field are not migrated
- [INTEGRATED-805](https://eactive.atlassian.net/browse/INTEGRATED-805) [content-bundle] Channel injection as app.channel Twig variable fails after upgrade to Symfony 2.7

## Other Changes ##
- [INTEGRATED-158](https://eactive.atlassian.net/browse/INTEGRATED-158) How to: create a new document type

## Package versions ##
- integrated-channel-bundle     0.4
- integrated-content-bundle     0.4
- integrated-formtype-bundle    0.4
- integrated-library            0.4
- integrated-locking-bundle     0.4
- integrated-menu-bundle        0.4
- integrated-page-bundle        0.4
- integrated-puphpet            0.4
- integrated-slug-bundle        0.4
- integrated-solr-bundle        0.4
- integrated-storage-bundle     0.4
- integrated-theme-bundle       0.4
- integrated-user-bundle        0.4
- integrated-website-bundle     0.4
- integrated-workflow-bundle    0.4
