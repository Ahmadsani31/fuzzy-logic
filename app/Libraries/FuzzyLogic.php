<?php

namespace App\Libraries;

class FuzzyLogic
{
    // perhitungan dengan fuzzy mandani
    public function fuzzyMamdani($ValA, $ValB, $ValC, $ValD, $ValE, $ValF)
    {
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

        $data = [
            'VarA' => [
                $renValA,
                $sedValA,
                $naikValA,
            ],
            'VarB' => [
                $renValB,
                $sedValB,
                $naikValB,
            ],
            'VarC' => [
                $renValC,
                $sedValC,
                $naikValC,
            ],
            'VarD' => [
                $renValD,
                $sedValD,
                $naikValD,
            ],
            'VarE' => [
                $renValE,
                $sedValE,
                $naikValE,
            ],
            'VarF' => [
                $renValF,
                $sedValF,
                $naikValF,
            ],
        ];
        return $data;
    }
}
