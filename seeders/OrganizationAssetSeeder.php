<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrganizationAssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTime = Carbon::now();
        $data = [
            [
                'organization_id' => 2,
                'asset_type_id' => 1,
                'file' => 'organization_assets/logo/aeces_logo.png',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
                'status' => 1,
            ],
            [
                'organization_id' => 3,
                'asset_type_id' => 1,
                'file' => 'organization_assets/logo/cs_logo.png',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
                'status' => 1,
            ],
            [
                'organization_id' => 4,
                'asset_type_id' => 1,
                'file' => 'organization_assets/logo/jma_logo.png',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
                'status' => 1,
            ],
            [
                'organization_id' => 5,
                'asset_type_id' => 1,
                'file' => 'organization_assets/logo/jpia_logo.png',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
                'status' => 1,
            ],
            [
                'organization_id' => 6,
                'asset_type_id' => 1,
                'file' => 'organization_assets/logo/jpmap_logo.png',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
                'status' => 1,
            ],
            [
                'organization_id' => 7,
                'asset_type_id' => 1,
                'file' => 'organization_assets/logo/jpsme_logo.png',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
                'status' => 1,
            ],
            [
                'organization_id' => 8,
                'asset_type_id' => 1,
                'file' => 'organization_assets/logo/mentors_logo.png',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
                'status' => 1,
            ],
            [
                'organization_id' => 9,
                'asset_type_id' => 1,
                'file' => 'organization_assets/logo/pasoa_logo.png',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
                'status' => 1,
            ],
            // ADDITIONAL DEFAULT LOGO from non acad orgs -jiones
            [
                'organization_id' => 10,
                'asset_type_id' => 1,
                'file' => 'organization_assets/logo/default_logo.png',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
                'status' => 1,
            ],
            [
                'organization_id' => 11,
                'asset_type_id' => 1,
                'file' => 'organization_assets/logo/default_logo.png',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
                'status' => 1,
            ],
            [
                'organization_id' => 12,
                'asset_type_id' => 1,
                'file' => 'organization_assets/logo/default_logo.png',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
                'status' => 1,
            ],
            [
                'organization_id' => 13,
                'asset_type_id' => 1,
                'file' => 'organization_assets/logo/default_logo.png',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
                'status' => 1,
            ],
            [
                'organization_id' => 14,
                'asset_type_id' => 1,
                'file' => 'organization_assets/logo/default_logo.png',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
                'status' => 1,
            ],
            // logo
            [
                'organization_id' => 1,
                'asset_type_id' => 1,
                'file' => 'organization_assets/logo/pup_logo.png',
                'asset_name' => 'organization_assets/logo/pup_logo.png',
                'is_latest_logo' => '1',
                'is_latest_banner' => '0',
                'user_id' => '1',
                'page_type_id' => '4',
                'status' => '1',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'organization_id' => 16,
                'asset_type_id' => 1,
                'file' => 'organization_assets/logo/chronicler.png',
                'asset_name' => 'organization_assets/logo/chronicler.png',
                'is_latest_logo' => '1',
                'is_latest_banner' => '0',
                'user_id' => '1',
                'page_type_id' => '4',
                'status' => '1',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'organization_id' => 10,
                'asset_type_id' => 1,
                'file' => 'organization_assets/logo/csc.png',
                'asset_name' => 'organization_assets/logo/csc.png',
                'is_latest_logo' => '1',
                'is_latest_banner' => '0',
                'user_id' => '1',
                'page_type_id' => '4',
                'status' => '1',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
        ];
        DB::table('organization_assets')->insert($data);
    }
}
