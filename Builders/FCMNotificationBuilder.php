<?php

namespace App\Notifications\Builders;

class FCMNotificationBuilder
{

    /**
     * The title of the notification.
     *
     * @var string
     */
    protected $title;

    /**
     * The body/content of the notification.
     *
     * @var string
     */
    protected $body;

    /**
     * The icon to display with the notification.
     *
     * @var string
     */
    protected $icon;

    /**
     * The sound to play with the notification.
     *
     * @var string
     */
    protected $sound;

    /**
     * The action to perform when the notification is clicked.
     *
     * @var string
     */
    protected $click_action;

    /**
     * The tag to identify the notification.
     *
     * @var string
     */
    protected $tag;

    /**
     * The color of the notification.
     *
     * @var string
     */
    protected $color;

    /**
     * The image to display with the notification.
     *
     * @var string
     */
    protected $image;

    /**
     * The badge to show on the app icon.
     *
     * @var string
     */
    protected $badge;

    /**
     * The localization key for the body/content of the notification.
     *
     * @var string
     */
    protected $body_loc_key;

    /**
     * The localization arguments for the body/content of the notification.
     *
     * @var array
     */
    protected $body_loc_args;

    /**
     * The localization key for the title of the notification.
     *
     * @var string
     */
    protected $title_loc_key;

    /**
     * The localization arguments for the title of the notification.
     *
     * @var array
     */
    protected $title_loc_args;





    /**
     * Set the title of the notification.
     *
     * @param string $title The title of the notification.
     * @return self
     */
    public function title(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Set the body/content of the notification.
     *
     * @param string $body The body/content of the notification.
     * @return self
     */
    public function body(string $body): self
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Set the icon to display with the notification.
     *
     * @param string $icon The icon to display with the notification.
     * @return self
     */
    public function icon(string $icon): self
    {
        $this->icon = $icon;
        return $this;
    }

    /**
     * Set the sound to play with the notification.
     *
     * @param string $sound The sound to play with the notification.
     * @return self
     */
    public function sound(string $sound): self
    {
        $this->sound = $sound;
        return $this;
    }

    /**
     * Set the action to perform when the notification is clicked.
     *
     * @param string $clickAction The action to perform when the notification is clicked.
     * @return self
     */
    public function clickAction(string $clickAction): self
    {
        $this->click_action = $clickAction;
        return $this;
    }

    /**
     * Set the tag to identify the notification.
     *
     * @param string $tag The tag to identify the notification.
     * @return self
     */
    public function tag(string $tag): self
    {
        $this->tag = $tag;
        return $this;
    }

    /**
     * Set the color of the notification.
     *
     * @param string $color The color of the notification.
     * @return self
     */
    public function color(string $color): self
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the image to display with the notification.
     *
     * @param string $image The image to display with the notification.
     * @return self
     */
    public function image(string $image): self
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Set the badge to show on the app icon.
     *
     * @param string $badge The badge to show on the app icon.
     * @return self
     */
    public function badge(string $badge): self
    {
        $this->badge = $badge;
        return $this;
    }

    /**
     * Set the localization key for the body/content of the notification.
     *
     * @param string $bodyLocKey The localization key for the body/content of the notification.
     * @return self
     */
    public function bodyLocKey(string $bodyLocKey): self
    {
        $this->body_loc_key = $bodyLocKey;
        return $this;
    }

    /**
     * Set the localization arguments for the body/content of the notification.
     *
     * @param array $bodyLocArgs The localization arguments for the body/content of the notification.
     * @return self
     */
    public function bodyLocArgs(array $bodyLocArgs): self
    {
        $this->body_loc_args = $bodyLocArgs;
        return $this;
    }

    /**
     * Set the localization key for the title of the notification.
     *
     * @param string $titleLocKey The localization key for the title of the notification.
     * @return self
     */
    public function titleLocKey(string $titleLocKey): self
    {
        $this->title_loc_key = $titleLocKey;
        return $this;
    }

    /**
     * Set the localization arguments for the title of the notification.
     *
     * @param array $titleLocArgs The localization arguments for the title of the notification.
     * @return self
     */
    public function titleLocArgs(array $titleLocArgs): self
    {
        $this->title_loc_args = $titleLocArgs;
        return $this;
    }
}
