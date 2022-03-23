<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

use App\Order;
use App\OrderDetail;

class NewOrderAdmin extends Notification implements ShouldQueue
{
    use Queueable;
    public $order;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
      $products = OrderDetail::join('products','products.id','order_details.product_id')
                  ->where('order_details.order_id',$this->order->id)->get(array('products.title','products.img1','order_details.product_qty','order_details.product_price','order_details.total_price'));
        return (new MailMessage)
                    ->subject('New Order Placed #'.$this->order->tracking_no)
                    ->view('emails.neworderadmin',[
                      'order_details' => $this->order,
                      'products' => $products
                    ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
