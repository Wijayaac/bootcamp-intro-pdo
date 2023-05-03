<?php
class Person
{
    protected int $id;
    protected int $bmiScore;
    protected string $bmiCategory;
    protected int $rfmScore;
    protected string $rfmCategory;

    public function getId(): int
    {
        return $this->id;
    }
    public function getBmiScore(): int
    {
        return $this->bmiScore;
    }
    public function getBmiCategory(): string
    {
        return $this->bmiCategory;
    }
    public function getRfmScore(): int
    {
        return $this->rfmScore;
    }
    public function getRfmCategory(): string
    {
        return $this->rfmCategory;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }
    public function setBmiScore($bmiScore): void
    {
        $this->bmiScore = $bmiScore;
    }
    public function setBmiCategory($bmiCategory): void
    {
        $this->bmiCategory = $bmiCategory;
    }
    public function setRfmScore($rfmScore): void
    {
        $this->rfmScore = $rfmScore;
    }
    public function setRfmCategory($rfmCategory): void
    {
        $this->rfmCategory = $rfmCategory;
    }
}
