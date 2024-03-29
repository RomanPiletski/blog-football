<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{

    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => '"Ливерпуль" - "Челси": Анонс матча',
                'slug' => 'liverpulь-chelsi-anons-i-prognoz-matcha',
                "description" => '29.06.2022 18:30. Стадион "Уэмбли"<br>Кубок английской Лиги. Финал',
                'content' => 'В воскресенье вечером в Кубке английской Лиги состоится финальный матч, в котором встретятся "Челси" и "Ливерпуль". "Красные" параллельно устроили гонку за "Манчестер Сити" в чемпионате страны, а вот "синие" уже вряд ли могут рассчитывать на первое место. Даже если они выиграют перенесённый матч, всё равно будут отставать от команды Гвардиолы на десяток очков. Означает ли это, что "Челси" будет больше мотивирован на финал, чтобы выиграть в сезоне "хоть что-то"? Очевидно, что нет - "Ливерпулю" также интересно победить заклятого соперника. Между прочим, любопытно, что в последние годы бессменным триумфатором КЛ был именно "МанСити", выигравший четыре трофея подряд (а также пять из шести и шесть из восьми последних розыгрышей). Но на этот раз "голубую луну" отцепили ещё в 1/8 финала.',
                'category_id' => 3,
                'user_id' => 1,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 0,
                "created_at" => "2022-06-23 08:02:51",
                "image" => "uploads/ins-1.jpg"
            ],
            [
                'title' => '"Молодечно-2018" проведет спарринг с дублем "Динамо"',
                'slug' => 'molodechno-2018-provedet-sparring-s-dublem-dinamo',
                "description" => "На сегодня у команды Сергея Дороховича именно такие планы, поскольку согласно жеребьевке она пропускает 15-й тур первой лиги.",
                'content' => 'Поэтому 18 августа у "зелено-белых" на повестке дня контрольный матч с дублерами "Динамо". Он пройдет на стадионе "Динамо-Юни" (20.00). А игровая программа первой лиги возобновится для "Молодечно" на следующей неделе — выездным поединком с "Волной".',
                'category_id' => 5,
                'user_id' => 2,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 15,
                "created_at" => "2022-08-17 08:02:51",
                "image" => "uploads/dins-1.jpg"
            ],
            [
                'title' => 'Каземиро может перейти в "Манчестер Юнайтед"',
                'slug' => 'kazemiro-mozhet-perejti-v-manchester-yunajted',
                'description' => 'Бразильский опорный полузащитник мадридского "Реала" Каземиро может продолжить карьеру в "Манчестер Юнайтед".',
                'content' => 'Бразилец допускает вариант с трансфером в клуб из Манчестера, сообщает Marca.<br>30-летний игрок оценивает ситуацию в "МЮ" и анализирует, сможет ли клуб быстро исправить текущую проблемную ситуацию.',
                'category_id' => 3,
                'user_id' => 1,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 23,
                "created_at" => "2022-08-15 08:34:51",
                "image" => "uploads/dins-2.jpg"
            ],
            [
                'title' => 'Белорусская бригада судей во главе с Кульбаковым рассудят "Вильярреал" и "Хайдук" в плей-офф Лиги конференций',
                'slug' => 'belorusskaya-brigada-sudej-vo-glave-s-kulьbakovym-rassudyat-vilьyarreal-i-hajduk-v-plej-off-ligi-konferencij',
                'description' => 'Белорусская бригада арбитров во главе с Алексеем Кульбаковым получила назначении на первый матч плей-офф Лиги конференций между испанским "Вильярреалом" и хорватским "Хайдуком".',
                'content' => 'Помогать соотечественнику на линиях будут Дмитрий Жук и Олег Маслянко. Четвертый судья - Виктор Шимусик.<br> Матч "Вильярреал" - "хайдук" пройдет в четверг, 18 августа.',
                'category_id' => 5,
                'user_id' => 2,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 3,
                "created_at" => "2022-05-04 08:02:51",
                "image" => "uploads/ins-4.jpg"
            ],
            [
                'title' => 'Лионель Месси о "Золотом мяче": "Всем очевидно, что Карим Бензема провел потрясающий сезон"',
                'slug' => 'lionelь-messi-o-zolotom-myache-vsem-ochevidno-chto-karim-benzema-provel-potryasayushij-sezon',
                'description' => 'Действующий обладатель "Золотого мяча", 34-летний форвард "ПСЖ" и сборной Аргентины" Лионель Месси считает, что в 2022 году награду должен получить французский нападающий мадридского "Реала" Карим Бензема.',
                'content' => 'Издание France Football не включило аргентинца даже в топ-30 претендентов на награду. Для Месси это не явилось трагедией. Тем более, он уже знает имя победителя.<br>"Думаю, в этом году не будет никаких сомнений. Всем очевидно, что Карим Бензема провел потрясающий сезон", – цитирует Месси El ONCE со ссылкой на TyC Sports.<br>Напомним, что Лионель Месси семь раз выигрывал "Золотой мяч". Это рекордный показатель. Прошлым летом аргентинец перебрался в ПСЖ, где не смог поддерживать показатели результативности, которые демонстрировал в Барселоне.',
                'category_id' => 6,
                'user_id' => 1,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 56,
                "created_at" => "2022-08-18 10:02:51",
                "image" => "uploads/dins-3.jpg"
            ],
            [
                'title' => 'Инопланетный волшебник: Месси - 35 лет!',
                'slug' => 'lionelyu-messi-35-let',
                "description" => "Форварду «ПСЖ» Лионелю Месси исполнилось 35 лет",
                'content' => 'Сегодня, 24 июня, нападающий «ПСЖ» Лионель Месси празднует свой день рождения. Аргентинцу исполнилось 35 лет.<br>
                В прошедшем сезоне 35-летний аргентинец забил 11 мячей и отдал 15 результативных передач в 34 матчах за «ПСЖ» во всех турнирах.<br>
                Ранее футболист выступал за «Барселону», в составе которой десять раз выиграл чемпионат Испании, четырежды — Лигу чемпионов. Шесть раз он становился обладателем Кубка Испании, восемь раз — Суперкубка страны. Трижды он выигрывал Суперкубок УЕФА и клубный чемпионат мира. В каталонском клубе он провел 19 лет, после чего перешел в «ПСЖ» летом 2021 года.<br><br>
                Месси также является олимпийским чемпионом 2008 года в составе сборной Аргентины. Вместе с командой он трижды занимал второе место на Кубке Америки, стал вице-чемпионом мира-2014. Он также шестикратный обладатель «Золотого мяча» и считается одним из лучших игроков в истории футбола.',
                'category_id' => 2,
                'user_id' => 1,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 0,
                "created_at" => "2022-06-24 13:02:51",
                "image" => "uploads/ins-9.jpg",
            ],
            [
                'title' => 'Мбаппе: ПСЖ хочет выиграть Лигу чемпионов',
                'slug' => 'mbappe-pszh-hochet-vyigrat-ligu-chempionov',
                "description" => "Нападающий ПСЖ Килиан Мбаппе рассказал о целях, которых он хочет добиться вместе с парижским клубом.",
                'content' => '- Мои основные цели — выиграть Лигу чемпионов и стать лучшим бомбардиром в истории ПСЖ? У меня намного больше целей, но эти две — в моем списке. Победа в Лиге чемпионов — это очевидная задача. Мы хотим этого и знаем, что способны на это. При этом, мы должны стать безоговорочно лучшими во Франции, потому что в двух предыдущих сезонах ситуация была другой. Мы должны стать непобедимыми на национальном уровне, чтобы вопрос о том, кто выиграет чемпионат, даже не поднимался, пусть из-за этого и пропадет интрига. Нам нужно добиться этого и попытаться покорить Европу. Лучший бомбардир в истории ПСЖ? Думаю, мне это по силам. Если я добьюсь этого, то будет здорово. Если я буду продолжать в том же духе, то не вижу причин, почему я не стану лучшим бомбардиром клуба, — цитирует Мбаппе BFMTV.',
                'category_id' => 2,
                'user_id' => 2,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 0,
                "created_at" => "2022-06-27 14:02:51",
                "image" => "uploads/ins-10.jpg",
            ],
        ]);
    }
}
