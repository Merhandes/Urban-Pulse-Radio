<?php

use App\Models\setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key'=>'_site_name',
            'label'=>'Judul Situs',
            'value'=>'UrbanPulse Radio',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_location',
            'label'=>'Alamat Kantor',
            'value'=>'Jalan Scientia Boulevard Gading, Curug Sangereng, Serpong, Kabupaten Tangerang, Banten 15810',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_youtube',
            'label'=>'Youtube',
            'value'=>'https://www.youtube.com/channel/UCI2QhUJKMHPYgm-wfr_IZdQ',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_instagram',
            'label'=>'Instagram',
            'value'=>'https://www.instagram.com/merhandesgunawan/',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_twitter',
            'label'=>'Twitter',
            'value'=>'https://twitter.com/merhandes',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_facebook',
            'label'=>'Facebook',
            'value'=>'https://www.facebook.com/merhandes.gunawan.7/',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_site_description',
            'label'=>'Site Description',
            'value'=>'Website ini dibuat untuk keperluan oprec umn radio gen 13',
            'type'=>'text',
        ]);


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
