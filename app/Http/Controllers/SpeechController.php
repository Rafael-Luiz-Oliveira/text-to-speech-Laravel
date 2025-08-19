<?php


namespace App\Http\Controllers;

use Google\Cloud\TextToSpeech\V1\Client\TextToSpeechClient;
use \Google\Cloud\TextToSpeech\V1\SynthesisInput;
use \Google\Cloud\TextToSpeech\V1\VoiceSelectionParams;
use \Google\Cloud\TextToSpeech\V1\SsmlVoiceGender;
use \Google\Cloud\TextToSpeech\V1\AudioConfig;
use \Google\Cloud\TextToSpeech\V1\AudioEncoding;
use \Google\Cloud\TextToSpeech\V1\SynthesizeSpeechRequest;
use Illuminate\Http\Request;


class SpeechController extends Controller
{
    function index(){
        return view('speech');
    }
    function speak(Request $request){
        $text = $request->input('text');

        $client = new TextToSpeechClient();

        $inputText = (new SynthesisInput())
            ->setText($text);
        
        $voice = (new VoiceSelectionParams())
            ->setLanguageCode('pt-BR')
            ->setSsmlGender(SsmlVoiceGender::MALE);

        $audioConfig = (new AudioConfig())
            ->setAudioEncoding(AudioEncoding::MP3);

        $synthesizeSpeechRequest = (new SynthesizeSpeechRequest())
            ->setInput($inputText)
            ->setVoice($voice)
            ->setAudioConfig($audioConfig);

        $response = $client->synthesizeSpeech($synthesizeSpeechRequest);
        

        $fileName = 'audio_' . time() . '.mp3';
        $filePath = public_path('audios/' . $fileName);

        if (!file_exists(public_path('audios'))) {
            mkdir(public_path('audios'), true);
        }

        file_put_contents($filePath, $response->getAudioContent());

        $client->close();

        return redirect('/')
            ->with('audio', asset('audios/' . $fileName));
    }
}
