<?php

namespace App\Models;

class Movie
{

    private static $movieData = [
        [
            'id' => 'tt1746090',
            'judul' => 'Equalizer 3',
            'sinopsis' => 'Robert McCall finds himself at home in Southern Italy but he discovers his friends are under the control of local crime bosses. As events turn deadly, McCall knows what he has to do: become his friends protector by taking on the mafia.',
            'tahun' => 2023,
            'pemain' => ['Denzel Washington', 'Dakota Fanning', 'Eugenio Mastrandrea'],
            'foto_sampul' => 'equalizer.jpg',
            'rating' => 4.5,
        ],
        [
            'id' => 'tt2567856',
            'judul' => 'Mission: Impossible - Dead Reckoning Part One',
            'sinopsis' => 'Ethan Hunt and his IMF team must track down a dangerous weapon before it falls into the wrong hands.',
            'tahun' => 2023,
            'pemain' => ['Tom Cruise', 'Hayley Atwell', 'Ving Rhames'],
            'foto_sampul' => 'mission-imposible.jpg',
            'rating' => 4.5,
        ],
        [
            'id' => 'tt1745564',
            'judul' => 'Openheimer',
            'sinopsis' => 'The story of American scientist, J. Robert Oppenheimer, and his role in the development of the atomic bomb.',
            'tahun' => 2023,
            'pemain' => ['	Cillian Murphy', 'Emily Blunt', 'Robert Downey Jr.'],
            'foto_sampul' => 'openheimer.jpg',
            'rating' => 6.5,
        ],
        [
            'id' => 'tt1745960',
            'judul' => 'Top Gun: Maverick',
            'sinopsis' => 'After thirty years, Maverick is still pushing the envelope as a top naval aviator, but must confront ghosts of his past when he leads TOP GUNs elite graduates on a mission that demands the ultimate sacrifice from those chosen to fly it.',
            'tahun' => 2022,
            'pemain' => ['Tom Cruise', 'Jennifer Connelly', 'Miles Teller'],
            'foto_sampul' => 'top-gun.jpg',
            'rating' => 8.6,
        ],
        [
            'id' => 'tt174587',
            'judul' => 'Reunion',
            'sinopsis' => 'Sam and Leo Cleary have grown up hating each other, and neither likes their juvenile delinquent kid brother, Douglas, to whom they ve only recently been introduced. The sons share the same father, a womanizing drunk, but all have different mothers',
            'tahun' => 2012,
            'pemain' => ['Amay Smart', 'Jennifer Connelly', 'Miles Teller'],
            'foto_sampul' => 'reunion.png',
            'rating' => 6.6,
        ],
        [
            'id' => 'tt174554',
            'judul' => 'yakuza weapon',
            'sinopsis' =>'After his father is killed, a young yakuza comes back to Japan for revenge - and a machine gun for an arm.',
            'tahun' => 2011,
            'pemain' => ['Cay Izumi', 'Tadanobu Asano', 'Takeshi Kaneshiro'],
            'foto_sampul' => 'yakuza.png',
            'rating' => 9.8,
        ],
        [
            'id' => 'tt1746090',
            'judul' => 'Equalizer 3',
            'sinopsis' => 'Robert McCall finds himself at home in Southern Italy but he discovers his friends are under the control of local crime bosses. As events turn deadly, McCall knows what he has to do: become his friends protector by taking on the mafia.',
            'tahun' => 2023,
            'pemain' => ['Denzel Washington', 'Dakota Fanning', 'Eugenio Mastrandrea'],
            'foto_sampul' => 'equalizer.jpg',
            'rating' => 8.5,
        ],
        [
            'id' => 'tt2567856',
            'judul' => 'Mission: Impossible - Dead Reckoning Part One',
            'sinopsis' => 'Ethan Hunt and his IMF team must track down a dangerous weapon before it falls into the wrong hands.',
            'tahun' => 2023,
            'pemain' => ['Tom Cruise', 'Hayley Atwell', 'Ving Rhames'],
            'foto_sampul' => 'mission-imposible.jpg',
            'rating' => 7.5,
        ],
        [
            'id' => 'tt1745564',
            'judul' => 'Openheimer',
            'sinopsis' => 'The story of American scientist, J. Robert Oppenheimer, and his role in the development of the atomic bomb.',
            'tahun' => 2023,
            'pemain' => ['	Cillian Murphy', 'Emily Blunt', 'Robert Downey Jr.'],
            'foto_sampul' => 'openheimer.jpg',
            'rating' => 9.5,
        ],
        [
            'id' => 'tt1745960',
            'judul' => 'Top Gun: Maverick',
            'sinopsis' => 'After thirty years, Maverick is still pushing the envelope as a top naval aviator, but must confront ghosts of his past when he leads TOP GUNs elite graduates on a mission that demands the ultimate sacrifice from those chosen to fly it.',
            'tahun' => 2022,
            'pemain' => ['Tom Cruise', 'Jennifer Connelly', 'Miles Teller'],
            'foto_sampul' => 'top-gun.jpg',
            'rating' => 8.6,
        ],
        [
            'id' => 'tt174587',
            'judul' => 'Reunion',
            'sinopsis' => 'Sam and Leo Cleary have grown up hating each other, and neither likes their juvenile delinquent kid brother, Douglas, to whom they ve only recently been introduced. The sons share the same father, a womanizing drunk, but all have different mothers',
            'tahun' => 2012,
            'pemain' => ['Amay Smart', 'Jennifer Connelly', 'Miles Teller'],
            'foto_sampul' => 'reunion.png',
            'rating' => 6.6,
        ],
        [
            'id' => 'tt174554',
            'judul' => 'yakuza weapon',
            'sinopsis' =>'After his father is killed, a young yakuza comes back to Japan for revenge - and a machine gun for an arm.',
            'tahun' => 2011,
            'pemain' => ['Cay Izumi', 'Tadanobu Asano', 'Takeshi Kaneshiro'],
            'foto_sampul' => 'yakuza.png',
            'rating' => 9.8,
        ],
        [
            'id' => 'tt1746090',
            'judul' => 'Equalizer 3',
            'sinopsis' => 'Robert McCall finds himself at home in Southern Italy but he discovers his friends are under the control of local crime bosses. As events turn deadly, McCall knows what he has to do: become his friends protector by taking on the mafia.',
            'tahun' => 2023,
            'pemain' => ['Denzel Washington', 'Dakota Fanning', 'Eugenio Mastrandrea'],
            'foto_sampul' => 'equalizer.jpg',
            'rating' => 8.5,
        ],
        [
            'id' => 'tt2567856',
            'judul' => 'Mission: Impossible - Dead Reckoning Part One',
            'sinopsis' => 'Ethan Hunt and his IMF team must track down a dangerous weapon before it falls into the wrong hands.',
            'tahun' => 2023,
            'pemain' => ['Tom Cruise', 'Hayley Atwell', 'Ving Rhames'],
            'foto_sampul' => 'mission-imposible.jpg',
            'rating' => 7.5,
        ],
        [
            'id' => 'tt1745564',
            'judul' => 'Openheimer',
            'sinopsis' => 'The story of American scientist, J. Robert Oppenheimer, and his role in the development of the atomic bomb.',
            'tahun' => 2023,
            'pemain' => ['	Cillian Murphy', 'Emily Blunt', 'Robert Downey Jr.'],
            'foto_sampul' => 'openheimer.jpg',
            'rating' => 9.5,
        ],
        [
            'id' => 'tt1745960',
            'judul' => 'Top Gun: Maverick',
            'sinopsis' => 'After thirty years, Maverick is still pushing the envelope as a top naval aviator, but must confront ghosts of his past when he leads TOP GUNs elite graduates on a mission that demands the ultimate sacrifice from those chosen to fly it.',
            'tahun' => 2022,
            'pemain' => ['Tom Cruise', 'Jennifer Connelly', 'Miles Teller'],
            'foto_sampul' => 'top-gun.jpg',
            'rating' => 8.6,
        ],
        [
            'id' => 'tt174587',
            'judul' => 'Reunion',
            'sinopsis' => 'Sam and Leo Cleary have grown up hating each other, and neither likes their juvenile delinquent kid brother, Douglas, to whom they ve only recently been introduced. The sons share the same father, a womanizing drunk, but all have different mothers',
            'tahun' => 2012,
            'pemain' => ['Amay Smart', 'Jennifer Connelly', 'Miles Teller'],
            'foto_sampul' => 'reunion.png',
            'rating' => 6.6,
        ],
        [
            'id' => 'tt174554',
            'judul' => 'yakuza weapon',
            'sinopsis' =>'After his father is killed, a young yakuza comes back to Japan for revenge - and a machine gun for an arm.',
            'tahun' => 2011,
            'pemain' => ['Cay Izumi', 'Tadanobu Asano', 'Takeshi Kaneshiro'],
            'foto_sampul' => 'yakuza.png',
            'rating' => 9.8,
        ],
        [
            'id' => 'tt1746090',
            'judul' => 'Equalizer 3',
            'sinopsis' => 'Robert McCall finds himself at home in Southern Italy but he discovers his friends are under the control of local crime bosses. As events turn deadly, McCall knows what he has to do: become his friends protector by taking on the mafia.',
            'tahun' => 2023,
            'pemain' => ['Denzel Washington', 'Dakota Fanning', 'Eugenio Mastrandrea'],
            'foto_sampul' => 'equalizer.jpg',
            'rating' => 8.5,
        ],
        [
            'id' => 'tt2567856',
            'judul' => 'Mission: Impossible - Dead Reckoning Part One',
            'sinopsis' => 'Ethan Hunt and his IMF team must track down a dangerous weapon before it falls into the wrong hands.',
            'tahun' => 2023,
            'pemain' => ['Tom Cruise', 'Hayley Atwell', 'Ving Rhames'],
            'foto_sampul' => 'mission-imposible.jpg',
            'rating' => 7.5,
        ],
        [
            'id' => 'tt1745564',
            'judul' => 'Openheimer',
            'sinopsis' => 'The story of American scientist, J. Robert Oppenheimer, and his role in the development of the atomic bomb.',
            'tahun' => 2023,
            'pemain' => ['	Cillian Murphy', 'Emily Blunt', 'Robert Downey Jr.'],
            'foto_sampul' => 'openheimer.jpg',
            'rating' => 9.5,
        ],
        [
            'id' => 'tt1745960',
            'judul' => 'Top Gun: Maverick',
            'sinopsis' => 'After thirty years, Maverick is still pushing the envelope as a top naval aviator, but must confront ghosts of his past when he leads TOP GUNs elite graduates on a mission that demands the ultimate sacrifice from those chosen to fly it.',
            'tahun' => 2022,
            'pemain' => ['Tom Cruise', 'Jennifer Connelly', 'Miles Teller'],
            'foto_sampul' => 'top-gun.jpg',
            'rating' => 8.6,
        ],
        [
            'id' => 'tt174587',
            'judul' => 'Reunion',
            'sinopsis' => 'Sam and Leo Cleary have grown up hating each other, and neither likes their juvenile delinquent kid brother, Douglas, to whom they ve only recently been introduced. The sons share the same father, a womanizing drunk, but all have different mothers',
            'tahun' => 2012,
            'pemain' => ['Amay Smart', 'Jennifer Connelly', 'Miles Teller'],
            'foto_sampul' => 'reunion.png',
            'rating' => 6.6,
        ],
        [
            'id' => 'tt174554',
            'judul' => 'yakuza weapon',
            'sinopsis' =>'After his father is killed, a young yakuza comes back to Japan for revenge - and a machine gun for an arm.',
            'tahun' => 2011,
            'pemain' => ['Cay Izumi', 'Tadanobu Asano', 'Takeshi Kaneshiro'],
            'foto_sampul' => 'yakuza.png',
            'rating' => 9.8,
        ],
    ];

    public static function all(){
        // pakai method collection
        return collect(self::$movieData);
    }

    public static function find($id){
        // panggil method all()
        $movie = static::all();
        return $movie->firstWhere('id', $id);
    }
    public static function search($query)
    {
    return collect(self::$movieData)->filter(function ($movie) use ($query) {
        return stripos($movie['judul'], $query) !== false || stripos($movie['sinopsis'], $query) !== false;
    })->values();
    }



}
