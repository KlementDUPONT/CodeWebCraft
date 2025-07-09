<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('contenu');
            $table->string('image')->nullable();
            $table->foreignId('utilisateur_id')->constrained('utilisateurs');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::fropifExists('articles');
    }
}