<?php

declare(strict_types=1);

namespace App\Module\Log\Entity;

use App\Module\Log\Hydrator\Hydrator;
use Core\Base\Model;
use Core\Db\DataBase;

class Log extends Model
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $ts;

    /**
     * @var int
     */
    private $type;

    /**
     * @var string
     */
    private $message;

    private static $hydrator = Hydrator::class;

    protected static function table(): string
    {
        return 'logs';
    }

    protected static function hydrator(): object
    {
        return new self::$hydrator;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTs(): \DateTime
    {
        return $this->ts;
    }

    /**
     * @param \DateTime $ts
     * @return $this
     */
    public function setTs(\DateTime $ts): self
    {
        $this->ts = $ts;
        return $this;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return $this
     */
    public function setType(int $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return $this
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;
        return $this;
    }

    public function getDate(): string
    {
        return $this->ts->format('Y-m-d H:i:s');
    }

    public function save(): self
    {
        $dbh = DataBase::getInstance();

        $stmt = $dbh->prepare("INSERT INTO logs (ts, type, message) VALUES (:ts, :type, :message)");

        $stmt->bindValue(':ts', $this->getDate());
        $stmt->bindValue(':type', $this->getType());
        $stmt->bindValue(':message', $this->getMessage());
        $stmt->execute();

        return $this;
    }
}
