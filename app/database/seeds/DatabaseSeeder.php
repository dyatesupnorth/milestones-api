<?php


class DatabaseSeeder extends Seeder
{

    public function run()
    {

        // clear our database ------------------------------------------
        DB::table('users')->delete();
        DB::table('tokens')->delete();
        DB::table('reset_keys')->delete();
        DB::table('categories')->delete();
        DB::table('goals')->delete();
        DB::table('milestones')->delete();


        // seed our users table -----------------------

        User::create(array(
            'email' => 'user@user.com',
            'firstname' => 'Dave',
            'lastname' => 'Yates',
            'username' => 'user',
            'password' => Hash::make('password')
        ));

        User::create(array(
            'email' => 'anotheruser@yahoo.com',
            'firstname' => 'A',
            'lastname' => 'User',
            'username' => 'auser',
            'password' => Hash::make('password')
        ));

        Category::create(array(
            'user_id' => '1',
            'category_name' => 'Bucket List'

        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Learn Spanish',
            'percentage' => '0'

        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Learn to play the guitar',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Play guitar live at a venue',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Run a 5k',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Run a 10k',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Run a marathon',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Run a triathlon',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Try archery',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Join a gun club / learn to shoot',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Learn to kick flip',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'learn to wheelie for 100m',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Brew my own beer',
            'percentage' => 100,
            'is_complete' => true


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Make your own wine',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Make your own whiskey',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Learn to whistle with fingers',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Play a round of golf',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'snorkel abroad',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'scuba dive abroad',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Go skiing and snowboarding',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Trek the inca',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'learn to ride a horse',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Go paragliding',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Learn reversi / otello',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'learn backgammon',
            'percentage' => '0'


        ));


        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Start a successful business',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Fly in a hot air balloon',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Sign up for volunteer work',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Buy a drink for a stranger',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Buy a round of drinks for the whole room',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Sing Karaoke',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Walk/Dance barefoot in the rain',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Experience a sunset',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Experience a sunrise',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'See the Northern Lights',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Stargaze',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Plant a tree and watch it grow',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Publish a book',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Public speak in front of 1000+ people',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Throw a mega party',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Learn wine appreciation',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Learn whiskey appreciation',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Start a whiskey collection',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Start a wine collection',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Join a social etiquette class',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Matchmake 2 people.',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Finish degree',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Win a lucky draw.',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Take up dancing',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Learn a martial art',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Travel route 66',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Backpack across at least 10 locations',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Start and maintain a blog for at least a year',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Pack your bags and set off for a random location with no itinerary',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Live in a different country for at least 6 months',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Act in a film (self-production or otherwise)',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Develop a small indie game',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Get featured in the media for something you are proud of',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Teach kids to code',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Teach kids to swim',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Get photography published',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Perform stand up',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Setup a small online photography portfolio',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Organise an outdoor movie marathon',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Organise a big BBQ, with proper BBQ, not just grilling stuff',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Sleep outside in a bivvie that you built yourself',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Learn at least one genuine magic trick',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Compete in a real poker tournament',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Visit vegas',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Get an Australian Cattle Dog / Other suitable apocalypse dog :D',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Knit a scarf',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Create dream home',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Go deep into the heart of Mother Nature',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Read a book on a subject you had never thought of reading',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Volunteer at a hospice',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Fly a (massive) kite',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Contact a company you like just to thank them for their great product/service',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Fall asleep on grassy plains',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Try out vegetarianism for 30 days',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Try veganism for 30 days',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Fold 1,000 origami cranes and give them to someone special',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Conquer your biggest fear',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Go on a meditation retreat',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Build a mobile home',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Travel UK in mobile van home',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Travel to at least 3 european locations in mobile van home',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Experience an OBE (out-of-body experience)',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Start a movement on a cause you believe in',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'See cherry blossoms in Japan',
            'percentage' => '0'


        ));

        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Organize a (mega) picnic outing',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Do something completely crazy and out of character',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Fly first class',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'See the colosseum',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Live in a commune for at least a month',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Catch a fish',
            'percentage' => '0'


        ));

        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Fish from a boat',
            'percentage' => '0'


        ));



        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Hit bull’s-eye on a dartboard',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Hit 180 on a dartboard',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Play a competitive darts match',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Play in a competitive pool tournament',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'play in a competitive snooker tournament',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Score a century in snooker',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Visit Antarctica',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Hold a snake',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Visit a volcano',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Fly a helicopter',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Meet someone you can only dream of meeting',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Ride a roller coaster with kids',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Start a self generating income stream',
            'percentage' => '0'


        ));


        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Drive a supercar',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Trace back family tree',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Fall asleep in a hammock',
            'percentage' => '0'


        ));

        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Learn to somersault',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Visit a really old castle',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Go windsurfing',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Go wind sailing',
            'percentage' => '0'


        ));

        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Act in a play',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Change the world ;)',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Help someone in need',
            'percentage' => '0'


        ));
        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Learn sign language',
            'percentage' => '0'


        ));

        Goal::create(array(
            'category_id' => '1',
            'goal_name' => 'Gain enlightenment',
            'percentage' => '0'


        ));




    }

}