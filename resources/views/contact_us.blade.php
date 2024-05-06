@extends('layouts.main')
@section('title', 'Clickpoint')

@section('content')
    <div class="container table-container">
        <h2>Contact Information</h2>
        <table class="table mt-4">
            <thead>
            <tr>
                <th scope="col">Type</th>
                <th scope="col">Contact Detail</th>
                <th scope="col">Opening Hours</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Phone</td>
                <td>+1 234 567 890</td>
                <td>Monday: 9-17</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>contact@clickpoint.com</td>
                <td>Tuesday: 9-17</td>
            </tr>
            <tr>
                <td>Address</td>
                <td>123 ClickPoint Blvd, Tech City</td>
                <td>Wednesday: 9-17</td>
            </tr>
            <tr>
                <td>Twitter</td>
                <td>@ClickPointTech</td>
                <td>Thursday: 9-17</td>
            </tr>
            <tr>
                <td>Instagram</td>
                <td>@ClickPointTech</td>
                <td>Friday: 9-17</td>
            </tr>
            <tr>
                <td>Facebook</td>
                <td>ClickPointTech</td>
                <td>Weekend: CLOSED</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection



