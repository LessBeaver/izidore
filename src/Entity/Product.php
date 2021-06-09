<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;
use Cocur\Slugify\Slugify;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $name;

	/**
	 * @ORM\Column(type="integer")
	 */
	private $price;

	/**
	 * @ORM\Column(type="integer")
	 */
	private $old_price;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $origin;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $delivery;

	/**
	 * @ORM\Column(type="string", length=600)
	 */
	private $image;

	/**
	 * @ORM\Column(type="string", length=600)
	 */
	private $image_blur;

	public function getId(): ?int
	{
		return $this->id;
	}

	public function getName(): ?string
	{
		return $this->name;
	}

	public function getSlug(): ?string
	{
		return (new Slugify())->slugify($this->name);
	}

	public function setName(string $name): self
	{
		$this->name = $name;

		return $this;
	}

	public function getPrice(): ?int
	{
		return $this->price;
	}

	public function setPrice(int $price): self
	{
		$this->price = $price;

		return $this;
	}

	public function getOldPrice(): ?int
	{
		return $this->old_price;
	}

	public function setOldPrice(int $old_price): self
	{
		$this->old_price = $old_price;

		return $this;
	}

	public function getOrigin(): ?string
	{
		return $this->origin;
	}

	public function setOrigin(string $origin): self
	{
		$this->origin = $origin;

		return $this;
	}

	public function getDelivery(): ?string
	{
		return $this->delivery;
	}

	public function setDelivery(?string $delivery): self
	{
		$this->delivery = $delivery;

		return $this;
	}

	public function getImage(): ?string
	{
		return $this->image;
	}

	public function setImage(string $image): self
	{
		$this->image = $image;

		return $this;
	}

	public function getImageBlur(): ?string
	{
		return $this->image_blur;
	}

	public function setImageBlur(string $image_blur): self
	{
		$this->image_blur = $image_blur;

		return $this;
	}
}
