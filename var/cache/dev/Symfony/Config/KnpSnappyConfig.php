<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'KnpSnappy'.\DIRECTORY_SEPARATOR.'PdfConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'KnpSnappy'.\DIRECTORY_SEPARATOR.'ImageConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class KnpSnappyConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $temporaryFolder;
    private $processTimeout;
    private $pdf;
    private $image;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function temporaryFolder($value): static
    {
        $this->temporaryFolder = $value;
    
        return $this;
    }
    
    /**
     * Generator process timeout in seconds.
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function processTimeout($value): static
    {
        $this->processTimeout = $value;
    
        return $this;
    }
    
    public function pdf(array $value = []): \Symfony\Config\KnpSnappy\PdfConfig
    {
        if (null === $this->pdf) {
            $this->pdf = new \Symfony\Config\KnpSnappy\PdfConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "pdf()" has already been initialized. You cannot pass values the second time you call pdf().');
        }
    
        return $this->pdf;
    }
    
    public function image(array $value = []): \Symfony\Config\KnpSnappy\ImageConfig
    {
        if (null === $this->image) {
            $this->image = new \Symfony\Config\KnpSnappy\ImageConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "image()" has already been initialized. You cannot pass values the second time you call image().');
        }
    
        return $this->image;
    }
    
    public function getExtensionAlias(): string
    {
        return 'knp_snappy';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['temporary_folder'])) {
            $this->temporaryFolder = $value['temporary_folder'];
            unset($value['temporary_folder']);
        }
    
        if (isset($value['process_timeout'])) {
            $this->processTimeout = $value['process_timeout'];
            unset($value['process_timeout']);
        }
    
        if (isset($value['pdf'])) {
            $this->pdf = new \Symfony\Config\KnpSnappy\PdfConfig($value['pdf']);
            unset($value['pdf']);
        }
    
        if (isset($value['image'])) {
            $this->image = new \Symfony\Config\KnpSnappy\ImageConfig($value['image']);
            unset($value['image']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->temporaryFolder) {
            $output['temporary_folder'] = $this->temporaryFolder;
        }
        if (null !== $this->processTimeout) {
            $output['process_timeout'] = $this->processTimeout;
        }
        if (null !== $this->pdf) {
            $output['pdf'] = $this->pdf->toArray();
        }
        if (null !== $this->image) {
            $output['image'] = $this->image->toArray();
        }
    
        return $output;
    }

}
