<?php

namespace TMCms\AdminTMCms\Modules\Settings\Entity;

use TMCms\AdminTMCms\Orm\EntityRepository;

/**
 * Class CustomSettingRepository
 *
 * @method setWhereModule(string $module)
 */
class CustomSettingRepository extends EntityRepository {
    protected $db_table = 'm_settings';
}