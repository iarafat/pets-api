<?php

use App\Pet;
use Illuminate\Database\Seeder;

class PetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pet::insert([
            [
                "name" => "Biscuit",
                "weight" => 10.2,
                "category" => "CAT",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582764166/biscuit_inhtt3.jpg"
            ],
            [
                "name" => "Jungle",
                "weight" => 9.7,
                "category" => "CAT",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582764112/jungle_evdm47.jpg"
            ],
            [
                "name" => "Benji",
                "weight" => 10.9,
                "category" => "CAT",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582764036/benji_rkg884.jpg"
            ],
            [
                "name" => "Beebee",
                "weight" => 13.3,
                "category" => "CAT",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582763988/beebee_oqtgld.jpg"
            ],
            [
                "name" => "Pillow",
                "weight" => 8.3,
                "category" => "CAT",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582764042/pillow_j9yenx.jpg"
            ],
            [
                "name" => "Buddy",
                "weight" => 9.2,
                "category" => "CAT",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582764293/buddy_oln5er.jpg"
            ],
            [
                "name" => "Mini",
                "weight" => 5.2,
                "category" => "CAT",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582764180/mini_stjtkm.jpg"
            ],
            [
                "name" => "Danton",
                "weight" => 50.4,
                "category" => "DOG",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582763990/danton_et1gql.jpg"
            ],
            [
                "name" => "Archy",
                "weight" => 19.9,
                "category" => "DOG",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582763883/archy_yehmk9.jpg"
            ],
            [
                "name" => "Otis",
                "weight" => 50.4,
                "category" => "DOG",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582764030/otis_s6rnrm.jpg"
            ],
            [
                "name" => "Luna",
                "weight" => 75.4,
                "category" => "DOG",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582763994/luna_zdqqlx.jpg"
            ],
            [
                "name" => "Canela",
                "weight" => 100.4,
                "category" => "DOG",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582763877/canela_fwp5mm.jpg"
            ],
            [
                "name" => "Mehla",
                "weight" => 90.3,
                "category" => "DOG",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582764044/mehla_yvsqfb.jpg"
            ],
            [
                "name" => "Rainier McCheddarton",
                "weight" => 70.4,
                "category" => "DOG",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582763878/rainier_yeodlm.jpg"
            ],
            [
                "name" => "Pax",
                "weight" => 52.7,
                "category" => "DOG",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582764041/pax_aj6wqh.jpg"
            ],
            [
                "name" => "Lucie",
                "weight" => 44.7,
                "category" => "DOG",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582763973/lucie_ro5isy.jpg"
            ],
            [
                "name" => "Lazer",
                "weight" => 15.7,
                "category" => "STINGRAY",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582763985/lazer_yrwvzu.jpg"
            ],
            [
                "name" => "Switchblade",
                "weight" => 20.7,
                "category" => "STINGRAY",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582764363/switchblade_emzkx3.jpg"
            ],
            [
                "name" => "Steve",
                "weight" => 20.4,
                "category" => "STINGRAY",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582763991/steve_w7mqee.jpg"
            ],
            [
                "name" => "Pluto",
                "weight" => 66.1,
                "category" => "STINGRAY",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582764104/pluto_sbdj3l.jpg"
            ],
            [
                "name" => "Pip",
                "weight" => 3.7,
                "category" => "RABBIT",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582764136/pip_o0snc2.jpg"
            ],
            [
                "name" => "Sweetums",
                "weight" => 4.6,
                "category" => "RABBIT",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582764027/sweetums_prsppm.jpg"
            ],
            [
                "name" => "Jerry",
                "weight" => 5.5,
                "category" => "RABBIT",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582764083/jerry_drpooy.jpg"
            ],
            [
                "name" => "Jason",
                "weight" => 2.7,
                "category" => "RABBIT",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582764178/jason_yzb3sg.jpg"
            ],
            [
                "name" => "Peep",
                "weight" => 6.5,
                "category" => "RABBIT",
                "photo" => "https://res.cloudinary.com/hzrulbrds/image/upload/v1582764163/peep_g42p7k.jpg"
            ]
        ]);
    }
}
