<?php

namespace AppBundle\Entity;

/**
 * UserGuide
 */
class UserGuide
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $group;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $position;

    /**
     * @var \AppBundle\Entity\UserGuideTopic
     */
    private $topic;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set group
     *
     * @param string $group
     *
     * @return UserGuide
     */
    public function setGroup($group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return UserGuide
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return UserGuide
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set topic
     *
     * @param \AppBundle\Entity\UserGuideTopic $topic
     *
     * @return UserGuide
     */
    public function setTopic(\AppBundle\Entity\UserGuideTopic $topic = null)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * Get topic
     *
     * @return \AppBundle\Entity\UserGuideTopic
     */
    public function getTopic()
    {
        return $this->topic;
    }
    /**
     * @var string
     */
    private $title;


    /**
     * Set title
     *
     * @param string $title
     *
     * @return UserGuide
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    public function __toString()
    {
      return $this->getTitle() == null ? 'New' : $this->getTitle();
    }
    /**
     * @var string
     */
    private $description;


    /**
     * Set description
     *
     * @param string $description
     *
     * @return UserGuide
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @var string
     */
    private $contentType;


    /**
     * Set contentType
     *
     * @param string $contentType
     *
     * @return UserGuide
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * Get contentType
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }
    /**
     * @var string
     */
    private $media;


    /**
     * Set media
     *
     * @param string $media
     *
     * @return UserGuide
     */
    public function setMedia($media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return string
     */
    public function getMedia()
    {
        return $this->media;
    }
}
