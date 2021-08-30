<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReponsesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reponses')->delete();
        
        \DB::table('reponses')->insert(array (
            0 => 
            array (
                'id' => 38,
                'question_id' => 13,
                'body' => 'Je passe avec prudence',
                'correct' => 1,
                'created_at' => '2021-08-30 12:55:15',
                'updated_at' => '2021-08-30 12:55:15',
            ),
            1 => 
            array (
                'id' => 39,
                'question_id' => 13,
                'body' => 'Je m\'arrête',
                'correct' => 0,
                'created_at' => '2021-08-30 12:55:15',
                'updated_at' => '2021-08-30 12:55:15',
            ),
            2 => 
            array (
                'id' => 40,
                'question_id' => 14,
                'body' => 'Lorsque la chaussée est mouillé',
                'correct' => 0,
                'created_at' => '2021-08-30 12:56:05',
                'updated_at' => '2021-08-30 12:56:05',
            ),
            3 => 
            array (
                'id' => 41,
                'question_id' => 14,
                'body' => 'Lorsque la chaussée est sèche',
                'correct' => 0,
                'created_at' => '2021-08-30 12:56:05',
                'updated_at' => '2021-08-30 12:56:05',
            ),
            4 => 
            array (
                'id' => 42,
                'question_id' => 14,
                'body' => 'Dans les deux cas',
                'correct' => 1,
                'created_at' => '2021-08-30 12:56:07',
                'updated_at' => '2021-08-30 12:56:07',
            ),
            5 => 
            array (
                'id' => 43,
                'question_id' => 15,
                'body' => '1 seconde',
                'correct' => 1,
                'created_at' => '2021-08-30 12:56:36',
                'updated_at' => '2021-08-30 12:56:36',
            ),
            6 => 
            array (
                'id' => 44,
                'question_id' => 15,
                'body' => '5 secondes',
                'correct' => 0,
                'created_at' => '2021-08-30 12:56:36',
                'updated_at' => '2021-08-30 12:56:36',
            ),
            7 => 
            array (
                'id' => 45,
                'question_id' => 15,
                'body' => '3 secondes',
                'correct' => 0,
                'created_at' => '2021-08-30 12:56:36',
                'updated_at' => '2021-08-30 12:56:36',
            ),
            8 => 
            array (
                'id' => 46,
                'question_id' => 16,
                'body' => 'Toxique',
                'correct' => 0,
                'created_at' => '2021-08-30 12:57:07',
                'updated_at' => '2021-08-30 12:57:07',
            ),
            9 => 
            array (
                'id' => 47,
                'question_id' => 16,
                'body' => 'infectueuse',
                'correct' => 0,
                'created_at' => '2021-08-30 12:57:08',
                'updated_at' => '2021-08-30 12:57:08',
            ),
            10 => 
            array (
                'id' => 48,
                'question_id' => 16,
                'body' => 'corrosive',
                'correct' => 1,
                'created_at' => '2021-08-30 12:57:09',
                'updated_at' => '2021-08-30 12:57:09',
            ),
            11 => 
            array (
                'id' => 49,
                'question_id' => 17,
                'body' => 'Avant la voiture noir',
                'correct' => 1,
                'created_at' => '2021-08-30 12:58:01',
                'updated_at' => '2021-08-30 12:58:01',
            ),
            12 => 
            array (
                'id' => 50,
                'question_id' => 17,
                'body' => 'Après la voiture noir',
                'correct' => 0,
                'created_at' => '2021-08-30 12:58:02',
                'updated_at' => '2021-08-30 12:58:02',
            ),
            13 => 
            array (
                'id' => 51,
                'question_id' => 18,
                'body' => 'Oui',
                'correct' => 0,
                'created_at' => '2021-08-30 12:58:29',
                'updated_at' => '2021-08-30 12:58:29',
            ),
            14 => 
            array (
                'id' => 52,
                'question_id' => 18,
                'body' => 'Non',
                'correct' => 1,
                'created_at' => '2021-08-30 12:58:31',
                'updated_at' => '2021-08-30 12:58:31',
            ),
            15 => 
            array (
                'id' => 53,
                'question_id' => 19,
                'body' => 'Oui',
                'correct' => 0,
                'created_at' => '2021-08-30 12:58:55',
                'updated_at' => '2021-08-30 12:58:55',
            ),
            16 => 
            array (
                'id' => 54,
                'question_id' => 19,
                'body' => 'Non',
                'correct' => 1,
                'created_at' => '2021-08-30 12:58:55',
                'updated_at' => '2021-08-30 12:58:55',
            ),
            17 => 
            array (
                'id' => 55,
                'question_id' => 20,
                'body' => 'Oui',
                'correct' => 0,
                'created_at' => '2021-08-30 12:59:18',
                'updated_at' => '2021-08-30 12:59:18',
            ),
            18 => 
            array (
                'id' => 56,
                'question_id' => 20,
                'body' => 'Non',
                'correct' => 1,
                'created_at' => '2021-08-30 12:59:19',
                'updated_at' => '2021-08-30 12:59:19',
            ),
            19 => 
            array (
                'id' => 57,
                'question_id' => 21,
                'body' => 'à 50 m du panneau',
                'correct' => 0,
                'created_at' => '2021-08-30 12:59:51',
                'updated_at' => '2021-08-30 12:59:51',
            ),
            20 => 
            array (
                'id' => 58,
                'question_id' => 21,
                'body' => 'à 150 m du panneau',
                'correct' => 0,
                'created_at' => '2021-08-30 12:59:51',
                'updated_at' => '2021-08-30 12:59:51',
            ),
            21 => 
            array (
                'id' => 59,
                'question_id' => 21,
                'body' => 'à partir du panneau',
                'correct' => 1,
                'created_at' => '2021-08-30 12:59:54',
                'updated_at' => '2021-08-30 12:59:54',
            ),
            22 => 
            array (
                'id' => 60,
                'question_id' => 22,
                'body' => 'un cassis ou un dos d\'âne',
                'correct' => 1,
                'created_at' => '2021-08-30 13:00:24',
                'updated_at' => '2021-08-30 13:00:24',
            ),
            23 => 
            array (
                'id' => 61,
                'question_id' => 22,
                'body' => 'un ralentisseur',
                'correct' => 0,
                'created_at' => '2021-08-30 13:00:24',
                'updated_at' => '2021-08-30 13:00:24',
            ),
            24 => 
            array (
                'id' => 62,
                'question_id' => 22,
                'body' => 'un virage',
                'correct' => 0,
                'created_at' => '2021-08-30 13:00:25',
                'updated_at' => '2021-08-30 13:00:25',
            ),
            25 => 
            array (
                'id' => 63,
                'question_id' => 23,
                'body' => 'Oui',
                'correct' => 0,
                'created_at' => '2021-08-30 13:00:48',
                'updated_at' => '2021-08-30 13:00:48',
            ),
            26 => 
            array (
                'id' => 64,
                'question_id' => 23,
                'body' => 'Non',
                'correct' => 1,
                'created_at' => '2021-08-30 13:00:48',
                'updated_at' => '2021-08-30 13:00:48',
            ),
            27 => 
            array (
                'id' => 65,
                'question_id' => 24,
                'body' => 'Oui',
                'correct' => 0,
                'created_at' => '2021-08-30 13:01:07',
                'updated_at' => '2021-08-30 13:01:07',
            ),
            28 => 
            array (
                'id' => 66,
                'question_id' => 24,
                'body' => 'Non',
                'correct' => 1,
                'created_at' => '2021-08-30 13:01:07',
                'updated_at' => '2021-08-30 13:01:07',
            ),
            29 => 
            array (
                'id' => 67,
                'question_id' => 25,
                'body' => 'je fais un arrêt puis je passe',
                'correct' => 0,
                'created_at' => '2021-08-30 13:01:29',
                'updated_at' => '2021-08-30 13:01:29',
            ),
            30 => 
            array (
                'id' => 68,
                'question_id' => 25,
                'body' => 'je passe sans faire un arrêt',
                'correct' => 1,
                'created_at' => '2021-08-30 13:01:29',
                'updated_at' => '2021-08-30 13:01:29',
            ),
            31 => 
            array (
                'id' => 69,
                'question_id' => 26,
                'body' => 'Je dois céder le passage',
                'correct' => 1,
                'created_at' => '2021-08-30 13:02:37',
                'updated_at' => '2021-08-30 13:02:37',
            ),
            32 => 
            array (
                'id' => 70,
                'question_id' => 26,
                'body' => 'Je passe sans céder le passage',
                'correct' => 0,
                'created_at' => '2021-08-30 13:02:37',
                'updated_at' => '2021-08-30 13:02:37',
            ),
            33 => 
            array (
                'id' => 71,
                'question_id' => 26,
                'body' => 'Je klaxonne et je passe',
                'correct' => 0,
                'created_at' => '2021-08-30 13:02:37',
                'updated_at' => '2021-08-30 13:02:37',
            ),
            34 => 
            array (
                'id' => 72,
                'question_id' => 27,
                'body' => 'Pour lire ma carte routière',
                'correct' => 0,
                'created_at' => '2021-08-30 13:03:01',
                'updated_at' => '2021-08-30 13:03:01',
            ),
            35 => 
            array (
                'id' => 73,
                'question_id' => 27,
                'body' => 'En cas de panne',
                'correct' => 1,
                'created_at' => '2021-08-30 13:03:03',
                'updated_at' => '2021-08-30 13:03:03',
            ),
            36 => 
            array (
                'id' => 74,
                'question_id' => 28,
                'body' => 'le premier',
                'correct' => 1,
                'created_at' => '2021-08-30 13:03:28',
                'updated_at' => '2021-08-30 13:03:28',
            ),
            37 => 
            array (
                'id' => 75,
                'question_id' => 28,
                'body' => 'le deuxième',
                'correct' => 0,
                'created_at' => '2021-08-30 13:03:28',
                'updated_at' => '2021-08-30 13:03:28',
            ),
            38 => 
            array (
                'id' => 76,
                'question_id' => 28,
                'body' => 'le troisième',
                'correct' => 0,
                'created_at' => '2021-08-30 13:03:29',
                'updated_at' => '2021-08-30 13:03:29',
            ),
            39 => 
            array (
                'id' => 77,
                'question_id' => 29,
                'body' => 'le premier',
                'correct' => 1,
                'created_at' => '2021-08-30 13:03:51',
                'updated_at' => '2021-08-30 13:03:51',
            ),
            40 => 
            array (
                'id' => 78,
                'question_id' => 29,
                'body' => 'le deuxième',
                'correct' => 0,
                'created_at' => '2021-08-30 13:03:53',
                'updated_at' => '2021-08-30 13:03:53',
            ),
            41 => 
            array (
                'id' => 79,
                'question_id' => 29,
                'body' => 'le troisième',
                'correct' => 0,
                'created_at' => '2021-08-30 13:03:54',
                'updated_at' => '2021-08-30 13:03:54',
            ),
            42 => 
            array (
                'id' => 80,
                'question_id' => 30,
                'body' => 'je ralentis et je lui cède le passage',
                'correct' => 0,
                'created_at' => '2021-08-30 13:04:21',
                'updated_at' => '2021-08-30 13:04:21',
            ),
            43 => 
            array (
                'id' => 81,
                'question_id' => 30,
                'body' => 'je fait un arrêt avant de lui céder le passage',
                'correct' => 0,
                'created_at' => '2021-08-30 13:04:21',
                'updated_at' => '2021-08-30 13:04:21',
            ),
            44 => 
            array (
                'id' => 82,
                'question_id' => 30,
                'body' => 'je passe sans céder le passage',
                'correct' => 1,
                'created_at' => '2021-08-30 13:04:22',
                'updated_at' => '2021-08-30 13:04:22',
            ),
            45 => 
            array (
                'id' => 83,
                'question_id' => 31,
                'body' => 'uniquement à droite',
                'correct' => 0,
                'created_at' => '2021-08-30 13:04:47',
                'updated_at' => '2021-08-30 13:04:47',
            ),
            46 => 
            array (
                'id' => 84,
                'question_id' => 31,
                'body' => 'à gauche et à droite',
                'correct' => 1,
                'created_at' => '2021-08-30 13:04:47',
                'updated_at' => '2021-08-30 13:04:47',
            ),
            47 => 
            array (
                'id' => 85,
                'question_id' => 31,
                'body' => 'uniquement à gauche',
                'correct' => 0,
                'created_at' => '2021-08-30 13:04:48',
                'updated_at' => '2021-08-30 13:04:48',
            ),
            48 => 
            array (
                'id' => 86,
                'question_id' => 32,
                'body' => 'Oui',
                'correct' => 0,
                'created_at' => '2021-08-30 13:05:09',
                'updated_at' => '2021-08-30 13:05:09',
            ),
            49 => 
            array (
                'id' => 87,
                'question_id' => 32,
                'body' => 'Non',
                'correct' => 1,
                'created_at' => '2021-08-30 13:05:09',
                'updated_at' => '2021-08-30 13:05:09',
            ),
            50 => 
            array (
                'id' => 88,
                'question_id' => 33,
                'body' => 'Ma voiture',
                'correct' => 1,
                'created_at' => '2021-08-30 13:05:30',
                'updated_at' => '2021-08-30 13:05:30',
            ),
            51 => 
            array (
                'id' => 89,
                'question_id' => 33,
                'body' => 'Le camion',
                'correct' => 0,
                'created_at' => '2021-08-30 13:05:30',
                'updated_at' => '2021-08-30 13:05:30',
            ),
            52 => 
            array (
                'id' => 90,
                'question_id' => 34,
                'body' => '1 mètre',
                'correct' => 1,
                'created_at' => '2021-08-30 13:05:56',
                'updated_at' => '2021-08-30 13:05:56',
            ),
            53 => 
            array (
                'id' => 91,
                'question_id' => 34,
                'body' => '1.5 mètres',
                'correct' => 0,
                'created_at' => '2021-08-30 13:05:56',
                'updated_at' => '2021-08-30 13:05:56',
            ),
            54 => 
            array (
                'id' => 92,
                'question_id' => 34,
                'body' => '3 mètres',
                'correct' => 0,
                'created_at' => '2021-08-30 13:05:56',
                'updated_at' => '2021-08-30 13:05:56',
            ),
            55 => 
            array (
                'id' => 93,
                'question_id' => 35,
                'body' => 'Ma voiture',
                'correct' => 0,
                'created_at' => '2021-08-30 13:06:22',
                'updated_at' => '2021-08-30 13:06:22',
            ),
            56 => 
            array (
                'id' => 94,
                'question_id' => 35,
                'body' => 'La voiture blanche',
                'correct' => 1,
                'created_at' => '2021-08-30 13:06:22',
                'updated_at' => '2021-08-30 13:06:22',
            ),
            57 => 
            array (
                'id' => 95,
                'question_id' => 35,
                'body' => 'La voiture noire',
                'correct' => 0,
                'created_at' => '2021-08-30 13:06:22',
                'updated_at' => '2021-08-30 13:06:22',
            ),
            58 => 
            array (
                'id' => 96,
                'question_id' => 36,
                'body' => 'D’un retrait de 6 points',
                'correct' => 0,
                'created_at' => '2021-08-30 13:06:51',
                'updated_at' => '2021-08-30 13:06:51',
            ),
            59 => 
            array (
                'id' => 97,
                'question_id' => 36,
                'body' => 'D’un emprisonnement d’un mois au maximum',
                'correct' => 0,
                'created_at' => '2021-08-30 13:06:51',
                'updated_at' => '2021-08-30 13:06:51',
            ),
            60 => 
            array (
                'id' => 98,
                'question_id' => 36,
                'body' => 'D’une amende maximale de 200 dinars',
                'correct' => 1,
                'created_at' => '2021-08-30 13:06:52',
                'updated_at' => '2021-08-30 13:06:52',
            ),
            61 => 
            array (
                'id' => 99,
                'question_id' => 37,
                'body' => 'La mise du véhicule en fourrière',
                'correct' => 0,
                'created_at' => '2021-08-30 13:07:16',
                'updated_at' => '2021-08-30 13:07:16',
            ),
            62 => 
            array (
                'id' => 100,
                'question_id' => 37,
                'body' => 'Le retrait de 3 points',
                'correct' => 0,
                'created_at' => '2021-08-30 13:07:17',
                'updated_at' => '2021-08-30 13:07:17',
            ),
            63 => 
            array (
                'id' => 101,
                'question_id' => 37,
                'body' => 'Le retrait immédiat du permis de conduire',
                'correct' => 1,
                'created_at' => '2021-08-30 13:07:18',
                'updated_at' => '2021-08-30 13:07:18',
            ),
            64 => 
            array (
                'id' => 102,
                'question_id' => 38,
                'body' => 'Appuyer à fond et ne pas relâcher la pression',
                'correct' => 1,
                'created_at' => '2021-08-30 13:07:42',
                'updated_at' => '2021-08-30 13:07:42',
            ),
            65 => 
            array (
                'id' => 103,
                'question_id' => 38,
                'body' => 'Appuyer d’une manière interrompue',
                'correct' => 0,
                'created_at' => '2021-08-30 13:07:43',
                'updated_at' => '2021-08-30 13:07:43',
            ),
            66 => 
            array (
                'id' => 104,
                'question_id' => 38,
                'body' => 'Appuyer à fond et utiliser les feux de détresse',
                'correct' => 0,
                'created_at' => '2021-08-30 13:07:43',
                'updated_at' => '2021-08-30 13:07:43',
            ),
            67 => 
            array (
                'id' => 105,
                'question_id' => 39,
                'body' => 'En cas d\'asphyxie',
                'correct' => 0,
                'created_at' => '2021-08-30 13:08:05',
                'updated_at' => '2021-08-30 13:08:05',
            ),
            68 => 
            array (
                'id' => 106,
                'question_id' => 39,
                'body' => 'En cas d\'hémorragie abondante',
                'correct' => 0,
                'created_at' => '2021-08-30 13:08:05',
                'updated_at' => '2021-08-30 13:08:05',
            ),
            69 => 
            array (
                'id' => 107,
                'question_id' => 39,
                'body' => 'Si le sauveteur est seul en face de plusieurs blessures',
                'correct' => 1,
                'created_at' => '2021-08-30 13:08:05',
                'updated_at' => '2021-08-30 13:08:05',
            ),
            70 => 
            array (
                'id' => 108,
                'question_id' => 40,
                'body' => 'ne change pas',
                'correct' => 0,
                'created_at' => '2021-08-30 13:08:29',
                'updated_at' => '2021-08-30 13:08:29',
            ),
            71 => 
            array (
                'id' => 109,
                'question_id' => 40,
                'body' => 'augmente',
                'correct' => 0,
                'created_at' => '2021-08-30 13:08:30',
                'updated_at' => '2021-08-30 13:08:30',
            ),
            72 => 
            array (
                'id' => 110,
                'question_id' => 40,
                'body' => 'diminue',
                'correct' => 1,
                'created_at' => '2021-08-30 13:08:30',
                'updated_at' => '2021-08-30 13:08:30',
            ),
            73 => 
            array (
                'id' => 111,
                'question_id' => 41,
                'body' => 'Augmente la distance de freinage',
                'correct' => 1,
                'created_at' => '2021-08-30 13:08:52',
                'updated_at' => '2021-08-30 13:08:52',
            ),
            74 => 
            array (
                'id' => 112,
                'question_id' => 41,
                'body' => 'Diminue la distance de freinage',
                'correct' => 0,
                'created_at' => '2021-08-30 13:08:52',
                'updated_at' => '2021-08-30 13:08:52',
            ),
            75 => 
            array (
                'id' => 113,
                'question_id' => 41,
                'body' => 'N’a pas d’impact sur la distance de freinage',
                'correct' => 0,
                'created_at' => '2021-08-30 13:08:53',
                'updated_at' => '2021-08-30 13:08:53',
            ),
            76 => 
            array (
                'id' => 114,
                'question_id' => 42,
                'body' => '27 m',
                'correct' => 0,
                'created_at' => '2021-08-30 13:09:14',
                'updated_at' => '2021-08-30 13:09:14',
            ),
            77 => 
            array (
                'id' => 115,
                'question_id' => 42,
                'body' => '81 m',
                'correct' => 1,
                'created_at' => '2021-08-30 13:09:15',
                'updated_at' => '2021-08-30 13:09:15',
            ),
            78 => 
            array (
                'id' => 116,
                'question_id' => 42,
                'body' => '120 m',
                'correct' => 0,
                'created_at' => '2021-08-30 13:09:15',
                'updated_at' => '2021-08-30 13:09:15',
            ),
        ));
        
        
    }
}