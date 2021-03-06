<?php
/**
 * UnexpectedValueException.php
 *
 * @copyright      More in license.md
 * @license        http://www.ipublikuj.eu
 * @author         Adam Kadlec http://www.ipublikuj.eu
 * @package        iPublikuj:WebSocketSession!
 * @subpackage     Exceptions
 * @since          1.0.0
 *
 * @date           04.03.17
 */

declare(strict_types = 1);

namespace IPub\WebSocketsSession\Exceptions;

use IPub;
use IPub\WebSockets\Exceptions;

class UnexpectedValueException extends Exceptions\UnexpectedValueException implements IException
{
}
