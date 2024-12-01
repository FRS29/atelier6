<?php
class immobilier
{
    private $reference, $proprietaire, $localite, $nbPiece, $domaineUsage, $nature, $nbEtage, $surfaceCommune;

    public function __construct($reference, $proprietaire, $localite, $nbPiece, $domaineUsage, $nature, $nbEtage, $surfaceCommune)
    {
        $this->reference = $reference;
        $this->proprietaire = $proprietaire;
        $this->localite = $localite;
        $this->nbPiece = $nbPiece;
        $this->domaineUsage = $domaineUsage;
        $this->nature = $nature;
        $this->nbEtage = $nbEtage;
        $this->surfaceCommune = $surfaceCommune;
    }

    /**
     * Get the value of nature
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set the value of nature
     */
    public function setNature($nature): self
    {
        $this->nature = $nature;

        return $this;
    }



    /**
     * Get the value of proprietaire
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * Set the value of proprietaire
     */
    public function setProprietaire($proprietaire): self
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * Get the value of localite
     */
    public function getLocalite()
    {
        return $this->localite;
    }

    /**
     * Set the value of localite
     */
    public function setLocalite($localite): self
    {
        $this->localite = $localite;

        return $this;
    }

    /**
     * Get the value of nbPiece
     */
    public function getNbPiece()
    {
        return $this->nbPiece;
    }

    /**
     * Set the value of nbPiece
     */
    public function setNbPiece($nbPiece): self
    {
        $this->nbPiece = $nbPiece;

        return $this;
    }

    /**
     * Get the value of domaineUsage
     */
    public function getDomaineUsage()
    {
        return $this->domaineUsage;
    }

    /**
     * Set the value of domaineUsage
     */
    public function setDomaineUsage($domaineUsage): self
    {
        $this->domaineUsage = $domaineUsage;

        return $this;
    }

    /**
     * Get the value of nbEtage
     */
    public function getNbEtage()
    {
        return $this->nbEtage;
    }

    /**
     * Set the value of nbEtage
     */
    public function setNbEtage($nbEtage): self
    {
        $this->nbEtage = $nbEtage;

        return $this;
    }

    /**
     * Get the value of surfaceCommune
     */
    public function getSurfaceCommune()
    {
        return $this->surfaceCommune;
    }

    /**
     * Set the value of surfaceCommune
     */
    public function setSurfaceCommune($surfaceCommune): self
    {
        $this->surfaceCommune = $surfaceCommune;

        return $this;
    }

    /**
     * Get the value of ref
     */
    public function getRef()
    {
        return $this->reference;
    }

    /**
     * Set the value of ref
     */
    public function setRef($ref): self
    {
        $this->reference = $ref;

        return $this;
    }
}
