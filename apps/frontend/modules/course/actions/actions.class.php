<?php

/**
 * course actions.
 *
 * @package    symfony-university
 * @subpackage course
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class courseActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->courses = Doctrine_Core::getTable('Course')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->course = Doctrine_Core::getTable('Course')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->course);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CourseForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CourseForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($course = Doctrine_Core::getTable('Course')->find(array($request->getParameter('id'))), sprintf('Object course does not exist (%s).', $request->getParameter('id')));
    $this->form = new CourseForm($course);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($course = Doctrine_Core::getTable('Course')->find(array($request->getParameter('id'))), sprintf('Object course does not exist (%s).', $request->getParameter('id')));
    $this->form = new CourseForm($course);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($course = Doctrine_Core::getTable('Course')->find(array($request->getParameter('id'))), sprintf('Object course does not exist (%s).', $request->getParameter('id')));
    $course->delete();

    $this->redirect('course/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $course = $form->save();

      $this->redirect('course/edit?id='.$course->getId());
    }
  }
}
