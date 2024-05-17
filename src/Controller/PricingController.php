<?php

namespace App\Controller;

use App\Entity\PricingPlan;
use App\Entity\PricingPlanFeature;
use App\Repository\PricingPlanFeatureRepository;
use App\Repository\PricingPlanRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PricingController extends AbstractController
{
    #[Route('/pricing', name: 'app_pricing')]
    public function index(PricingPlanRepository $pricingPlanRepository, PricingPlanFeatureRepository $pricingPlanFeatureRepository): Response
    {
        $pricingPlans = $pricingPlanRepository->findAll();
        $features = $pricingPlanFeatureRepository->findAll();

        return $this->render('pricing/index.html.twig', [
            'controller_name' => 'PricingController',
            'pricing_plans' => $pricingPlans,
            'features' => $features
        ]);
    }
}
