<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;
use Nltk\Classify\NaiveBayesClassifier;
use Nltk\Corpus\ClassifierBasedTaggerI;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;


class NaiveBayesController extends Controller
{
    public function classify(Request $request)
    {
        $trainData = json_encode($request->input('train_data'));
        $trainLabels = json_encode($request->input('train_labels'));
        $testData = json_encode($request->input('test_data'));

        // $reviews = Reviews::create([ 
        //     'email' => $request->input('email'),
        //     'phone_number' => $request->input('phone_number'),
        //     'comments' => $request->input('comments'),
        //   ]);  

        //   $reviews->save();

        //   return redirect()->route('review-success');
        
        $pythonScriptPath = base_path('naive_bayes_classifier.py');
        $process = new Process(['python3', $pythonScriptPath, $trainData, $trainLabels, $testData]);
        $process->run();

        // Check if the process was successful
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $output = $process->getOutput();
        $predictions = json_decode($output, true);
        
        return response()->json(['predictions' => $predictions]);
    }
}
