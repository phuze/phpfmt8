<?php

class User {
	public function setEnable(bool $enable): static {
		$this->enable = $enable;

		return $this;
	}

	public function getCreatedAt(): ?\DateTimeInterface {
		return $this->createdAt;
	}

	public function foo(): ?Foo\Faa {
		return $this->createdAt;
	}

	public function setCreatedAt(\DateTimeInterface $createdAt): static {
		$this->createdAt = $createdAt;

		return $this;
	}
}
?>