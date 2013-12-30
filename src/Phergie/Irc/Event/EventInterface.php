<?php
/**
 * Phergie (http://phergie.org)
 *
 * @link https://github.com/phergie/phergie-irc-event for the canonical source repository
 * @copyright Copyright (c) 2008-2013 Phergie Development Team (http://phergie.org)
 * @license http://phergie.org/license New BSD License
 * @package Phergie\Irc\Event
 */

namespace Phergie\Irc\Event;

/**
 * Interface for \Phergie\Irc\Event
 */
interface EventInterface
{
    /**
     * Accessor method to set message property
     *
     * @param string $message text of the message
     */
    public function setMessage($message);

    /**
     * Accessor method to retrieve message property
     *
     * @return string text of the message
     */
    public function getMessage();

    /**
     * Accessor method to set connection instance
     *
     * @param \Phergie\Irc\ConnectionInterface $connection
     * @return
     */
    public function setConnection(\Phergie\Irc\ConnectionInterface $connection);

    /**
     * Accessor method to retrieve connection instance
     *
     * @return \Phergie\Irc\ConnectionInterface
     */ 
    public function getConnection();

    /**
     * Accessor method to set parameter property
     *
     * @param array $params array of parameters
     */
    public function setParams(array $params);

    /**
     * Accessor method to retrieve parameter property
     *
     * @return array array of parameters
     */
    public function getParams();

    /**
     * Accessor method to set the command
     *
     * @param string $command
     */
    public function setCommand($command);

    /**
     * Accessor method to retrieve the command
     *
     * @return string
     */
    public function getCommand();
}
