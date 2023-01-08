<?php

namespace Database\Seeders;

use App\Models\Anime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Anime::create([
            'id' => 1,
            'title' => 'The Devil\'s is a Part-Timer!',
            'episodes' => 13,
            'duration' => 24,
            'score' => 7.85,
            'description' => 'Striking fear into the hearts of mortals, the Demon Lord Satan begins to conquer the land of Ente Isla with his vast demon armies. However, while embarking on this brutal quest to take over the continent, his efforts are foiled by the hero Emilia, forcing Satan to make his swift retreat through a dimensional portal only to land in the human world. Along with his loyal general Alsiel, the demon finds himself stranded in modern-day Tokyo and vows to return and complete his subjugation of Ente Isla—that is, if they can find a way back! Powerless in a world without magic, Satan assumes the guise of a human named Sadao Maou and begins working at MgRonald\'s—a local fast-food restaurant—to make ends meet. He soon realizes that his goal of conquering Ente Isla is just not enough as he grows determined to climb the corporate ladder and become the ruler of Earth, one satisfied customer at a time! Whether it\'s part-time work, household chores, or simply trying to pay the rent on time, Hataraku Maou-sama! presents a hilarious view of the most mundane aspects of everyday life, all through the eyes of a hapless demon lord.',
            'aired' => 'Apr 4, 2013 to Jun 27, 2013',
            'image' => '/storage/53a067b64d8c0a1795aacdee98c0354c34cc6990.png'
        ]);

        Anime::create([
            'id' => 3,
            'title' => 'Death Note',
            'episodes' => 37,
            'duration' => 23,
            'score' => 8.63,
            'description' => 'A shinigami, as a god of death, can kill any person—provided they see their victim\'s face and write their victim\'s name in a notebook called a Death Note. One day, Ryuk, bored by the shinigami lifestyle and interested in seeing how a human would use a Death Note, drops one into the human realm. High school student and prodigy Light Yagami stumbles upon the Death Note and—since he deplores the state of the world—tests the deadly notebook by writing a criminal\'s name in it. When the criminal dies immediately following his experiment with the Death Note, Light is greatly surprised and quickly recognizes how devastating the power that has fallen into his hands could be. With this divine capability, Light decides to extinguish all criminals in order to build a new world where crime does not exist and people worship him as a god. Police, however, quickly discover that a serial killer is targeting criminals and, consequently, try to apprehend the culprit. To do this, the Japanese investigators count on the assistance of the best detective in the world: a young and eccentric man known only by the name of L.',
            'aired' => 'Oct 4, 2006 to Jun 27, 2007',
            'image' => '/storage/e234542110b24bd0b50340fbc42b65818ffaed72.png'
        ]);

        Anime::create([
            'id' => 4,
            'title' => 'Soul Eater',
            'episodes' => 51,
            'duration' => 24,
            'score' => 7.9,
            'description' => 'Death City is home to the famous Death Weapon Meister Academy, a technical academy headed by the Shinigami—Lord Death himself. Its mission: to raise "Death Scythes" for the Shinigami to wield against the many evils of their fantastical world. These Death Scythes, however, are not made from physical weapons; rather, they are born from human hybrids who have the ability to transform their bodies into Demon Weapons, and only after they have consumed the souls of 99 evil beings and one witch\'s soul. Soul Eater Evans, a Demon Scythe who only seems to care about what\'s cool, aims to become a Death Scythe with the help of his straight-laced wielder, or meister, Maka Albarn. The contrasting duo work and study alongside the hot headed Black☆Star and his caring weapon Tsubaki, as well as the Shinigami\'s own son, Death the Kid, an obsessive-compulsive dual wielder of twin pistols Patty and Liz. Soul Eater follows these students of Shibusen as they take on missions to collect souls and protect the city from the world\'s threats while working together under the snickering sun to become sounder in mind, body, and soul.',
            'aired' => 'Apr 7, 2008 to Mar 30, 2009',
            'image' => '/storage/971bdc078f8fa93b0552a0731a6c372168de643a.png'
        ]);

        Anime::create([
            'id' => 6,
            'title' => 'Attack on Titan',
            'episodes' => 25,
            'duration' => 24,
            'score' => 8.52,
            'description' => 'Centuries ago, mankind was slaughtered to near extinction by monstrous humanoid creatures called titans, forcing humans to hide in fear behind enormous concentric walls. What makes these giants truly terrifying is that their taste for human flesh is not born out of hunger but what appears to be out of pleasure. To ensure their survival, the remnants of humanity began living within defensive barriers, resulting in one hundred years without a single titan encounter. However, that fragile calm is soon shattered when a colossal titan manages to breach the supposedly impregnable outer wall, reigniting the fight for survival against the man-eating abominations. After witnessing a horrific personal loss at the hands of the invading creatures, Eren Yeager dedicates his life to their eradication by enlisting into the Survey Corps, an elite military unit that combats the merciless humanoids outside the protection of the walls. Based on Hajime Isayama\'s award-winning manga, Shingeki no Kyojin follows Eren, along with his adopted sister Mikasa Ackerman and his childhood friend Armin Arlert, as they join the brutal war against the titans and race to discover a way of defeating them before the last walls are breached.',
            'aired' => 'Apr 7, 2013 to Sep 29, 2013',
            'image' => '/storage/24fa8c797150d117f8be3d84ffaa70990311fae8.png'
        ]);
    }
}
