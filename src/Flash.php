<?php

namespace Socieboy\Alerts;

class Flash {

    /**
     * Create the flash message.
     *
     * @param        $title
     * @param        $message
     * @param        $type
     * @param string $key
     */
    public function create($title, $message, $type, $key = 'sweet_alert_message')
    {
        session()->flash($key,[
            'title'     => $title,
            'message'   => $message,
            'type'      => $type
        ]);
    }

    /**
     * @param $title
     * @param $message
     */
    public function info($title, $message)
    {
        return $this->create($title, $message, 'info');
    }

    /**
     * @param $title
     * @param $message
     */
    public function success($title, $message)
    {
        return $this->create($title, $message, 'success');
    }

    /**
     * @param $title
     * @param $message
     */
    public function error($title, $message)
    {
        return $this->create($title, $message, 'error');
    }

    /**
     * @param        $title
     * @param        $message
     * @param string $type
     */
    public function overlay($title, $message, $type = 'success')
    {
        return $this->create($title, $message, $type, 'sweet_alert_message_overlay');
    }
} 