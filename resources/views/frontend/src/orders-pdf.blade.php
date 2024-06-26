<style>
    /*------ Tables -----*/
    .table,
    .text-wrap table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 1rem;
    }

    .table th {
        padding: 0.75rem;
        vertical-align: top;
    }

    .text-wrap table th,
    .text-wrap table td {
        padding: 0.75rem;
        vertical-align: top;
    }

    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 0;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 1px solid #eaedf1;
        border-bottom-width: 1px;
        border-top: 0;
        padding: 0.75rem;
    }

    .text-wrap table thead th {
        vertical-align: bottom;
        border-bottom: 1px solid #eaedf1;
        border-bottom-width: 1px;
        padding-top: .5rem;
        padding-bottom: .5rem;
    }

    .table tbody+tbody,
    .text-wrap table tbody+tbody {
        border-top: 2px solid #eaedf1;
    }

    .table .table,
    .text-wrap table .table,
    .table .text-wrap table {
        background-color: #f1f1f9;
    }

    .text-wrap .table table,
    .text-wrap table table {
        background-color: #f1f1f9;
    }

    .table-sm th,
    .table-sm td {
        padding: 0.3rem;
    }

    .table-bordered,
    .text-wrap table,
    .table-bordered th,
    .text-wrap table th,
    .table-bordered td,
    .text-wrap table td {
        border: 1px solid #eaedf1;
    }

    .table-bordered thead th,
    .text-wrap table thead th,
    .table-bordered thead td,
    .text-wrap table thead td {
        border-bottom-width: 1px;
    }

    .table-borderless th,
    .table-borderless td,
    .table-borderless thead th,
    .table-borderless tbody+tbody {
        border: 0;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.02);
    }

    .table-hover tbody tr:hover,
    .table-hover tbody th {
        background-color: #f1f1f9;
    }

    .table-primary {
        background-color: #d2cdf9;
    }

    .table-primary>th,
    .table-primary>td {
        background-color: #d2cdf9;
    }

    .table-hover .table-primary:hover {
        background-color: #b7cded;
    }

    .table-hover .table-primary:hover>td,
    .table-hover .table-primary:hover>th {
        background-color: #b7cded;
    }

    .table-secondary {
        background-color: #fdccdb;
    }

    .table-secondary>th,
    .table-secondary>td {
        background-color: #fdccdb;
    }

    .table-hover .table-secondary:hover {
        background-color: #cfd2d6;
    }

    .table-hover .table-secondary:hover>td,
    .table-hover .table-secondary:hover>th {
        background-color: #cfd2d6;
    }

    .table-success {
        background-color: #d2ecb8;
    }

    .table-success>th,
    .table-success>td {
        background-color: #d2ecb8;
    }

    .table-hover .table-success:hover {
        background-color: #c5e7a4;
    }

    .table-hover .table-success:hover>td,
    .table-hover .table-success:hover>th {
        background-color: #c5e7a4;
    }

    .table-info {
        background-color: #cbe7fb;
    }

    .table-info>th,
    .table-info>td {
        background-color: #cbe7fb;
    }

    .table-hover .table-info:hover {
        background-color: #b3dcf9;
    }

    .table-hover .table-info:hover>td,
    .table-hover .table-info:hover>th {
        background-color: #b3dcf9;
    }

    .table-warning {
        background-color: #f1d5a7;
    }

    .table-warning>th,
    .table-warning>td {
        background-color: #f1d5a7;
    }

    .table-hover .table-warning:hover {
        background-color: #fae8a4;
    }

    .table-hover .table-warning:hover>td,
    .table-hover .table-warning:hover>th {
        background-color: #fae8a4;
    }

    .table-danger {
        background-color: #f1c1c0;
    }

    .table-danger>th,
    .table-danger>td {
        background-color: #f1c1c0;
    }

    .table-hover .table-danger:hover {
        background-color: #ecacab;
    }

    .table-hover .table-danger:hover>td,
    .table-hover .table-danger:hover>th {
        background-color: #ecacab;
    }

    .table-light {
        background-color: #fdfdfe;
    }

    .table-light>th,
    .table-light>td {
        background-color: #fdfdfe;
    }

    .table-hover .table-light:hover {
        background-color: #ececf6;
    }

    .table-hover .table-light:hover>td,
    .table-hover .table-light:hover>th {
        background-color: #ececf6;
    }

    .table-dark {
        background-color: #c6c8ca;
    }

    .table-dark>th,
    .table-dark>td {
        background-color: #c6c8ca;
    }

    .table-hover .table-dark:hover {
        background-color: #b9bbbe;
    }

    .table-hover .table-dark:hover>td,
    .table-hover .table-dark:hover>th {
        background-color: #b9bbbe;
    }

    .table-active {
        background-color: rgba(0, 0, 0, 0.04);
    }

    .table-active>th,
    .table-active>td {
        background-color: rgba(0, 0, 0, 0.04);
    }

    .table-hover .table-active:hover {
        background-color: rgba(0, 0, 0, 0.04);
    }

    .table-hover .table-active:hover>td,
    .table-hover .table-active:hover>th {
        background-color: rgba(0, 0, 0, 0.04);
    }

    .table .thead-dark th,
    .text-wrap table .thead-dark th {
        color: #f1f1f9;
        background-color: #212529;
        border-color: #32383e;
    }

    .table .thead-light th,
    .text-wrap table .thead-light th {
        color: #495057;
        background-color: #f1f1f9;
        border-color: #eaedf1;
    }

    .table-dark {
        color: #f1f1f9;
        background-color: #212529;
    }

    .table-dark th,
    .table-dark td,
    .table-dark thead th {
        border-color: #32383e;
    }

    .table-dark.table-bordered {
        border: 0;
    }

    .text-wrap table.table-dark {
        border: 0;
    }

    .table-dark.table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(255, 255, 255, 0.05);
    }

    .table-dark.table-hover tbody tr:hover {
        background-color: rgba(255, 255, 255, 0.075);
    }

    @media (max-width: 575.98px) {
        .table-responsive-sm {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar;
        }

        .table-responsive-sm>.table-bordered {
            border: 0;
        }

        .text-wrap .table-responsive-sm>table {
            border: 0;
        }
    }

    @media (max-width: 767.98px) {
        .table-responsive-md {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar;
        }

        .table-responsive-md>.table-bordered {
            border: 0;
        }

        .text-wrap .table-responsive-md>table {
            border: 0;
        }
    }

    @media (max-width: 991.98px) {
        .table-responsive-lg {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar;
        }

        .table-responsive-lg>.table-bordered {
            border: 0;
        }

        .text-wrap .table-responsive-lg>table {
            border: 0;
        }
    }

    @media (max-width: 1279.98px) {
        .table-responsive-xl {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar;
        }

        .table-responsive-xl>.table-bordered {
            border: 0;
        }

        .text-wrap .table-responsive-xl>table {
            border: 0;
        }
    }

    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }

    .table-responsive>.table-bordered {
        border: 0;
    }

    .text-wrap .table-responsive>table {
        border: 0;
    }

    .table-inbox {
        border: 1px solid #eaedf1;
        margin-bottom: 0;
    }

    .table-inbox tr {
        border-bottom: 1px solid rgba(238, 238, 238, 0.7);
    }

    .table-inbox tr:last-child {
        border-bottom: 1px solid #eaedf1;
    }

    .table-inbox tr td {
        padding: 12px !important;
    }

    .table-inbox tr td:hover {
        cursor: pointer;
    }

    .table-inbox tr td .fa-star.inbox-started,
    .table-inbox tr td .fa-star:hover {
        color: #f78a09;
    }

    .table-inbox tr.unread td {
        background: #f5f6fb;
        font-weight: 500;
    }

    .table th,
    .text-wrap table th {
        color: #2e3138;
        text-transform: uppercase;
        font-size: 0.875rem;
        font-weight: 400;
    }

    .table-md th,
    .table-md td {
        padding: .5rem;
    }

    .table-vcenter td,
    .table-vcenter th {
        vertical-align: middle;
        border-top: 1px solid #eaedf1;
    }

    .table-secondary tbody+tbody,
    .table-secondary td,
    .table-secondary th,
    .table-secondary thead th {
        border-color: rgba(255, 255, 255, 0.2);
    }

    .table-primary tbody+tbody,
    .table-primary td,
    .table-primary th,
    .table-primary thead th {
        border-color: rgba(255, 255, 255, 0.2);
    }

    .table-center td,
    .table-center th {
        text-align: center;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background: transparent;
    }

    .table-striped tbody tr:nth-of-type(even) {
        background-color: #f5f6fb;
    }

    .table-calendar {
        margin: 0 0 .75rem;
    }

    .table-calendar td,
    .table-calendar th {
        border: 0;
        text-align: center;
        padding: 0 !important;
        width: 14.28571429%;
        line-height: 2.5rem;
    }

    .table-calendar td {
        border-top: 0;
    }

    .table-calendar-link {
        line-height: 2rem;
        min-width: calc(2rem + 2px);
        display: inline-block;
        border-radius: 3px;
        background: #f8f9fa;
        color: #495057;
        font-weight: 600;
        transition: .3s background, .3s color;
        position: relative;
    }

    .table-calendar-link:before {
        content: '';
        width: 4px;
        height: 4px;
        position: absolute;
        left: .25rem;
        top: .25rem;
        border-radius: 50px;
        background: #467fcf;
    }

    .table-calendar-link:hover {
        color: #fff;
        text-decoration: none;
        background: #467fcf;
        transition: .3s background;
    }

    .table-calendar-link:hover:before {
        background: #fff;
    }

    .table-header {
        cursor: pointer;
        transition: .3s color;
    }

    .table-header:hover {
        color: #495057 !important;
    }

    .table-header:after {
        content: '\f0dc';
        font-family: FontAwesome;
        display: inline-block;
        margin-left: .5rem;
        font-size: .75rem;
    }

    .table-header-asc {
        color: #495057 !important;
    }

    .table-header-asc:after {
        content: '\f0de';
    }

    .table-header-desc {
        color: #495057 !important;
    }

    .table-header-desc:after {
        content: '\f0dd';
    }

    table {
        border-collapse: collapse;
    }

    .table> :not(:last-child)> :last-child>* {
        border-bottom-color: #eaedf1;
    }

    .table> :not(caption)>*>* {
        background: transparent;
        box-shadow: none;
        border-bottom-width: inherit;
    }

    @media (min-width: 768px) {
        .table-responsive.export-table .dt-buttons.btn-group {
            position: absolute;
            top: 0;
            left: 172px;
        }

        .table-responsive.deleted-table .data-table-btn {
            position: absolute;
            left: 185px;
            z-index: 1;
        }
    }

