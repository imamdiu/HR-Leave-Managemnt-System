<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
             $table->integer('id');
             $table->string('emp_id')->primary();
             $table->string('name');
             $table->string('email')->nullable();
             $table->string('password')->nullable();
             $table->string('role_id')->nullable()->default(2);
             $table->boolean('status')->nullable()->default(0);
        
             $table->string('department')->nullable();
              $table->string('designation')->nullable();
               $table->string('joining_date')->nullable();
                $table->decimal('emp_leave_enjoy',8,2)->nullable();
                 $table->decimal('emp_leave_balance',8,2)->nullable();
                  $table->string('last_leave_date')->nullable();
                 

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        // DB::statement('UPDATE Table admins add orderid INTEGER NOT NULL;');

        DB::statement('ALTER TABLE `admins` MODIFY `id` INTEGER UNIQUE AUTO_INCREMENT NOT NULL;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
