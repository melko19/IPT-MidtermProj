<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id'=>1,
                'acc_name'=>'Melchizedek regular Account',
                'init_invest'=>15500,
                'start_date'=>'2020-10-19',
                'remarks'=>'Done with normal transaction',
            ],
            [
                'user_id'=>2,
                'acc_name'=>'Andy Jee regular Account',
                'init_invest'=>12500,
                'start_date'=>'2020-04-16',
                'remarks'=>'Done with normal transaction',
            ],
            [
                'user_id'=>3,
                'acc_name'=>'John Ed Paul regular Account',
                'init_invest'=>10500,
                'start_date'=>'2020-02-29',
                'remarks'=>'Done with normal transaction',
            ],
        ];

        foreach($data as $acc){
            \App\Account::create($acc);
        }
    }
}
