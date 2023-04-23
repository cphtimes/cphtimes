<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Article;
use App\Models\Section;

use GuzzleHttp;
use Exception;

class SendNewsletter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'newsletter:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send newsletter';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $articles = Article::where('work_status', 'published')
                            ->orderBy('comment_count', 'desc')
                            ->offset(0)
                            ->limit(13)
                            ->get();

        $sections = Section::where('language_code', 'en-US')
                            ->orderBy('position', 'asc')
                            ->limit(5)
                            ->get();

        $scheduledAt = new \DateTime();
        $scheduledAt = $scheduledAt->add(\DateInterval::createFromDateString('7 seconds'));

        $client = new \GuzzleHttp\Client();

        $templateId = 5;
        $subscriberListId = 2;

        try {
            $response = $client->request('POST', 'https://api.sendinblue.com/v3/emailCampaigns', [
                'body' => json_encode(
                    array(
                        'tag' => 'newsletter',
                        'sender' => array('name' => env('MAIL_FROM_NAME', ''), 'email' => env('MAIL_FROM_ADDRESS', '')),
                        'name' => 'Newsletter',
                        'templateId' => $templateId,
                        'scheduledAt' => $scheduledAt->format(\DateTime::RFC3339),
                        'subject' => 'Newsletter',
                        'toField' => '{{contact.FIRSTNAME}} {{contact.LASTNAME}}',
                        'recipients' => array('listIds' => array($subscriberListId)),
                        'inlineImageActivation' => false,
                        'recurring' => false,
                        'type' => 'classic',
                        'header' => 'If you are not able to see this mail, click {here}',
                        'footer' => 'If you wish to unsubscribe from our newsletter, click {here}',
                        'params' => array(
                            'sections' => $sections,
                            'articles' => $articles,
                        )
                    )
                ),
                'headers' => [
                    'accept' => 'application/json',
                    'content-type' => 'application/json',
                    'api-key' => env('SENDINBLUE_KEY')
                ],
            ]);
        } catch (Exception $e) {
            print_r($e->getMessage());
        }
        return 0;
    }
}
