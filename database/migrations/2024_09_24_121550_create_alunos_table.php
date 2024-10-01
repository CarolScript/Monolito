<?php
Schema::create('alunos', function (Blueprint $table) {
    $table->id();
    $table->string('nome');
    $table->string('email')->unique();
    $table->timestamps();
});