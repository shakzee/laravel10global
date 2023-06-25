<?php

namespace Database\Seeders;

use App\Models\Subject;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::factory()->count(30)->create();
    //     DB::table('subjects')->insert(
    //         [   [
    //             'name'=>'Laravel',
    //             'class'=>'Beginners',
    //             'price'=>400,
    //             'created_at'=>Carbon::now(),
    //             'updated_at'=>Carbon::now()
    //         ],
    //             [
    //                 'name'=>'Java',
    //                 'class'=>'Beginners',
    //                 'price'=>200,
    //                 'created_at'=>Carbon::now(),
    //                 'updated_at'=>Carbon::now()
    //             ],
    //             [
    //                 'name'=>'Codeigniter',
    //                 'class'=>'Beginners',
    //                 'price'=>100,
    //                 'created_at'=>Carbon::now(),
    //                 'updated_at'=>Carbon::now()

    //             ],
    //             [
    //                 'name'=>'Python',
    //                 'class'=>'Beginners',
    //                 'price'=>250,
    //                 'created_at'=>Carbon::now(),
    //                 'updated_at'=>Carbon::now()

    //             ]
    //         ]
    // );
    }
}