</style>
@foreach($orders as $key => $order)
{{--    <div style="display: inline-block; margin-right: 30px; border: 1px solid black; padding: 20px">--}}
{{--        <div style="display: flex; flex-direction: column">--}}
{{--            <h2 style="padding: 5px; margin: 5px; text-align: center">Order {{$key+1}} info</h2><br>--}}
{{--            <span style="padding: 5px; margin: 5px"><b>Tickets for: </b>{{$order->ticket->title}}</span><br>--}}
{{--            <span style="padding: 5px; margin: 5px"><b>Ticket Price: </b>${{$order->ticket->price}}</span><br>--}}
{{--            <span style="padding: 5px; margin: 5px"><b>Number of tickets: </b>{{$order->quantity}}</span><br>--}}
{{--            <span style="padding: 5px; margin: 5px"><b>Total Price: </b>${{$order->quantity * $order->ticket->price}}</span><br>--}}
{{--            <span style="padding: 5px; margin: 5px"><b>Ticket Date: </b><br>{{$order->ticket->date}}</span><br>--}}
{{--            <span style="padding: 5px; margin: 5px"><b>Ticket Description: </b><br>{{$order->ticket->description}}</span><br>--}}
{{--        </div>--}}
{{--    </div>--}}
<br><hr><br>
<table class="myTables table table-bordered text-wrap mb-0">
        <thead>
        <th>Order ID:</th>
        <th>Ticket Title:</th>
        <th>Ticket Price:</th>
        <th>Number of tickets:</th>
        <th>Total Price:</th>
        <th>Date:</th>
        <th>Description</th>
        </thead>
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$order->ticket->title}}</td>
            <td>${{$order->ticket->price}}</td>
            <td>{{$order->quantity}}</td>
            <td>${{$order->quantity * $order->ticket->price}}</td>
            <td>{{date('h:i A - d/m/Y', strtotime($order->ticket->date))}}</td>
            <td>{{$order->ticket->description}}</td>
        </tr>
    </table><br>
<hr><br>
@endforeach

