<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

class Migration_Edit_town_pvs extends CI_Migration {
  public function up () {
    $this->db->query (
      "ALTER TABLE `towns` ADD `pv` int(11) NOT NULL NOT NULL DEFAULT '0' COMMENT 'PV 流覽率' AFTER `pic`;"
    );
  }
  public function down () {
    $this->db->query (
      "ALTER TABLE `towns` DROP COLUMN `pv`;"
    );
  }
}