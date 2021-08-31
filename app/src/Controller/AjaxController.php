<?php

namespace App\Controller;

use App\Exceptions\AjaxExceptionHandler;
use App\Exceptions\AjaxFormExceptionManager;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class AjaxController extends AbstractController
{
    /** @var Request */
    protected $request;

    public function ajaxAction(Request $request)
    {
        $this->request = $request;

        $location = $request->request->get('location');

        if (empty($location)) {
            return new JsonResponse(['status' => 5, 'message' => 'Unknown Location']);
        }

        $response = $this->forward('App\Controller\\' . str_replace('/', '\\', $location));
        if ($response->getStatusCode() == 500) {
            //500 Error -- Validation
            $em = AjaxFormExceptionManager::getInstance();
            if ($em->hasErrors()) {
                dump($em->getErrors());exit();
                return new JsonResponse(['errors' => $em->getErrors(), 'status' => 2]);
            }
        }

        return $response;
    }

    /**
     * Get Post
     *
     * @param $field
     *
     * @return mixed
     *
     * @author AC ashwclark@outlook.com
     */
    public function getPost($field)
    {
        return $this->request->request->get($field);
    }

    /**
     * Ajax Redirect
     *
     * @param $route
     *
     * @return JsonResponse
     *
     * @author AC ashwclark@outlook.com
     */
    public function ajaxRedirect($route)
    {
        return new JsonResponse(['redirect' => $route, 'status' => 3]);
    }

    /**
     * Render Html
     *
     * @param $template
     * @param array $data
     *
     * @return JsonResponse|\Symfony\Component\HttpFoundation\Response
     *
     * @author AC ashwclark@outlook.com
     */
    public function renderHTML($template, Array $data = array())
    {
        return new JsonResponse(["html" => $this->renderView($template, $data), "status" => 1]);
    }

    /**
     * @param FormInterface $form
     * @return bool
     *
     * @author AC ashwclark@outlook.com
     */
    public function validateForm(FormInterface $form)
    {
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                return true;
            } else {
                $em = AjaxFormExceptionManager::getInstance();
                foreach ($form->getErrors(true) as $error) {
                    $em->addError($error->getOrigin()->getPropertyPath()->getElement(0), $error->getMessage());
                }
                throw new Exception();
            }
        }
    }

}
