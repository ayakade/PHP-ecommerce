<div class="booking-info">
    <div class="row">
        <?php
        foreach ($this->oBookings as $booking)
        {
        ?>
        <div class="booking">
            <h3>Booking #<?=$booking->id?> <?=$booking->accommodation?></h3>
            <div class="row">
                <img src="assets/<?=$booking->image?>" alt="<?=$booking->accommodation?>">

                <table>
                    <tr>
                        <th>Check in</th>
                        <th>Check out</th>
                        <th>Total stay</th>
                        <th>Guest number</th>
                        <th>Subtotal</th>
                        <th>Discount code</th>
                        <th>Discount</th>
                        <th>Tax</th>
                        <th>Total</th>
                        <th>Booking date</th>
                    </tr>

                    <tr>
                        <td><?=$booking->checkin?></td>
                        <td><?=$booking->checkout?></td>
                        <td><?=$booking->totalStay?></td>
                        <td><?=$booking->guestNumber?></td>
                        <td>$<?=$booking->subtotal?></td>
                        <td><?=$booking->code?></td>
                        <td>- $<?=$booking->discount?> (<?=$booking->rate?>% off)</td>
                        <td>$<?=$booking->tax?></td>
                        <td>$<?=$booking->total?></td>
                        <td><?=$booking->bookingProcessedDate?></td>
                    </tr>
                </table>
            </div><!-- .row -->
        </div><!-- .booking -->
        <?php
        }
        ?>
      
        <?=$this->reviewHTML?> 

    </div><!-- .row -->

    <a class="secondary-cta" href="index.php?controller=user&action=bookingList">Go back booking list</a>

</div><!-- .booking-info / user-booking.php -->
