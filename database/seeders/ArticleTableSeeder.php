<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleGroup;
use App\Models\Cask;
use App\Models\Inset;
use App\Models\PalletType;
use App\Models\SortType;
use App\Models\Status;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //region Article One
        $articleOne = new Article();
        $articleOne->id = 'fc30266d-a156-4ac8-8bb4-a0ec9a6f1598';
        $articleOne->excel_code = 'WF001KL';
        $articleOne->inset_gram = '150';
        $articleOne->inset_limit = '4';
        $articleOne->pallet_limit = '160';
        $articleOne->origin = 'BE';
        $articleOne->palletType()->associate(PalletType::where("name", "DPA")->first());
        $articleOne->cask()->associate(Cask::first());
        $articleOne->inset()->associate(Inset::first());
        $articleOne->articleGroup()->associate(ArticleGroup::first());
        $articleOne->sortType()->associate(SortType::first());
        $articleOne->save();
        //endregion


        //region Article Two
        $articleTwo = new Article();
        $articleTwo->id = 'fde9cecf-4931-473d-b086-6b20f8096f74';
        $articleTwo->excel_code = 'DKLDK10';
        $articleTwo->inset_gram = '140';
        $articleTwo->inset_limit = '5';
        $articleTwo->pallet_limit = '180';
        $articleTwo->origin = 'NL';
        $articleTwo->palletType()->associate(PalletType::where("name", "Euro")->first());
        $articleTwo->cask()->associate(Cask::first());
        $articleTwo->inset()->associate(Inset::first());
        $articleTwo->articleGroup()->associate(ArticleGroup::find('4d4b3dca-69c5-4eb0-876b-59a463f05d79'));
        $articleTwo->sortType()->associate(SortType::find('f1a2807c-33e1-40c6-b75e-237ee3513e8f'));
        $articleTwo->save();
        //endregion


        //region Article Two
        $articleThree = new Article();
        $articleThree->id = '4e8791d6-b579-471e-8dad-00a29e3826aa';
        $articleThree->excel_code = 'RS300PL';
        $articleThree->inset_gram = '150';
        $articleThree->inset_limit = '6';
        $articleThree->pallet_limit = '170';
        $articleThree->origin = 'PL';
        $articleThree->palletType()->associate(PalletType::where("name", "Plastic")->first());
        $articleThree->cask()->associate(Cask::first());
        $articleThree->inset()->associate(Inset::first());
        $articleThree->articleGroup()->associate(ArticleGroup::find('6785a76f-1df9-4f5b-b031-ff5be444b747'));
        $articleThree->sortType()->associate(SortType::find('c4898d66-b780-4cb7-ad95-7628a19a191d'));
        $articleThree->save();
        //endregion
    }
}
