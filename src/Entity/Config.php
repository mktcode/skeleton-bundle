<?php

namespace Mktcode\ContaoPwaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="tl_pwa_config")
 */
class Config
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=7, nullable=true)
     */
    private $themeColor;

    /**
     * @ORM\Column(type="string", length=7, nullable=true)
     */
    private $backgroundColor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getThemeColor(): ?string
    {
        return $this->themeColor;
    }

    public function setThemeColor(?string $themeColor): self
    {
        $this->themeColor = $themeColor;

        return $this;
    }

    public function getBackgroundColor(): ?string
    {
        return $this->backgroundColor;
    }

    public function setBackgroundColor(?string $backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }
}
