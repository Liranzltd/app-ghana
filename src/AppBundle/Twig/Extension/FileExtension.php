<?php

namespace AppBundle\Twig\Extension;

class FileExtension extends \Twig_Extension
{
  /**
   * {@inheritdoc}
   */

  public function getName()
  {
      return 'file';
  }

  public function getFunctions()
  {
      return array(
          new \Twig_Function('asset_if', array($this, 'asset_if')),
      );
  }

  public function asset_if($url)
  {
    // Define the path to look for
      $pathToCheck = realpath($this->container->get('kernel')->getRootDir() . '/../web/') . '/' . $path;

      // If the path does not exist, return the fallback image
      if (!file_exists($pathToCheck))
      {
          return $this->container->get('templating.helper.assets')->getUrl($fallbackPath);
      }

      // Return the real image
      return $this->container->get('templating.helper.assets')->getUrl($path);
  }

}
?>
