<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Cell;
use App\Models\CultivationCycle;
use App\Models\Farmer;
use App\Models\PalletLabel;
use App\Models\PalletType;
use App\Models\Status;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class PalletLabelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Useful parameters
        $correctPivotTableTimeStamp = 1;
        $palletlabelAmount = 30;

        $farmerOne = '7a204e95-b805-4124-bebe-ded843ea2973';
        $farmerTwo = '73c07623-1c5d-4573-acdd-7ec8ba6cb00d';

        $WF001KL = 'fc30266d-a156-4ac8-8bb4-a0ec9a6f1598';
        $DKLDK10 = 'fde9cecf-4931-473d-b086-6b20f8096f74';
        $RS300PL = '4e8791d6-b579-471e-8dad-00a29e3826aa';

        // region PalletLabel one
        $palletLabelOne = new PalletLabel();
        $palletLabelOne->id = '56c9a701-68b3-4fa5-826c-0606e7cf140b';
        $palletLabelOne->general_id = 1;
        $palletLabelOne->crop_date = now();
        $palletLabelOne->article_amount = 160;
        $palletLabelOne->note = 'Seeded Pallet Label One';
        $palletLabelOne->pallet_label_farmer_id = 1; //Farmers own incremental number
        $palletLabelOne->cell_number = 1;
        $palletLabelOne->cell_description = 'Cell one';
        $palletLabelOne->harvest_cycle = 1;
        $palletLabelOne->harvest_cycle_day = 1;
        $palletLabelOne
            ->farmer()
            ->associate(
                Farmer::where('id', $farmerOne)->first()
            );
        $palletLabelOne
            ->palletType()
            ->associate(PalletType::first()
            );
        $palletLabelOne
            ->cell()
            ->associate(cell::first());
        $palletLabelOne
            ->article()
            ->associate(
                Article::where('id', $WF001KL)->first()
            );
        $palletLabelOne->made_by = "Admin";
        $palletLabelOne->save();
        // endregion


        // region PalletLabel two
        $palletLabelTwo = new PalletLabel();
        $palletLabelTwo->id = 'd2b27dc7-bbef-4333-8e53-daa432fb1815';
        $palletLabelTwo->general_id = 2;
        $palletLabelTwo->crop_date = now();
        $palletLabelTwo->article_amount = 160;
        $palletLabelTwo->note = 'Seeded Pallet Label Two';
        $palletLabelTwo->pallet_label_farmer_id = 2; //Farmers own incremental number
        $palletLabelTwo->cell_number = 1;
        $palletLabelTwo->cell_description = 'Cell one';
        $palletLabelTwo->harvest_cycle = 1;
        $palletLabelTwo->harvest_cycle_day = 1;
        $palletLabelTwo
            ->farmer()
            ->associate(
                Farmer::where('id', $farmerTwo)->first()
            );
        $palletLabelTwo
            ->palletType()
            ->associate(
                PalletType::first()
            );
        $palletLabelTwo
            ->cell()
            ->associate(
                cell::latest()->first()
            );
        $palletLabelTwo
            ->article()
            ->associate(
                Article::where('id', $WF001KL)->first()
            );
        $palletLabelTwo->made_by = "Admin";
        // endregion

        // region PalletLabel three
        $palletLabelThree = new PalletLabel();
        $palletLabelThree->id = '26592e0d-adab-4f99-b104-8a51994e21de';
        $palletLabelThree->general_id = 3;
        $palletLabelThree->crop_date = now();
        $palletLabelThree->article_amount = 160;
        $palletLabelThree->note = 'Seeded Pallet Label Three';
        $palletLabelThree->pallet_label_farmer_id = 1; //Farmers own incremental number
        $palletLabelThree->cell_number = 1;
        $palletLabelThree->cell_description = 'Cell one';
        $palletLabelThree->harvest_cycle = 1;
        $palletLabelThree->harvest_cycle_day = 1;
        $palletLabelThree
            ->farmer()
            ->associate(
                Farmer::where('id', $farmerTwo)->first()
            );
        $palletLabelThree
            ->palletType()
            ->associate(
                PalletType::first()
            );
        $palletLabelThree
            ->cell()
            ->associate(
                cell::latest()->first()
            );
        $palletLabelThree
            ->article()
            ->associate(
                Article::where('id', $WF001KL)->first()
            );
        $palletLabelThree->made_by = "Admin";
        $palletLabelThree->save();
        // endregion



        // region Factory
        $min = PalletLabel::max('general_id') +1;
        $farmerIds = [
            $farmerOne,
            $farmerTwo
        ];
        $articleIds = [
            $WF001KL,
            $DKLDK10,
            $RS300PL
        ];
        for ($i = $min; $i < $palletlabelAmount; $i++){
            $int= mt_rand(1262055681,1262055681);
            $cellId = rand(1, 14);
            $randomFarmerIndex = array_rand($farmerIds);
            $randomArticleIndex = array_rand($articleIds);
            //echo 'seeding palletlabel for : ' . $farmerIds[$randomFarmerIndex];
            $farmer = Farmer::where('id', $farmerIds[$randomFarmerIndex])->first();
            $farmerPalletLabelId = $farmer->palletLabels()->max('pallet_label_farmer_id') + 1;
            $article = Article::where('id', $articleIds[$randomArticleIndex])->first();

            $palletLabelFactory = new PalletLabel();
            $palletLabelFactory->id = Uuid::uuid4()->toString();
            $palletLabelFactory->general_id = $i;
            $palletLabelFactory->crop_date = '2020-12-12';
            $palletLabelFactory->article_amount = rand(50, 180);
            $palletLabelFactory->note = 'Test - ' . $i . ' Custom factory needs to be replaced';
            $palletLabelFactory->pallet_label_farmer_id = $farmerPalletLabelId; //Farmers own incremental number
            $palletLabelFactory->cell_number = $cellId;
            $palletLabelFactory->cell_description = 'Cell ' . $cellId;
            $palletLabelFactory->harvest_cycle = rand(1, 4);
            $palletLabelFactory->harvest_cycle_day = rand(1, 14);
            $palletLabelFactory
                ->farmer()
                ->associate($farmer);
            $palletLabelFactory
                ->palletType()
                ->associate(
                    PalletType::first()
                );
            $palletLabelFactory
                ->cell()
                ->associate(
                    cell::latest()->first()
                );
            $palletLabelFactory
                ->article()
                ->associate($article);
            $palletLabelFactory->made_by = "Created by automatic factory";

            $palletLabelFactory->save();
        }
        // endregion
    }
}
