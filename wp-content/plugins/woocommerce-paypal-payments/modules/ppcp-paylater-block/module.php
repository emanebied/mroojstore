<?php
/**
 * The Pay Later block module.
 *
 * @package WooCommerce\PayPalCommerce\PayLaterBlock
 */

declare(strict_types=1);

namespace WooCommerce\PayPalCommerce\PayLaterBlock;

return static function (): PayLaterBlockModule {
	return new PayLaterBlockModule();
};
