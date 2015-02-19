{"changed":true,"filter":false,"title":"BanksTableSeeder.php","tooltip":"/app/database/seeds/BanksTableSeeder.php","value":"<?php\n\n// Composer: \"fzaninotto/faker\": \"v1.3.0\"\nuse Faker\\Factory as Faker;\n\nclass BanksTableSeeder extends Seeder {\n\n\tpublic function run()\n\t{\n\t\tBank::create([\n\t\t\t\t'id'=>'1',\n\t\t\t\t'name_bank'=>'BBVA BANCOMER',\n\t\t\t\t'number_bank'=>'16'\n\t\t\t\t]);\n\n\t\tBank::create([\n\t\t\t\t'id'=>'2',\n\t\t\t\t'name_bank'=>'BANAMEX',\n\t\t\t\t'number_bank'=>'2'\n\t\t\t\t]);\n\t\t\n\t}\n\n}","undoManager":{"mark":-1,"position":2,"stack":[[{"group":"doc","deltas":[{"start":{"row":9,"column":2},"end":{"row":15,"column":6},"action":"remove","lines":["$faker = Faker::create();","","\t\tforeach(range(1, 10) as $index)","\t\t{","\t\t\tBank::create([","","\t\t\t]);"]}]}],[{"group":"doc","deltas":[{"start":{"row":9,"column":2},"end":{"row":19,"column":7},"action":"insert","lines":["Bank::create([","\t\t\t\t'id'=>'1',","\t\t\t\t'name_bank'=>'BBVA BANCOMER',","\t\t\t\t'number_bank'=>'16'","\t\t\t\t]);","","\t\tBank::create([","\t\t\t\t'id'=>'2',","\t\t\t\t'name_bank'=>'BANAMEX',","\t\t\t\t'number_bank'=>'2'","\t\t\t\t]);"]}]}],[{"group":"doc","deltas":[{"start":{"row":20,"column":2},"end":{"row":20,"column":3},"action":"remove","lines":["}"]}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":20,"column":2},"end":{"row":20,"column":2},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1424380291000}