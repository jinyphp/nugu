<?php
namespace Jiny\Nugu;

class Response
{
    public $version = 2.0;
    public $resultCode = "OK";

    public $output;
    public $directive = [];

    public function __construct()
    {
        $this->output = new \stdClass;
    }

    public function setOutput($key, $value)
    {
        $this->output->$key = $value;
    }


    /*

    // 배열
    public $directive =
    [
          {
            "type": "AudioPlayer.Play",
            "audioItem": {
                "stream": {
                    "url": "{{STRING}}",
                    "offsetInMilliseconds": {{LONG}},
                    "progressReport": {
                        "progressReportDelayInMilliseconds": {{LONG}},
                        "progressReportIntervalInMilliseconds": {{LONG}}
                    },
                    "token": "{{STRING}}",
                    "expectedPreviousToken": "{{STRING}}"
                },
                "metadata": { } // reserved
            }
          }
    ]
    */

}
