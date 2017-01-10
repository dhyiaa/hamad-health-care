<?php

use Illuminate\Database\Seeder;
use  \App\partner;
class partners_seeder extends Seeder
{
    public function run()
    {
        for( $i=1 ; $i<11 ; $i++ )
        {
            $par =  new  partner ;
            $par->img=$i.'.png';
            $par->ar_title=str_random(10);
            $par->ar_more_info=str_random(10);
            $par->al_title=str_random(10);
            $par->al_more_info=str_random(10);
            $par->save();
        }
    }
}
