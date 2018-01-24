<?php

/*
 * This file is part of the Kimai package.
 *
 * (c) Kevin Papst <kevin@kevinpapst.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kimai\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Controller used to for rendering the additional invoice templates.
 *
 * @author Kevin Papst <kevin@kevinpapst.de>
 */
class InvoiceRendererController extends Controller
{

    /**
     * @param InvoiceModel $model
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function shortAction($model)
    {
        return $this->render('@KimaiInvoiceBundle/invoice/short.html.twig', [
            'model' => $model,
        ]);
    }
}
