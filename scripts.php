/usr/local/php70/bin/php-cli  bin/magento module:enable Infortis_Base Infortis_Brands Infortis_Cgen Infortis_Dataporter Infortis_Infortis Infortis_Ultimo Infortis_UltraMegamenu Infortis_UltraSlideshow
/usr/local/php70/bin/php-cli  bin/magento setup:upgrad
/usr/local/php70/bin/php-cli  bin/magento setup:static-content:deploy
/usr/local/php70/bin/php-cli  bin/magento cache:status 
/usr/local/php70/bin/php-cli  bin/magento cache:disable db_ddl full_page
/usr/local/php70/bin/php-cli bin/magento cache:flush
/usr/local/php70/bin/php-cli  bin/magento indexer:reindex
/usr/local/php70/bin/php-cli  config repositories.magento composer https://repo.magento.com
/usr/local/php70/bin/php-cli  bin/magento module:disable Infortis_Ultimo
/usr/local/php70/bin/php-cli bin/magento deploy:mode:set developer
/usr/local/php70/bin/php-cli bin/magento setup:upgrade
http://www.diggsoutdoors.com/index.php/7pLANtsEvEnaDmIn/index/


find * -type d -print0 | xargs -0 chmod 0755 # for directories
find . -type f -print0 | xargs -0 chmod 0644 # for files
