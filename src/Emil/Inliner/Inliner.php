<?php namespace Emil\Inliner;

use TijsVerkoyen\CssToInlineStyles\CssToInlineStyles;

class Inliner {

    protected $options;

    public function __construct($options)
    {
        $this->options= $options;
    }

    protected $enabled = true;

    /**
     * Is the inliner enabled
     *
     * @return bool
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * Is the inliner disabled?
     *
     * @return bool
     */
    public function isDisabled()
    {
        return !$this->enabled;
    }

    /**
     * Disable the inliner
     */
    public function disable()
    {
        $this->enabled = false;
    }

    /**
     * Enable the inliner
     */
    public function enable()
    {
        $this->enabled = true;
    }

    /**
     * Set a inline option
     *
     * @param $name
     * @param $value
     * @throws \InvalidArgumentException
     */
    public function setOption($name, $value)
    {
        if(array_key_exists($name, $this->options))
        {
            $this->options[$name] = $value;
        }
        else
        {
            throw new \InvalidArgumentException('The option "' . $name . '" does not exist');
        }
    }

    /**
     * Inline the content
     *
     * @param $content
     * @return string
     */
    public function inline($content)
    {
        // Create instance
        $cssToInlineStyles = new CssToInlineStyles();
        // Call convert($html, $css) function
        return $cssToInlineStyles->convert($content);
    }
}
