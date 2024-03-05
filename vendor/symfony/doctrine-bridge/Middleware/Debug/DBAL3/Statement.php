<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Doctrine\Middleware\Debug\DBAL3;

use Doctrine\DBAL\Driver\Middleware\AbstractStatementMiddleware;
use Doctrine\DBAL\Driver\Result as ResultInterface;
use Doctrine\DBAL\Driver\Statement as StatementInterface;
use Doctrine\DBAL\ParameterType;
use Symfony\Bridge\Doctrine\Middleware\Debug\DebugDataHolder;
use Symfony\Bridge\Doctrine\Middleware\Debug\Query;
use Symfony\Component\Stopwatch\Stopwatch;

/**
 * @author Laurent VOULLEMIER <laurent.voullemier@gmail.com>
 *
 * @internal
 */
final class Statement extends AbstractStatementMiddleware
{
    private $query;
    private $debugDataHolder;
    private $connectionName;
    private $stopwatch;

    public function __construct(
        StatementInterface $statement,
        DebugDataHolder $debugDataHolder,
        string $connectionName,
        string $sql,
        ?Stopwatch $stopwatch = null
    ) {
        $this->stopwatch = $stopwatch;
        $this->connectionName = $connectionName;
        $this->debugDataHolder = $debugDataHolder;
        $this->query = new Query($sql);

        parent::__construct($statement);
    }

    public function bindParam($param, &$variable, $type = ParameterType::STRING, $length = null): bool
    {
        $this->query->setParam($param, $variable, $type);

        return parent::bindParam($param, $variable, $type, ...\array_slice(\func_get_args(), 3));
    }

    public function bindValue($param, $value, $type = ParameterType::STRING): bool
    {
        $this->query->setValue($param, $value, $type);

        return parent::bindValue($param, $value, $type);
    }

    public function execute($params = null): ResultInterface
    {
        if (null !== $params) {
            $this->query->setValues($params);
        }

        // clone to prevent variables by reference to change
        $this->debugDataHolder->addQuery($this->connectionName, $query = clone $this->query);

        if ($this->stopwatch) {
            $this->stopwatch->start('doctrine', 'doctrine');
        }
        $query->start();

        try {
            return parent::execute($params);
        } finally {
            $query->stop();
            if ($this->stopwatch) {
                $this->stopwatch->stop('doctrine');
            }
        }
    }
}
