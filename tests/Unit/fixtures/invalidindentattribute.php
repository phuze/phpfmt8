<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;

#[ApiResource(
	processor: 'App\State\UserStateProcessor',
	provider: 'App\State\UserStateProvider',
	operations: [
		new Get(
			input: false,
			output: false,
		),
	],
)]
class User {

}