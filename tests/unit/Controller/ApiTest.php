<?php

declare(strict_types=1);

namespace Controller;

use OCA\AppTemplate\AppInfo\Application;
use OCA\AppTemplate\Controller\ApiController;
use OCP\IRequest;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase {
	public function testIndex() {
		$request = $this->createMock(IRequest::class);
		$controller = new ApiController(Application::APP_ID, $request);

		$this->assertEquals($controller->index()->getData()['message'], 'Hello world!');
	}
}
