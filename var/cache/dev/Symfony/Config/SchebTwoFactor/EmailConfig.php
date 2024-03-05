<?php

namespace Symfony\Config\SchebTwoFactor;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class EmailConfig 
{
    private $enabled;
    private $mailer;
    private $codeGenerator;
    private $formRenderer;
    private $senderEmail;
    private $senderName;
    private $template;
    private $digits;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mailer($value): self
    {
        $this->_usedProperties['mailer'] = true;
        $this->mailer = $value;

        return $this;
    }

    /**
     * @default 'scheb_two_factor.security.email.default_code_generator'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function codeGenerator($value): self
    {
        $this->_usedProperties['codeGenerator'] = true;
        $this->codeGenerator = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function formRenderer($value): self
    {
        $this->_usedProperties['formRenderer'] = true;
        $this->formRenderer = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function senderEmail($value): self
    {
        $this->_usedProperties['senderEmail'] = true;
        $this->senderEmail = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function senderName($value): self
    {
        $this->_usedProperties['senderName'] = true;
        $this->senderName = $value;

        return $this;
    }

    /**
     * @default '@SchebTwoFactor/Authentication/form.html.twig'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function template($value): self
    {
        $this->_usedProperties['template'] = true;
        $this->template = $value;

        return $this;
    }

    /**
     * @default 4
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function digits($value): self
    {
        $this->_usedProperties['digits'] = true;
        $this->digits = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('mailer', $value)) {
            $this->_usedProperties['mailer'] = true;
            $this->mailer = $value['mailer'];
            unset($value['mailer']);
        }

        if (array_key_exists('code_generator', $value)) {
            $this->_usedProperties['codeGenerator'] = true;
            $this->codeGenerator = $value['code_generator'];
            unset($value['code_generator']);
        }

        if (array_key_exists('form_renderer', $value)) {
            $this->_usedProperties['formRenderer'] = true;
            $this->formRenderer = $value['form_renderer'];
            unset($value['form_renderer']);
        }

        if (array_key_exists('sender_email', $value)) {
            $this->_usedProperties['senderEmail'] = true;
            $this->senderEmail = $value['sender_email'];
            unset($value['sender_email']);
        }

        if (array_key_exists('sender_name', $value)) {
            $this->_usedProperties['senderName'] = true;
            $this->senderName = $value['sender_name'];
            unset($value['sender_name']);
        }

        if (array_key_exists('template', $value)) {
            $this->_usedProperties['template'] = true;
            $this->template = $value['template'];
            unset($value['template']);
        }

        if (array_key_exists('digits', $value)) {
            $this->_usedProperties['digits'] = true;
            $this->digits = $value['digits'];
            unset($value['digits']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['mailer'])) {
            $output['mailer'] = $this->mailer;
        }
        if (isset($this->_usedProperties['codeGenerator'])) {
            $output['code_generator'] = $this->codeGenerator;
        }
        if (isset($this->_usedProperties['formRenderer'])) {
            $output['form_renderer'] = $this->formRenderer;
        }
        if (isset($this->_usedProperties['senderEmail'])) {
            $output['sender_email'] = $this->senderEmail;
        }
        if (isset($this->_usedProperties['senderName'])) {
            $output['sender_name'] = $this->senderName;
        }
        if (isset($this->_usedProperties['template'])) {
            $output['template'] = $this->template;
        }
        if (isset($this->_usedProperties['digits'])) {
            $output['digits'] = $this->digits;
        }

        return $output;
    }

}
