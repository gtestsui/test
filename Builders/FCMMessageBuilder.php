<?php

namespace App\Notifications\Builders;

class FCMMessageBuilder
{
    /**
     * The recipients of the FCM message.
     *
     * @var array|string
     */
    protected string $registration_ids;

    /**
     * The notification object for the FCM message.
     *
     * @var object
     */
    protected object $notification;

    /**
     * The data object for the FCM message.
     *
     * @var object
     */
    protected object $data;

    /**
     * The priority of the FCM message.
     *
     * @var string
     */
    protected string $priority;

    /**
     * The collapse key of the FCM message.
     *
     * @var string
     */
    protected string $collapse_key;

    /**
     * The time to live (TTL) of the FCM message.
     *
     * @var int
     */
    protected int $time_to_live;

    /**
     * The delay while idle flag of the FCM message.
     *
     * @var bool
     */
    protected bool $delay_while_idle;

    /**
     * The condition of the FCM message.
     *
     * @var string
     */
    protected string $condition;

    /**
     * The dry run flag of the FCM message.
     *
     * @var bool
     */
    protected bool $dry_run;







    /**
     * Set the recipients of the FCM message.
     *
     * @param array|string $registration_ids
     * @return self
     */
    public function registrationIds(array|string $registration_ids): self
    {
        $this->registration_ids = $registration_ids;
        return $this;
    }

    /**
     * Set the notification object for the FCM message.
     *
     * @param FCMNotificationBuilder $notification
     * @return self
     */
    public function notification(FCMNotificationBuilder $notification): self
    {
        $this->notification = $notification;
        return $this;
    }

    /**
     * Set the data object for the FCM message.
     *
     * @param FCMDataBuilder $data
     * @return self
     */
    public function data(FCMDataBuilder $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Set the priority of the FCM message.
     *
     * @param string $priority
     * @return self
     */
    public function priority(string $priority): self
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Set the collapse key of the FCM message.
     *
     * @param string $collapse_key
     * @return self
     */
    public function collapseKey(string $collapse_key): self
    {
        $this->collapse_key = $collapse_key;
        return $this;
    }

    /**
     * Set the time to live (TTL) of the FCM message.
     *
     * @param int $time_to_live
     * @return self
     */
    public function timeToLive(int $time_to_live): self
    {
        $this->time_to_live = $time_to_live;
        return $this;
    }

    /**
     * Set the delay while idle flag of the FCM message.
     *
     * @param bool $delay_while_idle
     * @return self
     */
    public function delayWhileIdle(bool $delay_while_idle): self
    {
        $this->delay_while_idle = $delay_while_idle;
        return $this;
    }

    /**
     * Set the condition of the FCM message.
     *
     * @param string $condition
     * @return self
     */
    public function condition(string $condition): self
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Set the dry run flag of the FCM message.
     *
     * @param bool $dry_run
     * @return self
     */
    public function dryRun(bool $dry_run): self
    {
        $this->dry_run = $dry_run;
        return $this;
    }
}
