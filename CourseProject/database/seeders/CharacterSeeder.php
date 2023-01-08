<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Character::create([
            'id' => 1,
            'name' => 'Sadao Maou',
            'about' => '<p>Sadao is the Demon King from Ente Isla. Due to being confronted by the Hero Emilia and the humans, he was forced to retreat and ended up in the human world in present day Japan with one of his generals, Ashiya, and changed into a human form. To survive, he works as part-timer at MgRonalds and is eventually promoted from part-time to a full-time worker.</p>',
            'image' => '/storage/513df93252479a308fadf5e0a9691da53e7717f7.png',
            'va_id' => 1,
            'anime_id' => 1
        ]);

        Character::create([
            'id' => 2,
            'name' => 'Emi Yusa',
            'about' => '<p>The hero who defeated Satan Lord. After forcing the Satan Lord out, she is not satisfied until she sees to it that he is destroyed so she follows him into the human world. However, just like the Satan Lord, upon coming to Earth, she is reduced into a commoner and most of her powers are gone. She works as a customer service at Docodemo to earn a living.She is a half-angel.</p>',
            'image' => '/storage/2b29a2ce4a04a0136ca32be8c9fedb8a9fe85e09.png',
            'va_id' => 2,
            'anime_id' => 1
        ]);

        Character::create([
            'id' => 3,
            'name' => 'Light Yagami',
            'about' => '<p><strong>Birthdate:</strong> February 28, 1986 (1989 in the anime)</p><p><strong>Zodiac sign:</strong> Pisces</p><p><strong>Hair color:</strong> Brown</p><p><strong>Eye color:</strong> Brown</p><p><strong>Height:</strong> 179 cm (5\'10")</p><p><strong>Weight:</strong> 64.1 kg (141 lbs.)</p><p><strong>Blood type:</strong> A</p><p><strong>Occupation:</strong> high school student, a university student, detective</p><p><strong>Age (during the series):</strong> 17-23</p><p><strong>Likes:</strong> justice</p><p><strong>Dislikes:</strong> evil</p><p><br></p><p>Light, born on February 28, 1986, is a third-year high school student (12th grade) at Daikoku Private Academy (大国学園, Daikoku Gakuen) who also attends supplemental classes at Gamou Prep Academy at the beginning of the story. Light has a father, Soichiro Yagami, who is the head of the Police Force. Light also has a mother, Sachiko Yagami, and a younger sister, Sayu Yagami.</p><p><br></p><p>In Spring 2004, Light becomes a first-year student (freshman) at To-Oh University (東応大学, Tōō Daigaku), becoming one of two freshman representatives; L is the other freshman representative. During a tennis game with L at To-Oh, spectators reveal that Light was the junior high school tennis champion in 1999 and 2000. After his 2000 victory, Light quit tennis as he entered high school.</p><p><br></p><p>Yagami Light is a brilliant college student. Nicknamed "Kira," he uses the Death Note to create his ideal world of justice under him; its new God. Though he looks frail, Light is an extremely athletic person, with an aptitude to find an opponent\'s weak point. He is a genius, which adds to his notion that only he is fit to judge humanity and steer it on a proper moral course.</p><p><br></p><p>He gets shot by Matsuda after his plan failed and then dies because Ryuk wrote his name in his Death Note. (January 28, 2010, in the manga; January 28, 2013, in the anime)</p>',
            'image' => '/storage/0769cce6e4f57037a58c9757a4ad5e91761dc1b2.png',
            'va_id' => 3,
            'anime_id' => 3
        ]);

        Character::create([
            'id' => 4,
            'name' => 'Chiho Sasaki',
            'about' => '<p>A work colleague of Maou\'s at MgRonald. She is often cheerful and quite outgoing, but can be a little clumsy sometimes. Chiho also greatly admires and loves Maou, to the point where she easily becomes shaken and frantic at the thought of Maou even getting close to any other girl.</p><p><br></p><p>In episode 8, she finally confesses to Maou, but runs away (in great embarrassment) after she finds out Suzuno heard her.</p>',
            'image' => '/storage/3f989780fc98ca2b0ad394c263125f3b6dbfa36a.png',
            'va_id' => 4,
            'anime_id' => 1
        ]);
    }
}
