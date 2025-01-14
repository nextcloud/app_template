<?php

declare(strict_types=1);

use OCP\Util;

Util::addScript(OCA\AppTemplate\AppInfo\Application::APP_ID, OCA\AppTemplate\AppInfo\Application::APP_ID . '-main');
Util::addStyle(OCA\AppTemplate\AppInfo\Application::APP_ID, OCA\AppTemplate\AppInfo\Application::APP_ID . '-main');

?>

<div id="app_template"></div>
