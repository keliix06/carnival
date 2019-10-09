<style>
    body, html {
        font-family: "Nunito", sans-serif;
    }

    .auction-sheets {
        background: url("/img/bid.png") no-repeat;
        background-size: 100% 100%;
        position: relative;
        height: 40rem;
    }

    .text-dark-red {
        color: #9e0b07;
    }

    .text-purple {
        color: #9400D3;
    }

    .text-center {
        text-align: center;
    }

    .title {
        width: 50%;
        margin: 0 auto;
        background-color: #fff;
        border-radius: 4px;
        padding: .25rem;
        position: relative;
        top: 3rem;
    }

    .marquee {
        position: relative;
        top: 7rem;
        width: 60%;
        margin: 0 auto;
        height: 15rem;
    }

    table, th, td {
        border: 1px solid black;
    }
    td {
        height: 32px;
    }
</style>

@foreach ($items as $item)
    <div style="page-break-before: always; text-align: center">
        <h1 class="text-purple" style="padding: .25rem;">2019 EDW Silent Auction presents:</h1>

        <div class="auction-sheets">
            <div class="title">
                <h1 class="text-purple">#{{ $item->item_number }} - {{ $item->name }}</h1>
            </div>

            <div class="marquee text-center">
                <h2 class="text-purple">Value: ${{ $item->estimated_value }}</h2>
                <h4>{{ $item->description }}</h4>
            </div>
        `</div>

        <div class="donation">
            <h3>Generously Donated By:</h3>
            <h3 class="text-purple">{{ $item->donor->name }}</h3>
        </div>

        <h4 style="color: #666; position:absolute; bottom: 1rem; left: 0; right: 0">Thank you for attending. Bidding concludes at 8:00 pm!</h4>
    </div>

    <div style="page-break-before: always">
        <h1 class="text-center text-purple">#{{ $item->item_number }} - {{ $item->name }}</h1>
        <h2 class="text-center">
            BIDDING CONCLUDES AT 8:00 pm<br>
            CREDIT CARDS, CASH, & CHECK ARE ACCEPTED.
        </h2>
        <table style="width: 100%;">
            <thead>
            <tr>
                <th>BIDDER NUMBER</th>
                <th>BIDDER AMOUNT</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>
    </div>
@endforeach
