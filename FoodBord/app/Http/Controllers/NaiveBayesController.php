<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;
use Nltk\Classify\NaiveBayesClassifier;
use Nltk\Corpus\ClassifierBasedTaggerI;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Log;


class NaiveBayesController extends Controller
{
    public function classify(Request $request)
    {
       
        $reviews = Reviews::create([ 
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'comments' =>  $request->input('comments'),
          ]);  

        $reviews->save();
        $testData = $request->input('comments');
        // $pythonScriptPath = base_path('naive_bayes_classifier.py');
        $process = new Process(['python3','naive_bayes_classifier.py',$testData]);
        $process->run();

        Log::info('Process output: ' . $process->getOutput());
        Log::error('Process error output: ' . $process->getErrorOutput());

        // Check if the process was successful
        $output = $process->getOutput();
        if (!$process->isSuccessful()) {
            Log::error('Process failed with error code: ' . $process->getExitCode());
            throw new ProcessFailedException($process);
        }

        else{

            $predictions = json_decode($output, true);
            return view('review_success',['result'=>$output]); 
            // return response()->json(['predictions' => $predictions]);
        }

       

    }
}
