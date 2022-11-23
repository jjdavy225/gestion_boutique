<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovisionnementArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approvisionnement_article', function (Blueprint $table) {
            $table->id();
            $table->foreignId('approvisionnement_id')->constrained()
                ->restrictOnDelete()->restrictOnUpdate();
            $table->foreignId('article_id')->constrained()
                ->restrictOnDelete()->restrictOnUpdate();
            $table->integer('quantite');
            $table->double('prix_achat_unitaire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('approvisionnement_article');
    }
}
