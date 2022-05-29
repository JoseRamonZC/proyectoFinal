<?php

namespace Symfony\Config\KnpSnappy;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ImageConfig 
{
    private $enabled;
    private $binary;
    private $options;
    private $env;
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default 'wkhtmltoimage'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function binary($value): static
    {
        $this->binary = $value;
    
        return $this;
    }
    
    /**
     * @return $this
     */
    public function options(string $name, mixed $value): static
    {
        $this->options[$name] = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function env(ParamConfigurator|array $value): static
    {
        $this->env = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['binary'])) {
            $this->binary = $value['binary'];
            unset($value['binary']);
        }
    
        if (isset($value['options'])) {
            $this->options = $value['options'];
            unset($value['options']);
        }
    
        if (isset($value['env'])) {
            $this->env = $value['env'];
            unset($value['env']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output['enabled'] = $this->enabled;
        }
        if (null !== $this->binary) {
            $output['binary'] = $this->binary;
        }
        if (null !== $this->options) {
            $output['options'] = $this->options;
        }
        if (null !== $this->env) {
            $output['env'] = $this->env;
        }
    
        return $output;
    }

}
