<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;

    class AddActiveColumnToUserFiles extends Migration
    {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::table('user_files', function (Blueprint $table) {
                $table->boolean('active')->default(TRUE);
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::table('user_files', function (Blueprint $table) {
                $table->dropColumn('active');
            });
        }

    }
