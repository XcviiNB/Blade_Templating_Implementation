@extends('landing')

@section('content')

    <h1 align="center">Categories</h1>
    <div class="container">
        <table class="table table-bordered table-hover border-success" style="width: 68%" align="center">
            <thead class="bg-primary text-center">
                <tr>
                    <th>B2B Sales</th>
                    <th>B2C Sales</th>
                    <th>Enterprise Sales</th>
                    <th>SaaS Sales</th>
                    <th>Direct Sales</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td>Alibaba</td>
                    <td>Coca Cola</td>
                    <td>CDR King</td>
                    <td>Big Commerce</td>
                    <td>Scentsy</td>
                </tr>
                <tr>
                    <td>General Electric</td>
                    <td>Apple</td>
                    <td>Microsoft</td>
                    <td>Zendesk</td>
                    <td>Arbonne</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
