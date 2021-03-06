<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        
        DB::table('type_of_goods')->insert([

            [

                'name' => 'Акційний товар',

            ],
            [

                'name' => 'Оптовий товар',

            ],
            [

                'name' => 'Роздрібний товар',

            ],

        ]);

        DB::table('roles')->insert([

            [

                'name' => 'Admin',

            ],
            [

                'name' => 'Moderator',

            ],
            [

                'name' => 'Guest',

            ],

        ]);


        
        DB::table('permissions')->insert([

            [

                'name' => 'VIEW_ADMIN',

            ],
            [

                'name' => 'ADMIN_USERS',

            ]

        ]);
        DB::table('permission_role')->insert([

            [

                'role_id' => 1,
                'permission_id' => 1,

            ],
            [

                'role_id' => 1,
                'permission_id' => 2,

            ],
            [

                'role_id' => 2,
                'permission_id' => 1,

            ]

        ]);
        DB::table('categories')->insert([

            [
                'parent_id' => 0,
                'name' => 'Женская обувь',
                /*'link'=> '/good_category?id=',*/
                'icon'=>'fa-plus-square'
            ],
            [
                'parent_id' => 0,
                'name' => 'Сумки',
                /*'link'=> '/good?id=123456',*/
                'icon'=>'fa-usb'
            ],
            [
                'parent_id' => 0,
                'name' => 'Написать нам',
                /*'link'=> '/good?id=123456',*/
                'icon'=>''
            ],
            [
                'parent_id' => 1,
                'name' => 'Летняя обувь',
                /*'link'=> '/good?id=123456',*/
                'icon'=>''
            ],
            [
                'parent_id' => 1,
                'name' => 'Зимняя обувь',
               /* 'link'=> '/good?id=123456',*/
                'icon'=>''
            ],
            [
                'parent_id' => 1,
                'name' => 'Распродажа',
                /*'link'=> '/good?id=123456',*/
                'icon'=>''
            ],
            [
                'parent_id' => 1,
                'name' => 'Демисезонная обувь осень-весна',
               /* 'link'=> '/good?id=123456',*/
                'icon'=>''

            ],[
                'parent_id' => 1,
                'name' => 'Гламур спорт',
               /* 'link'=> '/good?id=123456',*/
                'icon'=>''
            ]
        ]);





    DB::table('goods')->insert([

            [
                'type' => 1,
                'name' => 'полуботинки замшевые',
                'category'=>5,
                'articul'=>'11244234',
                'image_small'=>'image_smallmedia-share-0-02-05-4b2fc52905b7a3b9aa223c584cadd5b2acbabdd13d9b63133857489ed32693c5-3395465a-c28e-4e36-b485-033d8c0849dc(981a5a80dfbfa4e935512adc04743145).jpg',
                'image_medium'=>'image_mediummedia-share-0-02-05-4b2fc52905b7a3b9aa223c584cadd5b2acbabdd13d9b63133857489ed32693c5-3395465a-c28e-4e36-b485-033d8c0849dc(981a5a80dfbfa4e935512adc04743145).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-4b2fc52905b7a3b9aa223c584cadd5b2acbabdd13d9b63133857489ed32693c5-3395465a-c28e-4e36-b485-033d8c0849dc(981a5a80dfbfa4e935512adc04743145).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-4b2fc52905b7a3b9aa223c584cadd5b2acbabdd13d9b63133857489ed32693c5-3395465a-c28e-4e36-b485-033d8c0849dc(981a5a80dfbfa4e935512adc04743145).jpg',
                'price'=>129.6,
                'price_without_discount'=>144,
                'count'=>10,
                'discount'=>10,
                'star'=>true,
                'description'=>'<p>стильная обувь</p>',
                'description2'=>'<p>стильная обувь</p>'
            ],
            [
                'type' => 1,
                'name' => 'Гламурные кеды',
                'category'=>8,
                'articul'=>'11244235',
                'image_small'=>'image_smallmedia-share-0-02-05-cdd5307d9c06e58bfaf9b563c36e86aa1b6423707e21395665c6c583c7ee4131-1063f5f0-44c7-4978-8b5d-b96dc1fe1348(553409c8749a893297e4f8e70bcf2ee1).jpg',
                'image_medium'=>'image_mediummedia-share-0-02-05-cdd5307d9c06e58bfaf9b563c36e86aa1b6423707e21395665c6c583c7ee4131-1063f5f0-44c7-4978-8b5d-b96dc1fe1348(553409c8749a893297e4f8e70bcf2ee1).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-cdd5307d9c06e58bfaf9b563c36e86aa1b6423707e21395665c6c583c7ee4131-1063f5f0-44c7-4978-8b5d-b96dc1fe1348(553409c8749a893297e4f8e70bcf2ee1).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-cdd5307d9c06e58bfaf9b563c36e86aa1b6423707e21395665c6c583c7ee4131-1063f5f0-44c7-4978-8b5d-b96dc1fe1348(553409c8749a893297e4f8e70bcf2ee1).jpg',
                'price'=>129.6,
                'price_without_discount'=>144,
                'count'=>10,
                'discount'=>10,
                'star'=>true,
                'description'=>'<p>стильная обувь</p>',
                'description2'=>'<p>стильная обувь</p>'
            ],
            [
                'type' => 1,
                'name' => 'туфли женские выходные',
                'category'=>4,
                'articul'=>'11244235',
                'image_small'=>'image_smallmedia-share-0-02-05-d6fb8b81576ab772f61d1d8aa94018fe10ef544e53b71fc5d1cb2c319662a0a4-f772ee4a-bf16-42fe-81e3-a84ba25f8c89(4d35390b35a6e5dd630eaad4fee566bf).jpg',
                'image_medium'=>'image_mediummedia-share-0-02-05-d6fb8b81576ab772f61d1d8aa94018fe10ef544e53b71fc5d1cb2c319662a0a4-f772ee4a-bf16-42fe-81e3-a84ba25f8c89(4d35390b35a6e5dd630eaad4fee566bf).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-d6fb8b81576ab772f61d1d8aa94018fe10ef544e53b71fc5d1cb2c319662a0a4-f772ee4a-bf16-42fe-81e3-a84ba25f8c89(4d35390b35a6e5dd630eaad4fee566bf).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-d6fb8b81576ab772f61d1d8aa94018fe10ef544e53b71fc5d1cb2c319662a0a4-f772ee4a-bf16-42fe-81e3-a84ba25f8c89(4d35390b35a6e5dd630eaad4fee566bf).jpg',
                'price'=>129.6,
                'price_without_discount'=>144,
                'count'=>10,
                'discount'=>10,'star'=>true,
                'description'=>'<p>стильная обувь</p>',
                'description2'=>'<p>стильная обувь</p>'
            ],
            [
                'type' => 1,
                'name' => 'гламурные кеды с цветочками',
                'category'=>8,
                'articul'=>'11244235',
                'image_small'=>'image_smallmedia-share-0-02-05-a8853a536106ebcb75b5069ba9835376390e63e5cb5f26ec45c014f019bf9d14-a1471b0a-c982-42a4-8faa-24900b6b8aad(b295751e1a70bb3bb9a5d603fd31fff8).jpg',
                'image_medium'=>'image_mediummedia-share-0-02-05-a8853a536106ebcb75b5069ba9835376390e63e5cb5f26ec45c014f019bf9d14-a1471b0a-c982-42a4-8faa-24900b6b8aad(b295751e1a70bb3bb9a5d603fd31fff8).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-a8853a536106ebcb75b5069ba9835376390e63e5cb5f26ec45c014f019bf9d14-a1471b0a-c982-42a4-8faa-24900b6b8aad(b295751e1a70bb3bb9a5d603fd31fff8).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-a8853a536106ebcb75b5069ba9835376390e63e5cb5f26ec45c014f019bf9d14-a1471b0a-c982-42a4-8faa-24900b6b8aad(b295751e1a70bb3bb9a5d603fd31fff8).jpg',
                'price'=>129.6,
                'price_without_discount'=>144,
                'count'=>10,
                'discount'=>10,'star'=>true,
                'description'=>'<p>стильная обувь</p>',
                'description2'=>'<p>стильная обувь</p>'
            ],
            [
                'type' => 1,
                'name' => 'гламурные кеды с цветочками',
                'category'=>8,
                'articul'=>'11244235',
                'image_small'=>'image_smallmedia-share-0-02-05-fb9ab87ce84f72a06f2e06b3cc756e607e4e8a035a55d523dd06b2d450823e03-ecf9040a-6136-40ab-aff6-fafde5260e16(9395e6683a8356b9e561823995081cd7).jpg',
                'image_medium'=>'image_mediummedia-share-0-02-05-fb9ab87ce84f72a06f2e06b3cc756e607e4e8a035a55d523dd06b2d450823e03-ecf9040a-6136-40ab-aff6-fafde5260e16(9395e6683a8356b9e561823995081cd7).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-fb9ab87ce84f72a06f2e06b3cc756e607e4e8a035a55d523dd06b2d450823e03-ecf9040a-6136-40ab-aff6-fafde5260e16(9395e6683a8356b9e561823995081cd7).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-fb9ab87ce84f72a06f2e06b3cc756e607e4e8a035a55d523dd06b2d450823e03-ecf9040a-6136-40ab-aff6-fafde5260e16(9395e6683a8356b9e561823995081cd7).jpg',
                'price'=>129.6,
                'price_without_discount'=>144,
                'count'=>10,
                'discount'=>10,'star'=>true,
                'description'=>'<p>стильная обувь</p>',
                'description2'=>'<p>стильная обувь</p>'

            ],
            [
                'type' => 1,
                'name' => 'распродажа ',
                'category'=>6,
                'articul'=>'11244235',
                 'image_small'=>'image_smallmedia-share-0-02-05-75c1b617b6cad61296e5d5c9ca6cac323e729af5abc91f4caafc67b38d232080-4546e88e-247c-4772-841a-e6717399efb4(630c95d2ee2db078e52f9b874b1e4d51).jpg',
                'image_medium'=>'image_mediummedia-share-0-02-05-75c1b617b6cad61296e5d5c9ca6cac323e729af5abc91f4caafc67b38d232080-4546e88e-247c-4772-841a-e6717399efb4(630c95d2ee2db078e52f9b874b1e4d51).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-75c1b617b6cad61296e5d5c9ca6cac323e729af5abc91f4caafc67b38d232080-4546e88e-247c-4772-841a-e6717399efb4(630c95d2ee2db078e52f9b874b1e4d51).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-75c1b617b6cad61296e5d5c9ca6cac323e729af5abc91f4caafc67b38d232080-4546e88e-247c-4772-841a-e6717399efb4(630c95d2ee2db078e52f9b874b1e4d51).jpg',
                'price'=>129.6,
                'price_without_discount'=>144,
                'count'=>10,
                'discount'=>10,'star'=>true,
                'description'=>'<p>стильная обувь</p>',
                'description2'=>'<p>стильная обувь</p>'
            ]





        ]);


        DB::table('admin_categories')->insert([

        [
            'parent_id' => 0,
            'name' => 'Користувачі',
            'icon'=> 'fa-users',
            'link'=> '/admin'
        ],
        [
            'parent_id' => 1,
            'name' => 'Управління користувачами',
            'icon'=> 'fa-registered',
            'link'=> '/admin/customers_managment'
        ],
        [
            'parent_id' => 0,
            'name' => 'Товари',
            'icon'=> 'fa-gift',
            'link'=> '/admin'
        ],
        [
            'parent_id' => 3,
            'name' => 'Додати товар',
            'icon'=> 'fa-envelope','link'=> '/admin/add_good'
        ],
        [
            'parent_id' => 3,
            'name' => 'Видалити товар',
            'icon'=> 'fa-envelope','link'=> '/admin/delete_good'
        ],
        [
            'parent_id' => 3,
            'name' => 'Категоріі',
            'icon'=> 'fa-envelope','link'=> '/admin/categories'
        ],
        [
            'parent_id' => 0,
            'name' => 'Замовлення',
            'icon'=> 'fa-envelope',
            'link'=> '/admin'

        ],
        [
            'parent_id' => 0,
            'name' => 'Реклама',
            'icon'=> 'fa-bullhorn',
            'link'=> '/admin'
        ],
        [
            'parent_id' => 0,
            'name' => 'Партнери',
            'icon'=> 'fa-thumbs-o-up',
            'link'=> '/admin/partners'
        ],
        [
            'parent_id' => 9,
            'name' => 'Додати логотипи',
            'icon'=> 'fa-envelope','link'=> '/admin/add_logos'
        ],
        [
            'parent_id' => 9,
            'name' => 'Видалити логотипи',
            'icon'=> 'fa-envelope','link'=> '/admin/del_logos'
        ],
    ]);


        DB::table('photos')->insert([

            [
                'id_good' => 1,

                'image_medium'=>'image_mediummedia-share-0-02-05-da35d002c230c9b418cd1ff52efcf569176615632ec5b191e7beacbe29805b9a-db1c5323-f9de-4b49-8aa2-3e32b3b41e48(aacfa682895933c10445a1b11ad4ec5d).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-da35d002c230c9b418cd1ff52efcf569176615632ec5b191e7beacbe29805b9a-db1c5323-f9de-4b49-8aa2-3e32b3b41e48(aacfa682895933c10445a1b11ad4ec5d).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-da35d002c230c9b418cd1ff52efcf569176615632ec5b191e7beacbe29805b9a-db1c5323-f9de-4b49-8aa2-3e32b3b41e48(aacfa682895933c10445a1b11ad4ec5d).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-da35d002c230c9b418cd1ff52efcf569176615632ec5b191e7beacbe29805b9a-db1c5323-f9de-4b49-8aa2-3e32b3b41e48(aacfa682895933c10445a1b11ad4ec5d).jpg'

            ],
            [
                'id_good' => 1,

                'image_medium'=>'image_mediummedia-share-0-02-05-040309b722acb49eb525d8a4ddc7a25a8321d541d49dc3ce00344829e37b52ef-9f803601-149f-4ed8-afff-3f1c8eef08d6(54285d29a4539534ce33a00b2725a1ad).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-040309b722acb49eb525d8a4ddc7a25a8321d541d49dc3ce00344829e37b52ef-9f803601-149f-4ed8-afff-3f1c8eef08d6(54285d29a4539534ce33a00b2725a1ad).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-040309b722acb49eb525d8a4ddc7a25a8321d541d49dc3ce00344829e37b52ef-9f803601-149f-4ed8-afff-3f1c8eef08d6(54285d29a4539534ce33a00b2725a1ad).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-040309b722acb49eb525d8a4ddc7a25a8321d541d49dc3ce00344829e37b52ef-9f803601-149f-4ed8-afff-3f1c8eef08d6(54285d29a4539534ce33a00b2725a1ad).jpg'

            ],
            [
                'id_good' => 1,
                'image_medium'=>'image_mediummedia-share-0-02-05-b002c481673d5e1cd55dede927549d8468f7969dcd16e0301a6a595670634c44-ab8d7916-57fe-4e8a-bf0f-c2fed6b04a40(d2d149c48dddcc799cfc7673cfb28f42).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-b002c481673d5e1cd55dede927549d8468f7969dcd16e0301a6a595670634c44-ab8d7916-57fe-4e8a-bf0f-c2fed6b04a40(d2d149c48dddcc799cfc7673cfb28f42).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-b002c481673d5e1cd55dede927549d8468f7969dcd16e0301a6a595670634c44-ab8d7916-57fe-4e8a-bf0f-c2fed6b04a40(d2d149c48dddcc799cfc7673cfb28f42).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-b002c481673d5e1cd55dede927549d8468f7969dcd16e0301a6a595670634c44-ab8d7916-57fe-4e8a-bf0f-c2fed6b04a40(d2d149c48dddcc799cfc7673cfb28f42).jpg'

            ],
            [
                'id_good' => 1,
                'image_medium'=>'image_mediummedia-share-0-02-05-e7b0e35664183073bbf2c2976fa2f627f3d88bab7eb61ca7197ba17563abc29d-fc115cea-9ff9-45d9-922b-06ca5a52dd70(feb70d61ec6e84e8cc0bd06836679ea5).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-e7b0e35664183073bbf2c2976fa2f627f3d88bab7eb61ca7197ba17563abc29d-fc115cea-9ff9-45d9-922b-06ca5a52dd70(feb70d61ec6e84e8cc0bd06836679ea5).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-e7b0e35664183073bbf2c2976fa2f627f3d88bab7eb61ca7197ba17563abc29d-fc115cea-9ff9-45d9-922b-06ca5a52dd70(feb70d61ec6e84e8cc0bd06836679ea5).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-e7b0e35664183073bbf2c2976fa2f627f3d88bab7eb61ca7197ba17563abc29d-fc115cea-9ff9-45d9-922b-06ca5a52dd70(feb70d61ec6e84e8cc0bd06836679ea5).jpg'

            ],
            [
                'id_good' => 2,
                'image_medium'=>'image_mediummedia-share-0-02-05-b9d19364f9b921d0ac7090e1690745778b7c5664c8ca8fd3a7be2f0f83291c4d-aa231d76-88e1-432e-855a-74908698612f(b0269b32a9b0ce26320bdb5dee323fef).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-b9d19364f9b921d0ac7090e1690745778b7c5664c8ca8fd3a7be2f0f83291c4d-aa231d76-88e1-432e-855a-74908698612f(b0269b32a9b0ce26320bdb5dee323fef).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-b9d19364f9b921d0ac7090e1690745778b7c5664c8ca8fd3a7be2f0f83291c4d-aa231d76-88e1-432e-855a-74908698612f(b0269b32a9b0ce26320bdb5dee323fef).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-b9d19364f9b921d0ac7090e1690745778b7c5664c8ca8fd3a7be2f0f83291c4d-aa231d76-88e1-432e-855a-74908698612f(b0269b32a9b0ce26320bdb5dee323fef).jpg'

            ],
            [
                'id_good' => 3,
                'image_medium'=>'image_mediummedia-share-0-02-05-585cd02ff2a0580bd41dc568ecba26fd0e1493f302143a1e2a5a42e15eb7b2a8-8054c4d9-6d73-4c8f-be90-1190e11c09f7(5024b92f849552a69a69e07e2f5ca3e2).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-585cd02ff2a0580bd41dc568ecba26fd0e1493f302143a1e2a5a42e15eb7b2a8-8054c4d9-6d73-4c8f-be90-1190e11c09f7(5024b92f849552a69a69e07e2f5ca3e2).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-585cd02ff2a0580bd41dc568ecba26fd0e1493f302143a1e2a5a42e15eb7b2a8-8054c4d9-6d73-4c8f-be90-1190e11c09f7(5024b92f849552a69a69e07e2f5ca3e2).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-585cd02ff2a0580bd41dc568ecba26fd0e1493f302143a1e2a5a42e15eb7b2a8-8054c4d9-6d73-4c8f-be90-1190e11c09f7(5024b92f849552a69a69e07e2f5ca3e2).jpg'

            ],
            [
                'id_good' => 4,
                'image_medium'=>'image_mediummedia-share-0-02-05-959807a4e66a89bc2b00dcf400ac44e4c64eedaffecd55469186810b23d1ac0b-32374fc4-dfeb-4aa5-b3df-17f7d71e9b1f(f50bf55a3a3156668124f8a0f6fed10d).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-959807a4e66a89bc2b00dcf400ac44e4c64eedaffecd55469186810b23d1ac0b-32374fc4-dfeb-4aa5-b3df-17f7d71e9b1f(f50bf55a3a3156668124f8a0f6fed10d).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-959807a4e66a89bc2b00dcf400ac44e4c64eedaffecd55469186810b23d1ac0b-32374fc4-dfeb-4aa5-b3df-17f7d71e9b1f(f50bf55a3a3156668124f8a0f6fed10d).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-959807a4e66a89bc2b00dcf400ac44e4c64eedaffecd55469186810b23d1ac0b-32374fc4-dfeb-4aa5-b3df-17f7d71e9b1f(f50bf55a3a3156668124f8a0f6fed10d).jpg'

            ],
            [
                'id_good' => 5,
                'image_medium'=>'image_mediummedia-share-0-02-05-91c50bd4f680f9b85f0f6954fd1ac6ca69a4fbc7d43d8b2154bd5a95d6db4800-194969ff-9667-488b-bf6b-16b3056e4c86(13b7fd614fc02353da27697ba0148c31).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-91c50bd4f680f9b85f0f6954fd1ac6ca69a4fbc7d43d8b2154bd5a95d6db4800-194969ff-9667-488b-bf6b-16b3056e4c86(13b7fd614fc02353da27697ba0148c31).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-91c50bd4f680f9b85f0f6954fd1ac6ca69a4fbc7d43d8b2154bd5a95d6db4800-194969ff-9667-488b-bf6b-16b3056e4c86(13b7fd614fc02353da27697ba0148c31).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-91c50bd4f680f9b85f0f6954fd1ac6ca69a4fbc7d43d8b2154bd5a95d6db4800-194969ff-9667-488b-bf6b-16b3056e4c86(13b7fd614fc02353da27697ba0148c31).jpg'

            ],
            [
                'id_good' => 5,
                'image_medium'=>'image_mediummedia-share-0-02-05-959807a4e66a89bc2b00dcf400ac44e4c64eedaffecd55469186810b23d1ac0b-32374fc4-dfeb-4aa5-b3df-17f7d71e9b1f(5248d742036b07795dfc629f55bf7938).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-959807a4e66a89bc2b00dcf400ac44e4c64eedaffecd55469186810b23d1ac0b-32374fc4-dfeb-4aa5-b3df-17f7d71e9b1f(5248d742036b07795dfc629f55bf7938).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-959807a4e66a89bc2b00dcf400ac44e4c64eedaffecd55469186810b23d1ac0b-32374fc4-dfeb-4aa5-b3df-17f7d71e9b1f(5248d742036b07795dfc629f55bf7938).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-959807a4e66a89bc2b00dcf400ac44e4c64eedaffecd55469186810b23d1ac0b-32374fc4-dfeb-4aa5-b3df-17f7d71e9b1f(5248d742036b07795dfc629f55bf7938).jpg'

            ],
            [
                'id_good' => 5,
                'image_medium'=>'image_mediummedia-share-0-02-05-a8853a536106ebcb75b5069ba9835376390e63e5cb5f26ec45c014f019bf9d14-a1471b0a-c982-42a4-8faa-24900b6b8aad(2fc147bbaecffbd3ab9c8184c95a45ff).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-a8853a536106ebcb75b5069ba9835376390e63e5cb5f26ec45c014f019bf9d14-a1471b0a-c982-42a4-8faa-24900b6b8aad(2fc147bbaecffbd3ab9c8184c95a45ff).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-a8853a536106ebcb75b5069ba9835376390e63e5cb5f26ec45c014f019bf9d14-a1471b0a-c982-42a4-8faa-24900b6b8aad(2fc147bbaecffbd3ab9c8184c95a45ff).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-a8853a536106ebcb75b5069ba9835376390e63e5cb5f26ec45c014f019bf9d14-a1471b0a-c982-42a4-8faa-24900b6b8aad(2fc147bbaecffbd3ab9c8184c95a45ff).jpg'

            ],
            [
                'id_good' => 6,
                'image_medium'=>'image_mediummedia-share-0-02-05-3363b7e9b58c602b9c3ca3ab32b229f968ebc0fd3fe8a23fe672b85b393f78c5-d2ee2f16-ac74-4cd8-a074-d5611029c72a(d7e7e74732101ea630ac208044ab6ffe).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-3363b7e9b58c602b9c3ca3ab32b229f968ebc0fd3fe8a23fe672b85b393f78c5-d2ee2f16-ac74-4cd8-a074-d5611029c72a(d7e7e74732101ea630ac208044ab6ffe).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-3363b7e9b58c602b9c3ca3ab32b229f968ebc0fd3fe8a23fe672b85b393f78c5-d2ee2f16-ac74-4cd8-a074-d5611029c72a(d7e7e74732101ea630ac208044ab6ffe).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-3363b7e9b58c602b9c3ca3ab32b229f968ebc0fd3fe8a23fe672b85b393f78c5-d2ee2f16-ac74-4cd8-a074-d5611029c72a(d7e7e74732101ea630ac208044ab6ffe).jpg'

            ],
            [
                'id_good' => 6,
                'image_medium'=>'image_mediummedia-share-0-02-05-45c1ccd03545509334d02ece219966a4e877402b27676204c9b882120c8891b1-a82fade1-d142-42f6-8a80-1ee99ae7c098(1a1dbac0418474f69c4e30347c20c5c8).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-45c1ccd03545509334d02ece219966a4e877402b27676204c9b882120c8891b1-a82fade1-d142-42f6-8a80-1ee99ae7c098(1a1dbac0418474f69c4e30347c20c5c8).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-45c1ccd03545509334d02ece219966a4e877402b27676204c9b882120c8891b1-a82fade1-d142-42f6-8a80-1ee99ae7c098(1a1dbac0418474f69c4e30347c20c5c8).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-45c1ccd03545509334d02ece219966a4e877402b27676204c9b882120c8891b1-a82fade1-d142-42f6-8a80-1ee99ae7c098(1a1dbac0418474f69c4e30347c20c5c8).jpg'

            ],
            [
                'id_good' => 6,
                'image_medium'=>'image_mediummedia-share-0-02-05-5839dc065ffd22076b7dd92d23403a17536f862f8fc70ab433adc79b8670afdd-acd0434b-55c1-4b6f-8312-de2ef219c50b(40cc03a955b407e0e8aaa3a2d69446e9).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-5839dc065ffd22076b7dd92d23403a17536f862f8fc70ab433adc79b8670afdd-acd0434b-55c1-4b6f-8312-de2ef219c50b(40cc03a955b407e0e8aaa3a2d69446e9).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-5839dc065ffd22076b7dd92d23403a17536f862f8fc70ab433adc79b8670afdd-acd0434b-55c1-4b6f-8312-de2ef219c50b(40cc03a955b407e0e8aaa3a2d69446e9).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-5839dc065ffd22076b7dd92d23403a17536f862f8fc70ab433adc79b8670afdd-acd0434b-55c1-4b6f-8312-de2ef219c50b(40cc03a955b407e0e8aaa3a2d69446e9).jpg'

            ],
            [
                'id_good' => 6,
                'image_medium'=>'image_mediummedia-share-0-02-05-44af84c6b682afff785769d1deb036216ef37d70b2065ff09615376ddab3347e-eb1f4099-0103-4578-9279-ff2f4a6a5114(b945af14613c4be0e6aabc13aebc2060).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-44af84c6b682afff785769d1deb036216ef37d70b2065ff09615376ddab3347e-eb1f4099-0103-4578-9279-ff2f4a6a5114(b945af14613c4be0e6aabc13aebc2060).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-44af84c6b682afff785769d1deb036216ef37d70b2065ff09615376ddab3347e-eb1f4099-0103-4578-9279-ff2f4a6a5114(b945af14613c4be0e6aabc13aebc2060).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-44af84c6b682afff785769d1deb036216ef37d70b2065ff09615376ddab3347e-eb1f4099-0103-4578-9279-ff2f4a6a5114(b945af14613c4be0e6aabc13aebc2060).jpg'

            ],
            [
                'id_good' => 6,
                'image_medium'=>'image_mediummedia-share-0-02-05-dbcb6da964b06afd5bec2ae0c1963350faf5310d4df24d0f02e86e62f403050c-7200df48-3329-4a72-acb3-8665af5e7306(ce4a1b67ffecd38fce75bb9aef335f8c).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-dbcb6da964b06afd5bec2ae0c1963350faf5310d4df24d0f02e86e62f403050c-7200df48-3329-4a72-acb3-8665af5e7306(ce4a1b67ffecd38fce75bb9aef335f8c).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-dbcb6da964b06afd5bec2ae0c1963350faf5310d4df24d0f02e86e62f403050c-7200df48-3329-4a72-acb3-8665af5e7306(ce4a1b67ffecd38fce75bb9aef335f8c).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-dbcb6da964b06afd5bec2ae0c1963350faf5310d4df24d0f02e86e62f403050c-7200df48-3329-4a72-acb3-8665af5e7306(ce4a1b67ffecd38fce75bb9aef335f8c).jpg'

            ],

        ]);
    }
}
