<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            [
                'title' => 'Team V.N.L.S. Shocks JONIKA in Epic Heren 1 Showdown!',
                'img_url' => 'img/article1.jpg',
                'excerpt' => 'An unforgettable match as Team V.N.L.S. defeats JONIKA in a nail-biting finish!',
                'body' => '<p>Last night, Team V.N.L.S. pulled off an incredible victory against JONIKA in the Heren 1 competition. Fans were on the edge of their seats as the score teetered back and forth like a seesaw.</p>
                   <p>In the third set, V.N.L.S. captain Tom "The Thunder" Jacobs delivered an unstoppable spike that sent the crowd into a frenzy. "It was all about staying focused," Jacobs said, brushing off his heroic performance with a smile.</p>
                   <p>Meanwhile, JONIKA’s coach was seen holding his head in disbelief as a final service error sealed their fate. The drama, the tension, the unforgettable bloopers—this match had it all!</p>',
                'published_at' => '2025-01-26 18:00:00',
            ],
            [
                'title' => 'VLIJTIG LIESJE Takes the Lead in Dames 1 Competition!',
                'img_url' => 'img/article2.jpg',
                'excerpt' => 'A thrilling victory puts VLIJTIG LIESJE ahead of RESTAURANT VALKENISSE in the Dames 1 standings.',
                'body' => '<p>In a game filled with surprises, VLIJTIG LIESJE claimed a well-deserved victory over RESTAURANT VALKENISSE, securing their place at the top of the Dames 1 leaderboard.</p>
                   <p>The match began with RESTAURANT VALKENISSE dominating the first set, but VLIJTIG LIESJE turned the tide with a clever rotation strategy. Captain Anna "Ace Queen" De Vries delivered three consecutive service aces in the second set, leaving the opposition stunned.</p>
                   <p>The final set was a masterclass in teamwork, as VLIJTIG LIESJE’s precise passing and unrelenting attacks overwhelmed their rivals. "It feels amazing to be leading the competition, but the real victory is playing together as a team," Anna said, beaming with pride.</p>',
                'published_at' => '2025-01-26 20:00:00',
            ],
            [
                'title' => 'Volleybrawl: A Ball, A Block, and a Broken Net!',
                'img_url' => 'img/article3.jpg',
                'excerpt' => 'Chaos ensued as a net mishap brought the game to a hilarious halt.',
                'body' => '<p>The Dames 1 match between \'T KEN NET 2 and KOOKBOERDERIJ KROMMENHOEKE took an unexpected turn when a fierce block sent the net snapping like a rubber band.</p>
                   <p>Players burst into laughter as officials scrambled to fix the net with duct tape and zip ties. One spectator joked, "It’s not volleyball without a bit of DIY repair!"</p>
                   <p>Despite the hiccup, the match continued with renewed energy, and \'T KEN NET 2 ultimately took home the win. The crowd went wild, proving that volleyball is more than just a game—it’s a spectacle!</p>',
                'published_at' => '2025-01-25 19:00:00',
            ],
            [
                'title' => 'JONIKA vs. V.N.L.S.: The Rematch Everyone’s Talking About!',
                'img_url' => 'img/article4.jpg',
                'excerpt' => 'A highly anticipated rematch with drama, diving saves, and dazzling plays!',
                'body' => '<p>After their last encounter, JONIKA was hungry for redemption in their rematch against Team V.N.L.S. The game was a rollercoaster of emotions, with both teams giving their all.</p>
                   <p>V.N.L.S. libero Max "The Wall" Simons made some jaw-dropping digs, while JONIKA’s star setter, Liam, showcased his pinpoint accuracy. The audience couldn’t decide whether to cheer louder for the spikes or the miraculous saves!</p>
                   <p>In the end, V.N.L.S. edged out their rivals by just two points in the final set, leaving fans eagerly awaiting the next chapter in this epic rivalry.</p>',
                'published_at' => '2025-01-24 17:30:00',
            ],
            [
                'title' => 'VLIJTIG LIESJE’s Dance-Off Celebration Goes Viral!',
                'img_url' => 'img/article5.jpg',
                'excerpt' => 'Victory celebrations took an unexpected turn as VLIJTIG LIESJE broke into an impromptu dance-off!',
                'body' => '<p>After their victory over RESTAURANT VALKENISSE, VLIJTIG LIESJE didn’t just celebrate—they turned the court into a dance floor!</p>
                   <p>Their coordinated moves to a cheesy disco classic had the crowd roaring with laughter. Even the referee joined in, proving that volleyball isn’t just about competition—it’s about having fun!</p>
                   <p>The team’s captain joked, "Winning feels good, but dancing feels better!" Social media exploded with clips of the celebration, making VLIJTIG LIESJE an overnight sensation.</p>',
                'published_at' => '2025-01-23 21:00:00',
            ],
        ]);
    }
}
