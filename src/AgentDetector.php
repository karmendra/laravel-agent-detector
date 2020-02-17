<?php

namespace Karmendra\LaravelAgentDetector;

use DeviceDetector\DeviceDetector;

class AgentDetector extends DeviceDetector
{
    /**
     * AgentDetector constructor.
     *
     * @param string $userAgent
     */
    public function __construct($userAgent = '')
    {
        parent::__construct($userAgent);
        $this->parse();
    }

    /**
     * Get the device name.
     *
     * @return string
     */
    public function device()
    {
        if ($this->isBot()) {
            return 'bot';
        }

        return $this->getDeviceName();
    }

    /**
     * Get the device Brand Name.
     *
     * @return string
     */
    public function deviceBrand()
    {
        return $this->getBrandName();
    }

    /**
     * Get the device Brand Name.
     *
     * @return string
     */
    public function deviceModel()
    {
        return $this->getModel();
    }

    /**
     * Get the browser name.
     *
     * @return string
     */
    public function browser()
    {
        $browser = $this->getClient('name');

        return $browser == 'UNK' ? '' : $browser;
    }

    /**
     * Get the browser version.
     *
     * @return string
     */
    public function browserVersion()
    {
        $browser_version = $this->getClient('version');

        return $browser_version == 'UNK' ? '' : $browser_version;
    }

    /**
     * Get the platform/os name.
     *
     * @return string
     */
    public function platform()
    {
        $platform = $this->getOs('name');

        return $platform == 'UNK' ? '' : $platform;
    }

    /**
     * Get the platform/os Version.
     *
     * @return string
     */
    public function platformVersion()
    {
        $platform_version = $this->getOs('version');

        return $platform_version == 'UNK' ? '' : $platform_version;
    }

}
