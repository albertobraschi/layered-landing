<?php

$installer = $this;

$installer->startSetup();

$installer->run("
  ALTER TABLE  `{$this->getTable('layeredlanding')}` ADD `image` VARCHAR(255) NOT NULL AFTER `page_description`
");

$installer->endSetup();