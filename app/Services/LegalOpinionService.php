<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class LegalOpinionService
{
    public function sendAllLegalOpinionsToTangkaraw(){
        // Fetch data
        $legalOpinions = DB::connection('dilg')->table('legal_opinions')->get();

        if ($legalOpinions->isEmpty()) {
            Log::warning('No legal opinions found in the DILG database.');
            session()->flash('error', 'No legal opinions to send.');
            return;
        }

        Log::info('Fetched legal opinions from DILG database:', $legalOpinions->toArray());

        $legalOpinionsData = $legalOpinions->map(function ($legalOpinion) {
            return [
                'title' => $legalOpinion->title,
                'link' => $legalOpinion->link,
                'category' => $legalOpinion->category,
                'reference' => $legalOpinion->reference,
                'date' => $legalOpinion->date,
                'download_link' => $legalOpinion->download_link,
            ];
        })->toArray();

        Log::info('Prepared legal opinions to send:', $legalOpinionsData);

        if (empty($legalOpinionsData)) {
            Log::warning('Mapped legal opinions data is empty. Nothing to send.');
            session()->flash('error', 'No legal opinions to send.');
            return;
        }

        // Send to Tangkaraw
        Log::info('Sending legal opinions to Tangkaraw:', ['payload' => $legalOpinionsData]);
        
        $response = Http::post('http://127.0.0.1:8000/webhook/legal-opinion', [
            'legal_opinions' => $legalOpinionsData,
        ]);

        Log::info('Response from Tangkaraw:', [
            'status' => $response->status(),
            'body' => $response->body(),
        ]);

        if ($response->successful()) {
            session()->flash('message', 'All legal opinions sent successfully');
        } else {
            session()->flash('error', 'Failed to send legal opinions to Tangkaraw');
        }
    }
}
