<?php
namespace Lucid\Component\BasicLogger;

class BasicLogger implements \Psr\Log\LoggerInterface
{
    protected function writeMessage($type, $message)
    {
        error_log($type.': '.$message);
    }

    public function emergency($message, array $context = array())
    {
        $this->writeMessage(__FUNCTION__, $message);
    }

    public function alert($message, array $context = array())
    {
        $this->writeMessage(__FUNCTION__, $message);
    }

    public function critical($message, array $context = array())
    {
        $this->writeMessage(__FUNCTION__, $message);
    }

    public function error($message, array $context = array())
    {
        $this->writeMessage(__FUNCTION__, $message);
    }

    public function warning($message, array $context = array())
    {
        $this->writeMessage(__FUNCTION__, $message);
    }

    public function notice($message, array $context = array())
    {
        $this->writeMessage(__FUNCTION__, $message);
    }

    public function info($message, array $context = array())
    {
        $this->writeMessage(__FUNCTION__, $message);
    }

    public function debug($message, array $context = array())
    {
        $this->writeMessage(__FUNCTION__, $message);
    }

    public function log($level, $message, array $context = array())
    {
        $this->writeMessage($level, $message);
    }
}