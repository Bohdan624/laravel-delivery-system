<?php

use Illuminate\Database\Seeder;

class HomeDeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('delivery_orders')->delete();

		DB::table('delivery_orders')->insert([
            ['id' => '1', 'driver_id' => null, 'status' => 'new', 'customer_name' => 'Erica Paige', 'customer_phone_number' => '+61-455-598-815', 'estimate_time' => '1.5 hours', 'fee' => 30.00, 'currency_code' => 'AUD', 'pick_up_location' => '264 Ella Rue, Haleymouth, NSW 2316', 'pick_up_latitude' => '5', 'pick_up_longitude' => '2', 'drop_off_location' => '331 Nikolaus Circle, Estellshire, NSW 2927','drop_off_latitude' => '-6.188892', 'drop_off_longitude' => '-1.175471'],
            ['id' => '2', 'driver_id' => null, 'status' => 'new', 'customer_name' => 'Boyce Sandford', 'customer_phone_number' => '+61-455-580-469',  'estimate_time' => '2.5 hours', 'fee' => 30.00, 'currency_code' => 'AUD', 'pick_up_location' => '930B Dicki Green, Port Waltonside, SA 2612', 'pick_up_latitude' => '5', 'pick_up_longitude' => '1', 'drop_off_location' => '76 / 27 Bayer Upper, St. Marietta, WA 2920','drop_off_latitude' => '24.918235', 'drop_off_longitude' => '69.171242'],
            ['id' => '3', 'driver_id' => null, 'status' => 'new', 'customer_name' => 'Maverick Breckenridge', 'customer_phone_number' => '+61-455-541-107',  'estimate_time' => '3 hours', 'fee' => 30.00, 'currency_code' => 'AUD', 'pick_up_location' => '71B Marina Parklands, Jeanneville, ACT 2606', 'pick_up_latitude' => '5', 'pick_up_longitude' => '4', 'drop_off_location' => '1 / 67 Jaiden Crossing, Brandyshire, ACT 2693','drop_off_latitude' => '-87.521518', 'drop_off_longitude' => '-106.965837'],
            ['id' => '4', 'driver_id' => null, 'status' => 'new', 'customer_name' => 'Newton Christians', 'customer_phone_number' => '+61-455-534-200',  'estimate_time' => '2.5 hours', 'fee' => 30.00, 'currency_code' => 'AUD', 'pick_up_location' => '920 Steve Roadside, New Hymanburgh, VIC 2946', 'pick_up_latitude' => '5', 'pick_up_longitude' => '3', 'drop_off_location' => '2 Kutch Cruiseway, Gaylordfurt, QLD 2134','drop_off_latitude' => '-42.800934', 'drop_off_longitude' => '-2.086146'],
            ['id' => '5', 'driver_id' => null, 'status' => 'new', 'customer_name' => 'Edwin Tirrell', 'customer_phone_number' => '+61-455-558-587',  'estimate_time' => '1.6 hours', 'fee' => 30.00, 'currency_code' => 'AUD', 'pick_up_location' => '52 Gilbert Frontage, West Earlineside, VIC 2360', 'pick_up_latitude' => '5', 'pick_up_longitude' => '5', 'drop_off_location' => '3C Wiegand Triangle, Lake Billfort, QLD 2909','drop_off_latitude' => '42.198488', 'drop_off_longitude' => '-67.905955'],
            ['id' => '6', 'driver_id' => null, 'status' => 'new', 'customer_name' => 'Edmund Kirby', 'customer_phone_number' => '+61-455-591-994',  'estimate_time' => '2.5 hours', 'fee' => 30.00, 'currency_code' => 'AUD', 'pick_up_location' => '145B Collier Loop, Jabaristad, SA 2196', 'pick_up_latitude' => '5', 'pick_up_longitude' => '7', 'drop_off_location' => 'Suite 591 13 Cormier Artery, North Louisa, NSW 2444','drop_off_latitude' => '-18.998563', 'drop_off_longitude' => '115.370561'],
            ['id' => '7', 'driver_id' => null, 'status' => 'new', 'customer_name' => 'Romaine Woodcock', 'customer_phone_number' => '+61-455-567-697',  'estimate_time' => '3.5 hours', 'fee' => 30.00, 'currency_code' => 'AUD', 'pick_up_location' => '8 Monahan Ronde, St. Dudleyberg, TAS 2672', 'pick_up_latitude' => '5', 'pick_up_longitude' => '6', 'drop_off_location' => '4 / 762 Donnelly Street, McClureberg, NT 2600','drop_off_latitude' => '70.827775', 'drop_off_longitude' => '44.794507'],
            ['id' => '8', 'driver_id' => null, 'status' => 'new', 'customer_name' => 'Claude Vernon', 'customer_phone_number' => '+61-455-589-028',  'estimate_time' => '4.5 hours', 'fee' => 30.00, 'currency_code' => 'AUD', 'pick_up_location' => '371 Julia Circus, Reichelfurt, QLD 8978', 'pick_up_latitude' => '5', 'pick_up_longitude' => '8', 'drop_off_location' => '79 Durgan Green, East Crawfordview, VIC 2059','drop_off_latitude' => '15.869062', 'drop_off_longitude' => '-4.111241'],
            ['id' => '9', 'driver_id' => null, 'status' => 'new', 'customer_name' => 'Madonna Cokes', 'customer_phone_number' => '+61-455-576-912',  'estimate_time' => '4.5 hours', 'fee' => 30.00, 'currency_code' => 'AUD', 'pick_up_location' => 'Level 0 41 Stiedemann Close, Samantaberg, VIC 7900', 'pick_up_latitude' => '5', 'pick_up_longitude' => '9', 'drop_off_location' => '7D Wade Parade, Lake Clotildeberg, QLD 9767','drop_off_latitude' => '45.855627', 'drop_off_longitude' => '-80.167945'],
            ['id' => '10', 'driver_id' => null, 'status' => 'new', 'customer_name' => 'Frederica Mottershead', 'customer_phone_number' => '+61-455-588-905',  'estimate_time' => '3 hours', 'fee' => 30.00, 'currency_code' => 'AUD', 'pick_up_location' => '93D Tillman Anchorage, Lake Shaniaton, TAS 2612', 'pick_up_latitude' => '5', 'pick_up_longitude' => '10', 'drop_off_location' => '485A Baumbach Rest, St. Cleoraport, ACT 2662','drop_off_latitude' => '-8.916108', 'drop_off_longitude' => '98.005198'],
            ['id' => '11', 'driver_id' => null, 'status' => 'new', 'customer_name' => 'Aleta Bullock', 'customer_phone_number' => '+61-455-581-668',  'estimate_time' => '5.5 hours', 'fee' => 30.00, 'currency_code' => 'AUD', 'pick_up_location' => '331 Nikolaus Circle, Estellshire, NSW 2927', 'pick_up_latitude' => '5', 'pick_up_longitude' => '12', 'drop_off_location' => 'Level 5 359 Fisher Steps, Maybelleport, ACT 2865','drop_off_latitude' => '37.181292', 'drop_off_longitude' => '-108.167577'],
            ['id' => '12', 'driver_id' => null, 'status' => 'new', 'customer_name' => 'David Trent', 'customer_phone_number' => '+61-455-572-256',  'estimate_time' => '5.5 hours', 'fee' => 30.00, 'currency_code' => 'AUD', 'pick_up_location' => '76 / 27 Bayer Upper, St. Marietta, WA 2920', 'pick_up_latitude' => '5', 'pick_up_longitude' => '15', 'drop_off_location' => '90 / 95 Trycia Place, Goldaport, QLD 2869','drop_off_latitude' => '-50.930601', 'drop_off_longitude' => '46.460293'],
            ['id' => '13', 'driver_id' => null, 'status' => 'new', 'customer_name' => 'Miranda Payton', 'customer_phone_number' => '+61-455-520-404',  'estimate_time' => '4.5 hours', 'fee' => 30.00, 'currency_code' => 'AUD', 'pick_up_location' => '1 / 67 Jaiden Crossing, Brandyshire, ACT 2693', 'pick_up_latitude' => '5', 'pick_up_longitude' => '14', 'drop_off_location' => '111 Gislason Retreat, West Denischester, ACT 2941','drop_off_latitude' => '51.76538', 'drop_off_longitude' => '27.441913'],
            ['id' => '14', 'driver_id' => null, 'status' => 'new', 'customer_name' => 'Lyda Archer', 'customer_phone_number' => '+61-455-520-739',  'estimate_time' => '6.5 hours', 'fee' => 30.00, 'currency_code' => 'AUD', 'pick_up_location' => '2 Kutch Cruiseway, Gaylordfurt, QLD 2134', 'pick_up_latitude' => '5', 'pick_up_longitude' => '13', 'drop_off_location' => '222 Francis Expressway, Hoegerport, VIC 2917','drop_off_latitude' => '10.643887', 'drop_off_longitude' => '-63.126834'],
            ['id' => '15', 'driver_id' => null, 'status' => 'new', 'customer_name' => 'Theodore Lindsey', 'customer_phone_number' => '+61-455-568-817',  'estimate_time' => '5.5 hours', 'fee' => 30.00, 'currency_code' => 'AUD', 'pick_up_location' => '3C Wiegand Triangle, Lake Billfort, QLD 2909', 'pick_up_latitude' => '5', 'pick_up_longitude' => '11', 'drop_off_location' => 'Level 6 30 DuBuque Underpass, St. Maia, TAS 0286','drop_off_latitude' => '-86.201767', 'drop_off_longitude' => '28.351192'],
		]);
    }
}
