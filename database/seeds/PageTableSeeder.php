<?php

use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->truncate();
        DB::table('pages')->insert([
            'title'         => 'About',
            'category'      => 'about',
            'description'   => 'The Supply Chain Management Association of the Philippines is the premiere supply
            chain organization in the country. Founded in 1989, it has been at the forefront of the development of supply chain management in the Philippines. It advocates for policy reforms and measures that would increase efficiency and improve processes in supply chain. It communicates to its members through disseminationof industry developments, insights and best practices. Finally, it educates the Filipino supply chain professional through workshops, seminars and fora, leading to world class standards and enabling him tobe globally competitive.',
            'link'          => 'about',
            'state'         => 1,
            'update_by'     => 'Administrator'
        ]);
        DB::table('pages')->insert([
            'title'         => 'Members',
            'category'      => 'members',
            'description'   => 'Join SCMAP and be a part of our efforts to promote and develop supply chain
            management in the Philippines, ultimately leading to our nation\'s development and competitiveness.',
            'link'          => 'members',
            'state'         => 1,
            'update_by'     => 'Administrator'
        ]);
        DB::table('pages')->insert([
            'title'         => 'Events',
            'category'      => 'events',
            'description'   => 'SCMAP organizes events all year round, providing an avenue supply chain professionals
             to gain insight on the latest industry trends, learn of new developments and practices, and network with their colleagues. SCMAP\'s events cater to every supply chain professional, from managers and executives, to supervisors and field workers.',
            'link'          => 'events',
            'state'         => 1,
            'update_by'     => 'Administrator'
        ]);
    }
}
