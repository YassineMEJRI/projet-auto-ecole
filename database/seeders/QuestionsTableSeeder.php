<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('questions')->delete();
        
        \DB::table('questions')->insert(array (
            0 => 
            array (
                'id' => 13,
                'body' => 'Pour tourner à droite',
                'image' => 'qMzzKjcfmfvzBuHDymu7ORhiq54zjQaBWtdN9R4u.gif',
                'created_at' => '2021-08-30 12:55:15',
                'updated_at' => '2021-08-30 12:55:15',
            ),
            1 => 
            array (
                'id' => 14,
                'body' => 'Je dois tenir compte de ce panneau uniquement',
                'image' => 'MveqLVEtcp728cd54ZnDBPUNyAdZ23YpxJEylHsW.jpg',
                'created_at' => '2021-08-30 12:56:04',
                'updated_at' => '2021-08-30 12:56:04',
            ),
            2 => 
            array (
                'id' => 15,
                'body' => 'Le temps de réaction chez une personne en bonne santé dure en moyenne',
                'image' => 'DaMRkU0UwqQofaA7yTqDFHQI3TylDsfz0qVsm1Hu.jpg',
                'created_at' => '2021-08-30 12:56:36',
                'updated_at' => '2021-08-30 12:56:36',
            ),
            3 => 
            array (
                'id' => 16,
                'body' => 'Cette étiquette annonce que ce véhicule transparte une matière',
                'image' => 'ZRcLC2eaJO4gvOmtTaRPcytUGhs8nlCLLIeu5v7J.jpg',
                'created_at' => '2021-08-30 12:57:05',
                'updated_at' => '2021-08-30 12:57:05',
            ),
            4 => 
            array (
                'id' => 17,
                'body' => 'Je m\'introduit sur l\'anneau',
                'image' => 'XyKeFbBbHKyM8qf6XjU78aM30u1gpoLni0YRAWNJ.jpg',
                'created_at' => '2021-08-30 12:58:01',
                'updated_at' => '2021-08-30 12:58:01',
            ),
            5 => 
            array (
                'id' => 18,
                'body' => 'Ce véhicule est prioritaire lorsqu\'il utilise ses avertisseurs lumineux',
                'image' => '2CAk4F3Y2B9JFOXbwYan4OXLoyL3nm8lYUkeDPdF.jpg',
                'created_at' => '2021-08-30 12:58:27',
                'updated_at' => '2021-08-30 12:58:27',
            ),
            6 => 
            array (
                'id' => 19,
                'body' => 'Je dépasse cette voiture par la droite',
                'image' => 'cmw9vg9ToPbDLVHTOIt2LVDZfzeHJ6V6Du8dWnSS.gif',
                'created_at' => '2021-08-30 12:58:55',
                'updated_at' => '2021-08-30 12:58:55',
            ),
            7 => 
            array (
                'id' => 20,
                'body' => 'Je vais aborder une rue à sens unique',
                'image' => 'uDonew9h3Lgg1epwtgV11nIhD6FvCh0ZdiOiJMdZ.jpg',
                'created_at' => '2021-08-30 12:59:17',
                'updated_at' => '2021-08-30 12:59:17',
            ),
            8 => 
            array (
                'id' => 21,
                'body' => 'La signalisation indique que la circulation est à double sens',
                'image' => 'vV6kZNw36sNqYIjW4WYSYMcUiZbHn06wQGQ7Rk7c.jpg',
                'created_at' => '2021-08-30 12:59:51',
                'updated_at' => '2021-08-30 12:59:51',
            ),
            9 => 
            array (
                'id' => 22,
                'body' => 'La signalisation annonce que je vais rencontrer',
                'image' => '9cxniO9bT0YkAeJGFmZs6Poub5ndtr4B2tm1ujoI.jpg',
                'created_at' => '2021-08-30 13:00:24',
                'updated_at' => '2021-08-30 13:00:24',
            ),
            10 => 
            array (
                'id' => 23,
                'body' => 'Je peux stationner derrière cette voiture',
                'image' => 'iMZkW0oGAkeKSMxDPUolkOWwX6FOVoC1iQzaEHwT.jpg',
                'created_at' => '2021-08-30 13:00:47',
                'updated_at' => '2021-08-30 13:00:47',
            ),
            11 => 
            array (
                'id' => 24,
                'body' => 'La signalisation indique que l\'arrêt et le stationnement est interdit uniquement aux véhicules de transport de marchandise',
                'image' => 'sdPe1fdOhIsO1OfkeTwvh9pd5CDJeHYnLflAXUgy.jpg',
                'created_at' => '2021-08-30 13:01:06',
                'updated_at' => '2021-08-30 13:01:06',
            ),
            12 => 
            array (
                'id' => 25,
                'body' => 'Dans cette situation, pour aller tout droit',
                'image' => 'ECy943BQvpHIdjtXTyvZg0wqZ7yfb2cm9WJ4sxrd.jpg',
                'created_at' => '2021-08-30 13:01:29',
                'updated_at' => '2021-08-30 13:01:29',
            ),
            13 => 
            array (
                'id' => 26,
                'body' => 'A cet endroit étroit de la chaussée',
                'image' => 'kf47XTUvtpZD3i9qz93JIE1Ek2AEyptJiIfKs5Fs.jpg',
                'created_at' => '2021-08-30 13:02:37',
                'updated_at' => '2021-08-30 13:02:37',
            ),
            14 => 
            array (
                'id' => 27,
                'body' => 'Sur autoroute, comme cette voiture, je peux faire un arrêt',
                'image' => 'zBMrbJaIwITuxTTmQeXVwB5CXqpjP5lwvBk6NdxR.jpg',
                'created_at' => '2021-08-30 13:03:01',
                'updated_at' => '2021-08-30 13:03:01',
            ),
            15 => 
            array (
                'id' => 28,
                'body' => 'Pour aller tout droit, je passe',
                'image' => 'O8gcaIRTIN67FBgf3NCZvIZJNJMuWU0EbW4748G4.gif',
                'created_at' => '2021-08-30 13:03:28',
                'updated_at' => '2021-08-30 13:03:28',
            ),
            16 => 
            array (
                'id' => 29,
                'body' => 'Pour tourner à droite , je passe',
                'image' => 'Zix5VwbZ1Jd4vN62fb7Bkupu2vcpzcn8IRDHxRKB.jpg',
                'created_at' => '2021-08-30 13:03:51',
                'updated_at' => '2021-08-30 13:03:51',
            ),
            17 => 
            array (
                'id' => 30,
                'body' => 'Ce véhicule va quitter cette station de service',
                'image' => 'Af9AYkqMSeFjD9g9QcEcQ6sYLUTrj7RKcUBpRAhf.jpg',
                'created_at' => '2021-08-30 13:04:21',
                'updated_at' => '2021-08-30 13:04:21',
            ),
            18 => 
            array (
                'id' => 31,
                'body' => 'Avant d\'aborder cette chaussée, je dois céder le passage',
                'image' => 'fdYDfw0dKZyrjgu2bkv7c3sXoffWgQD6g7hFvmG3.jpg',
                'created_at' => '2021-08-30 13:04:47',
                'updated_at' => '2021-08-30 13:04:47',
            ),
            19 => 
            array (
                'id' => 32,
                'body' => 'Cette voiture roule à une vitesse de 70 km/h. je peux la dépasser',
                'image' => 'HxZlSgsRnWzg0kNbEX5tn6F8HNxcHWhOCllUZNZN.jpg',
                'created_at' => '2021-08-30 13:05:07',
                'updated_at' => '2021-08-30 13:05:07',
            ),
            20 => 
            array (
                'id' => 33,
                'body' => 'Le croisement est difficile. Qui passe le premier ?',
                'image' => '1DHjBqsXEYnRz3rg0WveHhcqcdJlhF3eHxLrvQV2.jpg',
                'created_at' => '2021-08-30 13:05:28',
                'updated_at' => '2021-08-30 13:05:28',
            ),
            21 => 
            array (
                'id' => 34,
                'body' => 'Le chargement doit être signalé s’il dépasse l’arrière du véhicule de',
                'image' => 'kUiMguJaXNIDuy3j20PpEtYC6n8WfqdxYU1ZONkP.jpg',
                'created_at' => '2021-08-30 13:05:55',
                'updated_at' => '2021-08-30 13:05:55',
            ),
            22 => 
            array (
                'id' => 35,
                'body' => 'Dans cette situation qui passe le dernier ?',
                'image' => 'ZF3r72vJzPQcAJTkv77gWoJlrSXKwem8p5FF3Dv0.gif',
                'created_at' => '2021-08-30 13:06:22',
                'updated_at' => '2021-08-30 13:06:22',
            ),
            23 => 
            array (
                'id' => 36,
                'body' => 'Tout conducteur qui ne respecte pas les signaux de l’agent de police est puni',
                'image' => 'EYUqdtBqSRFlYDoXNDp7MBYRLWwanq5KujfxqY5A.jpg',
                'created_at' => '2021-08-30 13:06:51',
                'updated_at' => '2021-08-30 13:06:51',
            ),
            24 => 
            array (
                'id' => 37,
                'body' => 'Le refus de se soumettre à la procédure relative à la preuve de l\'état alcoolique entraîne',
                'image' => 'EQYeZKGOQmgldvhpjMCPv65WUzlwVbRp1Ma8e7CI.jpg',
                'created_at' => '2021-08-30 13:07:15',
                'updated_at' => '2021-08-30 13:07:15',
            ),
            25 => 
            array (
                'id' => 38,
                'body' => 'Pour un véhicule équipé d’un système anti- blocage ABS , lors d’un freinage d’urgence , le conducteur doit',
                'image' => 'JLK9c8jmXjzBIXnSMBPmpScqpGfAJBRjPhQVXEyR.jpg',
                'created_at' => '2021-08-30 13:07:40',
                'updated_at' => '2021-08-30 13:07:40',
            ),
            26 => 
            array (
                'id' => 39,
                'body' => 'Le Garrot doit être utilisé',
                'image' => 'INh2aE2Y86lzKI82B00rA0cvdvfxYxSp75zwoQLn.jpg',
                'created_at' => '2021-08-30 13:08:05',
                'updated_at' => '2021-08-30 13:08:05',
            ),
            27 => 
            array (
                'id' => 40,
                'body' => 'Par temps de pluie , l’adhérence du véhicule',
                'image' => 'b5RmUQxdiZGXy4Od9kohVwnozLueXaggiexYqrYn.jpg',
                'created_at' => '2021-08-30 13:08:29',
                'updated_at' => '2021-08-30 13:08:29',
            ),
            28 => 
            array (
                'id' => 41,
                'body' => 'L’usure des amortisseurs',
                'image' => 'jekMiDMKk0rTQfjJVwZOJg4sr1uuExdJow9sIgSF.jpg',
                'created_at' => '2021-08-30 13:08:50',
                'updated_at' => '2021-08-30 13:08:50',
            ),
            29 => 
            array (
                'id' => 42,
                'body' => 'Ma vitesse est 90 km/h , la distance d’arrêt serais',
                'image' => 'Eimc1ySeln6VpGqsEk6RwmBk21g2GPKz9H8StGd7.jpg',
                'created_at' => '2021-08-30 13:09:13',
                'updated_at' => '2021-08-30 13:09:13',
            ),
        ));
        
        
    }
}