<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Заказ должен содержать номер, фио, и общую сумму заказа, а так же дату его создания и адрес доставки*/

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("number");   /*ex:AP2543*/
            $table->string("customer_fullname");
            $table->float("total_sum");
            $table->string("shipping_address");
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
        Schema::dropIfExists('orders');
    }
}
