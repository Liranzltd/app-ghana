<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * RequestDocument
 */
class RequestDocument
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $token;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $extension;

    /**
     * @var string
     */
    private $url;

    /**
     * @var bool|null
     */
    private $isLatest;

    /**
     * @var bool|null
     */
    private $useLatest = false;

    /**
     * @var int|null
     */
    private $size;

    /**
     * @var \AppBundle\Entity\Request
     */
    private $request;

    public $file;


    /**
     * Set id.
     *
     * @param int $id
     *
     * @return RequestDocument
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return RequestDocument
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set token.
     *
     * @param string|null $token
     *
     * @return RequestDocument
     */
    public function setToken($token = null)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token.
     *
     * @return string|null
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set type.
     *
     * @param string|null $type
     *
     * @return RequestDocument
     */
    public function setType($type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set extension.
     *
     * @param string|null $extension
     *
     * @return RequestDocument
     */
    public function setExtension($extension = null)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension.
     *
     * @return string|null
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set url.
     *
     * @param string $url
     *
     * @return RequestDocument
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set isLatest.
     *
     * @param bool|null $isLatest
     *
     * @return RequestDocument
     */
    public function setIsLatest($isLatest = null)
    {
        $this->isLatest = $isLatest;

        return $this;
    }

    /**
     * Get isLatest.
     *
     * @return bool|null
     */
    public function getIsLatest()
    {
        return $this->isLatest;
    }

    /**
     * Set useLatest.
     *
     * @param bool|null $useLatest
     *
     * @return RequestDocument
     */
    public function setUseLatest($useLatest = null)
    {
        $this->useLatest = $useLatest;

        return $this;
    }

    /**
     * Get useLatest.
     *
     * @return bool|null
     */
    public function getUseLatest()
    {
        return $this->useLatest;
    }

    /**
     * Set size.
     *
     * @param int|null $size
     *
     * @return RequestDocument
     */
    public function setSize($size = null)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size.
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set request.
     *
     * @param \AppBundle\Entity\Request|null $request
     *
     * @return RequestDocument
     */
    public function setRequest(\AppBundle\Entity\Request $request = null)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * Get request.
     *
     * @return \AppBundle\Entity\Request|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function preUpload()
    {
      if (null !== $this->file) {
         $this->url = uniqid().'.'.$this->file->guessExtension();
      }
    }

    /**
     * @ORM\PrePersist
     */
    public function setDocumentId()
    {
      if (null == $this->id) {
        $digits = 9;
        $this->id = rand(pow(10, $digits-1), pow(10, $digits)-1);
      }
    }

    /**
     * @ORM\PostPersist
     */
    public function upload()
    {
      if (null === $this->file) {
            return;
        }

      // If there is an error when moving the file, an exception will
      // be automatically thrown by move(). This will properly prevent
      // the entity from being persisted to the database on error
      $this->file->move($this->getUploadRootDir().'/'.$this->getRequest()->getBuyer(), $this->url);

      unset($this->file);
    }

    /**
     * @ORM\PostRemove
     */
    public function removeUpload()
    {
      $file = $this->getAbsolutePath();
      if(file_exists($file)) {
            if ($file = $this->getAbsolutePath()) {
                unlink($file);
            }
        }
    }

    public function __toString()
    {
      return $this->getName() == null ? "New" : $this->getName();
    }

    protected function getUploadDir()
    {
        return 'uploads/requests/documents';
    }

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }

    public function getWebPath()
    {
        return null === $this->url ? null : '/'.$this->getUploadDir().'/'.$this->url;
    }

    public function getAbsolutePath()
    {
        return null === $this->url ? null : $this->getUploadRootDir().'/'.$this->url;
    }
}
