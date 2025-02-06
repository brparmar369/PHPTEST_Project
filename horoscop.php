<?php
class horoscop {
    public $data;
    public $order = [
        "Aries", "Taurus", "Gemini", "Cancer", "Leo", "Virgo", 
        "Libra", "Scorpio", "Sagittarius", "Capricorn", "Aquarius", "Pisces"
    ];

    public function __construct($json) {
        $this->data = json_decode($json, true);
    }

    public function findsigndata($title) {
        foreach ($this->order as $index => $sign) {
            if (strpos($title, $sign) !== false) {
                return $index;
            }
        }
        return count($this->order);
    }

    public function sortsign() {
        usort($this->data, function ($atitle, $btitle) {
            return $this->findsigndata($atitle['title']) - $this->findsigndata($btitle['title']);
        });
    }

    public function sorttingdata() {
        return json_encode($this->data, JSON_PRETTY_PRINT);
    }
}

$json =  '[
   {
        "id": "besfdscessdjjrj111otds",
        "title"  : "Your Weekly Pisces horoscope revealed",
        "content"  : "test data for one"
    },
{
    "id": "trdgskdlkv935pcocmn",
    "title"  : "Your Weekly Scorpio horoscope revealed",
    "content"  : "test data for two"
},
{
    "id": "yrstdbweb456shdytd",
    "title"  : "Your Weekly Sagittarius horoscope revealed",
    "content"  : "test data for third"
},
{
    "id": "besfdscessdjjrj111otds",
    "title"  : "Your Weekly Capricorn horoscope revealed",
    "content"  : "test data for fourth"
},
{
    "id": "besfdscessdjjrj111otds",
    "title"  : "Your Weekly Aquarius horoscope revealed",
    "content"  : "test data for fifth"
},
{
    "id": "besfdscessdjjrj111otds",
    "title"  : "Your Weekly Gemini horoscope revealed",
    "content"  : "test data for sixth"
},
    {
    "id": "besfdscessdjjrj111otds",
    "title"  : "Your Weekly Cancer horoscope revealed",
    "content"  : "test data for seven"
},
    {
    "id": "besfdscessdjjrj111otds",
    "title"  : "Your Weekly Gemini horoscope revealed",
    "content"  : "test data for sixth"
},
    {
    "id": "besfdscessdjjrj111otds",
    "title"  : "Your Weekly Leo horoscope revealed",
    "content"  : "test data for sixth"
},
    {
    "id": "besfdscessdjjrj111otds",
    "title"  : "Your Weekly Virgo horoscope revealed",
    "content"  : "test data for sixth"
},
    {
    "id": "besfdscessdjjrj111otds",
    "title"  : "Your Weekly Libra horoscope revealed",
    "content"  : "test data for sixth"
},
    {
    "id": "besfdscessdjjrj111otds",
    "title"  : "Your Weekly Taurus horoscope revealed",
    "content"  : "test data for sixth"
},
{
    "id": "besfdscessdjjrj111otds",
    "title"  : "Your Weekly Aries horoscope revealed",
    "content"  : "test data for sixth"
}
]';

$sorter = new horoscop($json);
$sorter->sortsign();
$result = $sorter->sorttingdata();
echo "<pre>";
echo json_encode($result);
var_dump($result);
?>