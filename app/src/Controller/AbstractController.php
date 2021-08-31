<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\StockBin;

abstract class AbstractController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    /** @var string $title */
    public $title = 'CHANGE ME';

    /** @var bool $showBreadcrumbs */
    public $showBreadcrumbs = true;

    /** @var bool $showTitle */
    public $showTitle = true;

    /** @var array $js */
    private $js;

    /**
     * Render HTML
     *
     * @param $template
     * @param array $data
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @author AC ashwclark@outlook.com
     */
    public function renderHTML($template, Array $data = array())
    {
        $data['showBreadcrumbs'] = $this->showBreadcrumbs;
        $data['user'] = $this->getUser();
        $data['title'] = $this->title;
        $data['showTitle'] = $this->showTitle;
        $data['js'] = $this->js;

        if (!array_key_exists('breadcrumbs', $data)) {
            $data['breadcrumbs'] = array();
        }

        return $this->render($template, $data);
    }

    /**
     * @param $script
     *
     * @author AC ashwclark@outlook.com
     */
    public function addScript($script)
    {
        $this->js[] = $script;
    }

    /**
     * Is Admin
     *
     * @return mixed
     *
     * @author AC ashwclark@outlook.com
     */
    public function isAdmin()
    {
        return $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN');
    }

    /**           **
     * Error Pages *
     **           **/

    /**
     * Throw401
     *
     * @param string $msg
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @author AC ashwclark@outlook.com
     */
    public function throw401($msg = 'Unathorized')
    {
        return $this->throwError(401, $msg);
    }

    /**
     * Throw404
     *
     * @param string $msg
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @author AC ashwclark@outlook.com
     */
    public function throw404($msg = 'Page Not Found')
    {
        return $this->throwError(404, $msg);
    }

    /**
     * Throw Error
     *
     * @param int $number
     * @param string $msg
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @author AC ashwclark@outlook.com
     */
    public function throwError(int $number, $msg = 'Page Not Found')
    {
        $this->showTitle = false;
        $this->showBreadcrumbs = false;

        $error = ['number' => $number,
            'message' => $msg];

        return $this->renderHTML('error/error.twig', $error);
    }

    /**
     * Create Entity
     *
     * @param $entity
     *
     * @author AC ashwclark@outlook.com
     */
    public function createEntity($entity): void
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($entity);
        $entityManager->flush();

        unset ($entityManager);
    }

    /**
     * Persist Entity
     *
     * @param $entity
     *
     * @author AC a.clark@email.co.uk
     */
    public function persistEntity($entity): void
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($entity);

        unset ($entityManager);
    }

    /**
     * Update Entity
     *
     * @param $entity
     *
     * @author AC ashwclark@outlook.com
     */
    public function updateEntity($entity): void
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->merge($entity);
        $entityManager->flush();

        unset ($entityManager);
    }

    /**
     * Handle Type Error
     *
     * @param AjaxController $ajaxController
     * @param null $msg
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse|\Symfony\Component\HttpFoundation\Response
     *
     * @author AC ashwclark@outlook.com
     */
    public function handleTypeError(AjaxController $ajaxController, $msg = null)
    {
        $msg = is_null($msg)
            ? [
                'message' => 'Something went wrong.'
            ]
            : $msg;

        $msg['status'] = 'danger';

        return $this->throwMessage($ajaxController, $msg);
    }

    /**
     * Throw Message
     *
     * @param AjaxController $ajaxController
     * @param array $msg
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse|\Symfony\Component\HttpFoundation\Response
     *
     * @author AC ashwclark@outlook.com
     */
    public function throwMessage(AjaxController $ajaxController, array $msg)
    {
        return $ajaxController->renderHTML('base/snippets/message.twig', $msg);
    }

    /**
     * Check Access
     *
     * @param string $type
     * @param string $accessID
     *
     * @return bool
     *
     * @author AC ashwclark@outlook.com
     */
    public function checkAccess(string $type, string $accessID)
    {
        if ($this->isAdmin()) {
            return true;
        }

        $repository = $this->getRepository($type);

        $item = $repository->findOneBy(['accessId' => $accessID]);

        return ($item->hasAccess($this->getUser()));
    }

    /**
     * Check Exists
     *
     * @param string $type
     * @param int $id
     *
     * @return bool
     *
     * @author AC ashwclark@outlook.com
     */
    public function checkExists(string $type, int $id)
    {
        $repository = $this->getRepository($type);

        return !is_null($repository->find($id));
    }

    /**
     * Check Can Edit
     *
     * @param string $type
     * @param int $id
     *
     * @return bool
     *
     * @author AC ashwclark@outlook.com
     */
    public function checkCanEdit(string $type, int $id)
    {
        $repository = $this->getRepository($type);

        $item = $repository->find($id);

        return true;
    }

    /**
     * Get Repository
     *
     * @param string $type
     *
     * @return bool|\Doctrine\Persistence\ObjectRepository
     *
     * @author AC ashwclark@outlook.com
     */
    public function getRepository(string $type)
    {
        switch (ucwords($type)) {
            case 'Product':
                return $this->getDoctrine()->getRepository(Product::class);
            case 'StockBin':
                return $this->getDoctrine()->getRepository(StockBin::class);
            default:
                return false;
        }
    }

    /**
     * Generate Unique File Name
     *
     * @return string
     *
     * @author AC ashwclark@outlook.com
     */
    public function generateUniqueFileName(): string
    {
        return md5(uniqid());
    }
}
