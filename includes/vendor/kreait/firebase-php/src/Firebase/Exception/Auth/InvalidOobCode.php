<?php

declare(strict_types=1);

namespace Kreait\Firebase\Exception\Auth;

use Kreait\Firebase\Exception\AuthException;
use Kreait\Firebase\Exception\HasRequestAndResponse;
use RuntimeException;

final class InvalidOobCode extends RuntimeException implements AuthException
{
    use HasRequestAndResponse;
}
