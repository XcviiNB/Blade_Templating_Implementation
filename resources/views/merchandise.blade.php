@extends('landing')

@section('content')
    <h1 align="center">Merchandises</h1>
    <div class="container">
        <table class="table table-bordered table-hover border-success" style="width: 65%" align="center">
            <thead class="bg-primary text-center">
                <tr>
                    <th>Retail</th>
                    <th>Visual</th>
                    <th>Digital</th>
                    <th>Omnichannel</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>Clothing Accessories</td>
                    <td>Dressed Mannequins</td>
                    <td>Software Programs</td>
                    <td>Amazon</td>
                </tr>
                <tr class="text-center">
                    <td>Electronic Hardware</td>
                    <td>Fresh Fruits</td>
                    <td>Online Courses and Webinars</td>
                    <td>Shoppee</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
