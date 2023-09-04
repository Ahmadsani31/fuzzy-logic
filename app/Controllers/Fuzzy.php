<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;

class Fuzzy extends BaseController
{
    use ResponseTrait;
    public function index()
    {

        $ValA = $this->request->getPost('varA');
        $ValB = $this->request->getPost('varB');
        $ValC = $this->request->getPost('varC');
        $ValD = $this->request->getPost('varD');
        $ValE = $this->request->getPost('varE');
        $ValF = $this->request->getPost('varF');

        $dataInsert = [
            'VarA' => $ValA,
            'VarB' => $ValB,
            'VarC' => $ValC,
            'VarD' => $ValD,
            'VarE' => $ValE,
            'VarF' => $ValF,
        ];

        try {
            $this->mPerhitungan->insert($dataInsert);
            $PerhitunganID =   $this->mPerhitungan->getInsertID();
        } catch (\Throwable $err) {
            return $this->respond($err->getMessage(), 404);
        }

        // value var A / C- Organik (%)
        $renValA = 0;
        $sedValA = 0;
        $naikValA = 0;
        if ($ValA >= 1 && $ValA <= 2) {
            $renValA1 = (2 - $ValA);
            $renValA = ($renValA1 /  1);
        } elseif ($ValA >= 2 && $ValA <= 3) {
            $rValA = ((3 - 2) / 2);
            if ($ValA <= (2 + $rValA)) {
                $sedValA1 = ($ValA - 2);
                $sedValA = ($sedValA1 / 1);
            } else {
                $sedValA1 = (3 - $ValA);
                $sedValA = ($sedValA1 / 1);
            }
        } elseif ($ValA >= 3 && $ValA <= 5) {
            $naikValA1 = (5 - $ValA);
            $naikValA = ($naikValA1 / 2);
        }

        // value var B / P2O5 HCL (mg/100g)
        $renValB = 0;
        $sedValB = 0;
        $naikValB = 0;
        if ($ValB >= 2 && $ValB <= 7) {
            $renValB1 = (7 - $ValB);
            $renValB = ($renValB1 / 5);
        } elseif ($ValB >= 7 && $ValB <= 10) {
            $rValB = ((10 - 7) / 2);
            if ($ValB <= (7 + $rValB)) {
                $sedValB1 = ($ValB - 7);
                $sedValB = ($sedValB1 / 3);
            } else {
                $sedValB1 = (10 - $ValB);
                $sedValB = ($sedValB1 / 3);
            }
        } elseif ($ValB >= 10 && $ValB <= 15) {
            $naikValB1 = (15 - $ValB);
            $naikValB = ($naikValB1 / 5);
        }

        // value var C / K2O HCL
        $renValC = 0;
        $sedValC = 0;
        $naikValC = 0;
        if ($ValC >= 1 && $ValC <= 20) {
            $renValC1 = (20 - $ValC);
            $renValC = ($renValC1 / 19);
        } elseif ($ValC >= 21 && $ValC <= 40) {
            $rValC = ((40 - 21) / 2);
            if ($ValC <= (21 + $rValC)) {
                $sedValC1 = ($ValC - 20);
                $sedValC = ($sedValC1 / 20);
            } else {
                $sedValC1 = (40 - $ValC);
                $sedValC = ($sedValC1 / 20);
            }
        } elseif ($ValC >= 41 && $ValC <= 60) {
            $naikValC1 = (60 - $ValC);
            $naikValC = ($naikValC1 / 20);
        }

        // value var D / Kejenuhan Basa (%)
        $renValD = 0;
        $sedValD = 0;
        $naikValD = 0;
        if ($ValD >= 10 && $ValD <= 20) {
            $renValD1 = (20 - $ValD);
            $renValD = ($renValD1 / 10);
        } elseif ($ValD >= 21 && $ValD <= 30) {
            $rValD = ((30 - 21) / 2);
            if ($ValD <= (21 + $rValD)) {
                $sedValD1 = ($ValD - 20);
                $sedValD = ($sedValD1 / 10);
            } else {
                $sedValD1 = (30 - $ValD);
                $sedValD = ($sedValD1 / 10);
            }
        } elseif ($ValD >= 31 && $ValD <= 60) {
            $naikValD1 = (60 - $ValD);
            $naikValD = ($naikValD1 / 30);
        }

        // value var E / KTK (me/100g)
        $renValE = 0;
        $sedValE = 0;
        $naikValE = 0;
        if ($ValE >= 5 && $ValE <= 16) {
            $renValE1 = (16 - $ValE);
            $renValE = ($renValE1 / 11);
        } elseif ($ValE >= 17 && $ValE <= 24) {
            $rValE = ((24 - 17) / 2);
            if ($ValE <= (17 + $rValE)) {
                $sedValE1 = ($ValE - 16);
                $sedValE = ($sedValE1 / 8);
            } else {
                $sedValE1 = (24 - $ValE);
                $sedValE = ($sedValE1 / 8);
            }
        } elseif ($ValE >= 25 && $ValE <= 40) {
            $naikValE1 = (40 - $ValE);
            $naikValE = ($naikValE1 / 16);
        }

        // value var E / pH H2O
        $renValF = 0;
        $sedValF = 0;
        $naikValF = 0;
        if ($ValF >= 4.5 && $ValF <= 5.5) {
            $renValF1 = (5.5 - $ValF);
            $renValF = ($renValF1 / 1);
        } elseif ($ValF >= 5.6 && $ValF <= 6.5) {
            $rValF = ((6.5 - 5.6) / 2);
            if ($ValF <= (5.6 + $rValF)) {
                $sedValF1 = ($ValF - 5.5);
                $sedValF = ($sedValF1 / 1);
            } else {
                $sedValF1 = (6.5 - $ValF);
                $sedValF = ($sedValF1 / 1);
            }
        } elseif ($ValF >= 6.6 && $ValF <= 7.5) {
            $naikValF1 = (7.5 - $ValF);
            $naikValF = ($naikValF1 / 1);
        } elseif ($ValF >= 7.6 && $ValF <= 8.5) {
            $naikValF1 = (8.5 - $ValF);
            $naikValF = ($naikValF1 / 1);
        }

        // perhitungan RULE
        // hasil perhitungan var A / C- Organik (%)
        $renValA = $renValA == 0 ? 0 : number_format($renValA, 2);
        $sedValA = $sedValA == 0 ? 0 : number_format($sedValA, 2);
        $naikValA = $naikValA == 0 ? 0 : number_format($naikValA, 2);
        // hasil perhitungan var B / P2O5 HCL (mg/100g)
        $renValB = $renValB == 0 ? 0 : number_format($renValB, 2);
        $sedValB = $sedValB == 0 ? 0 : number_format($sedValB, 2);
        $naikValB = $naikValB == 0 ? 0 : number_format($naikValB, 2);
        // hasil perhitungan var C / K2O HCL
        $renValC = $renValC == 0 ? 0 : number_format($renValC, 2);
        $sedValC = $sedValC == 0 ? 0 : number_format($sedValC, 2);
        $naikValC = $naikValC == 0 ? 0 : number_format($naikValC, 2);
        // hasil perhitungan var E / KTK (me/100g)
        $renValE = $renValE == 0 ? 0 : number_format($renValE, 2);
        $sedValE = $sedValE == 0 ? 0 : number_format($sedValE, 2);
        $naikValE = $naikValE == 0 ? 0 : number_format($naikValE, 2);
        // hasil perhitungan var D / Kejenuhan Basa (%)
        $renValD = $renValD == 0 ? 0 : number_format($renValD, 2);
        $sedValD = $sedValD == 0 ? 0 : number_format($sedValD, 2);
        $naikValD = $naikValD == 0 ? 0 : number_format($naikValD, 2);
        // hasil perhitungan value var E / pH H2O
        $renValF = $renValF == 0 ? 0 : number_format($renValF, 2);
        $sedValF = $sedValF == 0 ? 0 : number_format($sedValF, 2);
        $naikValF = $naikValF == 0 ? 0 : number_format($naikValF, 2);

        $dataHitung = [
            'VarA' => [
                'renValA' => $renValA,
                'sedValA' => $sedValA,
                'naikValA' => $naikValA,
            ],
            'VarB' => [
                'renValB' => $renValB,
                'sedValB' => $sedValB,
                'naikValB' => $naikValB,
            ],
            'VarC' => [
                'renValC' => $renValC,
                'sedValC' => $sedValC,
                'naikValC' => $naikValC,
            ],
            'VarD' => [
                'renValE' => $renValE,
                'sedValE' => $sedValE,
                'naikValE' => $naikValE,
            ],
            'VarE' => [
                'renValD' => $renValD,
                'sedValD' => $sedValD,
                'naikValD' => $naikValD,
            ],
            'VarF' => [
                'renValF' => $renValF,
                'sedValF' => $sedValF,
                'naikValF' => $naikValF,
            ],
        ];


        // echo $naikValA . '<br>';
        // echo $naikValB . '<br>';
        // echo $renValC . '<br>';
        // echo $naikValE . '<br>';
        // echo $naikValD . '<br>';

        @$pRule1 = MIN(
            array_filter(array(
                $naikValA,
                $naikValB,
                $sedValC,
                $naikValE,
                $naikValD,
            ))
        );

        @$pRule2 = MIN(
            array_filter(array(
                $naikValA,
                $naikValB,
                $renValC,
                $naikValE,
                $naikValD,
            ))
        );

        @$pRule3 = MIN(
            array_filter(array(
                $sedValA,
                $sedValB,
                $naikValC,
                $naikValE,
                $naikValD,
            ))
        );

        @$pRule4 = MIN(
            array_filter(array(
                $sedValA,
                $sedValB,
                $renValC,
                $naikValE,
                $naikValD,
            ))
        );

        @$pRule5 = MIN(
            array_filter(array(
                $naikValA,
                $sedValB,
                $renValC,
                $naikValE,
                $naikValD,
            ))
        );

        @$pRule6 = MIN(
            array_filter(array(
                $renValA,
                $renValB,
                $naikValC,
                $naikValE,
                $naikValD,
            ))
        );

        @$pRule7 = MIN(
            array_filter(array(
                $renValA,
                $renValB,
                $naikValC,
                $naikValE,
                $naikValD,
            ))
        );

        @$pRule8 = MIN(
            array_filter(array(
                $naikValA,
                $renValB,
                $naikValC,
                $naikValE,
                $sedValD,
            ))
        );

        @$pRule9 = MIN(
            array_filter(array(
                $naikValA,
                $naikValB,
                $renValC,
                $naikValE,
                $sedValD,
            ))
        );

        @$pRule10 = MIN(
            array_filter(array(
                $sedValA,
                $sedValB,
                $naikValC,
                $sedValE,
                $sedValD,
            ))
        );

        @$pRule11 = MIN(
            array_filter(array(
                $renValA,
                $sedValB,
                $naikValC,
                $naikValE,
                $sedValD,
            ))
        );

        @$pRule12 = MIN(
            array_filter(array(
                $naikValA,
                $naikValB,
                $naikValC,
                $naikValE,
                $renValD,
            ))
        );

        @$pRule13 = MIN(
            array_filter(array(
                $naikValA,
                $naikValB,
                $renValC,
                $naikValE,
                $renValD,
            ))
        );

        @$pRule14 = MIN(
            array_filter(array(
                $sedValA,
                $sedValB,
                $sedValC,
                $naikValE,
                $renValD,
            ))
        );

        @$pRule15 = MIN(
            array_filter(array(
                $naikValA,
                $naikValB,
                $renValC,
                $sedValE,
                $naikValD,
            ))
        );

        @$pRule16 = MIN(
            array_filter(array(
                $sedValA,
                $sedValB,
                $naikValC,
                $naikValE,
                $renValD,
            ))
        );

        @$pRule17 = MIN(
            array_filter(array(
                $sedValA,
                $renValB,
                $naikValC,
                $sedValE,
                $naikValD,
            ))
        );


        @$pRule18 = MIN(
            array_filter(array(
                $naikValA,
                $naikValB,
                $sedValC,
                $sedValE,
                $sedValD,
            ))
        );

        @$pRule19 = MIN(
            array_filter(array(
                $sedValA,
                $sedValB,
                $renValC,
                $sedValE,
                $sedValD,
            ))
        );

        @$pRule20 = MIN(
            array_filter(array(
                $renValA,
                $sedValB,
                $naikValC,
                $sedValE,
                $sedValD,
            ))
        );

        @$pRule21 = MIN(
            array_filter(array(
                $naikValA,
                $naikValB,
                $naikValC,
                $sedValE,
                $renValD,
            ))
        );


        @$pRule22 = MIN(
            array_filter(array(
                $sedValA,
                $renValB,
                $renValC,
                $sedValE,
                $renValD,
            ))
        );


        @$pRule23 = MIN(
            array_filter(array(
                $naikValA,
                $naikValB,
                $naikValC,
                $renValE,
                $naikValD,
            ))
        );

        @$pRule24 = MIN(
            array_filter(array(
                $sedValA,
                $sedValB,
                $renValC,
                $renValE,
                $naikValD,
            ))
        );

        @$pRule25 = MIN(
            array_filter(array(
                $naikValA,
                $naikValB,
                $naikValC,
                $renValE,
                $naikValD,
            ))
        );

        @$pRule26 = MIN(
            array_filter(array(
                $sedValA,
                $naikValB,
                $naikValC,
                $renValE,
                $naikValD,
            ))
        );

        @$pRule27 = MIN(
            array_filter(array(
                $naikValA,
                $naikValB,
                $naikValC,
                $renValE,
                $sedValD,
            ))
        );

        @$pRule28 = MIN(
            array_filter(array(
                $renValA,
                $renValB,
                $sedValC,
                $renValE,
                $sedValD,
            ))
        );

        @$pRule29 = MIN(
            array_filter(array(
                $naikValA,
                $renValB,
                $renValC,
                $renValE,
                $renValD,
            ))
        );

        @$pRule30 = MIN(
            array_filter(array(
                $renValA,
                $renValB,
                $renValC,
                $renValE,
                $renValD,
            ))
        );


        // $pRule[] = $pRule1 ? $pRule1 : 0;
        // $pRule[] = $pRule2 ? $pRule2 : 0;
        // $pRule[] = $pRule3 ? $pRule3 : 0;
        // $pRule[] = $pRule4 ? $pRule4 : 0;
        // $pRule[] = $pRule5 ? $pRule5 : 0;
        // $pRule[] = $pRule6 ? $pRule6 : 0;
        // $pRule[] = $pRule7 ? $pRule7 : 0;
        // $pRule[] = $pRule8 ? $pRule8 : 0;
        // $pRule[] = $pRule9 ? $pRule9 : 0;
        // $pRule[] = $pRule10 ? $pRule10 : 0;
        // $pRule[] = $pRule11 ? $pRule11 : 0;
        // $pRule[] = $pRule12 ? $pRule12 : 0;
        // $pRule[] = $pRule13 ? $pRule13 : 0;
        // $pRule[] = $pRule14 ? $pRule14 : 0;
        // $pRule[] = $pRule15 ? $pRule15 : 0;
        // $pRule[] = $pRule16 ? $pRule16 : 0;
        // $pRule[] = $pRule17 ? $pRule17 : 0;
        // $pRule[] = $pRule18 ? $pRule18 : 0;
        // $pRule[] = $pRule19 ? $pRule19 : 0;
        // $pRule[] = $pRule20 ? $pRule20 : 0;
        // $pRule[] = $pRule21 ? $pRule21 : 0;
        // $pRule[] = $pRule22 ? $pRule22 : 0;
        // $pRule[] = $pRule23 ? $pRule23 : 0;
        // $pRule[] = $pRule24 ? $pRule24 : 0;
        // $pRule[] = $pRule25 ? $pRule25 : 0;
        // $pRule[] = $pRule26 ? $pRule26 : 0;
        // $pRule[] = $pRule27 ? $pRule27 : 0;
        // $pRule[] = $pRule28 ? $pRule28 : 0;
        // $pRule[] = $pRule29 ? $pRule29 : 0;
        // $pRule[] = $pRule30 ? $pRule30 : 0;

        $pRule1 = $pRule1 ? $pRule1 : 0;
        $pRule2 = $pRule2 ? $pRule2 : 0;
        $pRule3 = $pRule3 ? $pRule3 : 0;
        $pRule4 = $pRule4 ? $pRule4 : 0;
        $pRule5 = $pRule5 ? $pRule5 : 0;
        $pRule6 = $pRule6 ? $pRule6 : 0;
        $pRule7 = $pRule7 ? $pRule7 : 0;
        $pRule8 = $pRule8 ? $pRule8 : 0;
        $pRule9 = $pRule9 ? $pRule9 : 0;
        $pRule10 = $pRule10 ? $pRule10 : 0;
        $pRule11 = $pRule11 ? $pRule11 : 0;
        $pRule12 = $pRule12 ? $pRule12 : 0;
        $pRule13 = $pRule13 ? $pRule13 : 0;
        $pRule14 = $pRule14 ? $pRule14 : 0;
        $pRule15 = $pRule15 ? $pRule15 : 0;
        $pRule16 = $pRule16 ? $pRule16 : 0;
        $pRule17 = $pRule17 ? $pRule17 : 0;
        $pRule18 = $pRule18 ? $pRule18 : 0;
        $pRule19 = $pRule19 ? $pRule19 : 0;
        $pRule20 = $pRule20 ? $pRule20 : 0;
        $pRule21 = $pRule21 ? $pRule21 : 0;
        $pRule22 = $pRule22 ? $pRule22 : 0;
        $pRule23 = $pRule23 ? $pRule23 : 0;
        $pRule24 = $pRule24 ? $pRule24 : 0;
        $pRule25 = $pRule25 ? $pRule25 : 0;
        $pRule26 = $pRule26 ? $pRule26 : 0;
        $pRule27 = $pRule27 ? $pRule27 : 0;
        $pRule28 = $pRule28 ? $pRule28 : 0;
        $pRule29 = $pRule29 ? $pRule29 : 0;
        $pRule30 = $pRule30 ? $pRule30 : 0;

        $dataRule1 = [
            'Rule-1' => $pRule1,
            'Rule-2' => $pRule2,
            'Rule-3' => $pRule3,
            'Rule-4' => $pRule4,
            'Rule-5' => $pRule5,
            'Rule-6' => $pRule6,
            'Rule-7' => $pRule7,
            'Rule-8' => $pRule8,
            'Rule-9' => $pRule9,
            'Rule-10' => $pRule10,
            'Rule-11' => $pRule11,
            'Rule-12' => $pRule12,
            'Rule-13' => $pRule13,
            'Rule-14' => $pRule14,
            'Rule-15' => $pRule15,
            'Rule-16' => $pRule16,
            'Rule-17' => $pRule17,
            'Rule-18' => $pRule18,
            'Rule-19' => $pRule19,
            'Rule-20' => $pRule20,
            'Rule-21' => $pRule21,
            'Rule-22' => $pRule22,
            'Rule-23' => $pRule23,
            'Rule-24' => $pRule24,
            'Rule-25' => $pRule25,
            'Rule-26' => $pRule26,
            'Rule-27' => $pRule27,
            'Rule-28' => $pRule28,
            'Rule-29' => $pRule29,
            'Rule-30' => $pRule30,
        ];

        $pRuleNext1 = (100 - ($pRule1 * 30));
        $pRuleNext2 = (($pRule2 * 30) + 40);
        $pRuleNext3 = (100 - ($pRule3 * 30));
        $pRuleNext4 = (($pRule4 * 30) + 40);
        $pRuleNext5 = (($pRule5 * 30) + 40);
        $pRuleNext6 = (($pRule6 * 30) + 40);
        $pRuleNext7 = (40 - ($pRule7 * 30));
        $pRuleNext8 = (100 - ($pRule8 * 30));
        $pRuleNext9 = (($pRule9 * 30) + 40);
        $pRuleNext10 = (($pRule10 * 30) + 40);
        $pRuleNext11 = (40 - ($pRule11 * 30));
        $pRuleNext12 = (($pRule12 * 30) + 40);
        $pRuleNext13 = (40 - ($pRule13 * 30));
        $pRuleNext14 = (40 - ($pRule14 * 30));
        $pRuleNext15 = (($pRule15 * 30) + 40);
        $pRuleNext16 = (($pRule16 * 30) + 40);
        $pRuleNext17 = (40 - ($pRule17 * 30));
        $pRuleNext18 = (($pRule18 * 30) + 40);
        $pRuleNext19 = (($pRule19 * 30) + 40);
        $pRuleNext20 = (40 - ($pRule20 * 30));
        $pRuleNext21 = (($pRule21 * 30) + 40);
        $pRuleNext22 = (40 - ($pRule22 * 30));
        $pRuleNext23 = (($pRule23 * 30) + 40);
        $pRuleNext24 = (40 - ($pRule24 * 30));
        $pRuleNext25 = (($pRule25 * 30) + 40);
        $pRuleNext26 = (40 - ($pRule26 * 30));
        $pRuleNext27 = (($pRule27 * 30) + 40);
        $pRuleNext28 = (40 - ($pRule28 * 30));
        $pRuleNext29 = (40 - ($pRule29 * 30));
        $pRuleNext30 = (40 - ($pRule30 * 30));

        $dataRule2 = [
            'Rule-1' => $pRuleNext1,
            'Rule-2' => $pRuleNext2,
            'Rule-3' => $pRuleNext3,
            'Rule-4' => $pRuleNext4,
            'Rule-5' => $pRuleNext5,
            'Rule-6' => $pRuleNext6,
            'Rule-7' => $pRuleNext7,
            'Rule-8' => $pRuleNext8,
            'Rule-9' => $pRuleNext9,
            'Rule-10' => $pRuleNext10,
            'Rule-11' => $pRuleNext11,
            'Rule-12' => $pRuleNext12,
            'Rule-13' => $pRuleNext13,
            'Rule-14' => $pRuleNext14,
            'Rule-15' => $pRuleNext15,
            'Rule-16' => $pRuleNext16,
            'Rule-17' => $pRuleNext17,
            'Rule-18' => $pRuleNext18,
            'Rule-19' => $pRuleNext19,
            'Rule-20' => $pRuleNext20,
            'Rule-21' => $pRuleNext21,
            'Rule-22' => $pRuleNext22,
            'Rule-23' => $pRuleNext23,
            'Rule-24' => $pRuleNext24,
            'Rule-25' => $pRuleNext25,
            'Rule-26' => $pRuleNext26,
            'Rule-27' => $pRuleNext27,
            'Rule-28' => $pRuleNext28,
            'Rule-29' => $pRuleNext29,
            'Rule-30' => $pRuleNext30,
        ];


        $pNz1 = (($pRule1 * $pRuleNext1) + ($pRule2 * $pRuleNext2) + ($pRule3 * $pRuleNext3) + ($pRule4 * $pRuleNext4) + ($pRule5 * $pRuleNext5) + ($pRule6 * $pRuleNext6) + ($pRule7 * $pRuleNext7) + ($pRule8 * $pRuleNext8) + ($pRule9 * $pRuleNext9) + ($pRule10 * $pRuleNext10) + ($pRule11 * $pRuleNext11) + ($pRule12 * $pRuleNext12) + ($pRule13 * $pRuleNext13) + ($pRule14 * $pRuleNext14) + ($pRule15 * $pRuleNext15) + ($pRule16 * $pRuleNext16) + ($pRule17 * $pRuleNext17) + ($pRule18 * $pRuleNext18) + ($pRule19 * $pRuleNext19) + ($pRule20 * $pRuleNext20) + ($pRule21 * $pRuleNext21) + ($pRule22 * $pRuleNext22) + ($pRule23 * $pRuleNext23) + ($pRule24 * $pRuleNext24) + ($pRule25 * $pRuleNext25) + ($pRule26 * $pRuleNext26) + ($pRule27 * $pRuleNext27) + ($pRule28 * $pRuleNext28) + ($pRule29 * $pRuleNext29) + ($pRule30 * $pRuleNext30));

        $pNz2 = $pRule1 + $pRule2 + $pRule3 + $pRule4 + $pRule5 + $pRule6 + $pRule7 + $pRule8 + $pRule9 + $pRule10 + $pRule11 + $pRule12 + $pRule13 + $pRule14 + $pRule15 + $pRule16 + $pRule17 + $pRule18 + $pRule19 + $pRule20 + $pRule21 + $pRule22 + $pRule23 + $pRule24 + $pRule25 + $pRule26 + $pRule27 + $pRule28 + $pRule29 + $pRule30;

        $pNz = $pNz1 / $pNz2;

        $dataZ1 = [
            'Z1' => number_format($pNz, 2)
        ];
        try {
            $param =     $this->mHasil->insert([
                'PerhitunganID' => $PerhitunganID,
                'Hitung1' => json_encode($dataRule1),
                'Hitung2' => json_encode($dataRule2),
                'Hitung3' => json_encode($dataZ1)
            ]);
        } catch (\Throwable $err) {
            return $this->respond($err->getMessage(), 404);
        }
        return $this->respond([
            'param' => $param,
            'message' => 'Berhasil',
            'PerhintunganID' => $PerhitunganID
        ], 200);
        // return redirect()->to('perhitungan/detail/' . $PerhintunganID);
        //     echo '<script>
        //     alert(' . number_format($pNz, 2) . ')
        //   </script>';
    }
}
