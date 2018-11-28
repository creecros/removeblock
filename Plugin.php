<?php

namespace Kanboard\Plugin\RemoveBlock;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;
use Kanboard\Core\Security\Role;

class Plugin extends Base
{
  public function initialize()
  {
    $this->projectAccessMap->add('TaskSuppressionController', 'remove', Role::PROJECT_MANAGER);

  }
  public function getPluginName()
  {
    return 'RemoveBlock';
  }
  public function getPluginAuthor()
  {
    return 'Craig Crosby';
  }
  public function getPluginVersion()
  {
    return '1.0.0';
  }
  
  public function getPluginDescription()
  {
    return 'Restricts normal members and users from removing any tasks';
  }
  public function getPluginHomepage()
  {
    return 'https://github.com/creecros/remomveblock';
  }
}
