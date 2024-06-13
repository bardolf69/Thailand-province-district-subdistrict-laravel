<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provinces')->delete();
        
        \DB::table('provinces')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 10,
                'name_in_thai' => 'กรุงเทพมหานคร',
                'name_in_english' => 'Bangkok',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 11,
                'name_in_thai' => 'สมุทรปราการ',
                'name_in_english' => 'Samut Prakarn',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 12,
                'name_in_thai' => 'นนทบุรี',
                'name_in_english' => 'Nonthaburi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 13,
                'name_in_thai' => 'ปทุมธานี',
                'name_in_english' => 'Pathum Thani',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 14,
                'name_in_thai' => 'พระนครศรีอยุธยา',
                'name_in_english' => 'Phra Nakhon Si Ayutthaya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 15,
                'name_in_thai' => 'อ่างทอง',
                'name_in_english' => 'Ang Thong',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 16,
                'name_in_thai' => 'ลพบุรี',
                'name_in_english' => 'Lop Buri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'code' => 17,
                'name_in_thai' => 'สิงห์บุรี',
                'name_in_english' => 'Sing Buri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'code' => 18,
                'name_in_thai' => 'ชัยนาท',
                'name_in_english' => 'Chai Nat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'code' => 19,
                'name_in_thai' => 'สระบุรี',
                'name_in_english' => 'Saraburi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'code' => 20,
                'name_in_thai' => 'ชลบุรี',
                'name_in_english' => 'Chon Buri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'code' => 21,
                'name_in_thai' => 'ระยอง',
                'name_in_english' => 'Rayong',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'code' => 22,
                'name_in_thai' => 'จันทบุรี',
                'name_in_english' => 'Chanthaburi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'code' => 23,
                'name_in_thai' => 'ตราด',
                'name_in_english' => 'Trat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'code' => 24,
                'name_in_thai' => 'ฉะเชิงเทรา',
                'name_in_english' => 'Chachoengsao',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'code' => 25,
                'name_in_thai' => 'ปราจีนบุรี',
                'name_in_english' => 'Prachin Buri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'code' => 26,
                'name_in_thai' => 'นครนายก',
                'name_in_english' => 'Nakhon Nayok',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'code' => 27,
                'name_in_thai' => 'สระแก้ว',
                'name_in_english' => 'Sa kaeo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'code' => 30,
                'name_in_thai' => 'นครราชสีมา',
                'name_in_english' => 'Nakhon Ratchasima',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'code' => 31,
                'name_in_thai' => 'บุรีรัมย์',
                'name_in_english' => 'Buri Ram',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'code' => 32,
                'name_in_thai' => 'สุรินทร์',
                'name_in_english' => 'Surin',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'code' => 33,
                'name_in_thai' => 'ศรีสะเกษ',
                'name_in_english' => 'Si Sa Ket',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'code' => 34,
                'name_in_thai' => 'อุบลราชธานี',
                'name_in_english' => 'Ubon Ratchathani',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'code' => 35,
                'name_in_thai' => 'ยโสธร',
                'name_in_english' => 'Yasothon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'code' => 36,
                'name_in_thai' => 'ชัยภูมิ',
                'name_in_english' => 'Chaiyaphum',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'code' => 37,
                'name_in_thai' => 'อำนาจเจริญ',
                'name_in_english' => 'Amnat Charoen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'code' => 38,
                'name_in_thai' => 'บึงกาฬ',
                'name_in_english' => 'Bueng Kan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'code' => 39,
                'name_in_thai' => 'หนองบัวลำภู',
                'name_in_english' => 'Nong Bua Lam Phu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'code' => 40,
                'name_in_thai' => 'ขอนแก่น',
                'name_in_english' => 'Khon Kaen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'code' => 41,
                'name_in_thai' => 'อุดรธานี',
                'name_in_english' => 'Udon Thani',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'code' => 42,
                'name_in_thai' => 'เลย',
                'name_in_english' => 'Loei',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'code' => 43,
                'name_in_thai' => 'หนองคาย',
                'name_in_english' => 'Nong Khai',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'code' => 44,
                'name_in_thai' => 'มหาสารคาม',
                'name_in_english' => 'Maha Sarakham',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'code' => 45,
                'name_in_thai' => 'ร้อยเอ็ด',
                'name_in_english' => 'Roi Et',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'code' => 46,
                'name_in_thai' => 'กาฬสินธุ์',
                'name_in_english' => 'Kalasin',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'code' => 47,
                'name_in_thai' => 'สกลนคร',
                'name_in_english' => 'Sakon Nakhon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'code' => 48,
                'name_in_thai' => 'นครพนม',
                'name_in_english' => 'Nakhon Phanom',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'code' => 49,
                'name_in_thai' => 'มุกดาหาร',
                'name_in_english' => 'Mukdahan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'code' => 50,
                'name_in_thai' => 'เชียงใหม่',
                'name_in_english' => 'Chiang Mai',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'code' => 51,
                'name_in_thai' => 'ลำพูน',
                'name_in_english' => 'Lamphun',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'code' => 52,
                'name_in_thai' => 'ลำปาง',
                'name_in_english' => 'Lampang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'code' => 53,
                'name_in_thai' => 'อุตรดิตถ์',
                'name_in_english' => 'Uttaradit',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'code' => 54,
                'name_in_thai' => 'แพร่',
                'name_in_english' => 'Phrae',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'code' => 55,
                'name_in_thai' => 'น่าน',
                'name_in_english' => 'Nan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'code' => 56,
                'name_in_thai' => 'พะเยา',
                'name_in_english' => 'Phayao',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'code' => 57,
                'name_in_thai' => 'เชียงราย',
                'name_in_english' => 'Chiang Rai',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'code' => 58,
                'name_in_thai' => 'แม่ฮ่องสอน',
                'name_in_english' => 'Mae Hong Son',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'code' => 60,
                'name_in_thai' => 'นครสวรรค์',
                'name_in_english' => 'Nakhon Sawan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'code' => 61,
                'name_in_thai' => 'อุทัยธานี',
                'name_in_english' => 'Uthai Thani',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'code' => 62,
                'name_in_thai' => 'กำแพงเพชร',
                'name_in_english' => 'Kamphaeng Phet',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'code' => 63,
                'name_in_thai' => 'ตาก',
                'name_in_english' => 'Tak',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'code' => 64,
                'name_in_thai' => 'สุโขทัย',
                'name_in_english' => 'Sukhothai',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'code' => 65,
                'name_in_thai' => 'พิษณุโลก',
                'name_in_english' => 'Phitsanulok',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'code' => 66,
                'name_in_thai' => 'พิจิตร',
                'name_in_english' => 'Phichit',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'code' => 67,
                'name_in_thai' => 'เพชรบูรณ์',
                'name_in_english' => 'Phetchabun',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'code' => 70,
                'name_in_thai' => 'ราชบุรี',
                'name_in_english' => 'Ratchaburi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'code' => 71,
                'name_in_thai' => 'กาญจนบุรี',
                'name_in_english' => 'Kanchanaburi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'code' => 72,
                'name_in_thai' => 'สุพรรณบุรี',
                'name_in_english' => 'Suphan Buri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'code' => 73,
                'name_in_thai' => 'นครปฐม',
                'name_in_english' => 'Nakhon Pathom',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'code' => 74,
                'name_in_thai' => 'สมุทรสาคร',
                'name_in_english' => 'Samut Sakhon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'code' => 75,
                'name_in_thai' => 'สมุทรสงคราม',
                'name_in_english' => 'Samut Songkhram',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'code' => 76,
                'name_in_thai' => 'เพชรบุรี',
                'name_in_english' => 'Phetchaburi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'code' => 77,
                'name_in_thai' => 'ประจวบคีรีขันธ์',
                'name_in_english' => 'Prachuap Khiri Khan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'code' => 80,
                'name_in_thai' => 'นครศรีธรรมราช',
                'name_in_english' => 'Nakhon Si Thammarat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'code' => 81,
                'name_in_thai' => 'กระบี่',
                'name_in_english' => 'Krabi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'code' => 82,
                'name_in_thai' => 'พังงา',
                'name_in_english' => 'Phang-nga',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'code' => 83,
                'name_in_thai' => 'ภูเก็ต',
                'name_in_english' => 'Phuket',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'code' => 84,
                'name_in_thai' => 'สุราษฎร์ธานี',
                'name_in_english' => 'Surat Thani',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'code' => 85,
                'name_in_thai' => 'ระนอง',
                'name_in_english' => 'Ranong',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'code' => 86,
                'name_in_thai' => 'ชุมพร',
                'name_in_english' => 'Chumphon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'code' => 90,
                'name_in_thai' => 'สงขลา',
                'name_in_english' => 'Songkhla',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'code' => 91,
                'name_in_thai' => 'สตูล',
                'name_in_english' => 'Satun',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'code' => 92,
                'name_in_thai' => 'ตรัง',
                'name_in_english' => 'Trang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'code' => 93,
                'name_in_thai' => 'พัทลุง',
                'name_in_english' => 'Phatthalung',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'code' => 94,
                'name_in_thai' => 'ปัตตานี',
                'name_in_english' => 'Pattani',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'code' => 95,
                'name_in_thai' => 'ยะลา',
                'name_in_english' => 'Yala',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'code' => 96,
                'name_in_thai' => 'นราธิวาส',
                'name_in_english' => 'Narathiwat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
