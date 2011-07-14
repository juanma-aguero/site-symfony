<?php

/**
 * postCategory actions.
 *
 * @package    site
 * @subpackage postCategory
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class postCategoryActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->post_categorys = Doctrine_Core::getTable('PostCategory')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->post_category = Doctrine_Core::getTable('PostCategory')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->post_category);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PostCategoryForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PostCategoryForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($post_category = Doctrine_Core::getTable('PostCategory')->find(array($request->getParameter('id'))), sprintf('Object post_category does not exist (%s).', $request->getParameter('id')));
    $this->form = new PostCategoryForm($post_category);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($post_category = Doctrine_Core::getTable('PostCategory')->find(array($request->getParameter('id'))), sprintf('Object post_category does not exist (%s).', $request->getParameter('id')));
    $this->form = new PostCategoryForm($post_category);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($post_category = Doctrine_Core::getTable('PostCategory')->find(array($request->getParameter('id'))), sprintf('Object post_category does not exist (%s).', $request->getParameter('id')));
    $post_category->delete();

    $this->redirect('postCategory/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $post_category = $form->save();

      $this->redirect('postCategory/edit?id='.$post_category->getId());
    }
  }
}
