<?php

	namespace Kosmosx\Frontend\Builder;

	use Kosmosx\Frontend\Services\Interfaces\FrontendServiceInterface;

	interface FrontendInvokerInterface
	{
		function add(): FrontendInvokerInterface;
		function dump(): ?string;
		function forget(): bool;
		function has(): bool;
		function getIinstance(): FrontendServiceInterface;
	}