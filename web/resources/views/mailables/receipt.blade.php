<p>{{ $participant->name }},</p>

<p>Thank you so much for your generous contribution to the EDW PTA!</p>
<p>This email serves as a receipt for your winning bids at our silent auction.</p>
<p>If you have not picked up your items yet, you can pick them up in the main office at school.</p>

<p>Your Items</p>
<ul>
    @foreach($participant->wonItems() as $item)
        <li>{{ $item->item->name }} - ${{ $item->price / 100 }}</li>
    @endforeach
</ul>

<p>Total: ${{ $participant->total() }}</p>

@if($participant->hasPaid())
    <p>You have already paid for these items. There is no amount due.</p>
@else
    <p>Amount Due: {{ $participant->total() }}</p>
@endif
