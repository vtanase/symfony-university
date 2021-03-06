<?php

/**
 * teacher actions.
 *
 * @package    symfony-university
 * @subpackage teacher
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class teacherActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    // display teachers ordered by priority
    $this->teachers = Doctrine_Core::getTable('Teacher')->getTeachersOrderedByPriority();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->teacher = Doctrine_Core::getTable('Teacher')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->teacher);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TeacherForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TeacherForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($teacher = Doctrine_Core::getTable('Teacher')->find(array($request->getParameter('id'))), sprintf('Object teacher does not exist (%s).', $request->getParameter('id')));
    $this->form = new TeacherForm($teacher);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($teacher = Doctrine_Core::getTable('Teacher')->find(array($request->getParameter('id'))), sprintf('Object teacher does not exist (%s).', $request->getParameter('id')));
    $this->form = new TeacherForm($teacher);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($teacher = Doctrine_Core::getTable('Teacher')->find(array($request->getParameter('id'))), sprintf('Object teacher does not exist (%s).', $request->getParameter('id')));
    $teacher->delete();

    $this->redirect('teacher/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $teacher = $form->save();

      $this->redirect('teacher/edit?id='.$teacher->getId());
    }
  }
}
