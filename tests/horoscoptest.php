<?php
use PHPUnit\Framework\TestCase;

require 'horoscop.php'; 

class horoscoptest extends TestCase {
    public function testhoroscopsign() {
        $json = '[
   {
        "id": "besfdscessdjjrj111otds",
        "title"  : "Your Weekly Pisces horoscope revealed",
        "content"  : "test data for one"
    },
{
    "id": "trdgskdlkv935pcocmn",
    "title"  : "Your Weekly Sagittarius horoscope revealed",
    "content"  : "test data for two"
},
{
    "id": "yrstdbweb456shdytd",
    "title"  : "Your Weekly Pisces horoscope revealed",
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

        $expected = '[
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
        $sortedJson = $sorter->sorttingdata();

        $expectedResult = json_decode($expected, true);
        $sortedReslt = json_decode($sortedJson, true);

        $this->assertEquals($expectedResult, $sortedReslt, "not matched.");
    }
}
?>
