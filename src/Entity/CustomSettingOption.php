<?php

namespace TMCms\Modules\Settings\Entity;

use TMCms\Orm\Entity;

/**
 * Class CustomSettingOption
 *
 * @method setOptionName(string $name)
 *
 * @method string getOptionName()
 * @method int getSettingId()
 */
class CustomSettingOption extends Entity {
    protected $db_table = 'm_settings_options';
}